<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class RpcLightClientBlockProofResponse implements \Near\JsonRpc\Models\ModelJsonSerializable
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
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcLightClientBlockProofResponse.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('block_header_lite', $data)) throw new \InvalidArgumentException('Missing required field: block_header_lite');
        if (!array_key_exists('block_proof', $data)) throw new \InvalidArgumentException('Missing required field: block_proof');
        $extra = array_diff_key($data, array (
  'block_header_lite' => true,
  'block_proof' => true,
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
  ),
  'required' => 
  array (
    0 => 'block_header_lite',
    1 => 'block_proof',
  ),
  'type' => 'object',
), 'RpcLightClientBlockProofResponse'));
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
  ),
  'required' => 
  array (
    0 => 'block_header_lite',
    1 => 'block_proof',
  ),
  'type' => 'object',
), 'RpcLightClientBlockProofResponse');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
