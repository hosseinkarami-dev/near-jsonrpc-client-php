<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class BlockId implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\BlockIdBlockHeight|\Near\JsonRpc\Generated\Models\CryptoHash */
    public \Near\JsonRpc\Generated\Models\BlockIdBlockHeight|\Near\JsonRpc\Generated\Models\CryptoHash $root;

    public function __construct(\Near\JsonRpc\Generated\Models\BlockIdBlockHeight|\Near\JsonRpc\Generated\Models\CryptoHash $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\BlockIdBlockHeight::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\CryptoHash::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (false && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its anyOf schema for BlockId.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\BlockIdBlockHeight => 'block_height',
            $this->root instanceof \Near\JsonRpc\Generated\Models\CryptoHash => 'CryptoHash',
            default => throw new \LogicException('Unknown BlockId variant.'),
        };
    }
    public static function blockHeight(\Near\JsonRpc\Generated\Models\BlockIdBlockHeight $variant): self { return new self($variant); }
    public static function cryptoHash(\Near\JsonRpc\Generated\Models\CryptoHash $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockIdBlockHeight',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
  ),
), 'root'));
        return $this->root;
    }
    public function jsonSerializeForEncoding(): mixed { return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockIdBlockHeight',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
