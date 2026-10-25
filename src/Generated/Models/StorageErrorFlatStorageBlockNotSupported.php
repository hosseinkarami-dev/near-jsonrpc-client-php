<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Flat storage error, meaning that it doesn't support some block anymore.
 * We guarantee that such block cannot become final, thus block processing
 * must resume normally.
 */
final readonly class StorageErrorFlatStorageBlockNotSupported implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var string
         */
        public string $flatStorageBlockNotSupported
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->flatStorageBlockNotSupported, array (
  'type' => 'string',
), 'FlatStorageBlockNotSupported');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for StorageErrorFlatStorageBlockNotSupported.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('FlatStorageBlockNotSupported', $data)) throw new \InvalidArgumentException('Missing required field: FlatStorageBlockNotSupported');
        $unknown = array_diff_key($data, array (
  'FlatStorageBlockNotSupported' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in StorageErrorFlatStorageBlockNotSupported.');
        return new self(
            flatStorageBlockNotSupported: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['FlatStorageBlockNotSupported'], array (
  'type' => 'string',
), 'FlatStorageBlockNotSupported')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['FlatStorageBlockNotSupported'] = $this->flatStorageBlockNotSupported;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'additionalProperties' => false,
  'properties' => 
  array (
    'FlatStorageBlockNotSupported' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'FlatStorageBlockNotSupported',
  ),
  'type' => 'object',
  'x-php-union' => 
  array (
    'label' => 'FlatStorageBlockNotSupported',
  ),
), 'StorageErrorFlatStorageBlockNotSupported'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'additionalProperties' => false,
  'properties' => 
  array (
    'FlatStorageBlockNotSupported' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'FlatStorageBlockNotSupported',
  ),
  'type' => 'object',
  'x-php-union' => 
  array (
    'label' => 'FlatStorageBlockNotSupported',
  ),
), 'StorageErrorFlatStorageBlockNotSupported');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
