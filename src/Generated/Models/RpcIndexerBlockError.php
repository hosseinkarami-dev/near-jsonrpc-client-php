<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class RpcIndexerBlockError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\RpcIndexerBlockErrorDataUnavailable|\Near\JsonRpc\Generated\Models\RpcIndexerBlockErrorIncompleteData|\Near\JsonRpc\Generated\Models\RpcIndexerBlockErrorUnsupported|\Near\JsonRpc\Generated\Models\RpcIndexerBlockErrorLimitExceeded|\Near\JsonRpc\Generated\Models\RpcIndexerBlockErrorBusy|\Near\JsonRpc\Generated\Models\RpcIndexerBlockErrorInternalError */
    public \Near\JsonRpc\Generated\Models\RpcIndexerBlockErrorDataUnavailable|\Near\JsonRpc\Generated\Models\RpcIndexerBlockErrorIncompleteData|\Near\JsonRpc\Generated\Models\RpcIndexerBlockErrorUnsupported|\Near\JsonRpc\Generated\Models\RpcIndexerBlockErrorLimitExceeded|\Near\JsonRpc\Generated\Models\RpcIndexerBlockErrorBusy|\Near\JsonRpc\Generated\Models\RpcIndexerBlockErrorInternalError $root;

    public function __construct(\Near\JsonRpc\Generated\Models\RpcIndexerBlockErrorDataUnavailable|\Near\JsonRpc\Generated\Models\RpcIndexerBlockErrorIncompleteData|\Near\JsonRpc\Generated\Models\RpcIndexerBlockErrorUnsupported|\Near\JsonRpc\Generated\Models\RpcIndexerBlockErrorLimitExceeded|\Near\JsonRpc\Generated\Models\RpcIndexerBlockErrorBusy|\Near\JsonRpc\Generated\Models\RpcIndexerBlockErrorInternalError $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\RpcIndexerBlockErrorDataUnavailable::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\RpcIndexerBlockErrorIncompleteData::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\RpcIndexerBlockErrorUnsupported::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\RpcIndexerBlockErrorLimitExceeded::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[4] = \Near\JsonRpc\Generated\Models\RpcIndexerBlockErrorBusy::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[5] = \Near\JsonRpc\Generated\Models\RpcIndexerBlockErrorInternalError::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for RpcIndexerBlockError.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcIndexerBlockErrorDataUnavailable => 'DATA_UNAVAILABLE',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcIndexerBlockErrorIncompleteData => 'INCOMPLETE_DATA',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcIndexerBlockErrorUnsupported => 'UNSUPPORTED',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcIndexerBlockErrorLimitExceeded => 'LIMIT_EXCEEDED',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcIndexerBlockErrorBusy => 'BUSY',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcIndexerBlockErrorInternalError => 'INTERNAL_ERROR',
            default => throw new \LogicException('Unknown RpcIndexerBlockError variant.'),
        };
    }
    public static function dataUnavailable(\Near\JsonRpc\Generated\Models\RpcIndexerBlockErrorDataUnavailable $variant): self { return new self($variant); }
    public static function incompleteData(\Near\JsonRpc\Generated\Models\RpcIndexerBlockErrorIncompleteData $variant): self { return new self($variant); }
    public static function unsupported(\Near\JsonRpc\Generated\Models\RpcIndexerBlockErrorUnsupported $variant): self { return new self($variant); }
    public static function limitExceeded(\Near\JsonRpc\Generated\Models\RpcIndexerBlockErrorLimitExceeded $variant): self { return new self($variant); }
    public static function busy(\Near\JsonRpc\Generated\Models\RpcIndexerBlockErrorBusy $variant): self { return new self($variant); }
    public static function internalError(\Near\JsonRpc\Generated\Models\RpcIndexerBlockErrorInternalError $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcIndexerBlockErrorDataUnavailable',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcIndexerBlockErrorIncompleteData',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcIndexerBlockErrorUnsupported',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcIndexerBlockErrorLimitExceeded',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcIndexerBlockErrorBusy',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcIndexerBlockErrorInternalError',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcIndexerBlockErrorDataUnavailable',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcIndexerBlockErrorIncompleteData',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcIndexerBlockErrorUnsupported',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcIndexerBlockErrorLimitExceeded',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcIndexerBlockErrorBusy',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcIndexerBlockErrorInternalError',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
