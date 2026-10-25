<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class RpcRequestValidationErrorKind implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\RpcRequestValidationErrorKindMethodNotFound|\Near\JsonRpc\Generated\Models\RpcRequestValidationErrorKindParseError */
    public \Near\JsonRpc\Generated\Models\RpcRequestValidationErrorKindMethodNotFound|\Near\JsonRpc\Generated\Models\RpcRequestValidationErrorKindParseError $root;

    public function __construct(\Near\JsonRpc\Generated\Models\RpcRequestValidationErrorKindMethodNotFound|\Near\JsonRpc\Generated\Models\RpcRequestValidationErrorKindParseError $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\RpcRequestValidationErrorKindMethodNotFound::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\RpcRequestValidationErrorKindParseError::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for RpcRequestValidationErrorKind.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcRequestValidationErrorKindMethodNotFound => 'METHOD_NOT_FOUND',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcRequestValidationErrorKindParseError => 'PARSE_ERROR',
            default => throw new \LogicException('Unknown RpcRequestValidationErrorKind variant.'),
        };
    }
    public static function methodNotFound(\Near\JsonRpc\Generated\Models\RpcRequestValidationErrorKindMethodNotFound $variant): self { return new self($variant); }
    public static function parseError(\Near\JsonRpc\Generated\Models\RpcRequestValidationErrorKindParseError $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcRequestValidationErrorKindMethodNotFound',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcRequestValidationErrorKindParseError',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcRequestValidationErrorKindMethodNotFound',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcRequestValidationErrorKindParseError',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
