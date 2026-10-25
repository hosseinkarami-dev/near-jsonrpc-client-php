<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Describes limits for VM and Runtime.
 * TODO #4139: consider switching to strongly-typed wrappers instead of raw quantities
 */
final readonly class LimitConfig implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * Deprecated: full account id validation is always enforced, so this is
         * always `2`.
         *
         * @var int|string|null
         */
        public int|string|null $accountIdValidityRulesVersion = null,
        /**
         * The initial number of memory pages.
         * NOTE: It's not a limiter itself, but it's a value we use for initial_memory_pages.
         *
         * @var int|null
         */
        public int|null $initialMemoryPages = null,
        /**
         * Max number of actions per receipt.
         *
         * @var int|string|null
         */
        public int|string|null $maxActionsPerReceipt = null,
        /**
         * Max length of arguments in a function call action.
         *
         * @var int|string|null
         */
        public int|string|null $maxArgumentsLength = null,
        /**
         * If present, stores max total number of basic blocks across all functions in a contract.
         * This caps total compilation time for a contract.
         *
         * @var \Near\JsonRpc\Models\OptionalValue<int|string|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $maxBlocksPerContract = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * If present, stores max number of basic blocks (block/loop/if) in a single function.
         * This caps per-function compilation time in Cranelift.
         *
         * @var \Near\JsonRpc\Models\OptionalValue<int|string|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $maxBlocksPerFunction = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * Max contract size
         *
         * @var int|string|null
         */
        public int|string|null $maxContractSize = null,
        /**
         * Max number of `DeployContract` and `DeployGlobalContract` actions
         * combined within a single receipt.
         *
         * @var int|string|null
         */
        public int|string|null $maxDeployActionsPerReceipt = null,
        /**
         * If present, stores max number of elements in a single contract's table
         *
         * @var \Near\JsonRpc\Models\OptionalValue<int|string|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $maxElementsPerContractTable = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * If present, stores max byte size of a single function body in a contract
         *
         * @var \Near\JsonRpc\Models\OptionalValue<int|string|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $maxFunctionBodySize = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * If present, stores max number of functions in one contract
         *
         * @var \Near\JsonRpc\Models\OptionalValue<int|string|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $maxFunctionsNumberPerContract = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * Max amount of gas that can be used, excluding gas attached to promises.
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $maxGasBurnt = null,
        /**
         * Max amount of gas that can be burnt by an external contract call,
         * excluding gas attached to promises.
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $maxGasBurntExternal = null,
        /**
         * If present, stores max number of globals (entries in the wasm global
         * section) a contract may declare.
         *
         * @var \Near\JsonRpc\Models\OptionalValue<int|string|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $maxGlobalsPerContract = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * If present, stores max byte size of the wasm code after gas instrumentation.
         * This prevents Cranelift's 24-bit SSA counter from overflowing on
         * pathologically large contracts.
         *
         * @var \Near\JsonRpc\Models\OptionalValue<int|string|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $maxInstrumentedCodeSize = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * Max length of any method name (without terminating character).
         *
         * @var int|string|null
         */
        public int|string|null $maxLengthMethodName = null,
        /**
         * Max length of returned data
         *
         * @var int|string|null
         */
        public int|string|null $maxLengthReturnedData = null,
        /**
         * Max storage key size
         *
         * @var int|string|null
         */
        public int|string|null $maxLengthStorageKey = null,
        /**
         * Max storage value size
         *
         * @var int|string|null
         */
        public int|string|null $maxLengthStorageValue = null,
        /**
         * If present, stores max number of locals declared globally in one contract
         *
         * @var \Near\JsonRpc\Models\OptionalValue<int|string|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $maxLocalsPerContract = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * What is the maximal memory pages amount is allowed to have for a contract.
         *
         * @var int|null
         */
        public int|null $maxMemoryPages = null,
        /**
         * Max total length of all method names (including terminating character) for a function call
         * permission access key.
         *
         * @var int|string|null
         */
        public int|string|null $maxNumberBytesMethodNames = null,
        /**
         * Max number of input data dependencies
         *
         * @var int|string|null
         */
        public int|string|null $maxNumberInputDataDependencies = null,
        /**
         * Maximum number of log entries.
         *
         * @var int|string|null
         */
        public int|string|null $maxNumberLogs = null,
        /**
         * Maximum number of registers that can be used simultaneously.
         *
         * Note that due to an implementation quirk [read: a bug] in VMLogic, if we
         * have this number of registers, no subsequent writes to the registers
         * will succeed even if they replace an existing register.
         *
         * @var int|string|null
         */
        public int|string|null $maxNumberRegisters = null,
        /**
         * If present, stores the max operand stack size (in bytes) at any point
         * during the execution of a single function. Per-function: not summed
         * across recursion. Computed by `finite_wasm::max_stack`.
         *
         * @var \Near\JsonRpc\Models\OptionalValue<int|string|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $maxOperandStackBytesPerFunction = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<int|string|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $maxParamsPerContract = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<int|string|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $maxParamsPerFunction = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * Max number of promises that a function call can create
         *
         * @var int|string|null
         */
        public int|string|null $maxPromisesPerFunctionCallAction = null,
        /**
         * Max receipt size
         *
         * @var int|string|null
         */
        public int|string|null $maxReceiptSize = null,
        /**
         * Max combined size (in bytes) of the resolved promise inputs a single
         * receipt may consume.
         *
         * @var int|string|null
         */
        public int|string|null $maxReceiptTotalInputSize = null,
        /**
         * Maximum number of bytes that can be stored in a single register.
         *
         * @var int|string|null
         */
        public int|string|null $maxRegisterSize = null,
        /**
         * How tall the stack is allowed to grow?
         *
         * See <https://wiki.parity.io/WebAssembly-StackHeight> to find out how the stack frame cost
         * is calculated.
         *
         * @var int|null
         */
        public int|null $maxStackHeight = null,
        /**
         * Max number of storage entries the `DeterministicStateInit` and
         * `UniversalStateInit` actions in one receipt may carry, in total.
         *
         * Each entry costs `..._state_init_per_entry` to execute, which is counted
         * into the receipt's congestion gas whether or not it is ever burnt. Without
         * a cap one receipt reserves several times `max_congestion_outgoing_gas`,
         * pinning the sending shard at full outgoing congestion, which stops it
         * accepting transactions.
         *
         * @var int|string|null
         */
        public int|string|null $maxStateInitEntries = null,
        /**
         * If present, stores max number of tables declared globally in one contract
         *
         * @var \Near\JsonRpc\Models\OptionalValue<int|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $maxTablesPerContract = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * Maximum total length in bytes of all log messages.
         *
         * @var int|string|null
         */
        public int|string|null $maxTotalLogLength = null,
        /**
         * Max total prepaid gas for all function call actions per receipt.
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $maxTotalPrepaidGas = null,
        /**
         * Max transaction size
         *
         * @var int|string|null
         */
        public int|string|null $maxTransactionSize = null,
        /**
         * If present, stores max number of entries in the wasm type section that
         * a contract may declare.
         *
         * @var \Near\JsonRpc\Models\OptionalValue<int|string|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $maxTypesPerContract = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * Max number of access keys the `UniversalStateInit` actions in one receipt
         * may commit to, in total.
         *
         * Each committed key is priced as a full `AddKey`, at the send rate, so the
         * whole cost lands when a transaction is converted to a receipt. Without a
         * cap one transaction converts for more gas than a chunk has, and since
         * conversion happens before anything is charged, transaction selection
         * admits it anyway. The bound is per receipt because a receipt can carry
         * many byte-identical copies of a state init and pays for each of them.
         *
         * @var int|string|null
         */
        public int|string|null $maxUniversalStateInitKeys = null,
        /**
         * Maximum number of bytes for payload passed over a yield resume.
         *
         * @var int|string|null
         */
        public int|string|null $maxYieldPayloadSize = null,
        /**
         * If present, requires at least this many bytes of contract code per local.
         *
         * @var \Near\JsonRpc\Models\OptionalValue<int|string|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $minContractSizePerLocal = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * Hard limit on the size of storage proof generated while executing a single receipt.
         *
         * @var int|string|null
         */
        public int|string|null $perReceiptStorageProofSizeLimit = null,
        /**
         * Limit of memory used by registers.
         *
         * @var int|string|null
         */
        public int|string|null $registersMemoryLimit = null,
        /**
         * Number of blocks after which a yielded promise times out.
         *
         * @var int|string|null
         */
        public int|string|null $yieldTimeoutLengthInBlocks = null,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        if ($this->accountIdValidityRulesVersion !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->accountIdValidityRulesVersion, array (
  'default' => 2,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'account_id_validity_rules_version');
        if ($this->initialMemoryPages !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->initialMemoryPages, array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'initial_memory_pages');
        if ($this->maxActionsPerReceipt !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxActionsPerReceipt, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_actions_per_receipt');
        if ($this->maxArgumentsLength !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxArgumentsLength, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_arguments_length');
        if ($this->maxBlocksPerContract->present) \Near\JsonRpc\Models\TypeGuard::assert($this->maxBlocksPerContract->value, array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'max_blocks_per_contract');
        if ($this->maxBlocksPerFunction->present) \Near\JsonRpc\Models\TypeGuard::assert($this->maxBlocksPerFunction->value, array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'max_blocks_per_function');
        if ($this->maxContractSize !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxContractSize, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_contract_size');
        if ($this->maxDeployActionsPerReceipt !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxDeployActionsPerReceipt, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_deploy_actions_per_receipt');
        if ($this->maxElementsPerContractTable->present) \Near\JsonRpc\Models\TypeGuard::assert($this->maxElementsPerContractTable->value, array (
  'format' => 'uint',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'max_elements_per_contract_table');
        if ($this->maxFunctionBodySize->present) \Near\JsonRpc\Models\TypeGuard::assert($this->maxFunctionBodySize->value, array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'max_function_body_size');
        if ($this->maxFunctionsNumberPerContract->present) \Near\JsonRpc\Models\TypeGuard::assert($this->maxFunctionsNumberPerContract->value, array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'max_functions_number_per_contract');
        if ($this->maxGasBurnt !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxGasBurnt, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'max_gas_burnt');
        if ($this->maxGasBurntExternal !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxGasBurntExternal, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'max_gas_burnt_external');
        if ($this->maxGlobalsPerContract->present) \Near\JsonRpc\Models\TypeGuard::assert($this->maxGlobalsPerContract->value, array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'max_globals_per_contract');
        if ($this->maxInstrumentedCodeSize->present) \Near\JsonRpc\Models\TypeGuard::assert($this->maxInstrumentedCodeSize->value, array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'max_instrumented_code_size');
        if ($this->maxLengthMethodName !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxLengthMethodName, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_length_method_name');
        if ($this->maxLengthReturnedData !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxLengthReturnedData, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_length_returned_data');
        if ($this->maxLengthStorageKey !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxLengthStorageKey, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_length_storage_key');
        if ($this->maxLengthStorageValue !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxLengthStorageValue, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_length_storage_value');
        if ($this->maxLocalsPerContract->present) \Near\JsonRpc\Models\TypeGuard::assert($this->maxLocalsPerContract->value, array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'max_locals_per_contract');
        if ($this->maxMemoryPages !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxMemoryPages, array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'max_memory_pages');
        if ($this->maxNumberBytesMethodNames !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxNumberBytesMethodNames, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_number_bytes_method_names');
        if ($this->maxNumberInputDataDependencies !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxNumberInputDataDependencies, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_number_input_data_dependencies');
        if ($this->maxNumberLogs !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxNumberLogs, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_number_logs');
        if ($this->maxNumberRegisters !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxNumberRegisters, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_number_registers');
        if ($this->maxOperandStackBytesPerFunction->present) \Near\JsonRpc\Models\TypeGuard::assert($this->maxOperandStackBytesPerFunction->value, array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'max_operand_stack_bytes_per_function');
        if ($this->maxParamsPerContract->present) \Near\JsonRpc\Models\TypeGuard::assert($this->maxParamsPerContract->value, array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'max_params_per_contract');
        if ($this->maxParamsPerFunction->present) \Near\JsonRpc\Models\TypeGuard::assert($this->maxParamsPerFunction->value, array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'max_params_per_function');
        if ($this->maxPromisesPerFunctionCallAction !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxPromisesPerFunctionCallAction, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_promises_per_function_call_action');
        if ($this->maxReceiptSize !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxReceiptSize, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_receipt_size');
        if ($this->maxReceiptTotalInputSize !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxReceiptTotalInputSize, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_receipt_total_input_size');
        if ($this->maxRegisterSize !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxRegisterSize, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_register_size');
        if ($this->maxStackHeight !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxStackHeight, array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'max_stack_height');
        if ($this->maxStateInitEntries !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxStateInitEntries, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_state_init_entries');
        if ($this->maxTablesPerContract->present) \Near\JsonRpc\Models\TypeGuard::assert($this->maxTablesPerContract->value, array (
  'format' => 'uint32',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'max_tables_per_contract');
        if ($this->maxTotalLogLength !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxTotalLogLength, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_total_log_length');
        if ($this->maxTotalPrepaidGas !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxTotalPrepaidGas, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'max_total_prepaid_gas');
        if ($this->maxTransactionSize !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxTransactionSize, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_transaction_size');
        if ($this->maxTypesPerContract->present) \Near\JsonRpc\Models\TypeGuard::assert($this->maxTypesPerContract->value, array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'max_types_per_contract');
        if ($this->maxUniversalStateInitKeys !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxUniversalStateInitKeys, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_universal_state_init_keys');
        if ($this->maxYieldPayloadSize !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->maxYieldPayloadSize, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_yield_payload_size');
        if ($this->minContractSizePerLocal->present) \Near\JsonRpc\Models\TypeGuard::assert($this->minContractSizePerLocal->value, array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'min_contract_size_per_local');
        if ($this->perReceiptStorageProofSizeLimit !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->perReceiptStorageProofSizeLimit, array (
  'format' => 'uint',
  'minimum' => 0,
  'type' => 'integer',
), 'per_receipt_storage_proof_size_limit');
        if ($this->registersMemoryLimit !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->registersMemoryLimit, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'registers_memory_limit');
        if ($this->yieldTimeoutLengthInBlocks !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->yieldTimeoutLengthInBlocks, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'yield_timeout_length_in_blocks');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for LimitConfig.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        $extra = array_diff_key($data, array (
  'account_id_validity_rules_version' => true,
  'initial_memory_pages' => true,
  'max_actions_per_receipt' => true,
  'max_arguments_length' => true,
  'max_blocks_per_contract' => true,
  'max_blocks_per_function' => true,
  'max_contract_size' => true,
  'max_deploy_actions_per_receipt' => true,
  'max_elements_per_contract_table' => true,
  'max_function_body_size' => true,
  'max_functions_number_per_contract' => true,
  'max_gas_burnt' => true,
  'max_gas_burnt_external' => true,
  'max_globals_per_contract' => true,
  'max_instrumented_code_size' => true,
  'max_length_method_name' => true,
  'max_length_returned_data' => true,
  'max_length_storage_key' => true,
  'max_length_storage_value' => true,
  'max_locals_per_contract' => true,
  'max_memory_pages' => true,
  'max_number_bytes_method_names' => true,
  'max_number_input_data_dependencies' => true,
  'max_number_logs' => true,
  'max_number_registers' => true,
  'max_operand_stack_bytes_per_function' => true,
  'max_params_per_contract' => true,
  'max_params_per_function' => true,
  'max_promises_per_function_call_action' => true,
  'max_receipt_size' => true,
  'max_receipt_total_input_size' => true,
  'max_register_size' => true,
  'max_stack_height' => true,
  'max_state_init_entries' => true,
  'max_tables_per_contract' => true,
  'max_total_log_length' => true,
  'max_total_prepaid_gas' => true,
  'max_transaction_size' => true,
  'max_types_per_contract' => true,
  'max_universal_state_init_keys' => true,
  'max_yield_payload_size' => true,
  'min_contract_size_per_local' => true,
  'per_receipt_storage_proof_size_limit' => true,
  'registers_memory_limit' => true,
  'yield_timeout_length_in_blocks' => true,
));
        return new self(
            accountIdValidityRulesVersion: array_key_exists('account_id_validity_rules_version', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['account_id_validity_rules_version'], array (
  'default' => 2,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'account_id_validity_rules_version') : null,
            initialMemoryPages: array_key_exists('initial_memory_pages', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['initial_memory_pages'], array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'initial_memory_pages') : null,
            maxActionsPerReceipt: array_key_exists('max_actions_per_receipt', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_actions_per_receipt'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_actions_per_receipt') : null,
            maxArgumentsLength: array_key_exists('max_arguments_length', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_arguments_length'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_arguments_length') : null,
            maxBlocksPerContract: array_key_exists('max_blocks_per_contract', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_blocks_per_contract'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'max_blocks_per_contract')) : new \Near\JsonRpc\Models\OptionalValue(),
            maxBlocksPerFunction: array_key_exists('max_blocks_per_function', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_blocks_per_function'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'max_blocks_per_function')) : new \Near\JsonRpc\Models\OptionalValue(),
            maxContractSize: array_key_exists('max_contract_size', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_contract_size'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_contract_size') : null,
            maxDeployActionsPerReceipt: array_key_exists('max_deploy_actions_per_receipt', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_deploy_actions_per_receipt'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_deploy_actions_per_receipt') : null,
            maxElementsPerContractTable: array_key_exists('max_elements_per_contract_table', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_elements_per_contract_table'], array (
  'format' => 'uint',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'max_elements_per_contract_table')) : new \Near\JsonRpc\Models\OptionalValue(),
            maxFunctionBodySize: array_key_exists('max_function_body_size', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_function_body_size'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'max_function_body_size')) : new \Near\JsonRpc\Models\OptionalValue(),
            maxFunctionsNumberPerContract: array_key_exists('max_functions_number_per_contract', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_functions_number_per_contract'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'max_functions_number_per_contract')) : new \Near\JsonRpc\Models\OptionalValue(),
            maxGasBurnt: array_key_exists('max_gas_burnt', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_gas_burnt'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'max_gas_burnt') : null,
            maxGasBurntExternal: array_key_exists('max_gas_burnt_external', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_gas_burnt_external'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'max_gas_burnt_external') : null,
            maxGlobalsPerContract: array_key_exists('max_globals_per_contract', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_globals_per_contract'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'max_globals_per_contract')) : new \Near\JsonRpc\Models\OptionalValue(),
            maxInstrumentedCodeSize: array_key_exists('max_instrumented_code_size', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_instrumented_code_size'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'max_instrumented_code_size')) : new \Near\JsonRpc\Models\OptionalValue(),
            maxLengthMethodName: array_key_exists('max_length_method_name', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_length_method_name'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_length_method_name') : null,
            maxLengthReturnedData: array_key_exists('max_length_returned_data', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_length_returned_data'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_length_returned_data') : null,
            maxLengthStorageKey: array_key_exists('max_length_storage_key', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_length_storage_key'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_length_storage_key') : null,
            maxLengthStorageValue: array_key_exists('max_length_storage_value', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_length_storage_value'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_length_storage_value') : null,
            maxLocalsPerContract: array_key_exists('max_locals_per_contract', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_locals_per_contract'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'max_locals_per_contract')) : new \Near\JsonRpc\Models\OptionalValue(),
            maxMemoryPages: array_key_exists('max_memory_pages', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_memory_pages'], array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'max_memory_pages') : null,
            maxNumberBytesMethodNames: array_key_exists('max_number_bytes_method_names', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_number_bytes_method_names'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_number_bytes_method_names') : null,
            maxNumberInputDataDependencies: array_key_exists('max_number_input_data_dependencies', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_number_input_data_dependencies'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_number_input_data_dependencies') : null,
            maxNumberLogs: array_key_exists('max_number_logs', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_number_logs'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_number_logs') : null,
            maxNumberRegisters: array_key_exists('max_number_registers', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_number_registers'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_number_registers') : null,
            maxOperandStackBytesPerFunction: array_key_exists('max_operand_stack_bytes_per_function', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_operand_stack_bytes_per_function'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'max_operand_stack_bytes_per_function')) : new \Near\JsonRpc\Models\OptionalValue(),
            maxParamsPerContract: array_key_exists('max_params_per_contract', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_params_per_contract'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'max_params_per_contract')) : new \Near\JsonRpc\Models\OptionalValue(),
            maxParamsPerFunction: array_key_exists('max_params_per_function', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_params_per_function'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'max_params_per_function')) : new \Near\JsonRpc\Models\OptionalValue(),
            maxPromisesPerFunctionCallAction: array_key_exists('max_promises_per_function_call_action', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_promises_per_function_call_action'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_promises_per_function_call_action') : null,
            maxReceiptSize: array_key_exists('max_receipt_size', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_receipt_size'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_receipt_size') : null,
            maxReceiptTotalInputSize: array_key_exists('max_receipt_total_input_size', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_receipt_total_input_size'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_receipt_total_input_size') : null,
            maxRegisterSize: array_key_exists('max_register_size', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_register_size'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_register_size') : null,
            maxStackHeight: array_key_exists('max_stack_height', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_stack_height'], array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'max_stack_height') : null,
            maxStateInitEntries: array_key_exists('max_state_init_entries', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_state_init_entries'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_state_init_entries') : null,
            maxTablesPerContract: array_key_exists('max_tables_per_contract', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_tables_per_contract'], array (
  'format' => 'uint32',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'max_tables_per_contract')) : new \Near\JsonRpc\Models\OptionalValue(),
            maxTotalLogLength: array_key_exists('max_total_log_length', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_total_log_length'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_total_log_length') : null,
            maxTotalPrepaidGas: array_key_exists('max_total_prepaid_gas', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_total_prepaid_gas'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'max_total_prepaid_gas') : null,
            maxTransactionSize: array_key_exists('max_transaction_size', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_transaction_size'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_transaction_size') : null,
            maxTypesPerContract: array_key_exists('max_types_per_contract', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_types_per_contract'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'max_types_per_contract')) : new \Near\JsonRpc\Models\OptionalValue(),
            maxUniversalStateInitKeys: array_key_exists('max_universal_state_init_keys', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_universal_state_init_keys'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_universal_state_init_keys') : null,
            maxYieldPayloadSize: array_key_exists('max_yield_payload_size', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_yield_payload_size'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_yield_payload_size') : null,
            minContractSizePerLocal: array_key_exists('min_contract_size_per_local', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['min_contract_size_per_local'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'min_contract_size_per_local')) : new \Near\JsonRpc\Models\OptionalValue(),
            perReceiptStorageProofSizeLimit: array_key_exists('per_receipt_storage_proof_size_limit', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['per_receipt_storage_proof_size_limit'], array (
  'format' => 'uint',
  'minimum' => 0,
  'type' => 'integer',
), 'per_receipt_storage_proof_size_limit') : null,
            registersMemoryLimit: array_key_exists('registers_memory_limit', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['registers_memory_limit'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'registers_memory_limit') : null,
            yieldTimeoutLengthInBlocks: array_key_exists('yield_timeout_length_in_blocks', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['yield_timeout_length_in_blocks'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'yield_timeout_length_in_blocks') : null,
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
        if ($this->accountIdValidityRulesVersion !== null) $data['account_id_validity_rules_version'] = $this->accountIdValidityRulesVersion;
        if ($this->initialMemoryPages !== null) $data['initial_memory_pages'] = $this->initialMemoryPages;
        if ($this->maxActionsPerReceipt !== null) $data['max_actions_per_receipt'] = $this->maxActionsPerReceipt;
        if ($this->maxArgumentsLength !== null) $data['max_arguments_length'] = $this->maxArgumentsLength;
        if ($this->maxBlocksPerContract->present) $data['max_blocks_per_contract'] = $this->maxBlocksPerContract->value;
        if ($this->maxBlocksPerFunction->present) $data['max_blocks_per_function'] = $this->maxBlocksPerFunction->value;
        if ($this->maxContractSize !== null) $data['max_contract_size'] = $this->maxContractSize;
        if ($this->maxDeployActionsPerReceipt !== null) $data['max_deploy_actions_per_receipt'] = $this->maxDeployActionsPerReceipt;
        if ($this->maxElementsPerContractTable->present) $data['max_elements_per_contract_table'] = $this->maxElementsPerContractTable->value;
        if ($this->maxFunctionBodySize->present) $data['max_function_body_size'] = $this->maxFunctionBodySize->value;
        if ($this->maxFunctionsNumberPerContract->present) $data['max_functions_number_per_contract'] = $this->maxFunctionsNumberPerContract->value;
        if ($this->maxGasBurnt !== null) $data['max_gas_burnt'] = $this->maxGasBurnt;
        if ($this->maxGasBurntExternal !== null) $data['max_gas_burnt_external'] = $this->maxGasBurntExternal;
        if ($this->maxGlobalsPerContract->present) $data['max_globals_per_contract'] = $this->maxGlobalsPerContract->value;
        if ($this->maxInstrumentedCodeSize->present) $data['max_instrumented_code_size'] = $this->maxInstrumentedCodeSize->value;
        if ($this->maxLengthMethodName !== null) $data['max_length_method_name'] = $this->maxLengthMethodName;
        if ($this->maxLengthReturnedData !== null) $data['max_length_returned_data'] = $this->maxLengthReturnedData;
        if ($this->maxLengthStorageKey !== null) $data['max_length_storage_key'] = $this->maxLengthStorageKey;
        if ($this->maxLengthStorageValue !== null) $data['max_length_storage_value'] = $this->maxLengthStorageValue;
        if ($this->maxLocalsPerContract->present) $data['max_locals_per_contract'] = $this->maxLocalsPerContract->value;
        if ($this->maxMemoryPages !== null) $data['max_memory_pages'] = $this->maxMemoryPages;
        if ($this->maxNumberBytesMethodNames !== null) $data['max_number_bytes_method_names'] = $this->maxNumberBytesMethodNames;
        if ($this->maxNumberInputDataDependencies !== null) $data['max_number_input_data_dependencies'] = $this->maxNumberInputDataDependencies;
        if ($this->maxNumberLogs !== null) $data['max_number_logs'] = $this->maxNumberLogs;
        if ($this->maxNumberRegisters !== null) $data['max_number_registers'] = $this->maxNumberRegisters;
        if ($this->maxOperandStackBytesPerFunction->present) $data['max_operand_stack_bytes_per_function'] = $this->maxOperandStackBytesPerFunction->value;
        if ($this->maxParamsPerContract->present) $data['max_params_per_contract'] = $this->maxParamsPerContract->value;
        if ($this->maxParamsPerFunction->present) $data['max_params_per_function'] = $this->maxParamsPerFunction->value;
        if ($this->maxPromisesPerFunctionCallAction !== null) $data['max_promises_per_function_call_action'] = $this->maxPromisesPerFunctionCallAction;
        if ($this->maxReceiptSize !== null) $data['max_receipt_size'] = $this->maxReceiptSize;
        if ($this->maxReceiptTotalInputSize !== null) $data['max_receipt_total_input_size'] = $this->maxReceiptTotalInputSize;
        if ($this->maxRegisterSize !== null) $data['max_register_size'] = $this->maxRegisterSize;
        if ($this->maxStackHeight !== null) $data['max_stack_height'] = $this->maxStackHeight;
        if ($this->maxStateInitEntries !== null) $data['max_state_init_entries'] = $this->maxStateInitEntries;
        if ($this->maxTablesPerContract->present) $data['max_tables_per_contract'] = $this->maxTablesPerContract->value;
        if ($this->maxTotalLogLength !== null) $data['max_total_log_length'] = $this->maxTotalLogLength;
        if ($this->maxTotalPrepaidGas !== null) $data['max_total_prepaid_gas'] = $this->maxTotalPrepaidGas;
        if ($this->maxTransactionSize !== null) $data['max_transaction_size'] = $this->maxTransactionSize;
        if ($this->maxTypesPerContract->present) $data['max_types_per_contract'] = $this->maxTypesPerContract->value;
        if ($this->maxUniversalStateInitKeys !== null) $data['max_universal_state_init_keys'] = $this->maxUniversalStateInitKeys;
        if ($this->maxYieldPayloadSize !== null) $data['max_yield_payload_size'] = $this->maxYieldPayloadSize;
        if ($this->minContractSizePerLocal->present) $data['min_contract_size_per_local'] = $this->minContractSizePerLocal->value;
        if ($this->perReceiptStorageProofSizeLimit !== null) $data['per_receipt_storage_proof_size_limit'] = $this->perReceiptStorageProofSizeLimit;
        if ($this->registersMemoryLimit !== null) $data['registers_memory_limit'] = $this->registersMemoryLimit;
        if ($this->yieldTimeoutLengthInBlocks !== null) $data['yield_timeout_length_in_blocks'] = $this->yieldTimeoutLengthInBlocks;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'account_id_validity_rules_version' => 
    array (
      'default' => 2,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'initial_memory_pages' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_actions_per_receipt' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_arguments_length' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_blocks_per_contract' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'max_blocks_per_function' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'max_contract_size' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_deploy_actions_per_receipt' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_elements_per_contract_table' => 
    array (
      'format' => 'uint',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'max_function_body_size' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'max_functions_number_per_contract' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'max_gas_burnt' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'max_gas_burnt_external' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'max_globals_per_contract' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'max_instrumented_code_size' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'max_length_method_name' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_length_returned_data' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_length_storage_key' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_length_storage_value' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_locals_per_contract' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'max_memory_pages' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_number_bytes_method_names' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_number_input_data_dependencies' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_number_logs' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_number_registers' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_operand_stack_bytes_per_function' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'max_params_per_contract' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'max_params_per_function' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'max_promises_per_function_call_action' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_receipt_size' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_receipt_total_input_size' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_register_size' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_stack_height' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_state_init_entries' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_tables_per_contract' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'max_total_log_length' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_total_prepaid_gas' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'max_transaction_size' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_types_per_contract' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'max_universal_state_init_keys' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_yield_payload_size' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'min_contract_size_per_local' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'per_receipt_storage_proof_size_limit' => 
    array (
      'format' => 'uint',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'registers_memory_limit' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'yield_timeout_length_in_blocks' => 
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
), 'LimitConfig'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'account_id_validity_rules_version' => 
    array (
      'default' => 2,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'initial_memory_pages' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_actions_per_receipt' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_arguments_length' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_blocks_per_contract' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'max_blocks_per_function' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'max_contract_size' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_deploy_actions_per_receipt' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_elements_per_contract_table' => 
    array (
      'format' => 'uint',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'max_function_body_size' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'max_functions_number_per_contract' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'max_gas_burnt' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'max_gas_burnt_external' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'max_globals_per_contract' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'max_instrumented_code_size' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'max_length_method_name' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_length_returned_data' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_length_storage_key' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_length_storage_value' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_locals_per_contract' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'max_memory_pages' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_number_bytes_method_names' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_number_input_data_dependencies' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_number_logs' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_number_registers' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_operand_stack_bytes_per_function' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'max_params_per_contract' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'max_params_per_function' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'max_promises_per_function_call_action' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_receipt_size' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_receipt_total_input_size' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_register_size' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_stack_height' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_state_init_entries' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_tables_per_contract' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'max_total_log_length' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_total_prepaid_gas' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'max_transaction_size' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_types_per_contract' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'max_universal_state_init_keys' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_yield_payload_size' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'min_contract_size_per_local' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'per_receipt_storage_proof_size_limit' => 
    array (
      'format' => 'uint',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'registers_memory_limit' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'yield_timeout_length_in_blocks' => 
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
), 'LimitConfig');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
