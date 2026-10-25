<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class RpcStateChangesError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\RpcStateChangesErrorUnknownBlock|\Near\JsonRpc\Generated\Models\RpcStateChangesErrorNotSyncedYet|\Near\JsonRpc\Generated\Models\RpcStateChangesErrorInternalError|\Near\JsonRpc\Generated\Models\RpcStateChangesErrorShardNotApplied */
    public \Near\JsonRpc\Generated\Models\RpcStateChangesErrorUnknownBlock|\Near\JsonRpc\Generated\Models\RpcStateChangesErrorNotSyncedYet|\Near\JsonRpc\Generated\Models\RpcStateChangesErrorInternalError|\Near\JsonRpc\Generated\Models\RpcStateChangesErrorShardNotApplied $root;

    public function __construct(\Near\JsonRpc\Generated\Models\RpcStateChangesErrorUnknownBlock|\Near\JsonRpc\Generated\Models\RpcStateChangesErrorNotSyncedYet|\Near\JsonRpc\Generated\Models\RpcStateChangesErrorInternalError|\Near\JsonRpc\Generated\Models\RpcStateChangesErrorShardNotApplied $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\RpcStateChangesErrorUnknownBlock::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\RpcStateChangesErrorNotSyncedYet::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\RpcStateChangesErrorInternalError::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\RpcStateChangesErrorShardNotApplied::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for RpcStateChangesError.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcStateChangesErrorUnknownBlock => 'UNKNOWN_BLOCK',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcStateChangesErrorNotSyncedYet => 'NOT_SYNCED_YET',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcStateChangesErrorInternalError => 'INTERNAL_ERROR',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcStateChangesErrorShardNotApplied => 'SHARD_NOT_APPLIED',
            default => throw new \LogicException('Unknown RpcStateChangesError variant.'),
        };
    }
    public static function unknownBlock(\Near\JsonRpc\Generated\Models\RpcStateChangesErrorUnknownBlock $variant): self { return new self($variant); }
    public static function notSyncedYet(\Near\JsonRpc\Generated\Models\RpcStateChangesErrorNotSyncedYet $variant): self { return new self($variant); }
    public static function internalError(\Near\JsonRpc\Generated\Models\RpcStateChangesErrorInternalError $variant): self { return new self($variant); }
    public static function shardNotApplied(\Near\JsonRpc\Generated\Models\RpcStateChangesErrorShardNotApplied $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesErrorUnknownBlock',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesErrorNotSyncedYet',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesErrorInternalError',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesErrorShardNotApplied',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesErrorUnknownBlock',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesErrorNotSyncedYet',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesErrorInternalError',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesErrorShardNotApplied',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
