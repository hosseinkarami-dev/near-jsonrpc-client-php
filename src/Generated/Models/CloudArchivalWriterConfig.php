<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Configuration for a cloud-based archival writer. If this config is present, the writer is enabled and
 * writes chunk-related data based on the tracked shards. This config also controls additional archival
 * behavior such as block data and polling interval.
 */
final readonly class CloudArchivalWriterConfig implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * Determines whether block-related data should be written to cloud storage.
         *
         * @var bool|null
         */
        public bool|null $archiveBlockData = null,
        /**
         * Delay between consecutive batches while the writer is catching up, pacing
         * how fast it uploads to the storage backend.
         *
         * @var \Near\JsonRpc\Generated\Models\DurationAsStdSchemaProvider|null
         */
        public \Near\JsonRpc\Generated\Models\DurationAsStdSchemaProvider|null $catchUpThrottle = null,
        /**
         * Interval at which the system checks for new blocks or chunks to archive.
         *
         * @var \Near\JsonRpc\Generated\Models\DurationAsStdSchemaProvider|null
         */
        public \Near\JsonRpc\Generated\Models\DurationAsStdSchemaProvider|null $pollingInterval = null,
        /**
         * Cadence of state snapshots, in epochs. Higher values reduce bucket cost at
         * the expense of potentially longer delta replay during reader bootstrap.
         *
         * @var int|string|null
         */
        public int|string|null $snapshotEveryNEpochs = null,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        if ($this->archiveBlockData !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->archiveBlockData, array (
  'default' => false,
  'type' => 'boolean',
), 'archive_block_data');
        if ($this->catchUpThrottle !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->catchUpThrottle, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DurationAsStdSchemaProvider',
  'nullable' => false,
), 'catch_up_throttle');
        if ($this->pollingInterval !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->pollingInterval, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DurationAsStdSchemaProvider',
  'nullable' => false,
), 'polling_interval');
        if ($this->snapshotEveryNEpochs !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->snapshotEveryNEpochs, array (
  'default' => 10,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'snapshot_every_n_epochs');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for CloudArchivalWriterConfig.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        $extra = array_diff_key($data, array (
  'archive_block_data' => true,
  'catch_up_throttle' => true,
  'polling_interval' => true,
  'snapshot_every_n_epochs' => true,
));
        return new self(
            archiveBlockData: array_key_exists('archive_block_data', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['archive_block_data'], array (
  'default' => false,
  'type' => 'boolean',
), 'archive_block_data') : null,
            catchUpThrottle: array_key_exists('catch_up_throttle', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['catch_up_throttle'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DurationAsStdSchemaProvider',
  'nullable' => false,
), 'catch_up_throttle') : null,
            pollingInterval: array_key_exists('polling_interval', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['polling_interval'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DurationAsStdSchemaProvider',
  'nullable' => false,
), 'polling_interval') : null,
            snapshotEveryNEpochs: array_key_exists('snapshot_every_n_epochs', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['snapshot_every_n_epochs'], array (
  'default' => 10,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'snapshot_every_n_epochs') : null,
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
        if ($this->archiveBlockData !== null) $data['archive_block_data'] = $this->archiveBlockData;
        if ($this->catchUpThrottle !== null) $data['catch_up_throttle'] = $this->catchUpThrottle;
        if ($this->pollingInterval !== null) $data['polling_interval'] = $this->pollingInterval;
        if ($this->snapshotEveryNEpochs !== null) $data['snapshot_every_n_epochs'] = $this->snapshotEveryNEpochs;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'archive_block_data' => 
    array (
      'default' => false,
      'type' => 'boolean',
    ),
    'catch_up_throttle' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DurationAsStdSchemaProvider',
      'nullable' => false,
    ),
    'polling_interval' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DurationAsStdSchemaProvider',
      'nullable' => false,
    ),
    'snapshot_every_n_epochs' => 
    array (
      'default' => 10,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'CloudArchivalWriterConfig'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'archive_block_data' => 
    array (
      'default' => false,
      'type' => 'boolean',
    ),
    'catch_up_throttle' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DurationAsStdSchemaProvider',
      'nullable' => false,
    ),
    'polling_interval' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DurationAsStdSchemaProvider',
      'nullable' => false,
    ),
    'snapshot_every_n_epochs' => 
    array (
      'default' => 10,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'CloudArchivalWriterConfig');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
