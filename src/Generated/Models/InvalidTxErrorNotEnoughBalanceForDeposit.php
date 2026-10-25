<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Gas key transaction failed because the account could not cover the deposit cost.
 * Gas is still charged from the gas key in this case.
 */
final readonly class InvalidTxErrorNotEnoughBalanceForDeposit implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\InvalidTxErrorNotEnoughBalanceForDepositPayload
         */
        public \Near\JsonRpc\Generated\Models\InvalidTxErrorNotEnoughBalanceForDepositPayload $notEnoughBalanceForDeposit
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->notEnoughBalanceForDeposit, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorNotEnoughBalanceForDepositPayload',
  'nullable' => false,
), 'NotEnoughBalanceForDeposit');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for InvalidTxErrorNotEnoughBalanceForDeposit.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('NotEnoughBalanceForDeposit', $data)) throw new \InvalidArgumentException('Missing required field: NotEnoughBalanceForDeposit');
        $unknown = array_diff_key($data, array (
  'NotEnoughBalanceForDeposit' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in InvalidTxErrorNotEnoughBalanceForDeposit.');
        return new self(
            notEnoughBalanceForDeposit: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['NotEnoughBalanceForDeposit'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorNotEnoughBalanceForDepositPayload',
  'nullable' => false,
), 'NotEnoughBalanceForDeposit')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['NotEnoughBalanceForDeposit'] = $this->notEnoughBalanceForDeposit;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'NotEnoughBalanceForDeposit' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorNotEnoughBalanceForDepositPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'NotEnoughBalanceForDeposit',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'NotEnoughBalanceForDeposit',
    'tag' => 'NotEnoughBalanceForDeposit',
    'payload' => 'InvalidTxErrorNotEnoughBalanceForDepositPayload',
  ),
), 'InvalidTxErrorNotEnoughBalanceForDeposit'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'NotEnoughBalanceForDeposit' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorNotEnoughBalanceForDepositPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'NotEnoughBalanceForDeposit',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'NotEnoughBalanceForDeposit',
    'tag' => 'NotEnoughBalanceForDeposit',
    'payload' => 'InvalidTxErrorNotEnoughBalanceForDepositPayload',
  ),
), 'InvalidTxErrorNotEnoughBalanceForDeposit');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
