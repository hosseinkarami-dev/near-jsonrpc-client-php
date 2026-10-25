<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Status of the [catchup](https://near.github.io/nearcore/architecture/how/sync.html#catchup) process
 */
final readonly class CatchupStatusView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var list<\Near\JsonRpc\Generated\Models\BlockStatusView>
         */
        public array $blocksToCatchup,
        /**
         * @var array<string, string>|\stdClass
         */
        public array|\stdClass $shardSyncStatus,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $syncBlockHash,
        /**
         * @var int|string
         */
        public int|string $syncBlockHeight,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->blocksToCatchup, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockStatusView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'blocks_to_catchup');
        \Near\JsonRpc\Models\TypeGuard::assert($this->shardSyncStatus, array (
  'additionalProperties' => false,
  'patternProperties' => 
  array (
    '^\\d+$' => 
    array (
      'type' => 'string',
    ),
  ),
  'type' => 'object',
), 'shard_sync_status');
        \Near\JsonRpc\Models\TypeGuard::assert($this->syncBlockHash, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'sync_block_hash');
        \Near\JsonRpc\Models\TypeGuard::assert($this->syncBlockHeight, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'sync_block_height');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for CatchupStatusView.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('sync_block_hash', $data)) throw new \InvalidArgumentException('Missing required field: sync_block_hash');
        if (!array_key_exists('sync_block_height', $data)) throw new \InvalidArgumentException('Missing required field: sync_block_height');
        if (!array_key_exists('shard_sync_status', $data)) throw new \InvalidArgumentException('Missing required field: shard_sync_status');
        if (!array_key_exists('blocks_to_catchup', $data)) throw new \InvalidArgumentException('Missing required field: blocks_to_catchup');
        $extra = array_diff_key($data, array (
  'blocks_to_catchup' => true,
  'shard_sync_status' => true,
  'sync_block_hash' => true,
  'sync_block_height' => true,
));
        return new self(
            blocksToCatchup: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['blocks_to_catchup'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockStatusView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'blocks_to_catchup'),
            shardSyncStatus: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['shard_sync_status'], array (
  'additionalProperties' => false,
  'patternProperties' => 
  array (
    '^\\d+$' => 
    array (
      'type' => 'string',
    ),
  ),
  'type' => 'object',
), 'shard_sync_status'),
            syncBlockHash: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['sync_block_hash'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'sync_block_hash'),
            syncBlockHeight: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['sync_block_height'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'sync_block_height'),
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
        $data['blocks_to_catchup'] = $this->blocksToCatchup;
        $data['shard_sync_status'] = $this->shardSyncStatus;
        $data['sync_block_hash'] = $this->syncBlockHash;
        $data['sync_block_height'] = $this->syncBlockHeight;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'blocks_to_catchup' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockStatusView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'shard_sync_status' => 
    array (
      'additionalProperties' => false,
      'patternProperties' => 
      array (
        '^\\d+$' => 
        array (
          'type' => 'string',
        ),
      ),
      'type' => 'object',
    ),
    'sync_block_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'sync_block_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'sync_block_hash',
    1 => 'sync_block_height',
    2 => 'shard_sync_status',
    3 => 'blocks_to_catchup',
  ),
  'type' => 'object',
), 'CatchupStatusView'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'blocks_to_catchup' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockStatusView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'shard_sync_status' => 
    array (
      'additionalProperties' => false,
      'patternProperties' => 
      array (
        '^\\d+$' => 
        array (
          'type' => 'string',
        ),
      ),
      'type' => 'object',
    ),
    'sync_block_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'sync_block_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'sync_block_hash',
    1 => 'sync_block_height',
    2 => 'shard_sync_status',
    3 => 'blocks_to_catchup',
  ),
  'type' => 'object',
), 'CatchupStatusView');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
