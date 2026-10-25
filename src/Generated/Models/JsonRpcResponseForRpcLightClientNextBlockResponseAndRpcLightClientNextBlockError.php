<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class JsonRpcResponseForRpcLightClientNextBlockResponseAndRpcLightClientNextBlockError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\JsonRpcResponseForRpcLightClientNextBlockResponseAndRpcLightClientNextBlockErrorResult|\Near\JsonRpc\Generated\Models\JsonRpcResponseForRpcLightClientNextBlockResponseAndRpcLightClientNextBlockErrorError */
    public \Near\JsonRpc\Generated\Models\JsonRpcResponseForRpcLightClientNextBlockResponseAndRpcLightClientNextBlockErrorResult|\Near\JsonRpc\Generated\Models\JsonRpcResponseForRpcLightClientNextBlockResponseAndRpcLightClientNextBlockErrorError $root;

    public function __construct(\Near\JsonRpc\Generated\Models\JsonRpcResponseForRpcLightClientNextBlockResponseAndRpcLightClientNextBlockErrorResult|\Near\JsonRpc\Generated\Models\JsonRpcResponseForRpcLightClientNextBlockResponseAndRpcLightClientNextBlockErrorError $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\JsonRpcResponseForRpcLightClientNextBlockResponseAndRpcLightClientNextBlockErrorResult::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\JsonRpcResponseForRpcLightClientNextBlockResponseAndRpcLightClientNextBlockErrorError::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for JsonRpcResponseForRpcLightClientNextBlockResponseAndRpcLightClientNextBlockError.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\JsonRpcResponseForRpcLightClientNextBlockResponseAndRpcLightClientNextBlockErrorResult => 'result',
            $this->root instanceof \Near\JsonRpc\Generated\Models\JsonRpcResponseForRpcLightClientNextBlockResponseAndRpcLightClientNextBlockErrorError => 'error',
            default => throw new \LogicException('Unknown JsonRpcResponseForRpcLightClientNextBlockResponseAndRpcLightClientNextBlockError variant.'),
        };
    }
    public static function result(\Near\JsonRpc\Generated\Models\RpcLightClientNextBlockResponse $payload): self { return new self(new \Near\JsonRpc\Generated\Models\JsonRpcResponseForRpcLightClientNextBlockResponseAndRpcLightClientNextBlockErrorResult($payload)); }
    public static function error(\Near\JsonRpc\Generated\Models\ErrorWrapper_for_RpcLightClientNextBlockError $payload): self { return new self(new \Near\JsonRpc\Generated\Models\JsonRpcResponseForRpcLightClientNextBlockResponseAndRpcLightClientNextBlockErrorError($payload)); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\JsonRpcResponseForRpcLightClientNextBlockResponseAndRpcLightClientNextBlockErrorResult',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\JsonRpcResponseForRpcLightClientNextBlockResponseAndRpcLightClientNextBlockErrorError',
      'nullable' => false,
    ),
  ),
  'properties' => 
  array (
    'id' => 
    array (
      'type' => 'string',
    ),
    'jsonrpc' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'jsonrpc',
    1 => 'id',
  ),
  'title' => 'JsonRpcResponse_for_RpcLightClientNextBlockResponse_and_RpcLightClientNextBlockError',
  'type' => 'object',
), 'root'));
        return $this->root;
    }
    public function jsonSerializeForEncoding(): mixed { return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\JsonRpcResponseForRpcLightClientNextBlockResponseAndRpcLightClientNextBlockErrorResult',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\JsonRpcResponseForRpcLightClientNextBlockResponseAndRpcLightClientNextBlockErrorError',
      'nullable' => false,
    ),
  ),
  'properties' => 
  array (
    'id' => 
    array (
      'type' => 'string',
    ),
    'jsonrpc' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'jsonrpc',
    1 => 'id',
  ),
  'title' => 'JsonRpcResponse_for_RpcLightClientNextBlockResponse_and_RpcLightClientNextBlockError',
  'type' => 'object',
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
