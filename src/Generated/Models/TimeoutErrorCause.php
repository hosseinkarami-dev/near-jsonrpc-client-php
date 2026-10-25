<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Explains why a transaction status request returned a `RpcTransactionError::TimeoutError`:
 */
final readonly class TimeoutErrorCause implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\TimeoutErrorCauseNotObserved|\Near\JsonRpc\Generated\Models\TimeoutErrorCausePending|\Near\JsonRpc\Generated\Models\TimeoutErrorCauseDoesNotTrackShard|\Near\JsonRpc\Generated\Models\TimeoutErrorCauseError */
    public \Near\JsonRpc\Generated\Models\TimeoutErrorCauseNotObserved|\Near\JsonRpc\Generated\Models\TimeoutErrorCausePending|\Near\JsonRpc\Generated\Models\TimeoutErrorCauseDoesNotTrackShard|\Near\JsonRpc\Generated\Models\TimeoutErrorCauseError $root;

    public function __construct(\Near\JsonRpc\Generated\Models\TimeoutErrorCauseNotObserved|\Near\JsonRpc\Generated\Models\TimeoutErrorCausePending|\Near\JsonRpc\Generated\Models\TimeoutErrorCauseDoesNotTrackShard|\Near\JsonRpc\Generated\Models\TimeoutErrorCauseError $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\TimeoutErrorCauseNotObserved::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\TimeoutErrorCausePending::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\TimeoutErrorCauseDoesNotTrackShard::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\TimeoutErrorCauseError::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for TimeoutErrorCause.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\TimeoutErrorCauseNotObserved => 'NOT_OBSERVED',
            $this->root instanceof \Near\JsonRpc\Generated\Models\TimeoutErrorCausePending => 'PENDING',
            $this->root instanceof \Near\JsonRpc\Generated\Models\TimeoutErrorCauseDoesNotTrackShard => 'DOES_NOT_TRACK_SHARD',
            $this->root instanceof \Near\JsonRpc\Generated\Models\TimeoutErrorCauseError => 'ERROR',
            default => throw new \LogicException('Unknown TimeoutErrorCause variant.'),
        };
    }
    public static function notObserved(\Near\JsonRpc\Generated\Models\TimeoutErrorCauseNotObserved $variant): self { return new self($variant); }
    public static function pending(\Near\JsonRpc\Generated\Models\TimeoutErrorCausePending $variant): self { return new self($variant); }
    public static function doesNotTrackShard(\Near\JsonRpc\Generated\Models\TimeoutErrorCauseDoesNotTrackShard $variant): self { return new self($variant); }
    public static function error(\Near\JsonRpc\Generated\Models\TimeoutErrorCauseError $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TimeoutErrorCauseNotObserved',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TimeoutErrorCausePending',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TimeoutErrorCauseDoesNotTrackShard',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TimeoutErrorCauseError',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TimeoutErrorCauseNotObserved',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TimeoutErrorCausePending',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TimeoutErrorCauseDoesNotTrackShard',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TimeoutErrorCauseError',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
