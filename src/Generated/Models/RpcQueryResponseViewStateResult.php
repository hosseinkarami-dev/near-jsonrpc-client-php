<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Resulting state values for a view state query request
 */
final readonly class RpcQueryResponseViewStateResult implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var list<\Near\JsonRpc\Generated\Models\StateItem>
         */
        public array $values,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $blockHash,
        /**
         * @var int|string
         */
        public int|string $blockHeight,
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
        \Near\JsonRpc\Models\TypeGuard::assert($this->blockHash, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'block_hash');
        \Near\JsonRpc\Models\TypeGuard::assert($this->blockHeight, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'block_height');
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
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcQueryResponseViewStateResult.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('values', $data)) throw new \InvalidArgumentException('Missing required field: values');
        if (!array_key_exists('block_height', $data)) throw new \InvalidArgumentException('Missing required field: block_height');
        if (!array_key_exists('block_hash', $data)) throw new \InvalidArgumentException('Missing required field: block_hash');
        $extra = array_diff_key($data, array (
  'last_key' => true,
  'proof' => true,
  'values' => true,
  'block_hash' => true,
  'block_height' => true,
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
            blockHash: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['block_hash'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'block_hash'),
            blockHeight: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['block_height'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'block_height'),
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
        $data['block_hash'] = $this->blockHash;
        $data['block_height'] = $this->blockHeight;
        if ($this->lastKey->present) $data['last_key'] = $this->lastKey->value;
        if ($this->proof !== null) $data['proof'] = $this->proof;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
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
    'block_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'block_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'values',
    1 => 'block_height',
    2 => 'block_hash',
  ),
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'ViewStateResult',
  ),
), 'RpcQueryResponseViewStateResult'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
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
    'block_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'block_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'values',
    1 => 'block_height',
    2 => 'block_hash',
  ),
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'ViewStateResult',
  ),
), 'RpcQueryResponseViewStateResult');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
