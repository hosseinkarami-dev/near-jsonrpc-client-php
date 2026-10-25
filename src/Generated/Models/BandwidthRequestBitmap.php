<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Bitmap which describes which values from the predefined list are being requested.
 * The nth bit is set to 1 when the nth value from the list is being requested.
 */
final readonly class BandwidthRequestBitmap implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var list<int>
         */
        public array $data,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->data, array (
  'items' => 
  array (
    'format' => 'uint8',
    'maximum' => 255,
    'minimum' => 0,
    'type' => 'integer',
  ),
  'maxItems' => 5,
  'minItems' => 5,
  'type' => 'array',
), 'data');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for BandwidthRequestBitmap.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('data', $data)) throw new \InvalidArgumentException('Missing required field: data');
        $extra = array_diff_key($data, array (
  'data' => true,
));
        return new self(
            data: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['data'], array (
  'items' => 
  array (
    'format' => 'uint8',
    'maximum' => 255,
    'minimum' => 0,
    'type' => 'integer',
  ),
  'maxItems' => 5,
  'minItems' => 5,
  'type' => 'array',
), 'data'),
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
        $data['data'] = $this->data;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'data' => 
    array (
      'items' => 
      array (
        'format' => 'uint8',
        'maximum' => 255,
        'minimum' => 0,
        'type' => 'integer',
      ),
      'maxItems' => 5,
      'minItems' => 5,
      'type' => 'array',
    ),
  ),
  'required' => 
  array (
    0 => 'data',
  ),
  'type' => 'object',
), 'BandwidthRequestBitmap'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'data' => 
    array (
      'items' => 
      array (
        'format' => 'uint8',
        'maximum' => 255,
        'minimum' => 0,
        'type' => 'integer',
      ),
      'maxItems' => 5,
      'minItems' => 5,
      'type' => 'array',
    ),
  ),
  'required' => 
  array (
    0 => 'data',
  ),
  'type' => 'object',
), 'BandwidthRequestBitmap');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
