<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * `None` when the response comes from a node running an older version that omitted the
 * cause, so newer clients can still parse it.
 */
final readonly class RpcTransactionErrorTimeoutError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var 'TIMEOUT_ERROR'
         */
        public string $name,
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\TimeoutErrorCause|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $info = new \Near\JsonRpc\Models\OptionalValue(),
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->name, array (
  'enum' => 
  array (
    0 => 'TIMEOUT_ERROR',
  ),
  'type' => 'string',
), 'name');
        if ($this->info->present) \Near\JsonRpc\Models\TypeGuard::assert($this->info->value, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TimeoutErrorCause',
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
), 'info');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcTransactionErrorTimeoutError.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('name', $data)) throw new \InvalidArgumentException('Missing required field: name');
        $extra = array_diff_key($data, array (
  'info' => true,
  'name' => true,
));
        return new self(
            name: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['name'], array (
  'enum' => 
  array (
    0 => 'TIMEOUT_ERROR',
  ),
  'type' => 'string',
), 'name'),
            info: array_key_exists('info', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['info'], array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TimeoutErrorCause',
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
), 'info')) : new \Near\JsonRpc\Models\OptionalValue(),
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
        $data['name'] = $this->name;
        if ($this->info->present) $data['info'] = $this->info->value;
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
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TimeoutErrorCause',
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
    'name' => 
    array (
      'enum' => 
      array (
        0 => 'TIMEOUT_ERROR',
      ),
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'name',
  ),
  'type' => 'object',
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'TIMEOUT_ERROR',
  ),
), 'RpcTransactionErrorTimeoutError'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'info' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TimeoutErrorCause',
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
    'name' => 
    array (
      'enum' => 
      array (
        0 => 'TIMEOUT_ERROR',
      ),
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'name',
  ),
  'type' => 'object',
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'TIMEOUT_ERROR',
  ),
), 'RpcTransactionErrorTimeoutError');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
