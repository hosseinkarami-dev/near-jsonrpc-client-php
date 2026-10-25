<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Describes cost of storage per block
 */
final readonly class StorageUsageConfigView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * Number of bytes for an account record, including rounding up for account id.
         *
         * @var int|string|null
         */
        public int|string|null $numBytesAccount = null,
        /**
         * Additional number of bytes for a k/v record
         *
         * @var int|string|null
         */
        public int|string|null $numExtraBytesRecord = null,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        if ($this->numBytesAccount !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->numBytesAccount, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'num_bytes_account');
        if ($this->numExtraBytesRecord !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->numExtraBytesRecord, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'num_extra_bytes_record');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for StorageUsageConfigView.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        $extra = array_diff_key($data, array (
  'num_bytes_account' => true,
  'num_extra_bytes_record' => true,
));
        return new self(
            numBytesAccount: array_key_exists('num_bytes_account', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['num_bytes_account'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'num_bytes_account') : null,
            numExtraBytesRecord: array_key_exists('num_extra_bytes_record', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['num_extra_bytes_record'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'num_extra_bytes_record') : null,
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
        if ($this->numBytesAccount !== null) $data['num_bytes_account'] = $this->numBytesAccount;
        if ($this->numExtraBytesRecord !== null) $data['num_extra_bytes_record'] = $this->numExtraBytesRecord;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'num_bytes_account' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'num_extra_bytes_record' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'StorageUsageConfigView'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'num_bytes_account' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'num_extra_bytes_record' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'StorageUsageConfigView');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
