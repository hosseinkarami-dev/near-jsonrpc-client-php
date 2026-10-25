<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class RpcQueryRequestViewStateBySyncCheckpoint implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\SyncCheckpoint
         */
        public \Near\JsonRpc\Generated\Models\SyncCheckpoint $syncCheckpoint,
        /**
         * @var \Near\JsonRpc\Generated\Models\AccountId
         */
        public \Near\JsonRpc\Generated\Models\AccountId $accountId,
        /**
         * @var \Near\JsonRpc\Generated\Models\StoreKey
         */
        public \Near\JsonRpc\Generated\Models\StoreKey $prefixBase64,
        /**
         * @var 'view_state'
         */
        public string $requestType,
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\StoreKey|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $afterKeyBase64 = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * @var bool|null
         */
        public bool|null $includeProof = null,
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<int|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $limit = new \Near\JsonRpc\Models\OptionalValue(),
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->syncCheckpoint, array (
  'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\SyncCheckpoint',
  'nullable' => false,
), 'sync_checkpoint');
        \Near\JsonRpc\Models\TypeGuard::assert($this->accountId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'account_id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->prefixBase64, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StoreKey',
  'nullable' => false,
), 'prefix_base64');
        \Near\JsonRpc\Models\TypeGuard::assert($this->requestType, array (
  'enum' => 
  array (
    0 => 'view_state',
  ),
  'type' => 'string',
), 'request_type');
        if ($this->afterKeyBase64->present) \Near\JsonRpc\Models\TypeGuard::assert($this->afterKeyBase64->value, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StoreKey',
      'nullable' => false,
    ),
    1 => 
    array (
      'enum' => 
      array (
        0 => NULL,
      ),
      'nullable' => true,
      'type' => 'null',
    ),
  ),
), 'after_key_base64');
        if ($this->includeProof !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->includeProof, array (
  'type' => 'boolean',
), 'include_proof');
        if ($this->limit->present) \Near\JsonRpc\Models\TypeGuard::assert($this->limit->value, array (
  'format' => 'uint32',
  'minimum' => 1,
  'nullable' => true,
  'type' => 'integer',
), 'limit');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcQueryRequestViewStateBySyncCheckpoint.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('sync_checkpoint', $data)) throw new \InvalidArgumentException('Missing required field: sync_checkpoint');
        if (!array_key_exists('request_type', $data)) throw new \InvalidArgumentException('Missing required field: request_type');
        if (!array_key_exists('account_id', $data)) throw new \InvalidArgumentException('Missing required field: account_id');
        if (!array_key_exists('prefix_base64', $data)) throw new \InvalidArgumentException('Missing required field: prefix_base64');
        $extra = array_diff_key($data, array (
  'sync_checkpoint' => true,
  'account_id' => true,
  'after_key_base64' => true,
  'include_proof' => true,
  'limit' => true,
  'prefix_base64' => true,
  'request_type' => true,
));
        return new self(
            syncCheckpoint: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['sync_checkpoint'], array (
  'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\SyncCheckpoint',
  'nullable' => false,
), 'sync_checkpoint'),
            accountId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['account_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'account_id'),
            prefixBase64: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['prefix_base64'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StoreKey',
  'nullable' => false,
), 'prefix_base64'),
            requestType: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['request_type'], array (
  'enum' => 
  array (
    0 => 'view_state',
  ),
  'type' => 'string',
), 'request_type'),
            afterKeyBase64: array_key_exists('after_key_base64', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['after_key_base64'], array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StoreKey',
      'nullable' => false,
    ),
    1 => 
    array (
      'enum' => 
      array (
        0 => NULL,
      ),
      'nullable' => true,
      'type' => 'null',
    ),
  ),
), 'after_key_base64')) : new \Near\JsonRpc\Models\OptionalValue(),
            includeProof: array_key_exists('include_proof', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['include_proof'], array (
  'type' => 'boolean',
), 'include_proof') : null,
            limit: array_key_exists('limit', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['limit'], array (
  'format' => 'uint32',
  'minimum' => 1,
  'nullable' => true,
  'type' => 'integer',
), 'limit')) : new \Near\JsonRpc\Models\OptionalValue(),
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
        $data['sync_checkpoint'] = $this->syncCheckpoint;
        $data['account_id'] = $this->accountId;
        $data['prefix_base64'] = $this->prefixBase64;
        $data['request_type'] = $this->requestType;
        if ($this->afterKeyBase64->present) $data['after_key_base64'] = $this->afterKeyBase64->value;
        if ($this->includeProof !== null) $data['include_proof'] = $this->includeProof;
        if ($this->limit->present) $data['limit'] = $this->limit->value;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'sync_checkpoint' => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\SyncCheckpoint',
      'nullable' => false,
    ),
    'account_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
    'after_key_base64' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StoreKey',
          'nullable' => false,
        ),
        1 => 
        array (
          'enum' => 
          array (
            0 => NULL,
          ),
          'nullable' => true,
          'type' => 'null',
        ),
      ),
    ),
    'include_proof' => 
    array (
      'type' => 'boolean',
    ),
    'limit' => 
    array (
      'format' => 'uint32',
      'minimum' => 1,
      'nullable' => true,
      'type' => 'integer',
    ),
    'prefix_base64' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StoreKey',
      'nullable' => false,
    ),
    'request_type' => 
    array (
      'enum' => 
      array (
        0 => 'view_state',
      ),
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'sync_checkpoint',
    1 => 'request_type',
    2 => 'account_id',
    3 => 'prefix_base64',
  ),
  'title' => 'view_state_by_sync_checkpoint',
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'view_state_by_sync_checkpoint',
  ),
), 'RpcQueryRequestViewStateBySyncCheckpoint'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'sync_checkpoint' => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\SyncCheckpoint',
      'nullable' => false,
    ),
    'account_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
    'after_key_base64' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StoreKey',
          'nullable' => false,
        ),
        1 => 
        array (
          'enum' => 
          array (
            0 => NULL,
          ),
          'nullable' => true,
          'type' => 'null',
        ),
      ),
    ),
    'include_proof' => 
    array (
      'type' => 'boolean',
    ),
    'limit' => 
    array (
      'format' => 'uint32',
      'minimum' => 1,
      'nullable' => true,
      'type' => 'integer',
    ),
    'prefix_base64' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StoreKey',
      'nullable' => false,
    ),
    'request_type' => 
    array (
      'enum' => 
      array (
        0 => 'view_state',
      ),
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'sync_checkpoint',
    1 => 'request_type',
    2 => 'account_id',
    3 => 'prefix_base64',
  ),
  'title' => 'view_state_by_sync_checkpoint',
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'view_state_by_sync_checkpoint',
  ),
), 'RpcQueryRequestViewStateBySyncCheckpoint');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
