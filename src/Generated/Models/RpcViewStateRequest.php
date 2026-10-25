<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class RpcViewStateRequest implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\RpcViewStateRequestBlockId|\Near\JsonRpc\Generated\Models\RpcViewStateRequestFinality|\Near\JsonRpc\Generated\Models\RpcViewStateRequestSyncCheckpoint */
    public \Near\JsonRpc\Generated\Models\RpcViewStateRequestBlockId|\Near\JsonRpc\Generated\Models\RpcViewStateRequestFinality|\Near\JsonRpc\Generated\Models\RpcViewStateRequestSyncCheckpoint $root;

    public function __construct(\Near\JsonRpc\Generated\Models\RpcViewStateRequestBlockId|\Near\JsonRpc\Generated\Models\RpcViewStateRequestFinality|\Near\JsonRpc\Generated\Models\RpcViewStateRequestSyncCheckpoint $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\RpcViewStateRequestBlockId::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\RpcViewStateRequestFinality::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\RpcViewStateRequestSyncCheckpoint::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for RpcViewStateRequest.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcViewStateRequestBlockId => 'block_id',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcViewStateRequestFinality => 'finality',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcViewStateRequestSyncCheckpoint => 'sync_checkpoint',
            default => throw new \LogicException('Unknown RpcViewStateRequest variant.'),
        };
    }
    public static function blockId(\Near\JsonRpc\Generated\Models\BlockId $payload): self { return new self(new \Near\JsonRpc\Generated\Models\RpcViewStateRequestBlockId($payload)); }
    public static function finality(\Near\JsonRpc\Generated\Models\Finality $payload): self { return new self(new \Near\JsonRpc\Generated\Models\RpcViewStateRequestFinality($payload)); }
    public static function syncCheckpoint(\Near\JsonRpc\Generated\Models\SyncCheckpoint $payload): self { return new self(new \Near\JsonRpc\Generated\Models\RpcViewStateRequestSyncCheckpoint($payload)); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewStateRequestBlockId',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewStateRequestFinality',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewStateRequestSyncCheckpoint',
      'nullable' => false,
    ),
  ),
  'properties' => 
  array (
    'account_id' => 
    array (
      '$ref' => '#/components/schemas/AccountId',
    ),
    'after_key_base64' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          '$ref' => '#/components/schemas/StoreKey',
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
      'default' => NULL,
    ),
    'include_proof' => 
    array (
      'default' => false,
      'type' => 'boolean',
    ),
    'limit' => 
    array (
      'default' => NULL,
      'format' => 'uint32',
      'minimum' => 1,
      'nullable' => true,
      'type' => 'integer',
    ),
    'prefix_base64' => 
    array (
      '$ref' => '#/components/schemas/StoreKey',
    ),
  ),
  'required' => 
  array (
    0 => 'account_id',
    1 => 'prefix_base64',
  ),
  'title' => 'RpcViewStateRequest',
  'type' => 'object',
), 'root'));
        return $this->root;
    }
    public function jsonSerializeForEncoding(): mixed { return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewStateRequestBlockId',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewStateRequestFinality',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewStateRequestSyncCheckpoint',
      'nullable' => false,
    ),
  ),
  'properties' => 
  array (
    'account_id' => 
    array (
      '$ref' => '#/components/schemas/AccountId',
    ),
    'after_key_base64' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          '$ref' => '#/components/schemas/StoreKey',
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
      'default' => NULL,
    ),
    'include_proof' => 
    array (
      'default' => false,
      'type' => 'boolean',
    ),
    'limit' => 
    array (
      'default' => NULL,
      'format' => 'uint32',
      'minimum' => 1,
      'nullable' => true,
      'type' => 'integer',
    ),
    'prefix_base64' => 
    array (
      '$ref' => '#/components/schemas/StoreKey',
    ),
  ),
  'required' => 
  array (
    0 => 'account_id',
    1 => 'prefix_base64',
  ),
  'title' => 'RpcViewStateRequest',
  'type' => 'object',
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
