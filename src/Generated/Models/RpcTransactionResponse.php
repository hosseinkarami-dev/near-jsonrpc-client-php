<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class RpcTransactionResponse implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\RpcTransactionResponseFinalExecutionOutcomeWithReceiptView|\Near\JsonRpc\Generated\Models\RpcTransactionResponseFinalExecutionOutcomeView|\Near\JsonRpc\Generated\Models\RpcTransactionResponseAdditionalValue */
    public \Near\JsonRpc\Generated\Models\RpcTransactionResponseFinalExecutionOutcomeWithReceiptView|\Near\JsonRpc\Generated\Models\RpcTransactionResponseFinalExecutionOutcomeView|\Near\JsonRpc\Generated\Models\RpcTransactionResponseAdditionalValue $root;

    public function __construct(\Near\JsonRpc\Generated\Models\RpcTransactionResponseFinalExecutionOutcomeWithReceiptView|\Near\JsonRpc\Generated\Models\RpcTransactionResponseFinalExecutionOutcomeView|\Near\JsonRpc\Generated\Models\RpcTransactionResponseAdditionalValue $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\RpcTransactionResponseFinalExecutionOutcomeWithReceiptView::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\RpcTransactionResponseFinalExecutionOutcomeView::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\RpcTransactionResponseAdditionalValue::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (false && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its anyOf schema for RpcTransactionResponse.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcTransactionResponseFinalExecutionOutcomeWithReceiptView => 'FinalExecutionOutcomeWithReceiptView',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcTransactionResponseFinalExecutionOutcomeView => 'FinalExecutionOutcomeView',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcTransactionResponseAdditionalValue => 'AdditionalValue',
            default => throw new \LogicException('Unknown RpcTransactionResponse variant.'),
        };
    }
    public static function finalExecutionOutcomeWithReceiptView(\Near\JsonRpc\Generated\Models\RpcTransactionResponseFinalExecutionOutcomeWithReceiptView $variant): self { return new self($variant); }
    public static function finalExecutionOutcomeView(\Near\JsonRpc\Generated\Models\RpcTransactionResponseFinalExecutionOutcomeView $variant): self { return new self($variant); }
    public static function additionalValue(\Near\JsonRpc\Generated\Models\RpcTransactionResponseAdditionalValue $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcTransactionResponseFinalExecutionOutcomeWithReceiptView',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcTransactionResponseFinalExecutionOutcomeView',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcTransactionResponseAdditionalValue',
      'nullable' => false,
    ),
  ),
  'properties' => 
  array (
    'final_execution_status' => 
    array (
      '$ref' => '#/components/schemas/TxExecutionStatus',
    ),
  ),
  'required' => 
  array (
    0 => 'final_execution_status',
  ),
  'type' => 'object',
), 'root'));
        return $this->root;
    }
    public function jsonSerializeForEncoding(): mixed { return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcTransactionResponseFinalExecutionOutcomeWithReceiptView',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcTransactionResponseFinalExecutionOutcomeView',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcTransactionResponseAdditionalValue',
      'nullable' => false,
    ),
  ),
  'properties' => 
  array (
    'final_execution_status' => 
    array (
      '$ref' => '#/components/schemas/TxExecutionStatus',
    ),
  ),
  'required' => 
  array (
    0 => 'final_execution_status',
  ),
  'type' => 'object',
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
