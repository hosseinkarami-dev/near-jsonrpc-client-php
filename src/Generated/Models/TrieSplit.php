<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The result of splitting a memtrie into two possibly even parts, according to `memory_usage`
 * stored in the trie nodes.
 *
 * **NOTE: This is an artificial value calculated according to `TRIE_COST`. Hence, it does not
 * represent actual memory allocation, but the split ratio should be roughly consistent with that.**
 */
final readonly class TrieSplit implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * Account ID representing the split path
         *
         * @var \Near\JsonRpc\Generated\Models\AccountId
         */
        public \Near\JsonRpc\Generated\Models\AccountId $boundaryAccount,
        /**
         * Total `memory_usage` of the left part (excluding the split path)
         *
         * @var int|string
         */
        public int|string $leftMemory,
        /**
         * Total `memory_usage` of the right part (including the split path)
         *
         * @var int|string
         */
        public int|string $rightMemory,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->boundaryAccount, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'boundary_account');
        \Near\JsonRpc\Models\TypeGuard::assert($this->leftMemory, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'left_memory');
        \Near\JsonRpc\Models\TypeGuard::assert($this->rightMemory, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'right_memory');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for TrieSplit.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('boundary_account', $data)) throw new \InvalidArgumentException('Missing required field: boundary_account');
        if (!array_key_exists('left_memory', $data)) throw new \InvalidArgumentException('Missing required field: left_memory');
        if (!array_key_exists('right_memory', $data)) throw new \InvalidArgumentException('Missing required field: right_memory');
        $extra = array_diff_key($data, array (
  'boundary_account' => true,
  'left_memory' => true,
  'right_memory' => true,
));
        return new self(
            boundaryAccount: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['boundary_account'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'boundary_account'),
            leftMemory: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['left_memory'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'left_memory'),
            rightMemory: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['right_memory'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'right_memory'),
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
        $data['boundary_account'] = $this->boundaryAccount;
        $data['left_memory'] = $this->leftMemory;
        $data['right_memory'] = $this->rightMemory;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'boundary_account' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
    'left_memory' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'right_memory' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'boundary_account',
    1 => 'left_memory',
    2 => 'right_memory',
  ),
  'type' => 'object',
), 'TrieSplit'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'boundary_account' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
    'left_memory' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'right_memory' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'boundary_account',
    1 => 'left_memory',
    2 => 'right_memory',
  ),
  'type' => 'object',
), 'TrieSplit');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
