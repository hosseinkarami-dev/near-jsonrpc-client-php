<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class IndexerTransactionWithOutcome implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\IndexerExecutionOutcomeWithOptionalReceipt
         */
        public \Near\JsonRpc\Generated\Models\IndexerExecutionOutcomeWithOptionalReceipt $outcome,
        /**
         * @var \Near\JsonRpc\Generated\Models\SignedTransactionView
         */
        public \Near\JsonRpc\Generated\Models\SignedTransactionView $transaction,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->outcome, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\IndexerExecutionOutcomeWithOptionalReceipt',
  'nullable' => false,
), 'outcome');
        \Near\JsonRpc\Models\TypeGuard::assert($this->transaction, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SignedTransactionView',
  'nullable' => false,
), 'transaction');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for IndexerTransactionWithOutcome.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('transaction', $data)) throw new \InvalidArgumentException('Missing required field: transaction');
        if (!array_key_exists('outcome', $data)) throw new \InvalidArgumentException('Missing required field: outcome');
        $extra = array_diff_key($data, array (
  'outcome' => true,
  'transaction' => true,
));
        return new self(
            outcome: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['outcome'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\IndexerExecutionOutcomeWithOptionalReceipt',
  'nullable' => false,
), 'outcome'),
            transaction: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['transaction'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SignedTransactionView',
  'nullable' => false,
), 'transaction'),
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
        $data['outcome'] = $this->outcome;
        $data['transaction'] = $this->transaction;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'outcome' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\IndexerExecutionOutcomeWithOptionalReceipt',
      'nullable' => false,
    ),
    'transaction' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SignedTransactionView',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'transaction',
    1 => 'outcome',
  ),
  'type' => 'object',
), 'IndexerTransactionWithOutcome'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'outcome' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\IndexerExecutionOutcomeWithOptionalReceipt',
      'nullable' => false,
    ),
    'transaction' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SignedTransactionView',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'transaction',
    1 => 'outcome',
  ),
  'type' => 'object',
), 'IndexerTransactionWithOutcome');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
