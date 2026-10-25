<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generator;

/** Generates one PHPUnit JSON encode/decode test method for each OpenAPI schema model. */
final class ModelJsonTestGenerator
{
    /** @param list<string> $models @param array<string,array<string,mixed>> $modelSchemas */
    public function write(array $models, array $modelSchemas, string $path): void
    {
        $code = "<?php\ndeclare(strict_types=1);\n\n";
        $code .= "namespace Near\\JsonRpc\\Tests;\n\n";
        $code .= "use PHPUnit\\Framework\\TestCase;\n\n";
        $code .= "require_once dirname(__DIR__) . '/vendor/autoload.php';\n\n";
        $code .= "/** One fixture-driven round-trip test for every generated schema model. */\n";
        $code .= "final class GeneratedModelJsonTest extends TestCase\n{\n";
        $code .= "    /** Compare JSON values by meaning: object key order is insignificant, array order is not. */\n";
        $code .= "    private static function canonicalizeJsonValue(mixed \$value): mixed\n    {\n        if (!is_array(\$value)) return \$value;\n        foreach (\$value as \$key => \$child) \$value[\$key] = self::canonicalizeJsonValue(\$child);\n        if (!array_is_list(\$value)) ksort(\$value);\n        return \$value;\n    }\n\n";

        foreach ($models as $model) {
            $fixture = var_export('resources/models/'.$model.'.json', true);
            $class = '\\Near\\JsonRpc\\Generated\\Models\\'.$model;
            $code .= "    public function testModelJsonRoundTrip{$model}(): void\n    {\n";
            $code .= "        \$fixturePath = __DIR__ . '/' . {$fixture};\n";
            $code .= "        \$json = file_get_contents(\$fixturePath);\n";
            $code .= "        self::assertNotFalse(\$json, 'Could not read fixture for {$model}.');\n";
            $code .= "        \$model = {$class}::fromJson(\$json);\n";
            $code .= "        \$encoded = \$model->toJson();\n";
            $code .= "        \$expected = json_decode(\$json, true, 512, JSON_THROW_ON_ERROR | JSON_BIGINT_AS_STRING);\n";
            $code .= "        \$actual = json_decode(\$encoded, true, 512, JSON_THROW_ON_ERROR | JSON_BIGINT_AS_STRING);\n";
            $code .= "        self::assertSame(self::canonicalizeJsonValue(\$expected), self::canonicalizeJsonValue(\$actual), 'JSON round-trip failed for {$model}.');\n";
            $code .= "    }\n\n";
        }

        $largeIntegerCase = null;
        foreach ($models as $model) {
            foreach ($modelSchemas[$model]['properties'] ?? [] as $property => $descriptor) {
                if (!isset($modelSchemas[$model]['required'][$property])) continue;
                if (($descriptor['type'] ?? null) !== 'integer' || !in_array($descriptor['format'] ?? null, ['uint64', 'uint', 'int64'], true)) continue;
                $largeIntegerCase = [$model, (string)$property];
                break 2;
            }
        }
        if ($largeIntegerCase !== null) {
            [$model, $property] = $largeIntegerCase;
            $class = '\\Near\\JsonRpc\\Generated\\Models\\' . $model;
            $field = var_export($property, true);
            $fixture = var_export('resources/models/' . $model . '.json', true);
            $largeValue = $property === 'secs' ? '-9223372036854775808' : '18446744073709551615';
            $pattern = '/"' . preg_quote($property, '/') . '"\\s*:\\s*' . preg_quote($largeValue, '/') . '(?:\\s*[,}])/';
            $nestedPattern = '/"params"\\s*:\\s*\\{/';
            $code .= "    public function testLargeIntegerModelRoundTripKeepsJsonNumberType(): void\n    {\n";
            $code .= "        \$fixture = file_get_contents(__DIR__ . '/' . {$fixture});\n";
            $code .= "        self::assertNotFalse(\$fixture);\n";
            $code .= "        \$data = json_decode(\$fixture, false, 512, JSON_THROW_ON_ERROR | JSON_BIGINT_AS_STRING);\n";
            $code .= "        \$data->{" . $field . "} = " . var_export($largeValue, true) . ";\n";
            $code .= "        \$model = {$class}::fromArray(get_object_vars(\$data));\n";
            $code .= "        \$encoded = \$model->toJson();\n";
            $code .= "        self::assertMatchesRegularExpression(" . var_export($pattern, true) . ", \$encoded, 'Large integer must be emitted as an unquoted JSON number.');\n";
            $code .= "        try { json_encode(\$model, JSON_THROW_ON_ERROR); self::fail('Native json_encode must not silently quote a large JSON integer.'); }\n        catch (\\LogicException \$exception) { self::assertStringContainsString('toJson()', \$exception->getMessage()); }\n";
            $code .= "        \$nested = \\Near\\JsonRpc\\Models\\JsonEncoder::encode(['params' => \$model]);\n";
            $code .= "        self::assertMatchesRegularExpression(" . var_export($nestedPattern, true) . ", \$nested);\n";
            $code .= "        self::assertMatchesRegularExpression(" . var_export($pattern, true) . ", \$nested, 'Client-style nested encoding must retain the JSON number.');\n";
            $code .= "        \$rawInteger = \\Near\\JsonRpc\\Models\\JsonValue::normalize(new \\Near\\JsonRpc\\Models\\JsonNumber('18446744073709551615'));\n";
            $code .= "        self::assertSame('{\"value\":18446744073709551615}', \\Near\\JsonRpc\\Models\\JsonEncoder::encode(['value' => \$rawInteger]));\n";
            $code .= "    }\n\n";
        }

        $code .= "}\n";
        $directory = dirname($path);
        if (!is_dir($directory) && !mkdir($directory, 0777, true) && !is_dir($directory)) throw new \RuntimeException("Cannot create generated PHPUnit model test directory: {$directory}");
        if (file_put_contents($path, $code, LOCK_EX) === false) throw new \RuntimeException("Cannot write generated PHPUnit model JSON tests: {$path}");
    }
}
