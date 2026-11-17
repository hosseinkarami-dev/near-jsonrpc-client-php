<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * A `PromiseYield` receipt must have exactly one input data dependency.
 */
final readonly class ReceiptValidationErrorInvalidPromiseYieldInputDataCount implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidPromiseYieldInputDataCountPayload
         */
        public \Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidPromiseYieldInputDataCountPayload $invalidPromiseYieldInputDataCount
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->invalidPromiseYieldInputDataCount, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorInvalidPromiseYieldInputDataCountPayload',
  'nullable' => false,
), 'InvalidPromiseYieldInputDataCount');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ReceiptValidationErrorInvalidPromiseYieldInputDataCount.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('InvalidPromiseYieldInputDataCount', $data)) throw new \InvalidArgumentException('Missing required field: InvalidPromiseYieldInputDataCount');
        $unknown = array_diff_key($data, array (
  'InvalidPromiseYieldInputDataCount' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ReceiptValidationErrorInvalidPromiseYieldInputDataCount.');
        return new self(
            invalidPromiseYieldInputDataCount: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['InvalidPromiseYieldInputDataCount'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorInvalidPromiseYieldInputDataCountPayload',
  'nullable' => false,
), 'InvalidPromiseYieldInputDataCount')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['InvalidPromiseYieldInputDataCount'] = $this->invalidPromiseYieldInputDataCount;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'InvalidPromiseYieldInputDataCount' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorInvalidPromiseYieldInputDataCountPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'InvalidPromiseYieldInputDataCount',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'InvalidPromiseYieldInputDataCount',
    'tag' => 'InvalidPromiseYieldInputDataCount',
    'payload' => 'ReceiptValidationErrorInvalidPromiseYieldInputDataCountPayload',
  ),
), 'ReceiptValidationErrorInvalidPromiseYieldInputDataCount'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'InvalidPromiseYieldInputDataCount' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorInvalidPromiseYieldInputDataCountPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'InvalidPromiseYieldInputDataCount',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'InvalidPromiseYieldInputDataCount',
    'tag' => 'InvalidPromiseYieldInputDataCount',
    'payload' => 'ReceiptValidationErrorInvalidPromiseYieldInputDataCountPayload',
  ),
), 'ReceiptValidationErrorInvalidPromiseYieldInputDataCount');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
