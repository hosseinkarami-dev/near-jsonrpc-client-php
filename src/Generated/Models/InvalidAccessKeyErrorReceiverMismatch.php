<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Transaction `receiver_id` doesn't match the access key receiver_id
 */
final readonly class InvalidAccessKeyErrorReceiverMismatch implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorReceiverMismatchPayload
         */
        public \Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorReceiverMismatchPayload $receiverMismatch
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->receiverMismatch, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidAccessKeyErrorReceiverMismatchPayload',
  'nullable' => false,
), 'ReceiverMismatch');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for InvalidAccessKeyErrorReceiverMismatch.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('ReceiverMismatch', $data)) throw new \InvalidArgumentException('Missing required field: ReceiverMismatch');
        $unknown = array_diff_key($data, array (
  'ReceiverMismatch' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in InvalidAccessKeyErrorReceiverMismatch.');
        return new self(
            receiverMismatch: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['ReceiverMismatch'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidAccessKeyErrorReceiverMismatchPayload',
  'nullable' => false,
), 'ReceiverMismatch')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['ReceiverMismatch'] = $this->receiverMismatch;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'ReceiverMismatch' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidAccessKeyErrorReceiverMismatchPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'ReceiverMismatch',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'ReceiverMismatch',
    'tag' => 'ReceiverMismatch',
    'payload' => 'InvalidAccessKeyErrorReceiverMismatchPayload',
  ),
), 'InvalidAccessKeyErrorReceiverMismatch'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'ReceiverMismatch' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidAccessKeyErrorReceiverMismatchPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'ReceiverMismatch',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'ReceiverMismatch',
    'tag' => 'ReceiverMismatch',
    'payload' => 'InvalidAccessKeyErrorReceiverMismatchPayload',
  ),
), 'InvalidAccessKeyErrorReceiverMismatch');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
