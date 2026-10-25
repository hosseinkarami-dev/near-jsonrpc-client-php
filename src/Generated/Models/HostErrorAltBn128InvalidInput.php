<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Invalid input to alt_bn128 family of functions (e.g., point which isn't
 * on the curve).
 */
final readonly class HostErrorAltBn128InvalidInput implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\HostErrorAltBn128InvalidInputPayload
         */
        public \Near\JsonRpc\Generated\Models\HostErrorAltBn128InvalidInputPayload $altBn128InvalidInput
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->altBn128InvalidInput, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorAltBn128InvalidInputPayload',
  'nullable' => false,
), 'AltBn128InvalidInput');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for HostErrorAltBn128InvalidInput.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('AltBn128InvalidInput', $data)) throw new \InvalidArgumentException('Missing required field: AltBn128InvalidInput');
        $unknown = array_diff_key($data, array (
  'AltBn128InvalidInput' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in HostErrorAltBn128InvalidInput.');
        return new self(
            altBn128InvalidInput: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['AltBn128InvalidInput'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorAltBn128InvalidInputPayload',
  'nullable' => false,
), 'AltBn128InvalidInput')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['AltBn128InvalidInput'] = $this->altBn128InvalidInput;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'AltBn128InvalidInput' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorAltBn128InvalidInputPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'AltBn128InvalidInput',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'AltBn128InvalidInput',
    'tag' => 'AltBn128InvalidInput',
    'payload' => 'HostErrorAltBn128InvalidInputPayload',
  ),
), 'HostErrorAltBn128InvalidInput'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'AltBn128InvalidInput' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorAltBn128InvalidInputPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'AltBn128InvalidInput',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'AltBn128InvalidInput',
    'tag' => 'AltBn128InvalidInput',
    'payload' => 'HostErrorAltBn128InvalidInputPayload',
  ),
), 'HostErrorAltBn128InvalidInput');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
