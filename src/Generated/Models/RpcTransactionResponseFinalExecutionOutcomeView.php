<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Execution outcome of the transaction and all the subsequent receipts.
 * Could be not finalized yet
 */
final readonly class RpcTransactionResponseFinalExecutionOutcomeView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * The execution outcome of receipts.
         *
         * @var list<\Near\JsonRpc\Generated\Models\ExecutionOutcomeWithIdView>
         */
        public array $receiptsOutcome,
        /**
         * Execution status defined by chain.rs:get_final_transaction_result
         * FinalExecutionStatus::NotStarted - the tx is not converted to the receipt yet
         * FinalExecutionStatus::Started - we have at least 1 receipt, but the first leaf receipt_id (using dfs) hasn't finished the execution
         * FinalExecutionStatus::Failure - the result of the first leaf receipt_id
         * FinalExecutionStatus::SuccessValue - the result of the first leaf receipt_id
         *
         * @var \Near\JsonRpc\Generated\Models\FinalExecutionStatus
         */
        public \Near\JsonRpc\Generated\Models\FinalExecutionStatus $status,
        /**
         * Signed Transaction
         *
         * @var \Near\JsonRpc\Generated\Models\SignedTransactionView
         */
        public \Near\JsonRpc\Generated\Models\SignedTransactionView $transaction,
        /**
         * The execution outcome of the signed transaction.
         *
         * @var \Near\JsonRpc\Generated\Models\ExecutionOutcomeWithIdView
         */
        public \Near\JsonRpc\Generated\Models\ExecutionOutcomeWithIdView $transactionOutcome,
        /**
         * @var \Near\JsonRpc\Generated\Models\TxExecutionStatus
         */
        public \Near\JsonRpc\Generated\Models\TxExecutionStatus $finalExecutionStatus,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->receiptsOutcome, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExecutionOutcomeWithIdView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'receipts_outcome');
        \Near\JsonRpc\Models\TypeGuard::assert($this->status, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FinalExecutionStatus',
  'nullable' => false,
), 'status');
        \Near\JsonRpc\Models\TypeGuard::assert($this->transaction, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SignedTransactionView',
  'nullable' => false,
), 'transaction');
        \Near\JsonRpc\Models\TypeGuard::assert($this->transactionOutcome, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExecutionOutcomeWithIdView',
  'nullable' => false,
), 'transaction_outcome');
        \Near\JsonRpc\Models\TypeGuard::assert($this->finalExecutionStatus, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TxExecutionStatus',
  'nullable' => false,
), 'final_execution_status');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcTransactionResponseFinalExecutionOutcomeView.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('status', $data)) throw new \InvalidArgumentException('Missing required field: status');
        if (!array_key_exists('transaction', $data)) throw new \InvalidArgumentException('Missing required field: transaction');
        if (!array_key_exists('transaction_outcome', $data)) throw new \InvalidArgumentException('Missing required field: transaction_outcome');
        if (!array_key_exists('receipts_outcome', $data)) throw new \InvalidArgumentException('Missing required field: receipts_outcome');
        if (!array_key_exists('final_execution_status', $data)) throw new \InvalidArgumentException('Missing required field: final_execution_status');
        $extra = array_diff_key($data, array (
  'receipts_outcome' => true,
  'status' => true,
  'transaction' => true,
  'transaction_outcome' => true,
  'final_execution_status' => true,
));
        return new self(
            receiptsOutcome: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['receipts_outcome'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExecutionOutcomeWithIdView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'receipts_outcome'),
            status: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['status'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FinalExecutionStatus',
  'nullable' => false,
), 'status'),
            transaction: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['transaction'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SignedTransactionView',
  'nullable' => false,
), 'transaction'),
            transactionOutcome: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['transaction_outcome'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExecutionOutcomeWithIdView',
  'nullable' => false,
), 'transaction_outcome'),
            finalExecutionStatus: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['final_execution_status'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TxExecutionStatus',
  'nullable' => false,
), 'final_execution_status'),
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
        $data['receipts_outcome'] = $this->receiptsOutcome;
        $data['status'] = $this->status;
        $data['transaction'] = $this->transaction;
        $data['transaction_outcome'] = $this->transactionOutcome;
        $data['final_execution_status'] = $this->finalExecutionStatus;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'receipts_outcome' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExecutionOutcomeWithIdView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'status' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FinalExecutionStatus',
      'nullable' => false,
    ),
    'transaction' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SignedTransactionView',
      'nullable' => false,
    ),
    'transaction_outcome' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExecutionOutcomeWithIdView',
      'nullable' => false,
    ),
    'final_execution_status' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TxExecutionStatus',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'status',
    1 => 'transaction',
    2 => 'transaction_outcome',
    3 => 'receipts_outcome',
    4 => 'final_execution_status',
  ),
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'FinalExecutionOutcomeView',
  ),
), 'RpcTransactionResponseFinalExecutionOutcomeView'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'receipts_outcome' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExecutionOutcomeWithIdView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'status' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FinalExecutionStatus',
      'nullable' => false,
    ),
    'transaction' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SignedTransactionView',
      'nullable' => false,
    ),
    'transaction_outcome' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExecutionOutcomeWithIdView',
      'nullable' => false,
    ),
    'final_execution_status' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TxExecutionStatus',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'status',
    1 => 'transaction',
    2 => 'transaction_outcome',
    3 => 'receipts_outcome',
    4 => 'final_execution_status',
  ),
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'FinalExecutionOutcomeView',
  ),
), 'RpcTransactionResponseFinalExecutionOutcomeView');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
