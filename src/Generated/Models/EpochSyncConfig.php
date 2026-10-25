<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class EpochSyncConfig implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * Number of epochs behind the network head beyond which the node will use
         * epoch sync instead of header sync. At the consumption site, this is
         * multiplied by epoch_length to get the horizon in blocks.
         *
         * @var int|string|null
         */
        public int|string|null $epochSyncHorizonNumEpochs = null,
        /**
         * Timeout for epoch sync requests. The node will continue retrying indefinitely even
         * if this timeout is exceeded.
         *
         * @var \Near\JsonRpc\Generated\Models\DurationAsStdSchemaProvider|null
         */
        public \Near\JsonRpc\Generated\Models\DurationAsStdSchemaProvider|null $timeoutForEpochSync = null,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        if ($this->epochSyncHorizonNumEpochs !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->epochSyncHorizonNumEpochs, array (
  'default' => 2,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'epoch_sync_horizon_num_epochs');
        if ($this->timeoutForEpochSync !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->timeoutForEpochSync, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DurationAsStdSchemaProvider',
  'nullable' => false,
), 'timeout_for_epoch_sync');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for EpochSyncConfig.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        $extra = array_diff_key($data, array (
  'epoch_sync_horizon_num_epochs' => true,
  'timeout_for_epoch_sync' => true,
));
        return new self(
            epochSyncHorizonNumEpochs: array_key_exists('epoch_sync_horizon_num_epochs', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['epoch_sync_horizon_num_epochs'], array (
  'default' => 2,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'epoch_sync_horizon_num_epochs') : null,
            timeoutForEpochSync: array_key_exists('timeout_for_epoch_sync', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['timeout_for_epoch_sync'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DurationAsStdSchemaProvider',
  'nullable' => false,
), 'timeout_for_epoch_sync') : null,
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
        if ($this->epochSyncHorizonNumEpochs !== null) $data['epoch_sync_horizon_num_epochs'] = $this->epochSyncHorizonNumEpochs;
        if ($this->timeoutForEpochSync !== null) $data['timeout_for_epoch_sync'] = $this->timeoutForEpochSync;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'epoch_sync_horizon_num_epochs' => 
    array (
      'default' => 2,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'timeout_for_epoch_sync' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DurationAsStdSchemaProvider',
      'nullable' => false,
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'EpochSyncConfig'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'epoch_sync_horizon_num_epochs' => 
    array (
      'default' => 2,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'timeout_for_epoch_sync' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DurationAsStdSchemaProvider',
      'nullable' => false,
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'EpochSyncConfig');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
