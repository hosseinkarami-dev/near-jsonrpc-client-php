<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Describes the expected behavior of the node regarding shard tracking.
 * If the node is an active validator, it will also track the shards it is responsible for as a validator.
 */
final readonly class TrackedShardsConfig implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\TrackedShardsConfigNoShards|\Near\JsonRpc\Generated\Models\TrackedShardsConfigShards|\Near\JsonRpc\Generated\Models\TrackedShardsConfigAllShards|\Near\JsonRpc\Generated\Models\TrackedShardsConfigShadowValidator|\Near\JsonRpc\Generated\Models\TrackedShardsConfigSchedule|\Near\JsonRpc\Generated\Models\TrackedShardsConfigAccounts */
    public \Near\JsonRpc\Generated\Models\TrackedShardsConfigNoShards|\Near\JsonRpc\Generated\Models\TrackedShardsConfigShards|\Near\JsonRpc\Generated\Models\TrackedShardsConfigAllShards|\Near\JsonRpc\Generated\Models\TrackedShardsConfigShadowValidator|\Near\JsonRpc\Generated\Models\TrackedShardsConfigSchedule|\Near\JsonRpc\Generated\Models\TrackedShardsConfigAccounts $root;

    public function __construct(\Near\JsonRpc\Generated\Models\TrackedShardsConfigNoShards|\Near\JsonRpc\Generated\Models\TrackedShardsConfigShards|\Near\JsonRpc\Generated\Models\TrackedShardsConfigAllShards|\Near\JsonRpc\Generated\Models\TrackedShardsConfigShadowValidator|\Near\JsonRpc\Generated\Models\TrackedShardsConfigSchedule|\Near\JsonRpc\Generated\Models\TrackedShardsConfigAccounts $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\TrackedShardsConfigNoShards::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\TrackedShardsConfigShards::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\TrackedShardsConfigAllShards::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\TrackedShardsConfigShadowValidator::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[4] = \Near\JsonRpc\Generated\Models\TrackedShardsConfigSchedule::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[5] = \Near\JsonRpc\Generated\Models\TrackedShardsConfigAccounts::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for TrackedShardsConfig.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\TrackedShardsConfigNoShards => 'NoShards',
            $this->root instanceof \Near\JsonRpc\Generated\Models\TrackedShardsConfigShards => 'Shards',
            $this->root instanceof \Near\JsonRpc\Generated\Models\TrackedShardsConfigAllShards => 'AllShards',
            $this->root instanceof \Near\JsonRpc\Generated\Models\TrackedShardsConfigShadowValidator => 'ShadowValidator',
            $this->root instanceof \Near\JsonRpc\Generated\Models\TrackedShardsConfigSchedule => 'Schedule',
            $this->root instanceof \Near\JsonRpc\Generated\Models\TrackedShardsConfigAccounts => 'Accounts',
            default => throw new \LogicException('Unknown TrackedShardsConfig variant.'),
        };
    }
    public static function noShards(): self { return new self(\Near\JsonRpc\Generated\Models\TrackedShardsConfigNoShards::NoShards); }
    public static function shards(\Near\JsonRpc\Generated\Models\TrackedShardsConfigShards $variant): self { return new self($variant); }
    public static function allShards(): self { return new self(\Near\JsonRpc\Generated\Models\TrackedShardsConfigAllShards::AllShards); }
    public static function shadowValidator(\Near\JsonRpc\Generated\Models\AccountId $payload): self { return new self(new \Near\JsonRpc\Generated\Models\TrackedShardsConfigShadowValidator($payload)); }
    public static function schedule(\Near\JsonRpc\Generated\Models\TrackedShardsConfigSchedule $variant): self { return new self($variant); }
    public static function accounts(\Near\JsonRpc\Generated\Models\TrackedShardsConfigAccounts $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\TrackedShardsConfigNoShards',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TrackedShardsConfigShards',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\TrackedShardsConfigAllShards',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TrackedShardsConfigShadowValidator',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TrackedShardsConfigSchedule',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TrackedShardsConfigAccounts',
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
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\TrackedShardsConfigNoShards',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TrackedShardsConfigShards',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\TrackedShardsConfigAllShards',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TrackedShardsConfigShadowValidator',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TrackedShardsConfigSchedule',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TrackedShardsConfigAccounts',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
