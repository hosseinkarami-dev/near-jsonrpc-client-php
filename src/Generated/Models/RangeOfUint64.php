<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class RangeOfUint64 implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var int|string
         */
        public int|string $end,
        /**
         * @var int|string
         */
        public int|string $start,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->end, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'end');
        \Near\JsonRpc\Models\TypeGuard::assert($this->start, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'start');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RangeOfUint64.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('start', $data)) throw new \InvalidArgumentException('Missing required field: start');
        if (!array_key_exists('end', $data)) throw new \InvalidArgumentException('Missing required field: end');
        $extra = array_diff_key($data, array (
  'end' => true,
  'start' => true,
));
        return new self(
            end: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['end'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'end'),
            start: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['start'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'start'),
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
        $data['end'] = $this->end;
        $data['start'] = $this->start;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'end' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'start' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'start',
    1 => 'end',
  ),
  'type' => 'object',
), 'Range_of_uint64'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'end' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'start' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'start',
    1 => 'end',
  ),
  'type' => 'object',
), 'Range_of_uint64');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
