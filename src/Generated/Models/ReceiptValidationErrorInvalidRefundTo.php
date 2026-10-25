<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The `refund_to` of an ActionReceipt is not valid.
 */
final readonly class ReceiptValidationErrorInvalidRefundTo implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidRefundToPayload
         */
        public \Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidRefundToPayload $invalidRefundTo
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->invalidRefundTo, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorInvalidRefundToPayload',
  'nullable' => false,
), 'InvalidRefundTo');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ReceiptValidationErrorInvalidRefundTo.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('InvalidRefundTo', $data)) throw new \InvalidArgumentException('Missing required field: InvalidRefundTo');
        $unknown = array_diff_key($data, array (
  'InvalidRefundTo' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ReceiptValidationErrorInvalidRefundTo.');
        return new self(
            invalidRefundTo: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['InvalidRefundTo'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorInvalidRefundToPayload',
  'nullable' => false,
), 'InvalidRefundTo')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['InvalidRefundTo'] = $this->invalidRefundTo;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'InvalidRefundTo' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorInvalidRefundToPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'InvalidRefundTo',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'InvalidRefundTo',
    'tag' => 'InvalidRefundTo',
    'payload' => 'ReceiptValidationErrorInvalidRefundToPayload',
  ),
), 'ReceiptValidationErrorInvalidRefundTo'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'InvalidRefundTo' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorInvalidRefundToPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'InvalidRefundTo',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'InvalidRefundTo',
    'tag' => 'InvalidRefundTo',
    'payload' => 'ReceiptValidationErrorInvalidRefundToPayload',
  ),
), 'ReceiptValidationErrorInvalidRefundTo');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
