<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Raw bytes containing borsh-serialized `UniversalStateInit`.
 *
 * This is the protocol's view of a state init, not a mere transport wrapper: the
 * account ID is SHA3-256 over exactly these bytes. The typed form is a decoded
 * *view* of them, used to install the state and to price the action, and it is
 * never re-serialized to derive an ID. From `CanonicalUniversalStateInit` on, only
 * the canonical encoding is accepted (see `UniversalStateInit::from_raw_strict`), so
 * each logical value has one ID.
 *
 * It also lets an immutable contract pass through a `UniversalStateInit` version it
 * predates: the bytes travel verbatim, so a version added after the contract was
 * compiled still works.
 *
 * Borsh-serializing `RawStateInit` writes a 4-byte length prefix before the
 * bytes, which is how the `UniversalStateInit` action carries it as a field;
 * over serde the bytes are base64. Neither is what the account ID hashes: that
 * is `self.0` alone, never `borsh::to_vec(self)`.
 */
final readonly class RawStateInit implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public string $root;

    public function __construct(string $root)
    {
        \Near\JsonRpc\Models\TypeGuard::assert($root, array (
  'type' => 'string',
), 'root');
        $this->root = $root;
    }

    public static function fromValue(mixed $value): self
    {
        return new self(\Near\JsonRpc\Models\ModelHydrator::hydrate($value, array (
  'type' => 'string',
), 'root'));
    }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'type' => 'string',
), 'root'));
        return $this->root;
    }
    public function jsonSerializeForEncoding(): mixed { return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'type' => 'string',
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
