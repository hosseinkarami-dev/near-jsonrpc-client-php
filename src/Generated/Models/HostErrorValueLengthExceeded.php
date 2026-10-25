<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The storage value length exceeded the limit.
 */
final readonly class HostErrorValueLengthExceeded implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\HostErrorValueLengthExceededPayload
         */
        public \Near\JsonRpc\Generated\Models\HostErrorValueLengthExceededPayload $valueLengthExceeded
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->valueLengthExceeded, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorValueLengthExceededPayload',
  'nullable' => false,
), 'ValueLengthExceeded');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for HostErrorValueLengthExceeded.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('ValueLengthExceeded', $data)) throw new \InvalidArgumentException('Missing required field: ValueLengthExceeded');
        $unknown = array_diff_key($data, array (
  'ValueLengthExceeded' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in HostErrorValueLengthExceeded.');
        return new self(
            valueLengthExceeded: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['ValueLengthExceeded'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorValueLengthExceededPayload',
  'nullable' => false,
), 'ValueLengthExceeded')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['ValueLengthExceeded'] = $this->valueLengthExceeded;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'ValueLengthExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorValueLengthExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'ValueLengthExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'ValueLengthExceeded',
    'tag' => 'ValueLengthExceeded',
    'payload' => 'HostErrorValueLengthExceededPayload',
  ),
), 'HostErrorValueLengthExceeded'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'ValueLengthExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorValueLengthExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'ValueLengthExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'ValueLengthExceeded',
    'tag' => 'ValueLengthExceeded',
    'payload' => 'HostErrorValueLengthExceededPayload',
  ),
), 'HostErrorValueLengthExceeded');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
