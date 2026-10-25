<?php
declare(strict_types=1);

namespace Near\JsonRpc\Models;

/** Encodes model values while emitting JsonNumber instances as numeric tokens. */
final class JsonEncoder
{
    private const FLAGS = JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE;

    public static function encode(mixed $value): string
    {
        return self::encodeValue($value);
    }

    /** Fail clearly when native json_encode() would quote a large integer token. */
    public static function assertNativeEncodingSafe(mixed $value): void
    {
        if ($value instanceof JsonNumber) {
            throw new \LogicException('Use the model toJson() method or JsonEncoder::encode() to preserve large JSON integers.');
        }
        if ($value instanceof ModelJsonSerializable) {
            self::assertNativeEncodingSafe($value->jsonSerializeForEncoding());
            return;
        }
        if ($value instanceof \JsonSerializable) {
            self::assertNativeEncodingSafe($value->jsonSerialize());
            return;
        }
        if (is_array($value)) {
            foreach ($value as $item) self::assertNativeEncodingSafe($item);
            return;
        }
        if ($value instanceof \stdClass) {
            foreach (get_object_vars($value) as $item) self::assertNativeEncodingSafe($item);
        }
    }

    private static function encodeValue(mixed $value): string
    {
        if ($value instanceof JsonNumber) return $value->value;
        if ($value instanceof ModelJsonSerializable) return self::encodeValue($value->jsonSerializeForEncoding());
        if ($value instanceof \JsonSerializable) return self::encodeValue($value->jsonSerialize());
        if (is_array($value)) {
            if (array_is_list($value)) {
                return '[' . implode(',', array_map(self::encodeValue(...), $value)) . ']';
            }
            $members = [];
            foreach ($value as $key => $item) {
                $members[] = self::encodeValue((string)$key) . ':' . self::encodeValue($item);
            }
            return '{' . implode(',', $members) . '}';
        }
        if ($value instanceof \stdClass) {
            $members = [];
            foreach (get_object_vars($value) as $key => $item) {
                $members[] = self::encodeValue((string)$key) . ':' . self::encodeValue($item);
            }
            return '{' . implode(',', $members) . '}';
        }
        if (is_object($value)) {
            throw new \InvalidArgumentException('Only JSON-serializable objects can be encoded.');
        }
        if (is_resource($value)) throw new \InvalidArgumentException('Resources cannot be represented as JSON.');
        return json_encode($value, self::FLAGS);
    }
}
