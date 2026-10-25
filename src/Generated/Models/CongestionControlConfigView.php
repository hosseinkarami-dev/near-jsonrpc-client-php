<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The configuration for congestion control. More info about congestion [here](https://near.github.io/nearcore/architecture/how/receipt-congestion.html?highlight=congestion#receipt-congestion)
 */
final readonly class CongestionControlConfigView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * How much gas the chosen allowed shard can send to a 100% congested shard.
         *
         * See [`CongestionControlConfig`] for more details.
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $allowedShardOutgoingGas = null,
        /**
         * How much gas in delayed receipts of a shard is 100% incoming congestion.
         *
         * See [`CongestionControlConfig`] for more details.
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $maxCongestionIncomingGas = null,
        /**
         * How much memory space of all delayed and buffered receipts in a shard is
         * considered 100% congested.
         *
         * See [`CongestionControlConfig`] for more details.
         *
         * @var int|string|null
         */
        public int|string|null $maxCongestionMemoryConsumption = null,
        /**
         * How many missed chunks in a row in a shard is considered 100% congested.
         *
         * @var int|string|null
         */
        public int|string|null $maxCongestionMissedChunks = null,
        /**
         * How much gas in outgoing buffered receipts of a shard is 100% congested.
         *
         * Outgoing congestion contributes to overall congestion, which reduces how
         * much other shards are allowed to forward to this shard.
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $maxCongestionOutgoingGas = null,
        /**
         * The maximum amount of gas attached to receipts a shard can forward to
         * another shard per chunk.
         *
         * See [`CongestionControlConfig`] for more details.
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $maxOutgoingGas = null,
        /**
         * The maximum amount of gas in a chunk spent on converting new transactions to
         * receipts.
         *
         * See [`CongestionControlConfig`] for more details.
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $maxTxGas = null,
        /**
         * The minimum gas each shard can send to a shard that is not fully congested.
         *
         * See [`CongestionControlConfig`] for more details.
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $minOutgoingGas = null,
        /**
         * The minimum amount of gas in a chunk spent on converting new transactions
         * to receipts, as long as the receiving shard is not congested.
         *
         * See [`CongestionControlConfig`] for more details.
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $minTxGas = null,
        /**
         * How much congestion a shard can tolerate before it stops all shards from
         * accepting new transactions with the receiver set to the congested shard.
         *
         * @var int|float|null
         */
        public int|float|null $rejectTxCongestionThreshold = null,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        if ($this->allowedShardOutgoingGas !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->allowedShardOutgoingGas, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'allowed_shard_outgoing_gas');
        if ($this->maxCongestionIncomingGas !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxCongestionIncomingGas, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'max_congestion_incoming_gas');
        if ($this->maxCongestionMemoryConsumption !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxCongestionMemoryConsumption, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_congestion_memory_consumption');
        if ($this->maxCongestionMissedChunks !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxCongestionMissedChunks, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_congestion_missed_chunks');
        if ($this->maxCongestionOutgoingGas !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxCongestionOutgoingGas, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'max_congestion_outgoing_gas');
        if ($this->maxOutgoingGas !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxOutgoingGas, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'max_outgoing_gas');
        if ($this->maxTxGas !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxTxGas, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'max_tx_gas');
        if ($this->minOutgoingGas !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->minOutgoingGas, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'min_outgoing_gas');
        if ($this->minTxGas !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->minTxGas, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'min_tx_gas');
        if ($this->rejectTxCongestionThreshold !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->rejectTxCongestionThreshold, array (
  'format' => 'double',
  'type' => 'number',
), 'reject_tx_congestion_threshold');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for CongestionControlConfigView.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        $extra = array_diff_key($data, array (
  'allowed_shard_outgoing_gas' => true,
  'max_congestion_incoming_gas' => true,
  'max_congestion_memory_consumption' => true,
  'max_congestion_missed_chunks' => true,
  'max_congestion_outgoing_gas' => true,
  'max_outgoing_gas' => true,
  'max_tx_gas' => true,
  'min_outgoing_gas' => true,
  'min_tx_gas' => true,
  'reject_tx_congestion_threshold' => true,
));
        return new self(
            allowedShardOutgoingGas: array_key_exists('allowed_shard_outgoing_gas', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['allowed_shard_outgoing_gas'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'allowed_shard_outgoing_gas') : null,
            maxCongestionIncomingGas: array_key_exists('max_congestion_incoming_gas', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_congestion_incoming_gas'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'max_congestion_incoming_gas') : null,
            maxCongestionMemoryConsumption: array_key_exists('max_congestion_memory_consumption', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_congestion_memory_consumption'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_congestion_memory_consumption') : null,
            maxCongestionMissedChunks: array_key_exists('max_congestion_missed_chunks', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_congestion_missed_chunks'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_congestion_missed_chunks') : null,
            maxCongestionOutgoingGas: array_key_exists('max_congestion_outgoing_gas', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_congestion_outgoing_gas'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'max_congestion_outgoing_gas') : null,
            maxOutgoingGas: array_key_exists('max_outgoing_gas', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_outgoing_gas'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'max_outgoing_gas') : null,
            maxTxGas: array_key_exists('max_tx_gas', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_tx_gas'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'max_tx_gas') : null,
            minOutgoingGas: array_key_exists('min_outgoing_gas', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['min_outgoing_gas'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'min_outgoing_gas') : null,
            minTxGas: array_key_exists('min_tx_gas', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['min_tx_gas'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'min_tx_gas') : null,
            rejectTxCongestionThreshold: array_key_exists('reject_tx_congestion_threshold', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['reject_tx_congestion_threshold'], array (
  'format' => 'double',
  'type' => 'number',
), 'reject_tx_congestion_threshold') : null,
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
        if ($this->allowedShardOutgoingGas !== null) $data['allowed_shard_outgoing_gas'] = $this->allowedShardOutgoingGas;
        if ($this->maxCongestionIncomingGas !== null) $data['max_congestion_incoming_gas'] = $this->maxCongestionIncomingGas;
        if ($this->maxCongestionMemoryConsumption !== null) $data['max_congestion_memory_consumption'] = $this->maxCongestionMemoryConsumption;
        if ($this->maxCongestionMissedChunks !== null) $data['max_congestion_missed_chunks'] = $this->maxCongestionMissedChunks;
        if ($this->maxCongestionOutgoingGas !== null) $data['max_congestion_outgoing_gas'] = $this->maxCongestionOutgoingGas;
        if ($this->maxOutgoingGas !== null) $data['max_outgoing_gas'] = $this->maxOutgoingGas;
        if ($this->maxTxGas !== null) $data['max_tx_gas'] = $this->maxTxGas;
        if ($this->minOutgoingGas !== null) $data['min_outgoing_gas'] = $this->minOutgoingGas;
        if ($this->minTxGas !== null) $data['min_tx_gas'] = $this->minTxGas;
        if ($this->rejectTxCongestionThreshold !== null) $data['reject_tx_congestion_threshold'] = $this->rejectTxCongestionThreshold;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'allowed_shard_outgoing_gas' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'max_congestion_incoming_gas' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'max_congestion_memory_consumption' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_congestion_missed_chunks' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_congestion_outgoing_gas' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'max_outgoing_gas' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'max_tx_gas' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'min_outgoing_gas' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'min_tx_gas' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'reject_tx_congestion_threshold' => 
    array (
      'format' => 'double',
      'type' => 'number',
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'CongestionControlConfigView'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'allowed_shard_outgoing_gas' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'max_congestion_incoming_gas' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'max_congestion_memory_consumption' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_congestion_missed_chunks' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_congestion_outgoing_gas' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'max_outgoing_gas' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'max_tx_gas' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'min_outgoing_gas' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'min_tx_gas' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'reject_tx_congestion_threshold' => 
    array (
      'format' => 'double',
      'type' => 'number',
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'CongestionControlConfigView');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
