<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class TransactionEnvelopeViewExternalCall implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\AccountId
         */
        public \Near\JsonRpc\Generated\Models\AccountId $contractId,
        /**
         * @var string
         */
        public string $payload,
        /**
         * The unique id of this copy of the call, its outcome id.
         *
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $transactionId,
        /**
         * @var 'external_call'
         */
        public string $kind,
        /**
         * The universal account state init this copy of the call carries.
         *
         * @var \Near\JsonRpc\Models\OptionalValue<string|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $stateInit = new \Near\JsonRpc\Models\OptionalValue(),
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->contractId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'contract_id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->payload, array (
  'type' => 'string',
), 'payload');
        \Near\JsonRpc\Models\TypeGuard::assert($this->transactionId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'transaction_id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->kind, array (
  'enum' => 
  array (
    0 => 'external_call',
  ),
  'type' => 'string',
), 'kind');
        if ($this->stateInit->present) \Near\JsonRpc\Models\TypeGuard::assert($this->stateInit->value, array (
  'nullable' => true,
  'type' => 'string',
), 'state_init');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for TransactionEnvelopeViewExternalCall.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('contract_id', $data)) throw new \InvalidArgumentException('Missing required field: contract_id');
        if (!array_key_exists('payload', $data)) throw new \InvalidArgumentException('Missing required field: payload');
        if (!array_key_exists('transaction_id', $data)) throw new \InvalidArgumentException('Missing required field: transaction_id');
        if (!array_key_exists('kind', $data)) throw new \InvalidArgumentException('Missing required field: kind');
        $extra = array_diff_key($data, array (
  'contract_id' => true,
  'payload' => true,
  'state_init' => true,
  'transaction_id' => true,
  'kind' => true,
));
        return new self(
            contractId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['contract_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'contract_id'),
            payload: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['payload'], array (
  'type' => 'string',
), 'payload'),
            transactionId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['transaction_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'transaction_id'),
            kind: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['kind'], array (
  'enum' => 
  array (
    0 => 'external_call',
  ),
  'type' => 'string',
), 'kind'),
            stateInit: array_key_exists('state_init', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['state_init'], array (
  'nullable' => true,
  'type' => 'string',
), 'state_init')) : new \Near\JsonRpc\Models\OptionalValue(),
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
        $data['contract_id'] = $this->contractId;
        $data['payload'] = $this->payload;
        $data['transaction_id'] = $this->transactionId;
        $data['kind'] = $this->kind;
        if ($this->stateInit->present) $data['state_init'] = $this->stateInit->value;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'contract_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
    'payload' => 
    array (
      'type' => 'string',
    ),
    'state_init' => 
    array (
      'nullable' => true,
      'type' => 'string',
    ),
    'transaction_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'kind' => 
    array (
      'enum' => 
      array (
        0 => 'external_call',
      ),
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'contract_id',
    1 => 'payload',
    2 => 'transaction_id',
    3 => 'kind',
  ),
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'external_call',
  ),
), 'TransactionEnvelopeViewExternalCall'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'contract_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
    'payload' => 
    array (
      'type' => 'string',
    ),
    'state_init' => 
    array (
      'nullable' => true,
      'type' => 'string',
    ),
    'transaction_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'kind' => 
    array (
      'enum' => 
      array (
        0 => 'external_call',
      ),
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'contract_id',
    1 => 'payload',
    2 => 'transaction_id',
    3 => 'kind',
  ),
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'external_call',
  ),
), 'TransactionEnvelopeViewExternalCall');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
