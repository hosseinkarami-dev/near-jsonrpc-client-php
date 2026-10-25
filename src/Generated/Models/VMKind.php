<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class VMKind implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\VMKindWasmer0|\Near\JsonRpc\Generated\Models\VMKindWasmtime|\Near\JsonRpc\Generated\Models\VMKindWasmer2|\Near\JsonRpc\Generated\Models\VMKindNearVm */
    public \Near\JsonRpc\Generated\Models\VMKindWasmer0|\Near\JsonRpc\Generated\Models\VMKindWasmtime|\Near\JsonRpc\Generated\Models\VMKindWasmer2|\Near\JsonRpc\Generated\Models\VMKindNearVm $root;

    public function __construct(\Near\JsonRpc\Generated\Models\VMKindWasmer0|\Near\JsonRpc\Generated\Models\VMKindWasmtime|\Near\JsonRpc\Generated\Models\VMKindWasmer2|\Near\JsonRpc\Generated\Models\VMKindNearVm $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\VMKindWasmer0::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\VMKindWasmtime::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\VMKindWasmer2::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\VMKindNearVm::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for VMKind.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\VMKindWasmer0 => 'Wasmer0',
            $this->root instanceof \Near\JsonRpc\Generated\Models\VMKindWasmtime => 'Wasmtime',
            $this->root instanceof \Near\JsonRpc\Generated\Models\VMKindWasmer2 => 'Wasmer2',
            $this->root instanceof \Near\JsonRpc\Generated\Models\VMKindNearVm => 'NearVm',
            default => throw new \LogicException('Unknown VMKind variant.'),
        };
    }
    public static function wasmer0(): self { return new self(\Near\JsonRpc\Generated\Models\VMKindWasmer0::Wasmer0); }
    public static function wasmtime(): self { return new self(\Near\JsonRpc\Generated\Models\VMKindWasmtime::Wasmtime); }
    public static function wasmer2(): self { return new self(\Near\JsonRpc\Generated\Models\VMKindWasmer2::Wasmer2); }
    public static function nearVm(): self { return new self(\Near\JsonRpc\Generated\Models\VMKindNearVm::NearVm); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\VMKindWasmer0',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\VMKindWasmtime',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\VMKindWasmer2',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\VMKindNearVm',
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
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\VMKindWasmer0',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\VMKindWasmtime',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\VMKindWasmer2',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\VMKindNearVm',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
