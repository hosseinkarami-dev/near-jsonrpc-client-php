<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class VersionedDelegateActionPayloadV2 implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\DelegateActionV2
         */
        public \Near\JsonRpc\Generated\Models\DelegateActionV2 $v2
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->v2, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DelegateActionV2',
  'nullable' => false,
), 'V2');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for VersionedDelegateActionPayloadV2.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('V2', $data)) throw new \InvalidArgumentException('Missing required field: V2');
        $unknown = array_diff_key($data, array (
  'V2' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in VersionedDelegateActionPayloadV2.');
        return new self(
            v2: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['V2'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DelegateActionV2',
  'nullable' => false,
), 'V2')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['V2'] = $this->v2;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'V2' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DelegateActionV2',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'V2',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'V2',
    'tag' => 'V2',
    'payload' => 'DelegateActionV2',
  ),
), 'VersionedDelegateActionPayloadV2'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'V2' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DelegateActionV2',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'V2',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'V2',
    'tag' => 'V2',
    'payload' => 'DelegateActionV2',
  ),
), 'VersionedDelegateActionPayloadV2');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
