<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class StatusSyncInfo implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $latestBlockHash,
        /**
         * @var int|string
         */
        public int|string $latestBlockHeight,
        /**
         * @var string
         */
        public string $latestBlockTime,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $latestStateRoot,
        /**
         * @var bool
         */
        public bool $syncing,
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\CryptoHash|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $earliestBlockHash = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<int|string|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $earliestBlockHeight = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<string|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $earliestBlockTime = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\EpochId|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $epochId = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<int|string|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $epochStartHeight = new \Near\JsonRpc\Models\OptionalValue(),
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->latestBlockHash, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'latest_block_hash');
        \Near\JsonRpc\Models\TypeGuard::assert($this->latestBlockHeight, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'latest_block_height');
        \Near\JsonRpc\Models\TypeGuard::assert($this->latestBlockTime, array (
  'type' => 'string',
), 'latest_block_time');
        \Near\JsonRpc\Models\TypeGuard::assert($this->latestStateRoot, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'latest_state_root');
        \Near\JsonRpc\Models\TypeGuard::assert($this->syncing, array (
  'type' => 'boolean',
), 'syncing');
        if ($this->earliestBlockHash->present) \Near\JsonRpc\Models\TypeGuard::assert($this->earliestBlockHash->value, array (
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
), 'earliest_block_hash');
        if ($this->earliestBlockHeight->present) \Near\JsonRpc\Models\TypeGuard::assert($this->earliestBlockHeight->value, array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'earliest_block_height');
        if ($this->earliestBlockTime->present) \Near\JsonRpc\Models\TypeGuard::assert($this->earliestBlockTime->value, array (
  'nullable' => true,
  'type' => 'string',
), 'earliest_block_time');
        if ($this->epochId->present) \Near\JsonRpc\Models\TypeGuard::assert($this->epochId->value, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\EpochId',
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
), 'epoch_id');
        if ($this->epochStartHeight->present) \Near\JsonRpc\Models\TypeGuard::assert($this->epochStartHeight->value, array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'epoch_start_height');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for StatusSyncInfo.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('latest_block_hash', $data)) throw new \InvalidArgumentException('Missing required field: latest_block_hash');
        if (!array_key_exists('latest_block_height', $data)) throw new \InvalidArgumentException('Missing required field: latest_block_height');
        if (!array_key_exists('latest_state_root', $data)) throw new \InvalidArgumentException('Missing required field: latest_state_root');
        if (!array_key_exists('latest_block_time', $data)) throw new \InvalidArgumentException('Missing required field: latest_block_time');
        if (!array_key_exists('syncing', $data)) throw new \InvalidArgumentException('Missing required field: syncing');
        $extra = array_diff_key($data, array (
  'earliest_block_hash' => true,
  'earliest_block_height' => true,
  'earliest_block_time' => true,
  'epoch_id' => true,
  'epoch_start_height' => true,
  'latest_block_hash' => true,
  'latest_block_height' => true,
  'latest_block_time' => true,
  'latest_state_root' => true,
  'syncing' => true,
));
        return new self(
            latestBlockHash: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['latest_block_hash'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'latest_block_hash'),
            latestBlockHeight: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['latest_block_height'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'latest_block_height'),
            latestBlockTime: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['latest_block_time'], array (
  'type' => 'string',
), 'latest_block_time'),
            latestStateRoot: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['latest_state_root'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'latest_state_root'),
            syncing: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['syncing'], array (
  'type' => 'boolean',
), 'syncing'),
            earliestBlockHash: array_key_exists('earliest_block_hash', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['earliest_block_hash'], array (
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
), 'earliest_block_hash')) : new \Near\JsonRpc\Models\OptionalValue(),
            earliestBlockHeight: array_key_exists('earliest_block_height', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['earliest_block_height'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'earliest_block_height')) : new \Near\JsonRpc\Models\OptionalValue(),
            earliestBlockTime: array_key_exists('earliest_block_time', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['earliest_block_time'], array (
  'nullable' => true,
  'type' => 'string',
), 'earliest_block_time')) : new \Near\JsonRpc\Models\OptionalValue(),
            epochId: array_key_exists('epoch_id', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['epoch_id'], array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\EpochId',
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
), 'epoch_id')) : new \Near\JsonRpc\Models\OptionalValue(),
            epochStartHeight: array_key_exists('epoch_start_height', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['epoch_start_height'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'epoch_start_height')) : new \Near\JsonRpc\Models\OptionalValue(),
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
        $data['latest_block_hash'] = $this->latestBlockHash;
        $data['latest_block_height'] = $this->latestBlockHeight;
        $data['latest_block_time'] = $this->latestBlockTime;
        $data['latest_state_root'] = $this->latestStateRoot;
        $data['syncing'] = $this->syncing;
        if ($this->earliestBlockHash->present) $data['earliest_block_hash'] = $this->earliestBlockHash->value;
        if ($this->earliestBlockHeight->present) $data['earliest_block_height'] = $this->earliestBlockHeight->value;
        if ($this->earliestBlockTime->present) $data['earliest_block_time'] = $this->earliestBlockTime->value;
        if ($this->epochId->present) $data['epoch_id'] = $this->epochId->value;
        if ($this->epochStartHeight->present) $data['epoch_start_height'] = $this->epochStartHeight->value;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'earliest_block_hash' => 
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
    'earliest_block_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'earliest_block_time' => 
    array (
      'nullable' => true,
      'type' => 'string',
    ),
    'epoch_id' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\EpochId',
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
    'epoch_start_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'latest_block_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'latest_block_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'latest_block_time' => 
    array (
      'type' => 'string',
    ),
    'latest_state_root' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'syncing' => 
    array (
      'type' => 'boolean',
    ),
  ),
  'required' => 
  array (
    0 => 'latest_block_hash',
    1 => 'latest_block_height',
    2 => 'latest_state_root',
    3 => 'latest_block_time',
    4 => 'syncing',
  ),
  'type' => 'object',
), 'StatusSyncInfo'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'earliest_block_hash' => 
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
    'earliest_block_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'earliest_block_time' => 
    array (
      'nullable' => true,
      'type' => 'string',
    ),
    'epoch_id' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\EpochId',
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
    'epoch_start_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'latest_block_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'latest_block_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'latest_block_time' => 
    array (
      'type' => 'string',
    ),
    'latest_state_root' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'syncing' => 
    array (
      'type' => 'boolean',
    ),
  ),
  'required' => 
  array (
    0 => 'latest_block_hash',
    1 => 'latest_block_height',
    2 => 'latest_state_root',
    3 => 'latest_block_time',
    4 => 'syncing',
  ),
  'type' => 'object',
), 'StatusSyncInfo');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
