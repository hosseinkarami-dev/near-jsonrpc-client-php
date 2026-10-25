<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class RpcQueryErrorNoGlobalContractCodeInfo implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $blockHash,
        /**
         * @var int|string
         */
        public int|string $blockHeight,
        /**
         * @var \Near\JsonRpc\Generated\Models\GlobalContractIdentifier
         */
        public \Near\JsonRpc\Generated\Models\GlobalContractIdentifier $identifier,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->blockHash, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'block_hash');
        \Near\JsonRpc\Models\TypeGuard::assert($this->blockHeight, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'block_height');
        \Near\JsonRpc\Models\TypeGuard::assert($this->identifier, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GlobalContractIdentifier',
  'nullable' => false,
), 'identifier');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcQueryErrorNoGlobalContractCodeInfo.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('identifier', $data)) throw new \InvalidArgumentException('Missing required field: identifier');
        if (!array_key_exists('block_height', $data)) throw new \InvalidArgumentException('Missing required field: block_height');
        if (!array_key_exists('block_hash', $data)) throw new \InvalidArgumentException('Missing required field: block_hash');
        $extra = array_diff_key($data, array (
  'block_hash' => true,
  'block_height' => true,
  'identifier' => true,
));
        return new self(
            blockHash: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['block_hash'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'block_hash'),
            blockHeight: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['block_height'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'block_height'),
            identifier: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['identifier'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GlobalContractIdentifier',
  'nullable' => false,
), 'identifier'),
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
        $data['block_height'] = $this->blockHeight;
        $data['identifier'] = $this->identifier;
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
    'block_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'identifier' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GlobalContractIdentifier',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'identifier',
    1 => 'block_height',
    2 => 'block_hash',
  ),
  'type' => 'object',
), 'RpcQueryErrorNoGlobalContractCodeInfo'));
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
    'block_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'identifier' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GlobalContractIdentifier',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'identifier',
    1 => 'block_height',
    2 => 'block_hash',
  ),
  'type' => 'object',
), 'RpcQueryErrorNoGlobalContractCodeInfo');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
