<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class RpcLightClientNextBlockError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\RpcLightClientNextBlockErrorInternalError|\Near\JsonRpc\Generated\Models\RpcLightClientNextBlockErrorUnknownBlock|\Near\JsonRpc\Generated\Models\RpcLightClientNextBlockErrorEpochOutOfBounds */
    public \Near\JsonRpc\Generated\Models\RpcLightClientNextBlockErrorInternalError|\Near\JsonRpc\Generated\Models\RpcLightClientNextBlockErrorUnknownBlock|\Near\JsonRpc\Generated\Models\RpcLightClientNextBlockErrorEpochOutOfBounds $root;

    public function __construct(\Near\JsonRpc\Generated\Models\RpcLightClientNextBlockErrorInternalError|\Near\JsonRpc\Generated\Models\RpcLightClientNextBlockErrorUnknownBlock|\Near\JsonRpc\Generated\Models\RpcLightClientNextBlockErrorEpochOutOfBounds $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\RpcLightClientNextBlockErrorInternalError::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\RpcLightClientNextBlockErrorUnknownBlock::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\RpcLightClientNextBlockErrorEpochOutOfBounds::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for RpcLightClientNextBlockError.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcLightClientNextBlockErrorInternalError => 'INTERNAL_ERROR',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcLightClientNextBlockErrorUnknownBlock => 'UNKNOWN_BLOCK',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcLightClientNextBlockErrorEpochOutOfBounds => 'EPOCH_OUT_OF_BOUNDS',
            default => throw new \LogicException('Unknown RpcLightClientNextBlockError variant.'),
        };
    }
    public static function internalError(\Near\JsonRpc\Generated\Models\RpcLightClientNextBlockErrorInternalError $variant): self { return new self($variant); }
    public static function unknownBlock(\Near\JsonRpc\Generated\Models\RpcLightClientNextBlockErrorUnknownBlock $variant): self { return new self($variant); }
    public static function epochOutOfBounds(\Near\JsonRpc\Generated\Models\RpcLightClientNextBlockErrorEpochOutOfBounds $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcLightClientNextBlockErrorInternalError',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcLightClientNextBlockErrorUnknownBlock',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcLightClientNextBlockErrorEpochOutOfBounds',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcLightClientNextBlockErrorInternalError',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcLightClientNextBlockErrorUnknownBlock',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcLightClientNextBlockErrorEpochOutOfBounds',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
