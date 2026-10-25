<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class RpcCongestionLevelRequest implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\RpcCongestionLevelRequestBlockShardId|\Near\JsonRpc\Generated\Models\RpcCongestionLevelRequestChunkHash */
    public \Near\JsonRpc\Generated\Models\RpcCongestionLevelRequestBlockShardId|\Near\JsonRpc\Generated\Models\RpcCongestionLevelRequestChunkHash $root;

    public function __construct(\Near\JsonRpc\Generated\Models\RpcCongestionLevelRequestBlockShardId|\Near\JsonRpc\Generated\Models\RpcCongestionLevelRequestChunkHash $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\RpcCongestionLevelRequestBlockShardId::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\RpcCongestionLevelRequestChunkHash::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (false && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its anyOf schema for RpcCongestionLevelRequest.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcCongestionLevelRequestBlockShardId => 'block_shard_id',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcCongestionLevelRequestChunkHash => 'chunk_hash',
            default => throw new \LogicException('Unknown RpcCongestionLevelRequest variant.'),
        };
    }
    public static function blockShardId(\Near\JsonRpc\Generated\Models\RpcCongestionLevelRequestBlockShardId $variant): self { return new self($variant); }
    public static function chunkHash(\Near\JsonRpc\Generated\Models\CryptoHash $payload): self { return new self(new \Near\JsonRpc\Generated\Models\RpcCongestionLevelRequestChunkHash($payload)); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcCongestionLevelRequestBlockShardId',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcCongestionLevelRequestChunkHash',
      'nullable' => false,
    ),
  ),
  'title' => 'RpcCongestionLevelRequest',
  'type' => 'object',
), 'root'));
        return $this->root;
    }
    public function jsonSerializeForEncoding(): mixed { return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcCongestionLevelRequestBlockShardId',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcCongestionLevelRequestChunkHash',
      'nullable' => false,
    ),
  ),
  'title' => 'RpcCongestionLevelRequest',
  'type' => 'object',
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
