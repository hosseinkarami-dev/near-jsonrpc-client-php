<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class RpcProtocolConfigResponse implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * Threshold for kicking out block producers, between 0 and 100.
         *
         * @var int|null
         */
        public int|null $blockProducerKickoutThreshold = null,
        /**
         * ID of the blockchain. This must be unique for every blockchain.
         * If your testnet blockchains do not have unique chain IDs, you will have a bad time.
         *
         * @var string|null
         */
        public string|null $chainId = null,
        /**
         * Threshold for kicking out chunk producers, between 0 and 100.
         *
         * @var int|null
         */
        public int|null $chunkProducerKickoutThreshold = null,
        /**
         * Threshold for kicking out nodes which are only chunk validators, between 0 and 100.
         *
         * @var int|null
         */
        public int|null $chunkValidatorOnlyKickoutThreshold = null,
        /**
         * Enable dynamic re-sharding.
         *
         * @var bool|null
         */
        public bool|null $dynamicResharding = null,
        /**
         * Epoch length counted in block heights.
         *
         * @var int|string|null
         */
        public int|string|null $epochLength = null,
        /**
         * Fishermen stake threshold.
         *
         * @var \Near\JsonRpc\Generated\Models\NearToken|null
         */
        public \Near\JsonRpc\Generated\Models\NearToken|null $fishermenThreshold = null,
        /**
         * Initial gas limit.
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $gasLimit = null,
        /**
         * Gas price adjustment rate
         *
         * @var list<int>|null
         */
        public array|null $gasPriceAdjustmentRate = null,
        /**
         * Height of genesis block.
         *
         * @var int|string|null
         */
        public int|string|null $genesisHeight = null,
        /**
         * Official time of blockchain start.
         *
         * @var string|null
         */
        public string|null $genesisTime = null,
        /**
         * Maximum gas price.
         *
         * @var \Near\JsonRpc\Generated\Models\NearToken|null
         */
        public \Near\JsonRpc\Generated\Models\NearToken|null $maxGasPrice = null,
        /**
         * Maximum inflation on the total supply every epoch.
         *
         * @var list<int>|null
         */
        public array|null $maxInflationRate = null,
        /**
         * Max stake percentage of the validators we will kick out.
         *
         * @var int|null
         */
        public int|null $maxKickoutStakePerc = null,
        /**
         * Minimum gas price. It is also the initial gas price.
         *
         * @var \Near\JsonRpc\Generated\Models\NearToken|null
         */
        public \Near\JsonRpc\Generated\Models\NearToken|null $minGasPrice = null,
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
         * Number of block producer seats at genesis.
         *
         * @var int|string|null
         */
        public int|string|null $numBlockProducerSeats = null,
        /**
         * Expected number of blocks per year
         *
         * @var int|string|null
         */
        public int|string|null $numBlocksPerYear = null,
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
         * Protocol treasury rate
         *
         * @var list<int>|null
         */
        public array|null $protocolRewardRate = null,
        /**
         * Protocol treasury account
         *
         * @var \Near\JsonRpc\Generated\Models\AccountId|null
         */
        public \Near\JsonRpc\Generated\Models\AccountId|null $protocolTreasuryAccount = null,
        /**
         * Threshold of stake that needs to indicate that they ready for upgrade.
         *
         * @var list<int>|null
         */
        public array|null $protocolUpgradeStakeThreshold = null,
        /**
         * Current Protocol Version
         *
         * @var int|null
         */
        public int|null $protocolVersion = null,
        /**
         * Runtime configuration (mostly economics constants).
         *
         * @var \Near\JsonRpc\Generated\Models\RuntimeConfigView|null
         */
        public \Near\JsonRpc\Generated\Models\RuntimeConfigView|null $runtimeConfig = null,
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
         * Number of blocks for which a given transaction is valid
         *
         * @var int|string|null
         */
        public int|string|null $transactionValidityPeriod = null,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        if ($this->blockProducerKickoutThreshold !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->blockProducerKickoutThreshold, array (
  'format' => 'uint8',
  'maximum' => 255,
  'minimum' => 0,
  'type' => 'integer',
), 'block_producer_kickout_threshold');
        if ($this->chainId !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->chainId, array (
  'type' => 'string',
), 'chain_id');
        if ($this->chunkProducerKickoutThreshold !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->chunkProducerKickoutThreshold, array (
  'format' => 'uint8',
  'maximum' => 255,
  'minimum' => 0,
  'type' => 'integer',
), 'chunk_producer_kickout_threshold');
        if ($this->chunkValidatorOnlyKickoutThreshold !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->chunkValidatorOnlyKickoutThreshold, array (
  'format' => 'uint8',
  'maximum' => 255,
  'minimum' => 0,
  'type' => 'integer',
), 'chunk_validator_only_kickout_threshold');
        if ($this->dynamicResharding !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->dynamicResharding, array (
  'type' => 'boolean',
), 'dynamic_resharding');
        if ($this->epochLength !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->epochLength, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'epoch_length');
        if ($this->fishermenThreshold !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->fishermenThreshold, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'fishermen_threshold');
        if ($this->gasLimit !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->gasLimit, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'gas_limit');
        if ($this->gasPriceAdjustmentRate !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->gasPriceAdjustmentRate, array (
  'items' => 
  array (
    'format' => 'int32',
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'gas_price_adjustment_rate');
        if ($this->genesisHeight !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->genesisHeight, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'genesis_height');
        if ($this->genesisTime !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->genesisTime, array (
  'format' => 'date-time',
  'type' => 'string',
), 'genesis_time');
        if ($this->maxGasPrice !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxGasPrice, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'max_gas_price');
        if ($this->maxInflationRate !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxInflationRate, array (
  'items' => 
  array (
    'format' => 'int32',
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'max_inflation_rate');
        if ($this->maxKickoutStakePerc !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxKickoutStakePerc, array (
  'format' => 'uint8',
  'maximum' => 255,
  'minimum' => 0,
  'type' => 'integer',
), 'max_kickout_stake_perc');
        if ($this->minGasPrice !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->minGasPrice, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'min_gas_price');
        if ($this->minimumStakeDivisor !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->minimumStakeDivisor, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'minimum_stake_divisor');
        if ($this->minimumStakeRatio !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->minimumStakeRatio, array (
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
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'minimum_validators_per_shard');
        if ($this->numBlockProducerSeats !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->numBlockProducerSeats, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'num_block_producer_seats');
        if ($this->numBlocksPerYear !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->numBlocksPerYear, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'num_blocks_per_year');
        if ($this->onlineMaxThreshold !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->onlineMaxThreshold, array (
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
  'items' => 
  array (
    'format' => 'int32',
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'online_min_threshold');
        if ($this->protocolRewardRate !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->protocolRewardRate, array (
  'items' => 
  array (
    'format' => 'int32',
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'protocol_reward_rate');
        if ($this->protocolTreasuryAccount !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->protocolTreasuryAccount, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'protocol_treasury_account');
        if ($this->protocolUpgradeStakeThreshold !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->protocolUpgradeStakeThreshold, array (
  'items' => 
  array (
    'format' => 'int32',
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'protocol_upgrade_stake_threshold');
        if ($this->protocolVersion !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->protocolVersion, array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'protocol_version');
        if ($this->runtimeConfig !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->runtimeConfig, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RuntimeConfigView',
  'nullable' => false,
), 'runtime_config');
        if ($this->shardLayout !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->shardLayout, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardLayout',
  'nullable' => false,
), 'shard_layout');
        if ($this->shuffleShardAssignmentForChunkProducers !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->shuffleShardAssignmentForChunkProducers, array (
  'type' => 'boolean',
), 'shuffle_shard_assignment_for_chunk_producers');
        if ($this->targetValidatorMandatesPerShard !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->targetValidatorMandatesPerShard, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'target_validator_mandates_per_shard');
        if ($this->transactionValidityPeriod !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->transactionValidityPeriod, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'transaction_validity_period');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcProtocolConfigResponse.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        $extra = array_diff_key($data, array (
  'block_producer_kickout_threshold' => true,
  'chain_id' => true,
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
  'online_max_threshold' => true,
  'online_min_threshold' => true,
  'protocol_reward_rate' => true,
  'protocol_treasury_account' => true,
  'protocol_upgrade_stake_threshold' => true,
  'protocol_version' => true,
  'runtime_config' => true,
  'shard_layout' => true,
  'shuffle_shard_assignment_for_chunk_producers' => true,
  'target_validator_mandates_per_shard' => true,
  'transaction_validity_period' => true,
));
        return new self(
            blockProducerKickoutThreshold: array_key_exists('block_producer_kickout_threshold', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['block_producer_kickout_threshold'], array (
  'format' => 'uint8',
  'maximum' => 255,
  'minimum' => 0,
  'type' => 'integer',
), 'block_producer_kickout_threshold') : null,
            chainId: array_key_exists('chain_id', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['chain_id'], array (
  'type' => 'string',
), 'chain_id') : null,
            chunkProducerKickoutThreshold: array_key_exists('chunk_producer_kickout_threshold', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['chunk_producer_kickout_threshold'], array (
  'format' => 'uint8',
  'maximum' => 255,
  'minimum' => 0,
  'type' => 'integer',
), 'chunk_producer_kickout_threshold') : null,
            chunkValidatorOnlyKickoutThreshold: array_key_exists('chunk_validator_only_kickout_threshold', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['chunk_validator_only_kickout_threshold'], array (
  'format' => 'uint8',
  'maximum' => 255,
  'minimum' => 0,
  'type' => 'integer',
), 'chunk_validator_only_kickout_threshold') : null,
            dynamicResharding: array_key_exists('dynamic_resharding', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['dynamic_resharding'], array (
  'type' => 'boolean',
), 'dynamic_resharding') : null,
            epochLength: array_key_exists('epoch_length', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['epoch_length'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'epoch_length') : null,
            fishermenThreshold: array_key_exists('fishermen_threshold', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['fishermen_threshold'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'fishermen_threshold') : null,
            gasLimit: array_key_exists('gas_limit', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['gas_limit'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'gas_limit') : null,
            gasPriceAdjustmentRate: array_key_exists('gas_price_adjustment_rate', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['gas_price_adjustment_rate'], array (
  'items' => 
  array (
    'format' => 'int32',
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'gas_price_adjustment_rate') : null,
            genesisHeight: array_key_exists('genesis_height', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['genesis_height'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'genesis_height') : null,
            genesisTime: array_key_exists('genesis_time', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['genesis_time'], array (
  'format' => 'date-time',
  'type' => 'string',
), 'genesis_time') : null,
            maxGasPrice: array_key_exists('max_gas_price', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_gas_price'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'max_gas_price') : null,
            maxInflationRate: array_key_exists('max_inflation_rate', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_inflation_rate'], array (
  'items' => 
  array (
    'format' => 'int32',
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'max_inflation_rate') : null,
            maxKickoutStakePerc: array_key_exists('max_kickout_stake_perc', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_kickout_stake_perc'], array (
  'format' => 'uint8',
  'maximum' => 255,
  'minimum' => 0,
  'type' => 'integer',
), 'max_kickout_stake_perc') : null,
            minGasPrice: array_key_exists('min_gas_price', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['min_gas_price'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'min_gas_price') : null,
            minimumStakeDivisor: array_key_exists('minimum_stake_divisor', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['minimum_stake_divisor'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'minimum_stake_divisor') : null,
            minimumStakeRatio: array_key_exists('minimum_stake_ratio', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['minimum_stake_ratio'], array (
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
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'minimum_validators_per_shard') : null,
            numBlockProducerSeats: array_key_exists('num_block_producer_seats', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['num_block_producer_seats'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'num_block_producer_seats') : null,
            numBlocksPerYear: array_key_exists('num_blocks_per_year', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['num_blocks_per_year'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'num_blocks_per_year') : null,
            onlineMaxThreshold: array_key_exists('online_max_threshold', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['online_max_threshold'], array (
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
  'items' => 
  array (
    'format' => 'int32',
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'online_min_threshold') : null,
            protocolRewardRate: array_key_exists('protocol_reward_rate', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['protocol_reward_rate'], array (
  'items' => 
  array (
    'format' => 'int32',
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'protocol_reward_rate') : null,
            protocolTreasuryAccount: array_key_exists('protocol_treasury_account', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['protocol_treasury_account'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'protocol_treasury_account') : null,
            protocolUpgradeStakeThreshold: array_key_exists('protocol_upgrade_stake_threshold', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['protocol_upgrade_stake_threshold'], array (
  'items' => 
  array (
    'format' => 'int32',
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'protocol_upgrade_stake_threshold') : null,
            protocolVersion: array_key_exists('protocol_version', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['protocol_version'], array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'protocol_version') : null,
            runtimeConfig: array_key_exists('runtime_config', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['runtime_config'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RuntimeConfigView',
  'nullable' => false,
), 'runtime_config') : null,
            shardLayout: array_key_exists('shard_layout', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['shard_layout'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardLayout',
  'nullable' => false,
), 'shard_layout') : null,
            shuffleShardAssignmentForChunkProducers: array_key_exists('shuffle_shard_assignment_for_chunk_producers', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['shuffle_shard_assignment_for_chunk_producers'], array (
  'type' => 'boolean',
), 'shuffle_shard_assignment_for_chunk_producers') : null,
            targetValidatorMandatesPerShard: array_key_exists('target_validator_mandates_per_shard', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['target_validator_mandates_per_shard'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'target_validator_mandates_per_shard') : null,
            transactionValidityPeriod: array_key_exists('transaction_validity_period', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['transaction_validity_period'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'transaction_validity_period') : null,
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
        if ($this->blockProducerKickoutThreshold !== null) $data['block_producer_kickout_threshold'] = $this->blockProducerKickoutThreshold;
        if ($this->chainId !== null) $data['chain_id'] = $this->chainId;
        if ($this->chunkProducerKickoutThreshold !== null) $data['chunk_producer_kickout_threshold'] = $this->chunkProducerKickoutThreshold;
        if ($this->chunkValidatorOnlyKickoutThreshold !== null) $data['chunk_validator_only_kickout_threshold'] = $this->chunkValidatorOnlyKickoutThreshold;
        if ($this->dynamicResharding !== null) $data['dynamic_resharding'] = $this->dynamicResharding;
        if ($this->epochLength !== null) $data['epoch_length'] = $this->epochLength;
        if ($this->fishermenThreshold !== null) $data['fishermen_threshold'] = $this->fishermenThreshold;
        if ($this->gasLimit !== null) $data['gas_limit'] = $this->gasLimit;
        if ($this->gasPriceAdjustmentRate !== null) $data['gas_price_adjustment_rate'] = $this->gasPriceAdjustmentRate;
        if ($this->genesisHeight !== null) $data['genesis_height'] = $this->genesisHeight;
        if ($this->genesisTime !== null) $data['genesis_time'] = $this->genesisTime;
        if ($this->maxGasPrice !== null) $data['max_gas_price'] = $this->maxGasPrice;
        if ($this->maxInflationRate !== null) $data['max_inflation_rate'] = $this->maxInflationRate;
        if ($this->maxKickoutStakePerc !== null) $data['max_kickout_stake_perc'] = $this->maxKickoutStakePerc;
        if ($this->minGasPrice !== null) $data['min_gas_price'] = $this->minGasPrice;
        if ($this->minimumStakeDivisor !== null) $data['minimum_stake_divisor'] = $this->minimumStakeDivisor;
        if ($this->minimumStakeRatio !== null) $data['minimum_stake_ratio'] = $this->minimumStakeRatio;
        if ($this->minimumValidatorsPerShard !== null) $data['minimum_validators_per_shard'] = $this->minimumValidatorsPerShard;
        if ($this->numBlockProducerSeats !== null) $data['num_block_producer_seats'] = $this->numBlockProducerSeats;
        if ($this->numBlocksPerYear !== null) $data['num_blocks_per_year'] = $this->numBlocksPerYear;
        if ($this->onlineMaxThreshold !== null) $data['online_max_threshold'] = $this->onlineMaxThreshold;
        if ($this->onlineMinThreshold !== null) $data['online_min_threshold'] = $this->onlineMinThreshold;
        if ($this->protocolRewardRate !== null) $data['protocol_reward_rate'] = $this->protocolRewardRate;
        if ($this->protocolTreasuryAccount !== null) $data['protocol_treasury_account'] = $this->protocolTreasuryAccount;
        if ($this->protocolUpgradeStakeThreshold !== null) $data['protocol_upgrade_stake_threshold'] = $this->protocolUpgradeStakeThreshold;
        if ($this->protocolVersion !== null) $data['protocol_version'] = $this->protocolVersion;
        if ($this->runtimeConfig !== null) $data['runtime_config'] = $this->runtimeConfig;
        if ($this->shardLayout !== null) $data['shard_layout'] = $this->shardLayout;
        if ($this->shuffleShardAssignmentForChunkProducers !== null) $data['shuffle_shard_assignment_for_chunk_producers'] = $this->shuffleShardAssignmentForChunkProducers;
        if ($this->targetValidatorMandatesPerShard !== null) $data['target_validator_mandates_per_shard'] = $this->targetValidatorMandatesPerShard;
        if ($this->transactionValidityPeriod !== null) $data['transaction_validity_period'] = $this->transactionValidityPeriod;
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
    'chunk_producer_kickout_threshold' => 
    array (
      'format' => 'uint8',
      'maximum' => 255,
      'minimum' => 0,
      'type' => 'integer',
    ),
    'chunk_validator_only_kickout_threshold' => 
    array (
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
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'minimum_stake_ratio' => 
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
    'minimum_validators_per_shard' => 
    array (
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
    'online_max_threshold' => 
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
    'online_min_threshold' => 
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
    'runtime_config' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RuntimeConfigView',
      'nullable' => false,
    ),
    'shard_layout' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardLayout',
      'nullable' => false,
    ),
    'shuffle_shard_assignment_for_chunk_producers' => 
    array (
      'type' => 'boolean',
    ),
    'target_validator_mandates_per_shard' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'transaction_validity_period' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'RpcProtocolConfigResponse'));
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
    'chunk_producer_kickout_threshold' => 
    array (
      'format' => 'uint8',
      'maximum' => 255,
      'minimum' => 0,
      'type' => 'integer',
    ),
    'chunk_validator_only_kickout_threshold' => 
    array (
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
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'minimum_stake_ratio' => 
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
    'minimum_validators_per_shard' => 
    array (
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
    'online_max_threshold' => 
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
    'online_min_threshold' => 
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
    'runtime_config' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RuntimeConfigView',
      'nullable' => false,
    ),
    'shard_layout' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardLayout',
      'nullable' => false,
    ),
    'shuffle_shard_assignment_for_chunk_producers' => 
    array (
      'type' => 'boolean',
    ),
    'target_validator_mandates_per_shard' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'transaction_validity_period' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'RpcProtocolConfigResponse');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
