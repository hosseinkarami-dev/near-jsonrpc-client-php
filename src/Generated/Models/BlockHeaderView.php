<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Contains main info about the block.
 */
final readonly class BlockHeaderView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var list<\Near\JsonRpc\Generated\Models\Signature|null>
         */
        public array $approvals,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $blockMerkleRoot,
        /**
         * @var list<\Near\JsonRpc\Generated\Models\SlashedValidator>
         */
        public array $challengesResult,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $challengesRoot,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $chunkHeadersRoot,
        /**
         * @var list<bool>
         */
        public array $chunkMask,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $chunkReceiptsRoot,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $chunkTxRoot,
        /**
         * @var int|string
         */
        public int|string $chunksIncluded,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $epochId,
        /**
         * @var \Near\JsonRpc\Generated\Models\NearToken
         */
        public \Near\JsonRpc\Generated\Models\NearToken $gasPrice,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $hash,
        /**
         * @var int|string
         */
        public int|string $height,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $lastDsFinalBlock,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $lastFinalBlock,
        /**
         * @var int
         */
        public int $latestProtocolVersion,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $nextBpHash,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $nextEpochId,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $outcomeRoot,
        /**
         * The hash of the previous Block
         *
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $prevHash,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $prevStateRoot,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $randomValue,
        /**
         * Signature of the block producer.
         *
         * @var \Near\JsonRpc\Generated\Models\Signature
         */
        public \Near\JsonRpc\Generated\Models\Signature $signature,
        /**
         * Legacy json number. Should not be used.
         *
         * @var int|string
         */
        public int|string $timestamp,
        /**
         * @var string
         */
        public string $timestampNanosec,
        /**
         * @var \Near\JsonRpc\Generated\Models\NearToken
         */
        public \Near\JsonRpc\Generated\Models\NearToken $totalSupply,
        /**
         * @var list<\Near\JsonRpc\Generated\Models\ValidatorStakeView>
         */
        public array $validatorProposals,
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\CryptoHash|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $blockBodyHash = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<int|string|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $blockOrdinal = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<list<list<int>>|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $chunkEndorsements = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\CryptoHash|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $chunkExecutionRoot = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\CryptoHash|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $epochSyncDataHash = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<int|string|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $prevHeight = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\EpochId|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $prevLastCertifiedBlockEpochId = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * TODO(2271): deprecated.
         *
         * @var \Near\JsonRpc\Generated\Models\NearToken|null
         */
        public \Near\JsonRpc\Generated\Models\NearToken|null $rentPaid = null,
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<array{\Near\JsonRpc\Generated\Models\ShardId, \Near\JsonRpc\Generated\Models\AccountId}|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $shardSplit = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<list<\Near\JsonRpc\Generated\Models\SpiceChunkEndorsementStats>|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $spiceChunkEndorsementStats = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * TODO(2271): deprecated.
         *
         * @var \Near\JsonRpc\Generated\Models\NearToken|null
         */
        public \Near\JsonRpc\Generated\Models\NearToken|null $validatorReward = null,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->approvals, array (
  'items' => 
  array (
    'anyOf' => 
    array (
      0 => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Signature',
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
  'type' => 'array',
), 'approvals');
        \Near\JsonRpc\Models\TypeGuard::assert($this->blockMerkleRoot, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'block_merkle_root');
        \Near\JsonRpc\Models\TypeGuard::assert($this->challengesResult, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SlashedValidator',
    'nullable' => false,
  ),
  'type' => 'array',
), 'challenges_result');
        \Near\JsonRpc\Models\TypeGuard::assert($this->challengesRoot, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'challenges_root');
        \Near\JsonRpc\Models\TypeGuard::assert($this->chunkHeadersRoot, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'chunk_headers_root');
        \Near\JsonRpc\Models\TypeGuard::assert($this->chunkMask, array (
  'items' => 
  array (
    'type' => 'boolean',
  ),
  'type' => 'array',
), 'chunk_mask');
        \Near\JsonRpc\Models\TypeGuard::assert($this->chunkReceiptsRoot, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'chunk_receipts_root');
        \Near\JsonRpc\Models\TypeGuard::assert($this->chunkTxRoot, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'chunk_tx_root');
        \Near\JsonRpc\Models\TypeGuard::assert($this->chunksIncluded, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'chunks_included');
        \Near\JsonRpc\Models\TypeGuard::assert($this->epochId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'epoch_id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->gasPrice, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'gas_price');
        \Near\JsonRpc\Models\TypeGuard::assert($this->hash, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'hash');
        \Near\JsonRpc\Models\TypeGuard::assert($this->height, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'height');
        \Near\JsonRpc\Models\TypeGuard::assert($this->lastDsFinalBlock, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'last_ds_final_block');
        \Near\JsonRpc\Models\TypeGuard::assert($this->lastFinalBlock, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'last_final_block');
        \Near\JsonRpc\Models\TypeGuard::assert($this->latestProtocolVersion, array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'latest_protocol_version');
        \Near\JsonRpc\Models\TypeGuard::assert($this->nextBpHash, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'next_bp_hash');
        \Near\JsonRpc\Models\TypeGuard::assert($this->nextEpochId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'next_epoch_id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->outcomeRoot, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'outcome_root');
        \Near\JsonRpc\Models\TypeGuard::assert($this->prevHash, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'prev_hash');
        \Near\JsonRpc\Models\TypeGuard::assert($this->prevStateRoot, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'prev_state_root');
        \Near\JsonRpc\Models\TypeGuard::assert($this->randomValue, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'random_value');
        \Near\JsonRpc\Models\TypeGuard::assert($this->signature, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Signature',
  'nullable' => false,
), 'signature');
        \Near\JsonRpc\Models\TypeGuard::assert($this->timestamp, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'timestamp');
        \Near\JsonRpc\Models\TypeGuard::assert($this->timestampNanosec, array (
  'type' => 'string',
), 'timestamp_nanosec');
        \Near\JsonRpc\Models\TypeGuard::assert($this->totalSupply, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'total_supply');
        \Near\JsonRpc\Models\TypeGuard::assert($this->validatorProposals, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorStakeView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'validator_proposals');
        if ($this->blockBodyHash->present) \Near\JsonRpc\Models\TypeGuard::assert($this->blockBodyHash->value, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
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
), 'block_body_hash');
        if ($this->blockOrdinal->present) \Near\JsonRpc\Models\TypeGuard::assert($this->blockOrdinal->value, array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'block_ordinal');
        if ($this->chunkEndorsements->present) \Near\JsonRpc\Models\TypeGuard::assert($this->chunkEndorsements->value, array (
  'items' => 
  array (
    'items' => 
    array (
      'format' => 'uint8',
      'maximum' => 255,
      'minimum' => 0,
      'type' => 'integer',
    ),
    'type' => 'array',
  ),
  'nullable' => true,
  'type' => 'array',
), 'chunk_endorsements');
        if ($this->chunkExecutionRoot->present) \Near\JsonRpc\Models\TypeGuard::assert($this->chunkExecutionRoot->value, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
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
), 'chunk_execution_root');
        if ($this->epochSyncDataHash->present) \Near\JsonRpc\Models\TypeGuard::assert($this->epochSyncDataHash->value, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
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
), 'epoch_sync_data_hash');
        if ($this->prevHeight->present) \Near\JsonRpc\Models\TypeGuard::assert($this->prevHeight->value, array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'prev_height');
        if ($this->prevLastCertifiedBlockEpochId->present) \Near\JsonRpc\Models\TypeGuard::assert($this->prevLastCertifiedBlockEpochId->value, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\EpochId',
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
), 'prev_last_certified_block_epoch_id');
        if ($this->rentPaid !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->rentPaid, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'rent_paid');
        if ($this->shardSplit->present) \Near\JsonRpc\Models\TypeGuard::assert($this->shardSplit->value, array (
  'items' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'nullable' => true,
  'type' => 'array',
), 'shard_split');
        if ($this->spiceChunkEndorsementStats->present) \Near\JsonRpc\Models\TypeGuard::assert($this->spiceChunkEndorsementStats->value, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SpiceChunkEndorsementStats',
    'nullable' => false,
  ),
  'nullable' => true,
  'type' => 'array',
), 'spice_chunk_endorsement_stats');
        if ($this->validatorReward !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->validatorReward, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'validator_reward');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for BlockHeaderView.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('height', $data)) throw new \InvalidArgumentException('Missing required field: height');
        if (!array_key_exists('epoch_id', $data)) throw new \InvalidArgumentException('Missing required field: epoch_id');
        if (!array_key_exists('next_epoch_id', $data)) throw new \InvalidArgumentException('Missing required field: next_epoch_id');
        if (!array_key_exists('hash', $data)) throw new \InvalidArgumentException('Missing required field: hash');
        if (!array_key_exists('prev_hash', $data)) throw new \InvalidArgumentException('Missing required field: prev_hash');
        if (!array_key_exists('prev_state_root', $data)) throw new \InvalidArgumentException('Missing required field: prev_state_root');
        if (!array_key_exists('chunk_receipts_root', $data)) throw new \InvalidArgumentException('Missing required field: chunk_receipts_root');
        if (!array_key_exists('chunk_headers_root', $data)) throw new \InvalidArgumentException('Missing required field: chunk_headers_root');
        if (!array_key_exists('chunk_tx_root', $data)) throw new \InvalidArgumentException('Missing required field: chunk_tx_root');
        if (!array_key_exists('outcome_root', $data)) throw new \InvalidArgumentException('Missing required field: outcome_root');
        if (!array_key_exists('chunks_included', $data)) throw new \InvalidArgumentException('Missing required field: chunks_included');
        if (!array_key_exists('challenges_root', $data)) throw new \InvalidArgumentException('Missing required field: challenges_root');
        if (!array_key_exists('timestamp', $data)) throw new \InvalidArgumentException('Missing required field: timestamp');
        if (!array_key_exists('timestamp_nanosec', $data)) throw new \InvalidArgumentException('Missing required field: timestamp_nanosec');
        if (!array_key_exists('random_value', $data)) throw new \InvalidArgumentException('Missing required field: random_value');
        if (!array_key_exists('validator_proposals', $data)) throw new \InvalidArgumentException('Missing required field: validator_proposals');
        if (!array_key_exists('chunk_mask', $data)) throw new \InvalidArgumentException('Missing required field: chunk_mask');
        if (!array_key_exists('gas_price', $data)) throw new \InvalidArgumentException('Missing required field: gas_price');
        if (!array_key_exists('total_supply', $data)) throw new \InvalidArgumentException('Missing required field: total_supply');
        if (!array_key_exists('challenges_result', $data)) throw new \InvalidArgumentException('Missing required field: challenges_result');
        if (!array_key_exists('last_final_block', $data)) throw new \InvalidArgumentException('Missing required field: last_final_block');
        if (!array_key_exists('last_ds_final_block', $data)) throw new \InvalidArgumentException('Missing required field: last_ds_final_block');
        if (!array_key_exists('next_bp_hash', $data)) throw new \InvalidArgumentException('Missing required field: next_bp_hash');
        if (!array_key_exists('block_merkle_root', $data)) throw new \InvalidArgumentException('Missing required field: block_merkle_root');
        if (!array_key_exists('approvals', $data)) throw new \InvalidArgumentException('Missing required field: approvals');
        if (!array_key_exists('signature', $data)) throw new \InvalidArgumentException('Missing required field: signature');
        if (!array_key_exists('latest_protocol_version', $data)) throw new \InvalidArgumentException('Missing required field: latest_protocol_version');
        $extra = array_diff_key($data, array (
  'approvals' => true,
  'block_body_hash' => true,
  'block_merkle_root' => true,
  'block_ordinal' => true,
  'challenges_result' => true,
  'challenges_root' => true,
  'chunk_endorsements' => true,
  'chunk_execution_root' => true,
  'chunk_headers_root' => true,
  'chunk_mask' => true,
  'chunk_receipts_root' => true,
  'chunk_tx_root' => true,
  'chunks_included' => true,
  'epoch_id' => true,
  'epoch_sync_data_hash' => true,
  'gas_price' => true,
  'hash' => true,
  'height' => true,
  'last_ds_final_block' => true,
  'last_final_block' => true,
  'latest_protocol_version' => true,
  'next_bp_hash' => true,
  'next_epoch_id' => true,
  'outcome_root' => true,
  'prev_hash' => true,
  'prev_height' => true,
  'prev_last_certified_block_epoch_id' => true,
  'prev_state_root' => true,
  'random_value' => true,
  'rent_paid' => true,
  'shard_split' => true,
  'signature' => true,
  'spice_chunk_endorsement_stats' => true,
  'timestamp' => true,
  'timestamp_nanosec' => true,
  'total_supply' => true,
  'validator_proposals' => true,
  'validator_reward' => true,
));
        return new self(
            approvals: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['approvals'], array (
  'items' => 
  array (
    'anyOf' => 
    array (
      0 => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Signature',
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
  'type' => 'array',
), 'approvals'),
            blockMerkleRoot: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['block_merkle_root'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'block_merkle_root'),
            challengesResult: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['challenges_result'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SlashedValidator',
    'nullable' => false,
  ),
  'type' => 'array',
), 'challenges_result'),
            challengesRoot: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['challenges_root'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'challenges_root'),
            chunkHeadersRoot: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['chunk_headers_root'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'chunk_headers_root'),
            chunkMask: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['chunk_mask'], array (
  'items' => 
  array (
    'type' => 'boolean',
  ),
  'type' => 'array',
), 'chunk_mask'),
            chunkReceiptsRoot: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['chunk_receipts_root'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'chunk_receipts_root'),
            chunkTxRoot: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['chunk_tx_root'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'chunk_tx_root'),
            chunksIncluded: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['chunks_included'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'chunks_included'),
            epochId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['epoch_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'epoch_id'),
            gasPrice: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['gas_price'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'gas_price'),
            hash: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['hash'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'hash'),
            height: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['height'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'height'),
            lastDsFinalBlock: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['last_ds_final_block'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'last_ds_final_block'),
            lastFinalBlock: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['last_final_block'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'last_final_block'),
            latestProtocolVersion: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['latest_protocol_version'], array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'latest_protocol_version'),
            nextBpHash: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['next_bp_hash'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'next_bp_hash'),
            nextEpochId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['next_epoch_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'next_epoch_id'),
            outcomeRoot: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['outcome_root'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'outcome_root'),
            prevHash: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['prev_hash'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'prev_hash'),
            prevStateRoot: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['prev_state_root'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'prev_state_root'),
            randomValue: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['random_value'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'random_value'),
            signature: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['signature'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Signature',
  'nullable' => false,
), 'signature'),
            timestamp: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['timestamp'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'timestamp'),
            timestampNanosec: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['timestamp_nanosec'], array (
  'type' => 'string',
), 'timestamp_nanosec'),
            totalSupply: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['total_supply'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'total_supply'),
            validatorProposals: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['validator_proposals'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorStakeView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'validator_proposals'),
            blockBodyHash: array_key_exists('block_body_hash', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['block_body_hash'], array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
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
), 'block_body_hash')) : new \Near\JsonRpc\Models\OptionalValue(),
            blockOrdinal: array_key_exists('block_ordinal', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['block_ordinal'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'block_ordinal')) : new \Near\JsonRpc\Models\OptionalValue(),
            chunkEndorsements: array_key_exists('chunk_endorsements', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['chunk_endorsements'], array (
  'items' => 
  array (
    'items' => 
    array (
      'format' => 'uint8',
      'maximum' => 255,
      'minimum' => 0,
      'type' => 'integer',
    ),
    'type' => 'array',
  ),
  'nullable' => true,
  'type' => 'array',
), 'chunk_endorsements')) : new \Near\JsonRpc\Models\OptionalValue(),
            chunkExecutionRoot: array_key_exists('chunk_execution_root', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['chunk_execution_root'], array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
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
), 'chunk_execution_root')) : new \Near\JsonRpc\Models\OptionalValue(),
            epochSyncDataHash: array_key_exists('epoch_sync_data_hash', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['epoch_sync_data_hash'], array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
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
), 'epoch_sync_data_hash')) : new \Near\JsonRpc\Models\OptionalValue(),
            prevHeight: array_key_exists('prev_height', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['prev_height'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'prev_height')) : new \Near\JsonRpc\Models\OptionalValue(),
            prevLastCertifiedBlockEpochId: array_key_exists('prev_last_certified_block_epoch_id', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['prev_last_certified_block_epoch_id'], array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\EpochId',
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
), 'prev_last_certified_block_epoch_id')) : new \Near\JsonRpc\Models\OptionalValue(),
            rentPaid: array_key_exists('rent_paid', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['rent_paid'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'rent_paid') : null,
            shardSplit: array_key_exists('shard_split', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['shard_split'], array (
  'items' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'nullable' => true,
  'type' => 'array',
), 'shard_split')) : new \Near\JsonRpc\Models\OptionalValue(),
            spiceChunkEndorsementStats: array_key_exists('spice_chunk_endorsement_stats', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['spice_chunk_endorsement_stats'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SpiceChunkEndorsementStats',
    'nullable' => false,
  ),
  'nullable' => true,
  'type' => 'array',
), 'spice_chunk_endorsement_stats')) : new \Near\JsonRpc\Models\OptionalValue(),
            validatorReward: array_key_exists('validator_reward', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['validator_reward'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'validator_reward') : null,
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
        $data['approvals'] = $this->approvals;
        $data['block_merkle_root'] = $this->blockMerkleRoot;
        $data['challenges_result'] = $this->challengesResult;
        $data['challenges_root'] = $this->challengesRoot;
        $data['chunk_headers_root'] = $this->chunkHeadersRoot;
        $data['chunk_mask'] = $this->chunkMask;
        $data['chunk_receipts_root'] = $this->chunkReceiptsRoot;
        $data['chunk_tx_root'] = $this->chunkTxRoot;
        $data['chunks_included'] = $this->chunksIncluded;
        $data['epoch_id'] = $this->epochId;
        $data['gas_price'] = $this->gasPrice;
        $data['hash'] = $this->hash;
        $data['height'] = $this->height;
        $data['last_ds_final_block'] = $this->lastDsFinalBlock;
        $data['last_final_block'] = $this->lastFinalBlock;
        $data['latest_protocol_version'] = $this->latestProtocolVersion;
        $data['next_bp_hash'] = $this->nextBpHash;
        $data['next_epoch_id'] = $this->nextEpochId;
        $data['outcome_root'] = $this->outcomeRoot;
        $data['prev_hash'] = $this->prevHash;
        $data['prev_state_root'] = $this->prevStateRoot;
        $data['random_value'] = $this->randomValue;
        $data['signature'] = $this->signature;
        $data['timestamp'] = $this->timestamp;
        $data['timestamp_nanosec'] = $this->timestampNanosec;
        $data['total_supply'] = $this->totalSupply;
        $data['validator_proposals'] = $this->validatorProposals;
        if ($this->blockBodyHash->present) $data['block_body_hash'] = $this->blockBodyHash->value;
        if ($this->blockOrdinal->present) $data['block_ordinal'] = $this->blockOrdinal->value;
        if ($this->chunkEndorsements->present) $data['chunk_endorsements'] = $this->chunkEndorsements->value;
        if ($this->chunkExecutionRoot->present) $data['chunk_execution_root'] = $this->chunkExecutionRoot->value;
        if ($this->epochSyncDataHash->present) $data['epoch_sync_data_hash'] = $this->epochSyncDataHash->value;
        if ($this->prevHeight->present) $data['prev_height'] = $this->prevHeight->value;
        if ($this->prevLastCertifiedBlockEpochId->present) $data['prev_last_certified_block_epoch_id'] = $this->prevLastCertifiedBlockEpochId->value;
        if ($this->rentPaid !== null) $data['rent_paid'] = $this->rentPaid;
        if ($this->shardSplit->present) $data['shard_split'] = $this->shardSplit->value;
        if ($this->spiceChunkEndorsementStats->present) $data['spice_chunk_endorsement_stats'] = $this->spiceChunkEndorsementStats->value;
        if ($this->validatorReward !== null) $data['validator_reward'] = $this->validatorReward;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'approvals' => 
    array (
      'items' => 
      array (
        'anyOf' => 
        array (
          0 => 
          array (
            'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Signature',
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
      'type' => 'array',
    ),
    'block_body_hash' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
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
    'block_merkle_root' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'block_ordinal' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'challenges_result' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SlashedValidator',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'challenges_root' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'chunk_endorsements' => 
    array (
      'items' => 
      array (
        'items' => 
        array (
          'format' => 'uint8',
          'maximum' => 255,
          'minimum' => 0,
          'type' => 'integer',
        ),
        'type' => 'array',
      ),
      'nullable' => true,
      'type' => 'array',
    ),
    'chunk_execution_root' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
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
    'chunk_headers_root' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'chunk_mask' => 
    array (
      'items' => 
      array (
        'type' => 'boolean',
      ),
      'type' => 'array',
    ),
    'chunk_receipts_root' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'chunk_tx_root' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'chunks_included' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'epoch_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'epoch_sync_data_hash' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
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
    'gas_price' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'last_ds_final_block' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'last_final_block' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'latest_protocol_version' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'next_bp_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'next_epoch_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'outcome_root' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'prev_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'prev_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'prev_last_certified_block_epoch_id' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\EpochId',
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
    'prev_state_root' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'random_value' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'rent_paid' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'shard_split' => 
    array (
      'items' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
          'nullable' => false,
        ),
        1 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
          'nullable' => false,
        ),
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'nullable' => true,
      'type' => 'array',
    ),
    'signature' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Signature',
      'nullable' => false,
    ),
    'spice_chunk_endorsement_stats' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SpiceChunkEndorsementStats',
        'nullable' => false,
      ),
      'nullable' => true,
      'type' => 'array',
    ),
    'timestamp' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'timestamp_nanosec' => 
    array (
      'type' => 'string',
    ),
    'total_supply' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'validator_proposals' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorStakeView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'validator_reward' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'height',
    1 => 'epoch_id',
    2 => 'next_epoch_id',
    3 => 'hash',
    4 => 'prev_hash',
    5 => 'prev_state_root',
    6 => 'chunk_receipts_root',
    7 => 'chunk_headers_root',
    8 => 'chunk_tx_root',
    9 => 'outcome_root',
    10 => 'chunks_included',
    11 => 'challenges_root',
    12 => 'timestamp',
    13 => 'timestamp_nanosec',
    14 => 'random_value',
    15 => 'validator_proposals',
    16 => 'chunk_mask',
    17 => 'gas_price',
    18 => 'total_supply',
    19 => 'challenges_result',
    20 => 'last_final_block',
    21 => 'last_ds_final_block',
    22 => 'next_bp_hash',
    23 => 'block_merkle_root',
    24 => 'approvals',
    25 => 'signature',
    26 => 'latest_protocol_version',
  ),
  'type' => 'object',
), 'BlockHeaderView'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'approvals' => 
    array (
      'items' => 
      array (
        'anyOf' => 
        array (
          0 => 
          array (
            'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Signature',
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
      'type' => 'array',
    ),
    'block_body_hash' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
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
    'block_merkle_root' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'block_ordinal' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'challenges_result' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SlashedValidator',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'challenges_root' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'chunk_endorsements' => 
    array (
      'items' => 
      array (
        'items' => 
        array (
          'format' => 'uint8',
          'maximum' => 255,
          'minimum' => 0,
          'type' => 'integer',
        ),
        'type' => 'array',
      ),
      'nullable' => true,
      'type' => 'array',
    ),
    'chunk_execution_root' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
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
    'chunk_headers_root' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'chunk_mask' => 
    array (
      'items' => 
      array (
        'type' => 'boolean',
      ),
      'type' => 'array',
    ),
    'chunk_receipts_root' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'chunk_tx_root' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'chunks_included' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'epoch_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'epoch_sync_data_hash' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
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
    'gas_price' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'last_ds_final_block' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'last_final_block' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'latest_protocol_version' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'next_bp_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'next_epoch_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'outcome_root' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'prev_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'prev_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'prev_last_certified_block_epoch_id' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\EpochId',
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
    'prev_state_root' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'random_value' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'rent_paid' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'shard_split' => 
    array (
      'items' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
          'nullable' => false,
        ),
        1 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
          'nullable' => false,
        ),
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'nullable' => true,
      'type' => 'array',
    ),
    'signature' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Signature',
      'nullable' => false,
    ),
    'spice_chunk_endorsement_stats' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SpiceChunkEndorsementStats',
        'nullable' => false,
      ),
      'nullable' => true,
      'type' => 'array',
    ),
    'timestamp' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'timestamp_nanosec' => 
    array (
      'type' => 'string',
    ),
    'total_supply' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'validator_proposals' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorStakeView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'validator_reward' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'height',
    1 => 'epoch_id',
    2 => 'next_epoch_id',
    3 => 'hash',
    4 => 'prev_hash',
    5 => 'prev_state_root',
    6 => 'chunk_receipts_root',
    7 => 'chunk_headers_root',
    8 => 'chunk_tx_root',
    9 => 'outcome_root',
    10 => 'chunks_included',
    11 => 'challenges_root',
    12 => 'timestamp',
    13 => 'timestamp_nanosec',
    14 => 'random_value',
    15 => 'validator_proposals',
    16 => 'chunk_mask',
    17 => 'gas_price',
    18 => 'total_supply',
    19 => 'challenges_result',
    20 => 'last_final_block',
    21 => 'last_ds_final_block',
    22 => 'next_bp_hash',
    23 => 'block_merkle_root',
    24 => 'approvals',
    25 => 'signature',
    26 => 'latest_protocol_version',
  ),
  'type' => 'object',
), 'BlockHeaderView');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
