<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class SyncConcurrency implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * Maximum number of "apply parts" tasks that can be performed in parallel.
         * This is a very disk-heavy task and therefore we set this to a low limit,
         * or else the rocksdb contention makes the whole server freeze up.
         *
         * @var int|null
         */
        public int|null $apply = null,
        /**
         * Maximum number of "apply parts" tasks that can be performed in parallel
         * during catchup. We set this to a very low value to avoid overloading the
         * node while it is still performing normal tasks.
         *
         * @var int|null
         */
        public int|null $applyDuringCatchup = null,
        /**
         * Maximum number of outstanding requests for decentralized state sync.
         *
         * @var int|null
         */
        public int|null $peerDownloads = null,
        /**
         * The maximum parallelism to use per shard. This is mostly for fairness, because
         * the actual rate limiting is done by the TaskTrackers, but this is useful for
         * balancing the shards a little.
         *
         * @var int|null
         */
        public int|null $perShard = null,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        if ($this->apply !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->apply, array (
  'format' => 'uint8',
  'maximum' => 255,
  'minimum' => 0,
  'type' => 'integer',
), 'apply');
        if ($this->applyDuringCatchup !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->applyDuringCatchup, array (
  'format' => 'uint8',
  'maximum' => 255,
  'minimum' => 0,
  'type' => 'integer',
), 'apply_during_catchup');
        if ($this->peerDownloads !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->peerDownloads, array (
  'format' => 'uint8',
  'maximum' => 255,
  'minimum' => 0,
  'type' => 'integer',
), 'peer_downloads');
        if ($this->perShard !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->perShard, array (
  'format' => 'uint8',
  'maximum' => 255,
  'minimum' => 0,
  'type' => 'integer',
), 'per_shard');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for SyncConcurrency.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        $extra = array_diff_key($data, array (
  'apply' => true,
  'apply_during_catchup' => true,
  'peer_downloads' => true,
  'per_shard' => true,
));
        return new self(
            apply: array_key_exists('apply', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['apply'], array (
  'format' => 'uint8',
  'maximum' => 255,
  'minimum' => 0,
  'type' => 'integer',
), 'apply') : null,
            applyDuringCatchup: array_key_exists('apply_during_catchup', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['apply_during_catchup'], array (
  'format' => 'uint8',
  'maximum' => 255,
  'minimum' => 0,
  'type' => 'integer',
), 'apply_during_catchup') : null,
            peerDownloads: array_key_exists('peer_downloads', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['peer_downloads'], array (
  'format' => 'uint8',
  'maximum' => 255,
  'minimum' => 0,
  'type' => 'integer',
), 'peer_downloads') : null,
            perShard: array_key_exists('per_shard', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['per_shard'], array (
  'format' => 'uint8',
  'maximum' => 255,
  'minimum' => 0,
  'type' => 'integer',
), 'per_shard') : null,
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
        if ($this->apply !== null) $data['apply'] = $this->apply;
        if ($this->applyDuringCatchup !== null) $data['apply_during_catchup'] = $this->applyDuringCatchup;
        if ($this->peerDownloads !== null) $data['peer_downloads'] = $this->peerDownloads;
        if ($this->perShard !== null) $data['per_shard'] = $this->perShard;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'apply' => 
    array (
      'format' => 'uint8',
      'maximum' => 255,
      'minimum' => 0,
      'type' => 'integer',
    ),
    'apply_during_catchup' => 
    array (
      'format' => 'uint8',
      'maximum' => 255,
      'minimum' => 0,
      'type' => 'integer',
    ),
    'peer_downloads' => 
    array (
      'format' => 'uint8',
      'maximum' => 255,
      'minimum' => 0,
      'type' => 'integer',
    ),
    'per_shard' => 
    array (
      'format' => 'uint8',
      'maximum' => 255,
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'SyncConcurrency'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'apply' => 
    array (
      'format' => 'uint8',
      'maximum' => 255,
      'minimum' => 0,
      'type' => 'integer',
    ),
    'apply_during_catchup' => 
    array (
      'format' => 'uint8',
      'maximum' => 255,
      'minimum' => 0,
      'type' => 'integer',
    ),
    'peer_downloads' => 
    array (
      'format' => 'uint8',
      'maximum' => 255,
      'minimum' => 0,
      'type' => 'integer',
    ),
    'per_shard' => 
    array (
      'format' => 'uint8',
      'maximum' => 255,
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'SyncConcurrency');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
