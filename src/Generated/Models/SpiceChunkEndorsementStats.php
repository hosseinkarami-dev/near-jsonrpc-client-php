<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Per-validator chunk endorsement stats accumulated over a spice epoch,
 * indexed by the current epoch's validator id. Carried on the last block of
 * the epoch (see `BlockHeaderInnerRestV8`) and consumed by reward and kickout.
 */
final readonly class SpiceChunkEndorsementStats implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var int
         */
        public int $expected,
        /**
         * @var int
         */
        public int $produced,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->expected, array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'expected');
        \Near\JsonRpc\Models\TypeGuard::assert($this->produced, array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'produced');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for SpiceChunkEndorsementStats.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('produced', $data)) throw new \InvalidArgumentException('Missing required field: produced');
        if (!array_key_exists('expected', $data)) throw new \InvalidArgumentException('Missing required field: expected');
        $extra = array_diff_key($data, array (
  'expected' => true,
  'produced' => true,
));
        return new self(
            expected: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['expected'], array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'expected'),
            produced: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['produced'], array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'produced'),
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
        $data['expected'] = $this->expected;
        $data['produced'] = $this->produced;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'expected' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'produced' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'produced',
    1 => 'expected',
  ),
  'type' => 'object',
), 'SpiceChunkEndorsementStats'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'expected' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'produced' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'produced',
    1 => 'expected',
  ),
  'type' => 'object',
), 'SpiceChunkEndorsementStats');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
