<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class InvalidTxErrorStorageError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\StorageError
         */
        public \Near\JsonRpc\Generated\Models\StorageError $storageError
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->storageError, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StorageError',
  'nullable' => false,
), 'StorageError');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for InvalidTxErrorStorageError.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('StorageError', $data)) throw new \InvalidArgumentException('Missing required field: StorageError');
        $unknown = array_diff_key($data, array (
  'StorageError' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in InvalidTxErrorStorageError.');
        return new self(
            storageError: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['StorageError'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StorageError',
  'nullable' => false,
), 'StorageError')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['StorageError'] = $this->storageError;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'StorageError' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StorageError',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'StorageError',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'StorageError',
    'tag' => 'StorageError',
    'payload' => 'StorageError',
  ),
), 'InvalidTxErrorStorageError'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'StorageError' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StorageError',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'StorageError',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'StorageError',
    'tag' => 'StorageError',
    'payload' => 'StorageError',
  ),
), 'InvalidTxErrorStorageError');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
