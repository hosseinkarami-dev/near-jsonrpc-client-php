<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * A delegate action with a gas key nonce must be signed by a gas key.
 */
enum InvalidAccessKeyErrorDelegateActionRequiresGasKey: string implements \JsonSerializable
{
    case DelegateActionRequiresGasKey = 'DelegateActionRequiresGasKey';

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if (!is_string($value)) throw new \InvalidArgumentException('Invalid value for InvalidAccessKeyErrorDelegateActionRequiresGasKey.');
        return self::tryFrom($value) ?? throw new \InvalidArgumentException('Unknown value for InvalidAccessKeyErrorDelegateActionRequiresGasKey.');
    }

    public static function fromJson(string $json): self
    {
        return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json));
    }

    public function jsonSerialize(): mixed { return $this->value; }
    public function toJson(): string { return json_encode($this, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); }
}
