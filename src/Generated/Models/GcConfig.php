<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Configuration for garbage collection.
 */
final readonly class GcConfig implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * Maximum number of blocks to garbage collect at every garbage collection
         * call.
         *
         * @var int|string|null
         */
        public int|string|null $gcBlocksLimit = null,
        /**
         * Maximum number of height to go through at each garbage collection step
         * when cleaning forks during garbage collection.
         *
         * @var int|string|null
         */
        public int|string|null $gcForkCleanStep = null,
        /**
         * Number of epochs for which we keep store data.
         *
         * @var int|string|null
         */
        public int|string|null $gcNumEpochsToKeep = null,
        /**
         * How often gc should be run
         *
         * @var \Near\JsonRpc\Generated\Models\DurationAsStdSchemaProvider|null
         */
        public \Near\JsonRpc\Generated\Models\DurationAsStdSchemaProvider|null $gcStepPeriod = null,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        if ($this->gcBlocksLimit !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->gcBlocksLimit, array (
  'default' => 2,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'gc_blocks_limit');
        if ($this->gcForkCleanStep !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->gcForkCleanStep, array (
  'default' => 100,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'gc_fork_clean_step');
        if ($this->gcNumEpochsToKeep !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->gcNumEpochsToKeep, array (
  'default' => 5,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'gc_num_epochs_to_keep');
        if ($this->gcStepPeriod !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->gcStepPeriod, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DurationAsStdSchemaProvider',
  'nullable' => false,
), 'gc_step_period');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for GcConfig.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        $extra = array_diff_key($data, array (
  'gc_blocks_limit' => true,
  'gc_fork_clean_step' => true,
  'gc_num_epochs_to_keep' => true,
  'gc_step_period' => true,
));
        return new self(
            gcBlocksLimit: array_key_exists('gc_blocks_limit', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['gc_blocks_limit'], array (
  'default' => 2,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'gc_blocks_limit') : null,
            gcForkCleanStep: array_key_exists('gc_fork_clean_step', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['gc_fork_clean_step'], array (
  'default' => 100,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'gc_fork_clean_step') : null,
            gcNumEpochsToKeep: array_key_exists('gc_num_epochs_to_keep', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['gc_num_epochs_to_keep'], array (
  'default' => 5,
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'gc_num_epochs_to_keep') : null,
            gcStepPeriod: array_key_exists('gc_step_period', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['gc_step_period'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DurationAsStdSchemaProvider',
  'nullable' => false,
), 'gc_step_period') : null,
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
        if ($this->gcBlocksLimit !== null) $data['gc_blocks_limit'] = $this->gcBlocksLimit;
        if ($this->gcForkCleanStep !== null) $data['gc_fork_clean_step'] = $this->gcForkCleanStep;
        if ($this->gcNumEpochsToKeep !== null) $data['gc_num_epochs_to_keep'] = $this->gcNumEpochsToKeep;
        if ($this->gcStepPeriod !== null) $data['gc_step_period'] = $this->gcStepPeriod;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'gc_blocks_limit' => 
    array (
      'default' => 2,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'gc_fork_clean_step' => 
    array (
      'default' => 100,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'gc_num_epochs_to_keep' => 
    array (
      'default' => 5,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'gc_step_period' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DurationAsStdSchemaProvider',
      'nullable' => false,
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'GCConfig'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'gc_blocks_limit' => 
    array (
      'default' => 2,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'gc_fork_clean_step' => 
    array (
      'default' => 100,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'gc_num_epochs_to_keep' => 
    array (
      'default' => 5,
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'gc_step_period' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DurationAsStdSchemaProvider',
      'nullable' => false,
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'GCConfig');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
