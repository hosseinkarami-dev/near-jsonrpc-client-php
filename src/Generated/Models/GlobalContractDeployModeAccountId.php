<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Contract is deployed under the owner account id.
 * Users will be able reference it by that account id.
 * This allows the owner to update the contract for all its users.
 */
enum GlobalContractDeployModeAccountId: string implements \JsonSerializable
{
    case AccountId = 'AccountId';

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if (!is_string($value)) throw new \InvalidArgumentException('Invalid value for GlobalContractDeployModeAccountId.');
        return self::tryFrom($value) ?? throw new \InvalidArgumentException('Unknown value for GlobalContractDeployModeAccountId.');
    }

    public static function fromJson(string $json): self
    {
        return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json));
    }

    public function jsonSerialize(): mixed { return $this->value; }
    public function toJson(): string { return json_encode($this, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); }
}
