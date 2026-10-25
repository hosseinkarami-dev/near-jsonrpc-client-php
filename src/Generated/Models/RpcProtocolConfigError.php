<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class RpcProtocolConfigError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\RpcProtocolConfigErrorUnknownBlock|\Near\JsonRpc\Generated\Models\RpcProtocolConfigErrorInternalError */
    public \Near\JsonRpc\Generated\Models\RpcProtocolConfigErrorUnknownBlock|\Near\JsonRpc\Generated\Models\RpcProtocolConfigErrorInternalError $root;

    public function __construct(\Near\JsonRpc\Generated\Models\RpcProtocolConfigErrorUnknownBlock|\Near\JsonRpc\Generated\Models\RpcProtocolConfigErrorInternalError $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\RpcProtocolConfigErrorUnknownBlock::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\RpcProtocolConfigErrorInternalError::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for RpcProtocolConfigError.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcProtocolConfigErrorUnknownBlock => 'UNKNOWN_BLOCK',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcProtocolConfigErrorInternalError => 'INTERNAL_ERROR',
            default => throw new \LogicException('Unknown RpcProtocolConfigError variant.'),
        };
    }
    public static function unknownBlock(\Near\JsonRpc\Generated\Models\RpcProtocolConfigErrorUnknownBlock $variant): self { return new self($variant); }
    public static function internalError(\Near\JsonRpc\Generated\Models\RpcProtocolConfigErrorInternalError $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcProtocolConfigErrorUnknownBlock',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcProtocolConfigErrorInternalError',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcProtocolConfigErrorUnknownBlock',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcProtocolConfigErrorInternalError',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
