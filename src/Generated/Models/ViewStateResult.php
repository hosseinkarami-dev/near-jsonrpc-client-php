<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Resulting state values for a view state query request
 */
final readonly class ViewStateResult implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var list<\Near\JsonRpc\Generated\Models\StateItem>
         */
        public array $values,
        /**
         * Cursor to resume from: present when more entries remain, absent when the listing is complete.
         *
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\StoreKey|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $lastKey = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * @var list<string>|null
         */
        public array|null $proof = null,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->values, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateItem',
    'nullable' => false,
  ),
  'type' => 'array',
), 'values');
        if ($this->lastKey->present) \Near\JsonRpc\Models\TypeGuard::assert($this->lastKey->value, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StoreKey',
      'nullable' => false,
    ),
    1 => 
    array (
      'enum' => 
      array (
        0 => NULL,
      ),
      'nullable' => true,
      'type' => 'null',
    ),
  ),
), 'last_key');
        if ($this->proof !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->proof, array (
  'items' => 
  array (
    'type' => 'string',
  ),
  'type' => 'array',
), 'proof');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ViewStateResult.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('values', $data)) throw new \InvalidArgumentException('Missing required field: values');
        $extra = array_diff_key($data, array (
  'last_key' => true,
  'proof' => true,
  'values' => true,
));
        return new self(
            values: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['values'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateItem',
    'nullable' => false,
  ),
  'type' => 'array',
), 'values'),
            lastKey: array_key_exists('last_key', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['last_key'], array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StoreKey',
      'nullable' => false,
    ),
    1 => 
    array (
      'enum' => 
      array (
        0 => NULL,
      ),
      'nullable' => true,
      'type' => 'null',
    ),
  ),
), 'last_key')) : new \Near\JsonRpc\Models\OptionalValue(),
            proof: array_key_exists('proof', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['proof'], array (
  'items' => 
  array (
    'type' => 'string',
  ),
  'type' => 'array',
), 'proof') : null,
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
        $data['values'] = $this->values;
        if ($this->lastKey->present) $data['last_key'] = $this->lastKey->value;
        if ($this->proof !== null) $data['proof'] = $this->proof;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'last_key' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StoreKey',
          'nullable' => false,
        ),
        1 => 
        array (
          'enum' => 
          array (
            0 => NULL,
          ),
          'nullable' => true,
          'type' => 'null',
        ),
      ),
    ),
    'proof' => 
    array (
      'items' => 
      array (
        'type' => 'string',
      ),
      'type' => 'array',
    ),
    'values' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateItem',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
  ),
  'required' => 
  array (
    0 => 'values',
  ),
  'type' => 'object',
), 'ViewStateResult'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'last_key' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StoreKey',
          'nullable' => false,
        ),
        1 => 
        array (
          'enum' => 
          array (
            0 => NULL,
          ),
          'nullable' => true,
          'type' => 'null',
        ),
      ),
    ),
    'proof' => 
    array (
      'items' => 
      array (
        'type' => 'string',
      ),
      'type' => 'array',
    ),
    'values' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateItem',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
  ),
  'required' => 
  array (
    0 => 'values',
  ),
  'type' => 'object',
), 'ViewStateResult');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
