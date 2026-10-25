<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The `receiver_id` of a Receipt is not valid.
 */
final readonly class ReceiptValidationErrorInvalidReceiverId implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidReceiverIdPayload
         */
        public \Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidReceiverIdPayload $invalidReceiverId
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->invalidReceiverId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorInvalidReceiverIdPayload',
  'nullable' => false,
), 'InvalidReceiverId');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ReceiptValidationErrorInvalidReceiverId.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('InvalidReceiverId', $data)) throw new \InvalidArgumentException('Missing required field: InvalidReceiverId');
        $unknown = array_diff_key($data, array (
  'InvalidReceiverId' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ReceiptValidationErrorInvalidReceiverId.');
        return new self(
            invalidReceiverId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['InvalidReceiverId'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorInvalidReceiverIdPayload',
  'nullable' => false,
), 'InvalidReceiverId')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['InvalidReceiverId'] = $this->invalidReceiverId;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'InvalidReceiverId' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorInvalidReceiverIdPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'InvalidReceiverId',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'InvalidReceiverId',
    'tag' => 'InvalidReceiverId',
    'payload' => 'ReceiptValidationErrorInvalidReceiverIdPayload',
  ),
), 'ReceiptValidationErrorInvalidReceiverId'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'InvalidReceiverId' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorInvalidReceiverIdPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'InvalidReceiverId',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'InvalidReceiverId',
    'tag' => 'InvalidReceiverId',
    'payload' => 'ReceiptValidationErrorInvalidReceiverIdPayload',
  ),
), 'ReceiptValidationErrorInvalidReceiverId');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
