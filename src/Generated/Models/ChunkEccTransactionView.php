<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * An external call as a chunk holds it. Its unique id is unknown in a chunk that no block on the
 * canonical chain includes.
 */
final readonly class ChunkEccTransactionView implements \Near\JsonRpc\Models\ModelJsonSerializable
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
         * The universal account state init the call carries.
         *
         * @var \Near\JsonRpc\Models\OptionalValue<string|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $stateInit = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * The unique id of this copy of the call, its outcome id. `None` when no block on the
         * canonical chain includes the chunk.
         *
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\CryptoHash|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $transactionId = new \Near\JsonRpc\Models\OptionalValue(),
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
        if ($this->stateInit->present) \Near\JsonRpc\Models\TypeGuard::assert($this->stateInit->value, array (
  'default' => NULL,
  'nullable' => true,
  'type' => 'string',
), 'state_init');
        if ($this->transactionId->present) \Near\JsonRpc\Models\TypeGuard::assert($this->transactionId->value, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
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
), 'transaction_id');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ChunkEccTransactionView.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('contract_id', $data)) throw new \InvalidArgumentException('Missing required field: contract_id');
        if (!array_key_exists('payload', $data)) throw new \InvalidArgumentException('Missing required field: payload');
        $extra = array_diff_key($data, array (
  'contract_id' => true,
  'payload' => true,
  'state_init' => true,
  'transaction_id' => true,
));
        return new self(
            contractId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['contract_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'contract_id'),
            payload: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['payload'], array (
  'type' => 'string',
), 'payload'),
            stateInit: array_key_exists('state_init', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['state_init'], array (
  'default' => NULL,
  'nullable' => true,
  'type' => 'string',
), 'state_init')) : new \Near\JsonRpc\Models\OptionalValue(),
            transactionId: array_key_exists('transaction_id', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['transaction_id'], array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
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
), 'transaction_id')) : new \Near\JsonRpc\Models\OptionalValue(),
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
        if ($this->stateInit->present) $data['state_init'] = $this->stateInit->value;
        if ($this->transactionId->present) $data['transaction_id'] = $this->transactionId->value;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
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
      'default' => NULL,
      'nullable' => true,
      'type' => 'string',
    ),
    'transaction_id' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
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
  ),
  'required' => 
  array (
    0 => 'contract_id',
    1 => 'payload',
  ),
  'type' => 'object',
), 'ChunkEccTransactionView'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
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
      'default' => NULL,
      'nullable' => true,
      'type' => 'string',
    ),
    'transaction_id' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
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
  ),
  'required' => 
  array (
    0 => 'contract_id',
    1 => 'payload',
  ),
  'type' => 'object',
), 'ChunkEccTransactionView');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
