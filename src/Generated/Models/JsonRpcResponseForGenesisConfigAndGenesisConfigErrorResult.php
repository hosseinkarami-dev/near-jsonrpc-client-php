<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class JsonRpcResponseForGenesisConfigAndGenesisConfigErrorResult implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\GenesisConfig
         */
        public \Near\JsonRpc\Generated\Models\GenesisConfig $result,
        /**
         * @var string
         */
        public string $id,
        /**
         * @var string
         */
        public string $jsonrpc
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->result, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GenesisConfig',
  'nullable' => false,
), 'result');
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
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for JsonRpcResponseForGenesisConfigAndGenesisConfigErrorResult.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('result', $data)) throw new \InvalidArgumentException('Missing required field: result');
        if (!array_key_exists('jsonrpc', $data)) throw new \InvalidArgumentException('Missing required field: jsonrpc');
        if (!array_key_exists('id', $data)) throw new \InvalidArgumentException('Missing required field: id');
        $unknown = array_diff_key($data, array (
  'result' => true,
  'id' => true,
  'jsonrpc' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in JsonRpcResponseForGenesisConfigAndGenesisConfigErrorResult.');
        return new self(
            result: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['result'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GenesisConfig',
  'nullable' => false,
), 'result'),
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
        $data['result'] = $this->result;
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
    'result' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GenesisConfig',
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
    0 => 'result',
    1 => 'jsonrpc',
    2 => 'id',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'result',
    'tag' => 'result',
    'payload' => 'GenesisConfig',
  ),
), 'JsonRpcResponseForGenesisConfigAndGenesisConfigErrorResult'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'result' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GenesisConfig',
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
    0 => 'result',
    1 => 'jsonrpc',
    2 => 'id',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'result',
    'tag' => 'result',
    'payload' => 'GenesisConfig',
  ),
), 'JsonRpcResponseForGenesisConfigAndGenesisConfigErrorResult');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
