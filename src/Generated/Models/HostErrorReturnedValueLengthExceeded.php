<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The returned value length exceeded the limit.
 */
final readonly class HostErrorReturnedValueLengthExceeded implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\HostErrorReturnedValueLengthExceededPayload
         */
        public \Near\JsonRpc\Generated\Models\HostErrorReturnedValueLengthExceededPayload $returnedValueLengthExceeded
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->returnedValueLengthExceeded, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorReturnedValueLengthExceededPayload',
  'nullable' => false,
), 'ReturnedValueLengthExceeded');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for HostErrorReturnedValueLengthExceeded.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('ReturnedValueLengthExceeded', $data)) throw new \InvalidArgumentException('Missing required field: ReturnedValueLengthExceeded');
        $unknown = array_diff_key($data, array (
  'ReturnedValueLengthExceeded' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in HostErrorReturnedValueLengthExceeded.');
        return new self(
            returnedValueLengthExceeded: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['ReturnedValueLengthExceeded'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorReturnedValueLengthExceededPayload',
  'nullable' => false,
), 'ReturnedValueLengthExceeded')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['ReturnedValueLengthExceeded'] = $this->returnedValueLengthExceeded;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'ReturnedValueLengthExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorReturnedValueLengthExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'ReturnedValueLengthExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'ReturnedValueLengthExceeded',
    'tag' => 'ReturnedValueLengthExceeded',
    'payload' => 'HostErrorReturnedValueLengthExceededPayload',
  ),
), 'HostErrorReturnedValueLengthExceeded'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'ReturnedValueLengthExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorReturnedValueLengthExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'ReturnedValueLengthExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'ReturnedValueLengthExceeded',
    'tag' => 'ReturnedValueLengthExceeded',
    'payload' => 'HostErrorReturnedValueLengthExceededPayload',
  ),
), 'HostErrorReturnedValueLengthExceeded');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
