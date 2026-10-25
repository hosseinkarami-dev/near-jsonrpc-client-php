<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class ActionErrorKindInsufficientStake implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionErrorKindInsufficientStakePayload
         */
        public \Near\JsonRpc\Generated\Models\ActionErrorKindInsufficientStakePayload $insufficientStake
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->insufficientStake, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindInsufficientStakePayload',
  'nullable' => false,
), 'InsufficientStake');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionErrorKindInsufficientStake.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('InsufficientStake', $data)) throw new \InvalidArgumentException('Missing required field: InsufficientStake');
        $unknown = array_diff_key($data, array (
  'InsufficientStake' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionErrorKindInsufficientStake.');
        return new self(
            insufficientStake: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['InsufficientStake'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindInsufficientStakePayload',
  'nullable' => false,
), 'InsufficientStake')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['InsufficientStake'] = $this->insufficientStake;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'InsufficientStake' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindInsufficientStakePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'InsufficientStake',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'InsufficientStake',
    'tag' => 'InsufficientStake',
    'payload' => 'ActionErrorKindInsufficientStakePayload',
  ),
), 'ActionErrorKindInsufficientStake'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'InsufficientStake' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindInsufficientStakePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'InsufficientStake',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'InsufficientStake',
    'tag' => 'InsufficientStake',
    'payload' => 'ActionErrorKindInsufficientStakePayload',
  ),
), 'ActionErrorKindInsufficientStake');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
