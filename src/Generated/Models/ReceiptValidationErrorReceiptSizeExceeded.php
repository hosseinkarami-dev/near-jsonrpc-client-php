<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Receipt is bigger than the limit.
 */
final readonly class ReceiptValidationErrorReceiptSizeExceeded implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ReceiptValidationErrorReceiptSizeExceededPayload
         */
        public \Near\JsonRpc\Generated\Models\ReceiptValidationErrorReceiptSizeExceededPayload $receiptSizeExceeded
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->receiptSizeExceeded, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorReceiptSizeExceededPayload',
  'nullable' => false,
), 'ReceiptSizeExceeded');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ReceiptValidationErrorReceiptSizeExceeded.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('ReceiptSizeExceeded', $data)) throw new \InvalidArgumentException('Missing required field: ReceiptSizeExceeded');
        $unknown = array_diff_key($data, array (
  'ReceiptSizeExceeded' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ReceiptValidationErrorReceiptSizeExceeded.');
        return new self(
            receiptSizeExceeded: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['ReceiptSizeExceeded'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorReceiptSizeExceededPayload',
  'nullable' => false,
), 'ReceiptSizeExceeded')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['ReceiptSizeExceeded'] = $this->receiptSizeExceeded;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'ReceiptSizeExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorReceiptSizeExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'ReceiptSizeExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'ReceiptSizeExceeded',
    'tag' => 'ReceiptSizeExceeded',
    'payload' => 'ReceiptValidationErrorReceiptSizeExceededPayload',
  ),
), 'ReceiptValidationErrorReceiptSizeExceeded'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'ReceiptSizeExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorReceiptSizeExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'ReceiptSizeExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'ReceiptSizeExceeded',
    'tag' => 'ReceiptSizeExceeded',
    'payload' => 'ReceiptValidationErrorReceiptSizeExceededPayload',
  ),
), 'ReceiptValidationErrorReceiptSizeExceeded');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
