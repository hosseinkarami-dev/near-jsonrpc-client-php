<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * A view of the account
 */
final readonly class AccountView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * Liquid (non-staked) account balance, in yoctoNEAR.
         *
         * @var \Near\JsonRpc\Generated\Models\NearToken
         */
        public \Near\JsonRpc\Generated\Models\NearToken $amount,
        /**
         * Hash of the deployed contract code; the all-`1`s hash when no contract is deployed.
         *
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $codeHash,
        /**
         * Staked balance locked for validation, in yoctoNEAR.
         *
         * @var \Near\JsonRpc\Generated\Models\NearToken
         */
        public \Near\JsonRpc\Generated\Models\NearToken $locked,
        /**
         * Total storage used by the account, in bytes.
         *
         * @var int|string
         */
        public int|string $storageUsage,
        /**
         * The nonce an uninitialized account's own transactions must use, present
         * only while it is uninitialized. A self-signed state init is the one
         * transaction such an account can send, and this is the only way for a
         * client to learn the nonce it must carry: there is no access key to query.
         *
         * @var \Near\JsonRpc\Models\OptionalValue<int|string|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $bootstrapNonce = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * Set when the account uses a global contract referenced by the deploying account id.
         *
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\AccountId|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $globalContractAccountId = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * Set when the account uses a global contract referenced by code hash.
         *
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\CryptoHash|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $globalContractHash = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * Whether the account is initialized. Only a universal account can be
         * uninitialized: it has no access keys, code or data until a
         * `UniversalStateInit` arrives. Omitted for initialized accounts.
         *
         * @var \Near\JsonRpc\Generated\Models\AccountState|null
         */
        public \Near\JsonRpc\Generated\Models\AccountState|null $state = null,
        /**
         * Deprecated and unused. TODO(2271): remove.
         *
         * @var int|string|null
         */
        public int|string|null $storagePaidAt = null,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->amount, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'amount');
        \Near\JsonRpc\Models\TypeGuard::assert($this->codeHash, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'code_hash');
        \Near\JsonRpc\Models\TypeGuard::assert($this->locked, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'locked');
        \Near\JsonRpc\Models\TypeGuard::assert($this->storageUsage, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'storage_usage');
        if ($this->bootstrapNonce->present) \Near\JsonRpc\Models\TypeGuard::assert($this->bootstrapNonce->value, array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'bootstrap_nonce');
        if ($this->globalContractAccountId->present) \Near\JsonRpc\Models\TypeGuard::assert($this->globalContractAccountId->value, array (
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
), 'global_contract_account_id');
        if ($this->globalContractHash->present) \Near\JsonRpc\Models\TypeGuard::assert($this->globalContractHash->value, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
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
), 'global_contract_hash');
        if ($this->state !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->state, array (
  'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\AccountState',
  'nullable' => false,
), 'state');
        if ($this->storagePaidAt !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->storagePaidAt, array (
  'default' => 0,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'storage_paid_at');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for AccountView.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('amount', $data)) throw new \InvalidArgumentException('Missing required field: amount');
        if (!array_key_exists('locked', $data)) throw new \InvalidArgumentException('Missing required field: locked');
        if (!array_key_exists('code_hash', $data)) throw new \InvalidArgumentException('Missing required field: code_hash');
        if (!array_key_exists('storage_usage', $data)) throw new \InvalidArgumentException('Missing required field: storage_usage');
        $extra = array_diff_key($data, array (
  'amount' => true,
  'bootstrap_nonce' => true,
  'code_hash' => true,
  'global_contract_account_id' => true,
  'global_contract_hash' => true,
  'locked' => true,
  'state' => true,
  'storage_paid_at' => true,
  'storage_usage' => true,
));
        return new self(
            amount: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['amount'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'amount'),
            codeHash: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['code_hash'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'code_hash'),
            locked: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['locked'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'locked'),
            storageUsage: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['storage_usage'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'storage_usage'),
            bootstrapNonce: array_key_exists('bootstrap_nonce', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['bootstrap_nonce'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'bootstrap_nonce')) : new \Near\JsonRpc\Models\OptionalValue(),
            globalContractAccountId: array_key_exists('global_contract_account_id', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['global_contract_account_id'], array (
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
), 'global_contract_account_id')) : new \Near\JsonRpc\Models\OptionalValue(),
            globalContractHash: array_key_exists('global_contract_hash', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['global_contract_hash'], array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
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
), 'global_contract_hash')) : new \Near\JsonRpc\Models\OptionalValue(),
            state: array_key_exists('state', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['state'], array (
  'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\AccountState',
  'nullable' => false,
), 'state') : null,
            storagePaidAt: array_key_exists('storage_paid_at', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['storage_paid_at'], array (
  'default' => 0,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'storage_paid_at') : null,
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
        $data['amount'] = $this->amount;
        $data['code_hash'] = $this->codeHash;
        $data['locked'] = $this->locked;
        $data['storage_usage'] = $this->storageUsage;
        if ($this->bootstrapNonce->present) $data['bootstrap_nonce'] = $this->bootstrapNonce->value;
        if ($this->globalContractAccountId->present) $data['global_contract_account_id'] = $this->globalContractAccountId->value;
        if ($this->globalContractHash->present) $data['global_contract_hash'] = $this->globalContractHash->value;
        if ($this->state !== null) $data['state'] = $this->state;
        if ($this->storagePaidAt !== null) $data['storage_paid_at'] = $this->storagePaidAt;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'amount' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'bootstrap_nonce' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'code_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'global_contract_account_id' => 
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
    'global_contract_hash' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
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
    'locked' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'state' => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\AccountState',
      'nullable' => false,
    ),
    'storage_paid_at' => 
    array (
      'default' => 0,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'storage_usage' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'amount',
    1 => 'locked',
    2 => 'code_hash',
    3 => 'storage_usage',
  ),
  'type' => 'object',
), 'AccountView'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'amount' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'bootstrap_nonce' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'code_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'global_contract_account_id' => 
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
    'global_contract_hash' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
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
    'locked' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'state' => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\AccountState',
      'nullable' => false,
    ),
    'storage_paid_at' => 
    array (
      'default' => 0,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'storage_usage' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'amount',
    1 => 'locked',
    2 => 'code_hash',
    3 => 'storage_usage',
  ),
  'type' => 'object',
), 'AccountView');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
