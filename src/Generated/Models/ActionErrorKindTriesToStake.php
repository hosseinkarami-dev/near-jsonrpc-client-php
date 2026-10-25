<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The account doesn't have enough balance to increase the stake.
 */
final readonly class ActionErrorKindTriesToStake implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionErrorKindTriesToStakePayload
         */
        public \Near\JsonRpc\Generated\Models\ActionErrorKindTriesToStakePayload $triesToStake
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->triesToStake, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindTriesToStakePayload',
  'nullable' => false,
), 'TriesToStake');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionErrorKindTriesToStake.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('TriesToStake', $data)) throw new \InvalidArgumentException('Missing required field: TriesToStake');
        $unknown = array_diff_key($data, array (
  'TriesToStake' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionErrorKindTriesToStake.');
        return new self(
            triesToStake: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['TriesToStake'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindTriesToStakePayload',
  'nullable' => false,
), 'TriesToStake')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['TriesToStake'] = $this->triesToStake;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'TriesToStake' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindTriesToStakePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'TriesToStake',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'TriesToStake',
    'tag' => 'TriesToStake',
    'payload' => 'ActionErrorKindTriesToStakePayload',
  ),
), 'ActionErrorKindTriesToStake'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'TriesToStake' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindTriesToStakePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'TriesToStake',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'TriesToStake',
    'tag' => 'TriesToStake',
    'payload' => 'ActionErrorKindTriesToStakePayload',
  ),
), 'ActionErrorKindTriesToStake');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
