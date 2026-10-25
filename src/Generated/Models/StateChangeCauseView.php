<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * See crate::types::StateChangeCause for details.
 */
final readonly class StateChangeCauseView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\StateChangeCauseViewNotWritableToDisk|\Near\JsonRpc\Generated\Models\StateChangeCauseViewInitialState|\Near\JsonRpc\Generated\Models\StateChangeCauseViewTransactionProcessing|\Near\JsonRpc\Generated\Models\StateChangeCauseViewActionReceiptProcessingStarted|\Near\JsonRpc\Generated\Models\StateChangeCauseViewActionReceiptGasReward|\Near\JsonRpc\Generated\Models\StateChangeCauseViewReceiptProcessing|\Near\JsonRpc\Generated\Models\StateChangeCauseViewPostponedReceipt|\Near\JsonRpc\Generated\Models\StateChangeCauseViewUpdatedDelayedReceipts|\Near\JsonRpc\Generated\Models\StateChangeCauseViewValidatorAccountsUpdate|\Near\JsonRpc\Generated\Models\StateChangeCauseViewMigration|\Near\JsonRpc\Generated\Models\StateChangeCauseViewBandwidthSchedulerStateUpdate */
    public \Near\JsonRpc\Generated\Models\StateChangeCauseViewNotWritableToDisk|\Near\JsonRpc\Generated\Models\StateChangeCauseViewInitialState|\Near\JsonRpc\Generated\Models\StateChangeCauseViewTransactionProcessing|\Near\JsonRpc\Generated\Models\StateChangeCauseViewActionReceiptProcessingStarted|\Near\JsonRpc\Generated\Models\StateChangeCauseViewActionReceiptGasReward|\Near\JsonRpc\Generated\Models\StateChangeCauseViewReceiptProcessing|\Near\JsonRpc\Generated\Models\StateChangeCauseViewPostponedReceipt|\Near\JsonRpc\Generated\Models\StateChangeCauseViewUpdatedDelayedReceipts|\Near\JsonRpc\Generated\Models\StateChangeCauseViewValidatorAccountsUpdate|\Near\JsonRpc\Generated\Models\StateChangeCauseViewMigration|\Near\JsonRpc\Generated\Models\StateChangeCauseViewBandwidthSchedulerStateUpdate $root;

    public function __construct(\Near\JsonRpc\Generated\Models\StateChangeCauseViewNotWritableToDisk|\Near\JsonRpc\Generated\Models\StateChangeCauseViewInitialState|\Near\JsonRpc\Generated\Models\StateChangeCauseViewTransactionProcessing|\Near\JsonRpc\Generated\Models\StateChangeCauseViewActionReceiptProcessingStarted|\Near\JsonRpc\Generated\Models\StateChangeCauseViewActionReceiptGasReward|\Near\JsonRpc\Generated\Models\StateChangeCauseViewReceiptProcessing|\Near\JsonRpc\Generated\Models\StateChangeCauseViewPostponedReceipt|\Near\JsonRpc\Generated\Models\StateChangeCauseViewUpdatedDelayedReceipts|\Near\JsonRpc\Generated\Models\StateChangeCauseViewValidatorAccountsUpdate|\Near\JsonRpc\Generated\Models\StateChangeCauseViewMigration|\Near\JsonRpc\Generated\Models\StateChangeCauseViewBandwidthSchedulerStateUpdate $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\StateChangeCauseViewNotWritableToDisk::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\StateChangeCauseViewInitialState::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\StateChangeCauseViewTransactionProcessing::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\StateChangeCauseViewActionReceiptProcessingStarted::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[4] = \Near\JsonRpc\Generated\Models\StateChangeCauseViewActionReceiptGasReward::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[5] = \Near\JsonRpc\Generated\Models\StateChangeCauseViewReceiptProcessing::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[6] = \Near\JsonRpc\Generated\Models\StateChangeCauseViewPostponedReceipt::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[7] = \Near\JsonRpc\Generated\Models\StateChangeCauseViewUpdatedDelayedReceipts::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[8] = \Near\JsonRpc\Generated\Models\StateChangeCauseViewValidatorAccountsUpdate::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[9] = \Near\JsonRpc\Generated\Models\StateChangeCauseViewMigration::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[10] = \Near\JsonRpc\Generated\Models\StateChangeCauseViewBandwidthSchedulerStateUpdate::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for StateChangeCauseView.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\StateChangeCauseViewNotWritableToDisk => 'not_writable_to_disk',
            $this->root instanceof \Near\JsonRpc\Generated\Models\StateChangeCauseViewInitialState => 'initial_state',
            $this->root instanceof \Near\JsonRpc\Generated\Models\StateChangeCauseViewTransactionProcessing => 'transaction_processing',
            $this->root instanceof \Near\JsonRpc\Generated\Models\StateChangeCauseViewActionReceiptProcessingStarted => 'action_receipt_processing_started',
            $this->root instanceof \Near\JsonRpc\Generated\Models\StateChangeCauseViewActionReceiptGasReward => 'action_receipt_gas_reward',
            $this->root instanceof \Near\JsonRpc\Generated\Models\StateChangeCauseViewReceiptProcessing => 'receipt_processing',
            $this->root instanceof \Near\JsonRpc\Generated\Models\StateChangeCauseViewPostponedReceipt => 'postponed_receipt',
            $this->root instanceof \Near\JsonRpc\Generated\Models\StateChangeCauseViewUpdatedDelayedReceipts => 'updated_delayed_receipts',
            $this->root instanceof \Near\JsonRpc\Generated\Models\StateChangeCauseViewValidatorAccountsUpdate => 'validator_accounts_update',
            $this->root instanceof \Near\JsonRpc\Generated\Models\StateChangeCauseViewMigration => 'migration',
            $this->root instanceof \Near\JsonRpc\Generated\Models\StateChangeCauseViewBandwidthSchedulerStateUpdate => 'bandwidth_scheduler_state_update',
            default => throw new \LogicException('Unknown StateChangeCauseView variant.'),
        };
    }
    public static function notWritableToDisk(\Near\JsonRpc\Generated\Models\StateChangeCauseViewNotWritableToDisk $variant): self { return new self($variant); }
    public static function initialState(\Near\JsonRpc\Generated\Models\StateChangeCauseViewInitialState $variant): self { return new self($variant); }
    public static function transactionProcessing(\Near\JsonRpc\Generated\Models\StateChangeCauseViewTransactionProcessing $variant): self { return new self($variant); }
    public static function actionReceiptProcessingStarted(\Near\JsonRpc\Generated\Models\StateChangeCauseViewActionReceiptProcessingStarted $variant): self { return new self($variant); }
    public static function actionReceiptGasReward(\Near\JsonRpc\Generated\Models\StateChangeCauseViewActionReceiptGasReward $variant): self { return new self($variant); }
    public static function receiptProcessing(\Near\JsonRpc\Generated\Models\StateChangeCauseViewReceiptProcessing $variant): self { return new self($variant); }
    public static function postponedReceipt(\Near\JsonRpc\Generated\Models\StateChangeCauseViewPostponedReceipt $variant): self { return new self($variant); }
    public static function updatedDelayedReceipts(\Near\JsonRpc\Generated\Models\StateChangeCauseViewUpdatedDelayedReceipts $variant): self { return new self($variant); }
    public static function validatorAccountsUpdate(\Near\JsonRpc\Generated\Models\StateChangeCauseViewValidatorAccountsUpdate $variant): self { return new self($variant); }
    public static function migration(\Near\JsonRpc\Generated\Models\StateChangeCauseViewMigration $variant): self { return new self($variant); }
    public static function bandwidthSchedulerStateUpdate(\Near\JsonRpc\Generated\Models\StateChangeCauseViewBandwidthSchedulerStateUpdate $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeCauseViewNotWritableToDisk',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeCauseViewInitialState',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeCauseViewTransactionProcessing',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeCauseViewActionReceiptProcessingStarted',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeCauseViewActionReceiptGasReward',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeCauseViewReceiptProcessing',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeCauseViewPostponedReceipt',
      'nullable' => false,
    ),
    7 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeCauseViewUpdatedDelayedReceipts',
      'nullable' => false,
    ),
    8 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeCauseViewValidatorAccountsUpdate',
      'nullable' => false,
    ),
    9 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeCauseViewMigration',
      'nullable' => false,
    ),
    10 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeCauseViewBandwidthSchedulerStateUpdate',
      'nullable' => false,
    ),
  ),
), 'root'));
        return $this->root;
    }
    public function jsonSerializeForEncoding(): mixed { return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeCauseViewNotWritableToDisk',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeCauseViewInitialState',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeCauseViewTransactionProcessing',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeCauseViewActionReceiptProcessingStarted',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeCauseViewActionReceiptGasReward',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeCauseViewReceiptProcessing',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeCauseViewPostponedReceipt',
      'nullable' => false,
    ),
    7 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeCauseViewUpdatedDelayedReceipts',
      'nullable' => false,
    ),
    8 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeCauseViewValidatorAccountsUpdate',
      'nullable' => false,
    ),
    9 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeCauseViewMigration',
      'nullable' => false,
    ),
    10 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeCauseViewBandwidthSchedulerStateUpdate',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
