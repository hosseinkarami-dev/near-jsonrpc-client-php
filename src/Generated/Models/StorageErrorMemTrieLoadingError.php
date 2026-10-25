<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * In-memory trie could not be loaded for some reason.
 */
final readonly class StorageErrorMemTrieLoadingError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var string
         */
        public string $memTrieLoadingError
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->memTrieLoadingError, array (
  'type' => 'string',
), 'MemTrieLoadingError');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for StorageErrorMemTrieLoadingError.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('MemTrieLoadingError', $data)) throw new \InvalidArgumentException('Missing required field: MemTrieLoadingError');
        $unknown = array_diff_key($data, array (
  'MemTrieLoadingError' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in StorageErrorMemTrieLoadingError.');
        return new self(
            memTrieLoadingError: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['MemTrieLoadingError'], array (
  'type' => 'string',
), 'MemTrieLoadingError')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['MemTrieLoadingError'] = $this->memTrieLoadingError;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'additionalProperties' => false,
  'properties' => 
  array (
    'MemTrieLoadingError' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'MemTrieLoadingError',
  ),
  'type' => 'object',
  'x-php-union' => 
  array (
    'label' => 'MemTrieLoadingError',
  ),
), 'StorageErrorMemTrieLoadingError'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'additionalProperties' => false,
  'properties' => 
  array (
    'MemTrieLoadingError' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'MemTrieLoadingError',
  ),
  'type' => 'object',
  'x-php-union' => 
  array (
    'label' => 'MemTrieLoadingError',
  ),
), 'StorageErrorMemTrieLoadingError');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
