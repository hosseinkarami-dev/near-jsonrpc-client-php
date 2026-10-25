<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class RpcCallFunctionRequestBlockId implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\BlockId
         */
        public \Near\JsonRpc\Generated\Models\BlockId $blockId,
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
        public string $methodName
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->blockId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockId',
  'nullable' => false,
), 'block_id');
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
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcCallFunctionRequestBlockId.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('block_id', $data)) throw new \InvalidArgumentException('Missing required field: block_id');
        if (!array_key_exists('account_id', $data)) throw new \InvalidArgumentException('Missing required field: account_id');
        if (!array_key_exists('method_name', $data)) throw new \InvalidArgumentException('Missing required field: method_name');
        if (!array_key_exists('args_base64', $data)) throw new \InvalidArgumentException('Missing required field: args_base64');
        $unknown = array_diff_key($data, array (
  'block_id' => true,
  'account_id' => true,
  'args_base64' => true,
  'method_name' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in RpcCallFunctionRequestBlockId.');
        return new self(
            blockId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['block_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockId',
  'nullable' => false,
), 'block_id'),
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
), 'method_name')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['block_id'] = $this->blockId;
        $data['account_id'] = $this->accountId;
        $data['args_base64'] = $this->argsBase64;
        $data['method_name'] = $this->methodName;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'block_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockId',
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
  ),
  'required' => 
  array (
    0 => 'block_id',
    1 => 'account_id',
    2 => 'method_name',
    3 => 'args_base64',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'block_id',
    'tag' => 'block_id',
    'payload' => 'BlockId',
  ),
), 'RpcCallFunctionRequestBlockId'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'block_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockId',
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
  ),
  'required' => 
  array (
    0 => 'block_id',
    1 => 'account_id',
    2 => 'method_name',
    3 => 'args_base64',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'block_id',
    'tag' => 'block_id',
    'payload' => 'BlockId',
  ),
), 'RpcCallFunctionRequestBlockId');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
