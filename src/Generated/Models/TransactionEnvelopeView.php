<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * A transaction in a chunk. Untagged so that a signed transaction keeps the JSON shape it
 * always had.
 */
final readonly class TransactionEnvelopeView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\SignedTransactionView|\Near\JsonRpc\Generated\Models\EccTransactionView */
    public \Near\JsonRpc\Generated\Models\SignedTransactionView|\Near\JsonRpc\Generated\Models\EccTransactionView $root;

    public function __construct(\Near\JsonRpc\Generated\Models\SignedTransactionView|\Near\JsonRpc\Generated\Models\EccTransactionView $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\SignedTransactionView::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\EccTransactionView::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (false && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its anyOf schema for TransactionEnvelopeView.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\SignedTransactionView => 'SignedTransactionView',
            $this->root instanceof \Near\JsonRpc\Generated\Models\EccTransactionView => 'EccTransactionView',
            default => throw new \LogicException('Unknown TransactionEnvelopeView variant.'),
        };
    }
    public static function signedTransactionView(\Near\JsonRpc\Generated\Models\SignedTransactionView $variant): self { return new self($variant); }
    public static function eccTransactionView(\Near\JsonRpc\Generated\Models\EccTransactionView $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SignedTransactionView',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\EccTransactionView',
      'nullable' => false,
    ),
  ),
), 'root'));
        return $this->root;
    }
    public function jsonSerializeForEncoding(): mixed { return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SignedTransactionView',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\EccTransactionView',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
