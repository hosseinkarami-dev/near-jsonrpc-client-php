<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * A share of a chunk's limits that its external calls used up, with what the chunk's earlier
 * external calls used and the share.
 */
final readonly class ExternalCallChunkLimit implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\ExternalCallChunkLimitCompute|\Near\JsonRpc\Generated\Models\ExternalCallChunkLimitStorageProof */
    public \Near\JsonRpc\Generated\Models\ExternalCallChunkLimitCompute|\Near\JsonRpc\Generated\Models\ExternalCallChunkLimitStorageProof $root;

    public function __construct(\Near\JsonRpc\Generated\Models\ExternalCallChunkLimitCompute|\Near\JsonRpc\Generated\Models\ExternalCallChunkLimitStorageProof $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\ExternalCallChunkLimitCompute::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\ExternalCallChunkLimitStorageProof::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for ExternalCallChunkLimit.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\ExternalCallChunkLimitCompute => 'Compute',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ExternalCallChunkLimitStorageProof => 'StorageProof',
            default => throw new \LogicException('Unknown ExternalCallChunkLimit variant.'),
        };
    }
    public static function compute(\Near\JsonRpc\Generated\Models\ExternalCallChunkLimitComputePayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ExternalCallChunkLimitCompute($payload)); }
    public static function storageProof(\Near\JsonRpc\Generated\Models\ExternalCallChunkLimitStorageProofPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ExternalCallChunkLimitStorageProof($payload)); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExternalCallChunkLimitCompute',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExternalCallChunkLimitStorageProof',
      'nullable' => false,
    ),
  ),
), 'root'));
        return $this->root;
    }
    public function jsonSerializeForEncoding(): mixed { return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExternalCallChunkLimitCompute',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExternalCallChunkLimitStorageProof',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
