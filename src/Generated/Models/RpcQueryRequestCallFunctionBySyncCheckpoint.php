<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class RpcQueryRequestCallFunctionBySyncCheckpoint implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\SyncCheckpoint
         */
        public \Near\JsonRpc\Generated\Models\SyncCheckpoint $syncCheckpoint,
        /**
         * @var \Near\JsonRpc\Generated\Models\AccountId
         */
        public \Near\JsonRpc\Generated\Models\AccountId $accountId,
        /**
         * @var \Near\JsonRpc\Generated\Models\FunctionArgs
         */
        public \Near\JsonRpc\Generated\Models\FunctionArgs $argsBase64,
        /**
         * @var string
         */
        public string $methodName,
        /**
         * @var 'call_function'
         */
        public string $requestType,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->syncCheckpoint, array (
  'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\SyncCheckpoint',
  'nullable' => false,
), 'sync_checkpoint');
        \Near\JsonRpc\Models\TypeGuard::assert($this->accountId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'account_id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->argsBase64, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FunctionArgs',
  'nullable' => false,
), 'args_base64');
        \Near\JsonRpc\Models\TypeGuard::assert($this->methodName, array (
  'type' => 'string',
), 'method_name');
        \Near\JsonRpc\Models\TypeGuard::assert($this->requestType, array (
  'enum' => 
  array (
    0 => 'call_function',
  ),
  'type' => 'string',
), 'request_type');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcQueryRequestCallFunctionBySyncCheckpoint.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('sync_checkpoint', $data)) throw new \InvalidArgumentException('Missing required field: sync_checkpoint');
        if (!array_key_exists('request_type', $data)) throw new \InvalidArgumentException('Missing required field: request_type');
        if (!array_key_exists('account_id', $data)) throw new \InvalidArgumentException('Missing required field: account_id');
        if (!array_key_exists('method_name', $data)) throw new \InvalidArgumentException('Missing required field: method_name');
        if (!array_key_exists('args_base64', $data)) throw new \InvalidArgumentException('Missing required field: args_base64');
        $extra = array_diff_key($data, array (
  'sync_checkpoint' => true,
  'account_id' => true,
  'args_base64' => true,
  'method_name' => true,
  'request_type' => true,
));
        return new self(
            syncCheckpoint: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['sync_checkpoint'], array (
  'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\SyncCheckpoint',
  'nullable' => false,
), 'sync_checkpoint'),
            accountId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['account_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'account_id'),
            argsBase64: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['args_base64'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FunctionArgs',
  'nullable' => false,
), 'args_base64'),
            methodName: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['method_name'], array (
  'type' => 'string',
), 'method_name'),
            requestType: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['request_type'], array (
  'enum' => 
  array (
    0 => 'call_function',
  ),
  'type' => 'string',
), 'request_type'),
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
        $data['sync_checkpoint'] = $this->syncCheckpoint;
        $data['account_id'] = $this->accountId;
        $data['args_base64'] = $this->argsBase64;
        $data['method_name'] = $this->methodName;
        $data['request_type'] = $this->requestType;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'sync_checkpoint' => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\SyncCheckpoint',
      'nullable' => false,
    ),
    'account_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
    'args_base64' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FunctionArgs',
      'nullable' => false,
    ),
    'method_name' => 
    array (
      'type' => 'string',
    ),
    'request_type' => 
    array (
      'enum' => 
      array (
        0 => 'call_function',
      ),
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'sync_checkpoint',
    1 => 'request_type',
    2 => 'account_id',
    3 => 'method_name',
    4 => 'args_base64',
  ),
  'title' => 'call_function_by_sync_checkpoint',
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'call_function_by_sync_checkpoint',
  ),
), 'RpcQueryRequestCallFunctionBySyncCheckpoint'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'sync_checkpoint' => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\SyncCheckpoint',
      'nullable' => false,
    ),
    'account_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
    'args_base64' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FunctionArgs',
      'nullable' => false,
    ),
    'method_name' => 
    array (
      'type' => 'string',
    ),
    'request_type' => 
    array (
      'enum' => 
      array (
        0 => 'call_function',
      ),
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'sync_checkpoint',
    1 => 'request_type',
    2 => 'account_id',
    3 => 'method_name',
    4 => 'args_base64',
  ),
  'title' => 'call_function_by_sync_checkpoint',
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'call_function_by_sync_checkpoint',
  ),
), 'RpcQueryRequestCallFunctionBySyncCheckpoint');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
