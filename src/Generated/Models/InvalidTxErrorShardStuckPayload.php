<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class InvalidTxErrorShardStuckPayload implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * The number of blocks since the last included chunk of the shard.
         *
         * @var int|string
         */
        public int|string $missedChunks,
        /**
         * The shard that fails making progress.
         *
         * @var int
         */
        public int $shardId,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->missedChunks, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'missed_chunks');
        \Near\JsonRpc\Models\TypeGuard::assert($this->shardId, array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'shard_id');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for InvalidTxErrorShardStuckPayload.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('shard_id', $data)) throw new \InvalidArgumentException('Missing required field: shard_id');
        if (!array_key_exists('missed_chunks', $data)) throw new \InvalidArgumentException('Missing required field: missed_chunks');
        $extra = array_diff_key($data, array (
  'missed_chunks' => true,
  'shard_id' => true,
));
        return new self(
            missedChunks: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['missed_chunks'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'missed_chunks'),
            shardId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['shard_id'], array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'shard_id'),
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
        $data['missed_chunks'] = $this->missedChunks;
        $data['shard_id'] = $this->shardId;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'missed_chunks' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'shard_id' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'shard_id',
    1 => 'missed_chunks',
  ),
  'type' => 'object',
), 'InvalidTxErrorShardStuckPayload'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'missed_chunks' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'shard_id' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'shard_id',
    1 => 'missed_chunks',
  ),
  'type' => 'object',
), 'InvalidTxErrorShardStuckPayload');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
