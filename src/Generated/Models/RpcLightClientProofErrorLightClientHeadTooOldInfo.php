<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class RpcLightClientProofErrorLightClientHeadTooOldInfo implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var int|string
         */
        public int|string $certifyingBlockHeight,
        /**
         * @var \Near\JsonRpc\Generated\Models\SpiceChunkId
         */
        public \Near\JsonRpc\Generated\Models\SpiceChunkId $chunkId,
        /**
         * @var int|string
         */
        public int|string $headHeight,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->certifyingBlockHeight, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'certifying_block_height');
        \Near\JsonRpc\Models\TypeGuard::assert($this->chunkId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SpiceChunkId',
  'nullable' => false,
), 'chunk_id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->headHeight, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'head_height');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcLightClientProofErrorLightClientHeadTooOldInfo.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('chunk_id', $data)) throw new \InvalidArgumentException('Missing required field: chunk_id');
        if (!array_key_exists('certifying_block_height', $data)) throw new \InvalidArgumentException('Missing required field: certifying_block_height');
        if (!array_key_exists('head_height', $data)) throw new \InvalidArgumentException('Missing required field: head_height');
        $extra = array_diff_key($data, array (
  'certifying_block_height' => true,
  'chunk_id' => true,
  'head_height' => true,
));
        return new self(
            certifyingBlockHeight: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['certifying_block_height'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'certifying_block_height'),
            chunkId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['chunk_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SpiceChunkId',
  'nullable' => false,
), 'chunk_id'),
            headHeight: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['head_height'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'head_height'),
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
        $data['certifying_block_height'] = $this->certifyingBlockHeight;
        $data['chunk_id'] = $this->chunkId;
        $data['head_height'] = $this->headHeight;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'certifying_block_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'chunk_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SpiceChunkId',
      'nullable' => false,
    ),
    'head_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'chunk_id',
    1 => 'certifying_block_height',
    2 => 'head_height',
  ),
  'type' => 'object',
), 'RpcLightClientProofErrorLightClientHeadTooOldInfo'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'certifying_block_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'chunk_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SpiceChunkId',
      'nullable' => false,
    ),
    'head_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'chunk_id',
    1 => 'certifying_block_height',
    2 => 'head_height',
  ),
  'type' => 'object',
), 'RpcLightClientProofErrorLightClientHeadTooOldInfo');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
