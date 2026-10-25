<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Account does not have enough balance to cover TX cost
 */
final readonly class InvalidTxErrorNotEnoughBalance implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\InvalidTxErrorNotEnoughBalancePayload
         */
        public \Near\JsonRpc\Generated\Models\InvalidTxErrorNotEnoughBalancePayload $notEnoughBalance
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->notEnoughBalance, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorNotEnoughBalancePayload',
  'nullable' => false,
), 'NotEnoughBalance');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for InvalidTxErrorNotEnoughBalance.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('NotEnoughBalance', $data)) throw new \InvalidArgumentException('Missing required field: NotEnoughBalance');
        $unknown = array_diff_key($data, array (
  'NotEnoughBalance' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in InvalidTxErrorNotEnoughBalance.');
        return new self(
            notEnoughBalance: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['NotEnoughBalance'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorNotEnoughBalancePayload',
  'nullable' => false,
), 'NotEnoughBalance')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['NotEnoughBalance'] = $this->notEnoughBalance;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'NotEnoughBalance' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorNotEnoughBalancePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'NotEnoughBalance',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'NotEnoughBalance',
    'tag' => 'NotEnoughBalance',
    'payload' => 'InvalidTxErrorNotEnoughBalancePayload',
  ),
), 'InvalidTxErrorNotEnoughBalance'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'NotEnoughBalance' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorNotEnoughBalancePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'NotEnoughBalance',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'NotEnoughBalance',
    'tag' => 'NotEnoughBalance',
    'payload' => 'InvalidTxErrorNotEnoughBalancePayload',
  ),
), 'InvalidTxErrorNotEnoughBalance');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
