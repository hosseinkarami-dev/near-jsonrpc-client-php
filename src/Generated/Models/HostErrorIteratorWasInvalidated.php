<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Iterator `iterator_index` was invalidated after its creation by performing a mutable operation on trie
 */
final readonly class HostErrorIteratorWasInvalidated implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\HostErrorIteratorWasInvalidatedPayload
         */
        public \Near\JsonRpc\Generated\Models\HostErrorIteratorWasInvalidatedPayload $iteratorWasInvalidated
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->iteratorWasInvalidated, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorIteratorWasInvalidatedPayload',
  'nullable' => false,
), 'IteratorWasInvalidated');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for HostErrorIteratorWasInvalidated.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('IteratorWasInvalidated', $data)) throw new \InvalidArgumentException('Missing required field: IteratorWasInvalidated');
        $unknown = array_diff_key($data, array (
  'IteratorWasInvalidated' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in HostErrorIteratorWasInvalidated.');
        return new self(
            iteratorWasInvalidated: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['IteratorWasInvalidated'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorIteratorWasInvalidatedPayload',
  'nullable' => false,
), 'IteratorWasInvalidated')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['IteratorWasInvalidated'] = $this->iteratorWasInvalidated;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'IteratorWasInvalidated' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorIteratorWasInvalidatedPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'IteratorWasInvalidated',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'IteratorWasInvalidated',
    'tag' => 'IteratorWasInvalidated',
    'payload' => 'HostErrorIteratorWasInvalidatedPayload',
  ),
), 'HostErrorIteratorWasInvalidated'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'IteratorWasInvalidated' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorIteratorWasInvalidatedPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'IteratorWasInvalidated',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'IteratorWasInvalidated',
    'tag' => 'IteratorWasInvalidated',
    'payload' => 'HostErrorIteratorWasInvalidatedPayload',
  ),
), 'HostErrorIteratorWasInvalidated');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
