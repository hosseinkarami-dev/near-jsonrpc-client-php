<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The same input data id is listed more than once in an ActionReceipt.
 */
final readonly class ReceiptValidationErrorDuplicateInputDataId implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ReceiptValidationErrorDuplicateInputDataIdPayload
         */
        public \Near\JsonRpc\Generated\Models\ReceiptValidationErrorDuplicateInputDataIdPayload $duplicateInputDataId
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->duplicateInputDataId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorDuplicateInputDataIdPayload',
  'nullable' => false,
), 'DuplicateInputDataId');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ReceiptValidationErrorDuplicateInputDataId.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('DuplicateInputDataId', $data)) throw new \InvalidArgumentException('Missing required field: DuplicateInputDataId');
        $unknown = array_diff_key($data, array (
  'DuplicateInputDataId' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ReceiptValidationErrorDuplicateInputDataId.');
        return new self(
            duplicateInputDataId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['DuplicateInputDataId'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorDuplicateInputDataIdPayload',
  'nullable' => false,
), 'DuplicateInputDataId')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['DuplicateInputDataId'] = $this->duplicateInputDataId;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'DuplicateInputDataId' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorDuplicateInputDataIdPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'DuplicateInputDataId',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'DuplicateInputDataId',
    'tag' => 'DuplicateInputDataId',
    'payload' => 'ReceiptValidationErrorDuplicateInputDataIdPayload',
  ),
), 'ReceiptValidationErrorDuplicateInputDataId'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'DuplicateInputDataId' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorDuplicateInputDataIdPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'DuplicateInputDataId',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'DuplicateInputDataId',
    'tag' => 'DuplicateInputDataId',
    'payload' => 'ReceiptValidationErrorDuplicateInputDataIdPayload',
  ),
), 'ReceiptValidationErrorDuplicateInputDataId');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
