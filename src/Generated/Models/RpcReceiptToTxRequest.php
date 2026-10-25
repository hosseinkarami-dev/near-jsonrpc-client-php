<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class RpcReceiptToTxRequest implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $receiptId,
        /**
         * Block height near where receipt was created. Enables hint fallback
         * scan on column miss. Anchor refreshes to each scan-resolved parent's
         * exact execution height; later ancestors bounded via causality
         * (emit before execute), so subsequent column-miss scans go
         * `Ancestor`. Bump `receipt_to_tx_max_hop_distance` if cold archival
         * gaps exceed default 20.
         *
         * Cold-storage cost: per-row latency orders of magnitude over hot. To
         * bound request cost:
         *   - Supply `block_height` within parent's `±window` (default 5).
         *   - Supply `shard_id`. Omit → all-shards enumeration until walker
         *     crosses `FromReceipt` hop, multiplying cold-read cost.
         *   - Don't widen `window` beyond indexer's accuracy; budget shared
         *     across full ancestry walk.
         *
         * Receipt-id-only queries against periods with `save_receipt_to_tx`
         * disabled stay unsupported: column never written, no self-locating.
         *
         * @var \Near\JsonRpc\Models\OptionalValue<int|string|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $blockHeight = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * Shard hint. Narrows scan to this shard at hint height. Omit to
         * enumerate all tracked shards (higher cost). After walker crosses a
         * receipt-origin hop, shard derived from parent's predecessor account
         * and hint no longer applies. Best-effort across resharding: layout
         * shifts can miss producer, walk returns `UnknownReceipt`.
         *
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\ShardId|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $shardId = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * Pre-first-scan width: `±window` heights around hint. Caps at
         * `receipt_to_tx_max_hint_window` (default 20). Ignored after first
         * scan-resolved hop — walker switches to `Ancestor` mode at
         * `receipt_to_tx_max_hop_distance` width.
         *
         * @var \Near\JsonRpc\Models\OptionalValue<int|string|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $window = new \Near\JsonRpc\Models\OptionalValue(),
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->receiptId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'receipt_id');
        if ($this->blockHeight->present) \Near\JsonRpc\Models\TypeGuard::assert($this->blockHeight->value, array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'block_height');
        if ($this->shardId->present) \Near\JsonRpc\Models\TypeGuard::assert($this->shardId->value, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
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
), 'shard_id');
        if ($this->window->present) \Near\JsonRpc\Models\TypeGuard::assert($this->window->value, array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'window');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcReceiptToTxRequest.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('receipt_id', $data)) throw new \InvalidArgumentException('Missing required field: receipt_id');
        $extra = array_diff_key($data, array (
  'block_height' => true,
  'receipt_id' => true,
  'shard_id' => true,
  'window' => true,
));
        return new self(
            receiptId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['receipt_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'receipt_id'),
            blockHeight: array_key_exists('block_height', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['block_height'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'block_height')) : new \Near\JsonRpc\Models\OptionalValue(),
            shardId: array_key_exists('shard_id', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['shard_id'], array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
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
), 'shard_id')) : new \Near\JsonRpc\Models\OptionalValue(),
            window: array_key_exists('window', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['window'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'window')) : new \Near\JsonRpc\Models\OptionalValue(),
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
        $data['receipt_id'] = $this->receiptId;
        if ($this->blockHeight->present) $data['block_height'] = $this->blockHeight->value;
        if ($this->shardId->present) $data['shard_id'] = $this->shardId->value;
        if ($this->window->present) $data['window'] = $this->window->value;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'block_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'receipt_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'shard_id' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
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
    'window' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'receipt_id',
  ),
  'title' => 'RpcReceiptToTxRequest',
  'type' => 'object',
), 'RpcReceiptToTxRequest'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'block_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'receipt_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'shard_id' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
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
    'window' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'receipt_id',
  ),
  'title' => 'RpcReceiptToTxRequest',
  'type' => 'object',
), 'RpcReceiptToTxRequest');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
