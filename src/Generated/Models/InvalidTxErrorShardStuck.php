<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The receiver shard of the transaction missed several chunks and rejects
 * new transaction until it can make progress again.
 */
final readonly class InvalidTxErrorShardStuck implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\InvalidTxErrorShardStuckPayload
         */
        public \Near\JsonRpc\Generated\Models\InvalidTxErrorShardStuckPayload $shardStuck
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->shardStuck, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorShardStuckPayload',
  'nullable' => false,
), 'ShardStuck');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for InvalidTxErrorShardStuck.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('ShardStuck', $data)) throw new \InvalidArgumentException('Missing required field: ShardStuck');
        $unknown = array_diff_key($data, array (
  'ShardStuck' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in InvalidTxErrorShardStuck.');
        return new self(
            shardStuck: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['ShardStuck'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorShardStuckPayload',
  'nullable' => false,
), 'ShardStuck')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['ShardStuck'] = $this->shardStuck;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'ShardStuck' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorShardStuckPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'ShardStuck',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'ShardStuck',
    'tag' => 'ShardStuck',
    'payload' => 'InvalidTxErrorShardStuckPayload',
  ),
), 'InvalidTxErrorShardStuck'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'ShardStuck' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorShardStuckPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'ShardStuck',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'ShardStuck',
    'tag' => 'ShardStuck',
    'payload' => 'InvalidTxErrorShardStuckPayload',
  ),
), 'InvalidTxErrorShardStuck');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
