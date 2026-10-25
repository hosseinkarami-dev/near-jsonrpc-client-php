<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class InvalidTxErrorShardCongestedPayload implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * A value between 0 (no congestion) and 1 (max congestion).
         *
         * @var int|float
         */
        public int|float $congestionLevel,
        /**
         * The congested shard.
         *
         * @var int
         */
        public int $shardId,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->congestionLevel, array (
  'format' => 'double',
  'type' => 'number',
), 'congestion_level');
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
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for InvalidTxErrorShardCongestedPayload.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('shard_id', $data)) throw new \InvalidArgumentException('Missing required field: shard_id');
        if (!array_key_exists('congestion_level', $data)) throw new \InvalidArgumentException('Missing required field: congestion_level');
        $extra = array_diff_key($data, array (
  'congestion_level' => true,
  'shard_id' => true,
));
        return new self(
            congestionLevel: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['congestion_level'], array (
  'format' => 'double',
  'type' => 'number',
), 'congestion_level'),
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
        $data['congestion_level'] = $this->congestionLevel;
        $data['shard_id'] = $this->shardId;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'congestion_level' => 
    array (
      'format' => 'double',
      'type' => 'number',
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
    1 => 'congestion_level',
  ),
  'type' => 'object',
), 'InvalidTxErrorShardCongestedPayload'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'congestion_level' => 
    array (
      'format' => 'double',
      'type' => 'number',
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
    1 => 'congestion_level',
  ),
  'type' => 'object',
), 'InvalidTxErrorShardCongestedPayload');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
