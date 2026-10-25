<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Found trie node which shouldn't be part of state. Raised during
 * validation of state sync parts where incorrect node was passed.
 * TODO (#8997): consider including hash of trie node.
 */
enum StorageErrorUnexpectedTrieValue: string implements \JsonSerializable
{
    case UnexpectedTrieValue = 'UnexpectedTrieValue';

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if (!is_string($value)) throw new \InvalidArgumentException('Invalid value for StorageErrorUnexpectedTrieValue.');
        return self::tryFrom($value) ?? throw new \InvalidArgumentException('Unknown value for StorageErrorUnexpectedTrieValue.');
    }

    public static function fromJson(string $json): self
    {
        return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json));
    }

    public function jsonSerialize(): mixed { return $this->value; }
    public function toJson(): string { return json_encode($this, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); }
}
