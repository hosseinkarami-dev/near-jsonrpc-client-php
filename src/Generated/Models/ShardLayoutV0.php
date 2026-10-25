<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * A shard layout that maps accounts evenly across all shards -- by calculate the hash of account
 * id and mod number of shards. This is added to capture the old `account_id_to_shard_id` algorithm,
 * to keep backward compatibility for some existing tests.
 * `parent_shards` for `ShardLayoutV1` is always `None`, meaning it can only be the first shard layout
 * a chain uses.
 */
final readonly class ShardLayoutV0 implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * Map accounts evenly across all shards
         *
         * @var int|string
         */
        public int|string $numShards,
        /**
         * Version of the shard layout, this is useful for uniquely identify the shard layout
         *
         * @var int
         */
        public int $version,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->numShards, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'num_shards');
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
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ShardLayoutV0.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('num_shards', $data)) throw new \InvalidArgumentException('Missing required field: num_shards');
        if (!array_key_exists('version', $data)) throw new \InvalidArgumentException('Missing required field: version');
        $extra = array_diff_key($data, array (
  'num_shards' => true,
  'version' => true,
));
        return new self(
            numShards: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['num_shards'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'num_shards'),
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
        $data['num_shards'] = $this->numShards;
        $data['version'] = $this->version;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'num_shards' => 
    array (
      'format' => 'uint64',
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
    0 => 'num_shards',
    1 => 'version',
  ),
  'type' => 'object',
), 'ShardLayoutV0'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'num_shards' => 
    array (
      'format' => 'uint64',
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
    0 => 'num_shards',
    1 => 'version',
  ),
  'type' => 'object',
), 'ShardLayoutV0');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
