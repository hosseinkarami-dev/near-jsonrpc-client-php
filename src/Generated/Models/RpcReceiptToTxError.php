<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class RpcReceiptToTxError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorUnknownReceipt|\Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorDepthExceeded|\Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorUnsupported|\Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorInternalError|\Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorOutcomesNotStored|\Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorWindowTooLarge|\Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorMalformedHint|\Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorBudgetExceeded */
    public \Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorUnknownReceipt|\Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorDepthExceeded|\Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorUnsupported|\Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorInternalError|\Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorOutcomesNotStored|\Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorWindowTooLarge|\Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorMalformedHint|\Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorBudgetExceeded $root;

    public function __construct(\Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorUnknownReceipt|\Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorDepthExceeded|\Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorUnsupported|\Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorInternalError|\Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorOutcomesNotStored|\Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorWindowTooLarge|\Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorMalformedHint|\Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorBudgetExceeded $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorUnknownReceipt::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorDepthExceeded::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorUnsupported::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorInternalError::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[4] = \Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorOutcomesNotStored::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[5] = \Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorWindowTooLarge::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[6] = \Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorMalformedHint::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[7] = \Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorBudgetExceeded::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for RpcReceiptToTxError.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorUnknownReceipt => 'UNKNOWN_RECEIPT',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorDepthExceeded => 'DEPTH_EXCEEDED',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorUnsupported => 'UNSUPPORTED',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorInternalError => 'INTERNAL_ERROR',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorOutcomesNotStored => 'OUTCOMES_NOT_STORED',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorWindowTooLarge => 'WINDOW_TOO_LARGE',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorMalformedHint => 'MALFORMED_HINT',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorBudgetExceeded => 'BUDGET_EXCEEDED',
            default => throw new \LogicException('Unknown RpcReceiptToTxError variant.'),
        };
    }
    public static function unknownReceipt(\Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorUnknownReceipt $variant): self { return new self($variant); }
    public static function depthExceeded(\Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorDepthExceeded $variant): self { return new self($variant); }
    public static function unsupported(\Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorUnsupported $variant): self { return new self($variant); }
    public static function internalError(\Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorInternalError $variant): self { return new self($variant); }
    public static function outcomesNotStored(\Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorOutcomesNotStored $variant): self { return new self($variant); }
    public static function windowTooLarge(\Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorWindowTooLarge $variant): self { return new self($variant); }
    public static function malformedHint(\Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorMalformedHint $variant): self { return new self($variant); }
    public static function budgetExceeded(\Near\JsonRpc\Generated\Models\RpcReceiptToTxErrorBudgetExceeded $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcReceiptToTxErrorUnknownReceipt',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcReceiptToTxErrorDepthExceeded',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcReceiptToTxErrorUnsupported',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcReceiptToTxErrorInternalError',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcReceiptToTxErrorOutcomesNotStored',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcReceiptToTxErrorWindowTooLarge',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcReceiptToTxErrorMalformedHint',
      'nullable' => false,
    ),
    7 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcReceiptToTxErrorBudgetExceeded',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcReceiptToTxErrorUnknownReceipt',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcReceiptToTxErrorDepthExceeded',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcReceiptToTxErrorUnsupported',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcReceiptToTxErrorInternalError',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcReceiptToTxErrorOutcomesNotStored',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcReceiptToTxErrorWindowTooLarge',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcReceiptToTxErrorMalformedHint',
      'nullable' => false,
    ),
    7 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcReceiptToTxErrorBudgetExceeded',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
