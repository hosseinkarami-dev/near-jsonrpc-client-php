<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * An attempt to stake with a public key that is not convertible to ristretto.
 */
final readonly class ActionsValidationErrorUnsuitableStakingKey implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionsValidationErrorUnsuitableStakingKeyPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionsValidationErrorUnsuitableStakingKeyPayload $unsuitableStakingKey
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->unsuitableStakingKey, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorUnsuitableStakingKeyPayload',
  'nullable' => false,
), 'UnsuitableStakingKey');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionsValidationErrorUnsuitableStakingKey.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('UnsuitableStakingKey', $data)) throw new \InvalidArgumentException('Missing required field: UnsuitableStakingKey');
        $unknown = array_diff_key($data, array (
  'UnsuitableStakingKey' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionsValidationErrorUnsuitableStakingKey.');
        return new self(
            unsuitableStakingKey: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['UnsuitableStakingKey'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorUnsuitableStakingKeyPayload',
  'nullable' => false,
), 'UnsuitableStakingKey')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['UnsuitableStakingKey'] = $this->unsuitableStakingKey;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'UnsuitableStakingKey' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorUnsuitableStakingKeyPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'UnsuitableStakingKey',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'UnsuitableStakingKey',
    'tag' => 'UnsuitableStakingKey',
    'payload' => 'ActionsValidationErrorUnsuitableStakingKeyPayload',
  ),
), 'ActionsValidationErrorUnsuitableStakingKey'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'UnsuitableStakingKey' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorUnsuitableStakingKeyPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'UnsuitableStakingKey',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'UnsuitableStakingKey',
    'tag' => 'UnsuitableStakingKey',
    'payload' => 'ActionsValidationErrorUnsuitableStakingKeyPayload',
  ),
), 'ActionsValidationErrorUnsuitableStakingKey');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
