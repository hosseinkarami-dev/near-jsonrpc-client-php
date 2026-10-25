<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * URIs for the Chunk Distribution Network feature.
 */
final readonly class ChunkDistributionUris implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * URI for pulling chunks from the stream.
         *
         * @var string|null
         */
        public string|null $get = null,
        /**
         * URI for publishing chunks to the stream.
         *
         * @var string|null
         */
        public string|null $set = null,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        if ($this->get !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->get, array (
  'type' => 'string',
), 'get');
        if ($this->set !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->set, array (
  'type' => 'string',
), 'set');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ChunkDistributionUris.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        $extra = array_diff_key($data, array (
  'get' => true,
  'set' => true,
));
        return new self(
            get: array_key_exists('get', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['get'], array (
  'type' => 'string',
), 'get') : null,
            set: array_key_exists('set', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['set'], array (
  'type' => 'string',
), 'set') : null,
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
        if ($this->get !== null) $data['get'] = $this->get;
        if ($this->set !== null) $data['set'] = $this->set;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'get' => 
    array (
      'type' => 'string',
    ),
    'set' => 
    array (
      'type' => 'string',
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'ChunkDistributionUris'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'get' => 
    array (
      'type' => 'string',
    ),
    'set' => 
    array (
      'type' => 'string',
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'ChunkDistributionUris');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
