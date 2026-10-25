<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class RpcChunkRequest implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\RpcChunkRequestBlockShardId|\Near\JsonRpc\Generated\Models\RpcChunkRequestChunkHash */
    public \Near\JsonRpc\Generated\Models\RpcChunkRequestBlockShardId|\Near\JsonRpc\Generated\Models\RpcChunkRequestChunkHash $root;

    public function __construct(\Near\JsonRpc\Generated\Models\RpcChunkRequestBlockShardId|\Near\JsonRpc\Generated\Models\RpcChunkRequestChunkHash $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\RpcChunkRequestBlockShardId::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\RpcChunkRequestChunkHash::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (false && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its anyOf schema for RpcChunkRequest.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcChunkRequestBlockShardId => 'block_shard_id',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcChunkRequestChunkHash => 'chunk_hash',
            default => throw new \LogicException('Unknown RpcChunkRequest variant.'),
        };
    }
    public static function blockShardId(\Near\JsonRpc\Generated\Models\RpcChunkRequestBlockShardId $variant): self { return new self($variant); }
    public static function chunkHash(\Near\JsonRpc\Generated\Models\CryptoHash $payload): self { return new self(new \Near\JsonRpc\Generated\Models\RpcChunkRequestChunkHash($payload)); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcChunkRequestBlockShardId',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcChunkRequestChunkHash',
      'nullable' => false,
    ),
  ),
  'title' => 'RpcChunkRequest',
  'type' => 'object',
), 'root'));
        return $this->root;
    }
    public function jsonSerializeForEncoding(): mixed { return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcChunkRequestBlockShardId',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcChunkRequestChunkHash',
      'nullable' => false,
    ),
  ),
  'title' => 'RpcChunkRequest',
  'type' => 'object',
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
