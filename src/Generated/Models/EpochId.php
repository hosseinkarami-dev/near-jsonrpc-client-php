<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Epoch identifier -- wrapped hash, to make it easier to distinguish.
 * EpochId of epoch T is the hash of last block in T-2
 * EpochId of first two epochs is 0
 */
final readonly class EpochId implements \Near\JsonRpc\Models\ModelJsonSerializable
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
