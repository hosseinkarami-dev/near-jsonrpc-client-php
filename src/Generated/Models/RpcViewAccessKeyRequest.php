<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class RpcViewAccessKeyRequest implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\RpcViewAccessKeyRequestBlockId|\Near\JsonRpc\Generated\Models\RpcViewAccessKeyRequestFinality|\Near\JsonRpc\Generated\Models\RpcViewAccessKeyRequestSyncCheckpoint */
    public \Near\JsonRpc\Generated\Models\RpcViewAccessKeyRequestBlockId|\Near\JsonRpc\Generated\Models\RpcViewAccessKeyRequestFinality|\Near\JsonRpc\Generated\Models\RpcViewAccessKeyRequestSyncCheckpoint $root;

    public function __construct(\Near\JsonRpc\Generated\Models\RpcViewAccessKeyRequestBlockId|\Near\JsonRpc\Generated\Models\RpcViewAccessKeyRequestFinality|\Near\JsonRpc\Generated\Models\RpcViewAccessKeyRequestSyncCheckpoint $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\RpcViewAccessKeyRequestBlockId::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\RpcViewAccessKeyRequestFinality::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\RpcViewAccessKeyRequestSyncCheckpoint::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for RpcViewAccessKeyRequest.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcViewAccessKeyRequestBlockId => 'block_id',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcViewAccessKeyRequestFinality => 'finality',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcViewAccessKeyRequestSyncCheckpoint => 'sync_checkpoint',
            default => throw new \LogicException('Unknown RpcViewAccessKeyRequest variant.'),
        };
    }
    public static function blockId(\Near\JsonRpc\Generated\Models\BlockId $payload): self { return new self(new \Near\JsonRpc\Generated\Models\RpcViewAccessKeyRequestBlockId($payload)); }
    public static function finality(\Near\JsonRpc\Generated\Models\Finality $payload): self { return new self(new \Near\JsonRpc\Generated\Models\RpcViewAccessKeyRequestFinality($payload)); }
    public static function syncCheckpoint(\Near\JsonRpc\Generated\Models\SyncCheckpoint $payload): self { return new self(new \Near\JsonRpc\Generated\Models\RpcViewAccessKeyRequestSyncCheckpoint($payload)); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyRequestBlockId',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyRequestFinality',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyRequestSyncCheckpoint',
      'nullable' => false,
    ),
  ),
  'properties' => 
  array (
    'account_id' => 
    array (
      '$ref' => '#/components/schemas/AccountId',
    ),
    'public_key' => 
    array (
      '$ref' => '#/components/schemas/PublicKey',
    ),
  ),
  'required' => 
  array (
    0 => 'account_id',
    1 => 'public_key',
  ),
  'title' => 'RpcViewAccessKeyRequest',
  'type' => 'object',
), 'root'));
        return $this->root;
    }
    public function jsonSerializeForEncoding(): mixed { return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyRequestBlockId',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyRequestFinality',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyRequestSyncCheckpoint',
      'nullable' => false,
    ),
  ),
  'properties' => 
  array (
    'account_id' => 
    array (
      '$ref' => '#/components/schemas/AccountId',
    ),
    'public_key' => 
    array (
      '$ref' => '#/components/schemas/PublicKey',
    ),
  ),
  'required' => 
  array (
    0 => 'account_id',
    1 => 'public_key',
  ),
  'title' => 'RpcViewAccessKeyRequest',
  'type' => 'object',
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
