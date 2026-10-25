<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Account is not yet staked, but tries to unstake
 */
final readonly class ActionErrorKindTriesToUnstake implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionErrorKindTriesToUnstakePayload
         */
        public \Near\JsonRpc\Generated\Models\ActionErrorKindTriesToUnstakePayload $triesToUnstake
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->triesToUnstake, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindTriesToUnstakePayload',
  'nullable' => false,
), 'TriesToUnstake');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionErrorKindTriesToUnstake.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('TriesToUnstake', $data)) throw new \InvalidArgumentException('Missing required field: TriesToUnstake');
        $unknown = array_diff_key($data, array (
  'TriesToUnstake' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionErrorKindTriesToUnstake.');
        return new self(
            triesToUnstake: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['TriesToUnstake'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindTriesToUnstakePayload',
  'nullable' => false,
), 'TriesToUnstake')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['TriesToUnstake'] = $this->triesToUnstake;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'TriesToUnstake' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindTriesToUnstakePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'TriesToUnstake',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'TriesToUnstake',
    'tag' => 'TriesToUnstake',
    'payload' => 'ActionErrorKindTriesToUnstakePayload',
  ),
), 'ActionErrorKindTriesToUnstake'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'TriesToUnstake' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindTriesToUnstakePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'TriesToUnstake',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'TriesToUnstake',
    'tag' => 'TriesToUnstake',
    'payload' => 'ActionErrorKindTriesToUnstakePayload',
  ),
), 'ActionErrorKindTriesToUnstake');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
