<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Gas key with limited permission to make transactions with FunctionCallActions
 * Gas keys are a kind of access keys with a prepaid balance to pay for gas.
 */
final readonly class AccessKeyPermissionGasKeyFunctionCall implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var array{\Near\JsonRpc\Generated\Models\GasKeyInfo, \Near\JsonRpc\Generated\Models\FunctionCallPermission}
         */
        public array $gasKeyFunctionCall
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->gasKeyFunctionCall, array (
  'items' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GasKeyInfo',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FunctionCallPermission',
      'nullable' => false,
    ),
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'GasKeyFunctionCall');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for AccessKeyPermissionGasKeyFunctionCall.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('GasKeyFunctionCall', $data)) throw new \InvalidArgumentException('Missing required field: GasKeyFunctionCall');
        $unknown = array_diff_key($data, array (
  'GasKeyFunctionCall' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in AccessKeyPermissionGasKeyFunctionCall.');
        return new self(
            gasKeyFunctionCall: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['GasKeyFunctionCall'], array (
  'items' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GasKeyInfo',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FunctionCallPermission',
      'nullable' => false,
    ),
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
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
  'additionalProperties' => false,
  'properties' => 
  array (
    'GasKeyFunctionCall' => 
    array (
      'items' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GasKeyInfo',
          'nullable' => false,
        ),
        1 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FunctionCallPermission',
          'nullable' => false,
        ),
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
  ),
  'required' => 
  array (
    0 => 'GasKeyFunctionCall',
  ),
  'type' => 'object',
  'x-php-union' => 
  array (
    'label' => 'GasKeyFunctionCall',
  ),
), 'AccessKeyPermissionGasKeyFunctionCall'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'additionalProperties' => false,
  'properties' => 
  array (
    'GasKeyFunctionCall' => 
    array (
      'items' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GasKeyInfo',
          'nullable' => false,
        ),
        1 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FunctionCallPermission',
          'nullable' => false,
        ),
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
  ),
  'required' => 
  array (
    0 => 'GasKeyFunctionCall',
  ),
  'type' => 'object',
  'x-php-union' => 
  array (
    'label' => 'GasKeyFunctionCall',
  ),
), 'AccessKeyPermissionGasKeyFunctionCall');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
