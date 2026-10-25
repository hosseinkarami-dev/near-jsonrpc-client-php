<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * A versioned struct that contains all information needed to assign accounts to shards.
 *
 * Because of re-sharding, the chain may use different shard layout to split shards at different
 * times. Currently, `ShardLayout` is stored as part of `EpochConfig`, which is generated each
 * epoch given the epoch protocol version. In mainnet/testnet, we use two shard layouts since
 * re-sharding has only happened once. It is stored as part of genesis config, see
 * default_simple_nightshade_shard_layout() Below is an overview for some important
 * functionalities of ShardLayout interface.
 */
final readonly class ShardLayout implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\ShardLayoutV02|\Near\JsonRpc\Generated\Models\ShardLayoutV12|\Near\JsonRpc\Generated\Models\ShardLayoutV22|\Near\JsonRpc\Generated\Models\ShardLayoutV32 */
    public \Near\JsonRpc\Generated\Models\ShardLayoutV02|\Near\JsonRpc\Generated\Models\ShardLayoutV12|\Near\JsonRpc\Generated\Models\ShardLayoutV22|\Near\JsonRpc\Generated\Models\ShardLayoutV32 $root;

    public function __construct(\Near\JsonRpc\Generated\Models\ShardLayoutV02|\Near\JsonRpc\Generated\Models\ShardLayoutV12|\Near\JsonRpc\Generated\Models\ShardLayoutV22|\Near\JsonRpc\Generated\Models\ShardLayoutV32 $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\ShardLayoutV02::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\ShardLayoutV12::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\ShardLayoutV22::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\ShardLayoutV32::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for ShardLayout.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\ShardLayoutV02 => 'V0',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ShardLayoutV12 => 'V1',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ShardLayoutV22 => 'V2',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ShardLayoutV32 => 'V3',
            default => throw new \LogicException('Unknown ShardLayout variant.'),
        };
    }
    public static function v0(\Near\JsonRpc\Generated\Models\ShardLayoutV0 $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ShardLayoutV02($payload)); }
    public static function v1(\Near\JsonRpc\Generated\Models\ShardLayoutV1 $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ShardLayoutV12($payload)); }
    public static function v2(\Near\JsonRpc\Generated\Models\ShardLayoutV2 $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ShardLayoutV22($payload)); }
    public static function v3(\Near\JsonRpc\Generated\Models\ShardLayoutV3 $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ShardLayoutV32($payload)); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardLayoutV02',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardLayoutV12',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardLayoutV22',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardLayoutV32',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardLayoutV02',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardLayoutV12',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardLayoutV22',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardLayoutV32',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
