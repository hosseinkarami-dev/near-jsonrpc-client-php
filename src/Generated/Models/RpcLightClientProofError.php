<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class RpcLightClientProofError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\RpcLightClientProofErrorUnknownBlock|\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorInconsistentState|\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorNotConfirmed|\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorUnknownTransactionOrReceipt|\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorUnavailableShard|\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorShardNotTracked|\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorTargetShardMismatch|\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorStateNotAvailable|\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorChunkNotCertified|\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorLightClientHeadTooOld|\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorInternalError */
    public \Near\JsonRpc\Generated\Models\RpcLightClientProofErrorUnknownBlock|\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorInconsistentState|\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorNotConfirmed|\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorUnknownTransactionOrReceipt|\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorUnavailableShard|\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorShardNotTracked|\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorTargetShardMismatch|\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorStateNotAvailable|\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorChunkNotCertified|\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorLightClientHeadTooOld|\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorInternalError $root;

    public function __construct(\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorUnknownBlock|\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorInconsistentState|\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorNotConfirmed|\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorUnknownTransactionOrReceipt|\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorUnavailableShard|\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorShardNotTracked|\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorTargetShardMismatch|\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorStateNotAvailable|\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorChunkNotCertified|\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorLightClientHeadTooOld|\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorInternalError $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\RpcLightClientProofErrorUnknownBlock::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\RpcLightClientProofErrorInconsistentState::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\RpcLightClientProofErrorNotConfirmed::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\RpcLightClientProofErrorUnknownTransactionOrReceipt::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[4] = \Near\JsonRpc\Generated\Models\RpcLightClientProofErrorUnavailableShard::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[5] = \Near\JsonRpc\Generated\Models\RpcLightClientProofErrorShardNotTracked::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[6] = \Near\JsonRpc\Generated\Models\RpcLightClientProofErrorTargetShardMismatch::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[7] = \Near\JsonRpc\Generated\Models\RpcLightClientProofErrorStateNotAvailable::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[8] = \Near\JsonRpc\Generated\Models\RpcLightClientProofErrorChunkNotCertified::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[9] = \Near\JsonRpc\Generated\Models\RpcLightClientProofErrorLightClientHeadTooOld::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[10] = \Near\JsonRpc\Generated\Models\RpcLightClientProofErrorInternalError::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for RpcLightClientProofError.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcLightClientProofErrorUnknownBlock => 'UNKNOWN_BLOCK',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcLightClientProofErrorInconsistentState => 'INCONSISTENT_STATE',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcLightClientProofErrorNotConfirmed => 'NOT_CONFIRMED',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcLightClientProofErrorUnknownTransactionOrReceipt => 'UNKNOWN_TRANSACTION_OR_RECEIPT',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcLightClientProofErrorUnavailableShard => 'UNAVAILABLE_SHARD',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcLightClientProofErrorShardNotTracked => 'SHARD_NOT_TRACKED',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcLightClientProofErrorTargetShardMismatch => 'TARGET_SHARD_MISMATCH',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcLightClientProofErrorStateNotAvailable => 'STATE_NOT_AVAILABLE',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcLightClientProofErrorChunkNotCertified => 'CHUNK_NOT_CERTIFIED',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcLightClientProofErrorLightClientHeadTooOld => 'LIGHT_CLIENT_HEAD_TOO_OLD',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcLightClientProofErrorInternalError => 'INTERNAL_ERROR',
            default => throw new \LogicException('Unknown RpcLightClientProofError variant.'),
        };
    }
    public static function unknownBlock(\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorUnknownBlock $variant): self { return new self($variant); }
    public static function inconsistentState(\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorInconsistentState $variant): self { return new self($variant); }
    public static function notConfirmed(\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorNotConfirmed $variant): self { return new self($variant); }
    public static function unknownTransactionOrReceipt(\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorUnknownTransactionOrReceipt $variant): self { return new self($variant); }
    public static function unavailableShard(\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorUnavailableShard $variant): self { return new self($variant); }
    public static function shardNotTracked(\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorShardNotTracked $variant): self { return new self($variant); }
    public static function targetShardMismatch(\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorTargetShardMismatch $variant): self { return new self($variant); }
    public static function stateNotAvailable(\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorStateNotAvailable $variant): self { return new self($variant); }
    public static function chunkNotCertified(\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorChunkNotCertified $variant): self { return new self($variant); }
    public static function lightClientHeadTooOld(\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorLightClientHeadTooOld $variant): self { return new self($variant); }
    public static function internalError(\Near\JsonRpc\Generated\Models\RpcLightClientProofErrorInternalError $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcLightClientProofErrorUnknownBlock',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcLightClientProofErrorInconsistentState',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcLightClientProofErrorNotConfirmed',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcLightClientProofErrorUnknownTransactionOrReceipt',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcLightClientProofErrorUnavailableShard',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcLightClientProofErrorShardNotTracked',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcLightClientProofErrorTargetShardMismatch',
      'nullable' => false,
    ),
    7 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcLightClientProofErrorStateNotAvailable',
      'nullable' => false,
    ),
    8 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcLightClientProofErrorChunkNotCertified',
      'nullable' => false,
    ),
    9 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcLightClientProofErrorLightClientHeadTooOld',
      'nullable' => false,
    ),
    10 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcLightClientProofErrorInternalError',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcLightClientProofErrorUnknownBlock',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcLightClientProofErrorInconsistentState',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcLightClientProofErrorNotConfirmed',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcLightClientProofErrorUnknownTransactionOrReceipt',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcLightClientProofErrorUnavailableShard',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcLightClientProofErrorShardNotTracked',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcLightClientProofErrorTargetShardMismatch',
      'nullable' => false,
    ),
    7 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcLightClientProofErrorStateNotAvailable',
      'nullable' => false,
    ),
    8 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcLightClientProofErrorChunkNotCertified',
      'nullable' => false,
    ),
    9 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcLightClientProofErrorLightClientHeadTooOld',
      'nullable' => false,
    ),
    10 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcLightClientProofErrorInternalError',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
