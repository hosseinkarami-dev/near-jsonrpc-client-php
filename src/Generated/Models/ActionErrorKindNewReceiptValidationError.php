<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Error occurs when a new `ActionReceipt` created by the `FunctionCall` action fails
 * receipt validation.
 */
final readonly class ActionErrorKindNewReceiptValidationError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ReceiptValidationError
         */
        public \Near\JsonRpc\Generated\Models\ReceiptValidationError $newReceiptValidationError
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->newReceiptValidationError, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationError',
  'nullable' => false,
), 'NewReceiptValidationError');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionErrorKindNewReceiptValidationError.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('NewReceiptValidationError', $data)) throw new \InvalidArgumentException('Missing required field: NewReceiptValidationError');
        $unknown = array_diff_key($data, array (
  'NewReceiptValidationError' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionErrorKindNewReceiptValidationError.');
        return new self(
            newReceiptValidationError: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['NewReceiptValidationError'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationError',
  'nullable' => false,
), 'NewReceiptValidationError')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['NewReceiptValidationError'] = $this->newReceiptValidationError;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'NewReceiptValidationError' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationError',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'NewReceiptValidationError',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'NewReceiptValidationError',
    'tag' => 'NewReceiptValidationError',
    'payload' => 'ReceiptValidationError',
  ),
), 'ActionErrorKindNewReceiptValidationError'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'NewReceiptValidationError' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationError',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'NewReceiptValidationError',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'NewReceiptValidationError',
    'tag' => 'NewReceiptValidationError',
    'payload' => 'ReceiptValidationError',
  ),
), 'ActionErrorKindNewReceiptValidationError');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
