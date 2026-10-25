<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class RpcNetworkInfoResponse implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var list<\Near\JsonRpc\Generated\Models\RpcPeerInfo>
         */
        public array $activePeers,
        /**
         * Accounts of known block and chunk producers from routing table.
         *
         * @var list<\Near\JsonRpc\Generated\Models\RpcKnownProducer>
         */
        public array $knownProducers,
        /**
         * @var int|string
         */
        public int|string $numActivePeers,
        /**
         * @var int
         */
        public int $peerMaxCount,
        /**
         * @var int|string
         */
        public int|string $receivedBytesPerSec,
        /**
         * @var int|string
         */
        public int|string $sentBytesPerSec,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->activePeers, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcPeerInfo',
    'nullable' => false,
  ),
  'type' => 'array',
), 'active_peers');
        \Near\JsonRpc\Models\TypeGuard::assert($this->knownProducers, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcKnownProducer',
    'nullable' => false,
  ),
  'type' => 'array',
), 'known_producers');
        \Near\JsonRpc\Models\TypeGuard::assert($this->numActivePeers, array (
  'format' => 'uint',
  'minimum' => 0,
  'type' => 'integer',
), 'num_active_peers');
        \Near\JsonRpc\Models\TypeGuard::assert($this->peerMaxCount, array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'peer_max_count');
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
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcNetworkInfoResponse.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('active_peers', $data)) throw new \InvalidArgumentException('Missing required field: active_peers');
        if (!array_key_exists('num_active_peers', $data)) throw new \InvalidArgumentException('Missing required field: num_active_peers');
        if (!array_key_exists('peer_max_count', $data)) throw new \InvalidArgumentException('Missing required field: peer_max_count');
        if (!array_key_exists('sent_bytes_per_sec', $data)) throw new \InvalidArgumentException('Missing required field: sent_bytes_per_sec');
        if (!array_key_exists('received_bytes_per_sec', $data)) throw new \InvalidArgumentException('Missing required field: received_bytes_per_sec');
        if (!array_key_exists('known_producers', $data)) throw new \InvalidArgumentException('Missing required field: known_producers');
        $extra = array_diff_key($data, array (
  'active_peers' => true,
  'known_producers' => true,
  'num_active_peers' => true,
  'peer_max_count' => true,
  'received_bytes_per_sec' => true,
  'sent_bytes_per_sec' => true,
));
        return new self(
            activePeers: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['active_peers'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcPeerInfo',
    'nullable' => false,
  ),
  'type' => 'array',
), 'active_peers'),
            knownProducers: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['known_producers'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcKnownProducer',
    'nullable' => false,
  ),
  'type' => 'array',
), 'known_producers'),
            numActivePeers: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['num_active_peers'], array (
  'format' => 'uint',
  'minimum' => 0,
  'type' => 'integer',
), 'num_active_peers'),
            peerMaxCount: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['peer_max_count'], array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'peer_max_count'),
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
        $data['active_peers'] = $this->activePeers;
        $data['known_producers'] = $this->knownProducers;
        $data['num_active_peers'] = $this->numActivePeers;
        $data['peer_max_count'] = $this->peerMaxCount;
        $data['received_bytes_per_sec'] = $this->receivedBytesPerSec;
        $data['sent_bytes_per_sec'] = $this->sentBytesPerSec;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'active_peers' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcPeerInfo',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'known_producers' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcKnownProducer',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'num_active_peers' => 
    array (
      'format' => 'uint',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'peer_max_count' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'type' => 'integer',
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
  ),
  'required' => 
  array (
    0 => 'active_peers',
    1 => 'num_active_peers',
    2 => 'peer_max_count',
    3 => 'sent_bytes_per_sec',
    4 => 'received_bytes_per_sec',
    5 => 'known_producers',
  ),
  'type' => 'object',
), 'RpcNetworkInfoResponse'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'active_peers' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcPeerInfo',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'known_producers' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcKnownProducer',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'num_active_peers' => 
    array (
      'format' => 'uint',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'peer_max_count' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'type' => 'integer',
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
  ),
  'required' => 
  array (
    0 => 'active_peers',
    1 => 'num_active_peers',
    2 => 'peer_max_count',
    3 => 'sent_bytes_per_sec',
    4 => 'received_bytes_per_sec',
    5 => 'known_producers',
  ),
  'type' => 'object',
), 'RpcNetworkInfoResponse');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
