<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Versions of the delegate action carried by `Action::DelegateV2`. New
 * versions add a variant here rather than a new `Action` variant. The variant
 * is part of the signed payload, so a signature can't be ambiguous across
 * versions.
 */
final readonly class VersionedDelegateActionPayload implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\VersionedDelegateActionPayloadV2 */
    public \Near\JsonRpc\Generated\Models\VersionedDelegateActionPayloadV2 $root;

    public function __construct(\Near\JsonRpc\Generated\Models\VersionedDelegateActionPayloadV2 $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\VersionedDelegateActionPayloadV2::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for VersionedDelegateActionPayload.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\VersionedDelegateActionPayloadV2 => 'V2',
            default => throw new \LogicException('Unknown VersionedDelegateActionPayload variant.'),
        };
    }
    public static function v2(\Near\JsonRpc\Generated\Models\DelegateActionV2 $payload): self { return new self(new \Near\JsonRpc\Generated\Models\VersionedDelegateActionPayloadV2($payload)); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\VersionedDelegateActionPayloadV2',
      'nullable' => false,
    ),
  ),
), 'root'));
        return $this->root;
    }
    public function jsonSerializeForEncoding(): mixed { return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\VersionedDelegateActionPayloadV2',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
