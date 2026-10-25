<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The `signer_id` of an ActionReceipt is not valid.
 */
final readonly class ReceiptValidationErrorInvalidSignerId implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidSignerIdPayload
         */
        public \Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidSignerIdPayload $invalidSignerId
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->invalidSignerId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorInvalidSignerIdPayload',
  'nullable' => false,
), 'InvalidSignerId');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ReceiptValidationErrorInvalidSignerId.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('InvalidSignerId', $data)) throw new \InvalidArgumentException('Missing required field: InvalidSignerId');
        $unknown = array_diff_key($data, array (
  'InvalidSignerId' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ReceiptValidationErrorInvalidSignerId.');
        return new self(
            invalidSignerId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['InvalidSignerId'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorInvalidSignerIdPayload',
  'nullable' => false,
), 'InvalidSignerId')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['InvalidSignerId'] = $this->invalidSignerId;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'InvalidSignerId' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorInvalidSignerIdPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'InvalidSignerId',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'InvalidSignerId',
    'tag' => 'InvalidSignerId',
    'payload' => 'ReceiptValidationErrorInvalidSignerIdPayload',
  ),
), 'ReceiptValidationErrorInvalidSignerId'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'InvalidSignerId' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorInvalidSignerIdPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'InvalidSignerId',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'InvalidSignerId',
    'tag' => 'InvalidSignerId',
    'payload' => 'ReceiptValidationErrorInvalidSignerIdPayload',
  ),
), 'ReceiptValidationErrorInvalidSignerId');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
