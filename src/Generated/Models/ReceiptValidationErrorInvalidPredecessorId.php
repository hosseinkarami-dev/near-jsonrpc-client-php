<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The `predecessor_id` of a Receipt is not valid.
 */
final readonly class ReceiptValidationErrorInvalidPredecessorId implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidPredecessorIdPayload
         */
        public \Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidPredecessorIdPayload $invalidPredecessorId
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->invalidPredecessorId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorInvalidPredecessorIdPayload',
  'nullable' => false,
), 'InvalidPredecessorId');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ReceiptValidationErrorInvalidPredecessorId.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('InvalidPredecessorId', $data)) throw new \InvalidArgumentException('Missing required field: InvalidPredecessorId');
        $unknown = array_diff_key($data, array (
  'InvalidPredecessorId' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ReceiptValidationErrorInvalidPredecessorId.');
        return new self(
            invalidPredecessorId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['InvalidPredecessorId'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorInvalidPredecessorIdPayload',
  'nullable' => false,
), 'InvalidPredecessorId')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['InvalidPredecessorId'] = $this->invalidPredecessorId;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'InvalidPredecessorId' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorInvalidPredecessorIdPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'InvalidPredecessorId',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'InvalidPredecessorId',
    'tag' => 'InvalidPredecessorId',
    'payload' => 'ReceiptValidationErrorInvalidPredecessorIdPayload',
  ),
), 'ReceiptValidationErrorInvalidPredecessorId'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'InvalidPredecessorId' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorInvalidPredecessorIdPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'InvalidPredecessorId',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'InvalidPredecessorId',
    'tag' => 'InvalidPredecessorId',
    'payload' => 'ReceiptValidationErrorInvalidPredecessorIdPayload',
  ),
), 'ReceiptValidationErrorInvalidPredecessorId');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
