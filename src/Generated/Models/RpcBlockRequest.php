<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class RpcBlockRequest implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\RpcBlockRequestBlockId|\Near\JsonRpc\Generated\Models\RpcBlockRequestFinality|\Near\JsonRpc\Generated\Models\RpcBlockRequestSyncCheckpoint */
    public \Near\JsonRpc\Generated\Models\RpcBlockRequestBlockId|\Near\JsonRpc\Generated\Models\RpcBlockRequestFinality|\Near\JsonRpc\Generated\Models\RpcBlockRequestSyncCheckpoint $root;

    public function __construct(\Near\JsonRpc\Generated\Models\RpcBlockRequestBlockId|\Near\JsonRpc\Generated\Models\RpcBlockRequestFinality|\Near\JsonRpc\Generated\Models\RpcBlockRequestSyncCheckpoint $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\RpcBlockRequestBlockId::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\RpcBlockRequestFinality::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\RpcBlockRequestSyncCheckpoint::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for RpcBlockRequest.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcBlockRequestBlockId => 'block_id',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcBlockRequestFinality => 'finality',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcBlockRequestSyncCheckpoint => 'sync_checkpoint',
            default => throw new \LogicException('Unknown RpcBlockRequest variant.'),
        };
    }
    public static function blockId(\Near\JsonRpc\Generated\Models\BlockId $payload): self { return new self(new \Near\JsonRpc\Generated\Models\RpcBlockRequestBlockId($payload)); }
    public static function finality(\Near\JsonRpc\Generated\Models\Finality $payload): self { return new self(new \Near\JsonRpc\Generated\Models\RpcBlockRequestFinality($payload)); }
    public static function syncCheckpoint(\Near\JsonRpc\Generated\Models\SyncCheckpoint $payload): self { return new self(new \Near\JsonRpc\Generated\Models\RpcBlockRequestSyncCheckpoint($payload)); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcBlockRequestBlockId',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcBlockRequestFinality',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcBlockRequestSyncCheckpoint',
      'nullable' => false,
    ),
  ),
  'title' => 'RpcBlockRequest',
  'type' => 'object',
), 'root'));
        return $this->root;
    }
    public function jsonSerializeForEncoding(): mixed { return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcBlockRequestBlockId',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcBlockRequestFinality',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcBlockRequestSyncCheckpoint',
      'nullable' => false,
    ),
  ),
  'title' => 'RpcBlockRequest',
  'type' => 'object',
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
