<?php
declare(strict_types=1);

namespace Near\JsonRpc\Models;

/** Converts JSON-compatible payloads to generated nested model instances. */
final class ModelHydrator
{
    /** @return array<string,mixed> */
    public static function decodeJsonObject(string $json): array
    {
        try { $decoded=json_decode($json,false,512,JSON_THROW_ON_ERROR|JSON_BIGINT_AS_STRING); }
        catch (\JsonException $e) { throw new \InvalidArgumentException('Invalid model JSON.',0,$e); }
        if (!$decoded instanceof \stdClass) throw new \InvalidArgumentException('Model JSON must be an object.');
        return get_object_vars($decoded);
    }

    public static function decodeJsonValue(string $json): mixed
    {
        try { $decoded = json_decode($json, false, 512, JSON_THROW_ON_ERROR | JSON_BIGINT_AS_STRING); }
        catch (\JsonException $e) { throw new \InvalidArgumentException('Invalid model JSON.', 0, $e); }
        return $decoded instanceof \stdClass ? $decoded : self::normalizeJsonValue($decoded);
    }

    /** Convert a hydrated value into lossless JSON encoder values using its schema. */
    public static function normalizeForJson(mixed $value, array $schema, string $path = 'value'): mixed
    {
        if (($schema['nullable'] ?? false) === true && $value === null) return null;
        if (($schema['jsonObject'] ?? false) === true || isset($schema['phpClass']) || isset($schema['phpEnum'])) return $value;

        if (isset($schema['oneOf']) || isset($schema['anyOf'])) {
            $composition = isset($schema['oneOf']) ? 'oneOf' : 'anyOf';
            $matches = [];
            foreach ($schema[$composition] as $index => $branch) {
                try { TypeGuard::assert($value, $branch, $path); $matches[$index] = $branch; }
                catch (\InvalidArgumentException) {}
            }
            if ($matches === [] || ($composition === 'oneOf' && count($matches) !== 1)) {
                throw new \InvalidArgumentException("Value at {$path} does not match its {$composition} schema.");
            }
            return self::normalizeForJson($value, $matches[array_key_first($matches)], $path);
        }

        if (($schema['type'] ?? null) === 'integer' && is_string($value)) {
            TypeGuard::assert($value, $schema, $path);
            return new JsonNumber($value);
        }
        if (($schema['type'] ?? null) === 'array' && is_array($value) && isset($schema['items'])) {
            foreach ($value as $index => $item) {
                $itemSchema = array_is_list($schema['items']) ? ($schema['items'][$index] ?? null) : $schema['items'];
                if ($itemSchema !== null) $value[$index] = self::normalizeForJson($item, $itemSchema, $path . '[' . $index . ']');
            }
            return $value;
        }
        if (($schema['type'] ?? null) === 'object' && ($value instanceof \stdClass || (is_array($value) && !array_is_list($value)))) {
            $isObject = $value instanceof \stdClass;
            $properties = $isObject ? get_object_vars($value) : $value;
            foreach ($properties as $key => $item) {
                if (isset($schema['properties'][$key])) {
                    $properties[$key] = self::normalizeForJson($item, $schema['properties'][$key], $path . '.' . $key);
                    continue;
                }
                $patterns = TypeGuard::matchingPatternSchemas((string)$key, $schema['patternProperties'] ?? []);
                if ($patterns !== []) {
                    foreach ($patterns as $pattern) $item = self::normalizeForJson($item, $pattern, $path . '.' . $key);
                    $properties[$key] = $item;
                } elseif (is_array($schema['additionalProperties'] ?? null)) {
                    $properties[$key] = self::normalizeForJson($item, $schema['additionalProperties'], $path . '.' . $key);
                }
            }
            return $isObject ? (object)$properties : $properties;
        }
        return $value;
    }

    public static function hydrate(mixed $value, array $schema, string $path, bool $validate = true): mixed
    {
        if (($schema['nullable'] ?? false) === true && $value === null) return null;
        if (($schema['jsonObject'] ?? false) === true) {
            $object = JsonObject::fromValue($value);
            if ($validate) TypeGuard::assert($object, $schema, $path);
            return $object;
        }
        if (isset($schema['oneOf']) || isset($schema['anyOf'])) {
            $composition=isset($schema['oneOf'])?'oneOf':'anyOf'; $matches=[];
            if ($value instanceof UnionValue) {
                if (!array_key_exists($value->variant, $schema[$composition])) throw new \InvalidArgumentException("Invalid union branch at {$path}.");
                $branchValue = self::hydrate($value->value, $schema[$composition][$value->variant], $path, true);
                return $branchValue;
            }
            foreach ($schema[$composition] as $index=>$branch) {
                try { $matches[$index]=self::hydrate($value,$branch,$path,true); }
                catch (\InvalidArgumentException) {}
            }
            if ($matches===[] || ($composition==='oneOf' && count($matches)!==1)) throw new \InvalidArgumentException("Value at {$path} does not match its {$composition} schema.");
            $index = array_key_first($matches);
            return $matches[$index];
        }
        $validatedByModel = false;
        if (isset($schema['phpEnum'])) {
            $enum = $schema['phpEnum'];
            if ($value instanceof $enum) return $value;
            if (!method_exists($enum, 'fromValue')) throw new \InvalidArgumentException("Invalid enum model at {$path}.");
            $value = $enum::fromValue($value);
            $validatedByModel = true;
        }
        if (isset($schema['phpClass'])) {
            $class = $schema['phpClass'];
            if ($value instanceof $class) return $value;
            if ($value instanceof \stdClass && method_exists($class, 'fromArray')) $value=$class::fromArray(get_object_vars($value));
            elseif (method_exists($class, 'fromValue')) $value=$class::fromValue($value);
            else {
                if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException("Invalid object at {$path}.");
                $value = $class::fromArray($value);
            }
            $validatedByModel = true;
        } elseif (($schema['type'] ?? null) === 'array' && is_array($value) && isset($schema['items'])) {
            if (array_is_list($schema['items'])) {
                foreach ($value as $key=>$item) if (isset($schema['items'][$key])) $value[$key]=self::hydrate($item,$schema['items'][$key],$path.'['.$key.']',$validate);
            } else $value = array_map(static fn(mixed $item, int|string $key): mixed => self::hydrate($item, $schema['items'], $path.'['.$key.']',$validate), $value, array_keys($value));
        } elseif (($schema['type'] ?? null) === 'object' && ($value instanceof \stdClass || (is_array($value) && !array_is_list($value)))) {
            $wasObject = $value instanceof \stdClass;
            $properties = $wasObject ? get_object_vars($value) : $value;
            foreach (($schema['properties'] ?? []) as $key => $property) {
                if (array_key_exists($key, $properties)) $properties[$key] = self::hydrate($properties[$key], $property, $path.'.'.$key,$validate);
                elseif (in_array($key, $schema['required'] ?? [], true)) throw new \InvalidArgumentException("Missing required field {$path}.{$key}.");
            }
            foreach ($properties as $key => $item) {
                if (array_key_exists($key, $schema['properties'] ?? [])) continue;
                $matchingPatterns = TypeGuard::matchingPatternSchemas((string)$key, $schema['patternProperties'] ?? []);
                if ($matchingPatterns !== []) {
                    foreach ($matchingPatterns as $patternSchema) $item = self::hydrate($item, $patternSchema, $path.'.'.$key, $validate);
                    $properties[$key] = $item;
                } elseif (is_array($schema['additionalProperties'] ?? null)) {
                    $properties[$key] = self::hydrate($item, $schema['additionalProperties'], $path.'.'.$key, $validate);
                }
            }
            $value = $wasObject ? (object)$properties : $properties;
        }
        if ($validate && !$validatedByModel) TypeGuard::assert($value, $schema, $path);
        return $value;
    }

    private static function objectToArray(\stdClass $object): array
    {
        $values = [];
        foreach (get_object_vars($object) as $key => $value) $values[$key] = self::normalizeJsonValue($value);
        return $values;
    }

    private static function normalizeJsonValue(mixed $value): mixed
    {
        if ($value instanceof \stdClass) return self::objectToArray($value);
        if (is_array($value)) return array_map(self::normalizeJsonValue(...), $value);
        return $value;
    }
}
