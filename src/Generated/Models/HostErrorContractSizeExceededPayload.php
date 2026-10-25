<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class HostErrorContractSizeExceededPayload implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var int|string
         */
        public int|string $limit,
        /**
         * @var int|string
         */
        public int|string $size,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->limit, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'limit');
        \Near\JsonRpc\Models\TypeGuard::assert($this->size, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'size');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for HostErrorContractSizeExceededPayload.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('size', $data)) throw new \InvalidArgumentException('Missing required field: size');
        if (!array_key_exists('limit', $data)) throw new \InvalidArgumentException('Missing required field: limit');
        $extra = array_diff_key($data, array (
  'limit' => true,
  'size' => true,
));
        return new self(
            limit: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['limit'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'limit'),
            size: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['size'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'size'),
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
        $data['limit'] = $this->limit;
        $data['size'] = $this->size;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'limit' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'size' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'size',
    1 => 'limit',
  ),
  'type' => 'object',
), 'HostErrorContractSizeExceededPayload'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'limit' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'size' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'size',
    1 => 'limit',
  ),
  'type' => 'object',
), 'HostErrorContractSizeExceededPayload');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
