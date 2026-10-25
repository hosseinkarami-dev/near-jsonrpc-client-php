<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class ShardLayoutV32 implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ShardLayoutV3
         */
        public \Near\JsonRpc\Generated\Models\ShardLayoutV3 $v3
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->v3, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardLayoutV3',
  'nullable' => false,
), 'V3');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ShardLayoutV32.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('V3', $data)) throw new \InvalidArgumentException('Missing required field: V3');
        $unknown = array_diff_key($data, array (
  'V3' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ShardLayoutV32.');
        return new self(
            v3: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['V3'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardLayoutV3',
  'nullable' => false,
), 'V3')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['V3'] = $this->v3;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'V3' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardLayoutV3',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'V3',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'V3',
    'tag' => 'V3',
    'payload' => 'ShardLayoutV3',
  ),
), 'ShardLayoutV32'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'V3' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardLayoutV3',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'V3',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'V3',
    'tag' => 'V3',
    'payload' => 'ShardLayoutV3',
  ),
), 'ShardLayoutV32');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
