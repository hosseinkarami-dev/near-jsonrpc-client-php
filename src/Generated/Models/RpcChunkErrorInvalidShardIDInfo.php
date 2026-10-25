<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class RpcChunkErrorInvalidShardIDInfo implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ShardId
         */
        public \Near\JsonRpc\Generated\Models\ShardId $shardId,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->shardId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
  'nullable' => false,
), 'shard_id');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcChunkErrorInvalidShardIDInfo.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('shard_id', $data)) throw new \InvalidArgumentException('Missing required field: shard_id');
        $extra = array_diff_key($data, array (
  'shard_id' => true,
));
        return new self(
            shardId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['shard_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
  'nullable' => false,
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
        $data['shard_id'] = $this->shardId;
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'shard_id',
  ),
  'type' => 'object',
), 'RpcChunkErrorInvalidShardIDInfo'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'shard_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'shard_id',
  ),
  'type' => 'object',
), 'RpcChunkErrorInvalidShardIDInfo');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
