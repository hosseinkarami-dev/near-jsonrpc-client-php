<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Validator stake is now below threshold
 */
final readonly class ValidatorKickoutReasonNotEnoughStake implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ValidatorKickoutReasonNotEnoughStakePayload
         */
        public \Near\JsonRpc\Generated\Models\ValidatorKickoutReasonNotEnoughStakePayload $notEnoughStake
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->notEnoughStake, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutReasonNotEnoughStakePayload',
  'nullable' => false,
), 'NotEnoughStake');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ValidatorKickoutReasonNotEnoughStake.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('NotEnoughStake', $data)) throw new \InvalidArgumentException('Missing required field: NotEnoughStake');
        $unknown = array_diff_key($data, array (
  'NotEnoughStake' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ValidatorKickoutReasonNotEnoughStake.');
        return new self(
            notEnoughStake: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['NotEnoughStake'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutReasonNotEnoughStakePayload',
  'nullable' => false,
), 'NotEnoughStake')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['NotEnoughStake'] = $this->notEnoughStake;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'NotEnoughStake' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutReasonNotEnoughStakePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'NotEnoughStake',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'NotEnoughStake',
    'tag' => 'NotEnoughStake',
    'payload' => 'ValidatorKickoutReasonNotEnoughStakePayload',
  ),
), 'ValidatorKickoutReasonNotEnoughStake'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'NotEnoughStake' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutReasonNotEnoughStakePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'NotEnoughStake',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'NotEnoughStake',
    'tag' => 'NotEnoughStake',
    'payload' => 'ValidatorKickoutReasonNotEnoughStakePayload',
  ),
), 'ValidatorKickoutReasonNotEnoughStake');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
