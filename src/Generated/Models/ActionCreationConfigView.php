<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Describes the cost of creating a specific action, `Action`. Includes all variants.
 */
final readonly class ActionCreationConfigView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * Base cost of adding a key.
         *
         * @var \Near\JsonRpc\Generated\Models\AccessKeyCreationConfigView|null
         */
        public \Near\JsonRpc\Generated\Models\AccessKeyCreationConfigView|null $addKeyCost = null,
        /**
         * Base cost of creating an account.
         *
         * @var \Near\JsonRpc\Generated\Models\Fee|null
         */
        public \Near\JsonRpc\Generated\Models\Fee|null $createAccountCost = null,
        /**
         * Base cost for processing a delegate action.
         *
         * This is on top of the costs for the actions inside the delegate action.
         *
         * @var \Near\JsonRpc\Generated\Models\Fee|null
         */
        public \Near\JsonRpc\Generated\Models\Fee|null $delegateCost = null,
        /**
         * Base cost of deleting an account.
         *
         * @var \Near\JsonRpc\Generated\Models\Fee|null
         */
        public \Near\JsonRpc\Generated\Models\Fee|null $deleteAccountCost = null,
        /**
         * Base cost of deleting a key.
         *
         * @var \Near\JsonRpc\Generated\Models\Fee|null
         */
        public \Near\JsonRpc\Generated\Models\Fee|null $deleteKeyCost = null,
        /**
         * Base cost of deploying a contract.
         *
         * @var \Near\JsonRpc\Generated\Models\Fee|null
         */
        public \Near\JsonRpc\Generated\Models\Fee|null $deployContractCost = null,
        /**
         * Cost per byte of deploying a contract.
         *
         * @var \Near\JsonRpc\Generated\Models\Fee|null
         */
        public \Near\JsonRpc\Generated\Models\Fee|null $deployContractCostPerByte = null,
        /**
         * Base cost of calling a function.
         *
         * @var \Near\JsonRpc\Generated\Models\Fee|null
         */
        public \Near\JsonRpc\Generated\Models\Fee|null $functionCallCost = null,
        /**
         * Cost per byte of method name and arguments of calling a function.
         *
         * @var \Near\JsonRpc\Generated\Models\Fee|null
         */
        public \Near\JsonRpc\Generated\Models\Fee|null $functionCallCostPerByte = null,
        /**
         * Base cost of staking.
         *
         * @var \Near\JsonRpc\Generated\Models\Fee|null
         */
        public \Near\JsonRpc\Generated\Models\Fee|null $stakeCost = null,
        /**
         * Base cost of making a transfer.
         *
         * @var \Near\JsonRpc\Generated\Models\Fee|null
         */
        public \Near\JsonRpc\Generated\Models\Fee|null $transferCost = null,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        if ($this->addKeyCost !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->addKeyCost, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccessKeyCreationConfigView',
  'nullable' => false,
), 'add_key_cost');
        if ($this->createAccountCost !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->createAccountCost, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
  'nullable' => false,
), 'create_account_cost');
        if ($this->delegateCost !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->delegateCost, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
  'nullable' => false,
), 'delegate_cost');
        if ($this->deleteAccountCost !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->deleteAccountCost, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
  'nullable' => false,
), 'delete_account_cost');
        if ($this->deleteKeyCost !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->deleteKeyCost, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
  'nullable' => false,
), 'delete_key_cost');
        if ($this->deployContractCost !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->deployContractCost, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
  'nullable' => false,
), 'deploy_contract_cost');
        if ($this->deployContractCostPerByte !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->deployContractCostPerByte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
  'nullable' => false,
), 'deploy_contract_cost_per_byte');
        if ($this->functionCallCost !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->functionCallCost, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
  'nullable' => false,
), 'function_call_cost');
        if ($this->functionCallCostPerByte !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->functionCallCostPerByte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
  'nullable' => false,
), 'function_call_cost_per_byte');
        if ($this->stakeCost !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->stakeCost, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
  'nullable' => false,
), 'stake_cost');
        if ($this->transferCost !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->transferCost, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
  'nullable' => false,
), 'transfer_cost');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionCreationConfigView.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        $extra = array_diff_key($data, array (
  'add_key_cost' => true,
  'create_account_cost' => true,
  'delegate_cost' => true,
  'delete_account_cost' => true,
  'delete_key_cost' => true,
  'deploy_contract_cost' => true,
  'deploy_contract_cost_per_byte' => true,
  'function_call_cost' => true,
  'function_call_cost_per_byte' => true,
  'stake_cost' => true,
  'transfer_cost' => true,
));
        return new self(
            addKeyCost: array_key_exists('add_key_cost', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['add_key_cost'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccessKeyCreationConfigView',
  'nullable' => false,
), 'add_key_cost') : null,
            createAccountCost: array_key_exists('create_account_cost', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['create_account_cost'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
  'nullable' => false,
), 'create_account_cost') : null,
            delegateCost: array_key_exists('delegate_cost', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['delegate_cost'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
  'nullable' => false,
), 'delegate_cost') : null,
            deleteAccountCost: array_key_exists('delete_account_cost', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['delete_account_cost'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
  'nullable' => false,
), 'delete_account_cost') : null,
            deleteKeyCost: array_key_exists('delete_key_cost', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['delete_key_cost'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
  'nullable' => false,
), 'delete_key_cost') : null,
            deployContractCost: array_key_exists('deploy_contract_cost', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['deploy_contract_cost'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
  'nullable' => false,
), 'deploy_contract_cost') : null,
            deployContractCostPerByte: array_key_exists('deploy_contract_cost_per_byte', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['deploy_contract_cost_per_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
  'nullable' => false,
), 'deploy_contract_cost_per_byte') : null,
            functionCallCost: array_key_exists('function_call_cost', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['function_call_cost'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
  'nullable' => false,
), 'function_call_cost') : null,
            functionCallCostPerByte: array_key_exists('function_call_cost_per_byte', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['function_call_cost_per_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
  'nullable' => false,
), 'function_call_cost_per_byte') : null,
            stakeCost: array_key_exists('stake_cost', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['stake_cost'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
  'nullable' => false,
), 'stake_cost') : null,
            transferCost: array_key_exists('transfer_cost', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['transfer_cost'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
  'nullable' => false,
), 'transfer_cost') : null,
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
        if ($this->addKeyCost !== null) $data['add_key_cost'] = $this->addKeyCost;
        if ($this->createAccountCost !== null) $data['create_account_cost'] = $this->createAccountCost;
        if ($this->delegateCost !== null) $data['delegate_cost'] = $this->delegateCost;
        if ($this->deleteAccountCost !== null) $data['delete_account_cost'] = $this->deleteAccountCost;
        if ($this->deleteKeyCost !== null) $data['delete_key_cost'] = $this->deleteKeyCost;
        if ($this->deployContractCost !== null) $data['deploy_contract_cost'] = $this->deployContractCost;
        if ($this->deployContractCostPerByte !== null) $data['deploy_contract_cost_per_byte'] = $this->deployContractCostPerByte;
        if ($this->functionCallCost !== null) $data['function_call_cost'] = $this->functionCallCost;
        if ($this->functionCallCostPerByte !== null) $data['function_call_cost_per_byte'] = $this->functionCallCostPerByte;
        if ($this->stakeCost !== null) $data['stake_cost'] = $this->stakeCost;
        if ($this->transferCost !== null) $data['transfer_cost'] = $this->transferCost;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'add_key_cost' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccessKeyCreationConfigView',
      'nullable' => false,
    ),
    'create_account_cost' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
      'nullable' => false,
    ),
    'delegate_cost' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
      'nullable' => false,
    ),
    'delete_account_cost' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
      'nullable' => false,
    ),
    'delete_key_cost' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
      'nullable' => false,
    ),
    'deploy_contract_cost' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
      'nullable' => false,
    ),
    'deploy_contract_cost_per_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
      'nullable' => false,
    ),
    'function_call_cost' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
      'nullable' => false,
    ),
    'function_call_cost_per_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
      'nullable' => false,
    ),
    'stake_cost' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
      'nullable' => false,
    ),
    'transfer_cost' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
      'nullable' => false,
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'ActionCreationConfigView'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'add_key_cost' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccessKeyCreationConfigView',
      'nullable' => false,
    ),
    'create_account_cost' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
      'nullable' => false,
    ),
    'delegate_cost' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
      'nullable' => false,
    ),
    'delete_account_cost' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
      'nullable' => false,
    ),
    'delete_key_cost' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
      'nullable' => false,
    ),
    'deploy_contract_cost' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
      'nullable' => false,
    ),
    'deploy_contract_cost_per_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
      'nullable' => false,
    ),
    'function_call_cost' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
      'nullable' => false,
    ),
    'function_call_cost_per_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
      'nullable' => false,
    ),
    'stake_cost' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
      'nullable' => false,
    ),
    'transfer_cost' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
      'nullable' => false,
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'ActionCreationConfigView');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
