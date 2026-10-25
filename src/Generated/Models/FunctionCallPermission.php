<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Grants limited permission to make transactions with FunctionCallActions
 * The permission can limit the allowed balance to be spent on the prepaid gas.
 * It also restrict the account ID of the receiver for this function call.
 * It also can restrict the method name for the allowed function calls.
 */
final readonly class FunctionCallPermission implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * A list of method names that can be used. The access key only allows transactions with the
         * function call of one of the given method names.
         * Empty list means any method name can be used.
         *
         * @var list<string>
         */
        public array $methodNames,
        /**
         * The access key only allows transactions with the given receiver's account id.
         *
         * @var string
         */
        public string $receiverId,
        /**
         * Allowance is a balance limit to use by this access key to pay for function call gas and
         * transaction fees. When this access key is used, both account balance and the allowance is
         * decreased by the same value.
         * `None` means unlimited allowance.
         * NOTE: To change or increase the allowance, the old access key needs to be deleted and a new
         * access key should be created.
         *
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\NearToken|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $allowance = new \Near\JsonRpc\Models\OptionalValue(),
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->methodNames, array (
  'items' => 
  array (
    'type' => 'string',
  ),
  'type' => 'array',
), 'method_names');
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
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for FunctionCallPermission.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('receiver_id', $data)) throw new \InvalidArgumentException('Missing required field: receiver_id');
        if (!array_key_exists('method_names', $data)) throw new \InvalidArgumentException('Missing required field: method_names');
        $extra = array_diff_key($data, array (
  'allowance' => true,
  'method_names' => true,
  'receiver_id' => true,
));
        return new self(
            methodNames: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['method_names'], array (
  'items' => 
  array (
    'type' => 'string',
  ),
  'type' => 'array',
), 'method_names'),
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
        $data['method_names'] = $this->methodNames;
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
    'method_names' => 
    array (
      'items' => 
      array (
        'type' => 'string',
      ),
      'type' => 'array',
    ),
    'receiver_id' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'receiver_id',
    1 => 'method_names',
  ),
  'type' => 'object',
), 'FunctionCallPermission'));
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
    'method_names' => 
    array (
      'items' => 
      array (
        'type' => 'string',
      ),
      'type' => 'array',
    ),
    'receiver_id' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'receiver_id',
    1 => 'method_names',
  ),
  'type' => 'object',
), 'FunctionCallPermission');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
