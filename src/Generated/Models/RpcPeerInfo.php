<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class RpcPeerInfo implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\PeerId
         */
        public \Near\JsonRpc\Generated\Models\PeerId $id,
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\AccountId|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $accountId = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<string|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $addr = new \Near\JsonRpc\Models\OptionalValue(),
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->id, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PeerId',
  'nullable' => false,
), 'id');
        if ($this->accountId->present) \Near\JsonRpc\Models\TypeGuard::assert($this->accountId->value, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
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
), 'account_id');
        if ($this->addr->present) \Near\JsonRpc\Models\TypeGuard::assert($this->addr->value, array (
  'nullable' => true,
  'type' => 'string',
), 'addr');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcPeerInfo.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('id', $data)) throw new \InvalidArgumentException('Missing required field: id');
        $extra = array_diff_key($data, array (
  'account_id' => true,
  'addr' => true,
  'id' => true,
));
        return new self(
            id: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PeerId',
  'nullable' => false,
), 'id'),
            accountId: array_key_exists('account_id', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['account_id'], array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
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
), 'account_id')) : new \Near\JsonRpc\Models\OptionalValue(),
            addr: array_key_exists('addr', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['addr'], array (
  'nullable' => true,
  'type' => 'string',
), 'addr')) : new \Near\JsonRpc\Models\OptionalValue(),
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
        if ($this->accountId->present) $data['account_id'] = $this->accountId->value;
        if ($this->addr->present) $data['addr'] = $this->addr->value;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'account_id' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
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
    'addr' => 
    array (
      'nullable' => true,
      'type' => 'string',
    ),
    'id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PeerId',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'id',
  ),
  'type' => 'object',
), 'RpcPeerInfo'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'account_id' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
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
    'addr' => 
    array (
      'nullable' => true,
      'type' => 'string',
    ),
    'id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PeerId',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'id',
  ),
  'type' => 'object',
), 'RpcPeerInfo');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
