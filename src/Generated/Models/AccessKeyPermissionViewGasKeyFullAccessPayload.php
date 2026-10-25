<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class AccessKeyPermissionViewGasKeyFullAccessPayload implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\NearToken
         */
        public \Near\JsonRpc\Generated\Models\NearToken $balance,
        /**
         * @var int
         */
        public int $numNonces,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->balance, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'balance');
        \Near\JsonRpc\Models\TypeGuard::assert($this->numNonces, array (
  'format' => 'uint16',
  'maximum' => 65535,
  'minimum' => 0,
  'type' => 'integer',
), 'num_nonces');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for AccessKeyPermissionViewGasKeyFullAccessPayload.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('balance', $data)) throw new \InvalidArgumentException('Missing required field: balance');
        if (!array_key_exists('num_nonces', $data)) throw new \InvalidArgumentException('Missing required field: num_nonces');
        $extra = array_diff_key($data, array (
  'balance' => true,
  'num_nonces' => true,
));
        return new self(
            balance: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['balance'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'balance'),
            numNonces: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['num_nonces'], array (
  'format' => 'uint16',
  'maximum' => 65535,
  'minimum' => 0,
  'type' => 'integer',
), 'num_nonces'),
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
        $data['num_nonces'] = $this->numNonces;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'balance' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'num_nonces' => 
    array (
      'format' => 'uint16',
      'maximum' => 65535,
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'balance',
    1 => 'num_nonces',
  ),
  'type' => 'object',
), 'AccessKeyPermissionViewGasKeyFullAccessPayload'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'balance' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'num_nonces' => 
    array (
      'format' => 'uint16',
      'maximum' => 65535,
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'balance',
    1 => 'num_nonces',
  ),
  'type' => 'object',
), 'AccessKeyPermissionViewGasKeyFullAccessPayload');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
