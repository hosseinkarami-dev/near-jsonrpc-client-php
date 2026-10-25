<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class ShardLayoutV1 implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * The boundary accounts are the accounts on boundaries between shards.
         * Each shard contains a range of accounts from one boundary account to
         * another - or the smallest or largest account possible. The total
         * number of shards is equal to the number of boundary accounts plus 1.
         *
         * @var list<\Near\JsonRpc\Generated\Models\AccountId>
         */
        public array $boundaryAccounts,
        /**
         * Version of the shard layout, this is useful for uniquely identify the shard layout
         *
         * @var int
         */
        public int $version,
        /**
         * Maps shards from the last shard layout to shards that it splits to in this shard layout,
         * Useful for constructing states for the shards.
         * None for the genesis shard layout
         *
         * @var \Near\JsonRpc\Models\OptionalValue<list<list<\Near\JsonRpc\Generated\Models\ShardId>>|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $shardsSplitMap = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * Maps shard in this shard layout to their parent shard
         * Since shard_ids always range from 0 to num_shards - 1, we use vec instead of a hashmap
         *
         * @var \Near\JsonRpc\Models\OptionalValue<list<\Near\JsonRpc\Generated\Models\ShardId>|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $toParentShardMap = new \Near\JsonRpc\Models\OptionalValue(),
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
        \Near\JsonRpc\Models\TypeGuard::assert($this->version, array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'version');
        if ($this->shardsSplitMap->present) \Near\JsonRpc\Models\TypeGuard::assert($this->shardsSplitMap->value, array (
  'items' => 
  array (
    'items' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
      'nullable' => false,
    ),
    'type' => 'array',
  ),
  'nullable' => true,
  'type' => 'array',
), 'shards_split_map');
        if ($this->toParentShardMap->present) \Near\JsonRpc\Models\TypeGuard::assert($this->toParentShardMap->value, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
    'nullable' => false,
  ),
  'nullable' => true,
  'type' => 'array',
), 'to_parent_shard_map');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ShardLayoutV1.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('boundary_accounts', $data)) throw new \InvalidArgumentException('Missing required field: boundary_accounts');
        if (!array_key_exists('version', $data)) throw new \InvalidArgumentException('Missing required field: version');
        $extra = array_diff_key($data, array (
  'boundary_accounts' => true,
  'shards_split_map' => true,
  'to_parent_shard_map' => true,
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
            version: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['version'], array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'version'),
            shardsSplitMap: array_key_exists('shards_split_map', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['shards_split_map'], array (
  'items' => 
  array (
    'items' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
      'nullable' => false,
    ),
    'type' => 'array',
  ),
  'nullable' => true,
  'type' => 'array',
), 'shards_split_map')) : new \Near\JsonRpc\Models\OptionalValue(),
            toParentShardMap: array_key_exists('to_parent_shard_map', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['to_parent_shard_map'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
    'nullable' => false,
  ),
  'nullable' => true,
  'type' => 'array',
), 'to_parent_shard_map')) : new \Near\JsonRpc\Models\OptionalValue(),
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
        $data['version'] = $this->version;
        if ($this->shardsSplitMap->present) $data['shards_split_map'] = $this->shardsSplitMap->value;
        if ($this->toParentShardMap->present) $data['to_parent_shard_map'] = $this->toParentShardMap->value;
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
    'shards_split_map' => 
    array (
      'items' => 
      array (
        'items' => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
          'nullable' => false,
        ),
        'type' => 'array',
      ),
      'nullable' => true,
      'type' => 'array',
    ),
    'to_parent_shard_map' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
        'nullable' => false,
      ),
      'nullable' => true,
      'type' => 'array',
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
    1 => 'version',
  ),
  'type' => 'object',
), 'ShardLayoutV1'));
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
    'shards_split_map' => 
    array (
      'items' => 
      array (
        'items' => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
          'nullable' => false,
        ),
        'type' => 'array',
      ),
      'nullable' => true,
      'type' => 'array',
    ),
    'to_parent_shard_map' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
        'nullable' => false,
      ),
      'nullable' => true,
      'type' => 'array',
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
    1 => 'version',
  ),
  'type' => 'object',
), 'ShardLayoutV1');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
