<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * View that preserves JSON format of the runtime config.
 */
final readonly class RuntimeConfigView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * How much creating an account should cost in NEAR. Taken into account when burning gas for
         * account creation.
         *
         * @var \Near\JsonRpc\Generated\Models\NearToken|null
         */
        public \Near\JsonRpc\Generated\Models\NearToken|null $accountCreationCharge = null,
        /**
         * Config that defines rules for account creation.
         *
         * @var \Near\JsonRpc\Generated\Models\AccountCreationConfigView|null
         */
        public \Near\JsonRpc\Generated\Models\AccountCreationConfigView|null $accountCreationConfig = null,
        /**
         * The configuration for congestion control.
         *
         * @var \Near\JsonRpc\Generated\Models\CongestionControlConfigView|null
         */
        public \Near\JsonRpc\Generated\Models\CongestionControlConfigView|null $congestionControlConfig = null,
        /**
         * Minimum price at which the gas attached to a receipt is purchased. The price at which it is
         * burned might be lower, in which case the difference is refunded after execution.
         *
         * @var \Near\JsonRpc\Generated\Models\NearToken|null
         */
        public \Near\JsonRpc\Generated\Models\NearToken|null $minGasPurchasePrice = null,
        /**
         * Amount of yN per byte required to have on the account.  See
         * <https://nomicon.io/Economics/Economics.html#state-stake> for details.
         *
         * @var \Near\JsonRpc\Generated\Models\NearToken|null
         */
        public \Near\JsonRpc\Generated\Models\NearToken|null $storageAmountPerByte = null,
        /**
         * Costs of different actions that need to be performed when sending and
         * processing transaction and receipts.
         *
         * @var \Near\JsonRpc\Generated\Models\RuntimeFeesConfigView|null
         */
        public \Near\JsonRpc\Generated\Models\RuntimeFeesConfigView|null $transactionCosts = null,
        /**
         * Config of wasm operations.
         *
         * @var \Near\JsonRpc\Generated\Models\VMConfigView|null
         */
        public \Near\JsonRpc\Generated\Models\VMConfigView|null $wasmConfig = null,
        /**
         * Configuration specific to ChunkStateWitness.
         *
         * @var \Near\JsonRpc\Generated\Models\WitnessConfigView|null
         */
        public \Near\JsonRpc\Generated\Models\WitnessConfigView|null $witnessConfig = null,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        if ($this->accountCreationCharge !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->accountCreationCharge, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'account_creation_charge');
        if ($this->accountCreationConfig !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->accountCreationConfig, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountCreationConfigView',
  'nullable' => false,
), 'account_creation_config');
        if ($this->congestionControlConfig !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->congestionControlConfig, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CongestionControlConfigView',
  'nullable' => false,
), 'congestion_control_config');
        if ($this->minGasPurchasePrice !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->minGasPurchasePrice, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'min_gas_purchase_price');
        if ($this->storageAmountPerByte !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->storageAmountPerByte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'storage_amount_per_byte');
        if ($this->transactionCosts !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->transactionCosts, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RuntimeFeesConfigView',
  'nullable' => false,
), 'transaction_costs');
        if ($this->wasmConfig !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->wasmConfig, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\VMConfigView',
  'nullable' => false,
), 'wasm_config');
        if ($this->witnessConfig !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->witnessConfig, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\WitnessConfigView',
  'nullable' => false,
), 'witness_config');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RuntimeConfigView.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        $extra = array_diff_key($data, array (
  'account_creation_charge' => true,
  'account_creation_config' => true,
  'congestion_control_config' => true,
  'min_gas_purchase_price' => true,
  'storage_amount_per_byte' => true,
  'transaction_costs' => true,
  'wasm_config' => true,
  'witness_config' => true,
));
        return new self(
            accountCreationCharge: array_key_exists('account_creation_charge', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['account_creation_charge'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'account_creation_charge') : null,
            accountCreationConfig: array_key_exists('account_creation_config', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['account_creation_config'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountCreationConfigView',
  'nullable' => false,
), 'account_creation_config') : null,
            congestionControlConfig: array_key_exists('congestion_control_config', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['congestion_control_config'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CongestionControlConfigView',
  'nullable' => false,
), 'congestion_control_config') : null,
            minGasPurchasePrice: array_key_exists('min_gas_purchase_price', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['min_gas_purchase_price'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'min_gas_purchase_price') : null,
            storageAmountPerByte: array_key_exists('storage_amount_per_byte', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['storage_amount_per_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'storage_amount_per_byte') : null,
            transactionCosts: array_key_exists('transaction_costs', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['transaction_costs'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RuntimeFeesConfigView',
  'nullable' => false,
), 'transaction_costs') : null,
            wasmConfig: array_key_exists('wasm_config', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['wasm_config'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\VMConfigView',
  'nullable' => false,
), 'wasm_config') : null,
            witnessConfig: array_key_exists('witness_config', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['witness_config'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\WitnessConfigView',
  'nullable' => false,
), 'witness_config') : null,
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
        if ($this->accountCreationCharge !== null) $data['account_creation_charge'] = $this->accountCreationCharge;
        if ($this->accountCreationConfig !== null) $data['account_creation_config'] = $this->accountCreationConfig;
        if ($this->congestionControlConfig !== null) $data['congestion_control_config'] = $this->congestionControlConfig;
        if ($this->minGasPurchasePrice !== null) $data['min_gas_purchase_price'] = $this->minGasPurchasePrice;
        if ($this->storageAmountPerByte !== null) $data['storage_amount_per_byte'] = $this->storageAmountPerByte;
        if ($this->transactionCosts !== null) $data['transaction_costs'] = $this->transactionCosts;
        if ($this->wasmConfig !== null) $data['wasm_config'] = $this->wasmConfig;
        if ($this->witnessConfig !== null) $data['witness_config'] = $this->witnessConfig;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'account_creation_charge' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'account_creation_config' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountCreationConfigView',
      'nullable' => false,
    ),
    'congestion_control_config' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CongestionControlConfigView',
      'nullable' => false,
    ),
    'min_gas_purchase_price' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'storage_amount_per_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'transaction_costs' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RuntimeFeesConfigView',
      'nullable' => false,
    ),
    'wasm_config' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\VMConfigView',
      'nullable' => false,
    ),
    'witness_config' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\WitnessConfigView',
      'nullable' => false,
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'RuntimeConfigView'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'account_creation_charge' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'account_creation_config' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountCreationConfigView',
      'nullable' => false,
    ),
    'congestion_control_config' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CongestionControlConfigView',
      'nullable' => false,
    ),
    'min_gas_purchase_price' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'storage_amount_per_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'transaction_costs' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RuntimeFeesConfigView',
      'nullable' => false,
    ),
    'wasm_config' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\VMConfigView',
      'nullable' => false,
    ),
    'witness_config' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\WitnessConfigView',
      'nullable' => false,
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'RuntimeConfigView');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
