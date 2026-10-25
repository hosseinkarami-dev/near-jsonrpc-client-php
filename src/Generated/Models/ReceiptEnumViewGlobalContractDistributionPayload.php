<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class ReceiptEnumViewGlobalContractDistributionPayload implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var list<\Near\JsonRpc\Generated\Models\ShardId>
         */
        public array $alreadyDeliveredShards,
        /**
         * @var string
         */
        public string $code,
        /**
         * @var \Near\JsonRpc\Generated\Models\GlobalContractIdentifier
         */
        public \Near\JsonRpc\Generated\Models\GlobalContractIdentifier $id,
        /**
         * @var \Near\JsonRpc\Generated\Models\ShardId
         */
        public \Near\JsonRpc\Generated\Models\ShardId $targetShard,
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<int|string|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $nonce = new \Near\JsonRpc\Models\OptionalValue(),
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->alreadyDeliveredShards, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
    'nullable' => false,
  ),
  'type' => 'array',
), 'already_delivered_shards');
        \Near\JsonRpc\Models\TypeGuard::assert($this->code, array (
  'type' => 'string',
), 'code');
        \Near\JsonRpc\Models\TypeGuard::assert($this->id, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GlobalContractIdentifier',
  'nullable' => false,
), 'id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->targetShard, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
  'nullable' => false,
), 'target_shard');
        if ($this->nonce->present) \Near\JsonRpc\Models\TypeGuard::assert($this->nonce->value, array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'nonce');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ReceiptEnumViewGlobalContractDistributionPayload.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('id', $data)) throw new \InvalidArgumentException('Missing required field: id');
        if (!array_key_exists('target_shard', $data)) throw new \InvalidArgumentException('Missing required field: target_shard');
        if (!array_key_exists('already_delivered_shards', $data)) throw new \InvalidArgumentException('Missing required field: already_delivered_shards');
        if (!array_key_exists('code', $data)) throw new \InvalidArgumentException('Missing required field: code');
        $extra = array_diff_key($data, array (
  'already_delivered_shards' => true,
  'code' => true,
  'id' => true,
  'nonce' => true,
  'target_shard' => true,
));
        return new self(
            alreadyDeliveredShards: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['already_delivered_shards'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
    'nullable' => false,
  ),
  'type' => 'array',
), 'already_delivered_shards'),
            code: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['code'], array (
  'type' => 'string',
), 'code'),
            id: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GlobalContractIdentifier',
  'nullable' => false,
), 'id'),
            targetShard: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['target_shard'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
  'nullable' => false,
), 'target_shard'),
            nonce: array_key_exists('nonce', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['nonce'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'nonce')) : new \Near\JsonRpc\Models\OptionalValue(),
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
        $data['already_delivered_shards'] = $this->alreadyDeliveredShards;
        $data['code'] = $this->code;
        $data['id'] = $this->id;
        $data['target_shard'] = $this->targetShard;
        if ($this->nonce->present) $data['nonce'] = $this->nonce->value;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'already_delivered_shards' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'code' => 
    array (
      'type' => 'string',
    ),
    'id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GlobalContractIdentifier',
      'nullable' => false,
    ),
    'nonce' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'target_shard' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'id',
    1 => 'target_shard',
    2 => 'already_delivered_shards',
    3 => 'code',
  ),
  'type' => 'object',
), 'ReceiptEnumViewGlobalContractDistributionPayload'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'already_delivered_shards' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'code' => 
    array (
      'type' => 'string',
    ),
    'id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GlobalContractIdentifier',
      'nullable' => false,
    ),
    'nonce' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'target_shard' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'id',
    1 => 'target_shard',
    2 => 'already_delivered_shards',
    3 => 'code',
  ),
  'type' => 'object',
), 'ReceiptEnumViewGlobalContractDistributionPayload');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
