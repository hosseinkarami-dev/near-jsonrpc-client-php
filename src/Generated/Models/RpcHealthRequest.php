<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final class RpcHealthRequest implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct() {}

    public static function fromValue(mixed $value): self
    {
        if ($value !== null) throw new \InvalidArgumentException('Expected null for RpcHealthRequest.');
        return new self();
    }

    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): null { return null; }
    public function jsonSerializeForEncoding(): null { return null; }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
