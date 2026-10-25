<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class RpcStateChangesInBlockByTypeRequestSingleAccessKeyChangesByBlockId implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\BlockId
         */
        public \Near\JsonRpc\Generated\Models\BlockId $blockId,
        /**
         * @var 'single_access_key_changes'
         */
        public string $changesType,
        /**
         * @var list<\Near\JsonRpc\Generated\Models\AccountWithPublicKey>
         */
        public array $keys,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->blockId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockId',
  'nullable' => false,
), 'block_id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->changesType, array (
  'enum' => 
  array (
    0 => 'single_access_key_changes',
  ),
  'type' => 'string',
), 'changes_type');
        \Near\JsonRpc\Models\TypeGuard::assert($this->keys, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountWithPublicKey',
    'nullable' => false,
  ),
  'type' => 'array',
), 'keys');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcStateChangesInBlockByTypeRequestSingleAccessKeyChangesByBlockId.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('block_id', $data)) throw new \InvalidArgumentException('Missing required field: block_id');
        if (!array_key_exists('changes_type', $data)) throw new \InvalidArgumentException('Missing required field: changes_type');
        if (!array_key_exists('keys', $data)) throw new \InvalidArgumentException('Missing required field: keys');
        $extra = array_diff_key($data, array (
  'block_id' => true,
  'changes_type' => true,
  'keys' => true,
));
        return new self(
            blockId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['block_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockId',
  'nullable' => false,
), 'block_id'),
            changesType: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['changes_type'], array (
  'enum' => 
  array (
    0 => 'single_access_key_changes',
  ),
  'type' => 'string',
), 'changes_type'),
            keys: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['keys'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountWithPublicKey',
    'nullable' => false,
  ),
  'type' => 'array',
), 'keys'),
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
        $data['changes_type'] = $this->changesType;
        $data['keys'] = $this->keys;
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
    'changes_type' => 
    array (
      'enum' => 
      array (
        0 => 'single_access_key_changes',
      ),
      'type' => 'string',
    ),
    'keys' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountWithPublicKey',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
  ),
  'required' => 
  array (
    0 => 'block_id',
    1 => 'changes_type',
    2 => 'keys',
  ),
  'title' => 'single_access_key_changes_by_block_id',
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'single_access_key_changes_by_block_id',
  ),
), 'RpcStateChangesInBlockByTypeRequestSingleAccessKeyChangesByBlockId'));
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
    'changes_type' => 
    array (
      'enum' => 
      array (
        0 => 'single_access_key_changes',
      ),
      'type' => 'string',
    ),
    'keys' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountWithPublicKey',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
  ),
  'required' => 
  array (
    0 => 'block_id',
    1 => 'changes_type',
    2 => 'keys',
  ),
  'title' => 'single_access_key_changes_by_block_id',
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'single_access_key_changes_by_block_id',
  ),
), 'RpcStateChangesInBlockByTypeRequestSingleAccessKeyChangesByBlockId');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
