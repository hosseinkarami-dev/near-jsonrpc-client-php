<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Gas key balance is too high to burn during deletion
 */
final readonly class ActionErrorKindGasKeyBalanceTooHigh implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionErrorKindGasKeyBalanceTooHighPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionErrorKindGasKeyBalanceTooHighPayload $gasKeyBalanceTooHigh
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->gasKeyBalanceTooHigh, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindGasKeyBalanceTooHighPayload',
  'nullable' => false,
), 'GasKeyBalanceTooHigh');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionErrorKindGasKeyBalanceTooHigh.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('GasKeyBalanceTooHigh', $data)) throw new \InvalidArgumentException('Missing required field: GasKeyBalanceTooHigh');
        $unknown = array_diff_key($data, array (
  'GasKeyBalanceTooHigh' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionErrorKindGasKeyBalanceTooHigh.');
        return new self(
            gasKeyBalanceTooHigh: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['GasKeyBalanceTooHigh'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindGasKeyBalanceTooHighPayload',
  'nullable' => false,
), 'GasKeyBalanceTooHigh')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['GasKeyBalanceTooHigh'] = $this->gasKeyBalanceTooHigh;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'GasKeyBalanceTooHigh' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindGasKeyBalanceTooHighPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'GasKeyBalanceTooHigh',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'GasKeyBalanceTooHigh',
    'tag' => 'GasKeyBalanceTooHigh',
    'payload' => 'ActionErrorKindGasKeyBalanceTooHighPayload',
  ),
), 'ActionErrorKindGasKeyBalanceTooHigh'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'GasKeyBalanceTooHigh' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindGasKeyBalanceTooHighPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'GasKeyBalanceTooHigh',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'GasKeyBalanceTooHigh',
    'tag' => 'GasKeyBalanceTooHigh',
    'payload' => 'ActionErrorKindGasKeyBalanceTooHighPayload',
  ),
), 'ActionErrorKindGasKeyBalanceTooHigh');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
