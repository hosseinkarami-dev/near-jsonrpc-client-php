<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The number of input data dependencies exceeds the limit in an ActionReceipt.
 */
final readonly class ReceiptValidationErrorNumberInputDataDependenciesExceeded implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ReceiptValidationErrorNumberInputDataDependenciesExceededPayload
         */
        public \Near\JsonRpc\Generated\Models\ReceiptValidationErrorNumberInputDataDependenciesExceededPayload $numberInputDataDependenciesExceeded
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->numberInputDataDependenciesExceeded, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorNumberInputDataDependenciesExceededPayload',
  'nullable' => false,
), 'NumberInputDataDependenciesExceeded');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ReceiptValidationErrorNumberInputDataDependenciesExceeded.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('NumberInputDataDependenciesExceeded', $data)) throw new \InvalidArgumentException('Missing required field: NumberInputDataDependenciesExceeded');
        $unknown = array_diff_key($data, array (
  'NumberInputDataDependenciesExceeded' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ReceiptValidationErrorNumberInputDataDependenciesExceeded.');
        return new self(
            numberInputDataDependenciesExceeded: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['NumberInputDataDependenciesExceeded'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorNumberInputDataDependenciesExceededPayload',
  'nullable' => false,
), 'NumberInputDataDependenciesExceeded')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['NumberInputDataDependenciesExceeded'] = $this->numberInputDataDependenciesExceeded;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'NumberInputDataDependenciesExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorNumberInputDataDependenciesExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'NumberInputDataDependenciesExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'NumberInputDataDependenciesExceeded',
    'tag' => 'NumberInputDataDependenciesExceeded',
    'payload' => 'ReceiptValidationErrorNumberInputDataDependenciesExceededPayload',
  ),
), 'ReceiptValidationErrorNumberInputDataDependenciesExceeded'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'NumberInputDataDependenciesExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorNumberInputDataDependenciesExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'NumberInputDataDependenciesExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'NumberInputDataDependenciesExceeded',
    'tag' => 'NumberInputDataDependenciesExceeded',
    'payload' => 'ReceiptValidationErrorNumberInputDataDependenciesExceededPayload',
  ),
), 'ReceiptValidationErrorNumberInputDataDependenciesExceeded');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
