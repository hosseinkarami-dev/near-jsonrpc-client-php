<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class DurationAsStdSchemaProvider implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var int
         */
        public int $nanos,
        /**
         * @var int|string
         */
        public int|string $secs,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->nanos, array (
  'format' => 'int32',
  'type' => 'integer',
), 'nanos');
        \Near\JsonRpc\Models\TypeGuard::assert($this->secs, array (
  'format' => 'int64',
  'type' => 'integer',
), 'secs');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for DurationAsStdSchemaProvider.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('secs', $data)) throw new \InvalidArgumentException('Missing required field: secs');
        if (!array_key_exists('nanos', $data)) throw new \InvalidArgumentException('Missing required field: nanos');
        $extra = array_diff_key($data, array (
  'nanos' => true,
  'secs' => true,
));
        return new self(
            nanos: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['nanos'], array (
  'format' => 'int32',
  'type' => 'integer',
), 'nanos'),
            secs: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['secs'], array (
  'format' => 'int64',
  'type' => 'integer',
), 'secs'),
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
        $data['nanos'] = $this->nanos;
        $data['secs'] = $this->secs;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'nanos' => 
    array (
      'format' => 'int32',
      'type' => 'integer',
    ),
    'secs' => 
    array (
      'format' => 'int64',
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'secs',
    1 => 'nanos',
  ),
  'type' => 'object',
), 'DurationAsStdSchemaProvider'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'nanos' => 
    array (
      'format' => 'int32',
      'type' => 'integer',
    ),
    'secs' => 
    array (
      'format' => 'int64',
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'secs',
    1 => 'nanos',
  ),
  'type' => 'object',
), 'DurationAsStdSchemaProvider');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
