<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class ReceiptView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\AccountId
         */
        public \Near\JsonRpc\Generated\Models\AccountId $predecessorId,
        /**
         * @var \Near\JsonRpc\Generated\Models\ReceiptEnumView
         */
        public \Near\JsonRpc\Generated\Models\ReceiptEnumView $receipt,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $receiptId,
        /**
         * @var \Near\JsonRpc\Generated\Models\AccountId
         */
        public \Near\JsonRpc\Generated\Models\AccountId $receiverId,
        /**
         * Deprecated, retained for backward compatibility.
         *
         * @var int|string|null
         */
        public int|string|null $priority = null,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->predecessorId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'predecessor_id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->receipt, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptEnumView',
  'nullable' => false,
), 'receipt');
        \Near\JsonRpc\Models\TypeGuard::assert($this->receiptId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'receipt_id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->receiverId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'receiver_id');
        if ($this->priority !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->priority, array (
  'default' => 0,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'priority');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ReceiptView.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('predecessor_id', $data)) throw new \InvalidArgumentException('Missing required field: predecessor_id');
        if (!array_key_exists('receiver_id', $data)) throw new \InvalidArgumentException('Missing required field: receiver_id');
        if (!array_key_exists('receipt_id', $data)) throw new \InvalidArgumentException('Missing required field: receipt_id');
        if (!array_key_exists('receipt', $data)) throw new \InvalidArgumentException('Missing required field: receipt');
        $extra = array_diff_key($data, array (
  'predecessor_id' => true,
  'priority' => true,
  'receipt' => true,
  'receipt_id' => true,
  'receiver_id' => true,
));
        return new self(
            predecessorId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['predecessor_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'predecessor_id'),
            receipt: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['receipt'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptEnumView',
  'nullable' => false,
), 'receipt'),
            receiptId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['receipt_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'receipt_id'),
            receiverId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['receiver_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'receiver_id'),
            priority: array_key_exists('priority', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['priority'], array (
  'default' => 0,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'priority') : null,
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
        $data['predecessor_id'] = $this->predecessorId;
        $data['receipt'] = $this->receipt;
        $data['receipt_id'] = $this->receiptId;
        $data['receiver_id'] = $this->receiverId;
        if ($this->priority !== null) $data['priority'] = $this->priority;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'predecessor_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
    'priority' => 
    array (
      'default' => 0,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'receipt' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptEnumView',
      'nullable' => false,
    ),
    'receipt_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'receiver_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'predecessor_id',
    1 => 'receiver_id',
    2 => 'receipt_id',
    3 => 'receipt',
  ),
  'type' => 'object',
), 'ReceiptView'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'predecessor_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
    'priority' => 
    array (
      'default' => 0,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'receipt' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptEnumView',
      'nullable' => false,
    ),
    'receipt_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'receiver_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'predecessor_id',
    1 => 'receiver_id',
    2 => 'receipt_id',
    3 => 'receipt',
  ),
  'type' => 'object',
), 'ReceiptView');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
