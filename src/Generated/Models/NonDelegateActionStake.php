<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class NonDelegateActionStake implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\StakeAction
         */
        public \Near\JsonRpc\Generated\Models\StakeAction $stake
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->stake, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StakeAction',
  'nullable' => false,
), 'Stake');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for NonDelegateActionStake.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('Stake', $data)) throw new \InvalidArgumentException('Missing required field: Stake');
        $unknown = array_diff_key($data, array (
  'Stake' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in NonDelegateActionStake.');
        return new self(
            stake: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['Stake'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StakeAction',
  'nullable' => false,
), 'Stake')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['Stake'] = $this->stake;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'Stake' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StakeAction',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'Stake',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'Stake',
    'tag' => 'Stake',
    'payload' => 'StakeAction',
  ),
), 'NonDelegateActionStake'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'Stake' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StakeAction',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'Stake',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'Stake',
    'tag' => 'Stake',
    'payload' => 'StakeAction',
  ),
), 'NonDelegateActionStake');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
