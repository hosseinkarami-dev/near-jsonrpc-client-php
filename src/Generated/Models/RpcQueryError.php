<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class RpcQueryError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\RpcQueryErrorNoSyncedBlocks|\Near\JsonRpc\Generated\Models\RpcQueryErrorUnavailableShard|\Near\JsonRpc\Generated\Models\RpcQueryErrorGarbageCollectedBlock|\Near\JsonRpc\Generated\Models\RpcQueryErrorUnknownBlock|\Near\JsonRpc\Generated\Models\RpcQueryErrorInvalidAccount|\Near\JsonRpc\Generated\Models\RpcQueryErrorUnknownAccount|\Near\JsonRpc\Generated\Models\RpcQueryErrorNoContractCode|\Near\JsonRpc\Generated\Models\RpcQueryErrorTooLargeContractState|\Near\JsonRpc\Generated\Models\RpcQueryErrorUnknownAccessKey|\Near\JsonRpc\Generated\Models\RpcQueryErrorUnknownGasKey|\Near\JsonRpc\Generated\Models\RpcQueryErrorTooManyAccessKeys|\Near\JsonRpc\Generated\Models\RpcQueryErrorContractExecutionError|\Near\JsonRpc\Generated\Models\RpcQueryErrorNoGlobalContractCode|\Near\JsonRpc\Generated\Models\RpcQueryErrorInternalError */
    public \Near\JsonRpc\Generated\Models\RpcQueryErrorNoSyncedBlocks|\Near\JsonRpc\Generated\Models\RpcQueryErrorUnavailableShard|\Near\JsonRpc\Generated\Models\RpcQueryErrorGarbageCollectedBlock|\Near\JsonRpc\Generated\Models\RpcQueryErrorUnknownBlock|\Near\JsonRpc\Generated\Models\RpcQueryErrorInvalidAccount|\Near\JsonRpc\Generated\Models\RpcQueryErrorUnknownAccount|\Near\JsonRpc\Generated\Models\RpcQueryErrorNoContractCode|\Near\JsonRpc\Generated\Models\RpcQueryErrorTooLargeContractState|\Near\JsonRpc\Generated\Models\RpcQueryErrorUnknownAccessKey|\Near\JsonRpc\Generated\Models\RpcQueryErrorUnknownGasKey|\Near\JsonRpc\Generated\Models\RpcQueryErrorTooManyAccessKeys|\Near\JsonRpc\Generated\Models\RpcQueryErrorContractExecutionError|\Near\JsonRpc\Generated\Models\RpcQueryErrorNoGlobalContractCode|\Near\JsonRpc\Generated\Models\RpcQueryErrorInternalError $root;

    public function __construct(\Near\JsonRpc\Generated\Models\RpcQueryErrorNoSyncedBlocks|\Near\JsonRpc\Generated\Models\RpcQueryErrorUnavailableShard|\Near\JsonRpc\Generated\Models\RpcQueryErrorGarbageCollectedBlock|\Near\JsonRpc\Generated\Models\RpcQueryErrorUnknownBlock|\Near\JsonRpc\Generated\Models\RpcQueryErrorInvalidAccount|\Near\JsonRpc\Generated\Models\RpcQueryErrorUnknownAccount|\Near\JsonRpc\Generated\Models\RpcQueryErrorNoContractCode|\Near\JsonRpc\Generated\Models\RpcQueryErrorTooLargeContractState|\Near\JsonRpc\Generated\Models\RpcQueryErrorUnknownAccessKey|\Near\JsonRpc\Generated\Models\RpcQueryErrorUnknownGasKey|\Near\JsonRpc\Generated\Models\RpcQueryErrorTooManyAccessKeys|\Near\JsonRpc\Generated\Models\RpcQueryErrorContractExecutionError|\Near\JsonRpc\Generated\Models\RpcQueryErrorNoGlobalContractCode|\Near\JsonRpc\Generated\Models\RpcQueryErrorInternalError $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\RpcQueryErrorNoSyncedBlocks::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\RpcQueryErrorUnavailableShard::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\RpcQueryErrorGarbageCollectedBlock::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\RpcQueryErrorUnknownBlock::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[4] = \Near\JsonRpc\Generated\Models\RpcQueryErrorInvalidAccount::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[5] = \Near\JsonRpc\Generated\Models\RpcQueryErrorUnknownAccount::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[6] = \Near\JsonRpc\Generated\Models\RpcQueryErrorNoContractCode::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[7] = \Near\JsonRpc\Generated\Models\RpcQueryErrorTooLargeContractState::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[8] = \Near\JsonRpc\Generated\Models\RpcQueryErrorUnknownAccessKey::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[9] = \Near\JsonRpc\Generated\Models\RpcQueryErrorUnknownGasKey::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[10] = \Near\JsonRpc\Generated\Models\RpcQueryErrorTooManyAccessKeys::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[11] = \Near\JsonRpc\Generated\Models\RpcQueryErrorContractExecutionError::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[12] = \Near\JsonRpc\Generated\Models\RpcQueryErrorNoGlobalContractCode::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[13] = \Near\JsonRpc\Generated\Models\RpcQueryErrorInternalError::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for RpcQueryError.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryErrorNoSyncedBlocks => 'NO_SYNCED_BLOCKS',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryErrorUnavailableShard => 'UNAVAILABLE_SHARD',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryErrorGarbageCollectedBlock => 'GARBAGE_COLLECTED_BLOCK',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryErrorUnknownBlock => 'UNKNOWN_BLOCK',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryErrorInvalidAccount => 'INVALID_ACCOUNT',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryErrorUnknownAccount => 'UNKNOWN_ACCOUNT',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryErrorNoContractCode => 'NO_CONTRACT_CODE',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryErrorTooLargeContractState => 'TOO_LARGE_CONTRACT_STATE',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryErrorUnknownAccessKey => 'UNKNOWN_ACCESS_KEY',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryErrorUnknownGasKey => 'UNKNOWN_GAS_KEY',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryErrorTooManyAccessKeys => 'TOO_MANY_ACCESS_KEYS',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryErrorContractExecutionError => 'CONTRACT_EXECUTION_ERROR',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryErrorNoGlobalContractCode => 'NO_GLOBAL_CONTRACT_CODE',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryErrorInternalError => 'INTERNAL_ERROR',
            default => throw new \LogicException('Unknown RpcQueryError variant.'),
        };
    }
    public static function noSyncedBlocks(\Near\JsonRpc\Generated\Models\RpcQueryErrorNoSyncedBlocks $variant): self { return new self($variant); }
    public static function unavailableShard(\Near\JsonRpc\Generated\Models\RpcQueryErrorUnavailableShard $variant): self { return new self($variant); }
    public static function garbageCollectedBlock(\Near\JsonRpc\Generated\Models\RpcQueryErrorGarbageCollectedBlock $variant): self { return new self($variant); }
    public static function unknownBlock(\Near\JsonRpc\Generated\Models\RpcQueryErrorUnknownBlock $variant): self { return new self($variant); }
    public static function invalidAccount(\Near\JsonRpc\Generated\Models\RpcQueryErrorInvalidAccount $variant): self { return new self($variant); }
    public static function unknownAccount(\Near\JsonRpc\Generated\Models\RpcQueryErrorUnknownAccount $variant): self { return new self($variant); }
    public static function noContractCode(\Near\JsonRpc\Generated\Models\RpcQueryErrorNoContractCode $variant): self { return new self($variant); }
    public static function tooLargeContractState(\Near\JsonRpc\Generated\Models\RpcQueryErrorTooLargeContractState $variant): self { return new self($variant); }
    public static function unknownAccessKey(\Near\JsonRpc\Generated\Models\RpcQueryErrorUnknownAccessKey $variant): self { return new self($variant); }
    public static function unknownGasKey(\Near\JsonRpc\Generated\Models\RpcQueryErrorUnknownGasKey $variant): self { return new self($variant); }
    public static function tooManyAccessKeys(\Near\JsonRpc\Generated\Models\RpcQueryErrorTooManyAccessKeys $variant): self { return new self($variant); }
    public static function contractExecutionError(\Near\JsonRpc\Generated\Models\RpcQueryErrorContractExecutionError $variant): self { return new self($variant); }
    public static function noGlobalContractCode(\Near\JsonRpc\Generated\Models\RpcQueryErrorNoGlobalContractCode $variant): self { return new self($variant); }
    public static function internalError(\Near\JsonRpc\Generated\Models\RpcQueryErrorInternalError $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryErrorNoSyncedBlocks',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryErrorUnavailableShard',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryErrorGarbageCollectedBlock',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryErrorUnknownBlock',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryErrorInvalidAccount',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryErrorUnknownAccount',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryErrorNoContractCode',
      'nullable' => false,
    ),
    7 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryErrorTooLargeContractState',
      'nullable' => false,
    ),
    8 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryErrorUnknownAccessKey',
      'nullable' => false,
    ),
    9 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryErrorUnknownGasKey',
      'nullable' => false,
    ),
    10 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryErrorTooManyAccessKeys',
      'nullable' => false,
    ),
    11 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryErrorContractExecutionError',
      'nullable' => false,
    ),
    12 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryErrorNoGlobalContractCode',
      'nullable' => false,
    ),
    13 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryErrorInternalError',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryErrorNoSyncedBlocks',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryErrorUnavailableShard',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryErrorGarbageCollectedBlock',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryErrorUnknownBlock',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryErrorInvalidAccount',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryErrorUnknownAccount',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryErrorNoContractCode',
      'nullable' => false,
    ),
    7 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryErrorTooLargeContractState',
      'nullable' => false,
    ),
    8 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryErrorUnknownAccessKey',
      'nullable' => false,
    ),
    9 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryErrorUnknownGasKey',
      'nullable' => false,
    ),
    10 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryErrorTooManyAccessKeys',
      'nullable' => false,
    ),
    11 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryErrorContractExecutionError',
      'nullable' => false,
    ),
    12 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryErrorNoGlobalContractCode',
      'nullable' => false,
    ),
    13 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryErrorInternalError',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
