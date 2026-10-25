<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class JsonRpcResponseForArrayOfRangeOfUint64AndRpcMaintenanceWindowsErrorError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ErrorWrapperForRpcMaintenanceWindowsError
         */
        public \Near\JsonRpc\Generated\Models\ErrorWrapperForRpcMaintenanceWindowsError $error,
        /**
         * @var string
         */
        public string $id,
        /**
         * @var string
         */
        public string $jsonrpc
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->error, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ErrorWrapperForRpcMaintenanceWindowsError',
  'nullable' => false,
), 'error');
        \Near\JsonRpc\Models\TypeGuard::assert($this->id, array (
  'type' => 'string',
), 'id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->jsonrpc, array (
  'type' => 'string',
), 'jsonrpc');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for JsonRpcResponseForArrayOfRangeOfUint64AndRpcMaintenanceWindowsErrorError.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('error', $data)) throw new \InvalidArgumentException('Missing required field: error');
        if (!array_key_exists('jsonrpc', $data)) throw new \InvalidArgumentException('Missing required field: jsonrpc');
        if (!array_key_exists('id', $data)) throw new \InvalidArgumentException('Missing required field: id');
        $unknown = array_diff_key($data, array (
  'error' => true,
  'id' => true,
  'jsonrpc' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in JsonRpcResponseForArrayOfRangeOfUint64AndRpcMaintenanceWindowsErrorError.');
        return new self(
            error: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['error'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ErrorWrapperForRpcMaintenanceWindowsError',
  'nullable' => false,
), 'error'),
            id: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['id'], array (
  'type' => 'string',
), 'id'),
            jsonrpc: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['jsonrpc'], array (
  'type' => 'string',
), 'jsonrpc')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['error'] = $this->error;
        $data['id'] = $this->id;
        $data['jsonrpc'] = $this->jsonrpc;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'error' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ErrorWrapperForRpcMaintenanceWindowsError',
      'nullable' => false,
    ),
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
    0 => 'error',
    1 => 'jsonrpc',
    2 => 'id',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'error',
    'tag' => 'error',
    'payload' => 'ErrorWrapper_for_RpcMaintenanceWindowsError',
  ),
), 'JsonRpcResponseForArrayOfRangeOfUint64AndRpcMaintenanceWindowsErrorError'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'error' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ErrorWrapperForRpcMaintenanceWindowsError',
      'nullable' => false,
    ),
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
    0 => 'error',
    1 => 'jsonrpc',
    2 => 'id',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'error',
    'tag' => 'error',
    'payload' => 'ErrorWrapper_for_RpcMaintenanceWindowsError',
  ),
), 'JsonRpcResponseForArrayOfRangeOfUint64AndRpcMaintenanceWindowsErrorError');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
