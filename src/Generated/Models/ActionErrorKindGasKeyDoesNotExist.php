<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Gas key does not exist for the specified public key
 */
final readonly class ActionErrorKindGasKeyDoesNotExist implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionErrorKindGasKeyDoesNotExistPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionErrorKindGasKeyDoesNotExistPayload $gasKeyDoesNotExist
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->gasKeyDoesNotExist, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindGasKeyDoesNotExistPayload',
  'nullable' => false,
), 'GasKeyDoesNotExist');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionErrorKindGasKeyDoesNotExist.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('GasKeyDoesNotExist', $data)) throw new \InvalidArgumentException('Missing required field: GasKeyDoesNotExist');
        $unknown = array_diff_key($data, array (
  'GasKeyDoesNotExist' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionErrorKindGasKeyDoesNotExist.');
        return new self(
            gasKeyDoesNotExist: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['GasKeyDoesNotExist'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindGasKeyDoesNotExistPayload',
  'nullable' => false,
), 'GasKeyDoesNotExist')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['GasKeyDoesNotExist'] = $this->gasKeyDoesNotExist;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'GasKeyDoesNotExist' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindGasKeyDoesNotExistPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'GasKeyDoesNotExist',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'GasKeyDoesNotExist',
    'tag' => 'GasKeyDoesNotExist',
    'payload' => 'ActionErrorKindGasKeyDoesNotExistPayload',
  ),
), 'ActionErrorKindGasKeyDoesNotExist'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'GasKeyDoesNotExist' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindGasKeyDoesNotExistPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'GasKeyDoesNotExist',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'GasKeyDoesNotExist',
    'tag' => 'GasKeyDoesNotExist',
    'payload' => 'ActionErrorKindGasKeyDoesNotExistPayload',
  ),
), 'ActionErrorKindGasKeyDoesNotExist');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
