<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Item of the state, key and value are serialized in base64 and proof for inclusion of given state item.
 */
final readonly class StateItem implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\StoreKey
         */
        public \Near\JsonRpc\Generated\Models\StoreKey $key,
        /**
         * @var \Near\JsonRpc\Generated\Models\StoreValue
         */
        public \Near\JsonRpc\Generated\Models\StoreValue $value,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->key, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StoreKey',
  'nullable' => false,
), 'key');
        \Near\JsonRpc\Models\TypeGuard::assert($this->value, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StoreValue',
  'nullable' => false,
), 'value');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for StateItem.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('key', $data)) throw new \InvalidArgumentException('Missing required field: key');
        if (!array_key_exists('value', $data)) throw new \InvalidArgumentException('Missing required field: value');
        $extra = array_diff_key($data, array (
  'key' => true,
  'value' => true,
));
        return new self(
            key: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['key'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StoreKey',
  'nullable' => false,
), 'key'),
            value: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['value'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StoreValue',
  'nullable' => false,
), 'value'),
            _extra: $extra
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = $this->extra;
        $data['key'] = $this->key;
        $data['value'] = $this->value;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'key' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StoreKey',
      'nullable' => false,
    ),
    'value' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StoreValue',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'key',
    1 => 'value',
  ),
  'type' => 'object',
), 'StateItem'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'key' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StoreKey',
      'nullable' => false,
    ),
    'value' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StoreValue',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'key',
    1 => 'value',
  ),
  'type' => 'object',
), 'StateItem');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
