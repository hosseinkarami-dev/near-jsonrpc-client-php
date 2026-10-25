<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class StateSyncConfig implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\SyncConcurrency|null
         */
        public \Near\JsonRpc\Generated\Models\SyncConcurrency|null $concurrency = null,
        /**
         * `none` value disables state dump to external storage.
         *
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\DumpConfig|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $dump = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * Zstd compression level for state parts.
         *
         * @var int|null
         */
        public int|null $partsCompressionLvl = null,
        /**
         * @var \Near\JsonRpc\Generated\Models\SyncConfig|null
         */
        public \Near\JsonRpc\Generated\Models\SyncConfig|null $sync = null,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        if ($this->concurrency !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->concurrency, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SyncConcurrency',
  'nullable' => false,
), 'concurrency');
        if ($this->dump->present) \Near\JsonRpc\Models\TypeGuard::assert($this->dump->value, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DumpConfig',
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
), 'dump');
        if ($this->partsCompressionLvl !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->partsCompressionLvl, array (
  'default' => 1,
  'format' => 'int32',
  'type' => 'integer',
), 'parts_compression_lvl');
        if ($this->sync !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->sync, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SyncConfig',
  'nullable' => false,
), 'sync');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for StateSyncConfig.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        $extra = array_diff_key($data, array (
  'concurrency' => true,
  'dump' => true,
  'parts_compression_lvl' => true,
  'sync' => true,
));
        return new self(
            concurrency: array_key_exists('concurrency', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['concurrency'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SyncConcurrency',
  'nullable' => false,
), 'concurrency') : null,
            dump: array_key_exists('dump', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['dump'], array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DumpConfig',
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
), 'dump')) : new \Near\JsonRpc\Models\OptionalValue(),
            partsCompressionLvl: array_key_exists('parts_compression_lvl', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['parts_compression_lvl'], array (
  'default' => 1,
  'format' => 'int32',
  'type' => 'integer',
), 'parts_compression_lvl') : null,
            sync: array_key_exists('sync', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['sync'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SyncConfig',
  'nullable' => false,
), 'sync') : null,
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
        if ($this->concurrency !== null) $data['concurrency'] = $this->concurrency;
        if ($this->dump->present) $data['dump'] = $this->dump->value;
        if ($this->partsCompressionLvl !== null) $data['parts_compression_lvl'] = $this->partsCompressionLvl;
        if ($this->sync !== null) $data['sync'] = $this->sync;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'concurrency' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SyncConcurrency',
      'nullable' => false,
    ),
    'dump' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DumpConfig',
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
    'parts_compression_lvl' => 
    array (
      'default' => 1,
      'format' => 'int32',
      'type' => 'integer',
    ),
    'sync' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SyncConfig',
      'nullable' => false,
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'StateSyncConfig'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'concurrency' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SyncConcurrency',
      'nullable' => false,
    ),
    'dump' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DumpConfig',
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
    'parts_compression_lvl' => 
    array (
      'default' => 1,
      'format' => 'int32',
      'type' => 'integer',
    ),
    'sync' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SyncConfig',
      'nullable' => false,
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'StateSyncConfig');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
