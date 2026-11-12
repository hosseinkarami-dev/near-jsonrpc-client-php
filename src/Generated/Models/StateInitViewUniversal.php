<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class StateInitViewUniversal implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\RawStateInit
         */
        public \Near\JsonRpc\Generated\Models\RawStateInit $universal
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->universal, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RawStateInit',
  'nullable' => false,
), 'universal');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for StateInitViewUniversal.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('universal', $data)) throw new \InvalidArgumentException('Missing required field: universal');
        $unknown = array_diff_key($data, array (
  'universal' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in StateInitViewUniversal.');
        return new self(
            universal: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['universal'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RawStateInit',
  'nullable' => false,
), 'universal')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['universal'] = $this->universal;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'universal' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RawStateInit',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'universal',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'universal',
    'tag' => 'universal',
    'payload' => 'RawStateInit',
  ),
), 'StateInitViewUniversal'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'universal' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RawStateInit',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'universal',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'universal',
    'tag' => 'universal',
    'payload' => 'RawStateInit',
  ),
), 'StateInitViewUniversal');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
