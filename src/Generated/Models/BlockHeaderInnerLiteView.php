<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * A part of a state for the current head of a light client. More info [here](https://nomicon.io/ChainSpec/LightClient).
 */
final readonly class BlockHeaderInnerLiteView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * The merkle root of all the block hashes
         *
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $blockMerkleRoot,
        /**
         * The epoch to which the block that is the current known head belongs
         *
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $epochId,
        /**
         * @var int|string
         */
        public int|string $height,
        /**
         * The hash of the block producers set for the next epoch
         *
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $nextBpHash,
        /**
         * The epoch that will follow the current epoch
         *
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $nextEpochId,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $outcomeRoot,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $prevStateRoot,
        /**
         * Legacy json number. Should not be used.
         *
         * @var int|string
         */
        public int|string $timestamp,
        /**
         * @var string
         */
        public string $timestampNanosec,
        /**
         * Merkle root over the block's certified chunk execution results.
         * `None` for pre-spice headers.
         *
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\CryptoHash|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $chunkExecutionRoot = new \Near\JsonRpc\Models\OptionalValue(),
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->blockMerkleRoot, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'block_merkle_root');
        \Near\JsonRpc\Models\TypeGuard::assert($this->epochId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'epoch_id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->height, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'height');
        \Near\JsonRpc\Models\TypeGuard::assert($this->nextBpHash, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'next_bp_hash');
        \Near\JsonRpc\Models\TypeGuard::assert($this->nextEpochId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'next_epoch_id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->outcomeRoot, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'outcome_root');
        \Near\JsonRpc\Models\TypeGuard::assert($this->prevStateRoot, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'prev_state_root');
        \Near\JsonRpc\Models\TypeGuard::assert($this->timestamp, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'timestamp');
        \Near\JsonRpc\Models\TypeGuard::assert($this->timestampNanosec, array (
  'type' => 'string',
), 'timestamp_nanosec');
        if ($this->chunkExecutionRoot->present) \Near\JsonRpc\Models\TypeGuard::assert($this->chunkExecutionRoot->value, array (
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
), 'chunk_execution_root');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for BlockHeaderInnerLiteView.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('height', $data)) throw new \InvalidArgumentException('Missing required field: height');
        if (!array_key_exists('epoch_id', $data)) throw new \InvalidArgumentException('Missing required field: epoch_id');
        if (!array_key_exists('next_epoch_id', $data)) throw new \InvalidArgumentException('Missing required field: next_epoch_id');
        if (!array_key_exists('prev_state_root', $data)) throw new \InvalidArgumentException('Missing required field: prev_state_root');
        if (!array_key_exists('outcome_root', $data)) throw new \InvalidArgumentException('Missing required field: outcome_root');
        if (!array_key_exists('timestamp', $data)) throw new \InvalidArgumentException('Missing required field: timestamp');
        if (!array_key_exists('timestamp_nanosec', $data)) throw new \InvalidArgumentException('Missing required field: timestamp_nanosec');
        if (!array_key_exists('next_bp_hash', $data)) throw new \InvalidArgumentException('Missing required field: next_bp_hash');
        if (!array_key_exists('block_merkle_root', $data)) throw new \InvalidArgumentException('Missing required field: block_merkle_root');
        $extra = array_diff_key($data, array (
  'block_merkle_root' => true,
  'chunk_execution_root' => true,
  'epoch_id' => true,
  'height' => true,
  'next_bp_hash' => true,
  'next_epoch_id' => true,
  'outcome_root' => true,
  'prev_state_root' => true,
  'timestamp' => true,
  'timestamp_nanosec' => true,
));
        return new self(
            blockMerkleRoot: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['block_merkle_root'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'block_merkle_root'),
            epochId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['epoch_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'epoch_id'),
            height: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['height'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'height'),
            nextBpHash: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['next_bp_hash'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'next_bp_hash'),
            nextEpochId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['next_epoch_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'next_epoch_id'),
            outcomeRoot: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['outcome_root'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'outcome_root'),
            prevStateRoot: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['prev_state_root'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'prev_state_root'),
            timestamp: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['timestamp'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'timestamp'),
            timestampNanosec: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['timestamp_nanosec'], array (
  'type' => 'string',
), 'timestamp_nanosec'),
            chunkExecutionRoot: array_key_exists('chunk_execution_root', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['chunk_execution_root'], array (
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
), 'chunk_execution_root')) : new \Near\JsonRpc\Models\OptionalValue(),
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
        $data['block_merkle_root'] = $this->blockMerkleRoot;
        $data['epoch_id'] = $this->epochId;
        $data['height'] = $this->height;
        $data['next_bp_hash'] = $this->nextBpHash;
        $data['next_epoch_id'] = $this->nextEpochId;
        $data['outcome_root'] = $this->outcomeRoot;
        $data['prev_state_root'] = $this->prevStateRoot;
        $data['timestamp'] = $this->timestamp;
        $data['timestamp_nanosec'] = $this->timestampNanosec;
        if ($this->chunkExecutionRoot->present) $data['chunk_execution_root'] = $this->chunkExecutionRoot->value;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'block_merkle_root' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'chunk_execution_root' => 
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
    'epoch_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'next_bp_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'next_epoch_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'outcome_root' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'prev_state_root' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'timestamp' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'timestamp_nanosec' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'height',
    1 => 'epoch_id',
    2 => 'next_epoch_id',
    3 => 'prev_state_root',
    4 => 'outcome_root',
    5 => 'timestamp',
    6 => 'timestamp_nanosec',
    7 => 'next_bp_hash',
    8 => 'block_merkle_root',
  ),
  'type' => 'object',
), 'BlockHeaderInnerLiteView'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'block_merkle_root' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'chunk_execution_root' => 
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
    'epoch_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'next_bp_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'next_epoch_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'outcome_root' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'prev_state_root' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'timestamp' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'timestamp_nanosec' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'height',
    1 => 'epoch_id',
    2 => 'next_epoch_id',
    3 => 'prev_state_root',
    4 => 'outcome_root',
    5 => 'timestamp',
    6 => 'timestamp_nanosec',
    7 => 'next_bp_hash',
    8 => 'block_merkle_root',
  ),
  'type' => 'object',
), 'BlockHeaderInnerLiteView');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
