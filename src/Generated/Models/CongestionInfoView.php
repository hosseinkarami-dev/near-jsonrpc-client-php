<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Stores the congestion level of a shard. More info about congestion [here](https://near.github.io/nearcore/architecture/how/receipt-congestion.html?highlight=congestion#receipt-congestion)
 */
final readonly class CongestionInfoView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var int
         */
        public int $allowedShard,
        /**
         * @var string
         */
        public string $bufferedReceiptsGas,
        /**
         * @var string
         */
        public string $delayedReceiptsGas,
        /**
         * @var int|string
         */
        public int|string $receiptBytes,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->allowedShard, array (
  'format' => 'uint16',
  'maximum' => 65535,
  'minimum' => 0,
  'type' => 'integer',
), 'allowed_shard');
        \Near\JsonRpc\Models\TypeGuard::assert($this->bufferedReceiptsGas, array (
  'type' => 'string',
), 'buffered_receipts_gas');
        \Near\JsonRpc\Models\TypeGuard::assert($this->delayedReceiptsGas, array (
  'type' => 'string',
), 'delayed_receipts_gas');
        \Near\JsonRpc\Models\TypeGuard::assert($this->receiptBytes, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'receipt_bytes');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for CongestionInfoView.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('delayed_receipts_gas', $data)) throw new \InvalidArgumentException('Missing required field: delayed_receipts_gas');
        if (!array_key_exists('buffered_receipts_gas', $data)) throw new \InvalidArgumentException('Missing required field: buffered_receipts_gas');
        if (!array_key_exists('receipt_bytes', $data)) throw new \InvalidArgumentException('Missing required field: receipt_bytes');
        if (!array_key_exists('allowed_shard', $data)) throw new \InvalidArgumentException('Missing required field: allowed_shard');
        $extra = array_diff_key($data, array (
  'allowed_shard' => true,
  'buffered_receipts_gas' => true,
  'delayed_receipts_gas' => true,
  'receipt_bytes' => true,
));
        return new self(
            allowedShard: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['allowed_shard'], array (
  'format' => 'uint16',
  'maximum' => 65535,
  'minimum' => 0,
  'type' => 'integer',
), 'allowed_shard'),
            bufferedReceiptsGas: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['buffered_receipts_gas'], array (
  'type' => 'string',
), 'buffered_receipts_gas'),
            delayedReceiptsGas: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['delayed_receipts_gas'], array (
  'type' => 'string',
), 'delayed_receipts_gas'),
            receiptBytes: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['receipt_bytes'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'receipt_bytes'),
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
        $data['allowed_shard'] = $this->allowedShard;
        $data['buffered_receipts_gas'] = $this->bufferedReceiptsGas;
        $data['delayed_receipts_gas'] = $this->delayedReceiptsGas;
        $data['receipt_bytes'] = $this->receiptBytes;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'allowed_shard' => 
    array (
      'format' => 'uint16',
      'maximum' => 65535,
      'minimum' => 0,
      'type' => 'integer',
    ),
    'buffered_receipts_gas' => 
    array (
      'type' => 'string',
    ),
    'delayed_receipts_gas' => 
    array (
      'type' => 'string',
    ),
    'receipt_bytes' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'delayed_receipts_gas',
    1 => 'buffered_receipts_gas',
    2 => 'receipt_bytes',
    3 => 'allowed_shard',
  ),
  'type' => 'object',
), 'CongestionInfoView'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'allowed_shard' => 
    array (
      'format' => 'uint16',
      'maximum' => 65535,
      'minimum' => 0,
      'type' => 'integer',
    ),
    'buffered_receipts_gas' => 
    array (
      'type' => 'string',
    ),
    'delayed_receipts_gas' => 
    array (
      'type' => 'string',
    ),
    'receipt_bytes' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'delayed_receipts_gas',
    1 => 'buffered_receipts_gas',
    2 => 'receipt_bytes',
    3 => 'allowed_shard',
  ),
  'type' => 'object',
), 'CongestionInfoView');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
