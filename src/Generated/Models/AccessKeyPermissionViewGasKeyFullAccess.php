<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class AccessKeyPermissionViewGasKeyFullAccess implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\AccessKeyPermissionViewGasKeyFullAccessPayload
         */
        public \Near\JsonRpc\Generated\Models\AccessKeyPermissionViewGasKeyFullAccessPayload $gasKeyFullAccess
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->gasKeyFullAccess, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccessKeyPermissionViewGasKeyFullAccessPayload',
  'nullable' => false,
), 'GasKeyFullAccess');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for AccessKeyPermissionViewGasKeyFullAccess.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('GasKeyFullAccess', $data)) throw new \InvalidArgumentException('Missing required field: GasKeyFullAccess');
        $unknown = array_diff_key($data, array (
  'GasKeyFullAccess' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in AccessKeyPermissionViewGasKeyFullAccess.');
        return new self(
            gasKeyFullAccess: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['GasKeyFullAccess'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccessKeyPermissionViewGasKeyFullAccessPayload',
  'nullable' => false,
), 'GasKeyFullAccess')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['GasKeyFullAccess'] = $this->gasKeyFullAccess;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'GasKeyFullAccess' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccessKeyPermissionViewGasKeyFullAccessPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'GasKeyFullAccess',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'GasKeyFullAccess',
    'tag' => 'GasKeyFullAccess',
    'payload' => 'AccessKeyPermissionViewGasKeyFullAccessPayload',
  ),
), 'AccessKeyPermissionViewGasKeyFullAccess'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'GasKeyFullAccess' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccessKeyPermissionViewGasKeyFullAccessPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'GasKeyFullAccess',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'GasKeyFullAccess',
    'tag' => 'GasKeyFullAccess',
    'payload' => 'AccessKeyPermissionViewGasKeyFullAccessPayload',
  ),
), 'AccessKeyPermissionViewGasKeyFullAccess');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
