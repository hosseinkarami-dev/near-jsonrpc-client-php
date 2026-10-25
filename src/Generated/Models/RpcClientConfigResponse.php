<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * ClientConfig where some fields can be updated at runtime.
 */
final readonly class RpcClientConfigResponse implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * Not clear old data, set `true` for archive nodes.
         *
         * @var bool|null
         */
        public bool|null $archive = null,
        /**
         * Behind this horizon header fetch kicks in.
         *
         * @var int|string|null
         */
        public int|string|null $blockHeaderFetchHorizon = null,
        /**
         * Duration to check for producing / skipping block.
         *
         * @var \Near\JsonRpc\Generated\Models\MutableConfigValue|null
         */
        public \Near\JsonRpc\Generated\Models\MutableConfigValue|null $blockProductionTrackingDelay = null,
        /**
         * How long to wait for a state sync block request response
         *
         * @var list<int|string>|null
         */
        public array|null $blockRequestTimeout = null,
        /**
         * Time between check to perform catchup.
         *
         * @var list<int|string>|null
         */
        public array|null $catchupStepPeriod = null,
        /**
         * Chain id for status.
         *
         * @var string|null
         */
        public string|null $chainId = null,
        /**
         * Optional config for the Chunk Distribution Network feature.
         * If set to `None` then this node does not participate in the Chunk Distribution Network.
         * Nodes not participating will still function fine, but possibly with higher
         * latency due to the need of requesting chunks over the peer-to-peer network.
         *
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\ChunkDistributionNetworkConfig|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $chunkDistributionNetwork = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * Time between checking to re-request chunks.
         *
         * @var list<int|string>|null
         */
        public array|null $chunkRequestRetryPeriod = null,
        /**
         * Number of threads for ChunkValidationActor pool.
         *
         * @var int|string|null
         */
        public int|string|null $chunkValidationThreads = null,
        /**
         * Multiplier for the wait time for all chunks to be received.
         *
         * @var \Near\JsonRpc\Generated\Models\MutableConfigValue|null
         */
        public \Near\JsonRpc\Generated\Models\MutableConfigValue|null $chunkWaitMult = null,
        /**
         * Height horizon for the chunk cache. A chunk is removed from the cache
         * if its height + chunks_cache_height_horizon < largest_seen_height.
         * The default value is given by default_chunks_cache_height_horizon().
         *
         * @var int|string|null
         */
        public int|string|null $chunksCacheHeightHorizon = null,
        /**
         * Number of threads to execute background migration work in client.
         *
         * @var int|string|null
         */
        public int|string|null $clientBackgroundMigrationThreads = null,
        /**
         * Configuration for a cloud-based archival writer. If this config is present, the writer is enabled and
         * writes chunk-related data based on the tracked shards.
         *
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\CloudArchivalWriterConfig|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $cloudArchivalWriter = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * If true, the node won't forward transactions to next the chunk producers.
         *
         * @var bool|null
         */
        public bool|null $disableTxRouting = null,
        /**
         * Time between running doomslug timer.
         *
         * @var \Near\JsonRpc\Generated\Models\MutableConfigValue|null
         */
        public \Near\JsonRpc\Generated\Models\MutableConfigValue|null $doomslugStepPeriod = null,
        /**
         * If true, transactions for the next chunk will be prepared early, right after the previous chunk's
         * post-state is ready. This can help produce chunks faster, for high-throughput chains.
         * The current implementation increases latency on low-load chains, which will be fixed in the future.
         * The default is disabled.
         *
         * @var bool|null
         */
        public bool|null $enableEarlyPrepareTransactions = null,
        /**
         * @var bool|null
         */
        public bool|null $enableMultilineLogging = null,
        /**
         * Re-export storage layer statistics as prometheus metrics.
         *
         * @var bool|null
         */
        public bool|null $enableStatisticsExport = null,
        /**
         * Epoch length.
         *
         * @var int|string|null
         */
        public int|string|null $epochLength = null,
        /**
         * Options for epoch sync.
         *
         * @var \Near\JsonRpc\Generated\Models\EpochSyncConfig|null
         */
        public \Near\JsonRpc\Generated\Models\EpochSyncConfig|null $epochSync = null,
        /**
         * Graceful shutdown at expected block height.
         *
         * @var \Near\JsonRpc\Generated\Models\MutableConfigValue|null
         */
        public \Near\JsonRpc\Generated\Models\MutableConfigValue|null $expectedShutdown = null,
        /**
         * Garbage collection configuration.
         *
         * @var \Near\JsonRpc\Generated\Models\GcConfig|null
         */
        public \Near\JsonRpc\Generated\Models\GcConfig|null $gc = null,
        /**
         * Expected increase of header head height per second during header sync
         *
         * @var int|string|null
         */
        public int|string|null $headerSyncExpectedHeightPerSecond = null,
        /**
         * How much time to wait after initial header sync
         *
         * @var list<int|string>|null
         */
        public array|null $headerSyncInitialTimeout = null,
        /**
         * How much time to wait after some progress is made in header sync
         *
         * @var list<int|string>|null
         */
        public array|null $headerSyncProgressTimeout = null,
        /**
         * How much time to wait before banning a peer in header sync if sync is too slow
         *
         * @var list<int|string>|null
         */
        public array|null $headerSyncStallBanTimeout = null,
        /**
         * Period between logging summary information.
         *
         * @var list<int|string>|null
         */
        public array|null $logSummaryPeriod = null,
        /**
         * Enable coloring of the logs
         *
         * @var \Near\JsonRpc\Generated\Models\LogSummaryStyle|null
         */
        public \Near\JsonRpc\Generated\Models\LogSummaryStyle|null $logSummaryStyle = null,
        /**
         * Maximum wait for approvals before producing block.
         *
         * @var \Near\JsonRpc\Generated\Models\MutableConfigValue|null
         */
        public \Near\JsonRpc\Generated\Models\MutableConfigValue|null $maxBlockProductionDelay = null,
        /**
         * Maximum duration before skipping given height.
         *
         * @var \Near\JsonRpc\Generated\Models\MutableConfigValue|null
         */
        public \Near\JsonRpc\Generated\Models\MutableConfigValue|null $maxBlockWaitDelay = null,
        /**
         * Max burnt gas per view method.  If present, overrides value stored in
         * genesis file.  The value only affects the RPCs without influencing the
         * protocol thus changing it per-node doesn’t affect the blockchain.
         *
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\NearGas|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $maxGasBurntView = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * Minimum duration before producing block.
         *
         * @var \Near\JsonRpc\Generated\Models\MutableConfigValue|null
         */
        public \Near\JsonRpc\Generated\Models\MutableConfigValue|null $minBlockProductionDelay = null,
        /**
         * Minimum number of peers to start syncing.
         *
         * @var int|string|null
         */
        public int|string|null $minNumPeers = null,
        /**
         * Number of block producer seats
         *
         * @var int|string|null
         */
        public int|string|null $numBlockProducerSeats = null,
        /**
         * Maximum size of state witnesses in the OrphanStateWitnessPool.
         *
         * We keep only orphan witnesses which are smaller than this size.
         * This limits the maximum memory usage of OrphanStateWitnessPool.
         *
         * @var int|string|null
         */
        public int|string|null $orphanStateWitnessMaxSize = null,
        /**
         * OrphanStateWitnessPool keeps instances of ChunkStateWitness which can't be processed
         * because the previous block isn't available. The witnesses wait in the pool until the
         * required block appears. This variable controls how many witnesses can be stored in the pool.
         *
         * @var int|string|null
         */
        public int|string|null $orphanStateWitnessPoolSize = null,
        /**
         * Limit the time of adding transactions to a chunk.
         * A node produces a chunk by adding transactions from the transaction pool until
         * some limit is reached. This time limit ensures that adding transactions won't take
         * longer than the specified duration, which helps to produce the chunk quickly.
         *
         * @var string|null
         */
        public string|null $produceChunkAddTransactionsTimeLimit = null,
        /**
         * Produce empty blocks, use `false` for testing.
         *
         * @var bool|null
         */
        public bool|null $produceEmptyBlocks = null,
        /**
         * Determines whether client should exit if the protocol version is not supported
         * for the next or next next epoch.
         *
         * @var \Near\JsonRpc\Generated\Models\ProtocolVersionCheckConfig|null
         */
        public \Near\JsonRpc\Generated\Models\ProtocolVersionCheckConfig|null $protocolVersionCheck = null,
        /**
         * Max `±window` accepted on `EXPERIMENTAL_receipt_to_tx` requests.
         * Caps caller's `window`. Applies to pre-first-scan `CenterOut`
         * against caller's literal hint; ancestor scans use
         * `receipt_to_tx_max_hop_distance` instead. Operators raising this
         * should also raise `receipt_to_tx_max_hop_distance` so backward reach
         * matches caller's wider hint scope. Requests with `window` over this
         * rejected with `WindowTooLarge`.
         *
         * @var int|string|null
         */
        public int|string|null $receiptToTxMaxHintWindow = null,
        /**
         * Max block-distance ancestor scan walks per hop once any scan in
         * walk refreshed `current_height`. Subsequent column-miss scans visit
         * `h, h-1, ..., h-max_hop_distance` from most-recent scan-refreshed
         * anchor, regardless of column hits between. Anchor included —
         * same-shard local receipts execute in same block as producing
         * outcome. Raise if cold archival traffic shows ancestor misses —
         * gap = scan-refreshed anchor to producer-outcome height of receipt
         * with missing column row (column hits don't reset anchor). Default
         * 20 (matches `receipt_to_tx_max_hint_window`).
         *
         * @var int|string|null
         */
        public int|string|null $receiptToTxMaxHopDistance = null,
        /**
         * Per-request ceiling on outcome rows the `EXPERIMENTAL_receipt_to_tx`
         * hint-fallback scanner reads across hops + shards. Caps cold-RocksDB
         * worst case on unauthenticated public endpoint. Default 20_000.
         * Operators serving cold archival traffic with deep walks or sparse
         * outcomes may raise; benchmark first (see TODO in
         * `view_client_actor.rs`). Mid-scan exhaustion fails with
         * `BudgetExceeded { scanned, limit }`.
         *
         * @var int|string|null
         */
        public int|string|null $receiptToTxMaxOutcomesPerRequest = null,
        /**
         * @var \Near\JsonRpc\Generated\Models\MutableConfigValue|null
         */
        public \Near\JsonRpc\Generated\Models\MutableConfigValue|null $reshardingConfig = null,
        /**
         * Listening rpc port for status.
         *
         * @var \Near\JsonRpc\Models\OptionalValue<string|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $rpcAddr = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * Save observed instances of invalid ChunkStateWitness to the database in DBCol::InvalidChunkStateWitnesses.
         * Saving invalid witnesses is useful for analysis and debugging.
         * This option can cause extra load on the database and is not recommended for production use.
         *
         * @var bool|null
         */
        public bool|null $saveInvalidWitnesses = null,
        /**
         * Save observed instances of ChunkStateWitness to the database in DBCol::LatestChunkStateWitnesses.
         * Saving the latest witnesses is useful for analysis and debugging.
         * This option can cause extra load on the database and is not recommended for production use.
         *
         * @var bool|null
         */
        public bool|null $saveLatestWitnesses = null,
        /**
         * Whether to persist receipt-to-tx origin mappings to disk or not.
         *
         * @var bool|null
         */
        public bool|null $saveReceiptToTx = null,
        /**
         * Whether to persist state changes on disk or not.
         *
         * @var bool|null
         */
        public bool|null $saveStateChanges = null,
        /**
         * save_trie_changes should be set to true iff
         * - archive if false - non-archival nodes need trie changes to perform garbage collection
         * - archive is true, cold_store is configured and migration to split_storage is finished - node
         * working in split storage mode needs trie changes in order to do garbage collection on hot.
         *
         * @var bool|null
         */
        public bool|null $saveTrieChanges = null,
        /**
         * Whether to persist transaction outcomes to disk or not.
         *
         * @var bool|null
         */
        public bool|null $saveTxOutcomes = null,
        /**
         * Whether to persist partial chunk parts for untracked shards or not.
         *
         * @var bool|null
         */
        public bool|null $saveUntrackedPartialChunksParts = null,
        /**
         * Skip waiting for sync (for testing or single node testnet).
         *
         * @var bool|null
         */
        public bool|null $skipSyncWait = null,
        /**
         * Number of threads for StateRequestActor pool.
         *
         * @var int|string|null
         */
        public int|string|null $stateRequestServerThreads = null,
        /**
         * Number of seconds between state requests for view client.
         * Throttling window for state requests (headers and parts).
         *
         * @var list<int|string>|null
         */
        public array|null $stateRequestThrottlePeriod = null,
        /**
         * Maximum number of state requests served per throttle period
         *
         * @var int|string|null
         */
        public int|string|null $stateRequestsPerThrottlePeriod = null,
        /**
         * Options for syncing state.
         *
         * @var \Near\JsonRpc\Generated\Models\StateSyncConfig|null
         */
        public \Near\JsonRpc\Generated\Models\StateSyncConfig|null $stateSync = null,
        /**
         * How long to wait for a response from p2p state sync
         *
         * @var list<int|string>|null
         */
        public array|null $stateSyncP2pTimeout = null,
        /**
         * How long to wait after a failed state sync request
         *
         * @var list<int|string>|null
         */
        public array|null $stateSyncRetryBackoff = null,
        /**
         * How often to check that we are not out of sync.
         *
         * @var list<int|string>|null
         */
        public array|null $syncCheckPeriod = null,
        /**
         * Sync height threshold: below this difference in height don't start syncing.
         *
         * @var int|string|null
         */
        public int|string|null $syncHeightThreshold = null,
        /**
         * Maximum number of block requests to send to peers to sync
         *
         * @var int|string|null
         */
        public int|string|null $syncMaxBlockRequests = null,
        /**
         * While syncing, how long to check for each step.
         *
         * @var list<int|string>|null
         */
        public array|null $syncStepPeriod = null,
        /**
         * @var \Near\JsonRpc\Generated\Models\TrackedShardsConfig|null
         */
        public \Near\JsonRpc\Generated\Models\TrackedShardsConfig|null $trackedShardsConfig = null,
        /**
         * Limit of the size of per-shard transaction pool measured in bytes. If not set, the size
         * will be unbounded.
         *
         * @var \Near\JsonRpc\Models\OptionalValue<int|string|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $transactionPoolSizeLimit = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * TTL in blocks for gapped strict-nonce transactions in the pool. Transactions with a
         * nonce gap whose block_hash is older than this many blocks are evicted during
         * prepare_transactions.
         *
         * @var int|string|null
         */
        public int|string|null $transactionPoolStrictNonceTtlBlocks = null,
        /**
         * @var int|string|null
         */
        public int|string|null $transactionRequestHandlerThreads = null,
        /**
         * Upper bound of the byte size of contract state that is still viewable. None is no limit
         *
         * @var \Near\JsonRpc\Models\OptionalValue<int|string|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $trieViewerStateSizeLimit = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * If the node is not a chunk producer within that many blocks, then route
         * to upcoming chunk producers.
         *
         * @var int|string|null
         */
        public int|string|null $txRoutingHeightHorizon = null,
        /**
         * Version of the binary.
         *
         * @var \Near\JsonRpc\Generated\Models\Version|null
         */
        public \Near\JsonRpc\Generated\Models\Version|null $version = null,
        /**
         * Upper bound on the number of access keys returned by a `view_access_key_list`
         * query.
         *
         * @var int|null
         */
        public int|null $viewAccessKeysLimit = null,
        /**
         * Number of threads for ViewClientActor pool.
         *
         * @var int|string|null
         */
        public int|string|null $viewClientThreads = null,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        if ($this->archive !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->archive, array (
  'type' => 'boolean',
), 'archive');
        if ($this->blockHeaderFetchHorizon !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->blockHeaderFetchHorizon, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'block_header_fetch_horizon');
        if ($this->blockProductionTrackingDelay !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->blockProductionTrackingDelay, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MutableConfigValue',
  'nullable' => false,
), 'block_production_tracking_delay');
        if ($this->blockRequestTimeout !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->blockRequestTimeout, array (
  'items' => 
  array (
    'format' => 'uint64',
    'minimum' => 0,
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'block_request_timeout');
        if ($this->catchupStepPeriod !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->catchupStepPeriod, array (
  'items' => 
  array (
    'format' => 'uint64',
    'minimum' => 0,
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'catchup_step_period');
        if ($this->chainId !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->chainId, array (
  'type' => 'string',
), 'chain_id');
        if ($this->chunkDistributionNetwork->present) \Near\JsonRpc\Models\TypeGuard::assert($this->chunkDistributionNetwork->value, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ChunkDistributionNetworkConfig',
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
), 'chunk_distribution_network');
        if ($this->chunkRequestRetryPeriod !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->chunkRequestRetryPeriod, array (
  'items' => 
  array (
    'format' => 'uint64',
    'minimum' => 0,
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'chunk_request_retry_period');
        if ($this->chunkValidationThreads !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->chunkValidationThreads, array (
  'format' => 'uint',
  'minimum' => 0,
  'type' => 'integer',
), 'chunk_validation_threads');
        if ($this->chunkWaitMult !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->chunkWaitMult, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MutableConfigValue',
  'nullable' => false,
), 'chunk_wait_mult');
        if ($this->chunksCacheHeightHorizon !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->chunksCacheHeightHorizon, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'chunks_cache_height_horizon');
        if ($this->clientBackgroundMigrationThreads !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->clientBackgroundMigrationThreads, array (
  'format' => 'uint',
  'minimum' => 0,
  'type' => 'integer',
), 'client_background_migration_threads');
        if ($this->cloudArchivalWriter->present) \Near\JsonRpc\Models\TypeGuard::assert($this->cloudArchivalWriter->value, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CloudArchivalWriterConfig',
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
), 'cloud_archival_writer');
        if ($this->disableTxRouting !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->disableTxRouting, array (
  'type' => 'boolean',
), 'disable_tx_routing');
        if ($this->doomslugStepPeriod !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->doomslugStepPeriod, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MutableConfigValue',
  'nullable' => false,
), 'doomslug_step_period');
        if ($this->enableEarlyPrepareTransactions !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->enableEarlyPrepareTransactions, array (
  'type' => 'boolean',
), 'enable_early_prepare_transactions');
        if ($this->enableMultilineLogging !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->enableMultilineLogging, array (
  'type' => 'boolean',
), 'enable_multiline_logging');
        if ($this->enableStatisticsExport !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->enableStatisticsExport, array (
  'type' => 'boolean',
), 'enable_statistics_export');
        if ($this->epochLength !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->epochLength, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'epoch_length');
        if ($this->epochSync !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->epochSync, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\EpochSyncConfig',
  'nullable' => false,
), 'epoch_sync');
        if ($this->expectedShutdown !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->expectedShutdown, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MutableConfigValue',
  'nullable' => false,
), 'expected_shutdown');
        if ($this->gc !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->gc, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GcConfig',
  'nullable' => false,
), 'gc');
        if ($this->headerSyncExpectedHeightPerSecond !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->headerSyncExpectedHeightPerSecond, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'header_sync_expected_height_per_second');
        if ($this->headerSyncInitialTimeout !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->headerSyncInitialTimeout, array (
  'items' => 
  array (
    'format' => 'uint64',
    'minimum' => 0,
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'header_sync_initial_timeout');
        if ($this->headerSyncProgressTimeout !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->headerSyncProgressTimeout, array (
  'items' => 
  array (
    'format' => 'uint64',
    'minimum' => 0,
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'header_sync_progress_timeout');
        if ($this->headerSyncStallBanTimeout !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->headerSyncStallBanTimeout, array (
  'items' => 
  array (
    'format' => 'uint64',
    'minimum' => 0,
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'header_sync_stall_ban_timeout');
        if ($this->logSummaryPeriod !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->logSummaryPeriod, array (
  'items' => 
  array (
    'format' => 'uint64',
    'minimum' => 0,
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'log_summary_period');
        if ($this->logSummaryStyle !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->logSummaryStyle, array (
  'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\LogSummaryStyle',
  'nullable' => false,
), 'log_summary_style');
        if ($this->maxBlockProductionDelay !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxBlockProductionDelay, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MutableConfigValue',
  'nullable' => false,
), 'max_block_production_delay');
        if ($this->maxBlockWaitDelay !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxBlockWaitDelay, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MutableConfigValue',
  'nullable' => false,
), 'max_block_wait_delay');
        if ($this->maxGasBurntView->present) \Near\JsonRpc\Models\TypeGuard::assert($this->maxGasBurntView->value, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
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
), 'max_gas_burnt_view');
        if ($this->minBlockProductionDelay !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->minBlockProductionDelay, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MutableConfigValue',
  'nullable' => false,
), 'min_block_production_delay');
        if ($this->minNumPeers !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->minNumPeers, array (
  'format' => 'uint',
  'minimum' => 0,
  'type' => 'integer',
), 'min_num_peers');
        if ($this->numBlockProducerSeats !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->numBlockProducerSeats, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'num_block_producer_seats');
        if ($this->orphanStateWitnessMaxSize !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->orphanStateWitnessMaxSize, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'orphan_state_witness_max_size');
        if ($this->orphanStateWitnessPoolSize !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->orphanStateWitnessPoolSize, array (
  'format' => 'uint',
  'minimum' => 0,
  'type' => 'integer',
), 'orphan_state_witness_pool_size');
        if ($this->produceChunkAddTransactionsTimeLimit !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->produceChunkAddTransactionsTimeLimit, array (
  'type' => 'string',
), 'produce_chunk_add_transactions_time_limit');
        if ($this->produceEmptyBlocks !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->produceEmptyBlocks, array (
  'type' => 'boolean',
), 'produce_empty_blocks');
        if ($this->protocolVersionCheck !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->protocolVersionCheck, array (
  'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\ProtocolVersionCheckConfig',
  'nullable' => false,
), 'protocol_version_check');
        if ($this->receiptToTxMaxHintWindow !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->receiptToTxMaxHintWindow, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'receipt_to_tx_max_hint_window');
        if ($this->receiptToTxMaxHopDistance !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->receiptToTxMaxHopDistance, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'receipt_to_tx_max_hop_distance');
        if ($this->receiptToTxMaxOutcomesPerRequest !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->receiptToTxMaxOutcomesPerRequest, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'receipt_to_tx_max_outcomes_per_request');
        if ($this->reshardingConfig !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->reshardingConfig, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MutableConfigValue',
  'nullable' => false,
), 'resharding_config');
        if ($this->rpcAddr->present) \Near\JsonRpc\Models\TypeGuard::assert($this->rpcAddr->value, array (
  'nullable' => true,
  'type' => 'string',
), 'rpc_addr');
        if ($this->saveInvalidWitnesses !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->saveInvalidWitnesses, array (
  'type' => 'boolean',
), 'save_invalid_witnesses');
        if ($this->saveLatestWitnesses !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->saveLatestWitnesses, array (
  'type' => 'boolean',
), 'save_latest_witnesses');
        if ($this->saveReceiptToTx !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->saveReceiptToTx, array (
  'type' => 'boolean',
), 'save_receipt_to_tx');
        if ($this->saveStateChanges !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->saveStateChanges, array (
  'type' => 'boolean',
), 'save_state_changes');
        if ($this->saveTrieChanges !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->saveTrieChanges, array (
  'type' => 'boolean',
), 'save_trie_changes');
        if ($this->saveTxOutcomes !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->saveTxOutcomes, array (
  'type' => 'boolean',
), 'save_tx_outcomes');
        if ($this->saveUntrackedPartialChunksParts !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->saveUntrackedPartialChunksParts, array (
  'type' => 'boolean',
), 'save_untracked_partial_chunks_parts');
        if ($this->skipSyncWait !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->skipSyncWait, array (
  'type' => 'boolean',
), 'skip_sync_wait');
        if ($this->stateRequestServerThreads !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->stateRequestServerThreads, array (
  'format' => 'uint',
  'minimum' => 0,
  'type' => 'integer',
), 'state_request_server_threads');
        if ($this->stateRequestThrottlePeriod !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->stateRequestThrottlePeriod, array (
  'items' => 
  array (
    'format' => 'uint64',
    'minimum' => 0,
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'state_request_throttle_period');
        if ($this->stateRequestsPerThrottlePeriod !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->stateRequestsPerThrottlePeriod, array (
  'format' => 'uint',
  'minimum' => 0,
  'type' => 'integer',
), 'state_requests_per_throttle_period');
        if ($this->stateSync !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->stateSync, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateSyncConfig',
  'nullable' => false,
), 'state_sync');
        if ($this->stateSyncP2pTimeout !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->stateSyncP2pTimeout, array (
  'items' => 
  array (
    'format' => 'uint64',
    'minimum' => 0,
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'state_sync_p2p_timeout');
        if ($this->stateSyncRetryBackoff !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->stateSyncRetryBackoff, array (
  'items' => 
  array (
    'format' => 'uint64',
    'minimum' => 0,
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'state_sync_retry_backoff');
        if ($this->syncCheckPeriod !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->syncCheckPeriod, array (
  'items' => 
  array (
    'format' => 'uint64',
    'minimum' => 0,
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'sync_check_period');
        if ($this->syncHeightThreshold !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->syncHeightThreshold, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'sync_height_threshold');
        if ($this->syncMaxBlockRequests !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->syncMaxBlockRequests, array (
  'format' => 'uint',
  'minimum' => 0,
  'type' => 'integer',
), 'sync_max_block_requests');
        if ($this->syncStepPeriod !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->syncStepPeriod, array (
  'items' => 
  array (
    'format' => 'uint64',
    'minimum' => 0,
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'sync_step_period');
        if ($this->trackedShardsConfig !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->trackedShardsConfig, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TrackedShardsConfig',
  'nullable' => false,
), 'tracked_shards_config');
        if ($this->transactionPoolSizeLimit->present) \Near\JsonRpc\Models\TypeGuard::assert($this->transactionPoolSizeLimit->value, array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'transaction_pool_size_limit');
        if ($this->transactionPoolStrictNonceTtlBlocks !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->transactionPoolStrictNonceTtlBlocks, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'transaction_pool_strict_nonce_ttl_blocks');
        if ($this->transactionRequestHandlerThreads !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->transactionRequestHandlerThreads, array (
  'format' => 'uint',
  'minimum' => 0,
  'type' => 'integer',
), 'transaction_request_handler_threads');
        if ($this->trieViewerStateSizeLimit->present) \Near\JsonRpc\Models\TypeGuard::assert($this->trieViewerStateSizeLimit->value, array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'trie_viewer_state_size_limit');
        if ($this->txRoutingHeightHorizon !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->txRoutingHeightHorizon, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'tx_routing_height_horizon');
        if ($this->version !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->version, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Version',
  'nullable' => false,
), 'version');
        if ($this->viewAccessKeysLimit !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->viewAccessKeysLimit, array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'view_access_keys_limit');
        if ($this->viewClientThreads !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->viewClientThreads, array (
  'format' => 'uint',
  'minimum' => 0,
  'type' => 'integer',
), 'view_client_threads');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcClientConfigResponse.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        $extra = array_diff_key($data, array (
  'archive' => true,
  'block_header_fetch_horizon' => true,
  'block_production_tracking_delay' => true,
  'block_request_timeout' => true,
  'catchup_step_period' => true,
  'chain_id' => true,
  'chunk_distribution_network' => true,
  'chunk_request_retry_period' => true,
  'chunk_validation_threads' => true,
  'chunk_wait_mult' => true,
  'chunks_cache_height_horizon' => true,
  'client_background_migration_threads' => true,
  'cloud_archival_writer' => true,
  'disable_tx_routing' => true,
  'doomslug_step_period' => true,
  'enable_early_prepare_transactions' => true,
  'enable_multiline_logging' => true,
  'enable_statistics_export' => true,
  'epoch_length' => true,
  'epoch_sync' => true,
  'expected_shutdown' => true,
  'gc' => true,
  'header_sync_expected_height_per_second' => true,
  'header_sync_initial_timeout' => true,
  'header_sync_progress_timeout' => true,
  'header_sync_stall_ban_timeout' => true,
  'log_summary_period' => true,
  'log_summary_style' => true,
  'max_block_production_delay' => true,
  'max_block_wait_delay' => true,
  'max_gas_burnt_view' => true,
  'min_block_production_delay' => true,
  'min_num_peers' => true,
  'num_block_producer_seats' => true,
  'orphan_state_witness_max_size' => true,
  'orphan_state_witness_pool_size' => true,
  'produce_chunk_add_transactions_time_limit' => true,
  'produce_empty_blocks' => true,
  'protocol_version_check' => true,
  'receipt_to_tx_max_hint_window' => true,
  'receipt_to_tx_max_hop_distance' => true,
  'receipt_to_tx_max_outcomes_per_request' => true,
  'resharding_config' => true,
  'rpc_addr' => true,
  'save_invalid_witnesses' => true,
  'save_latest_witnesses' => true,
  'save_receipt_to_tx' => true,
  'save_state_changes' => true,
  'save_trie_changes' => true,
  'save_tx_outcomes' => true,
  'save_untracked_partial_chunks_parts' => true,
  'skip_sync_wait' => true,
  'state_request_server_threads' => true,
  'state_request_throttle_period' => true,
  'state_requests_per_throttle_period' => true,
  'state_sync' => true,
  'state_sync_p2p_timeout' => true,
  'state_sync_retry_backoff' => true,
  'sync_check_period' => true,
  'sync_height_threshold' => true,
  'sync_max_block_requests' => true,
  'sync_step_period' => true,
  'tracked_shards_config' => true,
  'transaction_pool_size_limit' => true,
  'transaction_pool_strict_nonce_ttl_blocks' => true,
  'transaction_request_handler_threads' => true,
  'trie_viewer_state_size_limit' => true,
  'tx_routing_height_horizon' => true,
  'version' => true,
  'view_access_keys_limit' => true,
  'view_client_threads' => true,
));
        return new self(
            archive: array_key_exists('archive', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['archive'], array (
  'type' => 'boolean',
), 'archive') : null,
            blockHeaderFetchHorizon: array_key_exists('block_header_fetch_horizon', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['block_header_fetch_horizon'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'block_header_fetch_horizon') : null,
            blockProductionTrackingDelay: array_key_exists('block_production_tracking_delay', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['block_production_tracking_delay'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MutableConfigValue',
  'nullable' => false,
), 'block_production_tracking_delay') : null,
            blockRequestTimeout: array_key_exists('block_request_timeout', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['block_request_timeout'], array (
  'items' => 
  array (
    'format' => 'uint64',
    'minimum' => 0,
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'block_request_timeout') : null,
            catchupStepPeriod: array_key_exists('catchup_step_period', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['catchup_step_period'], array (
  'items' => 
  array (
    'format' => 'uint64',
    'minimum' => 0,
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'catchup_step_period') : null,
            chainId: array_key_exists('chain_id', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['chain_id'], array (
  'type' => 'string',
), 'chain_id') : null,
            chunkDistributionNetwork: array_key_exists('chunk_distribution_network', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['chunk_distribution_network'], array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ChunkDistributionNetworkConfig',
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
), 'chunk_distribution_network')) : new \Near\JsonRpc\Models\OptionalValue(),
            chunkRequestRetryPeriod: array_key_exists('chunk_request_retry_period', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['chunk_request_retry_period'], array (
  'items' => 
  array (
    'format' => 'uint64',
    'minimum' => 0,
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'chunk_request_retry_period') : null,
            chunkValidationThreads: array_key_exists('chunk_validation_threads', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['chunk_validation_threads'], array (
  'format' => 'uint',
  'minimum' => 0,
  'type' => 'integer',
), 'chunk_validation_threads') : null,
            chunkWaitMult: array_key_exists('chunk_wait_mult', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['chunk_wait_mult'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MutableConfigValue',
  'nullable' => false,
), 'chunk_wait_mult') : null,
            chunksCacheHeightHorizon: array_key_exists('chunks_cache_height_horizon', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['chunks_cache_height_horizon'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'chunks_cache_height_horizon') : null,
            clientBackgroundMigrationThreads: array_key_exists('client_background_migration_threads', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['client_background_migration_threads'], array (
  'format' => 'uint',
  'minimum' => 0,
  'type' => 'integer',
), 'client_background_migration_threads') : null,
            cloudArchivalWriter: array_key_exists('cloud_archival_writer', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['cloud_archival_writer'], array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CloudArchivalWriterConfig',
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
), 'cloud_archival_writer')) : new \Near\JsonRpc\Models\OptionalValue(),
            disableTxRouting: array_key_exists('disable_tx_routing', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['disable_tx_routing'], array (
  'type' => 'boolean',
), 'disable_tx_routing') : null,
            doomslugStepPeriod: array_key_exists('doomslug_step_period', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['doomslug_step_period'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MutableConfigValue',
  'nullable' => false,
), 'doomslug_step_period') : null,
            enableEarlyPrepareTransactions: array_key_exists('enable_early_prepare_transactions', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['enable_early_prepare_transactions'], array (
  'type' => 'boolean',
), 'enable_early_prepare_transactions') : null,
            enableMultilineLogging: array_key_exists('enable_multiline_logging', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['enable_multiline_logging'], array (
  'type' => 'boolean',
), 'enable_multiline_logging') : null,
            enableStatisticsExport: array_key_exists('enable_statistics_export', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['enable_statistics_export'], array (
  'type' => 'boolean',
), 'enable_statistics_export') : null,
            epochLength: array_key_exists('epoch_length', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['epoch_length'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'epoch_length') : null,
            epochSync: array_key_exists('epoch_sync', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['epoch_sync'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\EpochSyncConfig',
  'nullable' => false,
), 'epoch_sync') : null,
            expectedShutdown: array_key_exists('expected_shutdown', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['expected_shutdown'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MutableConfigValue',
  'nullable' => false,
), 'expected_shutdown') : null,
            gc: array_key_exists('gc', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['gc'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GcConfig',
  'nullable' => false,
), 'gc') : null,
            headerSyncExpectedHeightPerSecond: array_key_exists('header_sync_expected_height_per_second', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['header_sync_expected_height_per_second'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'header_sync_expected_height_per_second') : null,
            headerSyncInitialTimeout: array_key_exists('header_sync_initial_timeout', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['header_sync_initial_timeout'], array (
  'items' => 
  array (
    'format' => 'uint64',
    'minimum' => 0,
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'header_sync_initial_timeout') : null,
            headerSyncProgressTimeout: array_key_exists('header_sync_progress_timeout', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['header_sync_progress_timeout'], array (
  'items' => 
  array (
    'format' => 'uint64',
    'minimum' => 0,
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'header_sync_progress_timeout') : null,
            headerSyncStallBanTimeout: array_key_exists('header_sync_stall_ban_timeout', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['header_sync_stall_ban_timeout'], array (
  'items' => 
  array (
    'format' => 'uint64',
    'minimum' => 0,
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'header_sync_stall_ban_timeout') : null,
            logSummaryPeriod: array_key_exists('log_summary_period', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['log_summary_period'], array (
  'items' => 
  array (
    'format' => 'uint64',
    'minimum' => 0,
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'log_summary_period') : null,
            logSummaryStyle: array_key_exists('log_summary_style', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['log_summary_style'], array (
  'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\LogSummaryStyle',
  'nullable' => false,
), 'log_summary_style') : null,
            maxBlockProductionDelay: array_key_exists('max_block_production_delay', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_block_production_delay'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MutableConfigValue',
  'nullable' => false,
), 'max_block_production_delay') : null,
            maxBlockWaitDelay: array_key_exists('max_block_wait_delay', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_block_wait_delay'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MutableConfigValue',
  'nullable' => false,
), 'max_block_wait_delay') : null,
            maxGasBurntView: array_key_exists('max_gas_burnt_view', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_gas_burnt_view'], array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
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
), 'max_gas_burnt_view')) : new \Near\JsonRpc\Models\OptionalValue(),
            minBlockProductionDelay: array_key_exists('min_block_production_delay', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['min_block_production_delay'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MutableConfigValue',
  'nullable' => false,
), 'min_block_production_delay') : null,
            minNumPeers: array_key_exists('min_num_peers', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['min_num_peers'], array (
  'format' => 'uint',
  'minimum' => 0,
  'type' => 'integer',
), 'min_num_peers') : null,
            numBlockProducerSeats: array_key_exists('num_block_producer_seats', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['num_block_producer_seats'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'num_block_producer_seats') : null,
            orphanStateWitnessMaxSize: array_key_exists('orphan_state_witness_max_size', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['orphan_state_witness_max_size'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'orphan_state_witness_max_size') : null,
            orphanStateWitnessPoolSize: array_key_exists('orphan_state_witness_pool_size', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['orphan_state_witness_pool_size'], array (
  'format' => 'uint',
  'minimum' => 0,
  'type' => 'integer',
), 'orphan_state_witness_pool_size') : null,
            produceChunkAddTransactionsTimeLimit: array_key_exists('produce_chunk_add_transactions_time_limit', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['produce_chunk_add_transactions_time_limit'], array (
  'type' => 'string',
), 'produce_chunk_add_transactions_time_limit') : null,
            produceEmptyBlocks: array_key_exists('produce_empty_blocks', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['produce_empty_blocks'], array (
  'type' => 'boolean',
), 'produce_empty_blocks') : null,
            protocolVersionCheck: array_key_exists('protocol_version_check', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['protocol_version_check'], array (
  'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\ProtocolVersionCheckConfig',
  'nullable' => false,
), 'protocol_version_check') : null,
            receiptToTxMaxHintWindow: array_key_exists('receipt_to_tx_max_hint_window', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['receipt_to_tx_max_hint_window'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'receipt_to_tx_max_hint_window') : null,
            receiptToTxMaxHopDistance: array_key_exists('receipt_to_tx_max_hop_distance', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['receipt_to_tx_max_hop_distance'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'receipt_to_tx_max_hop_distance') : null,
            receiptToTxMaxOutcomesPerRequest: array_key_exists('receipt_to_tx_max_outcomes_per_request', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['receipt_to_tx_max_outcomes_per_request'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'receipt_to_tx_max_outcomes_per_request') : null,
            reshardingConfig: array_key_exists('resharding_config', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['resharding_config'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MutableConfigValue',
  'nullable' => false,
), 'resharding_config') : null,
            rpcAddr: array_key_exists('rpc_addr', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['rpc_addr'], array (
  'nullable' => true,
  'type' => 'string',
), 'rpc_addr')) : new \Near\JsonRpc\Models\OptionalValue(),
            saveInvalidWitnesses: array_key_exists('save_invalid_witnesses', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['save_invalid_witnesses'], array (
  'type' => 'boolean',
), 'save_invalid_witnesses') : null,
            saveLatestWitnesses: array_key_exists('save_latest_witnesses', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['save_latest_witnesses'], array (
  'type' => 'boolean',
), 'save_latest_witnesses') : null,
            saveReceiptToTx: array_key_exists('save_receipt_to_tx', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['save_receipt_to_tx'], array (
  'type' => 'boolean',
), 'save_receipt_to_tx') : null,
            saveStateChanges: array_key_exists('save_state_changes', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['save_state_changes'], array (
  'type' => 'boolean',
), 'save_state_changes') : null,
            saveTrieChanges: array_key_exists('save_trie_changes', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['save_trie_changes'], array (
  'type' => 'boolean',
), 'save_trie_changes') : null,
            saveTxOutcomes: array_key_exists('save_tx_outcomes', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['save_tx_outcomes'], array (
  'type' => 'boolean',
), 'save_tx_outcomes') : null,
            saveUntrackedPartialChunksParts: array_key_exists('save_untracked_partial_chunks_parts', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['save_untracked_partial_chunks_parts'], array (
  'type' => 'boolean',
), 'save_untracked_partial_chunks_parts') : null,
            skipSyncWait: array_key_exists('skip_sync_wait', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['skip_sync_wait'], array (
  'type' => 'boolean',
), 'skip_sync_wait') : null,
            stateRequestServerThreads: array_key_exists('state_request_server_threads', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['state_request_server_threads'], array (
  'format' => 'uint',
  'minimum' => 0,
  'type' => 'integer',
), 'state_request_server_threads') : null,
            stateRequestThrottlePeriod: array_key_exists('state_request_throttle_period', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['state_request_throttle_period'], array (
  'items' => 
  array (
    'format' => 'uint64',
    'minimum' => 0,
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'state_request_throttle_period') : null,
            stateRequestsPerThrottlePeriod: array_key_exists('state_requests_per_throttle_period', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['state_requests_per_throttle_period'], array (
  'format' => 'uint',
  'minimum' => 0,
  'type' => 'integer',
), 'state_requests_per_throttle_period') : null,
            stateSync: array_key_exists('state_sync', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['state_sync'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateSyncConfig',
  'nullable' => false,
), 'state_sync') : null,
            stateSyncP2pTimeout: array_key_exists('state_sync_p2p_timeout', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['state_sync_p2p_timeout'], array (
  'items' => 
  array (
    'format' => 'uint64',
    'minimum' => 0,
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'state_sync_p2p_timeout') : null,
            stateSyncRetryBackoff: array_key_exists('state_sync_retry_backoff', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['state_sync_retry_backoff'], array (
  'items' => 
  array (
    'format' => 'uint64',
    'minimum' => 0,
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'state_sync_retry_backoff') : null,
            syncCheckPeriod: array_key_exists('sync_check_period', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['sync_check_period'], array (
  'items' => 
  array (
    'format' => 'uint64',
    'minimum' => 0,
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'sync_check_period') : null,
            syncHeightThreshold: array_key_exists('sync_height_threshold', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['sync_height_threshold'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'sync_height_threshold') : null,
            syncMaxBlockRequests: array_key_exists('sync_max_block_requests', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['sync_max_block_requests'], array (
  'format' => 'uint',
  'minimum' => 0,
  'type' => 'integer',
), 'sync_max_block_requests') : null,
            syncStepPeriod: array_key_exists('sync_step_period', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['sync_step_period'], array (
  'items' => 
  array (
    'format' => 'uint64',
    'minimum' => 0,
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'sync_step_period') : null,
            trackedShardsConfig: array_key_exists('tracked_shards_config', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['tracked_shards_config'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TrackedShardsConfig',
  'nullable' => false,
), 'tracked_shards_config') : null,
            transactionPoolSizeLimit: array_key_exists('transaction_pool_size_limit', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['transaction_pool_size_limit'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'transaction_pool_size_limit')) : new \Near\JsonRpc\Models\OptionalValue(),
            transactionPoolStrictNonceTtlBlocks: array_key_exists('transaction_pool_strict_nonce_ttl_blocks', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['transaction_pool_strict_nonce_ttl_blocks'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'transaction_pool_strict_nonce_ttl_blocks') : null,
            transactionRequestHandlerThreads: array_key_exists('transaction_request_handler_threads', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['transaction_request_handler_threads'], array (
  'format' => 'uint',
  'minimum' => 0,
  'type' => 'integer',
), 'transaction_request_handler_threads') : null,
            trieViewerStateSizeLimit: array_key_exists('trie_viewer_state_size_limit', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['trie_viewer_state_size_limit'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'trie_viewer_state_size_limit')) : new \Near\JsonRpc\Models\OptionalValue(),
            txRoutingHeightHorizon: array_key_exists('tx_routing_height_horizon', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['tx_routing_height_horizon'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'tx_routing_height_horizon') : null,
            version: array_key_exists('version', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['version'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Version',
  'nullable' => false,
), 'version') : null,
            viewAccessKeysLimit: array_key_exists('view_access_keys_limit', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['view_access_keys_limit'], array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'view_access_keys_limit') : null,
            viewClientThreads: array_key_exists('view_client_threads', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['view_client_threads'], array (
  'format' => 'uint',
  'minimum' => 0,
  'type' => 'integer',
), 'view_client_threads') : null,
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
        if ($this->archive !== null) $data['archive'] = $this->archive;
        if ($this->blockHeaderFetchHorizon !== null) $data['block_header_fetch_horizon'] = $this->blockHeaderFetchHorizon;
        if ($this->blockProductionTrackingDelay !== null) $data['block_production_tracking_delay'] = $this->blockProductionTrackingDelay;
        if ($this->blockRequestTimeout !== null) $data['block_request_timeout'] = $this->blockRequestTimeout;
        if ($this->catchupStepPeriod !== null) $data['catchup_step_period'] = $this->catchupStepPeriod;
        if ($this->chainId !== null) $data['chain_id'] = $this->chainId;
        if ($this->chunkDistributionNetwork->present) $data['chunk_distribution_network'] = $this->chunkDistributionNetwork->value;
        if ($this->chunkRequestRetryPeriod !== null) $data['chunk_request_retry_period'] = $this->chunkRequestRetryPeriod;
        if ($this->chunkValidationThreads !== null) $data['chunk_validation_threads'] = $this->chunkValidationThreads;
        if ($this->chunkWaitMult !== null) $data['chunk_wait_mult'] = $this->chunkWaitMult;
        if ($this->chunksCacheHeightHorizon !== null) $data['chunks_cache_height_horizon'] = $this->chunksCacheHeightHorizon;
        if ($this->clientBackgroundMigrationThreads !== null) $data['client_background_migration_threads'] = $this->clientBackgroundMigrationThreads;
        if ($this->cloudArchivalWriter->present) $data['cloud_archival_writer'] = $this->cloudArchivalWriter->value;
        if ($this->disableTxRouting !== null) $data['disable_tx_routing'] = $this->disableTxRouting;
        if ($this->doomslugStepPeriod !== null) $data['doomslug_step_period'] = $this->doomslugStepPeriod;
        if ($this->enableEarlyPrepareTransactions !== null) $data['enable_early_prepare_transactions'] = $this->enableEarlyPrepareTransactions;
        if ($this->enableMultilineLogging !== null) $data['enable_multiline_logging'] = $this->enableMultilineLogging;
        if ($this->enableStatisticsExport !== null) $data['enable_statistics_export'] = $this->enableStatisticsExport;
        if ($this->epochLength !== null) $data['epoch_length'] = $this->epochLength;
        if ($this->epochSync !== null) $data['epoch_sync'] = $this->epochSync;
        if ($this->expectedShutdown !== null) $data['expected_shutdown'] = $this->expectedShutdown;
        if ($this->gc !== null) $data['gc'] = $this->gc;
        if ($this->headerSyncExpectedHeightPerSecond !== null) $data['header_sync_expected_height_per_second'] = $this->headerSyncExpectedHeightPerSecond;
        if ($this->headerSyncInitialTimeout !== null) $data['header_sync_initial_timeout'] = $this->headerSyncInitialTimeout;
        if ($this->headerSyncProgressTimeout !== null) $data['header_sync_progress_timeout'] = $this->headerSyncProgressTimeout;
        if ($this->headerSyncStallBanTimeout !== null) $data['header_sync_stall_ban_timeout'] = $this->headerSyncStallBanTimeout;
        if ($this->logSummaryPeriod !== null) $data['log_summary_period'] = $this->logSummaryPeriod;
        if ($this->logSummaryStyle !== null) $data['log_summary_style'] = $this->logSummaryStyle;
        if ($this->maxBlockProductionDelay !== null) $data['max_block_production_delay'] = $this->maxBlockProductionDelay;
        if ($this->maxBlockWaitDelay !== null) $data['max_block_wait_delay'] = $this->maxBlockWaitDelay;
        if ($this->maxGasBurntView->present) $data['max_gas_burnt_view'] = $this->maxGasBurntView->value;
        if ($this->minBlockProductionDelay !== null) $data['min_block_production_delay'] = $this->minBlockProductionDelay;
        if ($this->minNumPeers !== null) $data['min_num_peers'] = $this->minNumPeers;
        if ($this->numBlockProducerSeats !== null) $data['num_block_producer_seats'] = $this->numBlockProducerSeats;
        if ($this->orphanStateWitnessMaxSize !== null) $data['orphan_state_witness_max_size'] = $this->orphanStateWitnessMaxSize;
        if ($this->orphanStateWitnessPoolSize !== null) $data['orphan_state_witness_pool_size'] = $this->orphanStateWitnessPoolSize;
        if ($this->produceChunkAddTransactionsTimeLimit !== null) $data['produce_chunk_add_transactions_time_limit'] = $this->produceChunkAddTransactionsTimeLimit;
        if ($this->produceEmptyBlocks !== null) $data['produce_empty_blocks'] = $this->produceEmptyBlocks;
        if ($this->protocolVersionCheck !== null) $data['protocol_version_check'] = $this->protocolVersionCheck;
        if ($this->receiptToTxMaxHintWindow !== null) $data['receipt_to_tx_max_hint_window'] = $this->receiptToTxMaxHintWindow;
        if ($this->receiptToTxMaxHopDistance !== null) $data['receipt_to_tx_max_hop_distance'] = $this->receiptToTxMaxHopDistance;
        if ($this->receiptToTxMaxOutcomesPerRequest !== null) $data['receipt_to_tx_max_outcomes_per_request'] = $this->receiptToTxMaxOutcomesPerRequest;
        if ($this->reshardingConfig !== null) $data['resharding_config'] = $this->reshardingConfig;
        if ($this->rpcAddr->present) $data['rpc_addr'] = $this->rpcAddr->value;
        if ($this->saveInvalidWitnesses !== null) $data['save_invalid_witnesses'] = $this->saveInvalidWitnesses;
        if ($this->saveLatestWitnesses !== null) $data['save_latest_witnesses'] = $this->saveLatestWitnesses;
        if ($this->saveReceiptToTx !== null) $data['save_receipt_to_tx'] = $this->saveReceiptToTx;
        if ($this->saveStateChanges !== null) $data['save_state_changes'] = $this->saveStateChanges;
        if ($this->saveTrieChanges !== null) $data['save_trie_changes'] = $this->saveTrieChanges;
        if ($this->saveTxOutcomes !== null) $data['save_tx_outcomes'] = $this->saveTxOutcomes;
        if ($this->saveUntrackedPartialChunksParts !== null) $data['save_untracked_partial_chunks_parts'] = $this->saveUntrackedPartialChunksParts;
        if ($this->skipSyncWait !== null) $data['skip_sync_wait'] = $this->skipSyncWait;
        if ($this->stateRequestServerThreads !== null) $data['state_request_server_threads'] = $this->stateRequestServerThreads;
        if ($this->stateRequestThrottlePeriod !== null) $data['state_request_throttle_period'] = $this->stateRequestThrottlePeriod;
        if ($this->stateRequestsPerThrottlePeriod !== null) $data['state_requests_per_throttle_period'] = $this->stateRequestsPerThrottlePeriod;
        if ($this->stateSync !== null) $data['state_sync'] = $this->stateSync;
        if ($this->stateSyncP2pTimeout !== null) $data['state_sync_p2p_timeout'] = $this->stateSyncP2pTimeout;
        if ($this->stateSyncRetryBackoff !== null) $data['state_sync_retry_backoff'] = $this->stateSyncRetryBackoff;
        if ($this->syncCheckPeriod !== null) $data['sync_check_period'] = $this->syncCheckPeriod;
        if ($this->syncHeightThreshold !== null) $data['sync_height_threshold'] = $this->syncHeightThreshold;
        if ($this->syncMaxBlockRequests !== null) $data['sync_max_block_requests'] = $this->syncMaxBlockRequests;
        if ($this->syncStepPeriod !== null) $data['sync_step_period'] = $this->syncStepPeriod;
        if ($this->trackedShardsConfig !== null) $data['tracked_shards_config'] = $this->trackedShardsConfig;
        if ($this->transactionPoolSizeLimit->present) $data['transaction_pool_size_limit'] = $this->transactionPoolSizeLimit->value;
        if ($this->transactionPoolStrictNonceTtlBlocks !== null) $data['transaction_pool_strict_nonce_ttl_blocks'] = $this->transactionPoolStrictNonceTtlBlocks;
        if ($this->transactionRequestHandlerThreads !== null) $data['transaction_request_handler_threads'] = $this->transactionRequestHandlerThreads;
        if ($this->trieViewerStateSizeLimit->present) $data['trie_viewer_state_size_limit'] = $this->trieViewerStateSizeLimit->value;
        if ($this->txRoutingHeightHorizon !== null) $data['tx_routing_height_horizon'] = $this->txRoutingHeightHorizon;
        if ($this->version !== null) $data['version'] = $this->version;
        if ($this->viewAccessKeysLimit !== null) $data['view_access_keys_limit'] = $this->viewAccessKeysLimit;
        if ($this->viewClientThreads !== null) $data['view_client_threads'] = $this->viewClientThreads;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'archive' => 
    array (
      'type' => 'boolean',
    ),
    'block_header_fetch_horizon' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'block_production_tracking_delay' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MutableConfigValue',
      'nullable' => false,
    ),
    'block_request_timeout' => 
    array (
      'items' => 
      array (
        'format' => 'uint64',
        'minimum' => 0,
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'catchup_step_period' => 
    array (
      'items' => 
      array (
        'format' => 'uint64',
        'minimum' => 0,
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'chain_id' => 
    array (
      'type' => 'string',
    ),
    'chunk_distribution_network' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ChunkDistributionNetworkConfig',
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
    'chunk_request_retry_period' => 
    array (
      'items' => 
      array (
        'format' => 'uint64',
        'minimum' => 0,
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'chunk_validation_threads' => 
    array (
      'format' => 'uint',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'chunk_wait_mult' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MutableConfigValue',
      'nullable' => false,
    ),
    'chunks_cache_height_horizon' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'client_background_migration_threads' => 
    array (
      'format' => 'uint',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'cloud_archival_writer' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CloudArchivalWriterConfig',
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
    'disable_tx_routing' => 
    array (
      'type' => 'boolean',
    ),
    'doomslug_step_period' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MutableConfigValue',
      'nullable' => false,
    ),
    'enable_early_prepare_transactions' => 
    array (
      'type' => 'boolean',
    ),
    'enable_multiline_logging' => 
    array (
      'type' => 'boolean',
    ),
    'enable_statistics_export' => 
    array (
      'type' => 'boolean',
    ),
    'epoch_length' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'epoch_sync' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\EpochSyncConfig',
      'nullable' => false,
    ),
    'expected_shutdown' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MutableConfigValue',
      'nullable' => false,
    ),
    'gc' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GcConfig',
      'nullable' => false,
    ),
    'header_sync_expected_height_per_second' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'header_sync_initial_timeout' => 
    array (
      'items' => 
      array (
        'format' => 'uint64',
        'minimum' => 0,
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'header_sync_progress_timeout' => 
    array (
      'items' => 
      array (
        'format' => 'uint64',
        'minimum' => 0,
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'header_sync_stall_ban_timeout' => 
    array (
      'items' => 
      array (
        'format' => 'uint64',
        'minimum' => 0,
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'log_summary_period' => 
    array (
      'items' => 
      array (
        'format' => 'uint64',
        'minimum' => 0,
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'log_summary_style' => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\LogSummaryStyle',
      'nullable' => false,
    ),
    'max_block_production_delay' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MutableConfigValue',
      'nullable' => false,
    ),
    'max_block_wait_delay' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MutableConfigValue',
      'nullable' => false,
    ),
    'max_gas_burnt_view' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
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
    'min_block_production_delay' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MutableConfigValue',
      'nullable' => false,
    ),
    'min_num_peers' => 
    array (
      'format' => 'uint',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'num_block_producer_seats' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'orphan_state_witness_max_size' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'orphan_state_witness_pool_size' => 
    array (
      'format' => 'uint',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'produce_chunk_add_transactions_time_limit' => 
    array (
      'type' => 'string',
    ),
    'produce_empty_blocks' => 
    array (
      'type' => 'boolean',
    ),
    'protocol_version_check' => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\ProtocolVersionCheckConfig',
      'nullable' => false,
    ),
    'receipt_to_tx_max_hint_window' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'receipt_to_tx_max_hop_distance' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'receipt_to_tx_max_outcomes_per_request' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'resharding_config' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MutableConfigValue',
      'nullable' => false,
    ),
    'rpc_addr' => 
    array (
      'nullable' => true,
      'type' => 'string',
    ),
    'save_invalid_witnesses' => 
    array (
      'type' => 'boolean',
    ),
    'save_latest_witnesses' => 
    array (
      'type' => 'boolean',
    ),
    'save_receipt_to_tx' => 
    array (
      'type' => 'boolean',
    ),
    'save_state_changes' => 
    array (
      'type' => 'boolean',
    ),
    'save_trie_changes' => 
    array (
      'type' => 'boolean',
    ),
    'save_tx_outcomes' => 
    array (
      'type' => 'boolean',
    ),
    'save_untracked_partial_chunks_parts' => 
    array (
      'type' => 'boolean',
    ),
    'skip_sync_wait' => 
    array (
      'type' => 'boolean',
    ),
    'state_request_server_threads' => 
    array (
      'format' => 'uint',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'state_request_throttle_period' => 
    array (
      'items' => 
      array (
        'format' => 'uint64',
        'minimum' => 0,
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'state_requests_per_throttle_period' => 
    array (
      'format' => 'uint',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'state_sync' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateSyncConfig',
      'nullable' => false,
    ),
    'state_sync_p2p_timeout' => 
    array (
      'items' => 
      array (
        'format' => 'uint64',
        'minimum' => 0,
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'state_sync_retry_backoff' => 
    array (
      'items' => 
      array (
        'format' => 'uint64',
        'minimum' => 0,
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'sync_check_period' => 
    array (
      'items' => 
      array (
        'format' => 'uint64',
        'minimum' => 0,
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'sync_height_threshold' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'sync_max_block_requests' => 
    array (
      'format' => 'uint',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'sync_step_period' => 
    array (
      'items' => 
      array (
        'format' => 'uint64',
        'minimum' => 0,
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'tracked_shards_config' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TrackedShardsConfig',
      'nullable' => false,
    ),
    'transaction_pool_size_limit' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'transaction_pool_strict_nonce_ttl_blocks' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'transaction_request_handler_threads' => 
    array (
      'format' => 'uint',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'trie_viewer_state_size_limit' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'tx_routing_height_horizon' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'version' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Version',
      'nullable' => false,
    ),
    'view_access_keys_limit' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'view_client_threads' => 
    array (
      'format' => 'uint',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'RpcClientConfigResponse'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'archive' => 
    array (
      'type' => 'boolean',
    ),
    'block_header_fetch_horizon' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'block_production_tracking_delay' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MutableConfigValue',
      'nullable' => false,
    ),
    'block_request_timeout' => 
    array (
      'items' => 
      array (
        'format' => 'uint64',
        'minimum' => 0,
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'catchup_step_period' => 
    array (
      'items' => 
      array (
        'format' => 'uint64',
        'minimum' => 0,
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'chain_id' => 
    array (
      'type' => 'string',
    ),
    'chunk_distribution_network' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ChunkDistributionNetworkConfig',
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
    'chunk_request_retry_period' => 
    array (
      'items' => 
      array (
        'format' => 'uint64',
        'minimum' => 0,
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'chunk_validation_threads' => 
    array (
      'format' => 'uint',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'chunk_wait_mult' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MutableConfigValue',
      'nullable' => false,
    ),
    'chunks_cache_height_horizon' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'client_background_migration_threads' => 
    array (
      'format' => 'uint',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'cloud_archival_writer' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CloudArchivalWriterConfig',
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
    'disable_tx_routing' => 
    array (
      'type' => 'boolean',
    ),
    'doomslug_step_period' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MutableConfigValue',
      'nullable' => false,
    ),
    'enable_early_prepare_transactions' => 
    array (
      'type' => 'boolean',
    ),
    'enable_multiline_logging' => 
    array (
      'type' => 'boolean',
    ),
    'enable_statistics_export' => 
    array (
      'type' => 'boolean',
    ),
    'epoch_length' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'epoch_sync' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\EpochSyncConfig',
      'nullable' => false,
    ),
    'expected_shutdown' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MutableConfigValue',
      'nullable' => false,
    ),
    'gc' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GcConfig',
      'nullable' => false,
    ),
    'header_sync_expected_height_per_second' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'header_sync_initial_timeout' => 
    array (
      'items' => 
      array (
        'format' => 'uint64',
        'minimum' => 0,
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'header_sync_progress_timeout' => 
    array (
      'items' => 
      array (
        'format' => 'uint64',
        'minimum' => 0,
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'header_sync_stall_ban_timeout' => 
    array (
      'items' => 
      array (
        'format' => 'uint64',
        'minimum' => 0,
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'log_summary_period' => 
    array (
      'items' => 
      array (
        'format' => 'uint64',
        'minimum' => 0,
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'log_summary_style' => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\LogSummaryStyle',
      'nullable' => false,
    ),
    'max_block_production_delay' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MutableConfigValue',
      'nullable' => false,
    ),
    'max_block_wait_delay' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MutableConfigValue',
      'nullable' => false,
    ),
    'max_gas_burnt_view' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
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
    'min_block_production_delay' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MutableConfigValue',
      'nullable' => false,
    ),
    'min_num_peers' => 
    array (
      'format' => 'uint',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'num_block_producer_seats' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'orphan_state_witness_max_size' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'orphan_state_witness_pool_size' => 
    array (
      'format' => 'uint',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'produce_chunk_add_transactions_time_limit' => 
    array (
      'type' => 'string',
    ),
    'produce_empty_blocks' => 
    array (
      'type' => 'boolean',
    ),
    'protocol_version_check' => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\ProtocolVersionCheckConfig',
      'nullable' => false,
    ),
    'receipt_to_tx_max_hint_window' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'receipt_to_tx_max_hop_distance' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'receipt_to_tx_max_outcomes_per_request' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'resharding_config' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MutableConfigValue',
      'nullable' => false,
    ),
    'rpc_addr' => 
    array (
      'nullable' => true,
      'type' => 'string',
    ),
    'save_invalid_witnesses' => 
    array (
      'type' => 'boolean',
    ),
    'save_latest_witnesses' => 
    array (
      'type' => 'boolean',
    ),
    'save_receipt_to_tx' => 
    array (
      'type' => 'boolean',
    ),
    'save_state_changes' => 
    array (
      'type' => 'boolean',
    ),
    'save_trie_changes' => 
    array (
      'type' => 'boolean',
    ),
    'save_tx_outcomes' => 
    array (
      'type' => 'boolean',
    ),
    'save_untracked_partial_chunks_parts' => 
    array (
      'type' => 'boolean',
    ),
    'skip_sync_wait' => 
    array (
      'type' => 'boolean',
    ),
    'state_request_server_threads' => 
    array (
      'format' => 'uint',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'state_request_throttle_period' => 
    array (
      'items' => 
      array (
        'format' => 'uint64',
        'minimum' => 0,
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'state_requests_per_throttle_period' => 
    array (
      'format' => 'uint',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'state_sync' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateSyncConfig',
      'nullable' => false,
    ),
    'state_sync_p2p_timeout' => 
    array (
      'items' => 
      array (
        'format' => 'uint64',
        'minimum' => 0,
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'state_sync_retry_backoff' => 
    array (
      'items' => 
      array (
        'format' => 'uint64',
        'minimum' => 0,
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'sync_check_period' => 
    array (
      'items' => 
      array (
        'format' => 'uint64',
        'minimum' => 0,
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'sync_height_threshold' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'sync_max_block_requests' => 
    array (
      'format' => 'uint',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'sync_step_period' => 
    array (
      'items' => 
      array (
        'format' => 'uint64',
        'minimum' => 0,
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'tracked_shards_config' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TrackedShardsConfig',
      'nullable' => false,
    ),
    'transaction_pool_size_limit' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'transaction_pool_strict_nonce_ttl_blocks' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'transaction_request_handler_threads' => 
    array (
      'format' => 'uint',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'trie_viewer_state_size_limit' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'tx_routing_height_horizon' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'version' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Version',
      'nullable' => false,
    ),
    'view_access_keys_limit' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'view_client_threads' => 
    array (
      'format' => 'uint',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'RpcClientConfigResponse');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
