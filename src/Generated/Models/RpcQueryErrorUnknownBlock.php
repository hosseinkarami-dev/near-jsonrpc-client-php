<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class RpcQueryErrorUnknownBlock implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\RpcQueryErrorUnknownBlockInfo
         */
        public \Near\JsonRpc\Generated\Models\RpcQueryErrorUnknownBlockInfo $info,
        /**
         * @var 'UNKNOWN_BLOCK'
         */
        public string $name,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->info, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryErrorUnknownBlockInfo',
  'nullable' => false,
), 'info');
        \Near\JsonRpc\Models\TypeGuard::assert($this->name, array (
  'enum' => 
  array (
    0 => 'UNKNOWN_BLOCK',
  ),
  'type' => 'string',
), 'name');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcQueryErrorUnknownBlock.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('name', $data)) throw new \InvalidArgumentException('Missing required field: name');
        if (!array_key_exists('info', $data)) throw new \InvalidArgumentException('Missing required field: info');
        $extra = array_diff_key($data, array (
  'info' => true,
  'name' => true,
));
        return new self(
            info: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['info'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryErrorUnknownBlockInfo',
  'nullable' => false,
), 'info'),
            name: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['name'], array (
  'enum' => 
  array (
    0 => 'UNKNOWN_BLOCK',
  ),
  'type' => 'string',
), 'name'),
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
        $data['info'] = $this->info;
        $data['name'] = $this->name;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'info' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryErrorUnknownBlockInfo',
      'nullable' => false,
    ),
    'name' => 
    array (
      'enum' => 
      array (
        0 => 'UNKNOWN_BLOCK',
      ),
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'name',
    1 => 'info',
  ),
  'type' => 'object',
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'UNKNOWN_BLOCK',
  ),
), 'RpcQueryErrorUnknownBlock'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'info' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryErrorUnknownBlockInfo',
      'nullable' => false,
    ),
    'name' => 
    array (
      'enum' => 
      array (
        0 => 'UNKNOWN_BLOCK',
      ),
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'name',
    1 => 'info',
  ),
  'type' => 'object',
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'UNKNOWN_BLOCK',
  ),
), 'RpcQueryErrorUnknownBlock');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
