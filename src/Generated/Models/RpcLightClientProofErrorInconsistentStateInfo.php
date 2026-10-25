<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class RpcLightClientProofErrorInconsistentStateInfo implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ShardId
         */
        public \Near\JsonRpc\Generated\Models\ShardId $executionOutcomeShardId,
        /**
         * @var int|string
         */
        public int|string $numberOrShards,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->executionOutcomeShardId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
  'nullable' => false,
), 'execution_outcome_shard_id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->numberOrShards, array (
  'format' => 'uint',
  'minimum' => 0,
  'type' => 'integer',
), 'number_or_shards');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcLightClientProofErrorInconsistentStateInfo.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('number_or_shards', $data)) throw new \InvalidArgumentException('Missing required field: number_or_shards');
        if (!array_key_exists('execution_outcome_shard_id', $data)) throw new \InvalidArgumentException('Missing required field: execution_outcome_shard_id');
        $extra = array_diff_key($data, array (
  'execution_outcome_shard_id' => true,
  'number_or_shards' => true,
));
        return new self(
            executionOutcomeShardId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['execution_outcome_shard_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
  'nullable' => false,
), 'execution_outcome_shard_id'),
            numberOrShards: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['number_or_shards'], array (
  'format' => 'uint',
  'minimum' => 0,
  'type' => 'integer',
), 'number_or_shards'),
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
        $data['execution_outcome_shard_id'] = $this->executionOutcomeShardId;
        $data['number_or_shards'] = $this->numberOrShards;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'execution_outcome_shard_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
      'nullable' => false,
    ),
    'number_or_shards' => 
    array (
      'format' => 'uint',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'number_or_shards',
    1 => 'execution_outcome_shard_id',
  ),
  'type' => 'object',
), 'RpcLightClientProofErrorInconsistentStateInfo'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'execution_outcome_shard_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
      'nullable' => false,
    ),
    'number_or_shards' => 
    array (
      'format' => 'uint',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'number_or_shards',
    1 => 'execution_outcome_shard_id',
  ),
  'type' => 'object',
), 'RpcLightClientProofErrorInconsistentStateInfo');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
