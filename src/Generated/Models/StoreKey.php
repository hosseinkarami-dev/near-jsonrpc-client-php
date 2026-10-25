<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * This type is used to mark keys (arrays of bytes) that are queried from store.
 *
 * NOTE: Currently, this type is only used in the view_client and RPC to be able to transparently
 * pretty-serialize the bytes arrays as base64-encoded strings (see `serialize.rs`).
 */
final readonly class StoreKey implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public string $root;

    public function __construct(string $root)
    {
        \Near\JsonRpc\Models\TypeGuard::assert($root, array (
  'format' => 'bytes',
  'type' => 'string',
), 'root');
        $this->root = $root;
    }

    public static function fromValue(mixed $value): self
    {
        return new self(\Near\JsonRpc\Models\ModelHydrator::hydrate($value, array (
  'format' => 'bytes',
  'type' => 'string',
), 'root'));
    }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'format' => 'bytes',
  'type' => 'string',
), 'root'));
        return $this->root;
    }
    public function jsonSerializeForEncoding(): mixed { return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'format' => 'bytes',
  'type' => 'string',
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
