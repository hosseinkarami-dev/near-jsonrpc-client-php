<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Config for the Chunk Distribution Network feature.
 * This allows nodes to push and pull chunks from a central stream.
 * The two benefits of this approach are: (1) less request/response traffic
 * on the peer-to-peer network and (2) lower latency for RPC nodes indexing the chain.
 */
final readonly class ChunkDistributionNetworkConfig implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var bool|null
         */
        public bool|null $enabled = null,
        /**
         * @var \Near\JsonRpc\Generated\Models\ChunkDistributionUris|null
         */
        public \Near\JsonRpc\Generated\Models\ChunkDistributionUris|null $uris = null,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        if ($this->enabled !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->enabled, array (
  'type' => 'boolean',
), 'enabled');
        if ($this->uris !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->uris, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ChunkDistributionUris',
  'nullable' => false,
), 'uris');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ChunkDistributionNetworkConfig.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        $extra = array_diff_key($data, array (
  'enabled' => true,
  'uris' => true,
));
        return new self(
            enabled: array_key_exists('enabled', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['enabled'], array (
  'type' => 'boolean',
), 'enabled') : null,
            uris: array_key_exists('uris', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['uris'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ChunkDistributionUris',
  'nullable' => false,
), 'uris') : null,
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
        if ($this->enabled !== null) $data['enabled'] = $this->enabled;
        if ($this->uris !== null) $data['uris'] = $this->uris;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'enabled' => 
    array (
      'type' => 'boolean',
    ),
    'uris' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ChunkDistributionUris',
      'nullable' => false,
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'ChunkDistributionNetworkConfig'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'enabled' => 
    array (
      'type' => 'boolean',
    ),
    'uris' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ChunkDistributionUris',
      'nullable' => false,
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'ChunkDistributionNetworkConfig');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
