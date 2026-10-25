<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class NetworkInfoView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var list<\Near\JsonRpc\Generated\Models\PeerInfoView>
         */
        public array $connectedPeers,
        /**
         * @var list<\Near\JsonRpc\Generated\Models\KnownProducerView>
         */
        public array $knownProducers,
        /**
         * @var int|string
         */
        public int|string $numConnectedPeers,
        /**
         * @var int
         */
        public int $peerMaxCount,
        /**
         * @var list<\Near\JsonRpc\Generated\Models\AccountDataView>
         */
        public array $tier1AccountsData,
        /**
         * @var list<\Near\JsonRpc\Generated\Models\PublicKey>
         */
        public array $tier1AccountsKeys,
        /**
         * @var list<\Near\JsonRpc\Generated\Models\PeerInfoView>
         */
        public array $tier1Connections,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->connectedPeers, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PeerInfoView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'connected_peers');
        \Near\JsonRpc\Models\TypeGuard::assert($this->knownProducers, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\KnownProducerView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'known_producers');
        \Near\JsonRpc\Models\TypeGuard::assert($this->numConnectedPeers, array (
  'format' => 'uint',
  'minimum' => 0,
  'type' => 'integer',
), 'num_connected_peers');
        \Near\JsonRpc\Models\TypeGuard::assert($this->peerMaxCount, array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'peer_max_count');
        \Near\JsonRpc\Models\TypeGuard::assert($this->tier1AccountsData, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountDataView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'tier1_accounts_data');
        \Near\JsonRpc\Models\TypeGuard::assert($this->tier1AccountsKeys, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
    'nullable' => false,
  ),
  'type' => 'array',
), 'tier1_accounts_keys');
        \Near\JsonRpc\Models\TypeGuard::assert($this->tier1Connections, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PeerInfoView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'tier1_connections');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for NetworkInfoView.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('peer_max_count', $data)) throw new \InvalidArgumentException('Missing required field: peer_max_count');
        if (!array_key_exists('num_connected_peers', $data)) throw new \InvalidArgumentException('Missing required field: num_connected_peers');
        if (!array_key_exists('connected_peers', $data)) throw new \InvalidArgumentException('Missing required field: connected_peers');
        if (!array_key_exists('known_producers', $data)) throw new \InvalidArgumentException('Missing required field: known_producers');
        if (!array_key_exists('tier1_accounts_keys', $data)) throw new \InvalidArgumentException('Missing required field: tier1_accounts_keys');
        if (!array_key_exists('tier1_accounts_data', $data)) throw new \InvalidArgumentException('Missing required field: tier1_accounts_data');
        if (!array_key_exists('tier1_connections', $data)) throw new \InvalidArgumentException('Missing required field: tier1_connections');
        $extra = array_diff_key($data, array (
  'connected_peers' => true,
  'known_producers' => true,
  'num_connected_peers' => true,
  'peer_max_count' => true,
  'tier1_accounts_data' => true,
  'tier1_accounts_keys' => true,
  'tier1_connections' => true,
));
        return new self(
            connectedPeers: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['connected_peers'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PeerInfoView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'connected_peers'),
            knownProducers: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['known_producers'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\KnownProducerView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'known_producers'),
            numConnectedPeers: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['num_connected_peers'], array (
  'format' => 'uint',
  'minimum' => 0,
  'type' => 'integer',
), 'num_connected_peers'),
            peerMaxCount: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['peer_max_count'], array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'peer_max_count'),
            tier1AccountsData: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['tier1_accounts_data'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountDataView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'tier1_accounts_data'),
            tier1AccountsKeys: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['tier1_accounts_keys'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
    'nullable' => false,
  ),
  'type' => 'array',
), 'tier1_accounts_keys'),
            tier1Connections: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['tier1_connections'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PeerInfoView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'tier1_connections'),
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
        $data['connected_peers'] = $this->connectedPeers;
        $data['known_producers'] = $this->knownProducers;
        $data['num_connected_peers'] = $this->numConnectedPeers;
        $data['peer_max_count'] = $this->peerMaxCount;
        $data['tier1_accounts_data'] = $this->tier1AccountsData;
        $data['tier1_accounts_keys'] = $this->tier1AccountsKeys;
        $data['tier1_connections'] = $this->tier1Connections;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'connected_peers' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PeerInfoView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'known_producers' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\KnownProducerView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'num_connected_peers' => 
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
    'tier1_accounts_data' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountDataView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'tier1_accounts_keys' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'tier1_connections' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PeerInfoView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
  ),
  'required' => 
  array (
    0 => 'peer_max_count',
    1 => 'num_connected_peers',
    2 => 'connected_peers',
    3 => 'known_producers',
    4 => 'tier1_accounts_keys',
    5 => 'tier1_accounts_data',
    6 => 'tier1_connections',
  ),
  'type' => 'object',
), 'NetworkInfoView'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'connected_peers' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PeerInfoView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'known_producers' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\KnownProducerView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'num_connected_peers' => 
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
    'tier1_accounts_data' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountDataView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'tier1_accounts_keys' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'tier1_connections' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PeerInfoView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
  ),
  'required' => 
  array (
    0 => 'peer_max_count',
    1 => 'num_connected_peers',
    2 => 'connected_peers',
    3 => 'known_producers',
    4 => 'tier1_accounts_keys',
    5 => 'tier1_accounts_data',
    6 => 'tier1_connections',
  ),
  'type' => 'object',
), 'NetworkInfoView');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
