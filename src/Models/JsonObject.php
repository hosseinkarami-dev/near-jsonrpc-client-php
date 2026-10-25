<?php
declare(strict_types=1);

namespace Near\JsonRpc\Models;

/** A JSON object whose keys and value shapes are intentionally unconstrained by the schema. */
final readonly class JsonObject implements \JsonSerializable
{
    public function __construct(public \stdClass $properties) {}

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return new self($value);
        if (!is_array($value) || $value === [] || array_is_list($value)) throw new \InvalidArgumentException('Expected a JSON object. Pass an empty stdClass for an empty object.');
        $object = new \stdClass();
        foreach ($value as $key => $item) $object->{(string)$key} = self::normalize($item);
        return new self($object);
    }

    private static function normalize(mixed $value): mixed
    {
        if ($value instanceof self) return $value->properties;
        if ($value instanceof \stdClass) return $value;
        if (!is_array($value)) return $value;
        if (array_is_list($value)) return array_map(self::normalize(...), $value);
        return self::fromValue($value)->properties;
    }

    public function get(string $key): mixed { return $this->properties->{$key} ?? null; }
    public function has(string $key): bool { return property_exists($this->properties, $key); }
    public function toArray(): array { return get_object_vars($this->properties); }
    public function jsonSerialize(): \stdClass { return $this->properties; }
}
