<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Describes different fees for the runtime
 */
final readonly class RuntimeFeesConfigView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * Describes the cost of creating a certain action, `Action`. Includes all variants.
         *
         * @var \Near\JsonRpc\Generated\Models\ActionCreationConfigView|null
         */
        public \Near\JsonRpc\Generated\Models\ActionCreationConfigView|null $actionCreationConfig = null,
        /**
         * Describes the cost of creating an action receipt, `ActionReceipt`, excluding the actual cost
         * of actions.
         * - `send` cost is burned when a receipt is created using `promise_create` or
         *     `promise_batch_create`
         * - `exec` cost is burned when the receipt is being executed.
         *
         * @var \Near\JsonRpc\Generated\Models\Fee|null
         */
        public \Near\JsonRpc\Generated\Models\Fee|null $actionReceiptCreationConfig = null,
        /**
         * Fraction of the burnt gas to reward to the contract account for execution.
         *
         * @var list<int>|null
         */
        public array|null $burntGasReward = null,
        /**
         * Describes the cost of creating a data receipt, `DataReceipt`.
         *
         * @var \Near\JsonRpc\Generated\Models\DataReceiptCreationConfigView|null
         */
        public \Near\JsonRpc\Generated\Models\DataReceiptCreationConfigView|null $dataReceiptCreationConfig = null,
        /**
         * Describes the extra cost of verifying an ML-DSA-65 signature above the
         * cost of verifying the standard signature types.
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $mlDsa65VerificationCost = null,
        /**
         * Pessimistic gas price inflation ratio.
         *
         * @var list<int>|null
         */
        public array|null $pessimisticGasPriceInflationRatio = null,
        /**
         * Describes fees for storage.
         *
         * @var \Near\JsonRpc\Generated\Models\StorageUsageConfigView|null
         */
        public \Near\JsonRpc\Generated\Models\StorageUsageConfigView|null $storageUsageConfig = null,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        if ($this->actionCreationConfig !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->actionCreationConfig, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionCreationConfigView',
  'nullable' => false,
), 'action_creation_config');
        if ($this->actionReceiptCreationConfig !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->actionReceiptCreationConfig, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
  'nullable' => false,
), 'action_receipt_creation_config');
        if ($this->burntGasReward !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->burntGasReward, array (
  'items' => 
  array (
    'format' => 'int32',
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'burnt_gas_reward');
        if ($this->dataReceiptCreationConfig !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->dataReceiptCreationConfig, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DataReceiptCreationConfigView',
  'nullable' => false,
), 'data_receipt_creation_config');
        if ($this->mlDsa65VerificationCost !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->mlDsa65VerificationCost, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'ml_dsa_65_verification_cost');
        if ($this->pessimisticGasPriceInflationRatio !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->pessimisticGasPriceInflationRatio, array (
  'items' => 
  array (
    'format' => 'int32',
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'pessimistic_gas_price_inflation_ratio');
        if ($this->storageUsageConfig !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->storageUsageConfig, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StorageUsageConfigView',
  'nullable' => false,
), 'storage_usage_config');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RuntimeFeesConfigView.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        $extra = array_diff_key($data, array (
  'action_creation_config' => true,
  'action_receipt_creation_config' => true,
  'burnt_gas_reward' => true,
  'data_receipt_creation_config' => true,
  'ml_dsa_65_verification_cost' => true,
  'pessimistic_gas_price_inflation_ratio' => true,
  'storage_usage_config' => true,
));
        return new self(
            actionCreationConfig: array_key_exists('action_creation_config', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['action_creation_config'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionCreationConfigView',
  'nullable' => false,
), 'action_creation_config') : null,
            actionReceiptCreationConfig: array_key_exists('action_receipt_creation_config', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['action_receipt_creation_config'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
  'nullable' => false,
), 'action_receipt_creation_config') : null,
            burntGasReward: array_key_exists('burnt_gas_reward', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['burnt_gas_reward'], array (
  'items' => 
  array (
    'format' => 'int32',
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'burnt_gas_reward') : null,
            dataReceiptCreationConfig: array_key_exists('data_receipt_creation_config', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['data_receipt_creation_config'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DataReceiptCreationConfigView',
  'nullable' => false,
), 'data_receipt_creation_config') : null,
            mlDsa65VerificationCost: array_key_exists('ml_dsa_65_verification_cost', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['ml_dsa_65_verification_cost'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'ml_dsa_65_verification_cost') : null,
            pessimisticGasPriceInflationRatio: array_key_exists('pessimistic_gas_price_inflation_ratio', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['pessimistic_gas_price_inflation_ratio'], array (
  'items' => 
  array (
    'format' => 'int32',
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'pessimistic_gas_price_inflation_ratio') : null,
            storageUsageConfig: array_key_exists('storage_usage_config', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['storage_usage_config'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StorageUsageConfigView',
  'nullable' => false,
), 'storage_usage_config') : null,
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
        if ($this->actionCreationConfig !== null) $data['action_creation_config'] = $this->actionCreationConfig;
        if ($this->actionReceiptCreationConfig !== null) $data['action_receipt_creation_config'] = $this->actionReceiptCreationConfig;
        if ($this->burntGasReward !== null) $data['burnt_gas_reward'] = $this->burntGasReward;
        if ($this->dataReceiptCreationConfig !== null) $data['data_receipt_creation_config'] = $this->dataReceiptCreationConfig;
        if ($this->mlDsa65VerificationCost !== null) $data['ml_dsa_65_verification_cost'] = $this->mlDsa65VerificationCost;
        if ($this->pessimisticGasPriceInflationRatio !== null) $data['pessimistic_gas_price_inflation_ratio'] = $this->pessimisticGasPriceInflationRatio;
        if ($this->storageUsageConfig !== null) $data['storage_usage_config'] = $this->storageUsageConfig;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'action_creation_config' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionCreationConfigView',
      'nullable' => false,
    ),
    'action_receipt_creation_config' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
      'nullable' => false,
    ),
    'burnt_gas_reward' => 
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
    'data_receipt_creation_config' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DataReceiptCreationConfigView',
      'nullable' => false,
    ),
    'ml_dsa_65_verification_cost' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'pessimistic_gas_price_inflation_ratio' => 
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
    'storage_usage_config' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StorageUsageConfigView',
      'nullable' => false,
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'RuntimeFeesConfigView'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'action_creation_config' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionCreationConfigView',
      'nullable' => false,
    ),
    'action_receipt_creation_config' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
      'nullable' => false,
    ),
    'burnt_gas_reward' => 
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
    'data_receipt_creation_config' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DataReceiptCreationConfigView',
      'nullable' => false,
    ),
    'ml_dsa_65_verification_cost' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'pessimistic_gas_price_inflation_ratio' => 
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
    'storage_usage_config' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StorageUsageConfigView',
      'nullable' => false,
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'RuntimeFeesConfigView');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
