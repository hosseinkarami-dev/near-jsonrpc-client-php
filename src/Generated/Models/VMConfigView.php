<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class VMConfigView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * See [VMConfig::bls12381_not_in_group_fix](crate::vm::Config::bls12381_not_in_group_fix).
         *
         * @var bool|null
         */
        public bool|null $bls12381NotInGroupFix = null,
        /**
         * Deprecated: custom sections are always discarded, so this is always `true`.
         *
         * @var bool|null
         */
        public bool|null $discardCustomSections = null,
        /**
         * Deprecated: ETH-implicit accounts are always enabled, so this is always `true`.
         *
         * @var bool|null
         */
        public bool|null $ethImplicitAccounts = null,
        /**
         * Costs for runtime externals
         *
         * @var \Near\JsonRpc\Generated\Models\ExtCostsConfigView|null
         */
        public \Near\JsonRpc\Generated\Models\ExtCostsConfigView|null $extCosts = null,
        /**
         * See [VMConfig::fix_contract_loading_cost](crate::vm::Config::fix_contract_loading_cost).
         *
         * @var bool|null
         */
        public bool|null $fixContractLoadingCost = null,
        /**
         * Deprecated: the global contract host functions are always enabled, so this is
         * always `true`.
         *
         * @var bool|null
         */
        public bool|null $globalContractHostFns = null,
        /**
         * Gas cost of a growing memory by single page.
         *
         * @var int|null
         */
        public int|null $growMemCost = null,
        /**
         * Deprecated
         *
         * @var bool|null
         */
        public bool|null $implicitAccountCreation = null,
        /**
         * Describes limits for VM and Runtime.
         *
         * TODO: Consider changing this to `VMLimitConfigView` to avoid dependency
         * on runtime.
         *
         * @var \Near\JsonRpc\Generated\Models\LimitConfig|null
         */
        public \Near\JsonRpc\Generated\Models\LimitConfig|null $limitConfig = null,
        /**
         * Base gas cost of a linear operation
         *
         * @var int|string|null
         */
        public int|string|null $linearOpBaseCost = null,
        /**
         * Unit gas cost of a linear operation
         *
         * @var int|string|null
         */
        public int|string|null $linearOpUnitCost = null,
        /**
         * See [VMConfig::ml_dsa_verify_host_fn](crate::vm::Config::ml_dsa_verify_host_fn).
         *
         * @var bool|null
         */
        public bool|null $mlDsaVerifyHostFn = null,
        /**
         * Deprecated: reference types and bulk memory wasm extensions are always
         * enabled, so this is always `true`.
         *
         * @var bool|null
         */
        public bool|null $reftypesBulkMemory = null,
        /**
         * Gas cost of a regular operation.
         *
         * @var int|null
         */
        public int|null $regularOpCost = null,
        /**
         * See [VMConfig::sha3_host_fns](crate::vm::Config::sha3_host_fns).
         *
         * @var bool|null
         */
        public bool|null $sha3HostFns = null,
        /**
         * Deprecated: contract storage is always read through flat storage, so this is
         * always `FlatStorage`.
         *
         * @var \Near\JsonRpc\Generated\Models\StorageGetMode|null
         */
        public \Near\JsonRpc\Generated\Models\StorageGetMode|null $storageGetMode = null,
        /**
         * See [VMConfig::universal_accounts](crate::vm::Config::universal_accounts).
         *
         * @var bool|null
         */
        public bool|null $universalAccounts = null,
        /**
         * See [VMConfig::vm_kind](crate::vm::Config::vm_kind).
         *
         * @var \Near\JsonRpc\Generated\Models\VMKind|null
         */
        public \Near\JsonRpc\Generated\Models\VMKind|null $vmKind = null,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        if ($this->bls12381NotInGroupFix !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->bls12381NotInGroupFix, array (
  'type' => 'boolean',
), 'bls12381_not_in_group_fix');
        if ($this->discardCustomSections !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->discardCustomSections, array (
  'type' => 'boolean',
), 'discard_custom_sections');
        if ($this->ethImplicitAccounts !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->ethImplicitAccounts, array (
  'type' => 'boolean',
), 'eth_implicit_accounts');
        if ($this->extCosts !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->extCosts, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExtCostsConfigView',
  'nullable' => false,
), 'ext_costs');
        if ($this->fixContractLoadingCost !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->fixContractLoadingCost, array (
  'type' => 'boolean',
), 'fix_contract_loading_cost');
        if ($this->globalContractHostFns !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->globalContractHostFns, array (
  'type' => 'boolean',
), 'global_contract_host_fns');
        if ($this->growMemCost !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->growMemCost, array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'grow_mem_cost');
        if ($this->implicitAccountCreation !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->implicitAccountCreation, array (
  'type' => 'boolean',
), 'implicit_account_creation');
        if ($this->limitConfig !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->limitConfig, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\LimitConfig',
  'nullable' => false,
), 'limit_config');
        if ($this->linearOpBaseCost !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->linearOpBaseCost, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'linear_op_base_cost');
        if ($this->linearOpUnitCost !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->linearOpUnitCost, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'linear_op_unit_cost');
        if ($this->mlDsaVerifyHostFn !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->mlDsaVerifyHostFn, array (
  'type' => 'boolean',
), 'ml_dsa_verify_host_fn');
        if ($this->reftypesBulkMemory !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->reftypesBulkMemory, array (
  'type' => 'boolean',
), 'reftypes_bulk_memory');
        if ($this->regularOpCost !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->regularOpCost, array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'regular_op_cost');
        if ($this->sha3HostFns !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->sha3HostFns, array (
  'type' => 'boolean',
), 'sha3_host_fns');
        if ($this->storageGetMode !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->storageGetMode, array (
  'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\StorageGetMode',
  'nullable' => false,
), 'storage_get_mode');
        if ($this->universalAccounts !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->universalAccounts, array (
  'type' => 'boolean',
), 'universal_accounts');
        if ($this->vmKind !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->vmKind, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\VMKind',
  'nullable' => false,
), 'vm_kind');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for VMConfigView.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        $extra = array_diff_key($data, array (
  'bls12381_not_in_group_fix' => true,
  'discard_custom_sections' => true,
  'eth_implicit_accounts' => true,
  'ext_costs' => true,
  'fix_contract_loading_cost' => true,
  'global_contract_host_fns' => true,
  'grow_mem_cost' => true,
  'implicit_account_creation' => true,
  'limit_config' => true,
  'linear_op_base_cost' => true,
  'linear_op_unit_cost' => true,
  'ml_dsa_verify_host_fn' => true,
  'reftypes_bulk_memory' => true,
  'regular_op_cost' => true,
  'sha3_host_fns' => true,
  'storage_get_mode' => true,
  'universal_accounts' => true,
  'vm_kind' => true,
));
        return new self(
            bls12381NotInGroupFix: array_key_exists('bls12381_not_in_group_fix', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['bls12381_not_in_group_fix'], array (
  'type' => 'boolean',
), 'bls12381_not_in_group_fix') : null,
            discardCustomSections: array_key_exists('discard_custom_sections', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['discard_custom_sections'], array (
  'type' => 'boolean',
), 'discard_custom_sections') : null,
            ethImplicitAccounts: array_key_exists('eth_implicit_accounts', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['eth_implicit_accounts'], array (
  'type' => 'boolean',
), 'eth_implicit_accounts') : null,
            extCosts: array_key_exists('ext_costs', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['ext_costs'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExtCostsConfigView',
  'nullable' => false,
), 'ext_costs') : null,
            fixContractLoadingCost: array_key_exists('fix_contract_loading_cost', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['fix_contract_loading_cost'], array (
  'type' => 'boolean',
), 'fix_contract_loading_cost') : null,
            globalContractHostFns: array_key_exists('global_contract_host_fns', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['global_contract_host_fns'], array (
  'type' => 'boolean',
), 'global_contract_host_fns') : null,
            growMemCost: array_key_exists('grow_mem_cost', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['grow_mem_cost'], array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'grow_mem_cost') : null,
            implicitAccountCreation: array_key_exists('implicit_account_creation', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['implicit_account_creation'], array (
  'type' => 'boolean',
), 'implicit_account_creation') : null,
            limitConfig: array_key_exists('limit_config', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['limit_config'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\LimitConfig',
  'nullable' => false,
), 'limit_config') : null,
            linearOpBaseCost: array_key_exists('linear_op_base_cost', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['linear_op_base_cost'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'linear_op_base_cost') : null,
            linearOpUnitCost: array_key_exists('linear_op_unit_cost', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['linear_op_unit_cost'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'linear_op_unit_cost') : null,
            mlDsaVerifyHostFn: array_key_exists('ml_dsa_verify_host_fn', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['ml_dsa_verify_host_fn'], array (
  'type' => 'boolean',
), 'ml_dsa_verify_host_fn') : null,
            reftypesBulkMemory: array_key_exists('reftypes_bulk_memory', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['reftypes_bulk_memory'], array (
  'type' => 'boolean',
), 'reftypes_bulk_memory') : null,
            regularOpCost: array_key_exists('regular_op_cost', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['regular_op_cost'], array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'regular_op_cost') : null,
            sha3HostFns: array_key_exists('sha3_host_fns', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['sha3_host_fns'], array (
  'type' => 'boolean',
), 'sha3_host_fns') : null,
            storageGetMode: array_key_exists('storage_get_mode', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['storage_get_mode'], array (
  'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\StorageGetMode',
  'nullable' => false,
), 'storage_get_mode') : null,
            universalAccounts: array_key_exists('universal_accounts', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['universal_accounts'], array (
  'type' => 'boolean',
), 'universal_accounts') : null,
            vmKind: array_key_exists('vm_kind', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['vm_kind'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\VMKind',
  'nullable' => false,
), 'vm_kind') : null,
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
        if ($this->bls12381NotInGroupFix !== null) $data['bls12381_not_in_group_fix'] = $this->bls12381NotInGroupFix;
        if ($this->discardCustomSections !== null) $data['discard_custom_sections'] = $this->discardCustomSections;
        if ($this->ethImplicitAccounts !== null) $data['eth_implicit_accounts'] = $this->ethImplicitAccounts;
        if ($this->extCosts !== null) $data['ext_costs'] = $this->extCosts;
        if ($this->fixContractLoadingCost !== null) $data['fix_contract_loading_cost'] = $this->fixContractLoadingCost;
        if ($this->globalContractHostFns !== null) $data['global_contract_host_fns'] = $this->globalContractHostFns;
        if ($this->growMemCost !== null) $data['grow_mem_cost'] = $this->growMemCost;
        if ($this->implicitAccountCreation !== null) $data['implicit_account_creation'] = $this->implicitAccountCreation;
        if ($this->limitConfig !== null) $data['limit_config'] = $this->limitConfig;
        if ($this->linearOpBaseCost !== null) $data['linear_op_base_cost'] = $this->linearOpBaseCost;
        if ($this->linearOpUnitCost !== null) $data['linear_op_unit_cost'] = $this->linearOpUnitCost;
        if ($this->mlDsaVerifyHostFn !== null) $data['ml_dsa_verify_host_fn'] = $this->mlDsaVerifyHostFn;
        if ($this->reftypesBulkMemory !== null) $data['reftypes_bulk_memory'] = $this->reftypesBulkMemory;
        if ($this->regularOpCost !== null) $data['regular_op_cost'] = $this->regularOpCost;
        if ($this->sha3HostFns !== null) $data['sha3_host_fns'] = $this->sha3HostFns;
        if ($this->storageGetMode !== null) $data['storage_get_mode'] = $this->storageGetMode;
        if ($this->universalAccounts !== null) $data['universal_accounts'] = $this->universalAccounts;
        if ($this->vmKind !== null) $data['vm_kind'] = $this->vmKind;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'bls12381_not_in_group_fix' => 
    array (
      'type' => 'boolean',
    ),
    'discard_custom_sections' => 
    array (
      'type' => 'boolean',
    ),
    'eth_implicit_accounts' => 
    array (
      'type' => 'boolean',
    ),
    'ext_costs' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExtCostsConfigView',
      'nullable' => false,
    ),
    'fix_contract_loading_cost' => 
    array (
      'type' => 'boolean',
    ),
    'global_contract_host_fns' => 
    array (
      'type' => 'boolean',
    ),
    'grow_mem_cost' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'implicit_account_creation' => 
    array (
      'type' => 'boolean',
    ),
    'limit_config' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\LimitConfig',
      'nullable' => false,
    ),
    'linear_op_base_cost' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'linear_op_unit_cost' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'ml_dsa_verify_host_fn' => 
    array (
      'type' => 'boolean',
    ),
    'reftypes_bulk_memory' => 
    array (
      'type' => 'boolean',
    ),
    'regular_op_cost' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'sha3_host_fns' => 
    array (
      'type' => 'boolean',
    ),
    'storage_get_mode' => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\StorageGetMode',
      'nullable' => false,
    ),
    'universal_accounts' => 
    array (
      'type' => 'boolean',
    ),
    'vm_kind' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\VMKind',
      'nullable' => false,
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'VMConfigView'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'bls12381_not_in_group_fix' => 
    array (
      'type' => 'boolean',
    ),
    'discard_custom_sections' => 
    array (
      'type' => 'boolean',
    ),
    'eth_implicit_accounts' => 
    array (
      'type' => 'boolean',
    ),
    'ext_costs' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExtCostsConfigView',
      'nullable' => false,
    ),
    'fix_contract_loading_cost' => 
    array (
      'type' => 'boolean',
    ),
    'global_contract_host_fns' => 
    array (
      'type' => 'boolean',
    ),
    'grow_mem_cost' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'implicit_account_creation' => 
    array (
      'type' => 'boolean',
    ),
    'limit_config' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\LimitConfig',
      'nullable' => false,
    ),
    'linear_op_base_cost' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'linear_op_unit_cost' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'ml_dsa_verify_host_fn' => 
    array (
      'type' => 'boolean',
    ),
    'reftypes_bulk_memory' => 
    array (
      'type' => 'boolean',
    ),
    'regular_op_cost' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'sha3_host_fns' => 
    array (
      'type' => 'boolean',
    ),
    'storage_get_mode' => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\StorageGetMode',
      'nullable' => false,
    ),
    'universal_accounts' => 
    array (
      'type' => 'boolean',
    ),
    'vm_kind' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\VMKind',
      'nullable' => false,
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'VMConfigView');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
