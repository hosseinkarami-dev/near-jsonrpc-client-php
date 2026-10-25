<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Iterator index `iterator_index` does not exist
 */
final readonly class HostErrorInvalidIteratorIndex implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\HostErrorInvalidIteratorIndexPayload
         */
        public \Near\JsonRpc\Generated\Models\HostErrorInvalidIteratorIndexPayload $invalidIteratorIndex
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->invalidIteratorIndex, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorInvalidIteratorIndexPayload',
  'nullable' => false,
), 'InvalidIteratorIndex');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for HostErrorInvalidIteratorIndex.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('InvalidIteratorIndex', $data)) throw new \InvalidArgumentException('Missing required field: InvalidIteratorIndex');
        $unknown = array_diff_key($data, array (
  'InvalidIteratorIndex' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in HostErrorInvalidIteratorIndex.');
        return new self(
            invalidIteratorIndex: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['InvalidIteratorIndex'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorInvalidIteratorIndexPayload',
  'nullable' => false,
), 'InvalidIteratorIndex')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['InvalidIteratorIndex'] = $this->invalidIteratorIndex;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'InvalidIteratorIndex' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorInvalidIteratorIndexPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'InvalidIteratorIndex',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'InvalidIteratorIndex',
    'tag' => 'InvalidIteratorIndex',
    'payload' => 'HostErrorInvalidIteratorIndexPayload',
  ),
), 'HostErrorInvalidIteratorIndex'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'InvalidIteratorIndex' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorInvalidIteratorIndexPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'InvalidIteratorIndex',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'InvalidIteratorIndex',
    'tag' => 'InvalidIteratorIndex',
    'payload' => 'HostErrorInvalidIteratorIndexPayload',
  ),
), 'HostErrorInvalidIteratorIndex');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
