<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class AccessKeyPermissionViewGasKeyFunctionCallPayload implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\NearToken
         */
        public \Near\JsonRpc\Generated\Models\NearToken $balance,
        /**
         * @var list<string>
         */
        public array $methodNames,
        /**
         * @var int
         */
        public int $numNonces,
        /**
         * @var string
         */
        public string $receiverId,
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\NearToken|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $allowance = new \Near\JsonRpc\Models\OptionalValue(),
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->balance, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'balance');
        \Near\JsonRpc\Models\TypeGuard::assert($this->methodNames, array (
  'items' => 
  array (
    'type' => 'string',
  ),
  'type' => 'array',
), 'method_names');
        \Near\JsonRpc\Models\TypeGuard::assert($this->numNonces, array (
  'format' => 'uint16',
  'maximum' => 65535,
  'minimum' => 0,
  'type' => 'integer',
), 'num_nonces');
        \Near\JsonRpc\Models\TypeGuard::assert($this->receiverId, array (
  'type' => 'string',
), 'receiver_id');
        if ($this->allowance->present) \Near\JsonRpc\Models\TypeGuard::assert($this->allowance->value, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    1 => 
    array (
      'enum' => 
      array (
        0 => NULL,
      ),
      'nullable' => true,
      'type' => 'null',
    ),
  ),
), 'allowance');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for AccessKeyPermissionViewGasKeyFunctionCallPayload.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('balance', $data)) throw new \InvalidArgumentException('Missing required field: balance');
        if (!array_key_exists('num_nonces', $data)) throw new \InvalidArgumentException('Missing required field: num_nonces');
        if (!array_key_exists('receiver_id', $data)) throw new \InvalidArgumentException('Missing required field: receiver_id');
        if (!array_key_exists('method_names', $data)) throw new \InvalidArgumentException('Missing required field: method_names');
        $extra = array_diff_key($data, array (
  'allowance' => true,
  'balance' => true,
  'method_names' => true,
  'num_nonces' => true,
  'receiver_id' => true,
));
        return new self(
            balance: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['balance'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'balance'),
            methodNames: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['method_names'], array (
  'items' => 
  array (
    'type' => 'string',
  ),
  'type' => 'array',
), 'method_names'),
            numNonces: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['num_nonces'], array (
  'format' => 'uint16',
  'maximum' => 65535,
  'minimum' => 0,
  'type' => 'integer',
), 'num_nonces'),
            receiverId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['receiver_id'], array (
  'type' => 'string',
), 'receiver_id'),
            allowance: array_key_exists('allowance', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['allowance'], array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    1 => 
    array (
      'enum' => 
      array (
        0 => NULL,
      ),
      'nullable' => true,
      'type' => 'null',
    ),
  ),
), 'allowance')) : new \Near\JsonRpc\Models\OptionalValue(),
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
        $data['balance'] = $this->balance;
        $data['method_names'] = $this->methodNames;
        $data['num_nonces'] = $this->numNonces;
        $data['receiver_id'] = $this->receiverId;
        if ($this->allowance->present) $data['allowance'] = $this->allowance->value;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'allowance' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
          'nullable' => false,
        ),
        1 => 
        array (
          'enum' => 
          array (
            0 => NULL,
          ),
          'nullable' => true,
          'type' => 'null',
        ),
      ),
    ),
    'balance' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'method_names' => 
    array (
      'items' => 
      array (
        'type' => 'string',
      ),
      'type' => 'array',
    ),
    'num_nonces' => 
    array (
      'format' => 'uint16',
      'maximum' => 65535,
      'minimum' => 0,
      'type' => 'integer',
    ),
    'receiver_id' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'balance',
    1 => 'num_nonces',
    2 => 'receiver_id',
    3 => 'method_names',
  ),
  'type' => 'object',
), 'AccessKeyPermissionViewGasKeyFunctionCallPayload'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'allowance' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
          'nullable' => false,
        ),
        1 => 
        array (
          'enum' => 
          array (
            0 => NULL,
          ),
          'nullable' => true,
          'type' => 'null',
        ),
      ),
    ),
    'balance' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'method_names' => 
    array (
      'items' => 
      array (
        'type' => 'string',
      ),
      'type' => 'array',
    ),
    'num_nonces' => 
    array (
      'format' => 'uint16',
      'maximum' => 65535,
      'minimum' => 0,
      'type' => 'integer',
    ),
    'receiver_id' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'balance',
    1 => 'num_nonces',
    2 => 'receiver_id',
    3 => 'method_names',
  ),
  'type' => 'object',
), 'AccessKeyPermissionViewGasKeyFunctionCallPayload');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
