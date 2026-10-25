<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class RpcStatusResponse implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * Unique chain id.
         *
         * @var string
         */
        public string $chainId,
        /**
         * Genesis hash of the chain.
         *
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $genesisHash,
        /**
         * Latest protocol version that this client supports.
         *
         * @var int
         */
        public int $latestProtocolVersion,
        /**
         * Public key of the node.
         *
         * @var \Near\JsonRpc\Generated\Models\PublicKey
         */
        public \Near\JsonRpc\Generated\Models\PublicKey $nodePublicKey,
        /**
         * Currently active protocol version.
         *
         * @var int
         */
        public int $protocolVersion,
        /**
         * Sync status of the node.
         *
         * @var \Near\JsonRpc\Generated\Models\StatusSyncInfo
         */
        public \Near\JsonRpc\Generated\Models\StatusSyncInfo $syncInfo,
        /**
         * Uptime of the node.
         *
         * @var int|string
         */
        public int|string $uptimeSec,
        /**
         * Current epoch validators.
         *
         * @var list<\Near\JsonRpc\Generated\Models\ValidatorInfo>
         */
        public array $validators,
        /**
         * Binary version.
         *
         * @var \Near\JsonRpc\Generated\Models\Version
         */
        public \Near\JsonRpc\Generated\Models\Version $version,
        /**
         * Information about last blocks, network, epoch and chain & chunk info.
         *
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\DetailedDebugStatus|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $detailedDebugStatus = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * Deprecated; same as `validator_public_key` which you should use instead.
         *
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\PublicKey|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $nodeKey = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * Address for RPC server.  None if node doesn't have RPC endpoint enabled.
         *
         * @var \Near\JsonRpc\Models\OptionalValue<string|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $rpcAddr = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * Validator id of the node
         *
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\AccountId|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $validatorAccountId = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * Public key of the validator.
         *
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\PublicKey|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $validatorPublicKey = new \Near\JsonRpc\Models\OptionalValue(),
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->chainId, array (
  'type' => 'string',
), 'chain_id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->genesisHash, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'genesis_hash');
        \Near\JsonRpc\Models\TypeGuard::assert($this->latestProtocolVersion, array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'latest_protocol_version');
        \Near\JsonRpc\Models\TypeGuard::assert($this->nodePublicKey, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
  'nullable' => false,
), 'node_public_key');
        \Near\JsonRpc\Models\TypeGuard::assert($this->protocolVersion, array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'protocol_version');
        \Near\JsonRpc\Models\TypeGuard::assert($this->syncInfo, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StatusSyncInfo',
  'nullable' => false,
), 'sync_info');
        \Near\JsonRpc\Models\TypeGuard::assert($this->uptimeSec, array (
  'format' => 'int64',
  'type' => 'integer',
), 'uptime_sec');
        \Near\JsonRpc\Models\TypeGuard::assert($this->validators, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorInfo',
    'nullable' => false,
  ),
  'type' => 'array',
), 'validators');
        \Near\JsonRpc\Models\TypeGuard::assert($this->version, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Version',
  'nullable' => false,
), 'version');
        if ($this->detailedDebugStatus->present) \Near\JsonRpc\Models\TypeGuard::assert($this->detailedDebugStatus->value, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DetailedDebugStatus',
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
), 'detailed_debug_status');
        if ($this->nodeKey->present) \Near\JsonRpc\Models\TypeGuard::assert($this->nodeKey->value, array (
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
), 'node_key');
        if ($this->rpcAddr->present) \Near\JsonRpc\Models\TypeGuard::assert($this->rpcAddr->value, array (
  'nullable' => true,
  'type' => 'string',
), 'rpc_addr');
        if ($this->validatorAccountId->present) \Near\JsonRpc\Models\TypeGuard::assert($this->validatorAccountId->value, array (
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
), 'validator_account_id');
        if ($this->validatorPublicKey->present) \Near\JsonRpc\Models\TypeGuard::assert($this->validatorPublicKey->value, array (
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
), 'validator_public_key');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcStatusResponse.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('version', $data)) throw new \InvalidArgumentException('Missing required field: version');
        if (!array_key_exists('chain_id', $data)) throw new \InvalidArgumentException('Missing required field: chain_id');
        if (!array_key_exists('protocol_version', $data)) throw new \InvalidArgumentException('Missing required field: protocol_version');
        if (!array_key_exists('latest_protocol_version', $data)) throw new \InvalidArgumentException('Missing required field: latest_protocol_version');
        if (!array_key_exists('validators', $data)) throw new \InvalidArgumentException('Missing required field: validators');
        if (!array_key_exists('sync_info', $data)) throw new \InvalidArgumentException('Missing required field: sync_info');
        if (!array_key_exists('node_public_key', $data)) throw new \InvalidArgumentException('Missing required field: node_public_key');
        if (!array_key_exists('uptime_sec', $data)) throw new \InvalidArgumentException('Missing required field: uptime_sec');
        if (!array_key_exists('genesis_hash', $data)) throw new \InvalidArgumentException('Missing required field: genesis_hash');
        $extra = array_diff_key($data, array (
  'chain_id' => true,
  'detailed_debug_status' => true,
  'genesis_hash' => true,
  'latest_protocol_version' => true,
  'node_key' => true,
  'node_public_key' => true,
  'protocol_version' => true,
  'rpc_addr' => true,
  'sync_info' => true,
  'uptime_sec' => true,
  'validator_account_id' => true,
  'validator_public_key' => true,
  'validators' => true,
  'version' => true,
));
        return new self(
            chainId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['chain_id'], array (
  'type' => 'string',
), 'chain_id'),
            genesisHash: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['genesis_hash'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'genesis_hash'),
            latestProtocolVersion: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['latest_protocol_version'], array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'latest_protocol_version'),
            nodePublicKey: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['node_public_key'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
  'nullable' => false,
), 'node_public_key'),
            protocolVersion: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['protocol_version'], array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'protocol_version'),
            syncInfo: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['sync_info'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StatusSyncInfo',
  'nullable' => false,
), 'sync_info'),
            uptimeSec: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['uptime_sec'], array (
  'format' => 'int64',
  'type' => 'integer',
), 'uptime_sec'),
            validators: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['validators'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorInfo',
    'nullable' => false,
  ),
  'type' => 'array',
), 'validators'),
            version: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['version'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Version',
  'nullable' => false,
), 'version'),
            detailedDebugStatus: array_key_exists('detailed_debug_status', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['detailed_debug_status'], array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DetailedDebugStatus',
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
), 'detailed_debug_status')) : new \Near\JsonRpc\Models\OptionalValue(),
            nodeKey: array_key_exists('node_key', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['node_key'], array (
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
), 'node_key')) : new \Near\JsonRpc\Models\OptionalValue(),
            rpcAddr: array_key_exists('rpc_addr', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['rpc_addr'], array (
  'nullable' => true,
  'type' => 'string',
), 'rpc_addr')) : new \Near\JsonRpc\Models\OptionalValue(),
            validatorAccountId: array_key_exists('validator_account_id', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['validator_account_id'], array (
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
), 'validator_account_id')) : new \Near\JsonRpc\Models\OptionalValue(),
            validatorPublicKey: array_key_exists('validator_public_key', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['validator_public_key'], array (
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
), 'validator_public_key')) : new \Near\JsonRpc\Models\OptionalValue(),
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
        $data['chain_id'] = $this->chainId;
        $data['genesis_hash'] = $this->genesisHash;
        $data['latest_protocol_version'] = $this->latestProtocolVersion;
        $data['node_public_key'] = $this->nodePublicKey;
        $data['protocol_version'] = $this->protocolVersion;
        $data['sync_info'] = $this->syncInfo;
        $data['uptime_sec'] = $this->uptimeSec;
        $data['validators'] = $this->validators;
        $data['version'] = $this->version;
        if ($this->detailedDebugStatus->present) $data['detailed_debug_status'] = $this->detailedDebugStatus->value;
        if ($this->nodeKey->present) $data['node_key'] = $this->nodeKey->value;
        if ($this->rpcAddr->present) $data['rpc_addr'] = $this->rpcAddr->value;
        if ($this->validatorAccountId->present) $data['validator_account_id'] = $this->validatorAccountId->value;
        if ($this->validatorPublicKey->present) $data['validator_public_key'] = $this->validatorPublicKey->value;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'chain_id' => 
    array (
      'type' => 'string',
    ),
    'detailed_debug_status' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DetailedDebugStatus',
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
    'genesis_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'latest_protocol_version' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'node_key' => 
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
    'node_public_key' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
      'nullable' => false,
    ),
    'protocol_version' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'rpc_addr' => 
    array (
      'nullable' => true,
      'type' => 'string',
    ),
    'sync_info' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StatusSyncInfo',
      'nullable' => false,
    ),
    'uptime_sec' => 
    array (
      'format' => 'int64',
      'type' => 'integer',
    ),
    'validator_account_id' => 
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
    'validator_public_key' => 
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
    'validators' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorInfo',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'version' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Version',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'version',
    1 => 'chain_id',
    2 => 'protocol_version',
    3 => 'latest_protocol_version',
    4 => 'validators',
    5 => 'sync_info',
    6 => 'node_public_key',
    7 => 'uptime_sec',
    8 => 'genesis_hash',
  ),
  'type' => 'object',
), 'RpcStatusResponse'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'chain_id' => 
    array (
      'type' => 'string',
    ),
    'detailed_debug_status' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DetailedDebugStatus',
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
    'genesis_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'latest_protocol_version' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'node_key' => 
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
    'node_public_key' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
      'nullable' => false,
    ),
    'protocol_version' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'rpc_addr' => 
    array (
      'nullable' => true,
      'type' => 'string',
    ),
    'sync_info' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StatusSyncInfo',
      'nullable' => false,
    ),
    'uptime_sec' => 
    array (
      'format' => 'int64',
      'type' => 'integer',
    ),
    'validator_account_id' => 
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
    'validator_public_key' => 
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
    'validators' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorInfo',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'version' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Version',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'version',
    1 => 'chain_id',
    2 => 'protocol_version',
    3 => 'latest_protocol_version',
    4 => 'validators',
    5 => 'sync_info',
    6 => 'node_public_key',
    7 => 'uptime_sec',
    8 => 'genesis_hash',
  ),
  'type' => 'object',
), 'RpcStatusResponse');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
