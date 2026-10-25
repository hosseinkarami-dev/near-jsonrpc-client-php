<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Error returned in the ExecutionOutcome in case of failure
 */
final readonly class TxExecutionError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\TxExecutionErrorActionError|\Near\JsonRpc\Generated\Models\TxExecutionErrorInvalidTxError */
    public \Near\JsonRpc\Generated\Models\TxExecutionErrorActionError|\Near\JsonRpc\Generated\Models\TxExecutionErrorInvalidTxError $root;

    public function __construct(\Near\JsonRpc\Generated\Models\TxExecutionErrorActionError|\Near\JsonRpc\Generated\Models\TxExecutionErrorInvalidTxError $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\TxExecutionErrorActionError::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\TxExecutionErrorInvalidTxError::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for TxExecutionError.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\TxExecutionErrorActionError => 'ActionError',
            $this->root instanceof \Near\JsonRpc\Generated\Models\TxExecutionErrorInvalidTxError => 'InvalidTxError',
            default => throw new \LogicException('Unknown TxExecutionError variant.'),
        };
    }
    public static function actionError(\Near\JsonRpc\Generated\Models\ActionError $payload): self { return new self(new \Near\JsonRpc\Generated\Models\TxExecutionErrorActionError($payload)); }
    public static function invalidTxError(\Near\JsonRpc\Generated\Models\InvalidTxError $payload): self { return new self(new \Near\JsonRpc\Generated\Models\TxExecutionErrorInvalidTxError($payload)); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TxExecutionErrorActionError',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TxExecutionErrorInvalidTxError',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TxExecutionErrorActionError',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TxExecutionErrorInvalidTxError',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
