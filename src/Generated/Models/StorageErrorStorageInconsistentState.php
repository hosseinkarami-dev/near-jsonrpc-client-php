<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Either invalid state or key-value db is corrupted.
 * For PartialStorage it cannot be corrupted.
 * Error message is unreliable and for debugging purposes only. It's also probably ok to
 * panic in every place that produces this error.
 * We can check if db is corrupted by verifying everything in the state trie.
 */
final readonly class StorageErrorStorageInconsistentState implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var string
         */
        public string $storageInconsistentState
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->storageInconsistentState, array (
  'type' => 'string',
), 'StorageInconsistentState');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for StorageErrorStorageInconsistentState.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('StorageInconsistentState', $data)) throw new \InvalidArgumentException('Missing required field: StorageInconsistentState');
        $unknown = array_diff_key($data, array (
  'StorageInconsistentState' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in StorageErrorStorageInconsistentState.');
        return new self(
            storageInconsistentState: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['StorageInconsistentState'], array (
  'type' => 'string',
), 'StorageInconsistentState')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['StorageInconsistentState'] = $this->storageInconsistentState;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'additionalProperties' => false,
  'properties' => 
  array (
    'StorageInconsistentState' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'StorageInconsistentState',
  ),
  'type' => 'object',
  'x-php-union' => 
  array (
    'label' => 'StorageInconsistentState',
  ),
), 'StorageErrorStorageInconsistentState'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'additionalProperties' => false,
  'properties' => 
  array (
    'StorageInconsistentState' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'StorageInconsistentState',
  ),
  'type' => 'object',
  'x-php-union' => 
  array (
    'label' => 'StorageInconsistentState',
  ),
), 'StorageErrorStorageInconsistentState');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
