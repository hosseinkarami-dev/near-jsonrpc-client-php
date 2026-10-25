<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generator;

/** Renders the typed operation facade from normalized OpenAPI operations. */
final class ApiGenerator
{
    /** @param list<array{id:string,params:string,result:?array}> $operations */
    public function render(array $operations, callable $className, callable $methodName, callable $propertyDescriptor, callable $phpType, array $schemas): string
    {
        $code = "<?php\ndeclare(strict_types=1);\n\nnamespace Near\\JsonRpc\\Generated\\Client;\n\n/** Generated typed JSON-RPC methods mixed into the public Client API. */\ntrait RpcMethods\n{\n";
        foreach ($operations as $op) {
            $method = $methodName($op['id']);
            $paramsClass = '\\Near\\JsonRpc\\Generated\\Models\\'.$className($op['params']);
            if ($op['result'] === null) {
                $code .= "    /** Execute the matching OpenAPI JSON-RPC operation. */\n    public function {$method}({$paramsClass} \$params): mixed\n    { return \$this->call(".var_export($op['id'], true).", \$params); }\n";
                continue;
            }
            $descriptor = $propertyDescriptor($op['result'], $schemas, "operation {$op['id']} result");
            $returnType = $phpType($descriptor);
            $code .= "    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */\n    public function {$method}({$paramsClass} \$params): {$returnType}\n    {\n        \$result = \$this->call(".var_export($op['id'], true).", \$params);\n        return \\Near\\JsonRpc\\Models\\ModelHydrator::hydrate(\$result, ".var_export($descriptor, true).", ".var_export($op['id'].'.result', true).");\n    }\n";
        }
        return $code."}\n";
    }
}
