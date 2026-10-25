<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class InvalidTxErrorInvalidNonceIndexPayload implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * Number of nonces supported by the key. 0 means no nonce_index allowed (regular key).
         *
         * @var int
         */
        public int $numNonces,
        /**
         * The nonce_index from the transaction (None if missing).
         *
         * @var \Near\JsonRpc\Models\OptionalValue<int|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $txNonceIndex = new \Near\JsonRpc\Models\OptionalValue(),
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->numNonces, array (
  'format' => 'uint16',
  'maximum' => 65535,
  'minimum' => 0,
  'type' => 'integer',
), 'num_nonces');
        if ($this->txNonceIndex->present) \Near\JsonRpc\Models\TypeGuard::assert($this->txNonceIndex->value, array (
  'format' => 'uint16',
  'maximum' => 65535,
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'tx_nonce_index');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for InvalidTxErrorInvalidNonceIndexPayload.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('num_nonces', $data)) throw new \InvalidArgumentException('Missing required field: num_nonces');
        $extra = array_diff_key($data, array (
  'num_nonces' => true,
  'tx_nonce_index' => true,
));
        return new self(
            numNonces: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['num_nonces'], array (
  'format' => 'uint16',
  'maximum' => 65535,
  'minimum' => 0,
  'type' => 'integer',
), 'num_nonces'),
            txNonceIndex: array_key_exists('tx_nonce_index', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['tx_nonce_index'], array (
  'format' => 'uint16',
  'maximum' => 65535,
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'tx_nonce_index')) : new \Near\JsonRpc\Models\OptionalValue(),
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
        $data['num_nonces'] = $this->numNonces;
        if ($this->txNonceIndex->present) $data['tx_nonce_index'] = $this->txNonceIndex->value;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'num_nonces' => 
    array (
      'format' => 'uint16',
      'maximum' => 65535,
      'minimum' => 0,
      'type' => 'integer',
    ),
    'tx_nonce_index' => 
    array (
      'format' => 'uint16',
      'maximum' => 65535,
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'num_nonces',
  ),
  'type' => 'object',
), 'InvalidTxErrorInvalidNonceIndexPayload'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'num_nonces' => 
    array (
      'format' => 'uint16',
      'maximum' => 65535,
      'minimum' => 0,
      'type' => 'integer',
    ),
    'tx_nonce_index' => 
    array (
      'format' => 'uint16',
      'maximum' => 65535,
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'num_nonces',
  ),
  'type' => 'object',
), 'InvalidTxErrorInvalidNonceIndexPayload');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
