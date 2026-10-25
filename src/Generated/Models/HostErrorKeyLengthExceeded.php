<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The storage key length exceeded the limit.
 */
final readonly class HostErrorKeyLengthExceeded implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\HostErrorKeyLengthExceededPayload
         */
        public \Near\JsonRpc\Generated\Models\HostErrorKeyLengthExceededPayload $keyLengthExceeded
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->keyLengthExceeded, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorKeyLengthExceededPayload',
  'nullable' => false,
), 'KeyLengthExceeded');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for HostErrorKeyLengthExceeded.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('KeyLengthExceeded', $data)) throw new \InvalidArgumentException('Missing required field: KeyLengthExceeded');
        $unknown = array_diff_key($data, array (
  'KeyLengthExceeded' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in HostErrorKeyLengthExceeded.');
        return new self(
            keyLengthExceeded: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['KeyLengthExceeded'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorKeyLengthExceededPayload',
  'nullable' => false,
), 'KeyLengthExceeded')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['KeyLengthExceeded'] = $this->keyLengthExceeded;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'KeyLengthExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorKeyLengthExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'KeyLengthExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'KeyLengthExceeded',
    'tag' => 'KeyLengthExceeded',
    'payload' => 'HostErrorKeyLengthExceededPayload',
  ),
), 'HostErrorKeyLengthExceeded'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'KeyLengthExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorKeyLengthExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'KeyLengthExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'KeyLengthExceeded',
    'tag' => 'KeyLengthExceeded',
    'payload' => 'HostErrorKeyLengthExceededPayload',
  ),
), 'HostErrorKeyLengthExceeded');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
