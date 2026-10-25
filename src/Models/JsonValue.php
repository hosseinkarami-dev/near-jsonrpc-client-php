<?php
declare(strict_types=1);

namespace Near\JsonRpc\Models;

/** Lossless JSON object representation used only for unconstrained JSON schema values. */
final readonly class JsonValue implements \JsonSerializable
{
    public function __construct(public mixed $value) {}
    public function jsonSerialize(): mixed { return self::normalize($this->value); }
    public static function normalize(mixed $value): mixed
    {
        if ($value instanceof self) return self::normalize($value->value);
        if ($value instanceof JsonNumber) return $value;
        if ($value instanceof \JsonSerializable) return $value;
        if (is_array($value)) return array_map(self::normalize(...), $value);
        if (is_object($value)) { $out = new \stdClass(); foreach (get_object_vars($value) as $k=>$v) $out->{$k}=self::normalize($v); return $out; }
        if (is_resource($value)) throw new \InvalidArgumentException('Resources cannot be represented as JSON.');
        return $value;
    }
}
