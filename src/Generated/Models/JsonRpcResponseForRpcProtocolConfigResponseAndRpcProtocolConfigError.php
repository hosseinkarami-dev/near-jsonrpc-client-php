<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class JsonRpcResponseForRpcProtocolConfigResponseAndRpcProtocolConfigError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\JsonRpcResponseForRpcProtocolConfigResponseAndRpcProtocolConfigErrorResult|\Near\JsonRpc\Generated\Models\JsonRpcResponseForRpcProtocolConfigResponseAndRpcProtocolConfigErrorError */
    public \Near\JsonRpc\Generated\Models\JsonRpcResponseForRpcProtocolConfigResponseAndRpcProtocolConfigErrorResult|\Near\JsonRpc\Generated\Models\JsonRpcResponseForRpcProtocolConfigResponseAndRpcProtocolConfigErrorError $root;

    public function __construct(\Near\JsonRpc\Generated\Models\JsonRpcResponseForRpcProtocolConfigResponseAndRpcProtocolConfigErrorResult|\Near\JsonRpc\Generated\Models\JsonRpcResponseForRpcProtocolConfigResponseAndRpcProtocolConfigErrorError $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\JsonRpcResponseForRpcProtocolConfigResponseAndRpcProtocolConfigErrorResult::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\JsonRpcResponseForRpcProtocolConfigResponseAndRpcProtocolConfigErrorError::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for JsonRpcResponseForRpcProtocolConfigResponseAndRpcProtocolConfigError.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\JsonRpcResponseForRpcProtocolConfigResponseAndRpcProtocolConfigErrorResult => 'result',
            $this->root instanceof \Near\JsonRpc\Generated\Models\JsonRpcResponseForRpcProtocolConfigResponseAndRpcProtocolConfigErrorError => 'error',
            default => throw new \LogicException('Unknown JsonRpcResponseForRpcProtocolConfigResponseAndRpcProtocolConfigError variant.'),
        };
    }
    public static function result(\Near\JsonRpc\Generated\Models\RpcProtocolConfigResponse $payload): self { return new self(new \Near\JsonRpc\Generated\Models\JsonRpcResponseForRpcProtocolConfigResponseAndRpcProtocolConfigErrorResult($payload)); }
    public static function error(\Near\JsonRpc\Generated\Models\ErrorWrapper_for_RpcProtocolConfigError $payload): self { return new self(new \Near\JsonRpc\Generated\Models\JsonRpcResponseForRpcProtocolConfigResponseAndRpcProtocolConfigErrorError($payload)); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\JsonRpcResponseForRpcProtocolConfigResponseAndRpcProtocolConfigErrorResult',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\JsonRpcResponseForRpcProtocolConfigResponseAndRpcProtocolConfigErrorError',
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
  'title' => 'JsonRpcResponse_for_RpcProtocolConfigResponse_and_RpcProtocolConfigError',
  'type' => 'object',
), 'root'));
        return $this->root;
    }
    public function jsonSerializeForEncoding(): mixed { return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\JsonRpcResponseForRpcProtocolConfigResponseAndRpcProtocolConfigErrorResult',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\JsonRpcResponseForRpcProtocolConfigResponseAndRpcProtocolConfigErrorError',
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
  'title' => 'JsonRpcResponse_for_RpcProtocolConfigResponse_and_RpcProtocolConfigError',
  'type' => 'object',
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
