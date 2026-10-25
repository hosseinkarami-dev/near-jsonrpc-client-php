<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The shard identifier. It may be an arbitrary number - it does not need to be
 * a number in the range 0..NUM_SHARDS. The shard ids do not need to be
 * sequential or contiguous.
 *
 * The shard id is wrapped in a new type to prevent the old pattern of using
 * indices in range 0..NUM_SHARDS and casting to ShardId. Once the transition
 * if fully complete it potentially may be simplified to a regular type alias.
 */
final readonly class ShardId implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public int|string $root;

    public function __construct(int|string $root)
    {
        \Near\JsonRpc\Models\TypeGuard::assert($root, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'root');
        $this->root = $root;
    }

    public static function fromValue(mixed $value): self
    {
        return new self(\Near\JsonRpc\Models\ModelHydrator::hydrate($value, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'root'));
    }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'root'));
        return $this->root;
    }
    public function jsonSerializeForEncoding(): mixed { return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
