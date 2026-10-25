<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class LightClientBlockLiteView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\BlockHeaderInnerLiteView
         */
        public \Near\JsonRpc\Generated\Models\BlockHeaderInnerLiteView $innerLite,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $innerRestHash,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $prevBlockHash,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->innerLite, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockHeaderInnerLiteView',
  'nullable' => false,
), 'inner_lite');
        \Near\JsonRpc\Models\TypeGuard::assert($this->innerRestHash, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'inner_rest_hash');
        \Near\JsonRpc\Models\TypeGuard::assert($this->prevBlockHash, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'prev_block_hash');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for LightClientBlockLiteView.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('prev_block_hash', $data)) throw new \InvalidArgumentException('Missing required field: prev_block_hash');
        if (!array_key_exists('inner_rest_hash', $data)) throw new \InvalidArgumentException('Missing required field: inner_rest_hash');
        if (!array_key_exists('inner_lite', $data)) throw new \InvalidArgumentException('Missing required field: inner_lite');
        $extra = array_diff_key($data, array (
  'inner_lite' => true,
  'inner_rest_hash' => true,
  'prev_block_hash' => true,
));
        return new self(
            innerLite: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['inner_lite'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockHeaderInnerLiteView',
  'nullable' => false,
), 'inner_lite'),
            innerRestHash: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['inner_rest_hash'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'inner_rest_hash'),
            prevBlockHash: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['prev_block_hash'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'prev_block_hash'),
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
        $data['inner_lite'] = $this->innerLite;
        $data['inner_rest_hash'] = $this->innerRestHash;
        $data['prev_block_hash'] = $this->prevBlockHash;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'inner_lite' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockHeaderInnerLiteView',
      'nullable' => false,
    ),
    'inner_rest_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'prev_block_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'prev_block_hash',
    1 => 'inner_rest_hash',
    2 => 'inner_lite',
  ),
  'type' => 'object',
), 'LightClientBlockLiteView'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'inner_lite' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockHeaderInnerLiteView',
      'nullable' => false,
    ),
    'inner_rest_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'prev_block_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'prev_block_hash',
    1 => 'inner_rest_hash',
    2 => 'inner_lite',
  ),
  'type' => 'object',
), 'LightClientBlockLiteView');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
