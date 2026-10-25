<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * An arithmetic exception, e.g. divided by zero.
 */
enum WasmTrapIllegalArithmetic: string implements \JsonSerializable
{
    case IllegalArithmetic = 'IllegalArithmetic';

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if (!is_string($value)) throw new \InvalidArgumentException('Invalid value for WasmTrapIllegalArithmetic.');
        return self::tryFrom($value) ?? throw new \InvalidArgumentException('Unknown value for WasmTrapIllegalArithmetic.');
    }

    public static function fromJson(string $json): self
    {
        return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json));
    }

    public function jsonSerialize(): mixed { return $this->value; }
    public function toJson(): string { return json_encode($this, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); }
}
