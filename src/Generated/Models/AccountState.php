<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Whether an account's state has been installed.
 *
 * Only universal accounts can be uninitialized: they come into existence when
 * a transfer funds a `0u` id whose state init has not been applied yet. A
 * deterministic `0s` account waiting for its state init is an ordinary V1
 * account with no contract, not this.
 */
enum AccountState: string implements \JsonSerializable
{
    case Initialized = 'initialized';
    case Uninitialized = 'uninitialized';

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if (!is_string($value)) throw new \InvalidArgumentException('Invalid value for AccountState.');
        return self::tryFrom($value) ?? throw new \InvalidArgumentException('Unknown value for AccountState.');
    }

    public static function fromJson(string $json): self
    {
        return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json));
    }

    public function jsonSerialize(): mixed { return $this->value; }
    public function toJson(): string { return json_encode($this, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); }
}
