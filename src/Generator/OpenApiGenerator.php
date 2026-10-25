<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generator;

/** Deterministic generator for NEAR's OpenAPI JSON-RPC envelope schemas and operations. */
final class OpenApiGenerator
{
    public function generate(string $specPath, string $modelDir, string $clientDir, string $clientTestFile = '', string $modelTestFile = '', string $fixtureDir = '', int $fixtureSeed = 1): array
    {
        if (!is_file($specPath)) throw new \RuntimeException("OpenAPI file does not exist: {$specPath}");
        $contents = file_get_contents($specPath);
        if ($contents === false) throw new \RuntimeException("OpenAPI file could not be read: {$specPath}");
        try {
            $spec = json_decode($contents, true, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            throw new \RuntimeException('OpenAPI file is not valid JSON: ' . $e->getMessage(), 0, $e);
        }
        if (!is_array($spec) || !is_string($spec['openapi'] ?? null) || !is_array($spec['components']['schemas'] ?? null) || !is_array($spec['paths'] ?? null)) throw new \RuntimeException('Expected an OpenAPI document with paths and components.schemas.');
        $sourceSchemas = $this->normalizeInlineObjects($spec['components']['schemas']);
        $sourceModelNames = array_map(fn(string|int $name): string => $this->className((string)$name), array_keys($sourceSchemas));
        $schemas = $sourceSchemas;
        $schemas = $this->mergeAllOfSchemas($schemas);
        $schemas = $this->expandRootUnions($schemas);
        $operations = [];
        foreach ($spec['paths'] as $path => $pathItem) {
            if (!is_array($pathItem)) throw new \RuntimeException("Malformed path item at {$path}.");
            foreach ($pathItem as $verb => $op) {
                if (!in_array(strtolower((string)$verb), ['get', 'post', 'put', 'patch', 'delete', 'head', 'options', 'trace'], true)) continue;
                if (!is_array($op) || !isset($op['operationId'])) continue;
                if (!is_string($op['operationId']) || trim($op['operationId']) === '') throw new \RuntimeException("Operation at {$path} must have a non-empty string operationId.");
                $req = $op['requestBody']['content']['application/json']['schema']['$ref'] ?? null;
                $res = $op['responses']['200']['content']['application/json']['schema']['$ref'] ?? null;
                if ($req === null || $res === null) throw new \RuntimeException("Operation {$op['operationId']} lacks a JSON request or response schema.");
                $request = $this->schemaReferenceName($req, $schemas, "operation {$op['operationId']} request");
                $response = $this->schemaReferenceName($res, $schemas, "operation {$op['operationId']} response");
                $paramsSchema = $schemas[$request]['properties']['params'] ?? null;
                $params = is_array($paramsSchema) && isset($paramsSchema['$ref'])
                    ? $this->schemaReferenceName($paramsSchema['$ref'], $schemas, "operation {$op['operationId']} params")
                    : $request;
                $operations[] = ['id' => $op['operationId'], 'request' => $request, 'params' => $params, 'response' => $response, 'result' => $this->operationResultSchema($res, $schemas, "operation {$op['operationId']}")];
            }
        }
        sort($operations);
        $methodNames = [];
        foreach ($operations as $operation) {
            $method = $this->methodName($operation['id']);
            if (isset($methodNames[$method])) throw new \RuntimeException("Operation names {$methodNames[$method]} and {$operation['id']} both map to PHP method {$method}.");
            $methodNames[$method] = $operation['id'];
        }
        foreach ($schemas as $name => $schema) {
            if (!is_array($schema)) throw new \RuntimeException("Malformed schema at #/components/schemas/{$name}.");
            $type = $schema['type'] ?? (isset($schema['properties']) ? 'object' : null);
            if ($type === 'object' || isset($schema['properties'])) {
                if (isset($schema['properties']) && !is_array($schema['properties'])) throw new \RuntimeException("Malformed properties at #/components/schemas/{$name}.");
                if (isset($schema['required']) && (!is_array($schema['required']) || array_filter($schema['required'], static fn($key): bool => !is_string($key)) !== [])) throw new \RuntimeException("Malformed required list at #/components/schemas/{$name}.");
            } else $this->propertyDescriptor($schema, $schemas, "#/components/schemas/{$name}");
        }
        $classNames = [];
        foreach ($schemas as $name => $schema) {
            $class = $this->className((string)$name);
            if (isset($classNames[$class])) throw new \RuntimeException("Schema names {$classNames[$class]} and {$name} both map to PHP class {$class}.");
            $classNames[$class] = $name;
        }
        foreach ($schemas as $name => $schema) foreach (($schema['properties'] ?? []) as $property => $propertySchema) {
            $this->propertyDescriptor($propertySchema, $schemas, "#/components/schemas/{$name}/properties/{$property}");
        }
        $renderedModels = [];
        $modelSchemas = [];
        $modelCount = 0;
        foreach ($schemas as $name => $schema) {
            $class = $this->className((string)$name);
            $objectLike = ($schema['type'] ?? (isset($schema['properties']) ? 'object' : null)) === 'object' && !isset($schema['oneOf']) && !isset($schema['anyOf']);
            $enumLike = $this->isBackedEnumSchema($schema);
            $renderedModels[$class] = $enumLike ? $this->emitEnum($name, $schema) : ($objectLike ? $this->emitModel($name, $schema, $schemas) : $this->emitRootModel($name, $schema, $schemas));
            $modelSchemas[$class] = ['description' => $schema['description'] ?? null, 'properties' => [], 'required' => array_fill_keys($schema['required'] ?? [], true)];
            if (!$objectLike) $modelSchemas[$class]['root'] = $this->propertyDescriptor($schema, $schemas, "#/components/schemas/{$name}");
            if ($enumLike) $modelSchemas[$class]['enum'] = true;
            foreach (($schema['properties'] ?? []) as $property => $definition) $modelSchemas[$class]['properties'][$property] = $this->propertyDescriptor($definition, $schemas, "#/components/schemas/{$name}/properties/{$property}");
            if (is_array($schema['additionalProperties'] ?? null)) $modelSchemas[$class]['additionalProperties'] = $this->propertyDescriptor($schema['additionalProperties'], $schemas, "#/components/schemas/{$name}/additionalProperties");
            if (in_array($class, $sourceModelNames, true)) $modelCount++;
        }
        $this->mkdir($clientDir);
        $written = (new ModelGenerator())->write($modelDir, $renderedModels);
        $methods = (new ApiGenerator())->render($operations, fn(string $name): string => $this->className($name), fn(string $id): string => $this->methodName($id), fn(array $schema, array $allSchemas, string $context): array => $this->withoutDescriptions($this->propertyDescriptor($schema, $allSchemas, $context)), fn(array $descriptor): string => $this->phpType($descriptor), $schemas);
        $file = $clientDir . '/RpcMethods.php';
        $this->write($file, $methods);
        $written[] = $file;
        if ($clientTestFile !== '') {
            $testOperations = array_map(function (array $operation) use ($schemas): array {
                if ($operation['result'] !== null) $operation['result'] = $this->withoutDescriptions($this->propertyDescriptor($operation['result'], $schemas, "operation {$operation['id']} result"));
                return $operation;
            }, $operations);
            (new ClientIntegrationTestGenerator())->write($testOperations, fn(string $name): string => $this->className($name), fn(string $id): string => $this->methodName($id), $clientTestFile);
            $written[] = $clientTestFile;
        }
        if ($modelTestFile !== '') {
            (new ModelJsonTestGenerator())->write($sourceModelNames, $modelSchemas, $modelTestFile);
            $written[] = $modelTestFile;
        }
        if ($fixtureDir !== '') {
            (new ModelFixtureGenerator())->write($sourceSchemas, $fixtureDir, $fixtureSeed, fn(string $name): string => $this->className($name));
            $written[] = $fixtureDir;
        }
        return ['operations' => count($operations), 'models' => $modelCount, 'generatedTypes' => count($renderedModels), 'files' => $written, 'modelSchemas' => $modelSchemas, 'sourceModels' => $sourceModelNames, 'fixtureSeed' => $fixtureSeed];
    }

    private function mkdir(string $path): void
    {
        if (!is_dir($path) && !mkdir($path, 0777, true) && !is_dir($path)) throw new \RuntimeException("Cannot create output directory: {$path}");
    }

    private function schemaReferenceName(mixed $ref, array $schemas, string $context): string
    {
        if (!is_string($ref) || !preg_match('~^#/components/schemas/([^/]+)$~', $ref, $match)) throw new \RuntimeException("Unsupported schema reference for {$context}: " . (is_scalar($ref) ? (string)$ref : get_debug_type($ref)));
        $name = preg_replace_callback('/~([01])/', static fn(array $escape): string => $escape[1] === '1' ? '/' : '~', $match[1]) ?? $match[1];
        if (!array_key_exists($name, $schemas)) throw new \RuntimeException("Missing schema reference #/components/schemas/{$name} for {$context}.");
        return $name;
    }

    private function operationResultSchema(string $responseRef, array $schemas, string $context): ?array
    {
        $name = $this->schemaReferenceName($responseRef, $schemas, $context . ' response');
        return $this->findResultSchema($schemas[$name], $schemas, [$name]);
    }

    private function findResultSchema(array $schema, array $schemas, array $seen): ?array
    {
        if (isset($schema['properties']['result']) && is_array($schema['properties']['result'])) return $schema['properties']['result'];
        if (isset($schema['$ref'])) {
            $name = $this->schemaReferenceName($schema['$ref'], $schemas, 'JSON-RPC response result');
            if (in_array($name, $seen, true)) return null;
            return $this->findResultSchema($schemas[$name], $schemas, [...$seen, $name]);
        }
        foreach (['oneOf', 'anyOf', 'allOf'] as $composition) foreach (($schema[$composition] ?? []) as $branch) if (is_array($branch)) {
            if (isset($branch['properties']['result']) && is_array($branch['properties']['result'])) return $branch['properties']['result'];
            $found = $this->findResultSchema($branch, $schemas, $seen);
            if ($found !== null) return $found;
        }
        return null;
    }

    private function normalizeInlineObjects(array $schemas): array
    {
        $cursor = 0;
        while ($cursor < count($schemas)) {
            $names = array_keys($schemas);
            $name = $names[$cursor++];
            $schema = $schemas[$name];
            $schemas[$name] = $this->normalizeSchemaChildren($schema);
        }
        return $schemas;
    }

    private function normalizeSchemaChildren(array $schema): array
    {
        foreach (($schema['properties'] ?? []) as $property => $child) if (is_array($child)) $schema['properties'][$property] = $this->normalizeInlineNode($child);
        if (is_array($schema['items'] ?? null)) $schema['items'] = $this->normalizeInlineNode($schema['items']);
        if (is_array($schema['additionalProperties'] ?? null)) $schema['additionalProperties'] = $this->normalizeInlineNode($schema['additionalProperties']);
        foreach (['oneOf', 'anyOf', 'allOf'] as $composition) if (is_array($schema[$composition] ?? null)) {
            foreach ($schema[$composition] as $i => $branch) if (is_array($branch)) {
                $schema[$composition][$i] = $this->normalizeInlineNode($branch);
            }
        }
        return $schema;
    }

    /** Normalize nested schema syntax without inventing PHP classes for inline or union branches. */
    private function normalizeInlineNode(array $schema): array
    {
        foreach (($schema['properties'] ?? []) as $property => $child) if (is_array($child)) $schema['properties'][$property] = $this->normalizeInlineNode($child);
        if (is_array($schema['items'] ?? null)) $schema['items'] = $this->normalizeInlineNode($schema['items']);
        if (is_array($schema['additionalProperties'] ?? null)) $schema['additionalProperties'] = $this->normalizeInlineNode($schema['additionalProperties']);
        foreach (['oneOf', 'anyOf', 'allOf'] as $composition) if (is_array($schema[$composition] ?? null)) foreach ($schema[$composition] as $index => $branch) if (is_array($branch)) {
            $schema[$composition][$index] = $this->normalizeInlineNode($branch);
        }
        return $schema;
    }

    private function mergeAllOfSchemas(array $schemas): array
    {
        foreach ($schemas as $name => $schema) if (isset($schema['allOf'])) $schemas[$name] = $this->resolveAllOf($schema, $schemas, [(string)$name]);
        return $schemas;
    }

    /**
     * Give root union alternatives and their inline object payloads named PHP
     * model types. This mirrors discriminated unions while leaving component
     * schemas as the fixture/test units.
     *
     * @param array<string,array<string,mixed>> $schemas
     * @return array<string,array<string,mixed>>
     */
    private function expandRootUnions(array $schemas): array
    {
        $sourceNames = array_keys($schemas);
        $auxiliary = [];
        foreach ($sourceNames as $schemaName) {
            $composition = isset($schemas[$schemaName]['oneOf']) ? 'oneOf' : (isset($schemas[$schemaName]['anyOf']) ? 'anyOf' : null);
            if ($composition === null || !is_array($schemas[$schemaName][$composition])) continue;
            $parentClass = $this->className($schemaName);
            $commonSchema = $this->unionCommonObjectSchema($schemas[$schemaName], $composition);
            foreach ($schemas[$schemaName][$composition] as $index => $branch) {
                if (!is_array($branch) || (isset($branch['$ref']) && $commonSchema === null)) continue;
                $tagKey = $this->externalTagKey($branch, $schemas);
                $label = $branch === [] ? 'AdditionalValue' : $this->unionBranchLabel($branch, $index, $tagKey, $schemas);
                $variantName = $this->uniqueSchemaName($parentClass . $this->className($label), $schemas, $auxiliary, true);

                if ($tagKey !== null) {
                    $payload = $branch['properties'][$tagKey];
                    $payloadName = null;
                    if (($payload['type'] ?? null) === 'object' && is_array($payload['properties'] ?? null) && !isset($payload['$ref'])) {
                        $payloadName = $this->uniqueSchemaName($variantName . 'Payload', $schemas, $auxiliary);
                        $auxiliary[$payloadName] = $this->extractInlineObjectModels($payload, $payloadName, $schemas, $auxiliary);
                        $payload = ['$ref' => '#/components/schemas/' . $payloadName];
                    } elseif (isset($payload['$ref'])) {
                        $payloadName = $this->schemaReferenceName($payload['$ref'], $schemas, $parentClass . ' union payload');
                    }
                    $variantSchema = [
                        'type' => 'object',
                        'properties' => [$tagKey => $payload],
                        'required' => [$tagKey],
                        'additionalProperties' => false,
                        'description' => $branch['description'] ?? null,
                        'x-php-union' => ['label' => $label, 'tag' => $tagKey, 'payload' => $payloadName],
                    ];
                    if ($variantSchema['description'] === null) unset($variantSchema['description']);
                    if ($commonSchema !== null) {
                        $variantSchema = $this->resolveAllOf(['allOf' => [$variantSchema, $commonSchema]], $schemas, [$variantName]);
                        $variantSchema['x-php-union'] = ['label' => $label, 'tag' => $tagKey, 'payload' => $payloadName];
                    }
                    $auxiliary[$variantName] = $variantSchema;
                } else {
                    // Union branches commonly express object variants as allOf
                    // intersections. Merge those fields before emitting the
                    // variant so it becomes a typed object model instead of a
                    // generic array|stdClass root wrapper.
                    if ($branch === [] && $commonSchema !== null) {
                        // An empty schema accepts any JSON value. In an object
                        // union with sibling object constraints, its useful
                        // typed representation is the common object shape with
                        // open additional properties.
                        $variantSchema = $commonSchema;
                        $variantSchema['additionalProperties'] ??= true;
                    } elseif ($commonSchema !== null) {
                        $variantSchema = $this->resolveAllOf(['allOf' => [$branch, $commonSchema]], $schemas, [$variantName]);
                    } else {
                        $variantSchema = $this->resolveAllOf($branch, $schemas, [$variantName]);
                    }
                    // A JSON Schema object allows undeclared properties unless
                    // additionalProperties is explicitly false. Preserve that
                    // behavior on synthesized union object variants so future
                    // fields do not make a valid typed variant fall through to
                    // a less specific anyOf branch. Explicit schemas and false
                    // remain untouched.
                    if (($variantSchema['type'] ?? null) === 'object' || isset($variantSchema['properties'])) {
                        $variantSchema['additionalProperties'] ??= true;
                    }
                    $variantSchema = $this->extractInlineObjectModels($variantSchema, $variantName, $schemas, $auxiliary);
                    $variantSchema['x-php-union'] = ['label' => $label];
                    $auxiliary[$variantName] = $variantSchema;
                }
                $schemas[$schemaName][$composition][$index] = ['$ref' => '#/components/schemas/' . $variantName];
            }
        }
        foreach ($auxiliary as $name => $schema) {
            if (isset($schemas[$name])) throw new \RuntimeException("Generated union model {$name} conflicts with an OpenAPI component schema.");
            $schemas[$name] = $schema;
        }
        return $schemas;
    }

    /** @param array<string,mixed> $branch */
    private function externalTagKey(array $branch, array $schemas): ?string
    {
        $properties = $branch['properties'] ?? [];
        if (($branch['type'] ?? null) !== 'object' || !is_array($properties) || count($properties) !== 1) return null;
        $key = (string)array_key_first($properties);
        if (!in_array($key, $branch['required'] ?? [], true)) return null;

        // Externally tagged variants carry an object/model payload under the
        // tag key. A scalar literal here is an in-object discriminator (often
        // added alongside allOf fields), and must remain a property of the
        // generated typed object instead of replacing its inherited fields.
        $payload = $properties[$key];
        if (isset($payload['$ref'])) return $key;
        if (($payload['type'] ?? null) === 'object' && is_array($payload['properties'] ?? null)) return $key;
        return null;
    }

    /** @param array<string,mixed> $branch */
    private function unionBranchLabel(array $branch, int $index, ?string $tagKey, array $schemas = []): string
    {
        if (isset($branch['$ref'])) return $this->className($this->schemaReferenceName($branch['$ref'], $schemas, 'union variant'));
        $title = $branch['title'] ?? null;
        if (is_string($title) && trim($title) !== '') return trim($title);
        if ($tagKey !== null) return $tagKey;
        foreach (['name', 'type'] as $discriminator) {
            $values = $branch['properties'][$discriminator]['enum'] ?? null;
            if (is_array($values) && count($values) === 1 && is_string($values[0])) return $values[0];
        }
        foreach ($branch['properties'] ?? [] as $property) {
            $values = is_array($property) ? ($property['enum'] ?? null) : null;
            if (is_array($values) && count($values) === 1 && is_string($values[0])) return $values[0];
        }
        foreach ($branch['allOf'] ?? [] as $part) {
            if (!is_array($part)) continue;
            foreach ($part['properties'] ?? [] as $property) {
                $values = is_array($property) ? ($property['enum'] ?? null) : null;
                if (is_array($values) && count($values) === 1 && is_string($values[0])) return $values[0];
            }
        }
        if (isset($branch['enum']) && count($branch['enum']) === 1) return is_string($branch['enum'][0]) ? $branch['enum'][0] : 'Value' . $branch['enum'][0];
        if (isset($branch['type']) && $branch['type'] !== 'object') return ucfirst((string)$branch['type']) . 'Value';
        $required = array_values(array_unique($branch['required'] ?? []));
        foreach ($branch['allOf'] ?? [] as $part) if (is_array($part)) $required = array_values(array_unique([...$required, ...($part['required'] ?? [])]));
        if ($required !== []) return implode('And', array_map(fn(string $name): string => $this->className($name), $required));
        $properties = array_keys($branch['properties'] ?? []);
        if ($properties !== []) return implode('And', array_map(fn(string $name): string => $this->className($name), $properties));
        return 'Object';
    }

    /**
     * Return object constraints declared beside a root oneOf/anyOf. JSON Schema
     * combines these constraints with every matching branch; they are not
     * annotations on the union wrapper.
     *
     * @param array<string,mixed> $schema
     * @return array<string,mixed>|null
     */
    private function unionCommonObjectSchema(array $schema, string $composition): ?array
    {
        $common = [];
        foreach (['type', 'properties', 'required', 'additionalProperties', 'patternProperties', 'minProperties', 'maxProperties'] as $key) {
            if (array_key_exists($key, $schema)) $common[$key] = $schema[$key];
        }
        if (!isset($common['properties']) && !isset($common['required']) && !isset($common['additionalProperties']) && !isset($common['patternProperties']) && !isset($common['minProperties']) && !isset($common['maxProperties'])) return null;
        if (($common['type'] ?? 'object') !== 'object') throw new \RuntimeException("Root {$composition} schemas with sibling constraints must use object type.");
        $common['type'] = 'object';
        return $common;
    }

    /**
     * Hoist inline object-valued properties and array items into named models.
     *
     * @param array<string,mixed> $schema
     * @param array<string,array<string,mixed>> $components
     * @param array<string,array<string,mixed>> $auxiliary
     * @return array<string,mixed>
     */
    private function extractInlineObjectModels(array $schema, string $parentName, array $components, array &$auxiliary): array
    {
        foreach ($schema['properties'] ?? [] as $property => $child) {
            if (!is_array($child) || isset($child['$ref']) || ($child['type'] ?? null) !== 'object' || !is_array($child['properties'] ?? null)) continue;
            $modelName = $this->uniqueSchemaName($parentName . $this->className((string)$property), $components, $auxiliary);
            $auxiliary[$modelName] = $this->extractInlineObjectModels($child, $modelName, $components, $auxiliary);
            $schema['properties'][$property] = $this->schemaReferenceWithAnnotations($modelName, $child);
        }
        foreach ($schema['properties'] ?? [] as $property => $child) {
            if (!is_array($child) || ($child['type'] ?? null) !== 'array' || !is_array($child['items'] ?? null)) continue;
            $item = $child['items'];
            if (isset($item['$ref']) || ($item['type'] ?? null) !== 'object' || !is_array($item['properties'] ?? null)) continue;
            $modelName = $this->uniqueSchemaName($parentName . $this->className((string)$property) . 'Item', $components, $auxiliary);
            $auxiliary[$modelName] = $this->extractInlineObjectModels($item, $modelName, $components, $auxiliary);
            $schema['properties'][$property]['items'] = $this->schemaReferenceWithAnnotations($modelName, $item);
        }
        return $schema;
    }

    /** @param array<string,mixed> $schema */
    private function schemaReferenceWithAnnotations(string $name, array $schema): array
    {
        $reference = ['$ref' => '#/components/schemas/' . $name];
        foreach (['description', 'nullable', 'deprecated', 'readOnly', 'writeOnly'] as $annotation) if (array_key_exists($annotation, $schema)) $reference[$annotation] = $schema[$annotation];
        return $reference;
    }

    /** @param array<string,array<string,mixed>> $components @param array<string,array<string,mixed>> $auxiliary */
    private function uniqueSchemaName(string $name, array $components, array $auxiliary, bool $allowSuffix = false): string
    {
        $name = $this->className($name);
        if (!isset($components[$name]) && !isset($auxiliary[$name])) return $name;
        if (!$allowSuffix) throw new \RuntimeException("Generated union model name {$name} collides with another schema or variant.");
        $base = $name;
        for ($suffix = 2; isset($components[$name]) || isset($auxiliary[$name]); $suffix++) $name = $base . $suffix;
        return $name;
    }

    private function resolveAllOf(array $schema, array $schemas, array $seen): array
    {
        if (!isset($schema['allOf'])) return $schema;
        if (count($schema['allOf']) === 1) {
            $branch = $schema['allOf'][0];
            if (isset($branch['$ref'])) {
                $name = $this->schemaReferenceName($branch['$ref'], $schemas, 'allOf alias');
                if (in_array($name, $seen, true)) throw new \RuntimeException('Recursive allOf reference: ' . implode(' -> ', [...$seen, $name]));
                $branch = $this->resolveAllOf($schemas[$name], $schemas, [...$seen, $name]);
            }
            if (is_array($branch) && (($branch['type'] ?? null) !== 'object') && !isset($branch['properties'])) {
                unset($schema['allOf']);
                return array_replace($branch, $schema);
            }
        }
        $merged = ['type' => 'object', 'properties' => [], 'required' => []];
        foreach ($schema['allOf'] as $branch) {
            if (isset($branch['$ref'])) {
                $name = $this->schemaReferenceName($branch['$ref'], $schemas, 'allOf');
                if (in_array($name, $seen, true)) throw new \RuntimeException('Recursive allOf reference: ' . implode(' -> ', [...$seen, $name]));
                $branch = $this->resolveAllOf($schemas[$name], $schemas, [...$seen, $name]);
            }
            if (!is_array($branch) || (($branch['type'] ?? null) !== 'object' && !isset($branch['properties']))) throw new \RuntimeException('Only object schemas can be merged through allOf.');
            foreach (($branch['properties'] ?? []) as $key => $property) {
                if (isset($merged['properties'][$key]) && $merged['properties'][$key] !== $property) throw new \RuntimeException("Conflicting allOf property {$key}.");
                $merged['properties'][$key] = $property;
            }
            $merged['required'] = array_values(array_unique([...$merged['required'], ...($branch['required'] ?? [])]));
            foreach ($branch as $key => $value) if (!in_array($key, ['type', 'properties', 'required', 'allOf'], true) && !array_key_exists($key, $merged)) $merged[$key] = $value;
        }
        foreach ($schema as $key => $value) {
            if ($key === 'allOf') continue;
            if ($key === 'properties') {
                foreach ($value as $property => $definition) {
                    if (isset($merged['properties'][$property]) && $merged['properties'][$property] !== $definition) throw new \RuntimeException("Conflicting allOf property {$property}.");
                    $merged['properties'][$property] = $definition;
                }
            } elseif ($key === 'required') $merged['required'] = array_values(array_unique([...$merged['required'], ...$value]));
            else $merged[$key] = $value;
        }
        return $merged;
    }

    private function emitRootModel(string $schemaName, array $schema, array $schemas): string
    {
        $class = $this->className($schemaName);
        $descriptor = $this->propertyDescriptor($schema, $schemas, "#/components/schemas/{$schemaName}");
        $isUnion = isset($descriptor['oneOf']) || isset($descriptor['anyOf']);
        $type = $isUnion ? $this->unionNativeType($descriptor[isset($descriptor['oneOf']) ? 'oneOf' : 'anyOf'], $schemas) : $this->phpType($descriptor);
        if ($type === '') $type = 'mixed';
        $classDescription = $this->docComment($schema['description'] ?? 'Generated typed OpenAPI root value model.');
        $code = "<?php\ndeclare(strict_types=1);\n\nnamespace Near\\JsonRpc\\Generated\\Models;\n\n{$classDescription}";
        if ($type === 'null') {
            $code .= "final class {$class} implements \\Near\\JsonRpc\\Models\\ModelJsonSerializable\n{\n";
            $code .= "    public function __construct() {}\n\n    public static function fromValue(mixed \$value): self\n    {\n        if (\$value !== null) throw new \\InvalidArgumentException('Expected null for {$class}.');\n        return new self();\n    }\n\n    public static function fromArray(array \$data): self { return self::fromValue(\$data); }\n    public static function fromJson(string \$json): self { return self::fromValue(\\Near\\JsonRpc\\Models\\ModelHydrator::decodeJsonValue(\$json)); }\n    public function jsonSerialize(): null { return null; }\n    public function jsonSerializeForEncoding(): null { return null; }\n    public function toJson(): string { return \\Near\\JsonRpc\\Models\\JsonEncoder::encode(\$this); }\n}\n";
            return $code;
        }
        $code .= "final readonly class {$class} implements \\Near\\JsonRpc\\Models\\ModelJsonSerializable\n{\n";
        if ($isUnion) {
            $composition = isset($descriptor['oneOf']) ? 'oneOf' : 'anyOf';
            $branches = $descriptor[$composition];
            $labels = $this->unionVariantLabels($schemaName, $branches, $schemas);
            $classes = array_map(fn(array $branch): string => $this->phpType($branch), $branches);
            if (in_array('mixed', $classes, true)) throw new \RuntimeException("Union {$schemaName} has a branch without a generated named model type.");
            $docTypes = array_values(array_unique(array_map(fn(array $branch): string => $this->phpDocType($branch), $branches)));
            $code .= "    /** @var " . implode('|', $docTypes) . " */\n    public {$type} \$root;\n\n    public function __construct({$type} \$root) { \$this->root = \$root; }\n\n    public static function fromValue(mixed \$value): self\n    {\n        \$matched = [];\n";
            foreach ($branches as $i => $branch) {
                $branchClass = $this->phpType($branch);
                $code .= "        try { \$matched[{$i}] = {$branchClass}::fromValue(\$value); } catch (\\InvalidArgumentException) {}\n";
            }
            $code .= "        if (\$matched === [] || (" . var_export($composition === 'oneOf', true) . " && count(\$matched) !== 1)) throw new \\InvalidArgumentException('Value does not match its {$composition} schema for {$class}.');\n        return new self(\$matched[array_key_first(\$matched)]);\n    }\n\n    public function variant(): string\n    {\n        return match (true) {\n";
            foreach ($branches as $i => $branch) $code .= "            \$this->root instanceof {$this->phpType($branch)} => " . var_export($labels[$i], true) . ",\n";
            $code .= "            default => throw new \\LogicException('Unknown {$class} variant.'),\n        };\n    }\n";
            foreach ($branches as $i => $branch) {
                $branchClass = $this->phpType($branch);
                $branchName = basename(str_replace('\\', '/', $branchClass));
                $branchSchema = $schemas[$branchName] ?? [];
                $metadata = $branchSchema['x-php-union'] ?? [];
                $method = lcfirst($this->className((string)$labels[$i]));
                if (isset($metadata['tag'], $metadata['payload'])) {
                    $payloadClass = '\\Near\\JsonRpc\\Generated\\Models\\' . $metadata['payload'];
                    $code .= "    public static function {$method}({$payloadClass} \$payload): self { return new self(new {$branchClass}(\$payload)); }\n";
                } elseif (isset($branchSchema['enum']) && count($branchSchema['enum']) === 1) {
                    $case = $this->className((string)$branchSchema['enum'][0]);
                    $code .= "    public static function {$method}(): self { return new self({$branchClass}::{$case}); }\n";
                } else {
                    $code .= "    public static function {$method}({$branchClass} \$variant): self { return new self(\$variant); }\n";
                }
            }
        } else {
            $validationDescriptor = $this->withoutDescriptions($descriptor);
            $code .= "    public {$type} \$root;\n\n    public function __construct({$type} \$root)\n    {\n        \\Near\\JsonRpc\\Models\\TypeGuard::assert(\$root, " . var_export($validationDescriptor, true) . ", 'root');\n        \$this->root = \$root;\n    }\n\n    public static function fromValue(mixed \$value): self\n    {\n        return new self(\\Near\\JsonRpc\\Models\\ModelHydrator::hydrate(\$value, " . var_export($validationDescriptor, true) . ", 'root'));\n    }\n";
        }
        $jsonDescriptor = $this->withoutDescriptions($descriptor);
        $code .= "    public static function fromArray(array \$data): self { return self::fromValue(\$data); }\n    public static function fromJson(string \$json): self { return self::fromValue(\\Near\\JsonRpc\\Models\\ModelHydrator::decodeJsonValue(\$json)); }\n    public function jsonSerialize(): mixed\n    {\n        \\Near\\JsonRpc\\Models\\JsonEncoder::assertNativeEncodingSafe(\\Near\\JsonRpc\\Models\\ModelHydrator::normalizeForJson(\$this->root, " . var_export($jsonDescriptor, true) . ", 'root'));\n        return \$this->root;\n    }\n    public function jsonSerializeForEncoding(): mixed { return \\Near\\JsonRpc\\Models\\ModelHydrator::normalizeForJson(\$this->root, " . var_export($jsonDescriptor, true) . ", 'root'); }\n    public function toJson(): string { return \\Near\\JsonRpc\\Models\\JsonEncoder::encode(\$this); }\n}\n";
        return $code;
    }

    /** @param list<array<string,mixed>> $branches @param array<string,array<string,mixed>> $schemas @return list<string> */
    private function unionNativeType(array $branches, array $schemas): string
    {
        $types = [];
        foreach ($branches as $branch) {
            foreach (explode('|', $this->phpType($branch)) as $type) {
                if (str_starts_with($type, '?')) { $types[] = substr($type, 1); $types[] = 'null'; continue; }
                if ($type === 'mixed') return 'mixed';
                $types[] = $type;
            }
        }
        return implode('|', array_values(array_unique($types)));
    }

    /** @param list<array<string,mixed>> $branches @param array<string,array<string,mixed>> $schemas @return list<string> */
    private function unionVariantLabels(string $schemaName, array $branches, array $schemas): array
    {
        $labels = [];
        $counts = [];
        foreach ($branches as $index => $branch) {
            if (isset($branch['phpClass'])) {
                $branchName = basename(str_replace('\\', '/', $branch['phpClass']));
                $branchSchema = $schemas[$branchName] ?? [];
                $base = $branchSchema['x-php-union']['label'] ?? null;
                if ($base === null && isset($branchSchema['enum']) && count($branchSchema['enum']) === 1) $base = is_string($branchSchema['enum'][0]) ? $branchSchema['enum'][0] : 'Value' . $branchSchema['enum'][0];
                $base ??= preg_replace('/^' . preg_quote($this->className($schemaName), '/') . '/', '', $branchName);
                if ($base === '' || $base === null) $base = $branchName;
            }
            elseif (isset($branch['phpEnum'])) {
                $enumName = basename(str_replace('\\', '/', $branch['phpEnum']));
                $enumValues = $schemas[$enumName]['enum'] ?? [];
                $base = count($enumValues) === 1 ? (is_string($enumValues[0]) ? $enumValues[0] : 'Value' . $enumValues[0]) : $enumName;
            }
            elseif (isset($branch['$ref'])) $base = $this->className($this->schemaReferenceName($branch['$ref'], $schemas, 'union variant'));
            elseif (isset($branch['enum']) && count($branch['enum']) === 1) $base = is_string($branch['enum'][0]) ? $branch['enum'][0] : 'Value' . $branch['enum'][0];
            elseif (isset($branch['properties']) && count($branch['properties']) === 1) $base = (string)array_key_first($branch['properties']);
            else $base = ucfirst((string)($branch['type'] ?? 'variant'));
            $counts[$base] = ($counts[$base] ?? 0) + 1;
            $labels[] = $counts[$base] === 1 ? $base : $base . $counts[$base];
        }
        return $labels;
    }

    private function isBackedEnumSchema(array $schema): bool
    {
        $type = $schema['type'] ?? null;
        if (!in_array($type, ['string', 'integer'], true) || !is_array($schema['enum'] ?? null) || $schema['enum'] === []) return false;
        foreach ($schema['enum'] as $value) if ($type === 'string' ? !is_string($value) : !is_int($value)) return false;
        return true;
    }

    /**
     * A oneOf with one inline object branch has no meaningful choice to retain.
     * Emit its fields directly on the component model, keeping the one-class-per-
     * schema contract and the branch's required fields and literal constraints.
     *
     * @param array<string,mixed> $schema
     * @return array<string,mixed>
     */
    private function flattenSingleObjectVariant(array $schema): array
    {
        if (!is_array($schema['oneOf'] ?? null) || count($schema['oneOf']) !== 1) return $schema;
        $variant = $schema['oneOf'][0];
        if (!is_array($variant) || isset($variant['$ref']) || (($variant['type'] ?? null) !== 'object' && !isset($variant['properties']))) return $schema;

        $description = $schema['description'] ?? $variant['description'] ?? null;
        unset($schema['oneOf']);
        $flattened = array_replace($schema, $variant);
        if ($description !== null) $flattened['description'] = $description;
        return $flattened;
    }

    private function emitEnum(string $schemaName, array $schema): string
    {
        $class = $this->className($schemaName);
        $backingType = $schema['type'] === 'integer' ? 'int' : 'string';
        $description = $this->docComment($schema['description'] ?? 'Generated OpenAPI backed enum.');
        $code = "<?php\ndeclare(strict_types=1);\n\nnamespace Near\\JsonRpc\\Generated\\Models;\n\n{$description}enum {$class}: {$backingType} implements \\JsonSerializable\n{\n";
        $usedCases = [];
        foreach ($schema['enum'] as $value) {
            $case = $this->className((string)$value);
            if (isset($usedCases[$case])) throw new \RuntimeException("Enum values in {$schemaName} map to the same PHP case {$case}.");
            $usedCases[$case] = true;
            $code .= '    case ' . $case . ' = ' . var_export($value, true) . ";\n";
        }
        $code .= "\n    public static function fromValue(mixed \$value): self\n    {\n        if (\$value instanceof self) return \$value;\n        if (!is_{$backingType}(\$value)) throw new \\InvalidArgumentException('Invalid value for {$class}.');\n        return self::tryFrom(\$value) ?? throw new \\InvalidArgumentException('Unknown value for {$class}.');\n    }\n";
        $code .= "\n    public static function fromJson(string \$json): self\n    {\n        return self::fromValue(\\Near\\JsonRpc\\Models\\ModelHydrator::decodeJsonValue(\$json));\n    }\n";
        $code .= "\n    public function jsonSerialize(): mixed { return \$this->value; }\n    public function toJson(): string { return json_encode(\$this, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); }\n}\n";
        return $code;
    }

    private function emitModel(string $schemaName, array $schema, array $schemas): string
    {
        $class = $this->className($schemaName);
        $properties = $schema['properties'] ?? [];
        $required = array_fill_keys($schema['required'] ?? [], true);
        $fieldNames = [];
        foreach ($properties as $jsonName => $fieldSchema) {
            $field = $this->fieldName((string)$jsonName);
            if (isset($fieldNames[$field])) throw new \RuntimeException("Properties {$fieldNames[$field]} and {$jsonName} collide in model {$schemaName}.");
            $fieldNames[$field] = $jsonName;
        }
        $ordered = $properties;
        uksort($ordered, static fn($a, $b): int => (isset($required[$a]) === isset($required[$b])) ? 0 : (isset($required[$a]) ? -1 : 1));
        $classDescription = $this->docComment($schema['description'] ?? 'Generated typed OpenAPI object model.');
        $additional = $schema['additionalProperties'] ?? null;
        $patterns = $schema['patternProperties'] ?? [];
        $patterns = is_array($patterns) ? $patterns : [];
        // JSON Schema defaults additionalProperties to true. Preserve unknown
        // fields for open objects unless the schema explicitly closes them.
        // Pattern properties also need to be captured so their constraints
        // can be validated and their values serialized again.
        $preservesExtra = $additional !== false || $patterns !== [];
        $code = "<?php\ndeclare(strict_types=1);\n\nnamespace Near\\JsonRpc\\Generated\\Models;\n\n{$classDescription}final readonly class {$class} implements \\Near\\JsonRpc\\Models\\ModelJsonSerializable\n{\n";
        if ($preservesExtra) $code .= "    /** @var array<string, mixed> */\n    private array \$extra;\n\n";
        $code .= "    public function __construct(\n";
        $params = [];
        foreach ($ordered as $jsonName => $fieldSchema) {
            $descriptor = $this->propertyDescriptor($fieldSchema, $schemas, "#/components/schemas/{$schemaName}/properties/{$jsonName}");
            $field = $this->fieldName((string)$jsonName);
            $requiredField = isset($required[$jsonName]);
            $nullableOptional = !$requiredField && $this->allowsNull($descriptor);
            if ($requiredField) $typeDoc = $this->phpDocType($descriptor);
            elseif ($nullableOptional) $typeDoc = '\\Near\\JsonRpc\\Models\\OptionalValue<' . $this->phpDocType($descriptor) . '>';
            else $typeDoc = $this->nullablePhpType($this->phpDocType($descriptor));
            $comment = $this->docComment($fieldSchema['description'] ?? null, $typeDoc, '        ');
            if ($requiredField) $params[] = $comment . "        public {$this->phpType($descriptor)} \${$field}";
            elseif ($nullableOptional) $params[] = $comment . "        public \\Near\\JsonRpc\\Models\\OptionalValue \${$field} = new \\Near\\JsonRpc\\Models\\OptionalValue()";
            else $params[] = $comment . "        public {$this->nullablePhpType($this->phpType($descriptor))} \${$field} = null";
        }
        if ($preservesExtra) $params[] = "        /** @var array<string, mixed> */\n        array \$_extra = [],";
        $code .= implode(",\n", $params) . "\n    ) {\n";
        if ($preservesExtra) $code .= "        \$this->extra = \$_extra;\n";
        foreach ($ordered as $jsonName => $fieldSchema) {
            $descriptor = $this->propertyDescriptor($fieldSchema, $schemas, "#/components/schemas/{$schemaName}/properties/{$jsonName}");
            $field = $this->fieldName((string)$jsonName);
            $requiredField = isset($required[$jsonName]);
            $validationDescriptor = $this->withoutDescriptions($descriptor);
            if ($requiredField) $code .= "        \\Near\\JsonRpc\\Models\\TypeGuard::assert(\$this->{$field}, " . var_export($validationDescriptor, true) . ", " . var_export((string)$jsonName, true) . ");\n";
            elseif ($this->allowsNull($descriptor)) $code .= "        if (\$this->{$field}->present) \\Near\\JsonRpc\\Models\\TypeGuard::assert(\$this->{$field}->value, " . var_export($validationDescriptor, true) . ", " . var_export((string)$jsonName, true) . ");\n";
            else $code .= "        if (\$this->{$field} !== null) \\Near\\JsonRpc\\Models\\TypeGuard::assert(\$this->{$field}, " . var_export($validationDescriptor, true) . ", " . var_export((string)$jsonName, true) . ");\n";
        }
        if (is_array($patterns)) foreach ($patterns as $pattern => $patternSchema) {
            $patterns[$pattern] = $this->propertyDescriptor($patternSchema, $schemas, "#/components/schemas/{$schemaName}/patternProperties/{$pattern}");
        }
        if ($additional !== false && (!is_array($patterns) || $patterns === []) && is_array($additional)) {
            $descriptor = $this->propertyDescriptor($additional, $schemas, "#/components/schemas/{$schemaName}/additionalProperties");
            $code .= "        foreach (\$this->extra as \$key => \$value) \\Near\\JsonRpc\\Models\\TypeGuard::assert(\$value, " . var_export($this->withoutDescriptions($descriptor), true) . ", (string) \$key);\n";
        } elseif ($patterns !== []) {
            $code .= "        foreach (\$this->extra as \$key => \$value) {\n            \$matchingPatterns = \\Near\\JsonRpc\\Models\\TypeGuard::matchingPatternSchemas((string) \$key, " . var_export($patterns, true) . ");\n            if (\$matchingPatterns !== []) {\n                foreach (\$matchingPatterns as \$patternSchema) \\Near\\JsonRpc\\Models\\TypeGuard::assert(\$value, \$patternSchema, (string) \$key);\n            }";
            if (is_array($additional)) {
                $descriptor = $this->propertyDescriptor($additional, $schemas, "#/components/schemas/{$schemaName}/additionalProperties");
                $code .= " elseif (true) \\Near\\JsonRpc\\Models\\TypeGuard::assert(\$value, " . var_export($this->withoutDescriptions($descriptor), true) . ", (string) \$key);";
            } elseif ($additional === false) {
                $code .= " else throw new \\InvalidArgumentException('Unknown field ' . (string) \$key . ' in {$class}.');";
            }
            $code .= "\n        }\n";
        }
        $code .= "    }\n\n    public static function fromValue(mixed \$value): self\n    {\n        if (\$value instanceof self) return \$value;\n        if (\$value instanceof \\stdClass) return self::fromArray(get_object_vars(\$value));\n        if (!is_array(\$value) || array_is_list(\$value)) throw new \\InvalidArgumentException('Expected an object value for {$class}.');\n        return self::fromArray(\$value);\n    }\n\n    /** @param array<string,mixed> \$data */\n    public static function fromArray(array \$data): self\n    {\n";
        foreach (array_keys($required) as $jsonName) $code .= '        if (!array_key_exists(' . var_export($jsonName, true) . ", \$data)) throw new \\InvalidArgumentException('Missing required field: " . addslashes((string)$jsonName) . "');\n";
        $known = array_fill_keys(array_map('strval', array_keys($properties)), true);
        if ($preservesExtra) {
            $code .= "        \$extra = array_diff_key(\$data, " . var_export($known, true) . ");\n";
        } else {
            $code .= "        \$unknown = array_diff_key(\$data, " . var_export($known, true) . ");\n        if (\$unknown !== []) throw new \\InvalidArgumentException('Unknown field ' . (string) array_key_first(\$unknown) . ' in {$class}.');\n";
        }
        if (is_array($additional)) {
            $descriptor = $this->propertyDescriptor($additional, $schemas, "#/components/schemas/{$schemaName}/additionalProperties");
            $code .= "        foreach (\$extra as \$key => \$value) \$extra[\$key] = \\Near\\JsonRpc\\Models\\ModelHydrator::hydrate(\$value, " . var_export($this->withoutDescriptions($descriptor), true) . ", (string) \$key);\n";
        }
        $args = [];
        foreach ($ordered as $jsonName => $fieldSchema) {
            $descriptor = $this->propertyDescriptor($fieldSchema, $schemas, "#/components/schemas/{$schemaName}/properties/{$jsonName}");
            $field = $this->fieldName((string)$jsonName);
            $json = var_export((string)$jsonName, true);
            $hydrate = "\\Near\\JsonRpc\\Models\\ModelHydrator::hydrate(\$data[{$json}], " . var_export($this->withoutDescriptions($descriptor), true) . ", {$json})";
            if (isset($required[$jsonName])) $args[] = "            {$field}: {$hydrate}";
            elseif ($this->allowsNull($descriptor)) $args[] = "            {$field}: array_key_exists({$json}, \$data) ? \\Near\\JsonRpc\\Models\\OptionalValue::of({$hydrate}) : new \\Near\\JsonRpc\\Models\\OptionalValue()";
            else $args[] = "            {$field}: array_key_exists({$json}, \$data) ? {$hydrate} : null";
        }
        if ($preservesExtra) $args[] = '            _extra: $extra';
        $code .= "        return new self(\n" . implode(",\n", $args) . "\n        );\n    }\n\n    public static function fromJson(string \$json): self\n    {\n        return self::fromArray(\\Near\\JsonRpc\\Models\\ModelHydrator::decodeJsonObject(\$json));\n    }\n\n    private function jsonSerializeValue(): \\stdClass\n    {\n        \$data = \$this->extra;\n";
        $serialStart = $preservesExtra ? '$this->extra' : '[]';
        $code = str_replace("\$data = \$this->extra;", "\$data = {$serialStart};", $code);
        foreach ($ordered as $jsonName => $fieldSchema) {
            $field = $this->fieldName((string)$jsonName);
            $json = var_export((string)$jsonName, true);
            if (isset($required[$jsonName])) $code .= "        \$data[{$json}] = \$this->{$field};\n";
            elseif ($this->allowsNull($this->propertyDescriptor($fieldSchema, $schemas, "#/components/schemas/{$schemaName}/properties/{$jsonName}"))) $code .= "        if (\$this->{$field}->present) \$data[{$json}] = \$this->{$field}->value;\n";
            else $code .= "        if (\$this->{$field} !== null) \$data[{$json}] = \$this->{$field};\n";
        }
        $encodingDescriptor = $this->withoutDescriptions($this->propertyDescriptor($schema, $schemas, "#/components/schemas/{$schemaName}"));
        $code .= "        return (object) \$data;\n    }\n\n    public function jsonSerialize(): \\stdClass\n    {\n        \$data = \$this->jsonSerializeValue();\n        \\Near\\JsonRpc\\Models\\JsonEncoder::assertNativeEncodingSafe(\\Near\\JsonRpc\\Models\\ModelHydrator::normalizeForJson(\$data, " . var_export($encodingDescriptor, true) . ', ' . var_export($schemaName, true) . "));\n        return \$data;\n    }\n\n    public function jsonSerializeForEncoding(): mixed\n    {\n        return \\Near\\JsonRpc\\Models\\ModelHydrator::normalizeForJson(\$this->jsonSerializeValue(), " . var_export($encodingDescriptor, true) . ', ' . var_export($schemaName, true) . ");\n    }\n\n    public function toJson(): string { return \\Near\\JsonRpc\\Models\\JsonEncoder::encode(\$this); }\n}\n";
        return $code;
    }

    private function propertyDescriptor(mixed $schema, array $schemas, string $context): array
    {
        if (!is_array($schema)) throw new \RuntimeException("Malformed property schema at {$context}.");
        if (isset($schema['allOf'])) {
            if (!is_array($schema['allOf']) || $schema['allOf'] === []) throw new \RuntimeException("Malformed allOf property schema at {$context}.");
            if (count($schema['allOf']) === 1 && isset($schema['allOf'][0]['$ref']) && !isset($schema['properties'])) {
                $siblings = array_diff(array_keys($schema), ['allOf', 'description', 'title', 'nullable', 'deprecated', 'readOnly', 'writeOnly', 'default', 'example', 'examples']);
                if ($siblings === []) {
                    $descriptor = $this->propertyDescriptor($schema['allOf'][0], $schemas, $context . '/allOf/0');
                    if (($schema['nullable'] ?? false) === true) $descriptor['nullable'] = true;
                    $descriptor = $this->inheritDescription($descriptor, $schema);
                    return $descriptor;
                }
            }
            return $this->propertyDescriptor($this->resolveAllOf($schema, $schemas, []), $schemas, $context . '/allOf');
        }
        foreach (['oneOf', 'anyOf'] as $composition) if (isset($schema[$composition])) {
            if (!is_array($schema[$composition]) || $schema[$composition] === []) throw new \RuntimeException("Malformed {$composition} property schema at {$context}.");
            $schema[$composition] = array_map(fn(mixed $branch, int|string $index): array => $this->propertyDescriptor($branch, $schemas, $context . '/' . $composition . '/' . $index), $schema[$composition], array_keys($schema[$composition]));
            return $schema;
        }
        if (isset($schema['$ref'])) {
            $name = $this->schemaReferenceName($schema['$ref'], $schemas, $context);
            if ($this->isBackedEnumSchema($schemas[$name])) return $this->inheritDescription(['phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\' . $this->className($name), 'nullable' => (bool)($schema['nullable'] ?? false)], $schema);
            return $this->inheritDescription(['phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\' . $this->className($name), 'nullable' => (bool)($schema['nullable'] ?? false)], $schema);
        }
        $type = $schema['type'] ?? (isset($schema['properties']) ? 'object' : null);
        if ($type === 'array') {
            if (!isset($schema['items'])) throw new \RuntimeException("Array schema lacks items at {$context}.");
            if (is_array($schema['items']) && array_is_list($schema['items'])) {
                foreach ($schema['items'] as $index => $item) $schema['items'][$index] = $this->propertyDescriptor($item, $schemas, $context . '/items/' . $index);
            } else $schema['items'] = $this->propertyDescriptor($schema['items'], $schemas, $context . '/items');
        } elseif ($type === 'object') {
            if (!isset($schema['properties']) && !isset($schema['patternProperties']) && (!isset($schema['additionalProperties']) || $schema['additionalProperties'] === true)) {
                return $this->inheritDescription(['jsonObject' => true, 'nullable' => (bool)($schema['nullable'] ?? false)], $schema);
            }
            if (isset($schema['properties'])) {
                if (!is_array($schema['properties'])) throw new \RuntimeException("Malformed object properties at {$context}.");
                foreach ($schema['properties'] as $name => $property) $schema['properties'][$name] = $this->propertyDescriptor($property, $schemas, $context . '/properties/' . $name);
                $schema['required'] = array_values($schema['required'] ?? []);
            }
            if (is_array($schema['additionalProperties'] ?? null)) $schema['additionalProperties'] = $this->propertyDescriptor($schema['additionalProperties'], $schemas, $context . '/additionalProperties');
            elseif (isset($schema['additionalProperties']) && !is_bool($schema['additionalProperties'])) throw new \RuntimeException("Malformed additionalProperties at {$context}.");
        } elseif (!in_array($type, ['string', 'integer', 'number', 'boolean', 'null'], true)) {
            if ($type === null && ($schema['nullable'] ?? false) === true && in_array(null, $schema['enum'] ?? [], true)) $type = 'null';
            else throw new \RuntimeException("Unsupported property type at {$context}.");
        }
        if (isset($schema['enum']) && (!is_array($schema['enum']) || $type === null)) throw new \RuntimeException("Malformed enum at {$context}.");
        $schema['type'] = $type;
        return $schema;
    }

    /** Keep use-site descriptions while collapsing $ref and single-ref allOf schemas. */
    private function inheritDescription(array $descriptor, array $schema): array
    {
        if (array_key_exists('description', $schema)) $descriptor['description'] = $schema['description'];
        return $descriptor;
    }

    private function phpType(array $schema): string
    {
        if (($schema['jsonObject'] ?? false) === true) return '\\Near\\JsonRpc\\Models\\JsonObject';
        if (isset($schema['oneOf']) || isset($schema['anyOf'])) {
            $type = $this->unionNativeType($schema[isset($schema['oneOf']) ? 'oneOf' : 'anyOf'], []);
        } elseif (isset($schema['phpEnum'])) $type = $schema['phpEnum'];
        elseif (isset($schema['phpClass'])) $type = $schema['phpClass'];
        else $type = match ($schema['type']) {
            'string' => 'string',
            'integer' => in_array($schema['format'] ?? null, ['int64', 'uint64', 'uint'], true) ? 'int|string' : 'int',
            'number' => 'int|float',
            'boolean' => 'bool',
            'null' => 'null',
            'array' => 'array',
            'object' => 'array|\\stdClass',
            default => 'mixed'
        };
        if (($schema['nullable'] ?? false) === true && $type !== 'mixed' && $type !== 'null' && !preg_match('/(^|\\|)null($|\\|)/', $type)) $type = str_contains($type, '|') ? $type . '|null' : '?' . $type;
        return $type;
    }

    private function nullablePhpType(string $type): string
    {
        if ($type === 'mixed' || $type === 'null' || str_contains($type, 'null')) return $type;
        return $type . '|null';
    }

    /** Whether a schema composition admits JSON null as a value. */
    private function allowsNull(array $schema): bool
    {
        if (($schema['nullable'] ?? false) === true || ($schema['type'] ?? null) === 'null' || in_array(null, $schema['enum'] ?? [], true)) return true;
        foreach (['oneOf', 'anyOf'] as $composition) foreach ($schema[$composition] ?? [] as $branch) {
            if (is_array($branch) && $this->allowsNull($branch)) return true;
        }
        return false;
    }

    private function docComment(mixed $description, ?string $type = null, string $indent = ''): string
    {
        $text = is_string($description) ? trim($description) : '';
        $lines = $text === '' ? [] : (preg_split('/\R/', $text) ?: []);
        $lines = array_map(static fn(string $line): string => str_replace('*/', '* /', rtrim($line)), $lines);
        if ($type !== null) {
            if ($lines !== []) $lines[] = '';
            $lines[] = '@var ' . $type;
        }
        if ($lines === []) return $indent . "/** Generated model. */\n";
        $comment = $indent . "/**\n";
        foreach ($lines as $line) $comment .= $indent . ' *' . ($line === '' ? '' : ' ' . $line) . "\n";
        return $comment . $indent . " */\n";
    }

    private function withoutDescriptions(array $schema): array
    {
        unset($schema['description']);
        foreach ($schema as $key => $value) {
            if (is_array($value)) {
                if (array_is_list($value)) $schema[$key] = array_map(fn(mixed $item): mixed => is_array($item) ? $this->withoutDescriptions($item) : $item, $value);
                else $schema[$key] = $this->withoutDescriptions($value);
            }
        }
        return $schema;
    }

    private function phpDocType(array $schema): string
    {
        if (($schema['jsonObject'] ?? false) === true) return '\\Near\\JsonRpc\\Models\\JsonObject';
        if (isset($schema['oneOf']) || isset($schema['anyOf'])) {
            $type = implode('|', array_values(array_unique(array_map(fn(array $branch): string => $this->phpDocType($branch), $schema[isset($schema['oneOf']) ? 'oneOf' : 'anyOf']))));
        } elseif (isset($schema['phpEnum'])) $type = $schema['phpEnum'];
        elseif (isset($schema['phpClass'])) $type = $schema['phpClass'];
        elseif (isset($schema['enum']) && is_array($schema['enum']) && $schema['enum'] !== []) {
            $type = implode('|', array_map(static fn(mixed $value): string => is_string($value) ? "'" . str_replace("'", "\\'", $value) . "'" : (is_int($value) ? (string)$value : ($value === null ? 'null' : 'mixed')), $schema['enum']));
        }
        elseif (($schema['type'] ?? null) === 'object' && is_array($schema['properties'] ?? null)) {
            $fields = [];
            foreach ($schema['properties'] as $name => $property) {
                $key = preg_match('/^[A-Za-z_][A-Za-z0-9_]*$/', (string)$name) ? (string)$name : var_export((string)$name, true);
                $optional = in_array($name, $schema['required'] ?? [], true) ? '' : '?';
                $fields[] = $key . $optional . ': ' . $this->phpDocType($property);
            }
            $type = 'array{' . implode(', ', $fields) . '}';
        }
        else $type = match ($schema['type']) {
            'string' => 'string',
            'integer' => in_array($schema['format'] ?? null, ['int64', 'uint64', 'uint'], true) ? 'int|string' : 'int',
            'number' => 'int|float',
            'boolean' => 'bool',
            'null' => 'null',
            'array' => is_array($schema['items'] ?? null) && array_is_list($schema['items']) ? 'array{' . implode(', ', array_map(fn(array $item): string => $this->phpDocType($item), $schema['items'])) . '}' : 'list<' . $this->phpDocType($schema['items']) . '>',
            'object' => is_array($schema['additionalProperties'] ?? null)
                ? 'array<string, ' . $this->phpDocType($schema['additionalProperties']) . '>'
                : (is_array($schema['patternProperties'] ?? null)
                    ? 'array<string, ' . implode('|', array_values(array_unique(array_map(fn(array $value): string => $this->phpDocType($value), $schema['patternProperties']))) ) . '>'
                    : 'array<string, mixed>'),
            default => 'mixed',
        };
        if (($schema['type'] ?? null) === 'object' && !str_contains($type, '\\stdClass')) $type .= '|\\stdClass';
        return $type . ((($schema['nullable'] ?? false) && !preg_match('/(^|\\|)null($|\\|)/', $type)) ? '|null' : '');
    }

    private function fieldName(string $name): string
    {
        return lcfirst($this->className($name));
    }

    private function write(string $path, string $contents): void
    {
        if (file_put_contents($path, $contents, LOCK_EX) === false) throw new \RuntimeException("Cannot write generated file: {$path}");
    }

    private function className(string $name): string
    {
        // OpenAPI preserves NEAR's wire-level EXPERIMENTAL prefix in schema names.
        // PHP identifiers use normal PascalCase; RPC method strings remain untouched.
        $name = preg_replace('/(?<![A-Za-z0-9])EXPERIMENTAL(?![A-Za-z0-9])/', 'Experimental', $name) ?? $name;
        $words = preg_split('/[^A-Za-z0-9]+|(?<=[a-z0-9])(?=[A-Z])|(?<=[A-Z])(?=[A-Z][a-z])/', $name, -1, PREG_SPLIT_NO_EMPTY) ?: [];
        $acronyms = ['API', 'BLS', 'ETH', 'HTTP', 'ID', 'JSON', 'RPC', 'URL', 'VM'];
        $n = '';
        foreach ($words as $word) {
            $upper = strtoupper($word);
            $n .= strlen($word) > 1 && $word === $upper && in_array($upper, $acronyms, true)
                ? $upper
                : ucfirst(strtolower($word));
        }
        if ($n === '' || ctype_digit($n[0])) $n = 'Schema' . $n;
        if (in_array(strtolower($n), ['abstract', 'and', 'array', 'as', 'bool', 'break', 'callable', 'case', 'catch', 'class', 'clone', 'const', 'continue', 'declare', 'default', 'die', 'do', 'echo', 'else', 'elseif', 'empty', 'enddeclare', 'endfor', 'endforeach', 'endif', 'endswitch', 'endwhile', 'enum', 'eval', 'exit', 'extends', 'false', 'final', 'finally', 'float', 'for', 'foreach', 'function', 'global', 'goto', 'if', 'implements', 'include', 'include_once', 'instanceof', 'insteadof', 'int', 'interface', 'isset', 'iterable', 'list', 'match', 'mixed', 'namespace', 'never', 'new', 'null', 'object', 'or', 'parent', 'print', 'private', 'protected', 'public', 'readonly', 'real', 'require', 'require_once', 'resource', 'return', 'self', 'static', 'string', 'switch', 'throw', 'trait', 'try', 'true', 'unset', 'use', 'var', 'void', 'while', 'xor'], true)) $n .= 'Model';
        return $n;
    }

    private function methodName(string $name): string
    {
        $n = lcfirst($this->className($name));
        if (in_array($n, ['match', 'class', 'function', 'default', 'new', 'throw', 'clone', 'yield'], true)) $n .= 'Rpc';
        return $n;
    }
}
