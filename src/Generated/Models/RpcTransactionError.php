<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class RpcTransactionError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\RpcTransactionErrorInvalidTransaction|\Near\JsonRpc\Generated\Models\RpcTransactionErrorDoesNotTrackShard|\Near\JsonRpc\Generated\Models\RpcTransactionErrorRequestRouted|\Near\JsonRpc\Generated\Models\RpcTransactionErrorUnknownTransaction|\Near\JsonRpc\Generated\Models\RpcTransactionErrorInternalError|\Near\JsonRpc\Generated\Models\RpcTransactionErrorTimeoutError */
    public \Near\JsonRpc\Generated\Models\RpcTransactionErrorInvalidTransaction|\Near\JsonRpc\Generated\Models\RpcTransactionErrorDoesNotTrackShard|\Near\JsonRpc\Generated\Models\RpcTransactionErrorRequestRouted|\Near\JsonRpc\Generated\Models\RpcTransactionErrorUnknownTransaction|\Near\JsonRpc\Generated\Models\RpcTransactionErrorInternalError|\Near\JsonRpc\Generated\Models\RpcTransactionErrorTimeoutError $root;

    public function __construct(\Near\JsonRpc\Generated\Models\RpcTransactionErrorInvalidTransaction|\Near\JsonRpc\Generated\Models\RpcTransactionErrorDoesNotTrackShard|\Near\JsonRpc\Generated\Models\RpcTransactionErrorRequestRouted|\Near\JsonRpc\Generated\Models\RpcTransactionErrorUnknownTransaction|\Near\JsonRpc\Generated\Models\RpcTransactionErrorInternalError|\Near\JsonRpc\Generated\Models\RpcTransactionErrorTimeoutError $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\RpcTransactionErrorInvalidTransaction::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\RpcTransactionErrorDoesNotTrackShard::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\RpcTransactionErrorRequestRouted::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\RpcTransactionErrorUnknownTransaction::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[4] = \Near\JsonRpc\Generated\Models\RpcTransactionErrorInternalError::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[5] = \Near\JsonRpc\Generated\Models\RpcTransactionErrorTimeoutError::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for RpcTransactionError.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcTransactionErrorInvalidTransaction => 'INVALID_TRANSACTION',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcTransactionErrorDoesNotTrackShard => 'DOES_NOT_TRACK_SHARD',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcTransactionErrorRequestRouted => 'REQUEST_ROUTED',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcTransactionErrorUnknownTransaction => 'UNKNOWN_TRANSACTION',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcTransactionErrorInternalError => 'INTERNAL_ERROR',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcTransactionErrorTimeoutError => 'TIMEOUT_ERROR',
            default => throw new \LogicException('Unknown RpcTransactionError variant.'),
        };
    }
    public static function invalidTransaction(\Near\JsonRpc\Generated\Models\RpcTransactionErrorInvalidTransaction $variant): self { return new self($variant); }
    public static function doesNotTrackShard(\Near\JsonRpc\Generated\Models\RpcTransactionErrorDoesNotTrackShard $variant): self { return new self($variant); }
    public static function requestRouted(\Near\JsonRpc\Generated\Models\RpcTransactionErrorRequestRouted $variant): self { return new self($variant); }
    public static function unknownTransaction(\Near\JsonRpc\Generated\Models\RpcTransactionErrorUnknownTransaction $variant): self { return new self($variant); }
    public static function internalError(\Near\JsonRpc\Generated\Models\RpcTransactionErrorInternalError $variant): self { return new self($variant); }
    public static function timeoutError(\Near\JsonRpc\Generated\Models\RpcTransactionErrorTimeoutError $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcTransactionErrorInvalidTransaction',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcTransactionErrorDoesNotTrackShard',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcTransactionErrorRequestRouted',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcTransactionErrorUnknownTransaction',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcTransactionErrorInternalError',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcTransactionErrorTimeoutError',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcTransactionErrorInvalidTransaction',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcTransactionErrorDoesNotTrackShard',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcTransactionErrorRequestRouted',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcTransactionErrorUnknownTransaction',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcTransactionErrorInternalError',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcTransactionErrorTimeoutError',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
