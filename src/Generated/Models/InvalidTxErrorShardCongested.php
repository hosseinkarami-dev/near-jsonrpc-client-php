<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The receiver shard of the transaction is too congested to accept new
 * transactions at the moment.
 */
final readonly class InvalidTxErrorShardCongested implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\InvalidTxErrorShardCongestedPayload
         */
        public \Near\JsonRpc\Generated\Models\InvalidTxErrorShardCongestedPayload $shardCongested
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->shardCongested, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorShardCongestedPayload',
  'nullable' => false,
), 'ShardCongested');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for InvalidTxErrorShardCongested.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('ShardCongested', $data)) throw new \InvalidArgumentException('Missing required field: ShardCongested');
        $unknown = array_diff_key($data, array (
  'ShardCongested' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in InvalidTxErrorShardCongested.');
        return new self(
            shardCongested: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['ShardCongested'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorShardCongestedPayload',
  'nullable' => false,
), 'ShardCongested')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['ShardCongested'] = $this->shardCongested;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'ShardCongested' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorShardCongestedPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'ShardCongested',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'ShardCongested',
    'tag' => 'ShardCongested',
    'payload' => 'InvalidTxErrorShardCongestedPayload',
  ),
), 'InvalidTxErrorShardCongested'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'ShardCongested' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorShardCongestedPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'ShardCongested',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'ShardCongested',
    'tag' => 'ShardCongested',
    'payload' => 'InvalidTxErrorShardCongestedPayload',
  ),
), 'InvalidTxErrorShardCongested');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
