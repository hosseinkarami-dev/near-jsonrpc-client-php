<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class JsonRpcRequestForExperimentalViewAccessKey implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var string
         */
        public string $id,
        /**
         * @var string
         */
        public string $jsonrpc,
        /**
         * @var 'EXPERIMENTAL_view_access_key'
         */
        public string $method,
        /**
         * @var \Near\JsonRpc\Generated\Models\RpcViewAccessKeyRequest
         */
        public \Near\JsonRpc\Generated\Models\RpcViewAccessKeyRequest $params,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->id, array (
  'type' => 'string',
), 'id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->jsonrpc, array (
  'type' => 'string',
), 'jsonrpc');
        \Near\JsonRpc\Models\TypeGuard::assert($this->method, array (
  'enum' => 
  array (
    0 => 'EXPERIMENTAL_view_access_key',
  ),
  'type' => 'string',
), 'method');
        \Near\JsonRpc\Models\TypeGuard::assert($this->params, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyRequest',
  'nullable' => false,
), 'params');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for JsonRpcRequestForExperimentalViewAccessKey.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('jsonrpc', $data)) throw new \InvalidArgumentException('Missing required field: jsonrpc');
        if (!array_key_exists('id', $data)) throw new \InvalidArgumentException('Missing required field: id');
        if (!array_key_exists('params', $data)) throw new \InvalidArgumentException('Missing required field: params');
        if (!array_key_exists('method', $data)) throw new \InvalidArgumentException('Missing required field: method');
        $extra = array_diff_key($data, array (
  'id' => true,
  'jsonrpc' => true,
  'method' => true,
  'params' => true,
));
        return new self(
            id: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['id'], array (
  'type' => 'string',
), 'id'),
            jsonrpc: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['jsonrpc'], array (
  'type' => 'string',
), 'jsonrpc'),
            method: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['method'], array (
  'enum' => 
  array (
    0 => 'EXPERIMENTAL_view_access_key',
  ),
  'type' => 'string',
), 'method'),
            params: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['params'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyRequest',
  'nullable' => false,
), 'params'),
            _extra: $extra
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = $this->extra;
        $data['id'] = $this->id;
        $data['jsonrpc'] = $this->jsonrpc;
        $data['method'] = $this->method;
        $data['params'] = $this->params;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
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
    'method' => 
    array (
      'enum' => 
      array (
        0 => 'EXPERIMENTAL_view_access_key',
      ),
      'type' => 'string',
    ),
    'params' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyRequest',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'jsonrpc',
    1 => 'id',
    2 => 'params',
    3 => 'method',
  ),
  'title' => 'JsonRpcRequest_for_EXPERIMENTAL_view_access_key',
  'type' => 'object',
), 'JsonRpcRequest_for_EXPERIMENTAL_view_access_key'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
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
    'method' => 
    array (
      'enum' => 
      array (
        0 => 'EXPERIMENTAL_view_access_key',
      ),
      'type' => 'string',
    ),
    'params' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyRequest',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'jsonrpc',
    1 => 'id',
    2 => 'params',
    3 => 'method',
  ),
  'title' => 'JsonRpcRequest_for_EXPERIMENTAL_view_access_key',
  'type' => 'object',
), 'JsonRpcRequest_for_EXPERIMENTAL_view_access_key');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
