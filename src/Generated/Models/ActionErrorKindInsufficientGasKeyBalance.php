<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Gas key does not have sufficient balance for the requested withdrawal
 */
final readonly class ActionErrorKindInsufficientGasKeyBalance implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionErrorKindInsufficientGasKeyBalancePayload
         */
        public \Near\JsonRpc\Generated\Models\ActionErrorKindInsufficientGasKeyBalancePayload $insufficientGasKeyBalance
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->insufficientGasKeyBalance, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindInsufficientGasKeyBalancePayload',
  'nullable' => false,
), 'InsufficientGasKeyBalance');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionErrorKindInsufficientGasKeyBalance.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('InsufficientGasKeyBalance', $data)) throw new \InvalidArgumentException('Missing required field: InsufficientGasKeyBalance');
        $unknown = array_diff_key($data, array (
  'InsufficientGasKeyBalance' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionErrorKindInsufficientGasKeyBalance.');
        return new self(
            insufficientGasKeyBalance: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['InsufficientGasKeyBalance'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindInsufficientGasKeyBalancePayload',
  'nullable' => false,
), 'InsufficientGasKeyBalance')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['InsufficientGasKeyBalance'] = $this->insufficientGasKeyBalance;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'InsufficientGasKeyBalance' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindInsufficientGasKeyBalancePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'InsufficientGasKeyBalance',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'InsufficientGasKeyBalance',
    'tag' => 'InsufficientGasKeyBalance',
    'payload' => 'ActionErrorKindInsufficientGasKeyBalancePayload',
  ),
), 'ActionErrorKindInsufficientGasKeyBalance'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'InsufficientGasKeyBalance' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindInsufficientGasKeyBalancePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'InsufficientGasKeyBalance',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'InsufficientGasKeyBalance',
    'tag' => 'InsufficientGasKeyBalance',
    'payload' => 'ActionErrorKindInsufficientGasKeyBalancePayload',
  ),
), 'ActionErrorKindInsufficientGasKeyBalance');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
