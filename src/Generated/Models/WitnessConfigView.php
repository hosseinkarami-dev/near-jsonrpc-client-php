<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Configuration specific to ChunkStateWitness.
 */
final readonly class WitnessConfigView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * Maximum size of transactions contained inside ChunkStateWitness.
         *
         * A witness contains transactions from both the previous chunk and the current one.
         * This parameter limits the sum of sizes of transactions from both of those chunks.
         *
         * @var int|string|null
         */
        public int|string|null $combinedTransactionsSizeLimit = null,
        /**
         * Size limit for storage proof generated while executing receipts in a chunk.
         * After this limit is reached we defer execution of any new receipts.
         *
         * @var int|string|null
         */
        public int|string|null $mainStorageProofSizeSoftLimit = null,
        /**
         * Soft size limit of storage proof used to validate new transactions in ChunkStateWitness.
         *
         * @var int|string|null
         */
        public int|string|null $newTransactionsValidationStateSizeSoftLimit = null,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        if ($this->combinedTransactionsSizeLimit !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->combinedTransactionsSizeLimit, array (
  'format' => 'uint',
  'minimum' => 0,
  'type' => 'integer',
), 'combined_transactions_size_limit');
        if ($this->mainStorageProofSizeSoftLimit !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->mainStorageProofSizeSoftLimit, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'main_storage_proof_size_soft_limit');
        if ($this->newTransactionsValidationStateSizeSoftLimit !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->newTransactionsValidationStateSizeSoftLimit, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'new_transactions_validation_state_size_soft_limit');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for WitnessConfigView.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        $extra = array_diff_key($data, array (
  'combined_transactions_size_limit' => true,
  'main_storage_proof_size_soft_limit' => true,
  'new_transactions_validation_state_size_soft_limit' => true,
));
        return new self(
            combinedTransactionsSizeLimit: array_key_exists('combined_transactions_size_limit', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['combined_transactions_size_limit'], array (
  'format' => 'uint',
  'minimum' => 0,
  'type' => 'integer',
), 'combined_transactions_size_limit') : null,
            mainStorageProofSizeSoftLimit: array_key_exists('main_storage_proof_size_soft_limit', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['main_storage_proof_size_soft_limit'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'main_storage_proof_size_soft_limit') : null,
            newTransactionsValidationStateSizeSoftLimit: array_key_exists('new_transactions_validation_state_size_soft_limit', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['new_transactions_validation_state_size_soft_limit'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'new_transactions_validation_state_size_soft_limit') : null,
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
        if ($this->combinedTransactionsSizeLimit !== null) $data['combined_transactions_size_limit'] = $this->combinedTransactionsSizeLimit;
        if ($this->mainStorageProofSizeSoftLimit !== null) $data['main_storage_proof_size_soft_limit'] = $this->mainStorageProofSizeSoftLimit;
        if ($this->newTransactionsValidationStateSizeSoftLimit !== null) $data['new_transactions_validation_state_size_soft_limit'] = $this->newTransactionsValidationStateSizeSoftLimit;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'combined_transactions_size_limit' => 
    array (
      'format' => 'uint',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'main_storage_proof_size_soft_limit' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'new_transactions_validation_state_size_soft_limit' => 
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
), 'WitnessConfigView'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'combined_transactions_size_limit' => 
    array (
      'format' => 'uint',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'main_storage_proof_size_soft_limit' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'new_transactions_validation_state_size_soft_limit' => 
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
), 'WitnessConfigView');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
