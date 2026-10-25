<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * `BandwidthRequest` describes the size of receipts that a shard would like to send to another shard.
 * When a shard wants to send a lot of receipts to another shard, it needs to create a request and wait
 * for a bandwidth grant from the bandwidth scheduler.
 */
final readonly class BandwidthRequest implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * Bitmap which describes what values of bandwidth are requested.
         *
         * @var \Near\JsonRpc\Generated\Models\BandwidthRequestBitmap
         */
        public \Near\JsonRpc\Generated\Models\BandwidthRequestBitmap $requestedValuesBitmap,
        /**
         * Requesting bandwidth to this shard.
         *
         * @var int
         */
        public int $toShard,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->requestedValuesBitmap, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BandwidthRequestBitmap',
  'nullable' => false,
), 'requested_values_bitmap');
        \Near\JsonRpc\Models\TypeGuard::assert($this->toShard, array (
  'format' => 'uint16',
  'maximum' => 65535,
  'minimum' => 0,
  'type' => 'integer',
), 'to_shard');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for BandwidthRequest.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('to_shard', $data)) throw new \InvalidArgumentException('Missing required field: to_shard');
        if (!array_key_exists('requested_values_bitmap', $data)) throw new \InvalidArgumentException('Missing required field: requested_values_bitmap');
        $extra = array_diff_key($data, array (
  'requested_values_bitmap' => true,
  'to_shard' => true,
));
        return new self(
            requestedValuesBitmap: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['requested_values_bitmap'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BandwidthRequestBitmap',
  'nullable' => false,
), 'requested_values_bitmap'),
            toShard: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['to_shard'], array (
  'format' => 'uint16',
  'maximum' => 65535,
  'minimum' => 0,
  'type' => 'integer',
), 'to_shard'),
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
        $data['requested_values_bitmap'] = $this->requestedValuesBitmap;
        $data['to_shard'] = $this->toShard;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'requested_values_bitmap' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BandwidthRequestBitmap',
      'nullable' => false,
    ),
    'to_shard' => 
    array (
      'format' => 'uint16',
      'maximum' => 65535,
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'to_shard',
    1 => 'requested_values_bitmap',
  ),
  'type' => 'object',
), 'BandwidthRequest'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'requested_values_bitmap' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BandwidthRequestBitmap',
      'nullable' => false,
    ),
    'to_shard' => 
    array (
      'format' => 'uint16',
      'maximum' => 65535,
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'to_shard',
    1 => 'requested_values_bitmap',
  ),
  'type' => 'object',
), 'BandwidthRequest');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
