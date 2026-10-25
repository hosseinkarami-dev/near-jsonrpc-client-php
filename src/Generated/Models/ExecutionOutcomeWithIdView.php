<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class ExecutionOutcomeWithIdView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $blockHash,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $id,
        /**
         * @var \Near\JsonRpc\Generated\Models\ExecutionOutcomeView
         */
        public \Near\JsonRpc\Generated\Models\ExecutionOutcomeView $outcome,
        /**
         * @var list<\Near\JsonRpc\Generated\Models\MerklePathItem>
         */
        public array $proof,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->blockHash, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'block_hash');
        \Near\JsonRpc\Models\TypeGuard::assert($this->id, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->outcome, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExecutionOutcomeView',
  'nullable' => false,
), 'outcome');
        \Near\JsonRpc\Models\TypeGuard::assert($this->proof, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MerklePathItem',
    'nullable' => false,
  ),
  'type' => 'array',
), 'proof');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ExecutionOutcomeWithIdView.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('proof', $data)) throw new \InvalidArgumentException('Missing required field: proof');
        if (!array_key_exists('block_hash', $data)) throw new \InvalidArgumentException('Missing required field: block_hash');
        if (!array_key_exists('id', $data)) throw new \InvalidArgumentException('Missing required field: id');
        if (!array_key_exists('outcome', $data)) throw new \InvalidArgumentException('Missing required field: outcome');
        $extra = array_diff_key($data, array (
  'block_hash' => true,
  'id' => true,
  'outcome' => true,
  'proof' => true,
));
        return new self(
            blockHash: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['block_hash'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'block_hash'),
            id: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'id'),
            outcome: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['outcome'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExecutionOutcomeView',
  'nullable' => false,
), 'outcome'),
            proof: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['proof'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MerklePathItem',
    'nullable' => false,
  ),
  'type' => 'array',
), 'proof'),
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
        $data['block_hash'] = $this->blockHash;
        $data['id'] = $this->id;
        $data['outcome'] = $this->outcome;
        $data['proof'] = $this->proof;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'block_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'outcome' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExecutionOutcomeView',
      'nullable' => false,
    ),
    'proof' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MerklePathItem',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
  ),
  'required' => 
  array (
    0 => 'proof',
    1 => 'block_hash',
    2 => 'id',
    3 => 'outcome',
  ),
  'type' => 'object',
), 'ExecutionOutcomeWithIdView'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'block_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'outcome' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExecutionOutcomeView',
      'nullable' => false,
    ),
    'proof' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MerklePathItem',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
  ),
  'required' => 
  array (
    0 => 'proof',
    1 => 'block_hash',
    2 => 'id',
    3 => 'outcome',
  ),
  'type' => 'object',
), 'ExecutionOutcomeWithIdView');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
