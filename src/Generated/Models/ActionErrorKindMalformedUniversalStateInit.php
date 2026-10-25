<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The bytes of a `UniversalStateInit` action do not decode into a state init.
 * Action validation rejects such an action before it runs, so this only fires
 * if that check was bypassed.
 */
enum ActionErrorKindMalformedUniversalStateInit: string implements \JsonSerializable
{
    case MalformedUniversalStateInit = 'MalformedUniversalStateInit';

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if (!is_string($value)) throw new \InvalidArgumentException('Invalid value for ActionErrorKindMalformedUniversalStateInit.');
        return self::tryFrom($value) ?? throw new \InvalidArgumentException('Unknown value for ActionErrorKindMalformedUniversalStateInit.');
    }

    public static function fromJson(string $json): self
    {
        return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json));
    }

    public function jsonSerialize(): mixed { return $this->value; }
    public function toJson(): string { return json_encode($this, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); }
}
