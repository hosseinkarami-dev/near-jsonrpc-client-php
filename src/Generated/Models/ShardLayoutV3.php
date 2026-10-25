<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Counterpart to `ShardLayoutV3` composed of maps with string keys to aid
 * serde serialization.
 */
final readonly class ShardLayoutV3 implements \Near\JsonRpc\Models\ModelJsonSerializable
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
         * @var \Near\JsonRpc\Generated\Models\ShardId
         */
        public \Near\JsonRpc\Generated\Models\ShardId $lastSplit,
        /**
         * @var list<\Near\JsonRpc\Generated\Models\ShardId>
         */
        public array $shardIds,
        /**
         * @var array<string, list<\Near\JsonRpc\Generated\Models\ShardId>>|\stdClass
         */
        public array|\stdClass $shardsSplitMap,
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
        \Near\JsonRpc\Models\TypeGuard::assert($this->lastSplit, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
  'nullable' => false,
), 'last_split');
        \Near\JsonRpc\Models\TypeGuard::assert($this->shardIds, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
    'nullable' => false,
  ),
  'type' => 'array',
), 'shard_ids');
        \Near\JsonRpc\Models\TypeGuard::assert($this->shardsSplitMap, array (
  'additionalProperties' => 
  array (
    'items' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
      'nullable' => false,
    ),
    'type' => 'array',
  ),
  'type' => 'object',
), 'shards_split_map');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ShardLayoutV3.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('boundary_accounts', $data)) throw new \InvalidArgumentException('Missing required field: boundary_accounts');
        if (!array_key_exists('shard_ids', $data)) throw new \InvalidArgumentException('Missing required field: shard_ids');
        if (!array_key_exists('id_to_index_map', $data)) throw new \InvalidArgumentException('Missing required field: id_to_index_map');
        if (!array_key_exists('shards_split_map', $data)) throw new \InvalidArgumentException('Missing required field: shards_split_map');
        if (!array_key_exists('last_split', $data)) throw new \InvalidArgumentException('Missing required field: last_split');
        $extra = array_diff_key($data, array (
  'boundary_accounts' => true,
  'id_to_index_map' => true,
  'last_split' => true,
  'shard_ids' => true,
  'shards_split_map' => true,
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
            lastSplit: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['last_split'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
  'nullable' => false,
), 'last_split'),
            shardIds: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['shard_ids'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
    'nullable' => false,
  ),
  'type' => 'array',
), 'shard_ids'),
            shardsSplitMap: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['shards_split_map'], array (
  'additionalProperties' => 
  array (
    'items' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
      'nullable' => false,
    ),
    'type' => 'array',
  ),
  'type' => 'object',
), 'shards_split_map'),
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
        $data['last_split'] = $this->lastSplit;
        $data['shard_ids'] = $this->shardIds;
        $data['shards_split_map'] = $this->shardsSplitMap;
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
    'last_split' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
      'nullable' => false,
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
      'type' => 'object',
    ),
  ),
  'required' => 
  array (
    0 => 'boundary_accounts',
    1 => 'shard_ids',
    2 => 'id_to_index_map',
    3 => 'shards_split_map',
    4 => 'last_split',
  ),
  'type' => 'object',
), 'ShardLayoutV3'));
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
    'last_split' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
      'nullable' => false,
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
      'type' => 'object',
    ),
  ),
  'required' => 
  array (
    0 => 'boundary_accounts',
    1 => 'shard_ids',
    2 => 'id_to_index_map',
    3 => 'shards_split_map',
    4 => 'last_split',
  ),
  'type' => 'object',
), 'ShardLayoutV3');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
