<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class RpcChunkError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\RpcChunkErrorInternalError|\Near\JsonRpc\Generated\Models\RpcChunkErrorUnknownBlock|\Near\JsonRpc\Generated\Models\RpcChunkErrorInvalidShardID|\Near\JsonRpc\Generated\Models\RpcChunkErrorUnknownChunk */
    public \Near\JsonRpc\Generated\Models\RpcChunkErrorInternalError|\Near\JsonRpc\Generated\Models\RpcChunkErrorUnknownBlock|\Near\JsonRpc\Generated\Models\RpcChunkErrorInvalidShardID|\Near\JsonRpc\Generated\Models\RpcChunkErrorUnknownChunk $root;

    public function __construct(\Near\JsonRpc\Generated\Models\RpcChunkErrorInternalError|\Near\JsonRpc\Generated\Models\RpcChunkErrorUnknownBlock|\Near\JsonRpc\Generated\Models\RpcChunkErrorInvalidShardID|\Near\JsonRpc\Generated\Models\RpcChunkErrorUnknownChunk $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\RpcChunkErrorInternalError::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\RpcChunkErrorUnknownBlock::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\RpcChunkErrorInvalidShardID::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\RpcChunkErrorUnknownChunk::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for RpcChunkError.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcChunkErrorInternalError => 'INTERNAL_ERROR',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcChunkErrorUnknownBlock => 'UNKNOWN_BLOCK',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcChunkErrorInvalidShardID => 'INVALID_SHARD_ID',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcChunkErrorUnknownChunk => 'UNKNOWN_CHUNK',
            default => throw new \LogicException('Unknown RpcChunkError variant.'),
        };
    }
    public static function internalError(\Near\JsonRpc\Generated\Models\RpcChunkErrorInternalError $variant): self { return new self($variant); }
    public static function unknownBlock(\Near\JsonRpc\Generated\Models\RpcChunkErrorUnknownBlock $variant): self { return new self($variant); }
    public static function invalidShardID(\Near\JsonRpc\Generated\Models\RpcChunkErrorInvalidShardID $variant): self { return new self($variant); }
    public static function unknownChunk(\Near\JsonRpc\Generated\Models\RpcChunkErrorUnknownChunk $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcChunkErrorInternalError',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcChunkErrorUnknownBlock',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcChunkErrorInvalidShardID',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcChunkErrorUnknownChunk',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcChunkErrorInternalError',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcChunkErrorUnknownBlock',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcChunkErrorInvalidShardID',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcChunkErrorUnknownChunk',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
