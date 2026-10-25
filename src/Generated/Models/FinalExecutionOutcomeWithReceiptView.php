<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Final execution outcome of the transaction and all of subsequent the receipts. Also includes
 * the generated receipt.
 */
final readonly class FinalExecutionOutcomeWithReceiptView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * Receipts generated from the transaction
         *
         * @var list<\Near\JsonRpc\Generated\Models\ReceiptView>
         */
        public array $receipts,
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
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->receipts, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'receipts');
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
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for FinalExecutionOutcomeWithReceiptView.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('status', $data)) throw new \InvalidArgumentException('Missing required field: status');
        if (!array_key_exists('transaction', $data)) throw new \InvalidArgumentException('Missing required field: transaction');
        if (!array_key_exists('transaction_outcome', $data)) throw new \InvalidArgumentException('Missing required field: transaction_outcome');
        if (!array_key_exists('receipts_outcome', $data)) throw new \InvalidArgumentException('Missing required field: receipts_outcome');
        if (!array_key_exists('receipts', $data)) throw new \InvalidArgumentException('Missing required field: receipts');
        $extra = array_diff_key($data, array (
  'receipts' => true,
  'receipts_outcome' => true,
  'status' => true,
  'transaction' => true,
  'transaction_outcome' => true,
));
        return new self(
            receipts: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['receipts'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'receipts'),
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
        $data['receipts'] = $this->receipts;
        $data['receipts_outcome'] = $this->receiptsOutcome;
        $data['status'] = $this->status;
        $data['transaction'] = $this->transaction;
        $data['transaction_outcome'] = $this->transactionOutcome;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'receipts' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
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
  ),
  'required' => 
  array (
    0 => 'status',
    1 => 'transaction',
    2 => 'transaction_outcome',
    3 => 'receipts_outcome',
    4 => 'receipts',
  ),
  'type' => 'object',
), 'FinalExecutionOutcomeWithReceiptView'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'receipts' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
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
  ),
  'required' => 
  array (
    0 => 'status',
    1 => 'transaction',
    2 => 'transaction_outcome',
    3 => 'receipts_outcome',
    4 => 'receipts',
  ),
  'type' => 'object',
), 'FinalExecutionOutcomeWithReceiptView');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
