<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Tracks arbitrary shards.
 */
final readonly class TrackedShardsConfigShards implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var list<\Near\JsonRpc\Generated\Models\ShardUId>
         */
        public array $shards
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->shards, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardUId',
    'nullable' => false,
  ),
  'type' => 'array',
), 'Shards');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for TrackedShardsConfigShards.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('Shards', $data)) throw new \InvalidArgumentException('Missing required field: Shards');
        $unknown = array_diff_key($data, array (
  'Shards' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in TrackedShardsConfigShards.');
        return new self(
            shards: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['Shards'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardUId',
    'nullable' => false,
  ),
  'type' => 'array',
), 'Shards')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['Shards'] = $this->shards;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'additionalProperties' => false,
  'properties' => 
  array (
    'Shards' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardUId',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
  ),
  'required' => 
  array (
    0 => 'Shards',
  ),
  'type' => 'object',
  'x-php-union' => 
  array (
    'label' => 'Shards',
  ),
), 'TrackedShardsConfigShards'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'additionalProperties' => false,
  'properties' => 
  array (
    'Shards' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardUId',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
  ),
  'required' => 
  array (
    0 => 'Shards',
  ),
  'type' => 'object',
  'x-php-union' => 
  array (
    'label' => 'Shards',
  ),
), 'TrackedShardsConfigShards');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
