<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Describes the error for validating a receipt.
 */
final readonly class ReceiptValidationError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidPredecessorId|\Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidReceiverId|\Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidSignerId|\Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidDataReceiverId|\Near\JsonRpc\Generated\Models\ReceiptValidationErrorReturnedValueLengthExceeded|\Near\JsonRpc\Generated\Models\ReceiptValidationErrorNumberInputDataDependenciesExceeded|\Near\JsonRpc\Generated\Models\ReceiptValidationErrorActionsValidation|\Near\JsonRpc\Generated\Models\ReceiptValidationErrorReceiptSizeExceeded|\Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidRefundTo */
    public \Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidPredecessorId|\Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidReceiverId|\Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidSignerId|\Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidDataReceiverId|\Near\JsonRpc\Generated\Models\ReceiptValidationErrorReturnedValueLengthExceeded|\Near\JsonRpc\Generated\Models\ReceiptValidationErrorNumberInputDataDependenciesExceeded|\Near\JsonRpc\Generated\Models\ReceiptValidationErrorActionsValidation|\Near\JsonRpc\Generated\Models\ReceiptValidationErrorReceiptSizeExceeded|\Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidRefundTo $root;

    public function __construct(\Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidPredecessorId|\Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidReceiverId|\Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidSignerId|\Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidDataReceiverId|\Near\JsonRpc\Generated\Models\ReceiptValidationErrorReturnedValueLengthExceeded|\Near\JsonRpc\Generated\Models\ReceiptValidationErrorNumberInputDataDependenciesExceeded|\Near\JsonRpc\Generated\Models\ReceiptValidationErrorActionsValidation|\Near\JsonRpc\Generated\Models\ReceiptValidationErrorReceiptSizeExceeded|\Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidRefundTo $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidPredecessorId::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidReceiverId::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidSignerId::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidDataReceiverId::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[4] = \Near\JsonRpc\Generated\Models\ReceiptValidationErrorReturnedValueLengthExceeded::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[5] = \Near\JsonRpc\Generated\Models\ReceiptValidationErrorNumberInputDataDependenciesExceeded::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[6] = \Near\JsonRpc\Generated\Models\ReceiptValidationErrorActionsValidation::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[7] = \Near\JsonRpc\Generated\Models\ReceiptValidationErrorReceiptSizeExceeded::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[8] = \Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidRefundTo::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for ReceiptValidationError.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidPredecessorId => 'InvalidPredecessorId',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidReceiverId => 'InvalidReceiverId',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidSignerId => 'InvalidSignerId',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidDataReceiverId => 'InvalidDataReceiverId',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ReceiptValidationErrorReturnedValueLengthExceeded => 'ReturnedValueLengthExceeded',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ReceiptValidationErrorNumberInputDataDependenciesExceeded => 'NumberInputDataDependenciesExceeded',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ReceiptValidationErrorActionsValidation => 'ActionsValidation',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ReceiptValidationErrorReceiptSizeExceeded => 'ReceiptSizeExceeded',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidRefundTo => 'InvalidRefundTo',
            default => throw new \LogicException('Unknown ReceiptValidationError variant.'),
        };
    }
    public static function invalidPredecessorId(\Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidPredecessorIdPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidPredecessorId($payload)); }
    public static function invalidReceiverId(\Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidReceiverIdPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidReceiverId($payload)); }
    public static function invalidSignerId(\Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidSignerIdPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidSignerId($payload)); }
    public static function invalidDataReceiverId(\Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidDataReceiverIdPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidDataReceiverId($payload)); }
    public static function returnedValueLengthExceeded(\Near\JsonRpc\Generated\Models\ReceiptValidationErrorReturnedValueLengthExceededPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ReceiptValidationErrorReturnedValueLengthExceeded($payload)); }
    public static function numberInputDataDependenciesExceeded(\Near\JsonRpc\Generated\Models\ReceiptValidationErrorNumberInputDataDependenciesExceededPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ReceiptValidationErrorNumberInputDataDependenciesExceeded($payload)); }
    public static function actionsValidation(\Near\JsonRpc\Generated\Models\ActionsValidationError $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ReceiptValidationErrorActionsValidation($payload)); }
    public static function receiptSizeExceeded(\Near\JsonRpc\Generated\Models\ReceiptValidationErrorReceiptSizeExceededPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ReceiptValidationErrorReceiptSizeExceeded($payload)); }
    public static function invalidRefundTo(\Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidRefundToPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ReceiptValidationErrorInvalidRefundTo($payload)); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorInvalidPredecessorId',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorInvalidReceiverId',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorInvalidSignerId',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorInvalidDataReceiverId',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorReturnedValueLengthExceeded',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorNumberInputDataDependenciesExceeded',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorActionsValidation',
      'nullable' => false,
    ),
    7 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorReceiptSizeExceeded',
      'nullable' => false,
    ),
    8 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorInvalidRefundTo',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorInvalidPredecessorId',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorInvalidReceiverId',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorInvalidSignerId',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorInvalidDataReceiverId',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorReturnedValueLengthExceeded',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorNumberInputDataDependenciesExceeded',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorActionsValidation',
      'nullable' => false,
    ),
    7 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorReceiptSizeExceeded',
      'nullable' => false,
    ),
    8 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptValidationErrorInvalidRefundTo',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
