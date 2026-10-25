<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class ActionErrorKindGasKeyBalanceTooHighPayload implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\AccountId
         */
        public \Near\JsonRpc\Generated\Models\AccountId $accountId,
        /**
         * @var \Near\JsonRpc\Generated\Models\NearToken
         */
        public \Near\JsonRpc\Generated\Models\NearToken $balance,
        /**
         * Set for DeleteKey (specific key), None for DeleteAccount (aggregate)
         *
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\PublicKey|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $publicKey = new \Near\JsonRpc\Models\OptionalValue(),
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->accountId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'account_id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->balance, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'balance');
        if ($this->publicKey->present) \Near\JsonRpc\Models\TypeGuard::assert($this->publicKey->value, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
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
), 'public_key');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionErrorKindGasKeyBalanceTooHighPayload.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('account_id', $data)) throw new \InvalidArgumentException('Missing required field: account_id');
        if (!array_key_exists('balance', $data)) throw new \InvalidArgumentException('Missing required field: balance');
        $extra = array_diff_key($data, array (
  'account_id' => true,
  'balance' => true,
  'public_key' => true,
));
        return new self(
            accountId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['account_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'account_id'),
            balance: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['balance'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'balance'),
            publicKey: array_key_exists('public_key', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['public_key'], array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
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
), 'public_key')) : new \Near\JsonRpc\Models\OptionalValue(),
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
        $data['account_id'] = $this->accountId;
        $data['balance'] = $this->balance;
        if ($this->publicKey->present) $data['public_key'] = $this->publicKey->value;
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
    'balance' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'public_key' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
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
  ),
  'required' => 
  array (
    0 => 'account_id',
    1 => 'balance',
  ),
  'type' => 'object',
), 'ActionErrorKindGasKeyBalanceTooHighPayload'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'account_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
    'balance' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'public_key' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
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
  ),
  'required' => 
  array (
    0 => 'account_id',
    1 => 'balance',
  ),
  'type' => 'object',
), 'ActionErrorKindGasKeyBalanceTooHighPayload');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
