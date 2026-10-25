<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Reason why a gas key transaction failed at the deposit/account level.
 * In these cases, gas is still charged from the gas key.
 */
enum DepositCostFailureReason: string implements \JsonSerializable
{
    case NotEnoughBalance = 'NotEnoughBalance';
    case LackBalanceForState = 'LackBalanceForState';

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if (!is_string($value)) throw new \InvalidArgumentException('Invalid value for DepositCostFailureReason.');
        return self::tryFrom($value) ?? throw new \InvalidArgumentException('Unknown value for DepositCostFailureReason.');
    }

    public static function fromJson(string $json): self
    {
        return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json));
    }

    public function jsonSerialize(): mixed { return $this->value; }
    public function toJson(): string { return json_encode($this, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); }
}
