<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class ActionViewWithdrawFromGasKey implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionViewWithdrawFromGasKeyPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionViewWithdrawFromGasKeyPayload $withdrawFromGasKey
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->withdrawFromGasKey, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewWithdrawFromGasKeyPayload',
  'nullable' => false,
), 'WithdrawFromGasKey');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionViewWithdrawFromGasKey.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('WithdrawFromGasKey', $data)) throw new \InvalidArgumentException('Missing required field: WithdrawFromGasKey');
        $unknown = array_diff_key($data, array (
  'WithdrawFromGasKey' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionViewWithdrawFromGasKey.');
        return new self(
            withdrawFromGasKey: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['WithdrawFromGasKey'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewWithdrawFromGasKeyPayload',
  'nullable' => false,
), 'WithdrawFromGasKey')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['WithdrawFromGasKey'] = $this->withdrawFromGasKey;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'WithdrawFromGasKey' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewWithdrawFromGasKeyPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'WithdrawFromGasKey',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'WithdrawFromGasKey',
    'tag' => 'WithdrawFromGasKey',
    'payload' => 'ActionViewWithdrawFromGasKeyPayload',
  ),
), 'ActionViewWithdrawFromGasKey'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'WithdrawFromGasKey' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewWithdrawFromGasKeyPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'WithdrawFromGasKey',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'WithdrawFromGasKey',
    'tag' => 'WithdrawFromGasKey',
    'payload' => 'ActionViewWithdrawFromGasKeyPayload',
  ),
), 'ActionViewWithdrawFromGasKey');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
