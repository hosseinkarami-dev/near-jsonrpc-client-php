<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class TxExecutionStatus implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\TxExecutionStatusNone|\Near\JsonRpc\Generated\Models\TxExecutionStatusIncluded|\Near\JsonRpc\Generated\Models\TxExecutionStatusExecutedOptimistic|\Near\JsonRpc\Generated\Models\TxExecutionStatusIncludedFinal|\Near\JsonRpc\Generated\Models\TxExecutionStatusExecuted|\Near\JsonRpc\Generated\Models\TxExecutionStatusFinalModel */
    public \Near\JsonRpc\Generated\Models\TxExecutionStatusNone|\Near\JsonRpc\Generated\Models\TxExecutionStatusIncluded|\Near\JsonRpc\Generated\Models\TxExecutionStatusExecutedOptimistic|\Near\JsonRpc\Generated\Models\TxExecutionStatusIncludedFinal|\Near\JsonRpc\Generated\Models\TxExecutionStatusExecuted|\Near\JsonRpc\Generated\Models\TxExecutionStatusFinalModel $root;

    public function __construct(\Near\JsonRpc\Generated\Models\TxExecutionStatusNone|\Near\JsonRpc\Generated\Models\TxExecutionStatusIncluded|\Near\JsonRpc\Generated\Models\TxExecutionStatusExecutedOptimistic|\Near\JsonRpc\Generated\Models\TxExecutionStatusIncludedFinal|\Near\JsonRpc\Generated\Models\TxExecutionStatusExecuted|\Near\JsonRpc\Generated\Models\TxExecutionStatusFinalModel $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\TxExecutionStatusNone::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\TxExecutionStatusIncluded::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\TxExecutionStatusExecutedOptimistic::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\TxExecutionStatusIncludedFinal::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[4] = \Near\JsonRpc\Generated\Models\TxExecutionStatusExecuted::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[5] = \Near\JsonRpc\Generated\Models\TxExecutionStatusFinalModel::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for TxExecutionStatus.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\TxExecutionStatusNone => 'NONE',
            $this->root instanceof \Near\JsonRpc\Generated\Models\TxExecutionStatusIncluded => 'INCLUDED',
            $this->root instanceof \Near\JsonRpc\Generated\Models\TxExecutionStatusExecutedOptimistic => 'EXECUTED_OPTIMISTIC',
            $this->root instanceof \Near\JsonRpc\Generated\Models\TxExecutionStatusIncludedFinal => 'INCLUDED_FINAL',
            $this->root instanceof \Near\JsonRpc\Generated\Models\TxExecutionStatusExecuted => 'EXECUTED',
            $this->root instanceof \Near\JsonRpc\Generated\Models\TxExecutionStatusFinalModel => 'FINAL',
            default => throw new \LogicException('Unknown TxExecutionStatus variant.'),
        };
    }
    public static function none(): self { return new self(\Near\JsonRpc\Generated\Models\TxExecutionStatusNone::None); }
    public static function included(): self { return new self(\Near\JsonRpc\Generated\Models\TxExecutionStatusIncluded::Included); }
    public static function executedOptimistic(): self { return new self(\Near\JsonRpc\Generated\Models\TxExecutionStatusExecutedOptimistic::ExecutedOptimistic); }
    public static function includedFinal(): self { return new self(\Near\JsonRpc\Generated\Models\TxExecutionStatusIncludedFinal::IncludedFinal); }
    public static function executed(): self { return new self(\Near\JsonRpc\Generated\Models\TxExecutionStatusExecuted::Executed); }
    public static function finalModel(): self { return new self(\Near\JsonRpc\Generated\Models\TxExecutionStatusFinalModel::FinalModel); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\TxExecutionStatusNone',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\TxExecutionStatusIncluded',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\TxExecutionStatusExecutedOptimistic',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\TxExecutionStatusIncludedFinal',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\TxExecutionStatusExecuted',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\TxExecutionStatusFinalModel',
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
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\TxExecutionStatusNone',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\TxExecutionStatusIncluded',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\TxExecutionStatusExecutedOptimistic',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\TxExecutionStatusIncludedFinal',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\TxExecutionStatusExecuted',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\TxExecutionStatusFinalModel',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
