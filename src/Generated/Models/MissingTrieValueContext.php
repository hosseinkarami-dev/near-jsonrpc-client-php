<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Contexts in which `StorageError::MissingTrieValue` error might occur.
 */
final readonly class MissingTrieValueContext implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\MissingTrieValueContextTrieIterator|\Near\JsonRpc\Generated\Models\MissingTrieValueContextTriePrefetchingStorage|\Near\JsonRpc\Generated\Models\MissingTrieValueContextTrieMemoryPartialStorage|\Near\JsonRpc\Generated\Models\MissingTrieValueContextTrieStorage */
    public \Near\JsonRpc\Generated\Models\MissingTrieValueContextTrieIterator|\Near\JsonRpc\Generated\Models\MissingTrieValueContextTriePrefetchingStorage|\Near\JsonRpc\Generated\Models\MissingTrieValueContextTrieMemoryPartialStorage|\Near\JsonRpc\Generated\Models\MissingTrieValueContextTrieStorage $root;

    public function __construct(\Near\JsonRpc\Generated\Models\MissingTrieValueContextTrieIterator|\Near\JsonRpc\Generated\Models\MissingTrieValueContextTriePrefetchingStorage|\Near\JsonRpc\Generated\Models\MissingTrieValueContextTrieMemoryPartialStorage|\Near\JsonRpc\Generated\Models\MissingTrieValueContextTrieStorage $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\MissingTrieValueContextTrieIterator::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\MissingTrieValueContextTriePrefetchingStorage::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\MissingTrieValueContextTrieMemoryPartialStorage::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\MissingTrieValueContextTrieStorage::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for MissingTrieValueContext.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\MissingTrieValueContextTrieIterator => 'TrieIterator',
            $this->root instanceof \Near\JsonRpc\Generated\Models\MissingTrieValueContextTriePrefetchingStorage => 'TriePrefetchingStorage',
            $this->root instanceof \Near\JsonRpc\Generated\Models\MissingTrieValueContextTrieMemoryPartialStorage => 'TrieMemoryPartialStorage',
            $this->root instanceof \Near\JsonRpc\Generated\Models\MissingTrieValueContextTrieStorage => 'TrieStorage',
            default => throw new \LogicException('Unknown MissingTrieValueContext variant.'),
        };
    }
    public static function trieIterator(): self { return new self(\Near\JsonRpc\Generated\Models\MissingTrieValueContextTrieIterator::TrieIterator); }
    public static function triePrefetchingStorage(): self { return new self(\Near\JsonRpc\Generated\Models\MissingTrieValueContextTriePrefetchingStorage::TriePrefetchingStorage); }
    public static function trieMemoryPartialStorage(): self { return new self(\Near\JsonRpc\Generated\Models\MissingTrieValueContextTrieMemoryPartialStorage::TrieMemoryPartialStorage); }
    public static function trieStorage(): self { return new self(\Near\JsonRpc\Generated\Models\MissingTrieValueContextTrieStorage::TrieStorage); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\MissingTrieValueContextTrieIterator',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\MissingTrieValueContextTriePrefetchingStorage',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\MissingTrieValueContextTrieMemoryPartialStorage',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\MissingTrieValueContextTrieStorage',
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
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\MissingTrieValueContextTrieIterator',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\MissingTrieValueContextTriePrefetchingStorage',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\MissingTrieValueContextTrieMemoryPartialStorage',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\MissingTrieValueContextTrieStorage',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
