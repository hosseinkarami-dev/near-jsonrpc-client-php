<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Describes information about the current epoch validator
 */
final readonly class CurrentEpochValidatorInfo implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\AccountId
         */
        public \Near\JsonRpc\Generated\Models\AccountId $accountId,
        /**
         * @var bool
         */
        public bool $isSlashed,
        /**
         * @var int|string
         */
        public int|string $numExpectedBlocks,
        /**
         * @var int|string
         */
        public int|string $numProducedBlocks,
        /**
         * @var \Near\JsonRpc\Generated\Models\PublicKey
         */
        public \Near\JsonRpc\Generated\Models\PublicKey $publicKey,
        /**
         * Shards this validator is assigned to as chunk producer in the current epoch.
         *
         * @var list<\Near\JsonRpc\Generated\Models\ShardId>
         */
        public array $shards,
        /**
         * @var \Near\JsonRpc\Generated\Models\NearToken
         */
        public \Near\JsonRpc\Generated\Models\NearToken $stake,
        /**
         * @var int|string|null
         */
        public int|string|null $numExpectedChunks = null,
        /**
         * Number of chunks this validator was expected to produce in each shard.
         * Each entry in the array corresponds to the shard in the `shards_produced` array.
         *
         * @var list<int|string>|null
         */
        public array|null $numExpectedChunksPerShard = null,
        /**
         * @var int|string|null
         */
        public int|string|null $numExpectedEndorsements = null,
        /**
         * Number of chunks this validator was expected to validate and endorse in each shard.
         * Each entry in the array corresponds to the shard in the `shards_endorsed` array.
         *
         * @var list<int|string>|null
         */
        public array|null $numExpectedEndorsementsPerShard = null,
        /**
         * @var int|string|null
         */
        public int|string|null $numProducedChunks = null,
        /**
         * @var list<int|string>|null
         */
        public array|null $numProducedChunksPerShard = null,
        /**
         * @var int|string|null
         */
        public int|string|null $numProducedEndorsements = null,
        /**
         * @var list<int|string>|null
         */
        public array|null $numProducedEndorsementsPerShard = null,
        /**
         * Shards this validator is assigned to as chunk validator in the current epoch.
         *
         * @var list<\Near\JsonRpc\Generated\Models\ShardId>|null
         */
        public array|null $shardsEndorsed = null,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->accountId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'account_id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->isSlashed, array (
  'type' => 'boolean',
), 'is_slashed');
        \Near\JsonRpc\Models\TypeGuard::assert($this->numExpectedBlocks, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'num_expected_blocks');
        \Near\JsonRpc\Models\TypeGuard::assert($this->numProducedBlocks, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'num_produced_blocks');
        \Near\JsonRpc\Models\TypeGuard::assert($this->publicKey, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
  'nullable' => false,
), 'public_key');
        \Near\JsonRpc\Models\TypeGuard::assert($this->shards, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
    'nullable' => false,
  ),
  'type' => 'array',
), 'shards');
        \Near\JsonRpc\Models\TypeGuard::assert($this->stake, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'stake');
        if ($this->numExpectedChunks !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->numExpectedChunks, array (
  'default' => 0,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'num_expected_chunks');
        if ($this->numExpectedChunksPerShard !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->numExpectedChunksPerShard, array (
  'default' => 
  array (
  ),
  'items' => 
  array (
    'format' => 'uint64',
    'minimum' => 0,
    'type' => 'integer',
  ),
  'type' => 'array',
), 'num_expected_chunks_per_shard');
        if ($this->numExpectedEndorsements !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->numExpectedEndorsements, array (
  'default' => 0,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'num_expected_endorsements');
        if ($this->numExpectedEndorsementsPerShard !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->numExpectedEndorsementsPerShard, array (
  'default' => 
  array (
  ),
  'items' => 
  array (
    'format' => 'uint64',
    'minimum' => 0,
    'type' => 'integer',
  ),
  'type' => 'array',
), 'num_expected_endorsements_per_shard');
        if ($this->numProducedChunks !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->numProducedChunks, array (
  'default' => 0,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'num_produced_chunks');
        if ($this->numProducedChunksPerShard !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->numProducedChunksPerShard, array (
  'default' => 
  array (
  ),
  'items' => 
  array (
    'format' => 'uint64',
    'minimum' => 0,
    'type' => 'integer',
  ),
  'type' => 'array',
), 'num_produced_chunks_per_shard');
        if ($this->numProducedEndorsements !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->numProducedEndorsements, array (
  'default' => 0,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'num_produced_endorsements');
        if ($this->numProducedEndorsementsPerShard !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->numProducedEndorsementsPerShard, array (
  'default' => 
  array (
  ),
  'items' => 
  array (
    'format' => 'uint64',
    'minimum' => 0,
    'type' => 'integer',
  ),
  'type' => 'array',
), 'num_produced_endorsements_per_shard');
        if ($this->shardsEndorsed !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->shardsEndorsed, array (
  'default' => 
  array (
  ),
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
    'nullable' => false,
  ),
  'type' => 'array',
), 'shards_endorsed');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for CurrentEpochValidatorInfo.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('account_id', $data)) throw new \InvalidArgumentException('Missing required field: account_id');
        if (!array_key_exists('public_key', $data)) throw new \InvalidArgumentException('Missing required field: public_key');
        if (!array_key_exists('is_slashed', $data)) throw new \InvalidArgumentException('Missing required field: is_slashed');
        if (!array_key_exists('stake', $data)) throw new \InvalidArgumentException('Missing required field: stake');
        if (!array_key_exists('shards', $data)) throw new \InvalidArgumentException('Missing required field: shards');
        if (!array_key_exists('num_produced_blocks', $data)) throw new \InvalidArgumentException('Missing required field: num_produced_blocks');
        if (!array_key_exists('num_expected_blocks', $data)) throw new \InvalidArgumentException('Missing required field: num_expected_blocks');
        $extra = array_diff_key($data, array (
  'account_id' => true,
  'is_slashed' => true,
  'num_expected_blocks' => true,
  'num_expected_chunks' => true,
  'num_expected_chunks_per_shard' => true,
  'num_expected_endorsements' => true,
  'num_expected_endorsements_per_shard' => true,
  'num_produced_blocks' => true,
  'num_produced_chunks' => true,
  'num_produced_chunks_per_shard' => true,
  'num_produced_endorsements' => true,
  'num_produced_endorsements_per_shard' => true,
  'public_key' => true,
  'shards' => true,
  'shards_endorsed' => true,
  'stake' => true,
));
        return new self(
            accountId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['account_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'account_id'),
            isSlashed: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['is_slashed'], array (
  'type' => 'boolean',
), 'is_slashed'),
            numExpectedBlocks: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['num_expected_blocks'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'num_expected_blocks'),
            numProducedBlocks: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['num_produced_blocks'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'num_produced_blocks'),
            publicKey: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['public_key'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
  'nullable' => false,
), 'public_key'),
            shards: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['shards'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
    'nullable' => false,
  ),
  'type' => 'array',
), 'shards'),
            stake: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['stake'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'stake'),
            numExpectedChunks: array_key_exists('num_expected_chunks', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['num_expected_chunks'], array (
  'default' => 0,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'num_expected_chunks') : null,
            numExpectedChunksPerShard: array_key_exists('num_expected_chunks_per_shard', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['num_expected_chunks_per_shard'], array (
  'default' => 
  array (
  ),
  'items' => 
  array (
    'format' => 'uint64',
    'minimum' => 0,
    'type' => 'integer',
  ),
  'type' => 'array',
), 'num_expected_chunks_per_shard') : null,
            numExpectedEndorsements: array_key_exists('num_expected_endorsements', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['num_expected_endorsements'], array (
  'default' => 0,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'num_expected_endorsements') : null,
            numExpectedEndorsementsPerShard: array_key_exists('num_expected_endorsements_per_shard', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['num_expected_endorsements_per_shard'], array (
  'default' => 
  array (
  ),
  'items' => 
  array (
    'format' => 'uint64',
    'minimum' => 0,
    'type' => 'integer',
  ),
  'type' => 'array',
), 'num_expected_endorsements_per_shard') : null,
            numProducedChunks: array_key_exists('num_produced_chunks', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['num_produced_chunks'], array (
  'default' => 0,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'num_produced_chunks') : null,
            numProducedChunksPerShard: array_key_exists('num_produced_chunks_per_shard', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['num_produced_chunks_per_shard'], array (
  'default' => 
  array (
  ),
  'items' => 
  array (
    'format' => 'uint64',
    'minimum' => 0,
    'type' => 'integer',
  ),
  'type' => 'array',
), 'num_produced_chunks_per_shard') : null,
            numProducedEndorsements: array_key_exists('num_produced_endorsements', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['num_produced_endorsements'], array (
  'default' => 0,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'num_produced_endorsements') : null,
            numProducedEndorsementsPerShard: array_key_exists('num_produced_endorsements_per_shard', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['num_produced_endorsements_per_shard'], array (
  'default' => 
  array (
  ),
  'items' => 
  array (
    'format' => 'uint64',
    'minimum' => 0,
    'type' => 'integer',
  ),
  'type' => 'array',
), 'num_produced_endorsements_per_shard') : null,
            shardsEndorsed: array_key_exists('shards_endorsed', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['shards_endorsed'], array (
  'default' => 
  array (
  ),
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
    'nullable' => false,
  ),
  'type' => 'array',
), 'shards_endorsed') : null,
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
        $data['account_id'] = $this->accountId;
        $data['is_slashed'] = $this->isSlashed;
        $data['num_expected_blocks'] = $this->numExpectedBlocks;
        $data['num_produced_blocks'] = $this->numProducedBlocks;
        $data['public_key'] = $this->publicKey;
        $data['shards'] = $this->shards;
        $data['stake'] = $this->stake;
        if ($this->numExpectedChunks !== null) $data['num_expected_chunks'] = $this->numExpectedChunks;
        if ($this->numExpectedChunksPerShard !== null) $data['num_expected_chunks_per_shard'] = $this->numExpectedChunksPerShard;
        if ($this->numExpectedEndorsements !== null) $data['num_expected_endorsements'] = $this->numExpectedEndorsements;
        if ($this->numExpectedEndorsementsPerShard !== null) $data['num_expected_endorsements_per_shard'] = $this->numExpectedEndorsementsPerShard;
        if ($this->numProducedChunks !== null) $data['num_produced_chunks'] = $this->numProducedChunks;
        if ($this->numProducedChunksPerShard !== null) $data['num_produced_chunks_per_shard'] = $this->numProducedChunksPerShard;
        if ($this->numProducedEndorsements !== null) $data['num_produced_endorsements'] = $this->numProducedEndorsements;
        if ($this->numProducedEndorsementsPerShard !== null) $data['num_produced_endorsements_per_shard'] = $this->numProducedEndorsementsPerShard;
        if ($this->shardsEndorsed !== null) $data['shards_endorsed'] = $this->shardsEndorsed;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'account_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
    'is_slashed' => 
    array (
      'type' => 'boolean',
    ),
    'num_expected_blocks' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'num_expected_chunks' => 
    array (
      'default' => 0,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'num_expected_chunks_per_shard' => 
    array (
      'default' => 
      array (
      ),
      'items' => 
      array (
        'format' => 'uint64',
        'minimum' => 0,
        'type' => 'integer',
      ),
      'type' => 'array',
    ),
    'num_expected_endorsements' => 
    array (
      'default' => 0,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'num_expected_endorsements_per_shard' => 
    array (
      'default' => 
      array (
      ),
      'items' => 
      array (
        'format' => 'uint64',
        'minimum' => 0,
        'type' => 'integer',
      ),
      'type' => 'array',
    ),
    'num_produced_blocks' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'num_produced_chunks' => 
    array (
      'default' => 0,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'num_produced_chunks_per_shard' => 
    array (
      'default' => 
      array (
      ),
      'items' => 
      array (
        'format' => 'uint64',
        'minimum' => 0,
        'type' => 'integer',
      ),
      'type' => 'array',
    ),
    'num_produced_endorsements' => 
    array (
      'default' => 0,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'num_produced_endorsements_per_shard' => 
    array (
      'default' => 
      array (
      ),
      'items' => 
      array (
        'format' => 'uint64',
        'minimum' => 0,
        'type' => 'integer',
      ),
      'type' => 'array',
    ),
    'public_key' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
      'nullable' => false,
    ),
    'shards' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'shards_endorsed' => 
    array (
      'default' => 
      array (
      ),
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'stake' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'account_id',
    1 => 'public_key',
    2 => 'is_slashed',
    3 => 'stake',
    4 => 'shards',
    5 => 'num_produced_blocks',
    6 => 'num_expected_blocks',
  ),
  'type' => 'object',
), 'CurrentEpochValidatorInfo'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'account_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
    'is_slashed' => 
    array (
      'type' => 'boolean',
    ),
    'num_expected_blocks' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'num_expected_chunks' => 
    array (
      'default' => 0,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'num_expected_chunks_per_shard' => 
    array (
      'default' => 
      array (
      ),
      'items' => 
      array (
        'format' => 'uint64',
        'minimum' => 0,
        'type' => 'integer',
      ),
      'type' => 'array',
    ),
    'num_expected_endorsements' => 
    array (
      'default' => 0,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'num_expected_endorsements_per_shard' => 
    array (
      'default' => 
      array (
      ),
      'items' => 
      array (
        'format' => 'uint64',
        'minimum' => 0,
        'type' => 'integer',
      ),
      'type' => 'array',
    ),
    'num_produced_blocks' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'num_produced_chunks' => 
    array (
      'default' => 0,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'num_produced_chunks_per_shard' => 
    array (
      'default' => 
      array (
      ),
      'items' => 
      array (
        'format' => 'uint64',
        'minimum' => 0,
        'type' => 'integer',
      ),
      'type' => 'array',
    ),
    'num_produced_endorsements' => 
    array (
      'default' => 0,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'num_produced_endorsements_per_shard' => 
    array (
      'default' => 
      array (
      ),
      'items' => 
      array (
        'format' => 'uint64',
        'minimum' => 0,
        'type' => 'integer',
      ),
      'type' => 'array',
    ),
    'public_key' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
      'nullable' => false,
    ),
    'shards' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'shards_endorsed' => 
    array (
      'default' => 
      array (
      ),
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'stake' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'account_id',
    1 => 'public_key',
    2 => 'is_slashed',
    3 => 'stake',
    4 => 'shards',
    5 => 'num_produced_blocks',
    6 => 'num_expected_blocks',
  ),
  'type' => 'object',
), 'CurrentEpochValidatorInfo');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
