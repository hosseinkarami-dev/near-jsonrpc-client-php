<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class RpcReceiptToTxErrorWindowTooLargeInfo implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var int|string
         */
        public int|string $maximum,
        /**
         * @var int|string
         */
        public int|string $requested,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->maximum, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'maximum');
        \Near\JsonRpc\Models\TypeGuard::assert($this->requested, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'requested');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcReceiptToTxErrorWindowTooLargeInfo.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('requested', $data)) throw new \InvalidArgumentException('Missing required field: requested');
        if (!array_key_exists('maximum', $data)) throw new \InvalidArgumentException('Missing required field: maximum');
        $extra = array_diff_key($data, array (
  'maximum' => true,
  'requested' => true,
));
        return new self(
            maximum: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['maximum'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'maximum'),
            requested: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['requested'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'requested'),
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
        $data['maximum'] = $this->maximum;
        $data['requested'] = $this->requested;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'maximum' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'requested' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'requested',
    1 => 'maximum',
  ),
  'type' => 'object',
), 'RpcReceiptToTxErrorWindowTooLargeInfo'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'maximum' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'requested' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'requested',
    1 => 'maximum',
  ),
  'type' => 'object',
), 'RpcReceiptToTxErrorWindowTooLargeInfo');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
