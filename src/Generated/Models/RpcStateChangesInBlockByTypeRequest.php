<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * It is a [serializable view] of [`StateChangesRequest`].
 *
 * [serializable view]: ./index.html
 * [`StateChangesRequest`]: ../types/struct.StateChangesRequest.html
 */
final readonly class RpcStateChangesInBlockByTypeRequest implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestAccountChangesByBlockId|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestSingleAccessKeyChangesByBlockId|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestAllAccessKeyChangesByBlockId|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestContractCodeChangesByBlockId|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestDataChangesByBlockId|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestAccountChangesByFinality|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestSingleAccessKeyChangesByFinality|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestAllAccessKeyChangesByFinality|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestContractCodeChangesByFinality|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestDataChangesByFinality|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestAccountChangesBySyncCheckpoint|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestSingleAccessKeyChangesBySyncCheckpoint|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestAllAccessKeyChangesBySyncCheckpoint|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestContractCodeChangesBySyncCheckpoint|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestDataChangesBySyncCheckpoint */
    public \Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestAccountChangesByBlockId|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestSingleAccessKeyChangesByBlockId|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestAllAccessKeyChangesByBlockId|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestContractCodeChangesByBlockId|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestDataChangesByBlockId|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestAccountChangesByFinality|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestSingleAccessKeyChangesByFinality|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestAllAccessKeyChangesByFinality|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestContractCodeChangesByFinality|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestDataChangesByFinality|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestAccountChangesBySyncCheckpoint|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestSingleAccessKeyChangesBySyncCheckpoint|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestAllAccessKeyChangesBySyncCheckpoint|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestContractCodeChangesBySyncCheckpoint|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestDataChangesBySyncCheckpoint $root;

    public function __construct(\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestAccountChangesByBlockId|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestSingleAccessKeyChangesByBlockId|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestAllAccessKeyChangesByBlockId|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestContractCodeChangesByBlockId|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestDataChangesByBlockId|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestAccountChangesByFinality|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestSingleAccessKeyChangesByFinality|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestAllAccessKeyChangesByFinality|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestContractCodeChangesByFinality|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestDataChangesByFinality|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestAccountChangesBySyncCheckpoint|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestSingleAccessKeyChangesBySyncCheckpoint|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestAllAccessKeyChangesBySyncCheckpoint|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestContractCodeChangesBySyncCheckpoint|\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestDataChangesBySyncCheckpoint $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestAccountChangesByBlockId::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestSingleAccessKeyChangesByBlockId::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestAllAccessKeyChangesByBlockId::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestContractCodeChangesByBlockId::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[4] = \Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestDataChangesByBlockId::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[5] = \Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestAccountChangesByFinality::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[6] = \Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestSingleAccessKeyChangesByFinality::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[7] = \Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestAllAccessKeyChangesByFinality::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[8] = \Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestContractCodeChangesByFinality::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[9] = \Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestDataChangesByFinality::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[10] = \Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestAccountChangesBySyncCheckpoint::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[11] = \Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestSingleAccessKeyChangesBySyncCheckpoint::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[12] = \Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestAllAccessKeyChangesBySyncCheckpoint::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[13] = \Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestContractCodeChangesBySyncCheckpoint::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[14] = \Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestDataChangesBySyncCheckpoint::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for RpcStateChangesInBlockByTypeRequest.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestAccountChangesByBlockId => 'account_changes_by_block_id',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestSingleAccessKeyChangesByBlockId => 'single_access_key_changes_by_block_id',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestAllAccessKeyChangesByBlockId => 'all_access_key_changes_by_block_id',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestContractCodeChangesByBlockId => 'contract_code_changes_by_block_id',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestDataChangesByBlockId => 'data_changes_by_block_id',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestAccountChangesByFinality => 'account_changes_by_finality',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestSingleAccessKeyChangesByFinality => 'single_access_key_changes_by_finality',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestAllAccessKeyChangesByFinality => 'all_access_key_changes_by_finality',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestContractCodeChangesByFinality => 'contract_code_changes_by_finality',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestDataChangesByFinality => 'data_changes_by_finality',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestAccountChangesBySyncCheckpoint => 'account_changes_by_sync_checkpoint',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestSingleAccessKeyChangesBySyncCheckpoint => 'single_access_key_changes_by_sync_checkpoint',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestAllAccessKeyChangesBySyncCheckpoint => 'all_access_key_changes_by_sync_checkpoint',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestContractCodeChangesBySyncCheckpoint => 'contract_code_changes_by_sync_checkpoint',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestDataChangesBySyncCheckpoint => 'data_changes_by_sync_checkpoint',
            default => throw new \LogicException('Unknown RpcStateChangesInBlockByTypeRequest variant.'),
        };
    }
    public static function accountChangesByBlockId(\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestAccountChangesByBlockId $variant): self { return new self($variant); }
    public static function singleAccessKeyChangesByBlockId(\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestSingleAccessKeyChangesByBlockId $variant): self { return new self($variant); }
    public static function allAccessKeyChangesByBlockId(\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestAllAccessKeyChangesByBlockId $variant): self { return new self($variant); }
    public static function contractCodeChangesByBlockId(\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestContractCodeChangesByBlockId $variant): self { return new self($variant); }
    public static function dataChangesByBlockId(\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestDataChangesByBlockId $variant): self { return new self($variant); }
    public static function accountChangesByFinality(\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestAccountChangesByFinality $variant): self { return new self($variant); }
    public static function singleAccessKeyChangesByFinality(\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestSingleAccessKeyChangesByFinality $variant): self { return new self($variant); }
    public static function allAccessKeyChangesByFinality(\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestAllAccessKeyChangesByFinality $variant): self { return new self($variant); }
    public static function contractCodeChangesByFinality(\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestContractCodeChangesByFinality $variant): self { return new self($variant); }
    public static function dataChangesByFinality(\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestDataChangesByFinality $variant): self { return new self($variant); }
    public static function accountChangesBySyncCheckpoint(\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestAccountChangesBySyncCheckpoint $variant): self { return new self($variant); }
    public static function singleAccessKeyChangesBySyncCheckpoint(\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestSingleAccessKeyChangesBySyncCheckpoint $variant): self { return new self($variant); }
    public static function allAccessKeyChangesBySyncCheckpoint(\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestAllAccessKeyChangesBySyncCheckpoint $variant): self { return new self($variant); }
    public static function contractCodeChangesBySyncCheckpoint(\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestContractCodeChangesBySyncCheckpoint $variant): self { return new self($variant); }
    public static function dataChangesBySyncCheckpoint(\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequestDataChangesBySyncCheckpoint $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesInBlockByTypeRequestAccountChangesByBlockId',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesInBlockByTypeRequestSingleAccessKeyChangesByBlockId',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesInBlockByTypeRequestAllAccessKeyChangesByBlockId',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesInBlockByTypeRequestContractCodeChangesByBlockId',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesInBlockByTypeRequestDataChangesByBlockId',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesInBlockByTypeRequestAccountChangesByFinality',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesInBlockByTypeRequestSingleAccessKeyChangesByFinality',
      'nullable' => false,
    ),
    7 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesInBlockByTypeRequestAllAccessKeyChangesByFinality',
      'nullable' => false,
    ),
    8 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesInBlockByTypeRequestContractCodeChangesByFinality',
      'nullable' => false,
    ),
    9 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesInBlockByTypeRequestDataChangesByFinality',
      'nullable' => false,
    ),
    10 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesInBlockByTypeRequestAccountChangesBySyncCheckpoint',
      'nullable' => false,
    ),
    11 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesInBlockByTypeRequestSingleAccessKeyChangesBySyncCheckpoint',
      'nullable' => false,
    ),
    12 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesInBlockByTypeRequestAllAccessKeyChangesBySyncCheckpoint',
      'nullable' => false,
    ),
    13 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesInBlockByTypeRequestContractCodeChangesBySyncCheckpoint',
      'nullable' => false,
    ),
    14 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesInBlockByTypeRequestDataChangesBySyncCheckpoint',
      'nullable' => false,
    ),
  ),
  'title' => 'RpcStateChangesInBlockByTypeRequest',
  'type' => 'object',
), 'root'));
        return $this->root;
    }
    public function jsonSerializeForEncoding(): mixed { return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesInBlockByTypeRequestAccountChangesByBlockId',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesInBlockByTypeRequestSingleAccessKeyChangesByBlockId',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesInBlockByTypeRequestAllAccessKeyChangesByBlockId',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesInBlockByTypeRequestContractCodeChangesByBlockId',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesInBlockByTypeRequestDataChangesByBlockId',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesInBlockByTypeRequestAccountChangesByFinality',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesInBlockByTypeRequestSingleAccessKeyChangesByFinality',
      'nullable' => false,
    ),
    7 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesInBlockByTypeRequestAllAccessKeyChangesByFinality',
      'nullable' => false,
    ),
    8 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesInBlockByTypeRequestContractCodeChangesByFinality',
      'nullable' => false,
    ),
    9 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesInBlockByTypeRequestDataChangesByFinality',
      'nullable' => false,
    ),
    10 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesInBlockByTypeRequestAccountChangesBySyncCheckpoint',
      'nullable' => false,
    ),
    11 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesInBlockByTypeRequestSingleAccessKeyChangesBySyncCheckpoint',
      'nullable' => false,
    ),
    12 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesInBlockByTypeRequestAllAccessKeyChangesBySyncCheckpoint',
      'nullable' => false,
    ),
    13 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesInBlockByTypeRequestContractCodeChangesBySyncCheckpoint',
      'nullable' => false,
    ),
    14 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesInBlockByTypeRequestDataChangesBySyncCheckpoint',
      'nullable' => false,
    ),
  ),
  'title' => 'RpcStateChangesInBlockByTypeRequest',
  'type' => 'object',
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
