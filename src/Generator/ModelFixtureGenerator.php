<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generator;

/** Creates one schema-valid, seedable JSON fixture per source component schema. */
final class ModelFixtureGenerator
{
    private int $state;
    private int $sequence = 0;

    /** @param array<string,array<string,mixed>> $schemas */
    public function write(array $schemas, string $directory, int $seed, callable $className): int
    {
        $this->state = $seed & 0xffffffff;
        if ($this->state === 0) $this->state = 0x6d2b79f5;
        if (!is_dir($directory) && !mkdir($directory, 0777, true) && !is_dir($directory)) {
            throw new \RuntimeException("Cannot create model fixture directory: {$directory}");
        }
        $expectedFiles = [];
        foreach ($schemas as $name => $schema) {
            $value = $this->value($schema, $schemas, [], 0);
            $json = json_encode($value, JSON_THROW_ON_ERROR | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . "\n";
            $path = rtrim($directory, '/\\') . DIRECTORY_SEPARATOR . $className((string)$name) . '.json';
            $expectedFiles[basename($path)] = true;
            if (file_put_contents($path, $json, LOCK_EX) === false) throw new \RuntimeException("Cannot write model fixture: {$path}");
        }
        foreach (glob(rtrim($directory, '/\\') . DIRECTORY_SEPARATOR . '*.json') ?: [] as $existing) {
            if (!isset($expectedFiles[basename($existing)]) && !unlink($existing)) throw new \RuntimeException("Cannot remove obsolete model fixture: {$existing}");
        }
        return count($schemas);
    }

    private function value(array $schema, array $schemas, array $stack, int $depth): mixed
    {
        if ($depth > 32) throw new \RuntimeException('Fixture generation exceeded the maximum schema nesting depth.');
        while (isset($schema['$ref'])) {
            $ref = $schema['$ref'];
            $name = $this->refName($ref);
            if (!isset($schemas[$name])) throw new \RuntimeException("Unresolved fixture schema reference: {$ref}");
            if (in_array($name, $stack, true)) return null; // Break optional recursive references.
            $stack[] = $name;
            $reference = $schemas[$name];
            unset($schema['$ref']);
            $schema = $this->mergeSchema($reference, $schema);
        }

        if (isset($schema['allOf'])) {
            $parts = [];
            $base = $schema;
            unset($base['allOf']);
            if ($base !== []) $parts[] = $base;
            foreach ($schema['allOf'] as $branch) $parts[] = $this->resolveSchema($branch, $schemas, $stack);
            $merged = [];
            foreach ($parts as $part) $merged = $this->mergeSchema($merged, $part);
            return $this->value($merged, $schemas, $stack, $depth + 1);
        }

        $composition = isset($schema['oneOf']) ? 'oneOf' : (isset($schema['anyOf']) ? 'anyOf' : null);
        if ($composition !== null) {
            $branches = $schema[$composition];
            if (!is_array($branches) || $branches === []) throw new \RuntimeException("Empty {$composition} encountered while generating fixtures.");
            $selected = $branches[$this->randomInt(0, count($branches) - 1)];
            unset($schema[$composition]);
            $common = $schema === [] ? null : $this->value($schema, $schemas, $stack, $depth + 1);
            $chosen = $this->value($selected, $schemas, $stack, $depth + 1);
            return $this->mergeValues($common, $chosen);
        }

        if (isset($schema['enum']) && is_array($schema['enum']) && $schema['enum'] !== []) return $schema['enum'][$this->randomInt(0, count($schema['enum']) - 1)];
        if (($schema['nullable'] ?? false) && $this->randomInt(0, 5) === 0) return null;
        $type = $schema['type'] ?? (isset($schema['properties']) ? 'object' : null);
        return match ($type) {
            'null' => null,
            'boolean' => (bool)$this->randomInt(0, 1),
            'integer' => $this->integer($schema),
            'number' => (float)$this->integer($schema),
            'string' => $this->string($schema),
            'array' => $this->arrayValue($schema, $schemas, $stack, $depth),
            'object' => $this->objectValue($schema, $schemas, $stack, $depth),
            default => null,
        };
    }

    private function objectValue(array $schema, array $schemas, array $stack, int $depth): object
    {
        $data = [];
        $required = array_fill_keys($schema['required'] ?? [], true);
        foreach (($schema['properties'] ?? []) as $name => $property) {
            if (!isset($required[$name]) && $this->randomInt(0, 3) !== 0) continue;
            $data[$name] = $this->value($property, $schemas, $stack, $depth + 1);
        }
        $additional = $schema['additionalProperties'] ?? null;
        if (is_array($additional) && $this->randomInt(0, 1) === 1) {
            $key = 'fixture_' . (++$this->sequence);
            $data[$key] = $this->value($additional, $schemas, $stack, $depth + 1);
        }
        foreach (($schema['patternProperties'] ?? []) as $pattern => $definition) {
            if ($this->randomInt(0, 1) === 1) {
                $key = $this->keyForPattern((string)$pattern);
                $data[$key] = $this->value($definition, $schemas, $stack, $depth + 1);
            }
        }
        return (object)$data;
    }

    private function arrayValue(array $schema, array $schemas, array $stack, int $depth): array
    {
        $min = max(0, (int)($schema['minItems'] ?? 0));
        $max = isset($schema['maxItems']) ? max($min, (int)$schema['maxItems']) : max($min, 1);
        $count = $this->randomInt($min, min($max, $min + 2));
        $items = $schema['items'] ?? [];
        $values = [];
        for ($i = 0; $i < $count; $i++) {
            $itemSchema = array_is_list($items) ? ($items[$i] ?? []) : $items;
            $values[] = $this->value($itemSchema, $schemas, $stack, $depth + 1);
        }
        return $values;
    }

    private function integer(array $schema): int
    {
        $min = max(PHP_INT_MIN, (int)($schema['minimum'] ?? ($schema['exclusiveMinimum'] ?? 0)));
        $max = min(PHP_INT_MAX, (int)($schema['maximum'] ?? ($schema['exclusiveMaximum'] ?? 100)));
        if (isset($schema['exclusiveMinimum'])) $min++;
        if (isset($schema['exclusiveMaximum'])) $max--;
        if ($max < $min) throw new \RuntimeException('Integer schema has an empty range and cannot produce a fixture.');
        return $this->randomInt($min, min($max, $min + 100));
    }

    private function string(array $schema): string
    {
        $format = $schema['format'] ?? '';
        $value = match ($format) {
            'date-time' => '2026-01-01T00:00:00Z',
            'date' => '2026-01-01',
            'time' => '00:00:00Z',
            'email' => 'fixture@example.test',
            'uri', 'url' => 'https://example.test/fixture',
            'byte', 'bytes' => base64_encode('fixture'),
            'uuid' => '00000000-0000-4000-8000-000000000001',
            default => 'fixture-' . (++$this->sequence),
        };
        $min = (int)($schema['minLength'] ?? 0);
        $max = isset($schema['maxLength']) ? (int)$schema['maxLength'] : 256;
        if (strlen($value) < $min) $value .= str_repeat('x', $min - strlen($value));
        return substr($value, 0, max($min, $max));
    }

    private function resolveSchema(array $schema, array $schemas, array $stack): array
    {
        while (isset($schema['$ref'])) {
            $ref = $schema['$ref'];
            $name = $this->refName($ref);
            if (!isset($schemas[$name])) throw new \RuntimeException("Unresolved fixture schema reference: {$ref}");
            if (in_array($name, $stack, true)) return $schema;
            $stack[] = $name;
            unset($schema['$ref']);
            $schema = $this->mergeSchema($schemas[$name], $schema);
        }
        return $schema;
    }

    private function mergeSchema(array $left, array $right): array
    {
        foreach ($right as $key => $value) {
            if ($key === 'properties' && is_array($value)) $left[$key] = array_replace($left[$key] ?? [], $value);
            elseif ($key === 'required' && is_array($value)) $left[$key] = array_values(array_unique([...($left[$key] ?? []), ...$value]));
            elseif (in_array($key, ['minimum', 'minItems', 'minLength', 'minProperties'], true)) $left[$key] = max($left[$key] ?? $value, $value);
            elseif (in_array($key, ['maximum', 'maxItems', 'maxLength', 'maxProperties'], true)) $left[$key] = min($left[$key] ?? $value, $value);
            elseif (is_array($left[$key] ?? null) && is_array($value) && !array_is_list($value)) $left[$key] = $this->mergeSchema($left[$key], $value);
            else $left[$key] = $value;
        }
        return $left;
    }

    private function mergeValues(mixed $left, mixed $right): mixed
    {
        if (is_object($left) && is_object($right)) return (object)array_replace(get_object_vars($left), get_object_vars($right));
        return $right ?? $left;
    }

    private function refName(mixed $ref): string
    {
        if (!is_string($ref) || !preg_match('~^#/components/schemas/([^/]+)$~', $ref, $m)) throw new \RuntimeException('Unsupported fixture schema reference.');
        return str_replace(['~1', '~0'], ['/', '~'], $m[1]);
    }

    private function keyForPattern(string $pattern): string
    {
        if (str_contains($pattern, '\\d') || str_contains($pattern, '[0-9]')) return '1';
        if (str_contains($pattern, '[a-z]')) return 'a';
        if (str_contains($pattern, '[A-Z]')) return 'A';
        if (preg_match('/[A-Za-z0-9_-]+/', trim($pattern, '^$'))) return preg_replace('/[^A-Za-z0-9_-]/', '', trim($pattern, '^$')) ?: 'fixture';
        return 'fixture';
    }

    private function randomInt(int $min, int $max): int
    {
        if ($max <= $min) return $min;
        // Xorshift32 keeps generation seeded and isolated from PHP's global RNG.
        $this->state ^= ($this->state << 13) & 0xffffffff;
        $this->state ^= $this->state >> 17;
        $this->state ^= ($this->state << 5) & 0xffffffff;
        $this->state &= 0xffffffff;
        return $min + ($this->state % ($max - $min + 1));
    }

}
