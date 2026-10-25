<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Errors which may occur during working with trie storages, storing
 * trie values (trie nodes and state values) by their hashes.
 */
final readonly class StorageError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\StorageErrorStorageInternalError|\Near\JsonRpc\Generated\Models\StorageErrorMissingTrieValue|\Near\JsonRpc\Generated\Models\StorageErrorUnexpectedTrieValue|\Near\JsonRpc\Generated\Models\StorageErrorStorageInconsistentState|\Near\JsonRpc\Generated\Models\StorageErrorFlatStorageBlockNotSupported|\Near\JsonRpc\Generated\Models\StorageErrorMemTrieLoadingError */
    public \Near\JsonRpc\Generated\Models\StorageErrorStorageInternalError|\Near\JsonRpc\Generated\Models\StorageErrorMissingTrieValue|\Near\JsonRpc\Generated\Models\StorageErrorUnexpectedTrieValue|\Near\JsonRpc\Generated\Models\StorageErrorStorageInconsistentState|\Near\JsonRpc\Generated\Models\StorageErrorFlatStorageBlockNotSupported|\Near\JsonRpc\Generated\Models\StorageErrorMemTrieLoadingError $root;

    public function __construct(\Near\JsonRpc\Generated\Models\StorageErrorStorageInternalError|\Near\JsonRpc\Generated\Models\StorageErrorMissingTrieValue|\Near\JsonRpc\Generated\Models\StorageErrorUnexpectedTrieValue|\Near\JsonRpc\Generated\Models\StorageErrorStorageInconsistentState|\Near\JsonRpc\Generated\Models\StorageErrorFlatStorageBlockNotSupported|\Near\JsonRpc\Generated\Models\StorageErrorMemTrieLoadingError $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\StorageErrorStorageInternalError::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\StorageErrorMissingTrieValue::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\StorageErrorUnexpectedTrieValue::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\StorageErrorStorageInconsistentState::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[4] = \Near\JsonRpc\Generated\Models\StorageErrorFlatStorageBlockNotSupported::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[5] = \Near\JsonRpc\Generated\Models\StorageErrorMemTrieLoadingError::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for StorageError.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\StorageErrorStorageInternalError => 'StorageInternalError',
            $this->root instanceof \Near\JsonRpc\Generated\Models\StorageErrorMissingTrieValue => 'MissingTrieValue',
            $this->root instanceof \Near\JsonRpc\Generated\Models\StorageErrorUnexpectedTrieValue => 'UnexpectedTrieValue',
            $this->root instanceof \Near\JsonRpc\Generated\Models\StorageErrorStorageInconsistentState => 'StorageInconsistentState',
            $this->root instanceof \Near\JsonRpc\Generated\Models\StorageErrorFlatStorageBlockNotSupported => 'FlatStorageBlockNotSupported',
            $this->root instanceof \Near\JsonRpc\Generated\Models\StorageErrorMemTrieLoadingError => 'MemTrieLoadingError',
            default => throw new \LogicException('Unknown StorageError variant.'),
        };
    }
    public static function storageInternalError(): self { return new self(\Near\JsonRpc\Generated\Models\StorageErrorStorageInternalError::StorageInternalError); }
    public static function missingTrieValue(\Near\JsonRpc\Generated\Models\MissingTrieValue $payload): self { return new self(new \Near\JsonRpc\Generated\Models\StorageErrorMissingTrieValue($payload)); }
    public static function unexpectedTrieValue(): self { return new self(\Near\JsonRpc\Generated\Models\StorageErrorUnexpectedTrieValue::UnexpectedTrieValue); }
    public static function storageInconsistentState(\Near\JsonRpc\Generated\Models\StorageErrorStorageInconsistentState $variant): self { return new self($variant); }
    public static function flatStorageBlockNotSupported(\Near\JsonRpc\Generated\Models\StorageErrorFlatStorageBlockNotSupported $variant): self { return new self($variant); }
    public static function memTrieLoadingError(\Near\JsonRpc\Generated\Models\StorageErrorMemTrieLoadingError $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\StorageErrorStorageInternalError',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StorageErrorMissingTrieValue',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\StorageErrorUnexpectedTrieValue',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StorageErrorStorageInconsistentState',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StorageErrorFlatStorageBlockNotSupported',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StorageErrorMemTrieLoadingError',
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
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\StorageErrorStorageInternalError',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StorageErrorMissingTrieValue',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\StorageErrorUnexpectedTrieValue',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StorageErrorStorageInconsistentState',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StorageErrorFlatStorageBlockNotSupported',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StorageErrorMemTrieLoadingError',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
