<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class SignedTransactionView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var list<\Near\JsonRpc\Generated\Models\ActionView>
         */
        public array $actions,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $hash,
        /**
         * @var int|string
         */
        public int|string $nonce,
        /**
         * @var \Near\JsonRpc\Generated\Models\PublicKey
         */
        public \Near\JsonRpc\Generated\Models\PublicKey $publicKey,
        /**
         * @var \Near\JsonRpc\Generated\Models\AccountId
         */
        public \Near\JsonRpc\Generated\Models\AccountId $receiverId,
        /**
         * @var \Near\JsonRpc\Generated\Models\Signature
         */
        public \Near\JsonRpc\Generated\Models\Signature $signature,
        /**
         * @var \Near\JsonRpc\Generated\Models\AccountId
         */
        public \Near\JsonRpc\Generated\Models\AccountId $signerId,
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<int|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $nonceIndex = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\NonceMode|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $nonceMode = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * Deprecated, retained for backward compatibility.
         *
         * @var int|string|null
         */
        public int|string|null $priorityFee = null,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->actions, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'actions');
        \Near\JsonRpc\Models\TypeGuard::assert($this->hash, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'hash');
        \Near\JsonRpc\Models\TypeGuard::assert($this->nonce, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'nonce');
        \Near\JsonRpc\Models\TypeGuard::assert($this->publicKey, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
  'nullable' => false,
), 'public_key');
        \Near\JsonRpc\Models\TypeGuard::assert($this->receiverId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'receiver_id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->signature, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Signature',
  'nullable' => false,
), 'signature');
        \Near\JsonRpc\Models\TypeGuard::assert($this->signerId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'signer_id');
        if ($this->nonceIndex->present) \Near\JsonRpc\Models\TypeGuard::assert($this->nonceIndex->value, array (
  'format' => 'uint16',
  'maximum' => 65535,
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'nonce_index');
        if ($this->nonceMode->present) \Near\JsonRpc\Models\TypeGuard::assert($this->nonceMode->value, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NonceMode',
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
), 'nonce_mode');
        if ($this->priorityFee !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->priorityFee, array (
  'default' => 0,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'priority_fee');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for SignedTransactionView.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('signer_id', $data)) throw new \InvalidArgumentException('Missing required field: signer_id');
        if (!array_key_exists('public_key', $data)) throw new \InvalidArgumentException('Missing required field: public_key');
        if (!array_key_exists('nonce', $data)) throw new \InvalidArgumentException('Missing required field: nonce');
        if (!array_key_exists('receiver_id', $data)) throw new \InvalidArgumentException('Missing required field: receiver_id');
        if (!array_key_exists('actions', $data)) throw new \InvalidArgumentException('Missing required field: actions');
        if (!array_key_exists('signature', $data)) throw new \InvalidArgumentException('Missing required field: signature');
        if (!array_key_exists('hash', $data)) throw new \InvalidArgumentException('Missing required field: hash');
        $extra = array_diff_key($data, array (
  'actions' => true,
  'hash' => true,
  'nonce' => true,
  'nonce_index' => true,
  'nonce_mode' => true,
  'priority_fee' => true,
  'public_key' => true,
  'receiver_id' => true,
  'signature' => true,
  'signer_id' => true,
));
        return new self(
            actions: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['actions'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'actions'),
            hash: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['hash'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'hash'),
            nonce: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['nonce'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'nonce'),
            publicKey: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['public_key'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
  'nullable' => false,
), 'public_key'),
            receiverId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['receiver_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'receiver_id'),
            signature: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['signature'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Signature',
  'nullable' => false,
), 'signature'),
            signerId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['signer_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'signer_id'),
            nonceIndex: array_key_exists('nonce_index', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['nonce_index'], array (
  'format' => 'uint16',
  'maximum' => 65535,
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'nonce_index')) : new \Near\JsonRpc\Models\OptionalValue(),
            nonceMode: array_key_exists('nonce_mode', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['nonce_mode'], array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NonceMode',
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
), 'nonce_mode')) : new \Near\JsonRpc\Models\OptionalValue(),
            priorityFee: array_key_exists('priority_fee', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['priority_fee'], array (
  'default' => 0,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'priority_fee') : null,
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
        $data['actions'] = $this->actions;
        $data['hash'] = $this->hash;
        $data['nonce'] = $this->nonce;
        $data['public_key'] = $this->publicKey;
        $data['receiver_id'] = $this->receiverId;
        $data['signature'] = $this->signature;
        $data['signer_id'] = $this->signerId;
        if ($this->nonceIndex->present) $data['nonce_index'] = $this->nonceIndex->value;
        if ($this->nonceMode->present) $data['nonce_mode'] = $this->nonceMode->value;
        if ($this->priorityFee !== null) $data['priority_fee'] = $this->priorityFee;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'actions' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'nonce' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'nonce_index' => 
    array (
      'format' => 'uint16',
      'maximum' => 65535,
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'nonce_mode' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NonceMode',
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
    'priority_fee' => 
    array (
      'default' => 0,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'public_key' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
      'nullable' => false,
    ),
    'receiver_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
    'signature' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Signature',
      'nullable' => false,
    ),
    'signer_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'signer_id',
    1 => 'public_key',
    2 => 'nonce',
    3 => 'receiver_id',
    4 => 'actions',
    5 => 'signature',
    6 => 'hash',
  ),
  'type' => 'object',
), 'SignedTransactionView'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'actions' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'nonce' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'nonce_index' => 
    array (
      'format' => 'uint16',
      'maximum' => 65535,
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'nonce_mode' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NonceMode',
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
    'priority_fee' => 
    array (
      'default' => 0,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'public_key' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
      'nullable' => false,
    ),
    'receiver_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
    'signature' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Signature',
      'nullable' => false,
    ),
    'signer_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'signer_id',
    1 => 'public_key',
    2 => 'nonce',
    3 => 'receiver_id',
    4 => 'actions',
    5 => 'signature',
    6 => 'hash',
  ),
  'type' => 'object',
), 'SignedTransactionView');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
