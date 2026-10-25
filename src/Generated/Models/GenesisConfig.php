<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class GenesisConfig implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * Threshold for kicking out block producers, between 0 and 100.
         *
         * @var int
         */
        public int $blockProducerKickoutThreshold,
        /**
         * ID of the blockchain. This must be unique for every blockchain.
         * If your testnet blockchains do not have unique chain IDs, you will have a bad time.
         *
         * @var string
         */
        public string $chainId,
        /**
         * Threshold for kicking out chunk producers, between 0 and 100.
         *
         * @var int
         */
        public int $chunkProducerKickoutThreshold,
        /**
         * Enable dynamic re-sharding.
         *
         * @var bool
         */
        public bool $dynamicResharding,
        /**
         * Epoch length counted in block heights.
         *
         * @var int|string
         */
        public int|string $epochLength,
        /**
         * Fishermen stake threshold.
         *
         * @var \Near\JsonRpc\Generated\Models\NearToken
         */
        public \Near\JsonRpc\Generated\Models\NearToken $fishermenThreshold,
        /**
         * Initial gas limit.
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas
         */
        public \Near\JsonRpc\Generated\Models\NearGas $gasLimit,
        /**
         * Gas price adjustment rate
         *
         * @var list<int>
         */
        public array $gasPriceAdjustmentRate,
        /**
         * Height of genesis block.
         *
         * @var int|string
         */
        public int|string $genesisHeight,
        /**
         * Official time of blockchain start.
         *
         * @var string
         */
        public string $genesisTime,
        /**
         * @var \Near\JsonRpc\Generated\Models\NearToken
         */
        public \Near\JsonRpc\Generated\Models\NearToken $maxGasPrice,
        /**
         * Maximum inflation on the total supply every epoch.
         *
         * @var list<int>
         */
        public array $maxInflationRate,
        /**
         * Minimum gas price. It is also the initial gas price.
         *
         * @var \Near\JsonRpc\Generated\Models\NearToken
         */
        public \Near\JsonRpc\Generated\Models\NearToken $minGasPrice,
        /**
         * Number of block producer seats at genesis.
         *
         * @var int|string
         */
        public int|string $numBlockProducerSeats,
        /**
         * Expected number of blocks per year
         *
         * @var int|string
         */
        public int|string $numBlocksPerYear,
        /**
         * Protocol treasury rate
         *
         * @var list<int>
         */
        public array $protocolRewardRate,
        /**
         * Protocol treasury account
         *
         * @var \Near\JsonRpc\Generated\Models\AccountId
         */
        public \Near\JsonRpc\Generated\Models\AccountId $protocolTreasuryAccount,
        /**
         * Protocol version that this genesis works with.
         *
         * @var int
         */
        public int $protocolVersion,
        /**
         * Total supply of tokens at genesis.
         *
         * @var \Near\JsonRpc\Generated\Models\NearToken
         */
        public \Near\JsonRpc\Generated\Models\NearToken $totalSupply,
        /**
         * Number of blocks for which a given transaction is valid
         *
         * @var int|string
         */
        public int|string $transactionValidityPeriod,
        /**
         * List of initial validators.
         *
         * @var list<\Near\JsonRpc\Generated\Models\AccountInfo>
         */
        public array $validators,
        /**
         * Limits the number of shard changes in chunk producer assignments,
         * if algorithm is able to choose assignment with better balance of
         * number of chunk producers for shards.
         *
         * @var int|string|null
         */
        public int|string|null $chunkProducerAssignmentChangesLimit = null,
        /**
         * Threshold for kicking out nodes which are only chunk validators, between 0 and 100.
         *
         * @var int|null
         */
        public int|null $chunkValidatorOnlyKickoutThreshold = null,
        /**
         * Max stake percentage of the validators we will kick out.
         *
         * @var int|null
         */
        public int|null $maxKickoutStakePerc = null,
        /**
         * The minimum stake required for staking is last seat price divided by this number.
         *
         * @var int|string|null
         */
        public int|string|null $minimumStakeDivisor = null,
        /**
         * The lowest ratio s/s_total any block producer can have.
         * See <https://github.com/near/NEPs/pull/167> for details
         *
         * @var list<int>|null
         */
        public array|null $minimumStakeRatio = null,
        /**
         * The minimum number of validators each shard must have
         *
         * @var int|string|null
         */
        public int|string|null $minimumValidatorsPerShard = null,
        /**
         * Number of chunk producers.
         * Don't mess it up with chunk-only producers feature which is deprecated.
         *
         * @var int|string|null
         */
        public int|string|null $numChunkProducerSeats = null,
        /**
         * @var int|string|null
         */
        public int|string|null $numChunkValidatorSeats = null,
        /**
         * Online maximum threshold above which validator gets full reward.
         *
         * @var list<int>|null
         */
        public array|null $onlineMaxThreshold = null,
        /**
         * Online minimum threshold below which validator doesn't receive reward.
         *
         * @var list<int>|null
         */
        public array|null $onlineMinThreshold = null,
        /**
         * Threshold of stake that needs to indicate that they ready for upgrade.
         *
         * @var list<int>|null
         */
        public array|null $protocolUpgradeStakeThreshold = null,
        /**
         * Layout information regarding how to split accounts to shards
         *
         * @var \Near\JsonRpc\Generated\Models\ShardLayout|null
         */
        public \Near\JsonRpc\Generated\Models\ShardLayout|null $shardLayout = null,
        /**
         * If true, shuffle the chunk producers across shards. In other words, if
         * the shard assignments were `[S_0, S_1, S_2, S_3]` where `S_i` represents
         * the set of chunk producers for shard `i`, if this flag were true, the
         * shard assignments might become, for example, `[S_2, S_0, S_3, S_1]`.
         *
         * @var bool|null
         */
        public bool|null $shuffleShardAssignmentForChunkProducers = null,
        /**
         * Number of target chunk validator mandates for each shard.
         *
         * @var int|string|null
         */
        public int|string|null $targetValidatorMandatesPerShard = null,
        /**
         * This is only for test purposes. We hard code some configs for mainnet and testnet
         * in AllEpochConfig, and we want to have a way to test that code path. This flag is for that.
         * If set to true, the node will use the same config override path as mainnet and testnet.
         *
         * @var bool|null
         */
        public bool|null $useProductionConfig = null,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->blockProducerKickoutThreshold, array (
  'format' => 'uint8',
  'maximum' => 255,
  'minimum' => 0,
  'type' => 'integer',
), 'block_producer_kickout_threshold');
        \Near\JsonRpc\Models\TypeGuard::assert($this->chainId, array (
  'type' => 'string',
), 'chain_id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->chunkProducerKickoutThreshold, array (
  'format' => 'uint8',
  'maximum' => 255,
  'minimum' => 0,
  'type' => 'integer',
), 'chunk_producer_kickout_threshold');
        \Near\JsonRpc\Models\TypeGuard::assert($this->dynamicResharding, array (
  'type' => 'boolean',
), 'dynamic_resharding');
        \Near\JsonRpc\Models\TypeGuard::assert($this->epochLength, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'epoch_length');
        \Near\JsonRpc\Models\TypeGuard::assert($this->fishermenThreshold, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'fishermen_threshold');
        \Near\JsonRpc\Models\TypeGuard::assert($this->gasLimit, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'gas_limit');
        \Near\JsonRpc\Models\TypeGuard::assert($this->gasPriceAdjustmentRate, array (
  'items' => 
  array (
    'format' => 'int32',
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'gas_price_adjustment_rate');
        \Near\JsonRpc\Models\TypeGuard::assert($this->genesisHeight, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'genesis_height');
        \Near\JsonRpc\Models\TypeGuard::assert($this->genesisTime, array (
  'format' => 'date-time',
  'type' => 'string',
), 'genesis_time');
        \Near\JsonRpc\Models\TypeGuard::assert($this->maxGasPrice, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'max_gas_price');
        \Near\JsonRpc\Models\TypeGuard::assert($this->maxInflationRate, array (
  'items' => 
  array (
    'format' => 'int32',
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'max_inflation_rate');
        \Near\JsonRpc\Models\TypeGuard::assert($this->minGasPrice, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'min_gas_price');
        \Near\JsonRpc\Models\TypeGuard::assert($this->numBlockProducerSeats, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'num_block_producer_seats');
        \Near\JsonRpc\Models\TypeGuard::assert($this->numBlocksPerYear, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'num_blocks_per_year');
        \Near\JsonRpc\Models\TypeGuard::assert($this->protocolRewardRate, array (
  'items' => 
  array (
    'format' => 'int32',
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'protocol_reward_rate');
        \Near\JsonRpc\Models\TypeGuard::assert($this->protocolTreasuryAccount, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'protocol_treasury_account');
        \Near\JsonRpc\Models\TypeGuard::assert($this->protocolVersion, array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'protocol_version');
        \Near\JsonRpc\Models\TypeGuard::assert($this->totalSupply, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'total_supply');
        \Near\JsonRpc\Models\TypeGuard::assert($this->transactionValidityPeriod, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'transaction_validity_period');
        \Near\JsonRpc\Models\TypeGuard::assert($this->validators, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountInfo',
    'nullable' => false,
  ),
  'type' => 'array',
), 'validators');
        if ($this->chunkProducerAssignmentChangesLimit !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->chunkProducerAssignmentChangesLimit, array (
  'default' => 5,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'chunk_producer_assignment_changes_limit');
        if ($this->chunkValidatorOnlyKickoutThreshold !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->chunkValidatorOnlyKickoutThreshold, array (
  'default' => 80,
  'format' => 'uint8',
  'maximum' => 255,
  'minimum' => 0,
  'type' => 'integer',
), 'chunk_validator_only_kickout_threshold');
        if ($this->maxKickoutStakePerc !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxKickoutStakePerc, array (
  'default' => 100,
  'format' => 'uint8',
  'maximum' => 255,
  'minimum' => 0,
  'type' => 'integer',
), 'max_kickout_stake_perc');
        if ($this->minimumStakeDivisor !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->minimumStakeDivisor, array (
  'default' => 10,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'minimum_stake_divisor');
        if ($this->minimumStakeRatio !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->minimumStakeRatio, array (
  'default' => 
  array (
    0 => 1,
    1 => 6250,
  ),
  'items' => 
  array (
    'format' => 'int32',
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'minimum_stake_ratio');
        if ($this->minimumValidatorsPerShard !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->minimumValidatorsPerShard, array (
  'default' => 1,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'minimum_validators_per_shard');
        if ($this->numChunkProducerSeats !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->numChunkProducerSeats, array (
  'default' => 100,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'num_chunk_producer_seats');
        if ($this->numChunkValidatorSeats !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->numChunkValidatorSeats, array (
  'default' => 300,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'num_chunk_validator_seats');
        if ($this->onlineMaxThreshold !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->onlineMaxThreshold, array (
  'default' => 
  array (
    0 => 99,
    1 => 100,
  ),
  'items' => 
  array (
    'format' => 'int32',
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'online_max_threshold');
        if ($this->onlineMinThreshold !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->onlineMinThreshold, array (
  'default' => 
  array (
    0 => 9,
    1 => 10,
  ),
  'items' => 
  array (
    'format' => 'int32',
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'online_min_threshold');
        if ($this->protocolUpgradeStakeThreshold !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->protocolUpgradeStakeThreshold, array (
  'default' => 
  array (
    0 => 4,
    1 => 5,
  ),
  'items' => 
  array (
    'format' => 'int32',
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'protocol_upgrade_stake_threshold');
        if ($this->shardLayout !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->shardLayout, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardLayout',
  'nullable' => false,
), 'shard_layout');
        if ($this->shuffleShardAssignmentForChunkProducers !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->shuffleShardAssignmentForChunkProducers, array (
  'default' => false,
  'type' => 'boolean',
), 'shuffle_shard_assignment_for_chunk_producers');
        if ($this->targetValidatorMandatesPerShard !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->targetValidatorMandatesPerShard, array (
  'default' => 68,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'target_validator_mandates_per_shard');
        if ($this->useProductionConfig !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->useProductionConfig, array (
  'default' => false,
  'type' => 'boolean',
), 'use_production_config');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for GenesisConfig.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('protocol_version', $data)) throw new \InvalidArgumentException('Missing required field: protocol_version');
        if (!array_key_exists('genesis_time', $data)) throw new \InvalidArgumentException('Missing required field: genesis_time');
        if (!array_key_exists('chain_id', $data)) throw new \InvalidArgumentException('Missing required field: chain_id');
        if (!array_key_exists('genesis_height', $data)) throw new \InvalidArgumentException('Missing required field: genesis_height');
        if (!array_key_exists('num_block_producer_seats', $data)) throw new \InvalidArgumentException('Missing required field: num_block_producer_seats');
        if (!array_key_exists('dynamic_resharding', $data)) throw new \InvalidArgumentException('Missing required field: dynamic_resharding');
        if (!array_key_exists('epoch_length', $data)) throw new \InvalidArgumentException('Missing required field: epoch_length');
        if (!array_key_exists('gas_limit', $data)) throw new \InvalidArgumentException('Missing required field: gas_limit');
        if (!array_key_exists('min_gas_price', $data)) throw new \InvalidArgumentException('Missing required field: min_gas_price');
        if (!array_key_exists('max_gas_price', $data)) throw new \InvalidArgumentException('Missing required field: max_gas_price');
        if (!array_key_exists('block_producer_kickout_threshold', $data)) throw new \InvalidArgumentException('Missing required field: block_producer_kickout_threshold');
        if (!array_key_exists('chunk_producer_kickout_threshold', $data)) throw new \InvalidArgumentException('Missing required field: chunk_producer_kickout_threshold');
        if (!array_key_exists('gas_price_adjustment_rate', $data)) throw new \InvalidArgumentException('Missing required field: gas_price_adjustment_rate');
        if (!array_key_exists('validators', $data)) throw new \InvalidArgumentException('Missing required field: validators');
        if (!array_key_exists('transaction_validity_period', $data)) throw new \InvalidArgumentException('Missing required field: transaction_validity_period');
        if (!array_key_exists('protocol_reward_rate', $data)) throw new \InvalidArgumentException('Missing required field: protocol_reward_rate');
        if (!array_key_exists('max_inflation_rate', $data)) throw new \InvalidArgumentException('Missing required field: max_inflation_rate');
        if (!array_key_exists('total_supply', $data)) throw new \InvalidArgumentException('Missing required field: total_supply');
        if (!array_key_exists('num_blocks_per_year', $data)) throw new \InvalidArgumentException('Missing required field: num_blocks_per_year');
        if (!array_key_exists('protocol_treasury_account', $data)) throw new \InvalidArgumentException('Missing required field: protocol_treasury_account');
        if (!array_key_exists('fishermen_threshold', $data)) throw new \InvalidArgumentException('Missing required field: fishermen_threshold');
        $extra = array_diff_key($data, array (
  'block_producer_kickout_threshold' => true,
  'chain_id' => true,
  'chunk_producer_assignment_changes_limit' => true,
  'chunk_producer_kickout_threshold' => true,
  'chunk_validator_only_kickout_threshold' => true,
  'dynamic_resharding' => true,
  'epoch_length' => true,
  'fishermen_threshold' => true,
  'gas_limit' => true,
  'gas_price_adjustment_rate' => true,
  'genesis_height' => true,
  'genesis_time' => true,
  'max_gas_price' => true,
  'max_inflation_rate' => true,
  'max_kickout_stake_perc' => true,
  'min_gas_price' => true,
  'minimum_stake_divisor' => true,
  'minimum_stake_ratio' => true,
  'minimum_validators_per_shard' => true,
  'num_block_producer_seats' => true,
  'num_blocks_per_year' => true,
  'num_chunk_producer_seats' => true,
  'num_chunk_validator_seats' => true,
  'online_max_threshold' => true,
  'online_min_threshold' => true,
  'protocol_reward_rate' => true,
  'protocol_treasury_account' => true,
  'protocol_upgrade_stake_threshold' => true,
  'protocol_version' => true,
  'shard_layout' => true,
  'shuffle_shard_assignment_for_chunk_producers' => true,
  'target_validator_mandates_per_shard' => true,
  'total_supply' => true,
  'transaction_validity_period' => true,
  'use_production_config' => true,
  'validators' => true,
));
        return new self(
            blockProducerKickoutThreshold: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['block_producer_kickout_threshold'], array (
  'format' => 'uint8',
  'maximum' => 255,
  'minimum' => 0,
  'type' => 'integer',
), 'block_producer_kickout_threshold'),
            chainId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['chain_id'], array (
  'type' => 'string',
), 'chain_id'),
            chunkProducerKickoutThreshold: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['chunk_producer_kickout_threshold'], array (
  'format' => 'uint8',
  'maximum' => 255,
  'minimum' => 0,
  'type' => 'integer',
), 'chunk_producer_kickout_threshold'),
            dynamicResharding: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['dynamic_resharding'], array (
  'type' => 'boolean',
), 'dynamic_resharding'),
            epochLength: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['epoch_length'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'epoch_length'),
            fishermenThreshold: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['fishermen_threshold'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'fishermen_threshold'),
            gasLimit: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['gas_limit'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'gas_limit'),
            gasPriceAdjustmentRate: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['gas_price_adjustment_rate'], array (
  'items' => 
  array (
    'format' => 'int32',
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'gas_price_adjustment_rate'),
            genesisHeight: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['genesis_height'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'genesis_height'),
            genesisTime: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['genesis_time'], array (
  'format' => 'date-time',
  'type' => 'string',
), 'genesis_time'),
            maxGasPrice: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_gas_price'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'max_gas_price'),
            maxInflationRate: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_inflation_rate'], array (
  'items' => 
  array (
    'format' => 'int32',
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'max_inflation_rate'),
            minGasPrice: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['min_gas_price'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'min_gas_price'),
            numBlockProducerSeats: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['num_block_producer_seats'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'num_block_producer_seats'),
            numBlocksPerYear: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['num_blocks_per_year'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'num_blocks_per_year'),
            protocolRewardRate: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['protocol_reward_rate'], array (
  'items' => 
  array (
    'format' => 'int32',
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'protocol_reward_rate'),
            protocolTreasuryAccount: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['protocol_treasury_account'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'protocol_treasury_account'),
            protocolVersion: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['protocol_version'], array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'protocol_version'),
            totalSupply: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['total_supply'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'total_supply'),
            transactionValidityPeriod: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['transaction_validity_period'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'transaction_validity_period'),
            validators: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['validators'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountInfo',
    'nullable' => false,
  ),
  'type' => 'array',
), 'validators'),
            chunkProducerAssignmentChangesLimit: array_key_exists('chunk_producer_assignment_changes_limit', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['chunk_producer_assignment_changes_limit'], array (
  'default' => 5,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'chunk_producer_assignment_changes_limit') : null,
            chunkValidatorOnlyKickoutThreshold: array_key_exists('chunk_validator_only_kickout_threshold', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['chunk_validator_only_kickout_threshold'], array (
  'default' => 80,
  'format' => 'uint8',
  'maximum' => 255,
  'minimum' => 0,
  'type' => 'integer',
), 'chunk_validator_only_kickout_threshold') : null,
            maxKickoutStakePerc: array_key_exists('max_kickout_stake_perc', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_kickout_stake_perc'], array (
  'default' => 100,
  'format' => 'uint8',
  'maximum' => 255,
  'minimum' => 0,
  'type' => 'integer',
), 'max_kickout_stake_perc') : null,
            minimumStakeDivisor: array_key_exists('minimum_stake_divisor', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['minimum_stake_divisor'], array (
  'default' => 10,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'minimum_stake_divisor') : null,
            minimumStakeRatio: array_key_exists('minimum_stake_ratio', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['minimum_stake_ratio'], array (
  'default' => 
  array (
    0 => 1,
    1 => 6250,
  ),
  'items' => 
  array (
    'format' => 'int32',
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'minimum_stake_ratio') : null,
            minimumValidatorsPerShard: array_key_exists('minimum_validators_per_shard', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['minimum_validators_per_shard'], array (
  'default' => 1,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'minimum_validators_per_shard') : null,
            numChunkProducerSeats: array_key_exists('num_chunk_producer_seats', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['num_chunk_producer_seats'], array (
  'default' => 100,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'num_chunk_producer_seats') : null,
            numChunkValidatorSeats: array_key_exists('num_chunk_validator_seats', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['num_chunk_validator_seats'], array (
  'default' => 300,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'num_chunk_validator_seats') : null,
            onlineMaxThreshold: array_key_exists('online_max_threshold', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['online_max_threshold'], array (
  'default' => 
  array (
    0 => 99,
    1 => 100,
  ),
  'items' => 
  array (
    'format' => 'int32',
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'online_max_threshold') : null,
            onlineMinThreshold: array_key_exists('online_min_threshold', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['online_min_threshold'], array (
  'default' => 
  array (
    0 => 9,
    1 => 10,
  ),
  'items' => 
  array (
    'format' => 'int32',
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'online_min_threshold') : null,
            protocolUpgradeStakeThreshold: array_key_exists('protocol_upgrade_stake_threshold', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['protocol_upgrade_stake_threshold'], array (
  'default' => 
  array (
    0 => 4,
    1 => 5,
  ),
  'items' => 
  array (
    'format' => 'int32',
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'protocol_upgrade_stake_threshold') : null,
            shardLayout: array_key_exists('shard_layout', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['shard_layout'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardLayout',
  'nullable' => false,
), 'shard_layout') : null,
            shuffleShardAssignmentForChunkProducers: array_key_exists('shuffle_shard_assignment_for_chunk_producers', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['shuffle_shard_assignment_for_chunk_producers'], array (
  'default' => false,
  'type' => 'boolean',
), 'shuffle_shard_assignment_for_chunk_producers') : null,
            targetValidatorMandatesPerShard: array_key_exists('target_validator_mandates_per_shard', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['target_validator_mandates_per_shard'], array (
  'default' => 68,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'target_validator_mandates_per_shard') : null,
            useProductionConfig: array_key_exists('use_production_config', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['use_production_config'], array (
  'default' => false,
  'type' => 'boolean',
), 'use_production_config') : null,
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
        $data['block_producer_kickout_threshold'] = $this->blockProducerKickoutThreshold;
        $data['chain_id'] = $this->chainId;
        $data['chunk_producer_kickout_threshold'] = $this->chunkProducerKickoutThreshold;
        $data['dynamic_resharding'] = $this->dynamicResharding;
        $data['epoch_length'] = $this->epochLength;
        $data['fishermen_threshold'] = $this->fishermenThreshold;
        $data['gas_limit'] = $this->gasLimit;
        $data['gas_price_adjustment_rate'] = $this->gasPriceAdjustmentRate;
        $data['genesis_height'] = $this->genesisHeight;
        $data['genesis_time'] = $this->genesisTime;
        $data['max_gas_price'] = $this->maxGasPrice;
        $data['max_inflation_rate'] = $this->maxInflationRate;
        $data['min_gas_price'] = $this->minGasPrice;
        $data['num_block_producer_seats'] = $this->numBlockProducerSeats;
        $data['num_blocks_per_year'] = $this->numBlocksPerYear;
        $data['protocol_reward_rate'] = $this->protocolRewardRate;
        $data['protocol_treasury_account'] = $this->protocolTreasuryAccount;
        $data['protocol_version'] = $this->protocolVersion;
        $data['total_supply'] = $this->totalSupply;
        $data['transaction_validity_period'] = $this->transactionValidityPeriod;
        $data['validators'] = $this->validators;
        if ($this->chunkProducerAssignmentChangesLimit !== null) $data['chunk_producer_assignment_changes_limit'] = $this->chunkProducerAssignmentChangesLimit;
        if ($this->chunkValidatorOnlyKickoutThreshold !== null) $data['chunk_validator_only_kickout_threshold'] = $this->chunkValidatorOnlyKickoutThreshold;
        if ($this->maxKickoutStakePerc !== null) $data['max_kickout_stake_perc'] = $this->maxKickoutStakePerc;
        if ($this->minimumStakeDivisor !== null) $data['minimum_stake_divisor'] = $this->minimumStakeDivisor;
        if ($this->minimumStakeRatio !== null) $data['minimum_stake_ratio'] = $this->minimumStakeRatio;
        if ($this->minimumValidatorsPerShard !== null) $data['minimum_validators_per_shard'] = $this->minimumValidatorsPerShard;
        if ($this->numChunkProducerSeats !== null) $data['num_chunk_producer_seats'] = $this->numChunkProducerSeats;
        if ($this->numChunkValidatorSeats !== null) $data['num_chunk_validator_seats'] = $this->numChunkValidatorSeats;
        if ($this->onlineMaxThreshold !== null) $data['online_max_threshold'] = $this->onlineMaxThreshold;
        if ($this->onlineMinThreshold !== null) $data['online_min_threshold'] = $this->onlineMinThreshold;
        if ($this->protocolUpgradeStakeThreshold !== null) $data['protocol_upgrade_stake_threshold'] = $this->protocolUpgradeStakeThreshold;
        if ($this->shardLayout !== null) $data['shard_layout'] = $this->shardLayout;
        if ($this->shuffleShardAssignmentForChunkProducers !== null) $data['shuffle_shard_assignment_for_chunk_producers'] = $this->shuffleShardAssignmentForChunkProducers;
        if ($this->targetValidatorMandatesPerShard !== null) $data['target_validator_mandates_per_shard'] = $this->targetValidatorMandatesPerShard;
        if ($this->useProductionConfig !== null) $data['use_production_config'] = $this->useProductionConfig;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'block_producer_kickout_threshold' => 
    array (
      'format' => 'uint8',
      'maximum' => 255,
      'minimum' => 0,
      'type' => 'integer',
    ),
    'chain_id' => 
    array (
      'type' => 'string',
    ),
    'chunk_producer_assignment_changes_limit' => 
    array (
      'default' => 5,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'chunk_producer_kickout_threshold' => 
    array (
      'format' => 'uint8',
      'maximum' => 255,
      'minimum' => 0,
      'type' => 'integer',
    ),
    'chunk_validator_only_kickout_threshold' => 
    array (
      'default' => 80,
      'format' => 'uint8',
      'maximum' => 255,
      'minimum' => 0,
      'type' => 'integer',
    ),
    'dynamic_resharding' => 
    array (
      'type' => 'boolean',
    ),
    'epoch_length' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'fishermen_threshold' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'gas_limit' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'gas_price_adjustment_rate' => 
    array (
      'items' => 
      array (
        'format' => 'int32',
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'genesis_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'genesis_time' => 
    array (
      'format' => 'date-time',
      'type' => 'string',
    ),
    'max_gas_price' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'max_inflation_rate' => 
    array (
      'items' => 
      array (
        'format' => 'int32',
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'max_kickout_stake_perc' => 
    array (
      'default' => 100,
      'format' => 'uint8',
      'maximum' => 255,
      'minimum' => 0,
      'type' => 'integer',
    ),
    'min_gas_price' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'minimum_stake_divisor' => 
    array (
      'default' => 10,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'minimum_stake_ratio' => 
    array (
      'default' => 
      array (
        0 => 1,
        1 => 6250,
      ),
      'items' => 
      array (
        'format' => 'int32',
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'minimum_validators_per_shard' => 
    array (
      'default' => 1,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'num_block_producer_seats' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'num_blocks_per_year' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'num_chunk_producer_seats' => 
    array (
      'default' => 100,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'num_chunk_validator_seats' => 
    array (
      'default' => 300,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'online_max_threshold' => 
    array (
      'default' => 
      array (
        0 => 99,
        1 => 100,
      ),
      'items' => 
      array (
        'format' => 'int32',
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'online_min_threshold' => 
    array (
      'default' => 
      array (
        0 => 9,
        1 => 10,
      ),
      'items' => 
      array (
        'format' => 'int32',
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'protocol_reward_rate' => 
    array (
      'items' => 
      array (
        'format' => 'int32',
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'protocol_treasury_account' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
    'protocol_upgrade_stake_threshold' => 
    array (
      'default' => 
      array (
        0 => 4,
        1 => 5,
      ),
      'items' => 
      array (
        'format' => 'int32',
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'protocol_version' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'shard_layout' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardLayout',
      'nullable' => false,
    ),
    'shuffle_shard_assignment_for_chunk_producers' => 
    array (
      'default' => false,
      'type' => 'boolean',
    ),
    'target_validator_mandates_per_shard' => 
    array (
      'default' => 68,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'total_supply' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'transaction_validity_period' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'use_production_config' => 
    array (
      'default' => false,
      'type' => 'boolean',
    ),
    'validators' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountInfo',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
  ),
  'required' => 
  array (
    0 => 'protocol_version',
    1 => 'genesis_time',
    2 => 'chain_id',
    3 => 'genesis_height',
    4 => 'num_block_producer_seats',
    5 => 'dynamic_resharding',
    6 => 'epoch_length',
    7 => 'gas_limit',
    8 => 'min_gas_price',
    9 => 'max_gas_price',
    10 => 'block_producer_kickout_threshold',
    11 => 'chunk_producer_kickout_threshold',
    12 => 'gas_price_adjustment_rate',
    13 => 'validators',
    14 => 'transaction_validity_period',
    15 => 'protocol_reward_rate',
    16 => 'max_inflation_rate',
    17 => 'total_supply',
    18 => 'num_blocks_per_year',
    19 => 'protocol_treasury_account',
    20 => 'fishermen_threshold',
  ),
  'type' => 'object',
), 'GenesisConfig'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'block_producer_kickout_threshold' => 
    array (
      'format' => 'uint8',
      'maximum' => 255,
      'minimum' => 0,
      'type' => 'integer',
    ),
    'chain_id' => 
    array (
      'type' => 'string',
    ),
    'chunk_producer_assignment_changes_limit' => 
    array (
      'default' => 5,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'chunk_producer_kickout_threshold' => 
    array (
      'format' => 'uint8',
      'maximum' => 255,
      'minimum' => 0,
      'type' => 'integer',
    ),
    'chunk_validator_only_kickout_threshold' => 
    array (
      'default' => 80,
      'format' => 'uint8',
      'maximum' => 255,
      'minimum' => 0,
      'type' => 'integer',
    ),
    'dynamic_resharding' => 
    array (
      'type' => 'boolean',
    ),
    'epoch_length' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'fishermen_threshold' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'gas_limit' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'gas_price_adjustment_rate' => 
    array (
      'items' => 
      array (
        'format' => 'int32',
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'genesis_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'genesis_time' => 
    array (
      'format' => 'date-time',
      'type' => 'string',
    ),
    'max_gas_price' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'max_inflation_rate' => 
    array (
      'items' => 
      array (
        'format' => 'int32',
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'max_kickout_stake_perc' => 
    array (
      'default' => 100,
      'format' => 'uint8',
      'maximum' => 255,
      'minimum' => 0,
      'type' => 'integer',
    ),
    'min_gas_price' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'minimum_stake_divisor' => 
    array (
      'default' => 10,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'minimum_stake_ratio' => 
    array (
      'default' => 
      array (
        0 => 1,
        1 => 6250,
      ),
      'items' => 
      array (
        'format' => 'int32',
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'minimum_validators_per_shard' => 
    array (
      'default' => 1,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'num_block_producer_seats' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'num_blocks_per_year' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'num_chunk_producer_seats' => 
    array (
      'default' => 100,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'num_chunk_validator_seats' => 
    array (
      'default' => 300,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'online_max_threshold' => 
    array (
      'default' => 
      array (
        0 => 99,
        1 => 100,
      ),
      'items' => 
      array (
        'format' => 'int32',
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'online_min_threshold' => 
    array (
      'default' => 
      array (
        0 => 9,
        1 => 10,
      ),
      'items' => 
      array (
        'format' => 'int32',
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'protocol_reward_rate' => 
    array (
      'items' => 
      array (
        'format' => 'int32',
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'protocol_treasury_account' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
    'protocol_upgrade_stake_threshold' => 
    array (
      'default' => 
      array (
        0 => 4,
        1 => 5,
      ),
      'items' => 
      array (
        'format' => 'int32',
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'protocol_version' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'shard_layout' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardLayout',
      'nullable' => false,
    ),
    'shuffle_shard_assignment_for_chunk_producers' => 
    array (
      'default' => false,
      'type' => 'boolean',
    ),
    'target_validator_mandates_per_shard' => 
    array (
      'default' => 68,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'total_supply' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'transaction_validity_period' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'use_production_config' => 
    array (
      'default' => false,
      'type' => 'boolean',
    ),
    'validators' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountInfo',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
  ),
  'required' => 
  array (
    0 => 'protocol_version',
    1 => 'genesis_time',
    2 => 'chain_id',
    3 => 'genesis_height',
    4 => 'num_block_producer_seats',
    5 => 'dynamic_resharding',
    6 => 'epoch_length',
    7 => 'gas_limit',
    8 => 'min_gas_price',
    9 => 'max_gas_price',
    10 => 'block_producer_kickout_threshold',
    11 => 'chunk_producer_kickout_threshold',
    12 => 'gas_price_adjustment_rate',
    13 => 'validators',
    14 => 'transaction_validity_period',
    15 => 'protocol_reward_rate',
    16 => 'max_inflation_rate',
    17 => 'total_supply',
    18 => 'num_blocks_per_year',
    19 => 'protocol_treasury_account',
    20 => 'fishermen_threshold',
  ),
  'type' => 'object',
), 'GenesisConfig');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
