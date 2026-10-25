<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * `ShardUId` is a unique representation for shards from different shard layouts.
 *
 * Comparing to `ShardId`, which is just an ordinal number ranging from 0 to NUM_SHARDS-1,
 * `ShardUId` provides a way to unique identify shards when shard layouts may change across epochs.
 * This is important because we store states indexed by shards in our database, so we need a
 * way to unique identify shard even when shards change across epochs.
 * Another difference between `ShardUId` and `ShardId` is that `ShardUId` should only exist in
 * a node's internal state while `ShardId` can be exposed to outside APIs and used in protocol
 * level information (for example, `ShardChunkHeader` contains `ShardId` instead of `ShardUId`)
 */
final readonly class ShardUId implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var int
         */
        public int $shardId,
        /**
         * @var int
         */
        public int $version,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->shardId, array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'shard_id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->version, array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'version');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ShardUId.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('version', $data)) throw new \InvalidArgumentException('Missing required field: version');
        if (!array_key_exists('shard_id', $data)) throw new \InvalidArgumentException('Missing required field: shard_id');
        $extra = array_diff_key($data, array (
  'shard_id' => true,
  'version' => true,
));
        return new self(
            shardId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['shard_id'], array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'shard_id'),
            version: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['version'], array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'version'),
            _extra: $extra
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = $this->extra;
        $data['shard_id'] = $this->shardId;
        $data['version'] = $this->version;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'shard_id' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'version' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'version',
    1 => 'shard_id',
  ),
  'type' => 'object',
), 'ShardUId'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'shard_id' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'version' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'version',
    1 => 'shard_id',
  ),
  'type' => 'object',
), 'ShardUId');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
