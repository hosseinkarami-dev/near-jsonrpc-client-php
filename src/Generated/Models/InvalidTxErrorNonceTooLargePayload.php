<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class InvalidTxErrorNonceTooLargePayload implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var int|string
         */
        public int|string $txNonce,
        /**
         * @var int|string
         */
        public int|string $upperBound,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->txNonce, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'tx_nonce');
        \Near\JsonRpc\Models\TypeGuard::assert($this->upperBound, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'upper_bound');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for InvalidTxErrorNonceTooLargePayload.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('tx_nonce', $data)) throw new \InvalidArgumentException('Missing required field: tx_nonce');
        if (!array_key_exists('upper_bound', $data)) throw new \InvalidArgumentException('Missing required field: upper_bound');
        $extra = array_diff_key($data, array (
  'tx_nonce' => true,
  'upper_bound' => true,
));
        return new self(
            txNonce: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['tx_nonce'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'tx_nonce'),
            upperBound: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['upper_bound'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'upper_bound'),
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
        $data['tx_nonce'] = $this->txNonce;
        $data['upper_bound'] = $this->upperBound;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'tx_nonce' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'upper_bound' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'tx_nonce',
    1 => 'upper_bound',
  ),
  'type' => 'object',
), 'InvalidTxErrorNonceTooLargePayload'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'tx_nonce' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'upper_bound' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'tx_nonce',
    1 => 'upper_bound',
  ),
  'type' => 'object',
), 'InvalidTxErrorNonceTooLargePayload');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
