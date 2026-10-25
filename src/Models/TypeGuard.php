<?php
declare(strict_types=1);

namespace Near\JsonRpc\Models;

/** Runtime checks for generated OpenAPI property values. */
final class TypeGuard
{
    public static function assert(mixed $value, array $schema, string $path): void
    {
        if (($schema['nullable'] ?? false) === true && $value === null) return;
        if (($schema['jsonObject'] ?? false) === true) {
            if (!$value instanceof JsonObject) throw new \InvalidArgumentException("Expected a JSON object at {$path}.");
            return;
        }
        if (isset($schema['oneOf']) || isset($schema['anyOf'])) {
            $branches=$schema['oneOf'] ?? $schema['anyOf']; $matches=0;
            if ($value instanceof UnionValue) {
                if (!isset($branches[$value->variant])) throw new \InvalidArgumentException("Invalid union branch at {$path}.");
                self::assert($value->value,$branches[$value->variant],$path);
                return;
            }
            foreach ($branches as $branch) {
                try { self::assert($value,$branch,$path); ++$matches; }
                catch (\InvalidArgumentException) {}
            }
            if ($matches===0 || (isset($schema['oneOf']) && $matches!==1)) throw new \InvalidArgumentException("Invalid union value at {$path}.");
            return;
        }
        if (isset($schema['phpClass'])) {
            $expected = $schema['phpClass'];
            if (!is_string($expected) || !is_object($value) || !$value instanceof $expected) throw new \InvalidArgumentException("Invalid value at {$path}; expected {$expected}.");
            return;
        }
        if (isset($schema['phpEnum'])) {
            $expected = $schema['phpEnum'];
            if (!is_string($expected) || !$value instanceof $expected) throw new \InvalidArgumentException("Invalid enum value at {$path}; expected {$expected}.");
            return;
        }
        $type = $schema['type'] ?? null;
        $valid = match ($type) {
            'string' => is_string($value),
            'integer' => self::isInteger($value,$schema),
            'number' => (is_int($value) || is_float($value)) && (!is_float($value) || is_finite($value)),
            'boolean' => is_bool($value),
            'null' => $value === null,
            'array' => is_array($value) && array_is_list($value)
                && (!isset($schema['minItems']) || count($value)>=$schema['minItems'])
                && (!isset($schema['maxItems']) || count($value)<=$schema['maxItems']),
            'object' => $value instanceof \stdClass || (is_array($value) && !array_is_list($value)),
            default => false,
        };
        if (!$valid) throw new \InvalidArgumentException("Invalid value at {$path}; expected {$type}.");
        if ($type==='integer' || $type==='number') {
            [$formatMinimum, $formatMaximum] = self::integerFormatBounds($schema['format'] ?? null);
            foreach ([$schema['minimum'] ?? null, $formatMinimum] as $minimum) if ($minimum !== null && self::compareNumeric($value,$minimum)<0) throw new \InvalidArgumentException("Value at {$path} is below its minimum.");
            foreach ([$schema['maximum'] ?? null, $formatMaximum] as $maximum) if ($maximum !== null && self::compareNumeric($value,$maximum)>0) throw new \InvalidArgumentException("Value at {$path} exceeds its maximum.");
        }
        if (isset($schema['enum']) && !in_array($value, $schema['enum'], true)) throw new \InvalidArgumentException("Invalid enum value at {$path}.");
        if ($type === 'string') {
            $length = preg_match_all('/(?s)./u', $value);
            if ($length === false) throw new \InvalidArgumentException("Invalid UTF-8 string at {$path}.");
            if (isset($schema['minLength']) && $length < $schema['minLength']) throw new \InvalidArgumentException("String at {$path} is shorter than its minimum length.");
            if (isset($schema['maxLength']) && $length > $schema['maxLength']) throw new \InvalidArgumentException("String at {$path} exceeds its maximum length.");
            if (isset($schema['pattern'])) {
                $pattern = '~' . str_replace('~', '\\~', (string)$schema['pattern']) . '~u';
                if (@preg_match($pattern, $value) !== 1) throw new \InvalidArgumentException("String at {$path} does not match its pattern.");
            }
            self::assertStringFormat($value, $schema['format'] ?? null, $path);
        }
        if ($type === 'array' && isset($schema['items'])) {
            if (array_is_list($schema['items'])) {
                foreach ($schema['items'] as $index=>$itemSchema) if (array_key_exists($index,$value)) self::assert($value[$index],$itemSchema,$path.'['.$index.']');
            } else foreach ($value as $index => $item) self::assert($item, $schema['items'], $path.'['.$index.']');
        }
        if ($type === 'object') {
            $properties = $value instanceof \stdClass ? get_object_vars($value) : $value;
            if (is_array($schema['properties'] ?? null)) {
                foreach ($schema['required'] ?? [] as $key) if (!array_key_exists($key, $properties)) throw new \InvalidArgumentException("Missing required field {$path}.{$key}.");
                foreach ($schema['properties'] as $key => $property) if (array_key_exists($key, $properties)) self::assert($properties[$key], $property, $path.'.'.$key);
            }
            foreach ($properties as $key => $item) {
                if (array_key_exists($key, $schema['properties'] ?? [])) continue;
                $matchingPatterns = self::matchingPatternSchemas((string)$key, $schema['patternProperties'] ?? []);
                if ($matchingPatterns !== []) {
                    foreach ($matchingPatterns as $patternSchema) self::assert($item, $patternSchema, $path.'.'.$key);
                } elseif (is_array($schema['additionalProperties'] ?? null)) {
                    self::assert($item, $schema['additionalProperties'], $path.'.'.$key);
                } elseif (($schema['additionalProperties'] ?? null) === false) {
                    throw new \InvalidArgumentException("Unknown field {$path}.{$key}.");
                }
            }
        }
    }

    /** @param array<string,array<string,mixed>> $patterns @return list<array<string,mixed>> */
    public static function matchingPatternSchemas(string $key, array $patterns): array
    {
        $matches = [];
        foreach ($patterns as $pattern => $schema) {
            $regex = '~' . str_replace('~', '\\~', (string)$pattern) . '~u';
            $matched = @preg_match($regex, $key);
            if ($matched === false) throw new \InvalidArgumentException("Invalid object key pattern {$pattern}.");
            if ($matched === 1) $matches[] = $schema;
        }
        return $matches;
    }

    private static function assertStringFormat(string $value, mixed $format, string $path): void
    {
        if (in_array($format, ['byte', 'bytes'], true)) {
            $decoded = base64_decode($value, true);
            if ($decoded === false || base64_encode($decoded) !== $value) throw new \InvalidArgumentException("String at {$path} is not canonical base64 for format {$format}.");
        } elseif ($format === 'date-time') {
            if (!preg_match('/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}(?:\\.\\d+)?(?:Z|[+-]\\d{2}:\\d{2})$/D', $value)) throw new \InvalidArgumentException("String at {$path} is not a valid date-time.");
            $normalized = preg_replace_callback('/\\.(\\d+)(?=Z|[+-]\\d{2}:\\d{2}$)/', static fn(array $match): string => '.' . substr(str_pad($match[1], 6, '0'), 0, 6), $value);
            $normalized = str_ends_with((string)$normalized, 'Z') ? substr((string)$normalized, 0, -1) . '+00:00' : (string)$normalized;
            if (!str_contains($normalized, '.')) $normalized = preg_replace('/(?=Z|[+-]\\d{2}:\\d{2}$)/', '.000000', $normalized, 1) ?? $normalized;
            $parsed = \DateTimeImmutable::createFromFormat('!Y-m-d\\TH:i:s.uP', $normalized);
            $errors = \DateTimeImmutable::getLastErrors();
            if ($parsed === false || ($errors !== false && ($errors['warning_count'] > 0 || $errors['error_count'] > 0))) throw new \InvalidArgumentException("String at {$path} is not a valid date-time.");
        }
    }

    private static function isInteger(mixed $value,array $schema): bool
    {
        if (is_int($value)) return true;
        if (!is_string($value) || !in_array($schema['format'] ?? null,['int64','uint64','uint'],true)) return false;
        $pattern=in_array($schema['format'],['uint64','uint'],true)?'/^\d+$/':'/^-?\d+$/';
        return preg_match($pattern,$value)===1;
    }

    /** @return array{int|string|null,int|string|null} */
    private static function integerFormatBounds(mixed $format): array
    {
        return match ($format) {
            'int32' => [-2147483648, 2147483647],
            'uint32' => [0, 4294967295],
            'uint16' => [0, 65535],
            'uint8' => [0, 255],
            'int64' => ['-9223372036854775808', '9223372036854775807'],
            'uint64' => [0, '18446744073709551615'],
            'uint' => [0, null],
            default => [null, null],
        };
    }

    private static function compareNumeric(int|float|string $left,int|float|string $right): int
    {
        if (is_float($left) || is_float($right)) return (float)$left <=> (float)$right;
        $a=(string)$left; $b=(string)$right;
        $negativeA=str_starts_with($a,'-'); $negativeB=str_starts_with($b,'-');
        if ($negativeA!==$negativeB) return $negativeA?-1:1;
        $a=ltrim($negativeA?substr($a,1):$a,'0'); $b=ltrim($negativeB?substr($b,1):$b,'0');
        $a=$a===''?'0':$a; $b=$b===''?'0':$b;
        $comparison=strlen($a)<=>strlen($b);
        if ($comparison===0) $comparison=strcmp($a,$b)<=>0;
        return $negativeA?-$comparison:$comparison;
    }
}
