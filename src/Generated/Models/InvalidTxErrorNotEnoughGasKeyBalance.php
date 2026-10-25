<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Gas key does not have enough balance to cover gas costs.
 */
final readonly class InvalidTxErrorNotEnoughGasKeyBalance implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\InvalidTxErrorNotEnoughGasKeyBalancePayload
         */
        public \Near\JsonRpc\Generated\Models\InvalidTxErrorNotEnoughGasKeyBalancePayload $notEnoughGasKeyBalance
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->notEnoughGasKeyBalance, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorNotEnoughGasKeyBalancePayload',
  'nullable' => false,
), 'NotEnoughGasKeyBalance');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for InvalidTxErrorNotEnoughGasKeyBalance.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('NotEnoughGasKeyBalance', $data)) throw new \InvalidArgumentException('Missing required field: NotEnoughGasKeyBalance');
        $unknown = array_diff_key($data, array (
  'NotEnoughGasKeyBalance' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in InvalidTxErrorNotEnoughGasKeyBalance.');
        return new self(
            notEnoughGasKeyBalance: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['NotEnoughGasKeyBalance'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorNotEnoughGasKeyBalancePayload',
  'nullable' => false,
), 'NotEnoughGasKeyBalance')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['NotEnoughGasKeyBalance'] = $this->notEnoughGasKeyBalance;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'NotEnoughGasKeyBalance' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorNotEnoughGasKeyBalancePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'NotEnoughGasKeyBalance',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'NotEnoughGasKeyBalance',
    'tag' => 'NotEnoughGasKeyBalance',
    'payload' => 'InvalidTxErrorNotEnoughGasKeyBalancePayload',
  ),
), 'InvalidTxErrorNotEnoughGasKeyBalance'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'NotEnoughGasKeyBalance' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorNotEnoughGasKeyBalancePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'NotEnoughGasKeyBalance',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'NotEnoughGasKeyBalance',
    'tag' => 'NotEnoughGasKeyBalance',
    'payload' => 'InvalidTxErrorNotEnoughGasKeyBalancePayload',
  ),
), 'InvalidTxErrorNotEnoughGasKeyBalance');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
