<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Configures how to dump state to external storage.
 */
final readonly class DumpConfig implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * Location of a json file with credentials allowing access to the bucket.
         *
         * @var \Near\JsonRpc\Models\OptionalValue<string|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $credentialsFile = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * How often to check if a new epoch has started.
         * Feel free to set to `None`, defaults are sensible.
         *
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\DurationAsStdSchemaProvider|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $iterationDelay = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * Specifies where to write the obtained state parts.
         *
         * @var \Near\JsonRpc\Generated\Models\ExternalStorageLocation|null
         */
        public \Near\JsonRpc\Generated\Models\ExternalStorageLocation|null $location = null,
        /**
         * Use in case a node that dumps state to the external storage
         * gets in trouble.
         *
         * @var \Near\JsonRpc\Models\OptionalValue<list<\Near\JsonRpc\Generated\Models\ShardId>|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $restartDumpForShards = new \Near\JsonRpc\Models\OptionalValue(),
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        if ($this->credentialsFile->present) \Near\JsonRpc\Models\TypeGuard::assert($this->credentialsFile->value, array (
  'nullable' => true,
  'type' => 'string',
), 'credentials_file');
        if ($this->iterationDelay->present) \Near\JsonRpc\Models\TypeGuard::assert($this->iterationDelay->value, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DurationAsStdSchemaProvider',
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
), 'iteration_delay');
        if ($this->location !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->location, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExternalStorageLocation',
  'nullable' => false,
), 'location');
        if ($this->restartDumpForShards->present) \Near\JsonRpc\Models\TypeGuard::assert($this->restartDumpForShards->value, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
    'nullable' => false,
  ),
  'nullable' => true,
  'type' => 'array',
), 'restart_dump_for_shards');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for DumpConfig.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        $extra = array_diff_key($data, array (
  'credentials_file' => true,
  'iteration_delay' => true,
  'location' => true,
  'restart_dump_for_shards' => true,
));
        return new self(
            credentialsFile: array_key_exists('credentials_file', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['credentials_file'], array (
  'nullable' => true,
  'type' => 'string',
), 'credentials_file')) : new \Near\JsonRpc\Models\OptionalValue(),
            iterationDelay: array_key_exists('iteration_delay', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['iteration_delay'], array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DurationAsStdSchemaProvider',
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
), 'iteration_delay')) : new \Near\JsonRpc\Models\OptionalValue(),
            location: array_key_exists('location', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['location'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExternalStorageLocation',
  'nullable' => false,
), 'location') : null,
            restartDumpForShards: array_key_exists('restart_dump_for_shards', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['restart_dump_for_shards'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
    'nullable' => false,
  ),
  'nullable' => true,
  'type' => 'array',
), 'restart_dump_for_shards')) : new \Near\JsonRpc\Models\OptionalValue(),
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
        if ($this->credentialsFile->present) $data['credentials_file'] = $this->credentialsFile->value;
        if ($this->iterationDelay->present) $data['iteration_delay'] = $this->iterationDelay->value;
        if ($this->location !== null) $data['location'] = $this->location;
        if ($this->restartDumpForShards->present) $data['restart_dump_for_shards'] = $this->restartDumpForShards->value;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'credentials_file' => 
    array (
      'nullable' => true,
      'type' => 'string',
    ),
    'iteration_delay' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DurationAsStdSchemaProvider',
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
    'location' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExternalStorageLocation',
      'nullable' => false,
    ),
    'restart_dump_for_shards' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
        'nullable' => false,
      ),
      'nullable' => true,
      'type' => 'array',
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'DumpConfig'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'credentials_file' => 
    array (
      'nullable' => true,
      'type' => 'string',
    ),
    'iteration_delay' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DurationAsStdSchemaProvider',
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
    'location' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExternalStorageLocation',
      'nullable' => false,
    ),
    'restart_dump_for_shards' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
        'nullable' => false,
      ),
      'nullable' => true,
      'type' => 'array',
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'DumpConfig');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
