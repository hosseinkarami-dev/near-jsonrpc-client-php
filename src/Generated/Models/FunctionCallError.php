<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Serializable version of `near-vm-runner::FunctionCallError`.
 *
 * Must never reorder/remove elements, can only add new variants at the end (but do that very
 * carefully). It describes stable serialization format, and only used by serialization logic.
 */
final readonly class FunctionCallError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\FunctionCallErrorStringValue|\Near\JsonRpc\Generated\Models\FunctionCallErrorCompilationError|\Near\JsonRpc\Generated\Models\FunctionCallErrorLinkError|\Near\JsonRpc\Generated\Models\FunctionCallErrorMethodResolveError|\Near\JsonRpc\Generated\Models\FunctionCallErrorWasmTrap|\Near\JsonRpc\Generated\Models\FunctionCallErrorHostError|\Near\JsonRpc\Generated\Models\FunctionCallErrorExecutionError */
    public \Near\JsonRpc\Generated\Models\FunctionCallErrorStringValue|\Near\JsonRpc\Generated\Models\FunctionCallErrorCompilationError|\Near\JsonRpc\Generated\Models\FunctionCallErrorLinkError|\Near\JsonRpc\Generated\Models\FunctionCallErrorMethodResolveError|\Near\JsonRpc\Generated\Models\FunctionCallErrorWasmTrap|\Near\JsonRpc\Generated\Models\FunctionCallErrorHostError|\Near\JsonRpc\Generated\Models\FunctionCallErrorExecutionError $root;

    public function __construct(\Near\JsonRpc\Generated\Models\FunctionCallErrorStringValue|\Near\JsonRpc\Generated\Models\FunctionCallErrorCompilationError|\Near\JsonRpc\Generated\Models\FunctionCallErrorLinkError|\Near\JsonRpc\Generated\Models\FunctionCallErrorMethodResolveError|\Near\JsonRpc\Generated\Models\FunctionCallErrorWasmTrap|\Near\JsonRpc\Generated\Models\FunctionCallErrorHostError|\Near\JsonRpc\Generated\Models\FunctionCallErrorExecutionError $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\FunctionCallErrorStringValue::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\FunctionCallErrorCompilationError::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\FunctionCallErrorLinkError::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\FunctionCallErrorMethodResolveError::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[4] = \Near\JsonRpc\Generated\Models\FunctionCallErrorWasmTrap::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[5] = \Near\JsonRpc\Generated\Models\FunctionCallErrorHostError::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[6] = \Near\JsonRpc\Generated\Models\FunctionCallErrorExecutionError::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for FunctionCallError.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\FunctionCallErrorStringValue => 'FunctionCallErrorStringValue',
            $this->root instanceof \Near\JsonRpc\Generated\Models\FunctionCallErrorCompilationError => 'CompilationError',
            $this->root instanceof \Near\JsonRpc\Generated\Models\FunctionCallErrorLinkError => 'LinkError',
            $this->root instanceof \Near\JsonRpc\Generated\Models\FunctionCallErrorMethodResolveError => 'MethodResolveError',
            $this->root instanceof \Near\JsonRpc\Generated\Models\FunctionCallErrorWasmTrap => 'WasmTrap',
            $this->root instanceof \Near\JsonRpc\Generated\Models\FunctionCallErrorHostError => 'HostError',
            $this->root instanceof \Near\JsonRpc\Generated\Models\FunctionCallErrorExecutionError => 'ExecutionError',
            default => throw new \LogicException('Unknown FunctionCallError variant.'),
        };
    }
    public static function functionCallErrorStringValue(\Near\JsonRpc\Generated\Models\FunctionCallErrorStringValue $variant): self { return new self($variant); }
    public static function compilationError(\Near\JsonRpc\Generated\Models\CompilationError $payload): self { return new self(new \Near\JsonRpc\Generated\Models\FunctionCallErrorCompilationError($payload)); }
    public static function linkError(\Near\JsonRpc\Generated\Models\FunctionCallErrorLinkErrorPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\FunctionCallErrorLinkError($payload)); }
    public static function methodResolveError(\Near\JsonRpc\Generated\Models\MethodResolveError $payload): self { return new self(new \Near\JsonRpc\Generated\Models\FunctionCallErrorMethodResolveError($payload)); }
    public static function wasmTrap(\Near\JsonRpc\Generated\Models\WasmTrap $payload): self { return new self(new \Near\JsonRpc\Generated\Models\FunctionCallErrorWasmTrap($payload)); }
    public static function hostError(\Near\JsonRpc\Generated\Models\HostError $payload): self { return new self(new \Near\JsonRpc\Generated\Models\FunctionCallErrorHostError($payload)); }
    public static function executionError(\Near\JsonRpc\Generated\Models\FunctionCallErrorExecutionError $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\FunctionCallErrorStringValue',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FunctionCallErrorCompilationError',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FunctionCallErrorLinkError',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FunctionCallErrorMethodResolveError',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FunctionCallErrorWasmTrap',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FunctionCallErrorHostError',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FunctionCallErrorExecutionError',
      'nullable' => false,
    ),
  ),
), 'root'));
        return $this->root;
    }
    public function jsonSerializeForEncoding(): mixed { return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\FunctionCallErrorStringValue',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FunctionCallErrorCompilationError',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FunctionCallErrorLinkError',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FunctionCallErrorMethodResolveError',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FunctionCallErrorWasmTrap',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FunctionCallErrorHostError',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FunctionCallErrorExecutionError',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
