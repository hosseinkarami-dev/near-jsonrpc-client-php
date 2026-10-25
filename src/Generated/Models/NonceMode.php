<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Controls how the transaction nonce is validated against the access key nonce.
 */
final readonly class NonceMode implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\NonceModeMonotonic|\Near\JsonRpc\Generated\Models\NonceModeStrict */
    public \Near\JsonRpc\Generated\Models\NonceModeMonotonic|\Near\JsonRpc\Generated\Models\NonceModeStrict $root;

    public function __construct(\Near\JsonRpc\Generated\Models\NonceModeMonotonic|\Near\JsonRpc\Generated\Models\NonceModeStrict $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\NonceModeMonotonic::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\NonceModeStrict::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for NonceMode.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\NonceModeMonotonic => 'monotonic',
            $this->root instanceof \Near\JsonRpc\Generated\Models\NonceModeStrict => 'strict',
            default => throw new \LogicException('Unknown NonceMode variant.'),
        };
    }
    public static function monotonic(): self { return new self(\Near\JsonRpc\Generated\Models\NonceModeMonotonic::Monotonic); }
    public static function strict(): self { return new self(\Near\JsonRpc\Generated\Models\NonceModeStrict::Strict); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\NonceModeMonotonic',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\NonceModeStrict',
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
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\NonceModeMonotonic',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\NonceModeStrict',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
