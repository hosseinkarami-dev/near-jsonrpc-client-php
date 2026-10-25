<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class ActionsValidationErrorAddGasKeyWithNonZeroBalance implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionsValidationErrorAddGasKeyWithNonZeroBalancePayload
         */
        public \Near\JsonRpc\Generated\Models\ActionsValidationErrorAddGasKeyWithNonZeroBalancePayload $addGasKeyWithNonZeroBalance
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->addGasKeyWithNonZeroBalance, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorAddGasKeyWithNonZeroBalancePayload',
  'nullable' => false,
), 'AddGasKeyWithNonZeroBalance');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionsValidationErrorAddGasKeyWithNonZeroBalance.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('AddGasKeyWithNonZeroBalance', $data)) throw new \InvalidArgumentException('Missing required field: AddGasKeyWithNonZeroBalance');
        $unknown = array_diff_key($data, array (
  'AddGasKeyWithNonZeroBalance' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionsValidationErrorAddGasKeyWithNonZeroBalance.');
        return new self(
            addGasKeyWithNonZeroBalance: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['AddGasKeyWithNonZeroBalance'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorAddGasKeyWithNonZeroBalancePayload',
  'nullable' => false,
), 'AddGasKeyWithNonZeroBalance')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['AddGasKeyWithNonZeroBalance'] = $this->addGasKeyWithNonZeroBalance;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'AddGasKeyWithNonZeroBalance' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorAddGasKeyWithNonZeroBalancePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'AddGasKeyWithNonZeroBalance',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'AddGasKeyWithNonZeroBalance',
    'tag' => 'AddGasKeyWithNonZeroBalance',
    'payload' => 'ActionsValidationErrorAddGasKeyWithNonZeroBalancePayload',
  ),
), 'ActionsValidationErrorAddGasKeyWithNonZeroBalance'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'AddGasKeyWithNonZeroBalance' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorAddGasKeyWithNonZeroBalancePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'AddGasKeyWithNonZeroBalance',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'AddGasKeyWithNonZeroBalance',
    'tag' => 'AddGasKeyWithNonZeroBalance',
    'payload' => 'ActionsValidationErrorAddGasKeyWithNonZeroBalancePayload',
  ),
), 'ActionsValidationErrorAddGasKeyWithNonZeroBalance');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
