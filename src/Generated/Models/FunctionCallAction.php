<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class FunctionCallAction implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var string
         */
        public string $args,
        /**
         * @var \Near\JsonRpc\Generated\Models\NearToken
         */
        public \Near\JsonRpc\Generated\Models\NearToken $deposit,
        /**
         * @var \Near\JsonRpc\Generated\Models\NearGas
         */
        public \Near\JsonRpc\Generated\Models\NearGas $gas,
        /**
         * @var string
         */
        public string $methodName,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->args, array (
  'type' => 'string',
), 'args');
        \Near\JsonRpc\Models\TypeGuard::assert($this->deposit, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'deposit');
        \Near\JsonRpc\Models\TypeGuard::assert($this->gas, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'gas');
        \Near\JsonRpc\Models\TypeGuard::assert($this->methodName, array (
  'type' => 'string',
), 'method_name');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for FunctionCallAction.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('method_name', $data)) throw new \InvalidArgumentException('Missing required field: method_name');
        if (!array_key_exists('args', $data)) throw new \InvalidArgumentException('Missing required field: args');
        if (!array_key_exists('gas', $data)) throw new \InvalidArgumentException('Missing required field: gas');
        if (!array_key_exists('deposit', $data)) throw new \InvalidArgumentException('Missing required field: deposit');
        $extra = array_diff_key($data, array (
  'args' => true,
  'deposit' => true,
  'gas' => true,
  'method_name' => true,
));
        return new self(
            args: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['args'], array (
  'type' => 'string',
), 'args'),
            deposit: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['deposit'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'deposit'),
            gas: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['gas'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'gas'),
            methodName: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['method_name'], array (
  'type' => 'string',
), 'method_name'),
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
        $data['args'] = $this->args;
        $data['deposit'] = $this->deposit;
        $data['gas'] = $this->gas;
        $data['method_name'] = $this->methodName;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'args' => 
    array (
      'type' => 'string',
    ),
    'deposit' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'gas' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'method_name' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'method_name',
    1 => 'args',
    2 => 'gas',
    3 => 'deposit',
  ),
  'type' => 'object',
), 'FunctionCallAction'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'args' => 
    array (
      'type' => 'string',
    ),
    'deposit' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'gas' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'method_name' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'method_name',
    1 => 'args',
    2 => 'gas',
    3 => 'deposit',
  ),
  'type' => 'object',
), 'FunctionCallAction');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
