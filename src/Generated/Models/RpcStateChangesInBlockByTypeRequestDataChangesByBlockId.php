<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class RpcStateChangesInBlockByTypeRequestDataChangesByBlockId implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\BlockId
         */
        public \Near\JsonRpc\Generated\Models\BlockId $blockId,
        /**
         * @var list<\Near\JsonRpc\Generated\Models\AccountId>
         */
        public array $accountIds,
        /**
         * @var 'data_changes'
         */
        public string $changesType,
        /**
         * @var \Near\JsonRpc\Generated\Models\StoreKey
         */
        public \Near\JsonRpc\Generated\Models\StoreKey $keyPrefixBase64,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->blockId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockId',
  'nullable' => false,
), 'block_id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->accountIds, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
    'nullable' => false,
  ),
  'type' => 'array',
), 'account_ids');
        \Near\JsonRpc\Models\TypeGuard::assert($this->changesType, array (
  'enum' => 
  array (
    0 => 'data_changes',
  ),
  'type' => 'string',
), 'changes_type');
        \Near\JsonRpc\Models\TypeGuard::assert($this->keyPrefixBase64, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StoreKey',
  'nullable' => false,
), 'key_prefix_base64');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcStateChangesInBlockByTypeRequestDataChangesByBlockId.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('block_id', $data)) throw new \InvalidArgumentException('Missing required field: block_id');
        if (!array_key_exists('changes_type', $data)) throw new \InvalidArgumentException('Missing required field: changes_type');
        if (!array_key_exists('account_ids', $data)) throw new \InvalidArgumentException('Missing required field: account_ids');
        if (!array_key_exists('key_prefix_base64', $data)) throw new \InvalidArgumentException('Missing required field: key_prefix_base64');
        $extra = array_diff_key($data, array (
  'block_id' => true,
  'account_ids' => true,
  'changes_type' => true,
  'key_prefix_base64' => true,
));
        return new self(
            blockId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['block_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockId',
  'nullable' => false,
), 'block_id'),
            accountIds: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['account_ids'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
    'nullable' => false,
  ),
  'type' => 'array',
), 'account_ids'),
            changesType: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['changes_type'], array (
  'enum' => 
  array (
    0 => 'data_changes',
  ),
  'type' => 'string',
), 'changes_type'),
            keyPrefixBase64: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['key_prefix_base64'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StoreKey',
  'nullable' => false,
), 'key_prefix_base64'),
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
        $data['block_id'] = $this->blockId;
        $data['account_ids'] = $this->accountIds;
        $data['changes_type'] = $this->changesType;
        $data['key_prefix_base64'] = $this->keyPrefixBase64;
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
    'account_ids' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'changes_type' => 
    array (
      'enum' => 
      array (
        0 => 'data_changes',
      ),
      'type' => 'string',
    ),
    'key_prefix_base64' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StoreKey',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'block_id',
    1 => 'changes_type',
    2 => 'account_ids',
    3 => 'key_prefix_base64',
  ),
  'title' => 'data_changes_by_block_id',
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'data_changes_by_block_id',
  ),
), 'RpcStateChangesInBlockByTypeRequestDataChangesByBlockId'));
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
    'account_ids' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'changes_type' => 
    array (
      'enum' => 
      array (
        0 => 'data_changes',
      ),
      'type' => 'string',
    ),
    'key_prefix_base64' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StoreKey',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'block_id',
    1 => 'changes_type',
    2 => 'account_ids',
    3 => 'key_prefix_base64',
  ),
  'title' => 'data_changes_by_block_id',
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'data_changes_by_block_id',
  ),
), 'RpcStateChangesInBlockByTypeRequestDataChangesByBlockId');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
