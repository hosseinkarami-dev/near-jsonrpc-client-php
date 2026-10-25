<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * This action allows to execute the inner actions behalf of the defined sender.
 */
final readonly class DelegateAction implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * List of actions to be executed.
         *
         * With the meta transactions MVP defined in NEP-366, nested
         * DelegateActions are not allowed. A separate type is used to enforce it.
         *
         * @var list<\Near\JsonRpc\Generated\Models\NonDelegateAction>
         */
        public array $actions,
        /**
         * The maximal height of the block in the blockchain below which the given DelegateAction is valid.
         *
         * @var int|string
         */
        public int|string $maxBlockHeight,
        /**
         * Nonce to ensure that the same delegate action is not sent twice by a
         * relayer and should match for given account's `public_key`.
         * After this action is processed it will increment.
         *
         * @var int|string
         */
        public int|string $nonce,
        /**
         * Public key used to sign this delegated action.
         *
         * @var \Near\JsonRpc\Generated\Models\PublicKey
         */
        public \Near\JsonRpc\Generated\Models\PublicKey $publicKey,
        /**
         * Receiver of the delegated actions.
         *
         * @var \Near\JsonRpc\Generated\Models\AccountId
         */
        public \Near\JsonRpc\Generated\Models\AccountId $receiverId,
        /**
         * Signer of the delegated actions
         *
         * @var \Near\JsonRpc\Generated\Models\AccountId
         */
        public \Near\JsonRpc\Generated\Models\AccountId $senderId,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->actions, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NonDelegateAction',
    'nullable' => false,
  ),
  'type' => 'array',
), 'actions');
        \Near\JsonRpc\Models\TypeGuard::assert($this->maxBlockHeight, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_block_height');
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
        \Near\JsonRpc\Models\TypeGuard::assert($this->senderId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'sender_id');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for DelegateAction.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('sender_id', $data)) throw new \InvalidArgumentException('Missing required field: sender_id');
        if (!array_key_exists('receiver_id', $data)) throw new \InvalidArgumentException('Missing required field: receiver_id');
        if (!array_key_exists('actions', $data)) throw new \InvalidArgumentException('Missing required field: actions');
        if (!array_key_exists('nonce', $data)) throw new \InvalidArgumentException('Missing required field: nonce');
        if (!array_key_exists('max_block_height', $data)) throw new \InvalidArgumentException('Missing required field: max_block_height');
        if (!array_key_exists('public_key', $data)) throw new \InvalidArgumentException('Missing required field: public_key');
        $extra = array_diff_key($data, array (
  'actions' => true,
  'max_block_height' => true,
  'nonce' => true,
  'public_key' => true,
  'receiver_id' => true,
  'sender_id' => true,
));
        return new self(
            actions: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['actions'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NonDelegateAction',
    'nullable' => false,
  ),
  'type' => 'array',
), 'actions'),
            maxBlockHeight: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_block_height'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_block_height'),
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
            senderId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['sender_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'sender_id'),
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
        $data['max_block_height'] = $this->maxBlockHeight;
        $data['nonce'] = $this->nonce;
        $data['public_key'] = $this->publicKey;
        $data['receiver_id'] = $this->receiverId;
        $data['sender_id'] = $this->senderId;
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
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NonDelegateAction',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'max_block_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'nonce' => 
    array (
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
    'sender_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'sender_id',
    1 => 'receiver_id',
    2 => 'actions',
    3 => 'nonce',
    4 => 'max_block_height',
    5 => 'public_key',
  ),
  'type' => 'object',
), 'DelegateAction'));
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
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NonDelegateAction',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'max_block_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'nonce' => 
    array (
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
    'sender_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'sender_id',
    1 => 'receiver_id',
    2 => 'actions',
    3 => 'nonce',
    4 => 'max_block_height',
    5 => 'public_key',
  ),
  'type' => 'object',
), 'DelegateAction');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
