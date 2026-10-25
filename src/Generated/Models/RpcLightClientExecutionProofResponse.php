<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class RpcLightClientExecutionProofResponse implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\LightClientBlockLiteView
         */
        public \Near\JsonRpc\Generated\Models\LightClientBlockLiteView $blockHeaderLite,
        /**
         * @var list<\Near\JsonRpc\Generated\Models\MerklePathItem>
         */
        public array $blockProof,
        /**
         * @var \Near\JsonRpc\Generated\Models\ExecutionOutcomeWithIdView
         */
        public \Near\JsonRpc\Generated\Models\ExecutionOutcomeWithIdView $outcomeProof,
        /**
         * @var list<\Near\JsonRpc\Generated\Models\MerklePathItem>
         */
        public array $outcomeRootProof,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->blockHeaderLite, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\LightClientBlockLiteView',
  'nullable' => false,
), 'block_header_lite');
        \Near\JsonRpc\Models\TypeGuard::assert($this->blockProof, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MerklePathItem',
    'nullable' => false,
  ),
  'type' => 'array',
), 'block_proof');
        \Near\JsonRpc\Models\TypeGuard::assert($this->outcomeProof, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExecutionOutcomeWithIdView',
  'nullable' => false,
), 'outcome_proof');
        \Near\JsonRpc\Models\TypeGuard::assert($this->outcomeRootProof, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MerklePathItem',
    'nullable' => false,
  ),
  'type' => 'array',
), 'outcome_root_proof');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcLightClientExecutionProofResponse.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('outcome_proof', $data)) throw new \InvalidArgumentException('Missing required field: outcome_proof');
        if (!array_key_exists('outcome_root_proof', $data)) throw new \InvalidArgumentException('Missing required field: outcome_root_proof');
        if (!array_key_exists('block_header_lite', $data)) throw new \InvalidArgumentException('Missing required field: block_header_lite');
        if (!array_key_exists('block_proof', $data)) throw new \InvalidArgumentException('Missing required field: block_proof');
        $extra = array_diff_key($data, array (
  'block_header_lite' => true,
  'block_proof' => true,
  'outcome_proof' => true,
  'outcome_root_proof' => true,
));
        return new self(
            blockHeaderLite: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['block_header_lite'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\LightClientBlockLiteView',
  'nullable' => false,
), 'block_header_lite'),
            blockProof: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['block_proof'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MerklePathItem',
    'nullable' => false,
  ),
  'type' => 'array',
), 'block_proof'),
            outcomeProof: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['outcome_proof'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExecutionOutcomeWithIdView',
  'nullable' => false,
), 'outcome_proof'),
            outcomeRootProof: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['outcome_root_proof'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MerklePathItem',
    'nullable' => false,
  ),
  'type' => 'array',
), 'outcome_root_proof'),
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
        $data['block_header_lite'] = $this->blockHeaderLite;
        $data['block_proof'] = $this->blockProof;
        $data['outcome_proof'] = $this->outcomeProof;
        $data['outcome_root_proof'] = $this->outcomeRootProof;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'block_header_lite' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\LightClientBlockLiteView',
      'nullable' => false,
    ),
    'block_proof' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MerklePathItem',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'outcome_proof' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExecutionOutcomeWithIdView',
      'nullable' => false,
    ),
    'outcome_root_proof' => 
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
    0 => 'outcome_proof',
    1 => 'outcome_root_proof',
    2 => 'block_header_lite',
    3 => 'block_proof',
  ),
  'type' => 'object',
), 'RpcLightClientExecutionProofResponse'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'block_header_lite' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\LightClientBlockLiteView',
      'nullable' => false,
    ),
    'block_proof' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MerklePathItem',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'outcome_proof' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExecutionOutcomeWithIdView',
      'nullable' => false,
    ),
    'outcome_root_proof' => 
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
    0 => 'outcome_proof',
    1 => 'outcome_root_proof',
    2 => 'block_header_lite',
    3 => 'block_proof',
  ),
  'type' => 'object',
), 'RpcLightClientExecutionProofResponse');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
