<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generator;

/** Generates mock-transport PHPUnit integration tests for generated RPC methods. */
final class ClientIntegrationTestGenerator
{
    /**
     * @param list<array{id:string,request:string,params:string,response:string,result:?array}> $operations
     * @param callable(string):string $className
     * @param callable(string):string $methodName
     */
    public function write(array $operations, callable $className, callable $methodName, string $path): void
    {
        $code = "<?php\ndeclare(strict_types=1);\n\nnamespace Near\\JsonRpc\\Tests;\n\n";
        $code .= "use Near\\JsonRpc\\Client\\Client;\nuse Near\\JsonRpc\\Client\\HttpResponse;\nuse Near\\JsonRpc\\Client\\Transport;\nuse PHPUnit\\Framework\\TestCase;\n\n";
        $code .= "require_once dirname(__DIR__) . '/vendor/autoload.php';\n\n";
        $code .= "/** Mock-transport integration tests for every generated JSON-RPC operation. */\nfinal class GeneratedClientIntegrationTest extends TestCase\n{\n";
        foreach ($operations as $operation) {
            $method = $methodName($operation['id']);
            $request = '\\Near\\JsonRpc\\Generated\\Models\\' . $className($operation['params']);
            $operationId = var_export($operation['id'], true);
            $descriptor = var_export($operation['result'], true);
            $testName = 'test' . ucfirst($method) . 'SendsRequestAndHydratesResult';
            $code .= "    public function {$testName}(): void\n    {\n";
            $code .= "        \$params = {$request}::fromJson((string)file_get_contents(__DIR__ . '/resources/models/{$className($operation['params'])}.json'));\n";
            $code .= "        \$transport = new class({$descriptor}) implements Transport {\n";
            $code .= "            public ?\\stdClass \$request = null;\n";
            $code .= "            public function __construct(private readonly mixed \$resultSchema) {}\n";
            $code .= "            public function send(string \$endpoint, string \$body, array \$headers, float \$timeout): HttpResponse\n            {\n";
            $code .= "                \$this->request = json_decode(\$body, false, 512, JSON_THROW_ON_ERROR);\n";
            $code .= "                \$result = GeneratedClientIntegrationTest::fixtureValue(\$this->resultSchema);\n";
            $code .= "                return new HttpResponse(200, json_encode(['jsonrpc' => '2.0', 'id' => \$this->request->id, 'result' => \$result], JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));\n";
            $code .= "            }\n        };\n";
            $code .= "        \$client = new Client(transport: \$transport);\n";
            $code .= "        \$result = \$client->{$method}(\$params);\n";
            $code .= "        self::assertSame({$operationId}, \$transport->request?->method);\n";
            $code .= "        self::assertEquals(json_decode(\$params->toJson(), false, 512, JSON_THROW_ON_ERROR), \$transport->request?->params);\n";
            $expected = $operation['result']['phpClass'] ?? null;
            if (is_string($expected)) $code .= '        self::assertInstanceOf(\\' . ltrim($expected, '\\') . "::class, \$result);\n";
            elseif (($operation['result']['type'] ?? null) === 'array') $code .= "        self::assertIsArray(\$result);\n";
            elseif (is_array($operation['result'])) $code .= "        self::assertNotNull(\$result);\n";
            $code .= "    }\n\n";
        }
        $code .= "    public static function fixtureValue(mixed \$schema): mixed\n    {\n";
        $code .= "        if (!is_array(\$schema)) return null;\n";
        $code .= "        if (isset(\$schema['phpClass'])) {\n            \$class = ltrim(\$schema['phpClass'], '\\\\');\n            \$shortName = substr(\$class, strrpos(\$class, '\\\\') + 1);\n            \$path = __DIR__ . '/resources/models/' . \$shortName . '.json';\n            if (is_file(\$path)) return json_decode((string)file_get_contents(\$path), false, 512, JSON_THROW_ON_ERROR | JSON_BIGINT_AS_STRING);\n        }\n";
        $code .= "        if (isset(\$schema['phpEnum'])) { \$cases = (\$schema['phpEnum'])::cases(); return \$cases[0]->value ?? null; }\n";
        $code .= "        if (isset(\$schema['oneOf']) || isset(\$schema['anyOf'])) { \$branches = \$schema['oneOf'] ?? \$schema['anyOf']; return self::fixtureValue(\$branches[0] ?? []); }\n";
        $code .= "        if (isset(\$schema['enum'][0])) return \$schema['enum'][0];\n";
        $code .= "        return match (\$schema['type'] ?? null) {\n            'null' => null, 'string' => 'fixture', 'integer' => \$schema['minimum'] ?? 1, 'number' => \$schema['minimum'] ?? 1, 'boolean' => true,\n            'array' => array_fill(0, max(0, (int)(\$schema['minItems'] ?? 0)), self::fixtureValue(\$schema['items'] ?? [])),\n            'object' => (object)[], default => null,\n        };\n    }\n}\n";

        $directory = dirname($path);
        if (!is_dir($directory) && !mkdir($directory, 0777, true) && !is_dir($directory)) throw new \RuntimeException("Cannot create generated client test directory: {$directory}");
        if (file_put_contents($path, $code, LOCK_EX) === false) throw new \RuntimeException("Cannot write generated client integration tests: {$path}");
    }
}
