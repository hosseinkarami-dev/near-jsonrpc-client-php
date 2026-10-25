<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Tracks shards that are assigned to given validator account.
 */
final readonly class TrackedShardsConfigShadowValidator implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\AccountId
         */
        public \Near\JsonRpc\Generated\Models\AccountId $shadowValidator
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->shadowValidator, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'ShadowValidator');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for TrackedShardsConfigShadowValidator.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('ShadowValidator', $data)) throw new \InvalidArgumentException('Missing required field: ShadowValidator');
        $unknown = array_diff_key($data, array (
  'ShadowValidator' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in TrackedShardsConfigShadowValidator.');
        return new self(
            shadowValidator: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['ShadowValidator'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'ShadowValidator')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['ShadowValidator'] = $this->shadowValidator;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'ShadowValidator' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'ShadowValidator',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'ShadowValidator',
    'tag' => 'ShadowValidator',
    'payload' => 'AccountId',
  ),
), 'TrackedShardsConfigShadowValidator'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'ShadowValidator' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'ShadowValidator',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'ShadowValidator',
    'tag' => 'ShadowValidator',
    'payload' => 'AccountId',
  ),
), 'TrackedShardsConfigShadowValidator');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
