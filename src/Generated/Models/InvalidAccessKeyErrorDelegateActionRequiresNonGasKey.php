<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * A plain access key nonce does not select one of the gas key's nonces.
 * `DelegateV2` was intended to carry a gas key nonce, however gas key
 * meta transactions are disabled. See `ProtocolFeature::RejectDelegateV2`.
 */
enum InvalidAccessKeyErrorDelegateActionRequiresNonGasKey: string implements \JsonSerializable
{
    case DelegateActionRequiresNonGasKey = 'DelegateActionRequiresNonGasKey';

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if (!is_string($value)) throw new \InvalidArgumentException('Invalid value for InvalidAccessKeyErrorDelegateActionRequiresNonGasKey.');
        return self::tryFrom($value) ?? throw new \InvalidArgumentException('Unknown value for InvalidAccessKeyErrorDelegateActionRequiresNonGasKey.');
    }

    public static function fromJson(string $json): self
    {
        return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json));
    }

    public function jsonSerialize(): mixed { return $this->value; }
    public function toJson(): string { return json_encode($this, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); }
}
