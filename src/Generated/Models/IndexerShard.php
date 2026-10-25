<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class IndexerShard implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var list<\Near\JsonRpc\Generated\Models\IndexerExecutionOutcomeWithReceipt>
         */
        public array $receiptExecutionOutcomes,
        /**
         * @var \Near\JsonRpc\Generated\Models\ShardId
         */
        public \Near\JsonRpc\Generated\Models\ShardId $shardId,
        /**
         * @var list<\Near\JsonRpc\Generated\Models\StateChangeWithCauseView>
         */
        public array $stateChanges,
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\IndexerChunkView|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $chunk = new \Near\JsonRpc\Models\OptionalValue(),
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->receiptExecutionOutcomes, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\IndexerExecutionOutcomeWithReceipt',
    'nullable' => false,
  ),
  'type' => 'array',
), 'receipt_execution_outcomes');
        \Near\JsonRpc\Models\TypeGuard::assert($this->shardId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
  'nullable' => false,
), 'shard_id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->stateChanges, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeWithCauseView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'state_changes');
        if ($this->chunk->present) \Near\JsonRpc\Models\TypeGuard::assert($this->chunk->value, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\IndexerChunkView',
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
), 'chunk');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for IndexerShard.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('shard_id', $data)) throw new \InvalidArgumentException('Missing required field: shard_id');
        if (!array_key_exists('receipt_execution_outcomes', $data)) throw new \InvalidArgumentException('Missing required field: receipt_execution_outcomes');
        if (!array_key_exists('state_changes', $data)) throw new \InvalidArgumentException('Missing required field: state_changes');
        $extra = array_diff_key($data, array (
  'chunk' => true,
  'receipt_execution_outcomes' => true,
  'shard_id' => true,
  'state_changes' => true,
));
        return new self(
            receiptExecutionOutcomes: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['receipt_execution_outcomes'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\IndexerExecutionOutcomeWithReceipt',
    'nullable' => false,
  ),
  'type' => 'array',
), 'receipt_execution_outcomes'),
            shardId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['shard_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
  'nullable' => false,
), 'shard_id'),
            stateChanges: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['state_changes'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeWithCauseView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'state_changes'),
            chunk: array_key_exists('chunk', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['chunk'], array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\IndexerChunkView',
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
), 'chunk')) : new \Near\JsonRpc\Models\OptionalValue(),
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
        $data['receipt_execution_outcomes'] = $this->receiptExecutionOutcomes;
        $data['shard_id'] = $this->shardId;
        $data['state_changes'] = $this->stateChanges;
        if ($this->chunk->present) $data['chunk'] = $this->chunk->value;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'chunk' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\IndexerChunkView',
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
    'receipt_execution_outcomes' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\IndexerExecutionOutcomeWithReceipt',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'shard_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
      'nullable' => false,
    ),
    'state_changes' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeWithCauseView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
  ),
  'required' => 
  array (
    0 => 'shard_id',
    1 => 'receipt_execution_outcomes',
    2 => 'state_changes',
  ),
  'type' => 'object',
), 'IndexerShard'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'chunk' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\IndexerChunkView',
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
    'receipt_execution_outcomes' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\IndexerExecutionOutcomeWithReceipt',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'shard_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
      'nullable' => false,
    ),
    'state_changes' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeWithCauseView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
  ),
  'required' => 
  array (
    0 => 'shard_id',
    1 => 'receipt_execution_outcomes',
    2 => 'state_changes',
  ),
  'type' => 'object',
), 'IndexerShard');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
