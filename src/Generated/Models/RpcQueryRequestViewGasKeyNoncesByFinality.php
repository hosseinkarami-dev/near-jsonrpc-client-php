<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class RpcQueryRequestViewGasKeyNoncesByFinality implements \Near\JsonRpc\Models\ModelJsonSerializable
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
         * @var \Near\JsonRpc\Generated\Models\PublicKey
         */
        public \Near\JsonRpc\Generated\Models\PublicKey $publicKey,
        /**
         * @var 'view_gas_key_nonces'
         */
        public string $requestType,
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
        \Near\JsonRpc\Models\TypeGuard::assert($this->publicKey, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
  'nullable' => false,
), 'public_key');
        \Near\JsonRpc\Models\TypeGuard::assert($this->requestType, array (
  'enum' => 
  array (
    0 => 'view_gas_key_nonces',
  ),
  'type' => 'string',
), 'request_type');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcQueryRequestViewGasKeyNoncesByFinality.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('finality', $data)) throw new \InvalidArgumentException('Missing required field: finality');
        if (!array_key_exists('request_type', $data)) throw new \InvalidArgumentException('Missing required field: request_type');
        if (!array_key_exists('account_id', $data)) throw new \InvalidArgumentException('Missing required field: account_id');
        if (!array_key_exists('public_key', $data)) throw new \InvalidArgumentException('Missing required field: public_key');
        $extra = array_diff_key($data, array (
  'finality' => true,
  'account_id' => true,
  'public_key' => true,
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
            publicKey: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['public_key'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
  'nullable' => false,
), 'public_key'),
            requestType: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['request_type'], array (
  'enum' => 
  array (
    0 => 'view_gas_key_nonces',
  ),
  'type' => 'string',
), 'request_type'),
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
        $data['public_key'] = $this->publicKey;
        $data['request_type'] = $this->requestType;
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
    'public_key' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
      'nullable' => false,
    ),
    'request_type' => 
    array (
      'enum' => 
      array (
        0 => 'view_gas_key_nonces',
      ),
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'finality',
    1 => 'request_type',
    2 => 'account_id',
    3 => 'public_key',
  ),
  'title' => 'view_gas_key_nonces_by_finality',
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'view_gas_key_nonces_by_finality',
  ),
), 'RpcQueryRequestViewGasKeyNoncesByFinality'));
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
    'public_key' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
      'nullable' => false,
    ),
    'request_type' => 
    array (
      'enum' => 
      array (
        0 => 'view_gas_key_nonces',
      ),
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'finality',
    1 => 'request_type',
    2 => 'account_id',
    3 => 'public_key',
  ),
  'title' => 'view_gas_key_nonces_by_finality',
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'view_gas_key_nonces_by_finality',
  ),
), 'RpcQueryRequestViewGasKeyNoncesByFinality');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
