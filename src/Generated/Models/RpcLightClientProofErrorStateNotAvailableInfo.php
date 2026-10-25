<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class RpcLightClientProofErrorStateNotAvailableInfo implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\SpiceChunkId
         */
        public \Near\JsonRpc\Generated\Models\SpiceChunkId $chunkId,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->chunkId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SpiceChunkId',
  'nullable' => false,
), 'chunk_id');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcLightClientProofErrorStateNotAvailableInfo.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('chunk_id', $data)) throw new \InvalidArgumentException('Missing required field: chunk_id');
        $extra = array_diff_key($data, array (
  'chunk_id' => true,
));
        return new self(
            chunkId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['chunk_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SpiceChunkId',
  'nullable' => false,
), 'chunk_id'),
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
        $data['chunk_id'] = $this->chunkId;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'chunk_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SpiceChunkId',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'chunk_id',
  ),
  'type' => 'object',
), 'RpcLightClientProofErrorStateNotAvailableInfo'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'chunk_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SpiceChunkId',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'chunk_id',
  ),
  'type' => 'object',
), 'RpcLightClientProofErrorStateNotAvailableInfo');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
