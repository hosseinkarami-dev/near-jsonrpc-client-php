<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class RpcViewAccessKeyListRequest implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\RpcViewAccessKeyListRequestBlockId|\Near\JsonRpc\Generated\Models\RpcViewAccessKeyListRequestFinality|\Near\JsonRpc\Generated\Models\RpcViewAccessKeyListRequestSyncCheckpoint */
    public \Near\JsonRpc\Generated\Models\RpcViewAccessKeyListRequestBlockId|\Near\JsonRpc\Generated\Models\RpcViewAccessKeyListRequestFinality|\Near\JsonRpc\Generated\Models\RpcViewAccessKeyListRequestSyncCheckpoint $root;

    public function __construct(\Near\JsonRpc\Generated\Models\RpcViewAccessKeyListRequestBlockId|\Near\JsonRpc\Generated\Models\RpcViewAccessKeyListRequestFinality|\Near\JsonRpc\Generated\Models\RpcViewAccessKeyListRequestSyncCheckpoint $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\RpcViewAccessKeyListRequestBlockId::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\RpcViewAccessKeyListRequestFinality::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\RpcViewAccessKeyListRequestSyncCheckpoint::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for RpcViewAccessKeyListRequest.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcViewAccessKeyListRequestBlockId => 'block_id',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcViewAccessKeyListRequestFinality => 'finality',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcViewAccessKeyListRequestSyncCheckpoint => 'sync_checkpoint',
            default => throw new \LogicException('Unknown RpcViewAccessKeyListRequest variant.'),
        };
    }
    public static function blockId(\Near\JsonRpc\Generated\Models\BlockId $payload): self { return new self(new \Near\JsonRpc\Generated\Models\RpcViewAccessKeyListRequestBlockId($payload)); }
    public static function finality(\Near\JsonRpc\Generated\Models\Finality $payload): self { return new self(new \Near\JsonRpc\Generated\Models\RpcViewAccessKeyListRequestFinality($payload)); }
    public static function syncCheckpoint(\Near\JsonRpc\Generated\Models\SyncCheckpoint $payload): self { return new self(new \Near\JsonRpc\Generated\Models\RpcViewAccessKeyListRequestSyncCheckpoint($payload)); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyListRequestBlockId',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyListRequestFinality',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyListRequestSyncCheckpoint',
      'nullable' => false,
    ),
  ),
  'properties' => 
  array (
    'account_id' => 
    array (
      '$ref' => '#/components/schemas/AccountId',
    ),
    'after_key' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          '$ref' => '#/components/schemas/PublicKeyHandle',
        ),
        1 => 
        array (
          'enum' => 
          array (
            0 => NULL,
          ),
          'nullable' => true,
        ),
      ),
    ),
    'limit' => 
    array (
      'format' => 'uint32',
      'minimum' => 1,
      'nullable' => true,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'account_id',
  ),
  'title' => 'RpcViewAccessKeyListRequest',
  'type' => 'object',
), 'root'));
        return $this->root;
    }
    public function jsonSerializeForEncoding(): mixed { return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyListRequestBlockId',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyListRequestFinality',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyListRequestSyncCheckpoint',
      'nullable' => false,
    ),
  ),
  'properties' => 
  array (
    'account_id' => 
    array (
      '$ref' => '#/components/schemas/AccountId',
    ),
    'after_key' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          '$ref' => '#/components/schemas/PublicKeyHandle',
        ),
        1 => 
        array (
          'enum' => 
          array (
            0 => NULL,
          ),
          'nullable' => true,
        ),
      ),
    ),
    'limit' => 
    array (
      'format' => 'uint32',
      'minimum' => 1,
      'nullable' => true,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'account_id',
  ),
  'title' => 'RpcViewAccessKeyListRequest',
  'type' => 'object',
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
