<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Contains main info about the chunk.
 */
final readonly class ChunkHeaderView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\NearToken
         */
        public \Near\JsonRpc\Generated\Models\NearToken $balanceBurnt,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $chunkHash,
        /**
         * @var int|string
         */
        public int|string $encodedLength,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $encodedMerkleRoot,
        /**
         * @var \Near\JsonRpc\Generated\Models\NearGas
         */
        public \Near\JsonRpc\Generated\Models\NearGas $gasLimit,
        /**
         * @var \Near\JsonRpc\Generated\Models\NearGas
         */
        public \Near\JsonRpc\Generated\Models\NearGas $gasUsed,
        /**
         * @var int|string
         */
        public int|string $heightCreated,
        /**
         * @var int|string
         */
        public int|string $heightIncluded,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $outcomeRoot,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $outgoingReceiptsRoot,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $prevBlockHash,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $prevStateRoot,
        /**
         * @var \Near\JsonRpc\Generated\Models\ShardId
         */
        public \Near\JsonRpc\Generated\Models\ShardId $shardId,
        /**
         * @var \Near\JsonRpc\Generated\Models\Signature
         */
        public \Near\JsonRpc\Generated\Models\Signature $signature,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $txRoot,
        /**
         * @var list<\Near\JsonRpc\Generated\Models\ValidatorStakeView>
         */
        public array $validatorProposals,
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\BandwidthRequests|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $bandwidthRequests = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\CongestionInfoView|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $congestionInfo = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * Proposed trie split for dynamic resharding
         * `None`: field missing (`ShardChunkHeaderInnerV4` or earlier)
         * `Some(None)`: field present, but not set (`ChunkHeaderInnerV5` or later)
         * `Some(Some(split))`: field present and set
         *
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\TrieSplit|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $proposedSplit = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * TODO(2271): deprecated.
         *
         * @var \Near\JsonRpc\Generated\Models\NearToken|null
         */
        public \Near\JsonRpc\Generated\Models\NearToken|null $rentPaid = null,
        /**
         * TODO(2271): deprecated.
         *
         * @var \Near\JsonRpc\Generated\Models\NearToken|null
         */
        public \Near\JsonRpc\Generated\Models\NearToken|null $validatorReward = null,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->balanceBurnt, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'balance_burnt');
        \Near\JsonRpc\Models\TypeGuard::assert($this->chunkHash, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'chunk_hash');
        \Near\JsonRpc\Models\TypeGuard::assert($this->encodedLength, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'encoded_length');
        \Near\JsonRpc\Models\TypeGuard::assert($this->encodedMerkleRoot, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'encoded_merkle_root');
        \Near\JsonRpc\Models\TypeGuard::assert($this->gasLimit, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'gas_limit');
        \Near\JsonRpc\Models\TypeGuard::assert($this->gasUsed, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'gas_used');
        \Near\JsonRpc\Models\TypeGuard::assert($this->heightCreated, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'height_created');
        \Near\JsonRpc\Models\TypeGuard::assert($this->heightIncluded, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'height_included');
        \Near\JsonRpc\Models\TypeGuard::assert($this->outcomeRoot, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'outcome_root');
        \Near\JsonRpc\Models\TypeGuard::assert($this->outgoingReceiptsRoot, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'outgoing_receipts_root');
        \Near\JsonRpc\Models\TypeGuard::assert($this->prevBlockHash, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'prev_block_hash');
        \Near\JsonRpc\Models\TypeGuard::assert($this->prevStateRoot, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'prev_state_root');
        \Near\JsonRpc\Models\TypeGuard::assert($this->shardId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
  'nullable' => false,
), 'shard_id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->signature, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Signature',
  'nullable' => false,
), 'signature');
        \Near\JsonRpc\Models\TypeGuard::assert($this->txRoot, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'tx_root');
        \Near\JsonRpc\Models\TypeGuard::assert($this->validatorProposals, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorStakeView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'validator_proposals');
        if ($this->bandwidthRequests->present) \Near\JsonRpc\Models\TypeGuard::assert($this->bandwidthRequests->value, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BandwidthRequests',
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
), 'bandwidth_requests');
        if ($this->congestionInfo->present) \Near\JsonRpc\Models\TypeGuard::assert($this->congestionInfo->value, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CongestionInfoView',
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
), 'congestion_info');
        if ($this->proposedSplit->present) \Near\JsonRpc\Models\TypeGuard::assert($this->proposedSplit->value, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TrieSplit',
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
), 'proposed_split');
        if ($this->rentPaid !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->rentPaid, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'rent_paid');
        if ($this->validatorReward !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->validatorReward, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'validator_reward');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ChunkHeaderView.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('chunk_hash', $data)) throw new \InvalidArgumentException('Missing required field: chunk_hash');
        if (!array_key_exists('prev_block_hash', $data)) throw new \InvalidArgumentException('Missing required field: prev_block_hash');
        if (!array_key_exists('outcome_root', $data)) throw new \InvalidArgumentException('Missing required field: outcome_root');
        if (!array_key_exists('prev_state_root', $data)) throw new \InvalidArgumentException('Missing required field: prev_state_root');
        if (!array_key_exists('encoded_merkle_root', $data)) throw new \InvalidArgumentException('Missing required field: encoded_merkle_root');
        if (!array_key_exists('encoded_length', $data)) throw new \InvalidArgumentException('Missing required field: encoded_length');
        if (!array_key_exists('height_created', $data)) throw new \InvalidArgumentException('Missing required field: height_created');
        if (!array_key_exists('height_included', $data)) throw new \InvalidArgumentException('Missing required field: height_included');
        if (!array_key_exists('shard_id', $data)) throw new \InvalidArgumentException('Missing required field: shard_id');
        if (!array_key_exists('gas_used', $data)) throw new \InvalidArgumentException('Missing required field: gas_used');
        if (!array_key_exists('gas_limit', $data)) throw new \InvalidArgumentException('Missing required field: gas_limit');
        if (!array_key_exists('balance_burnt', $data)) throw new \InvalidArgumentException('Missing required field: balance_burnt');
        if (!array_key_exists('outgoing_receipts_root', $data)) throw new \InvalidArgumentException('Missing required field: outgoing_receipts_root');
        if (!array_key_exists('tx_root', $data)) throw new \InvalidArgumentException('Missing required field: tx_root');
        if (!array_key_exists('validator_proposals', $data)) throw new \InvalidArgumentException('Missing required field: validator_proposals');
        if (!array_key_exists('signature', $data)) throw new \InvalidArgumentException('Missing required field: signature');
        $extra = array_diff_key($data, array (
  'balance_burnt' => true,
  'bandwidth_requests' => true,
  'chunk_hash' => true,
  'congestion_info' => true,
  'encoded_length' => true,
  'encoded_merkle_root' => true,
  'gas_limit' => true,
  'gas_used' => true,
  'height_created' => true,
  'height_included' => true,
  'outcome_root' => true,
  'outgoing_receipts_root' => true,
  'prev_block_hash' => true,
  'prev_state_root' => true,
  'proposed_split' => true,
  'rent_paid' => true,
  'shard_id' => true,
  'signature' => true,
  'tx_root' => true,
  'validator_proposals' => true,
  'validator_reward' => true,
));
        return new self(
            balanceBurnt: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['balance_burnt'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'balance_burnt'),
            chunkHash: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['chunk_hash'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'chunk_hash'),
            encodedLength: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['encoded_length'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'encoded_length'),
            encodedMerkleRoot: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['encoded_merkle_root'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'encoded_merkle_root'),
            gasLimit: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['gas_limit'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'gas_limit'),
            gasUsed: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['gas_used'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'gas_used'),
            heightCreated: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['height_created'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'height_created'),
            heightIncluded: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['height_included'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'height_included'),
            outcomeRoot: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['outcome_root'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'outcome_root'),
            outgoingReceiptsRoot: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['outgoing_receipts_root'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'outgoing_receipts_root'),
            prevBlockHash: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['prev_block_hash'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'prev_block_hash'),
            prevStateRoot: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['prev_state_root'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'prev_state_root'),
            shardId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['shard_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
  'nullable' => false,
), 'shard_id'),
            signature: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['signature'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Signature',
  'nullable' => false,
), 'signature'),
            txRoot: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['tx_root'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'tx_root'),
            validatorProposals: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['validator_proposals'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorStakeView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'validator_proposals'),
            bandwidthRequests: array_key_exists('bandwidth_requests', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['bandwidth_requests'], array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BandwidthRequests',
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
), 'bandwidth_requests')) : new \Near\JsonRpc\Models\OptionalValue(),
            congestionInfo: array_key_exists('congestion_info', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['congestion_info'], array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CongestionInfoView',
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
), 'congestion_info')) : new \Near\JsonRpc\Models\OptionalValue(),
            proposedSplit: array_key_exists('proposed_split', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['proposed_split'], array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TrieSplit',
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
), 'proposed_split')) : new \Near\JsonRpc\Models\OptionalValue(),
            rentPaid: array_key_exists('rent_paid', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['rent_paid'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'rent_paid') : null,
            validatorReward: array_key_exists('validator_reward', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['validator_reward'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'validator_reward') : null,
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
        $data['balance_burnt'] = $this->balanceBurnt;
        $data['chunk_hash'] = $this->chunkHash;
        $data['encoded_length'] = $this->encodedLength;
        $data['encoded_merkle_root'] = $this->encodedMerkleRoot;
        $data['gas_limit'] = $this->gasLimit;
        $data['gas_used'] = $this->gasUsed;
        $data['height_created'] = $this->heightCreated;
        $data['height_included'] = $this->heightIncluded;
        $data['outcome_root'] = $this->outcomeRoot;
        $data['outgoing_receipts_root'] = $this->outgoingReceiptsRoot;
        $data['prev_block_hash'] = $this->prevBlockHash;
        $data['prev_state_root'] = $this->prevStateRoot;
        $data['shard_id'] = $this->shardId;
        $data['signature'] = $this->signature;
        $data['tx_root'] = $this->txRoot;
        $data['validator_proposals'] = $this->validatorProposals;
        if ($this->bandwidthRequests->present) $data['bandwidth_requests'] = $this->bandwidthRequests->value;
        if ($this->congestionInfo->present) $data['congestion_info'] = $this->congestionInfo->value;
        if ($this->proposedSplit->present) $data['proposed_split'] = $this->proposedSplit->value;
        if ($this->rentPaid !== null) $data['rent_paid'] = $this->rentPaid;
        if ($this->validatorReward !== null) $data['validator_reward'] = $this->validatorReward;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'balance_burnt' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'bandwidth_requests' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BandwidthRequests',
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
    'chunk_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'congestion_info' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CongestionInfoView',
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
    'encoded_length' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'encoded_merkle_root' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'gas_limit' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'gas_used' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'height_created' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'height_included' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'outcome_root' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'outgoing_receipts_root' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'prev_block_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'prev_state_root' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'proposed_split' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TrieSplit',
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
    'rent_paid' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'shard_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
      'nullable' => false,
    ),
    'signature' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Signature',
      'nullable' => false,
    ),
    'tx_root' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'validator_proposals' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorStakeView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'validator_reward' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'chunk_hash',
    1 => 'prev_block_hash',
    2 => 'outcome_root',
    3 => 'prev_state_root',
    4 => 'encoded_merkle_root',
    5 => 'encoded_length',
    6 => 'height_created',
    7 => 'height_included',
    8 => 'shard_id',
    9 => 'gas_used',
    10 => 'gas_limit',
    11 => 'balance_burnt',
    12 => 'outgoing_receipts_root',
    13 => 'tx_root',
    14 => 'validator_proposals',
    15 => 'signature',
  ),
  'type' => 'object',
), 'ChunkHeaderView'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'balance_burnt' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'bandwidth_requests' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BandwidthRequests',
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
    'chunk_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'congestion_info' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CongestionInfoView',
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
    'encoded_length' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'encoded_merkle_root' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'gas_limit' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'gas_used' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'height_created' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'height_included' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'outcome_root' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'outgoing_receipts_root' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'prev_block_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'prev_state_root' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'proposed_split' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TrieSplit',
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
    'rent_paid' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'shard_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
      'nullable' => false,
    ),
    'signature' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Signature',
      'nullable' => false,
    ),
    'tx_root' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'validator_proposals' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorStakeView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'validator_reward' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'chunk_hash',
    1 => 'prev_block_hash',
    2 => 'outcome_root',
    3 => 'prev_state_root',
    4 => 'encoded_merkle_root',
    5 => 'encoded_length',
    6 => 'height_created',
    7 => 'height_included',
    8 => 'shard_id',
    9 => 'gas_used',
    10 => 'gas_limit',
    11 => 'balance_burnt',
    12 => 'outgoing_receipts_root',
    13 => 'tx_root',
    14 => 'validator_proposals',
    15 => 'signature',
  ),
  'type' => 'object',
), 'ChunkHeaderView');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
