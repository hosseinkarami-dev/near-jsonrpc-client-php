<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class IndexerExecutionOutcomeWithReceipt implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ExecutionOutcomeWithIdView
         */
        public \Near\JsonRpc\Generated\Models\ExecutionOutcomeWithIdView $executionOutcome,
        /**
         * @var \Near\JsonRpc\Generated\Models\ReceiptView
         */
        public \Near\JsonRpc\Generated\Models\ReceiptView $receipt,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->executionOutcome, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExecutionOutcomeWithIdView',
  'nullable' => false,
), 'execution_outcome');
        \Near\JsonRpc\Models\TypeGuard::assert($this->receipt, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptView',
  'nullable' => false,
), 'receipt');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for IndexerExecutionOutcomeWithReceipt.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('execution_outcome', $data)) throw new \InvalidArgumentException('Missing required field: execution_outcome');
        if (!array_key_exists('receipt', $data)) throw new \InvalidArgumentException('Missing required field: receipt');
        $extra = array_diff_key($data, array (
  'execution_outcome' => true,
  'receipt' => true,
));
        return new self(
            executionOutcome: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['execution_outcome'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExecutionOutcomeWithIdView',
  'nullable' => false,
), 'execution_outcome'),
            receipt: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['receipt'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptView',
  'nullable' => false,
), 'receipt'),
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
        $data['execution_outcome'] = $this->executionOutcome;
        $data['receipt'] = $this->receipt;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'execution_outcome' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExecutionOutcomeWithIdView',
      'nullable' => false,
    ),
    'receipt' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptView',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'execution_outcome',
    1 => 'receipt',
  ),
  'type' => 'object',
), 'IndexerExecutionOutcomeWithReceipt'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'execution_outcome' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExecutionOutcomeWithIdView',
      'nullable' => false,
    ),
    'receipt' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptView',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'execution_outcome',
    1 => 'receipt',
  ),
  'type' => 'object',
), 'IndexerExecutionOutcomeWithReceipt');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
