<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class RpcViewStateRequestBlockId implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\BlockId
         */
        public \Near\JsonRpc\Generated\Models\BlockId $blockId,
        /**
         * @var \Near\JsonRpc\Generated\Models\AccountId
         */
        public \Near\JsonRpc\Generated\Models\AccountId $accountId,
        /**
         * @var \Near\JsonRpc\Generated\Models\StoreKey
         */
        public \Near\JsonRpc\Generated\Models\StoreKey $prefixBase64,
        /**
         * Resume listing after this key (exclusive); must start with `prefix`.
         *
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\StoreKey|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $afterKeyBase64 = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * @var bool|null
         */
        public bool|null $includeProof = null,
        /**
         * Maximum number of entries to return in this page.
         *
         * @var \Near\JsonRpc\Models\OptionalValue<int|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $limit = new \Near\JsonRpc\Models\OptionalValue()
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->blockId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockId',
  'nullable' => false,
), 'block_id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->accountId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'account_id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->prefixBase64, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StoreKey',
  'nullable' => false,
), 'prefix_base64');
        if ($this->afterKeyBase64->present) \Near\JsonRpc\Models\TypeGuard::assert($this->afterKeyBase64->value, array (
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
  'default' => NULL,
), 'after_key_base64');
        if ($this->includeProof !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->includeProof, array (
  'default' => false,
  'type' => 'boolean',
), 'include_proof');
        if ($this->limit->present) \Near\JsonRpc\Models\TypeGuard::assert($this->limit->value, array (
  'default' => NULL,
  'format' => 'uint32',
  'minimum' => 1,
  'nullable' => true,
  'type' => 'integer',
), 'limit');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcViewStateRequestBlockId.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('block_id', $data)) throw new \InvalidArgumentException('Missing required field: block_id');
        if (!array_key_exists('account_id', $data)) throw new \InvalidArgumentException('Missing required field: account_id');
        if (!array_key_exists('prefix_base64', $data)) throw new \InvalidArgumentException('Missing required field: prefix_base64');
        $unknown = array_diff_key($data, array (
  'block_id' => true,
  'account_id' => true,
  'after_key_base64' => true,
  'include_proof' => true,
  'limit' => true,
  'prefix_base64' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in RpcViewStateRequestBlockId.');
        return new self(
            blockId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['block_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockId',
  'nullable' => false,
), 'block_id'),
            accountId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['account_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'account_id'),
            prefixBase64: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['prefix_base64'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StoreKey',
  'nullable' => false,
), 'prefix_base64'),
            afterKeyBase64: array_key_exists('after_key_base64', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['after_key_base64'], array (
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
  'default' => NULL,
), 'after_key_base64')) : new \Near\JsonRpc\Models\OptionalValue(),
            includeProof: array_key_exists('include_proof', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['include_proof'], array (
  'default' => false,
  'type' => 'boolean',
), 'include_proof') : null,
            limit: array_key_exists('limit', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['limit'], array (
  'default' => NULL,
  'format' => 'uint32',
  'minimum' => 1,
  'nullable' => true,
  'type' => 'integer',
), 'limit')) : new \Near\JsonRpc\Models\OptionalValue()
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['block_id'] = $this->blockId;
        $data['account_id'] = $this->accountId;
        $data['prefix_base64'] = $this->prefixBase64;
        if ($this->afterKeyBase64->present) $data['after_key_base64'] = $this->afterKeyBase64->value;
        if ($this->includeProof !== null) $data['include_proof'] = $this->includeProof;
        if ($this->limit->present) $data['limit'] = $this->limit->value;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'block_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockId',
      'nullable' => false,
    ),
    'account_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
    'after_key_base64' => 
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
      'default' => NULL,
    ),
    'include_proof' => 
    array (
      'default' => false,
      'type' => 'boolean',
    ),
    'limit' => 
    array (
      'default' => NULL,
      'format' => 'uint32',
      'minimum' => 1,
      'nullable' => true,
      'type' => 'integer',
    ),
    'prefix_base64' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StoreKey',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'block_id',
    1 => 'account_id',
    2 => 'prefix_base64',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'block_id',
    'tag' => 'block_id',
    'payload' => 'BlockId',
  ),
), 'RpcViewStateRequestBlockId'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'block_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockId',
      'nullable' => false,
    ),
    'account_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
    'after_key_base64' => 
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
      'default' => NULL,
    ),
    'include_proof' => 
    array (
      'default' => false,
      'type' => 'boolean',
    ),
    'limit' => 
    array (
      'default' => NULL,
      'format' => 'uint32',
      'minimum' => 1,
      'nullable' => true,
      'type' => 'integer',
    ),
    'prefix_base64' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StoreKey',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'block_id',
    1 => 'account_id',
    2 => 'prefix_base64',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'block_id',
    'tag' => 'block_id',
    'payload' => 'BlockId',
  ),
), 'RpcViewStateRequestBlockId');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
