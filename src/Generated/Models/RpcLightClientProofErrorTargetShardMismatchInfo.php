<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class RpcLightClientProofErrorTargetShardMismatchInfo implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\AccountId
         */
        public \Near\JsonRpc\Generated\Models\AccountId $accountId,
        /**
         * @var \Near\JsonRpc\Generated\Models\ShardId
         */
        public \Near\JsonRpc\Generated\Models\ShardId $accountShardId,
        /**
         * @var \Near\JsonRpc\Generated\Models\ShardId
         */
        public \Near\JsonRpc\Generated\Models\ShardId $requestedShardId,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->accountId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'account_id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->accountShardId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
  'nullable' => false,
), 'account_shard_id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->requestedShardId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
  'nullable' => false,
), 'requested_shard_id');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcLightClientProofErrorTargetShardMismatchInfo.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('account_id', $data)) throw new \InvalidArgumentException('Missing required field: account_id');
        if (!array_key_exists('account_shard_id', $data)) throw new \InvalidArgumentException('Missing required field: account_shard_id');
        if (!array_key_exists('requested_shard_id', $data)) throw new \InvalidArgumentException('Missing required field: requested_shard_id');
        $extra = array_diff_key($data, array (
  'account_id' => true,
  'account_shard_id' => true,
  'requested_shard_id' => true,
));
        return new self(
            accountId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['account_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'account_id'),
            accountShardId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['account_shard_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
  'nullable' => false,
), 'account_shard_id'),
            requestedShardId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['requested_shard_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
  'nullable' => false,
), 'requested_shard_id'),
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
        $data['account_id'] = $this->accountId;
        $data['account_shard_id'] = $this->accountShardId;
        $data['requested_shard_id'] = $this->requestedShardId;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'account_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
    'account_shard_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
      'nullable' => false,
    ),
    'requested_shard_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'account_id',
    1 => 'account_shard_id',
    2 => 'requested_shard_id',
  ),
  'type' => 'object',
), 'RpcLightClientProofErrorTargetShardMismatchInfo'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'account_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
    'account_shard_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
      'nullable' => false,
    ),
    'requested_shard_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'account_id',
    1 => 'account_shard_id',
    2 => 'requested_shard_id',
  ),
  'type' => 'object',
), 'RpcLightClientProofErrorTargetShardMismatchInfo');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
