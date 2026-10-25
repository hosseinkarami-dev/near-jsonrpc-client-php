<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Contains the split storage information.
 */
final readonly class RpcSplitStorageInfoResponse implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<int|string|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $coldHeadHeight = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<int|string|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $finalHeadHeight = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<int|string|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $headHeight = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<string|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $hotDbKind = new \Near\JsonRpc\Models\OptionalValue(),
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        if ($this->coldHeadHeight->present) \Near\JsonRpc\Models\TypeGuard::assert($this->coldHeadHeight->value, array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'cold_head_height');
        if ($this->finalHeadHeight->present) \Near\JsonRpc\Models\TypeGuard::assert($this->finalHeadHeight->value, array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'final_head_height');
        if ($this->headHeight->present) \Near\JsonRpc\Models\TypeGuard::assert($this->headHeight->value, array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'head_height');
        if ($this->hotDbKind->present) \Near\JsonRpc\Models\TypeGuard::assert($this->hotDbKind->value, array (
  'nullable' => true,
  'type' => 'string',
), 'hot_db_kind');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcSplitStorageInfoResponse.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        $extra = array_diff_key($data, array (
  'cold_head_height' => true,
  'final_head_height' => true,
  'head_height' => true,
  'hot_db_kind' => true,
));
        return new self(
            coldHeadHeight: array_key_exists('cold_head_height', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['cold_head_height'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'cold_head_height')) : new \Near\JsonRpc\Models\OptionalValue(),
            finalHeadHeight: array_key_exists('final_head_height', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['final_head_height'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'final_head_height')) : new \Near\JsonRpc\Models\OptionalValue(),
            headHeight: array_key_exists('head_height', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['head_height'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'head_height')) : new \Near\JsonRpc\Models\OptionalValue(),
            hotDbKind: array_key_exists('hot_db_kind', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['hot_db_kind'], array (
  'nullable' => true,
  'type' => 'string',
), 'hot_db_kind')) : new \Near\JsonRpc\Models\OptionalValue(),
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
        if ($this->coldHeadHeight->present) $data['cold_head_height'] = $this->coldHeadHeight->value;
        if ($this->finalHeadHeight->present) $data['final_head_height'] = $this->finalHeadHeight->value;
        if ($this->headHeight->present) $data['head_height'] = $this->headHeight->value;
        if ($this->hotDbKind->present) $data['hot_db_kind'] = $this->hotDbKind->value;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'cold_head_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'final_head_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'head_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'hot_db_kind' => 
    array (
      'nullable' => true,
      'type' => 'string',
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'RpcSplitStorageInfoResponse'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'cold_head_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'final_head_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'head_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'hot_db_kind' => 
    array (
      'nullable' => true,
      'type' => 'string',
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'RpcSplitStorageInfoResponse');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
