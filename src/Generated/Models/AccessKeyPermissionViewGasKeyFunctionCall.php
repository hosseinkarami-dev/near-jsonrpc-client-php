<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class AccessKeyPermissionViewGasKeyFunctionCall implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\AccessKeyPermissionViewGasKeyFunctionCallPayload
         */
        public \Near\JsonRpc\Generated\Models\AccessKeyPermissionViewGasKeyFunctionCallPayload $gasKeyFunctionCall
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->gasKeyFunctionCall, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccessKeyPermissionViewGasKeyFunctionCallPayload',
  'nullable' => false,
), 'GasKeyFunctionCall');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for AccessKeyPermissionViewGasKeyFunctionCall.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('GasKeyFunctionCall', $data)) throw new \InvalidArgumentException('Missing required field: GasKeyFunctionCall');
        $unknown = array_diff_key($data, array (
  'GasKeyFunctionCall' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in AccessKeyPermissionViewGasKeyFunctionCall.');
        return new self(
            gasKeyFunctionCall: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['GasKeyFunctionCall'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccessKeyPermissionViewGasKeyFunctionCallPayload',
  'nullable' => false,
), 'GasKeyFunctionCall')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['GasKeyFunctionCall'] = $this->gasKeyFunctionCall;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'GasKeyFunctionCall' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccessKeyPermissionViewGasKeyFunctionCallPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'GasKeyFunctionCall',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'GasKeyFunctionCall',
    'tag' => 'GasKeyFunctionCall',
    'payload' => 'AccessKeyPermissionViewGasKeyFunctionCallPayload',
  ),
), 'AccessKeyPermissionViewGasKeyFunctionCall'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'GasKeyFunctionCall' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccessKeyPermissionViewGasKeyFunctionCallPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'GasKeyFunctionCall',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'GasKeyFunctionCall',
    'tag' => 'GasKeyFunctionCall',
    'payload' => 'AccessKeyPermissionViewGasKeyFunctionCallPayload',
  ),
), 'AccessKeyPermissionViewGasKeyFunctionCall');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
