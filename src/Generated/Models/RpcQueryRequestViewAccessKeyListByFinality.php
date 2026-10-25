<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class RpcQueryRequestViewAccessKeyListByFinality implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\Finality
         */
        public \Near\JsonRpc\Generated\Models\Finality $finality,
        /**
         * @var \Near\JsonRpc\Generated\Models\AccountId
         */
        public \Near\JsonRpc\Generated\Models\AccountId $accountId,
        /**
         * @var 'view_access_key_list'
         */
        public string $requestType,
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\PublicKeyHandle|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $afterKey = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<int|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $limit = new \Near\JsonRpc\Models\OptionalValue(),
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->finality, array (
  'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\Finality',
  'nullable' => false,
), 'finality');
        \Near\JsonRpc\Models\TypeGuard::assert($this->accountId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'account_id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->requestType, array (
  'enum' => 
  array (
    0 => 'view_access_key_list',
  ),
  'type' => 'string',
), 'request_type');
        if ($this->afterKey->present) \Near\JsonRpc\Models\TypeGuard::assert($this->afterKey->value, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKeyHandle',
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
), 'after_key');
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
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcQueryRequestViewAccessKeyListByFinality.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('finality', $data)) throw new \InvalidArgumentException('Missing required field: finality');
        if (!array_key_exists('request_type', $data)) throw new \InvalidArgumentException('Missing required field: request_type');
        if (!array_key_exists('account_id', $data)) throw new \InvalidArgumentException('Missing required field: account_id');
        $extra = array_diff_key($data, array (
  'finality' => true,
  'account_id' => true,
  'after_key' => true,
  'limit' => true,
  'request_type' => true,
));
        return new self(
            finality: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['finality'], array (
  'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\Finality',
  'nullable' => false,
), 'finality'),
            accountId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['account_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'account_id'),
            requestType: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['request_type'], array (
  'enum' => 
  array (
    0 => 'view_access_key_list',
  ),
  'type' => 'string',
), 'request_type'),
            afterKey: array_key_exists('after_key', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['after_key'], array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKeyHandle',
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
), 'after_key')) : new \Near\JsonRpc\Models\OptionalValue(),
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
        $data['finality'] = $this->finality;
        $data['account_id'] = $this->accountId;
        $data['request_type'] = $this->requestType;
        if ($this->afterKey->present) $data['after_key'] = $this->afterKey->value;
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
    'finality' => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\Finality',
      'nullable' => false,
    ),
    'account_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
    'after_key' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKeyHandle',
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
    'limit' => 
    array (
      'format' => 'uint32',
      'minimum' => 1,
      'nullable' => true,
      'type' => 'integer',
    ),
    'request_type' => 
    array (
      'enum' => 
      array (
        0 => 'view_access_key_list',
      ),
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'finality',
    1 => 'request_type',
    2 => 'account_id',
  ),
  'title' => 'view_access_key_list_by_finality',
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'view_access_key_list_by_finality',
  ),
), 'RpcQueryRequestViewAccessKeyListByFinality'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'finality' => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\Finality',
      'nullable' => false,
    ),
    'account_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
    'after_key' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKeyHandle',
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
    'limit' => 
    array (
      'format' => 'uint32',
      'minimum' => 1,
      'nullable' => true,
      'type' => 'integer',
    ),
    'request_type' => 
    array (
      'enum' => 
      array (
        0 => 'view_access_key_list',
      ),
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'finality',
    1 => 'request_type',
    2 => 'account_id',
  ),
  'title' => 'view_access_key_list_by_finality',
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'view_access_key_list_by_finality',
  ),
), 'RpcQueryRequestViewAccessKeyListByFinality');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
