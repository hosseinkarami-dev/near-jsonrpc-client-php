<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Call indirect incorrect signature trap.
 */
enum WasmTrapIncorrectCallIndirectSignature: string implements \JsonSerializable
{
    case IncorrectCallIndirectSignature = 'IncorrectCallIndirectSignature';

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if (!is_string($value)) throw new \InvalidArgumentException('Invalid value for WasmTrapIncorrectCallIndirectSignature.');
        return self::tryFrom($value) ?? throw new \InvalidArgumentException('Unknown value for WasmTrapIncorrectCallIndirectSignature.');
    }

    public static function fromJson(string $json): self
    {
        return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json));
    }

    public function jsonSerialize(): mixed { return $this->value; }
    public function toJson(): string { return json_encode($this, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); }
}
