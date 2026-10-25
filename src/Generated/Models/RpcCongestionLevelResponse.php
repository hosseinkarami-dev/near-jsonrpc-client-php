<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class RpcCongestionLevelResponse implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var int|float
         */
        public int|float $congestionLevel,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->congestionLevel, array (
  'format' => 'double',
  'type' => 'number',
), 'congestion_level');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcCongestionLevelResponse.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('congestion_level', $data)) throw new \InvalidArgumentException('Missing required field: congestion_level');
        $extra = array_diff_key($data, array (
  'congestion_level' => true,
));
        return new self(
            congestionLevel: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['congestion_level'], array (
  'format' => 'double',
  'type' => 'number',
), 'congestion_level'),
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
        $data['congestion_level'] = $this->congestionLevel;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'congestion_level' => 
    array (
      'format' => 'double',
      'type' => 'number',
    ),
  ),
  'required' => 
  array (
    0 => 'congestion_level',
  ),
  'type' => 'object',
), 'RpcCongestionLevelResponse'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'congestion_level' => 
    array (
      'format' => 'double',
      'type' => 'number',
    ),
  ),
  'required' => 
  array (
    0 => 'congestion_level',
  ),
  'type' => 'object',
), 'RpcCongestionLevelResponse');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
