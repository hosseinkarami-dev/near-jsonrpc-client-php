<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class RpcCallFunctionRequest implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\RpcCallFunctionRequestBlockId|\Near\JsonRpc\Generated\Models\RpcCallFunctionRequestFinality|\Near\JsonRpc\Generated\Models\RpcCallFunctionRequestSyncCheckpoint */
    public \Near\JsonRpc\Generated\Models\RpcCallFunctionRequestBlockId|\Near\JsonRpc\Generated\Models\RpcCallFunctionRequestFinality|\Near\JsonRpc\Generated\Models\RpcCallFunctionRequestSyncCheckpoint $root;

    public function __construct(\Near\JsonRpc\Generated\Models\RpcCallFunctionRequestBlockId|\Near\JsonRpc\Generated\Models\RpcCallFunctionRequestFinality|\Near\JsonRpc\Generated\Models\RpcCallFunctionRequestSyncCheckpoint $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\RpcCallFunctionRequestBlockId::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\RpcCallFunctionRequestFinality::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\RpcCallFunctionRequestSyncCheckpoint::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for RpcCallFunctionRequest.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcCallFunctionRequestBlockId => 'block_id',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcCallFunctionRequestFinality => 'finality',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcCallFunctionRequestSyncCheckpoint => 'sync_checkpoint',
            default => throw new \LogicException('Unknown RpcCallFunctionRequest variant.'),
        };
    }
    public static function blockId(\Near\JsonRpc\Generated\Models\BlockId $payload): self { return new self(new \Near\JsonRpc\Generated\Models\RpcCallFunctionRequestBlockId($payload)); }
    public static function finality(\Near\JsonRpc\Generated\Models\Finality $payload): self { return new self(new \Near\JsonRpc\Generated\Models\RpcCallFunctionRequestFinality($payload)); }
    public static function syncCheckpoint(\Near\JsonRpc\Generated\Models\SyncCheckpoint $payload): self { return new self(new \Near\JsonRpc\Generated\Models\RpcCallFunctionRequestSyncCheckpoint($payload)); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcCallFunctionRequestBlockId',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcCallFunctionRequestFinality',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcCallFunctionRequestSyncCheckpoint',
      'nullable' => false,
    ),
  ),
  'properties' => 
  array (
    'account_id' => 
    array (
      '$ref' => '#/components/schemas/AccountId',
    ),
    'args_base64' => 
    array (
      '$ref' => '#/components/schemas/FunctionArgs',
    ),
    'method_name' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'account_id',
    1 => 'method_name',
    2 => 'args_base64',
  ),
  'title' => 'RpcCallFunctionRequest',
  'type' => 'object',
), 'root'));
        return $this->root;
    }
    public function jsonSerializeForEncoding(): mixed { return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcCallFunctionRequestBlockId',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcCallFunctionRequestFinality',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcCallFunctionRequestSyncCheckpoint',
      'nullable' => false,
    ),
  ),
  'properties' => 
  array (
    'account_id' => 
    array (
      '$ref' => '#/components/schemas/AccountId',
    ),
    'args_base64' => 
    array (
      '$ref' => '#/components/schemas/FunctionArgs',
    ),
    'method_name' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'account_id',
    1 => 'method_name',
    2 => 'args_base64',
  ),
  'title' => 'RpcCallFunctionRequest',
  'type' => 'object',
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
