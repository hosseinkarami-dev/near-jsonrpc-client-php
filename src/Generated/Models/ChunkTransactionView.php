<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * A transaction as a chunk holds it, written like a `TransactionEnvelopeView`.
 */
final readonly class ChunkTransactionView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\ChunkTransactionViewSigned|\Near\JsonRpc\Generated\Models\ChunkTransactionViewExternalCall */
    public \Near\JsonRpc\Generated\Models\ChunkTransactionViewSigned|\Near\JsonRpc\Generated\Models\ChunkTransactionViewExternalCall $root;

    public function __construct(\Near\JsonRpc\Generated\Models\ChunkTransactionViewSigned|\Near\JsonRpc\Generated\Models\ChunkTransactionViewExternalCall $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\ChunkTransactionViewSigned::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\ChunkTransactionViewExternalCall::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for ChunkTransactionView.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\ChunkTransactionViewSigned => 'signed',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ChunkTransactionViewExternalCall => 'external_call',
            default => throw new \LogicException('Unknown ChunkTransactionView variant.'),
        };
    }
    public static function signed(\Near\JsonRpc\Generated\Models\ChunkTransactionViewSigned $variant): self { return new self($variant); }
    public static function externalCall(\Near\JsonRpc\Generated\Models\ChunkTransactionViewExternalCall $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ChunkTransactionViewSigned',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ChunkTransactionViewExternalCall',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ChunkTransactionViewSigned',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ChunkTransactionViewExternalCall',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
