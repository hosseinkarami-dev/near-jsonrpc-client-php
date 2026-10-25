<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The combined size of the resolved promise inputs (the `DataReceipt`s
 * referenced by the receipt's `input_data_ids`) exceeded the limit.
 */
final readonly class ActionErrorKindTotalPromiseInputSizeExceeded implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionErrorKindTotalPromiseInputSizeExceededPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionErrorKindTotalPromiseInputSizeExceededPayload $totalPromiseInputSizeExceeded
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->totalPromiseInputSizeExceeded, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindTotalPromiseInputSizeExceededPayload',
  'nullable' => false,
), 'TotalPromiseInputSizeExceeded');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionErrorKindTotalPromiseInputSizeExceeded.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('TotalPromiseInputSizeExceeded', $data)) throw new \InvalidArgumentException('Missing required field: TotalPromiseInputSizeExceeded');
        $unknown = array_diff_key($data, array (
  'TotalPromiseInputSizeExceeded' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionErrorKindTotalPromiseInputSizeExceeded.');
        return new self(
            totalPromiseInputSizeExceeded: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['TotalPromiseInputSizeExceeded'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindTotalPromiseInputSizeExceededPayload',
  'nullable' => false,
), 'TotalPromiseInputSizeExceeded')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['TotalPromiseInputSizeExceeded'] = $this->totalPromiseInputSizeExceeded;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'TotalPromiseInputSizeExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindTotalPromiseInputSizeExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'TotalPromiseInputSizeExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'TotalPromiseInputSizeExceeded',
    'tag' => 'TotalPromiseInputSizeExceeded',
    'payload' => 'ActionErrorKindTotalPromiseInputSizeExceededPayload',
  ),
), 'ActionErrorKindTotalPromiseInputSizeExceeded'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'TotalPromiseInputSizeExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindTotalPromiseInputSizeExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'TotalPromiseInputSizeExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'TotalPromiseInputSizeExceeded',
    'tag' => 'TotalPromiseInputSizeExceeded',
    'payload' => 'ActionErrorKindTotalPromiseInputSizeExceededPayload',
  ),
), 'ActionErrorKindTotalPromiseInputSizeExceeded');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
