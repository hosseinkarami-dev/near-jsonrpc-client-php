<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class RpcViewAccountRequest implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\RpcViewAccountRequestBlockId|\Near\JsonRpc\Generated\Models\RpcViewAccountRequestFinality|\Near\JsonRpc\Generated\Models\RpcViewAccountRequestSyncCheckpoint */
    public \Near\JsonRpc\Generated\Models\RpcViewAccountRequestBlockId|\Near\JsonRpc\Generated\Models\RpcViewAccountRequestFinality|\Near\JsonRpc\Generated\Models\RpcViewAccountRequestSyncCheckpoint $root;

    public function __construct(\Near\JsonRpc\Generated\Models\RpcViewAccountRequestBlockId|\Near\JsonRpc\Generated\Models\RpcViewAccountRequestFinality|\Near\JsonRpc\Generated\Models\RpcViewAccountRequestSyncCheckpoint $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\RpcViewAccountRequestBlockId::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\RpcViewAccountRequestFinality::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\RpcViewAccountRequestSyncCheckpoint::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for RpcViewAccountRequest.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcViewAccountRequestBlockId => 'block_id',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcViewAccountRequestFinality => 'finality',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcViewAccountRequestSyncCheckpoint => 'sync_checkpoint',
            default => throw new \LogicException('Unknown RpcViewAccountRequest variant.'),
        };
    }
    public static function blockId(\Near\JsonRpc\Generated\Models\BlockId $payload): self { return new self(new \Near\JsonRpc\Generated\Models\RpcViewAccountRequestBlockId($payload)); }
    public static function finality(\Near\JsonRpc\Generated\Models\Finality $payload): self { return new self(new \Near\JsonRpc\Generated\Models\RpcViewAccountRequestFinality($payload)); }
    public static function syncCheckpoint(\Near\JsonRpc\Generated\Models\SyncCheckpoint $payload): self { return new self(new \Near\JsonRpc\Generated\Models\RpcViewAccountRequestSyncCheckpoint($payload)); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccountRequestBlockId',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccountRequestFinality',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccountRequestSyncCheckpoint',
      'nullable' => false,
    ),
  ),
  'properties' => 
  array (
    'account_id' => 
    array (
      '$ref' => '#/components/schemas/AccountId',
    ),
  ),
  'required' => 
  array (
    0 => 'account_id',
  ),
  'title' => 'RpcViewAccountRequest',
  'type' => 'object',
), 'root'));
        return $this->root;
    }
    public function jsonSerializeForEncoding(): mixed { return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccountRequestBlockId',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccountRequestFinality',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccountRequestSyncCheckpoint',
      'nullable' => false,
    ),
  ),
  'properties' => 
  array (
    'account_id' => 
    array (
      '$ref' => '#/components/schemas/AccountId',
    ),
  ),
  'required' => 
  array (
    0 => 'account_id',
  ),
  'title' => 'RpcViewAccountRequest',
  'type' => 'object',
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
