<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Resulting struct represents block with chunks
 */
final readonly class RpcIndexerBlockResponse implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\BlockView
         */
        public \Near\JsonRpc\Generated\Models\BlockView $block,
        /**
         * @var list<\Near\JsonRpc\Generated\Models\IndexerShard>
         */
        public array $shards,
        /**
         * The node's configured chunk and execution coverage, in block layout order.
         * Carried chunks remain None inside the message even for tracked shards.
         *
         * @var list<\Near\JsonRpc\Generated\Models\ShardId>
         */
        public array $trackedShards,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->block, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockView',
  'nullable' => false,
), 'block');
        \Near\JsonRpc\Models\TypeGuard::assert($this->shards, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\IndexerShard',
    'nullable' => false,
  ),
  'type' => 'array',
), 'shards');
        \Near\JsonRpc\Models\TypeGuard::assert($this->trackedShards, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
    'nullable' => false,
  ),
  'type' => 'array',
), 'tracked_shards');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcIndexerBlockResponse.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('block', $data)) throw new \InvalidArgumentException('Missing required field: block');
        if (!array_key_exists('shards', $data)) throw new \InvalidArgumentException('Missing required field: shards');
        if (!array_key_exists('tracked_shards', $data)) throw new \InvalidArgumentException('Missing required field: tracked_shards');
        $extra = array_diff_key($data, array (
  'block' => true,
  'shards' => true,
  'tracked_shards' => true,
));
        return new self(
            block: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['block'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockView',
  'nullable' => false,
), 'block'),
            shards: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['shards'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\IndexerShard',
    'nullable' => false,
  ),
  'type' => 'array',
), 'shards'),
            trackedShards: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['tracked_shards'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
    'nullable' => false,
  ),
  'type' => 'array',
), 'tracked_shards'),
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
        $data['block'] = $this->block;
        $data['shards'] = $this->shards;
        $data['tracked_shards'] = $this->trackedShards;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'block' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockView',
      'nullable' => false,
    ),
    'shards' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\IndexerShard',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'tracked_shards' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
  ),
  'required' => 
  array (
    0 => 'block',
    1 => 'shards',
    2 => 'tracked_shards',
  ),
  'type' => 'object',
), 'RpcIndexerBlockResponse'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'block' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockView',
      'nullable' => false,
    ),
    'shards' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\IndexerShard',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'tracked_shards' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
  ),
  'required' => 
  array (
    0 => 'block',
    1 => 'shards',
    2 => 'tracked_shards',
  ),
  'type' => 'object',
), 'RpcIndexerBlockResponse');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
