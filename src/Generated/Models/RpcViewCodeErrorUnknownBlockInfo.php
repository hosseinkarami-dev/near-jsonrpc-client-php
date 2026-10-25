<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class RpcViewCodeErrorUnknownBlockInfo implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\BlockReference
         */
        public \Near\JsonRpc\Generated\Models\BlockReference $blockReference,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->blockReference, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockReference',
  'nullable' => false,
), 'block_reference');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcViewCodeErrorUnknownBlockInfo.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('block_reference', $data)) throw new \InvalidArgumentException('Missing required field: block_reference');
        $extra = array_diff_key($data, array (
  'block_reference' => true,
));
        return new self(
            blockReference: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['block_reference'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockReference',
  'nullable' => false,
), 'block_reference'),
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
        $data['block_reference'] = $this->blockReference;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'block_reference' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockReference',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'block_reference',
  ),
  'type' => 'object',
), 'RpcViewCodeErrorUnknownBlockInfo'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'block_reference' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockReference',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'block_reference',
  ),
  'type' => 'object',
), 'RpcViewCodeErrorUnknownBlockInfo');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
