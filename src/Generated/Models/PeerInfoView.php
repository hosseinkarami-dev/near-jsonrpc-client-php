<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class PeerInfoView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var string
         */
        public string $addr,
        /**
         * @var bool
         */
        public bool $archival,
        /**
         * @var int|string
         */
        public int|string $connectionEstablishedTimeMillis,
        /**
         * @var bool
         */
        public bool $isHighestBlockInvalid,
        /**
         * @var bool
         */
        public bool $isOutboundPeer,
        /**
         * @var int|string
         */
        public int|string $lastTimePeerRequestedMillis,
        /**
         * @var int|string
         */
        public int|string $lastTimeReceivedMessageMillis,
        /**
         * Connection nonce.
         *
         * @var int|string
         */
        public int|string $nonce,
        /**
         * @var \Near\JsonRpc\Generated\Models\PublicKey
         */
        public \Near\JsonRpc\Generated\Models\PublicKey $peerId,
        /**
         * @var int|string
         */
        public int|string $receivedBytesPerSec,
        /**
         * @var int|string
         */
        public int|string $sentBytesPerSec,
        /**
         * @var list<\Near\JsonRpc\Generated\Models\ShardId>
         */
        public array $trackedShards,
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\AccountId|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $accountId = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\CryptoHash|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $blockHash = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<int|string|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $height = new \Near\JsonRpc\Models\OptionalValue(),
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->addr, array (
  'type' => 'string',
), 'addr');
        \Near\JsonRpc\Models\TypeGuard::assert($this->archival, array (
  'type' => 'boolean',
), 'archival');
        \Near\JsonRpc\Models\TypeGuard::assert($this->connectionEstablishedTimeMillis, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'connection_established_time_millis');
        \Near\JsonRpc\Models\TypeGuard::assert($this->isHighestBlockInvalid, array (
  'type' => 'boolean',
), 'is_highest_block_invalid');
        \Near\JsonRpc\Models\TypeGuard::assert($this->isOutboundPeer, array (
  'type' => 'boolean',
), 'is_outbound_peer');
        \Near\JsonRpc\Models\TypeGuard::assert($this->lastTimePeerRequestedMillis, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'last_time_peer_requested_millis');
        \Near\JsonRpc\Models\TypeGuard::assert($this->lastTimeReceivedMessageMillis, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'last_time_received_message_millis');
        \Near\JsonRpc\Models\TypeGuard::assert($this->nonce, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'nonce');
        \Near\JsonRpc\Models\TypeGuard::assert($this->peerId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
  'nullable' => false,
), 'peer_id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->receivedBytesPerSec, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'received_bytes_per_sec');
        \Near\JsonRpc\Models\TypeGuard::assert($this->sentBytesPerSec, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'sent_bytes_per_sec');
        \Near\JsonRpc\Models\TypeGuard::assert($this->trackedShards, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
    'nullable' => false,
  ),
  'type' => 'array',
), 'tracked_shards');
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
        if ($this->blockHash->present) \Near\JsonRpc\Models\TypeGuard::assert($this->blockHash->value, array (
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
), 'block_hash');
        if ($this->height->present) \Near\JsonRpc\Models\TypeGuard::assert($this->height->value, array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'height');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for PeerInfoView.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('addr', $data)) throw new \InvalidArgumentException('Missing required field: addr');
        if (!array_key_exists('is_highest_block_invalid', $data)) throw new \InvalidArgumentException('Missing required field: is_highest_block_invalid');
        if (!array_key_exists('tracked_shards', $data)) throw new \InvalidArgumentException('Missing required field: tracked_shards');
        if (!array_key_exists('archival', $data)) throw new \InvalidArgumentException('Missing required field: archival');
        if (!array_key_exists('peer_id', $data)) throw new \InvalidArgumentException('Missing required field: peer_id');
        if (!array_key_exists('received_bytes_per_sec', $data)) throw new \InvalidArgumentException('Missing required field: received_bytes_per_sec');
        if (!array_key_exists('sent_bytes_per_sec', $data)) throw new \InvalidArgumentException('Missing required field: sent_bytes_per_sec');
        if (!array_key_exists('last_time_peer_requested_millis', $data)) throw new \InvalidArgumentException('Missing required field: last_time_peer_requested_millis');
        if (!array_key_exists('last_time_received_message_millis', $data)) throw new \InvalidArgumentException('Missing required field: last_time_received_message_millis');
        if (!array_key_exists('connection_established_time_millis', $data)) throw new \InvalidArgumentException('Missing required field: connection_established_time_millis');
        if (!array_key_exists('is_outbound_peer', $data)) throw new \InvalidArgumentException('Missing required field: is_outbound_peer');
        if (!array_key_exists('nonce', $data)) throw new \InvalidArgumentException('Missing required field: nonce');
        $extra = array_diff_key($data, array (
  'account_id' => true,
  'addr' => true,
  'archival' => true,
  'block_hash' => true,
  'connection_established_time_millis' => true,
  'height' => true,
  'is_highest_block_invalid' => true,
  'is_outbound_peer' => true,
  'last_time_peer_requested_millis' => true,
  'last_time_received_message_millis' => true,
  'nonce' => true,
  'peer_id' => true,
  'received_bytes_per_sec' => true,
  'sent_bytes_per_sec' => true,
  'tracked_shards' => true,
));
        return new self(
            addr: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['addr'], array (
  'type' => 'string',
), 'addr'),
            archival: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['archival'], array (
  'type' => 'boolean',
), 'archival'),
            connectionEstablishedTimeMillis: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['connection_established_time_millis'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'connection_established_time_millis'),
            isHighestBlockInvalid: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['is_highest_block_invalid'], array (
  'type' => 'boolean',
), 'is_highest_block_invalid'),
            isOutboundPeer: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['is_outbound_peer'], array (
  'type' => 'boolean',
), 'is_outbound_peer'),
            lastTimePeerRequestedMillis: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['last_time_peer_requested_millis'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'last_time_peer_requested_millis'),
            lastTimeReceivedMessageMillis: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['last_time_received_message_millis'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'last_time_received_message_millis'),
            nonce: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['nonce'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'nonce'),
            peerId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['peer_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
  'nullable' => false,
), 'peer_id'),
            receivedBytesPerSec: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['received_bytes_per_sec'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'received_bytes_per_sec'),
            sentBytesPerSec: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['sent_bytes_per_sec'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'sent_bytes_per_sec'),
            trackedShards: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['tracked_shards'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
    'nullable' => false,
  ),
  'type' => 'array',
), 'tracked_shards'),
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
            blockHash: array_key_exists('block_hash', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['block_hash'], array (
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
), 'block_hash')) : new \Near\JsonRpc\Models\OptionalValue(),
            height: array_key_exists('height', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['height'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'height')) : new \Near\JsonRpc\Models\OptionalValue(),
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
        $data['addr'] = $this->addr;
        $data['archival'] = $this->archival;
        $data['connection_established_time_millis'] = $this->connectionEstablishedTimeMillis;
        $data['is_highest_block_invalid'] = $this->isHighestBlockInvalid;
        $data['is_outbound_peer'] = $this->isOutboundPeer;
        $data['last_time_peer_requested_millis'] = $this->lastTimePeerRequestedMillis;
        $data['last_time_received_message_millis'] = $this->lastTimeReceivedMessageMillis;
        $data['nonce'] = $this->nonce;
        $data['peer_id'] = $this->peerId;
        $data['received_bytes_per_sec'] = $this->receivedBytesPerSec;
        $data['sent_bytes_per_sec'] = $this->sentBytesPerSec;
        $data['tracked_shards'] = $this->trackedShards;
        if ($this->accountId->present) $data['account_id'] = $this->accountId->value;
        if ($this->blockHash->present) $data['block_hash'] = $this->blockHash->value;
        if ($this->height->present) $data['height'] = $this->height->value;
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
      'type' => 'string',
    ),
    'archival' => 
    array (
      'type' => 'boolean',
    ),
    'block_hash' => 
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
    'connection_established_time_millis' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'is_highest_block_invalid' => 
    array (
      'type' => 'boolean',
    ),
    'is_outbound_peer' => 
    array (
      'type' => 'boolean',
    ),
    'last_time_peer_requested_millis' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'last_time_received_message_millis' => 
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
    'peer_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
      'nullable' => false,
    ),
    'received_bytes_per_sec' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'sent_bytes_per_sec' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'tracked_shards' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
  ),
  'required' => 
  array (
    0 => 'addr',
    1 => 'is_highest_block_invalid',
    2 => 'tracked_shards',
    3 => 'archival',
    4 => 'peer_id',
    5 => 'received_bytes_per_sec',
    6 => 'sent_bytes_per_sec',
    7 => 'last_time_peer_requested_millis',
    8 => 'last_time_received_message_millis',
    9 => 'connection_established_time_millis',
    10 => 'is_outbound_peer',
    11 => 'nonce',
  ),
  'type' => 'object',
), 'PeerInfoView'));
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
      'type' => 'string',
    ),
    'archival' => 
    array (
      'type' => 'boolean',
    ),
    'block_hash' => 
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
    'connection_established_time_millis' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'is_highest_block_invalid' => 
    array (
      'type' => 'boolean',
    ),
    'is_outbound_peer' => 
    array (
      'type' => 'boolean',
    ),
    'last_time_peer_requested_millis' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'last_time_received_message_millis' => 
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
    'peer_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
      'nullable' => false,
    ),
    'received_bytes_per_sec' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'sent_bytes_per_sec' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'tracked_shards' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
  ),
  'required' => 
  array (
    0 => 'addr',
    1 => 'is_highest_block_invalid',
    2 => 'tracked_shards',
    3 => 'archival',
    4 => 'peer_id',
    5 => 'received_bytes_per_sec',
    6 => 'sent_bytes_per_sec',
    7 => 'last_time_peer_requested_millis',
    8 => 'last_time_received_message_millis',
    9 => 'connection_established_time_millis',
    10 => 'is_outbound_peer',
    11 => 'nonce',
  ),
  'type' => 'object',
), 'PeerInfoView');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
