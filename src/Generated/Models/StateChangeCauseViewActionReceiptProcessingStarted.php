<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class StateChangeCauseViewActionReceiptProcessingStarted implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $receiptHash,
        /**
         * @var 'action_receipt_processing_started'
         */
        public string $type,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->receiptHash, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'receipt_hash');
        \Near\JsonRpc\Models\TypeGuard::assert($this->type, array (
  'enum' => 
  array (
    0 => 'action_receipt_processing_started',
  ),
  'type' => 'string',
), 'type');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for StateChangeCauseViewActionReceiptProcessingStarted.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('type', $data)) throw new \InvalidArgumentException('Missing required field: type');
        if (!array_key_exists('receipt_hash', $data)) throw new \InvalidArgumentException('Missing required field: receipt_hash');
        $extra = array_diff_key($data, array (
  'receipt_hash' => true,
  'type' => true,
));
        return new self(
            receiptHash: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['receipt_hash'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'receipt_hash'),
            type: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['type'], array (
  'enum' => 
  array (
    0 => 'action_receipt_processing_started',
  ),
  'type' => 'string',
), 'type'),
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
        $data['receipt_hash'] = $this->receiptHash;
        $data['type'] = $this->type;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'receipt_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'type' => 
    array (
      'enum' => 
      array (
        0 => 'action_receipt_processing_started',
      ),
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'type',
    1 => 'receipt_hash',
  ),
  'type' => 'object',
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'action_receipt_processing_started',
  ),
), 'StateChangeCauseViewActionReceiptProcessingStarted'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'receipt_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'type' => 
    array (
      'enum' => 
      array (
        0 => 'action_receipt_processing_started',
      ),
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'type',
    1 => 'receipt_hash',
  ),
  'type' => 'object',
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'action_receipt_processing_started',
  ),
), 'StateChangeCauseViewActionReceiptProcessingStarted');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
