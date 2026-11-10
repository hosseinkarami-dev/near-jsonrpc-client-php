<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Limits on external contract calls, per call and per chunk.
 */
final readonly class ExternalCallsConfigView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * The share of the chunk's compute limit that its external calls may use.
         *
         * @var list<int>
         */
        public array $chunkComputeShare,
        /**
         * The share of `main_storage_proof_size_soft_limit` that a chunk's external calls may
         * record.
         *
         * @var list<int>
         */
        public array $chunkStorageProofShare,
        /**
         * The share of `combined_transactions_size_limit` that a chunk's external calls may take.
         *
         * @var list<int>
         */
        public array $chunkTransactionsSizeShare,
        /**
         * Max storage proof an external call's run may record, in bytes.
         *
         * @var int|string
         */
        public int|string $maxCallRecordedSize,
        /**
         * Max size of an external contract call, in bytes.
         *
         * @var int|string
         */
        public int|string $maxCallSize,
        /**
         * Max number of external calls in a chunk.
         *
         * @var int|string
         */
        public int|string $maxCallsPerChunk,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->chunkComputeShare, array (
  'items' => 
  array (
    'format' => 'int32',
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'chunk_compute_share');
        \Near\JsonRpc\Models\TypeGuard::assert($this->chunkStorageProofShare, array (
  'items' => 
  array (
    'format' => 'int32',
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'chunk_storage_proof_share');
        \Near\JsonRpc\Models\TypeGuard::assert($this->chunkTransactionsSizeShare, array (
  'items' => 
  array (
    'format' => 'int32',
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'chunk_transactions_size_share');
        \Near\JsonRpc\Models\TypeGuard::assert($this->maxCallRecordedSize, array (
  'format' => 'uint',
  'minimum' => 0,
  'type' => 'integer',
), 'max_call_recorded_size');
        \Near\JsonRpc\Models\TypeGuard::assert($this->maxCallSize, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_call_size');
        \Near\JsonRpc\Models\TypeGuard::assert($this->maxCallsPerChunk, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_calls_per_chunk');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ExternalCallsConfigView.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('max_call_size', $data)) throw new \InvalidArgumentException('Missing required field: max_call_size');
        if (!array_key_exists('max_call_recorded_size', $data)) throw new \InvalidArgumentException('Missing required field: max_call_recorded_size');
        if (!array_key_exists('chunk_compute_share', $data)) throw new \InvalidArgumentException('Missing required field: chunk_compute_share');
        if (!array_key_exists('chunk_storage_proof_share', $data)) throw new \InvalidArgumentException('Missing required field: chunk_storage_proof_share');
        if (!array_key_exists('chunk_transactions_size_share', $data)) throw new \InvalidArgumentException('Missing required field: chunk_transactions_size_share');
        if (!array_key_exists('max_calls_per_chunk', $data)) throw new \InvalidArgumentException('Missing required field: max_calls_per_chunk');
        $extra = array_diff_key($data, array (
  'chunk_compute_share' => true,
  'chunk_storage_proof_share' => true,
  'chunk_transactions_size_share' => true,
  'max_call_recorded_size' => true,
  'max_call_size' => true,
  'max_calls_per_chunk' => true,
));
        return new self(
            chunkComputeShare: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['chunk_compute_share'], array (
  'items' => 
  array (
    'format' => 'int32',
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'chunk_compute_share'),
            chunkStorageProofShare: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['chunk_storage_proof_share'], array (
  'items' => 
  array (
    'format' => 'int32',
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'chunk_storage_proof_share'),
            chunkTransactionsSizeShare: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['chunk_transactions_size_share'], array (
  'items' => 
  array (
    'format' => 'int32',
    'type' => 'integer',
  ),
  'maxItems' => 2,
  'minItems' => 2,
  'type' => 'array',
), 'chunk_transactions_size_share'),
            maxCallRecordedSize: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_call_recorded_size'], array (
  'format' => 'uint',
  'minimum' => 0,
  'type' => 'integer',
), 'max_call_recorded_size'),
            maxCallSize: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_call_size'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_call_size'),
            maxCallsPerChunk: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['max_calls_per_chunk'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'max_calls_per_chunk'),
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
        $data['chunk_compute_share'] = $this->chunkComputeShare;
        $data['chunk_storage_proof_share'] = $this->chunkStorageProofShare;
        $data['chunk_transactions_size_share'] = $this->chunkTransactionsSizeShare;
        $data['max_call_recorded_size'] = $this->maxCallRecordedSize;
        $data['max_call_size'] = $this->maxCallSize;
        $data['max_calls_per_chunk'] = $this->maxCallsPerChunk;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'chunk_compute_share' => 
    array (
      'items' => 
      array (
        'format' => 'int32',
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'chunk_storage_proof_share' => 
    array (
      'items' => 
      array (
        'format' => 'int32',
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'chunk_transactions_size_share' => 
    array (
      'items' => 
      array (
        'format' => 'int32',
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'max_call_recorded_size' => 
    array (
      'format' => 'uint',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_call_size' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_calls_per_chunk' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'max_call_size',
    1 => 'max_call_recorded_size',
    2 => 'chunk_compute_share',
    3 => 'chunk_storage_proof_share',
    4 => 'chunk_transactions_size_share',
    5 => 'max_calls_per_chunk',
  ),
  'type' => 'object',
), 'ExternalCallsConfigView'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'chunk_compute_share' => 
    array (
      'items' => 
      array (
        'format' => 'int32',
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'chunk_storage_proof_share' => 
    array (
      'items' => 
      array (
        'format' => 'int32',
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'chunk_transactions_size_share' => 
    array (
      'items' => 
      array (
        'format' => 'int32',
        'type' => 'integer',
      ),
      'maxItems' => 2,
      'minItems' => 2,
      'type' => 'array',
    ),
    'max_call_recorded_size' => 
    array (
      'format' => 'uint',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_call_size' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'max_calls_per_chunk' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'max_call_size',
    1 => 'max_call_recorded_size',
    2 => 'chunk_compute_share',
    3 => 'chunk_storage_proof_share',
    4 => 'chunk_transactions_size_share',
    5 => 'max_calls_per_chunk',
  ),
  'type' => 'object',
), 'ExternalCallsConfigView');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
