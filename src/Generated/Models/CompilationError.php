<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class CompilationError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\CompilationErrorCodeDoesNotExist|\Near\JsonRpc\Generated\Models\CompilationErrorPrepareError|\Near\JsonRpc\Generated\Models\CompilationErrorWasmerCompileError */
    public \Near\JsonRpc\Generated\Models\CompilationErrorCodeDoesNotExist|\Near\JsonRpc\Generated\Models\CompilationErrorPrepareError|\Near\JsonRpc\Generated\Models\CompilationErrorWasmerCompileError $root;

    public function __construct(\Near\JsonRpc\Generated\Models\CompilationErrorCodeDoesNotExist|\Near\JsonRpc\Generated\Models\CompilationErrorPrepareError|\Near\JsonRpc\Generated\Models\CompilationErrorWasmerCompileError $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\CompilationErrorCodeDoesNotExist::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\CompilationErrorPrepareError::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\CompilationErrorWasmerCompileError::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for CompilationError.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\CompilationErrorCodeDoesNotExist => 'CodeDoesNotExist',
            $this->root instanceof \Near\JsonRpc\Generated\Models\CompilationErrorPrepareError => 'PrepareError',
            $this->root instanceof \Near\JsonRpc\Generated\Models\CompilationErrorWasmerCompileError => 'WasmerCompileError',
            default => throw new \LogicException('Unknown CompilationError variant.'),
        };
    }
    public static function codeDoesNotExist(\Near\JsonRpc\Generated\Models\CompilationErrorCodeDoesNotExistPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\CompilationErrorCodeDoesNotExist($payload)); }
    public static function prepareError(\Near\JsonRpc\Generated\Models\PrepareError $payload): self { return new self(new \Near\JsonRpc\Generated\Models\CompilationErrorPrepareError($payload)); }
    public static function wasmerCompileError(\Near\JsonRpc\Generated\Models\CompilationErrorWasmerCompileErrorPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\CompilationErrorWasmerCompileError($payload)); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CompilationErrorCodeDoesNotExist',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CompilationErrorPrepareError',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CompilationErrorWasmerCompileError',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CompilationErrorCodeDoesNotExist',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CompilationErrorPrepareError',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CompilationErrorWasmerCompileError',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
