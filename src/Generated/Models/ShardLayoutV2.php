<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Counterpart to `ShardLayoutV2` composed of maps with string keys to aid
 * serde serialization.
 */
final readonly class ShardLayoutV2 implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var list<\Near\JsonRpc\Generated\Models\AccountId>
         */
        public array $boundaryAccounts,
        /**
         * @var array<string, int|string>|\stdClass
         */
        public array|\stdClass $idToIndexMap,
        /**
         * @var array<string, \Near\JsonRpc\Generated\Models\ShardId>|\stdClass
         */
        public array|\stdClass $indexToIdMap,
        /**
         * @var list<\Near\JsonRpc\Generated\Models\ShardId>
         */
        public array $shardIds,
        /**
         * @var int
         */
        public int $version,
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<array<string, \Near\JsonRpc\Generated\Models\ShardId>|\stdClass|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $shardsParentMap = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<array<string, list<\Near\JsonRpc\Generated\Models\ShardId>>|\stdClass|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $shardsSplitMap = new \Near\JsonRpc\Models\OptionalValue(),
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->boundaryAccounts, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
    'nullable' => false,
  ),
  'type' => 'array',
), 'boundary_accounts');
        \Near\JsonRpc\Models\TypeGuard::assert($this->idToIndexMap, array (
  'additionalProperties' => 
  array (
    'format' => 'uint',
    'minimum' => 0,
    'type' => 'integer',
  ),
  'type' => 'object',
), 'id_to_index_map');
        \Near\JsonRpc\Models\TypeGuard::assert($this->indexToIdMap, array (
  'additionalProperties' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
    'nullable' => false,
  ),
  'type' => 'object',
), 'index_to_id_map');
        \Near\JsonRpc\Models\TypeGuard::assert($this->shardIds, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
    'nullable' => false,
  ),
  'type' => 'array',
), 'shard_ids');
        \Near\JsonRpc\Models\TypeGuard::assert($this->version, array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'version');
        if ($this->shardsParentMap->present) \Near\JsonRpc\Models\TypeGuard::assert($this->shardsParentMap->value, array (
  'additionalProperties' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
    'nullable' => false,
  ),
  'nullable' => true,
  'type' => 'object',
), 'shards_parent_map');
        if ($this->shardsSplitMap->present) \Near\JsonRpc\Models\TypeGuard::assert($this->shardsSplitMap->value, array (
  'additionalProperties' => 
  array (
    'items' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
      'nullable' => false,
    ),
    'type' => 'array',
  ),
  'nullable' => true,
  'type' => 'object',
), 'shards_split_map');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ShardLayoutV2.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('boundary_accounts', $data)) throw new \InvalidArgumentException('Missing required field: boundary_accounts');
        if (!array_key_exists('shard_ids', $data)) throw new \InvalidArgumentException('Missing required field: shard_ids');
        if (!array_key_exists('id_to_index_map', $data)) throw new \InvalidArgumentException('Missing required field: id_to_index_map');
        if (!array_key_exists('index_to_id_map', $data)) throw new \InvalidArgumentException('Missing required field: index_to_id_map');
        if (!array_key_exists('version', $data)) throw new \InvalidArgumentException('Missing required field: version');
        $extra = array_diff_key($data, array (
  'boundary_accounts' => true,
  'id_to_index_map' => true,
  'index_to_id_map' => true,
  'shard_ids' => true,
  'shards_parent_map' => true,
  'shards_split_map' => true,
  'version' => true,
));
        return new self(
            boundaryAccounts: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['boundary_accounts'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
    'nullable' => false,
  ),
  'type' => 'array',
), 'boundary_accounts'),
            idToIndexMap: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['id_to_index_map'], array (
  'additionalProperties' => 
  array (
    'format' => 'uint',
    'minimum' => 0,
    'type' => 'integer',
  ),
  'type' => 'object',
), 'id_to_index_map'),
            indexToIdMap: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['index_to_id_map'], array (
  'additionalProperties' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
    'nullable' => false,
  ),
  'type' => 'object',
), 'index_to_id_map'),
            shardIds: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['shard_ids'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
    'nullable' => false,
  ),
  'type' => 'array',
), 'shard_ids'),
            version: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['version'], array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'version'),
            shardsParentMap: array_key_exists('shards_parent_map', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['shards_parent_map'], array (
  'additionalProperties' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
    'nullable' => false,
  ),
  'nullable' => true,
  'type' => 'object',
), 'shards_parent_map')) : new \Near\JsonRpc\Models\OptionalValue(),
            shardsSplitMap: array_key_exists('shards_split_map', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['shards_split_map'], array (
  'additionalProperties' => 
  array (
    'items' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
      'nullable' => false,
    ),
    'type' => 'array',
  ),
  'nullable' => true,
  'type' => 'object',
), 'shards_split_map')) : new \Near\JsonRpc\Models\OptionalValue(),
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
        $data['boundary_accounts'] = $this->boundaryAccounts;
        $data['id_to_index_map'] = $this->idToIndexMap;
        $data['index_to_id_map'] = $this->indexToIdMap;
        $data['shard_ids'] = $this->shardIds;
        $data['version'] = $this->version;
        if ($this->shardsParentMap->present) $data['shards_parent_map'] = $this->shardsParentMap->value;
        if ($this->shardsSplitMap->present) $data['shards_split_map'] = $this->shardsSplitMap->value;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'boundary_accounts' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'id_to_index_map' => 
    array (
      'additionalProperties' => 
      array (
        'format' => 'uint',
        'minimum' => 0,
        'type' => 'integer',
      ),
      'type' => 'object',
    ),
    'index_to_id_map' => 
    array (
      'additionalProperties' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
        'nullable' => false,
      ),
      'type' => 'object',
    ),
    'shard_ids' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'shards_parent_map' => 
    array (
      'additionalProperties' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
        'nullable' => false,
      ),
      'nullable' => true,
      'type' => 'object',
    ),
    'shards_split_map' => 
    array (
      'additionalProperties' => 
      array (
        'items' => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
          'nullable' => false,
        ),
        'type' => 'array',
      ),
      'nullable' => true,
      'type' => 'object',
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
    0 => 'boundary_accounts',
    1 => 'shard_ids',
    2 => 'id_to_index_map',
    3 => 'index_to_id_map',
    4 => 'version',
  ),
  'type' => 'object',
), 'ShardLayoutV2'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'boundary_accounts' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'id_to_index_map' => 
    array (
      'additionalProperties' => 
      array (
        'format' => 'uint',
        'minimum' => 0,
        'type' => 'integer',
      ),
      'type' => 'object',
    ),
    'index_to_id_map' => 
    array (
      'additionalProperties' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
        'nullable' => false,
      ),
      'type' => 'object',
    ),
    'shard_ids' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'shards_parent_map' => 
    array (
      'additionalProperties' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
        'nullable' => false,
      ),
      'nullable' => true,
      'type' => 'object',
    ),
    'shards_split_map' => 
    array (
      'additionalProperties' => 
      array (
        'items' => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
          'nullable' => false,
        ),
        'type' => 'array',
      ),
      'nullable' => true,
      'type' => 'object',
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
    0 => 'boundary_accounts',
    1 => 'shard_ids',
    2 => 'id_to_index_map',
    3 => 'index_to_id_map',
    4 => 'version',
  ),
  'type' => 'object',
), 'ShardLayoutV2');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
