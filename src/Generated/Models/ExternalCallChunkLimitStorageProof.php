<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The storage proof recorded by the chunk's earlier external calls reached their share of
 * the chunk's storage proof limit.
 */
final readonly class ExternalCallChunkLimitStorageProof implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ExternalCallChunkLimitStorageProofPayload
         */
        public \Near\JsonRpc\Generated\Models\ExternalCallChunkLimitStorageProofPayload $storageProof
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->storageProof, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExternalCallChunkLimitStorageProofPayload',
  'nullable' => false,
), 'StorageProof');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ExternalCallChunkLimitStorageProof.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('StorageProof', $data)) throw new \InvalidArgumentException('Missing required field: StorageProof');
        $unknown = array_diff_key($data, array (
  'StorageProof' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ExternalCallChunkLimitStorageProof.');
        return new self(
            storageProof: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['StorageProof'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExternalCallChunkLimitStorageProofPayload',
  'nullable' => false,
), 'StorageProof')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['StorageProof'] = $this->storageProof;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'StorageProof' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExternalCallChunkLimitStorageProofPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'StorageProof',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'StorageProof',
    'tag' => 'StorageProof',
    'payload' => 'ExternalCallChunkLimitStorageProofPayload',
  ),
), 'ExternalCallChunkLimitStorageProof'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'StorageProof' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExternalCallChunkLimitStorageProofPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'StorageProof',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'StorageProof',
    'tag' => 'StorageProof',
    'payload' => 'ExternalCallChunkLimitStorageProofPayload',
  ),
), 'ExternalCallChunkLimitStorageProof');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
