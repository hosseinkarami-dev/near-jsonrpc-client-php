<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The final action of the receipt returned a promise or the signed transaction was converted
 * to a receipt. Contains the receipt_id of the generated receipt.
 */
final readonly class ExecutionStatusViewSuccessReceiptId implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $successReceiptId
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->successReceiptId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'SuccessReceiptId');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ExecutionStatusViewSuccessReceiptId.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('SuccessReceiptId', $data)) throw new \InvalidArgumentException('Missing required field: SuccessReceiptId');
        $unknown = array_diff_key($data, array (
  'SuccessReceiptId' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ExecutionStatusViewSuccessReceiptId.');
        return new self(
            successReceiptId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['SuccessReceiptId'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'SuccessReceiptId')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['SuccessReceiptId'] = $this->successReceiptId;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'SuccessReceiptId' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'SuccessReceiptId',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'SuccessReceiptId',
    'tag' => 'SuccessReceiptId',
    'payload' => 'CryptoHash',
  ),
), 'ExecutionStatusViewSuccessReceiptId'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'SuccessReceiptId' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'SuccessReceiptId',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'SuccessReceiptId',
    'tag' => 'SuccessReceiptId',
    'payload' => 'CryptoHash',
  ),
), 'ExecutionStatusViewSuccessReceiptId');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
