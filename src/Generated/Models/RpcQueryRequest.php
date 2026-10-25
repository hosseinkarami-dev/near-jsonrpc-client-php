<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class RpcQueryRequest implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccountByBlockId|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewCodeByBlockId|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewStateByBlockId|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccessKeyByBlockId|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccessKeyListByBlockId|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewGasKeyNoncesByBlockId|\Near\JsonRpc\Generated\Models\RpcQueryRequestCallFunctionByBlockId|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewGlobalContractCodeByBlockId|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewGlobalContractCodeByAccountIdByBlockId|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccountByFinality|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewCodeByFinality|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewStateByFinality|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccessKeyByFinality|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccessKeyListByFinality|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewGasKeyNoncesByFinality|\Near\JsonRpc\Generated\Models\RpcQueryRequestCallFunctionByFinality|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewGlobalContractCodeByFinality|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewGlobalContractCodeByAccountIdByFinality|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccountBySyncCheckpoint|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewCodeBySyncCheckpoint|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewStateBySyncCheckpoint|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccessKeyBySyncCheckpoint|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccessKeyListBySyncCheckpoint|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewGasKeyNoncesBySyncCheckpoint|\Near\JsonRpc\Generated\Models\RpcQueryRequestCallFunctionBySyncCheckpoint|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewGlobalContractCodeBySyncCheckpoint|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewGlobalContractCodeByAccountIdBySyncCheckpoint */
    public \Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccountByBlockId|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewCodeByBlockId|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewStateByBlockId|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccessKeyByBlockId|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccessKeyListByBlockId|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewGasKeyNoncesByBlockId|\Near\JsonRpc\Generated\Models\RpcQueryRequestCallFunctionByBlockId|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewGlobalContractCodeByBlockId|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewGlobalContractCodeByAccountIdByBlockId|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccountByFinality|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewCodeByFinality|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewStateByFinality|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccessKeyByFinality|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccessKeyListByFinality|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewGasKeyNoncesByFinality|\Near\JsonRpc\Generated\Models\RpcQueryRequestCallFunctionByFinality|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewGlobalContractCodeByFinality|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewGlobalContractCodeByAccountIdByFinality|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccountBySyncCheckpoint|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewCodeBySyncCheckpoint|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewStateBySyncCheckpoint|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccessKeyBySyncCheckpoint|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccessKeyListBySyncCheckpoint|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewGasKeyNoncesBySyncCheckpoint|\Near\JsonRpc\Generated\Models\RpcQueryRequestCallFunctionBySyncCheckpoint|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewGlobalContractCodeBySyncCheckpoint|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewGlobalContractCodeByAccountIdBySyncCheckpoint $root;

    public function __construct(\Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccountByBlockId|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewCodeByBlockId|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewStateByBlockId|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccessKeyByBlockId|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccessKeyListByBlockId|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewGasKeyNoncesByBlockId|\Near\JsonRpc\Generated\Models\RpcQueryRequestCallFunctionByBlockId|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewGlobalContractCodeByBlockId|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewGlobalContractCodeByAccountIdByBlockId|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccountByFinality|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewCodeByFinality|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewStateByFinality|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccessKeyByFinality|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccessKeyListByFinality|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewGasKeyNoncesByFinality|\Near\JsonRpc\Generated\Models\RpcQueryRequestCallFunctionByFinality|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewGlobalContractCodeByFinality|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewGlobalContractCodeByAccountIdByFinality|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccountBySyncCheckpoint|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewCodeBySyncCheckpoint|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewStateBySyncCheckpoint|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccessKeyBySyncCheckpoint|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccessKeyListBySyncCheckpoint|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewGasKeyNoncesBySyncCheckpoint|\Near\JsonRpc\Generated\Models\RpcQueryRequestCallFunctionBySyncCheckpoint|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewGlobalContractCodeBySyncCheckpoint|\Near\JsonRpc\Generated\Models\RpcQueryRequestViewGlobalContractCodeByAccountIdBySyncCheckpoint $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccountByBlockId::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\RpcQueryRequestViewCodeByBlockId::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\RpcQueryRequestViewStateByBlockId::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccessKeyByBlockId::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[4] = \Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccessKeyListByBlockId::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[5] = \Near\JsonRpc\Generated\Models\RpcQueryRequestViewGasKeyNoncesByBlockId::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[6] = \Near\JsonRpc\Generated\Models\RpcQueryRequestCallFunctionByBlockId::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[7] = \Near\JsonRpc\Generated\Models\RpcQueryRequestViewGlobalContractCodeByBlockId::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[8] = \Near\JsonRpc\Generated\Models\RpcQueryRequestViewGlobalContractCodeByAccountIdByBlockId::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[9] = \Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccountByFinality::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[10] = \Near\JsonRpc\Generated\Models\RpcQueryRequestViewCodeByFinality::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[11] = \Near\JsonRpc\Generated\Models\RpcQueryRequestViewStateByFinality::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[12] = \Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccessKeyByFinality::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[13] = \Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccessKeyListByFinality::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[14] = \Near\JsonRpc\Generated\Models\RpcQueryRequestViewGasKeyNoncesByFinality::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[15] = \Near\JsonRpc\Generated\Models\RpcQueryRequestCallFunctionByFinality::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[16] = \Near\JsonRpc\Generated\Models\RpcQueryRequestViewGlobalContractCodeByFinality::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[17] = \Near\JsonRpc\Generated\Models\RpcQueryRequestViewGlobalContractCodeByAccountIdByFinality::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[18] = \Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccountBySyncCheckpoint::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[19] = \Near\JsonRpc\Generated\Models\RpcQueryRequestViewCodeBySyncCheckpoint::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[20] = \Near\JsonRpc\Generated\Models\RpcQueryRequestViewStateBySyncCheckpoint::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[21] = \Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccessKeyBySyncCheckpoint::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[22] = \Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccessKeyListBySyncCheckpoint::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[23] = \Near\JsonRpc\Generated\Models\RpcQueryRequestViewGasKeyNoncesBySyncCheckpoint::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[24] = \Near\JsonRpc\Generated\Models\RpcQueryRequestCallFunctionBySyncCheckpoint::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[25] = \Near\JsonRpc\Generated\Models\RpcQueryRequestViewGlobalContractCodeBySyncCheckpoint::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[26] = \Near\JsonRpc\Generated\Models\RpcQueryRequestViewGlobalContractCodeByAccountIdBySyncCheckpoint::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for RpcQueryRequest.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccountByBlockId => 'view_account_by_block_id',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryRequestViewCodeByBlockId => 'view_code_by_block_id',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryRequestViewStateByBlockId => 'view_state_by_block_id',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccessKeyByBlockId => 'view_access_key_by_block_id',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccessKeyListByBlockId => 'view_access_key_list_by_block_id',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryRequestViewGasKeyNoncesByBlockId => 'view_gas_key_nonces_by_block_id',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryRequestCallFunctionByBlockId => 'call_function_by_block_id',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryRequestViewGlobalContractCodeByBlockId => 'view_global_contract_code_by_block_id',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryRequestViewGlobalContractCodeByAccountIdByBlockId => 'view_global_contract_code_by_account_id_by_block_id',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccountByFinality => 'view_account_by_finality',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryRequestViewCodeByFinality => 'view_code_by_finality',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryRequestViewStateByFinality => 'view_state_by_finality',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccessKeyByFinality => 'view_access_key_by_finality',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccessKeyListByFinality => 'view_access_key_list_by_finality',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryRequestViewGasKeyNoncesByFinality => 'view_gas_key_nonces_by_finality',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryRequestCallFunctionByFinality => 'call_function_by_finality',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryRequestViewGlobalContractCodeByFinality => 'view_global_contract_code_by_finality',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryRequestViewGlobalContractCodeByAccountIdByFinality => 'view_global_contract_code_by_account_id_by_finality',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccountBySyncCheckpoint => 'view_account_by_sync_checkpoint',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryRequestViewCodeBySyncCheckpoint => 'view_code_by_sync_checkpoint',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryRequestViewStateBySyncCheckpoint => 'view_state_by_sync_checkpoint',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccessKeyBySyncCheckpoint => 'view_access_key_by_sync_checkpoint',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccessKeyListBySyncCheckpoint => 'view_access_key_list_by_sync_checkpoint',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryRequestViewGasKeyNoncesBySyncCheckpoint => 'view_gas_key_nonces_by_sync_checkpoint',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryRequestCallFunctionBySyncCheckpoint => 'call_function_by_sync_checkpoint',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryRequestViewGlobalContractCodeBySyncCheckpoint => 'view_global_contract_code_by_sync_checkpoint',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryRequestViewGlobalContractCodeByAccountIdBySyncCheckpoint => 'view_global_contract_code_by_account_id_by_sync_checkpoint',
            default => throw new \LogicException('Unknown RpcQueryRequest variant.'),
        };
    }
    public static function viewAccountByBlockId(\Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccountByBlockId $variant): self { return new self($variant); }
    public static function viewCodeByBlockId(\Near\JsonRpc\Generated\Models\RpcQueryRequestViewCodeByBlockId $variant): self { return new self($variant); }
    public static function viewStateByBlockId(\Near\JsonRpc\Generated\Models\RpcQueryRequestViewStateByBlockId $variant): self { return new self($variant); }
    public static function viewAccessKeyByBlockId(\Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccessKeyByBlockId $variant): self { return new self($variant); }
    public static function viewAccessKeyListByBlockId(\Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccessKeyListByBlockId $variant): self { return new self($variant); }
    public static function viewGasKeyNoncesByBlockId(\Near\JsonRpc\Generated\Models\RpcQueryRequestViewGasKeyNoncesByBlockId $variant): self { return new self($variant); }
    public static function callFunctionByBlockId(\Near\JsonRpc\Generated\Models\RpcQueryRequestCallFunctionByBlockId $variant): self { return new self($variant); }
    public static function viewGlobalContractCodeByBlockId(\Near\JsonRpc\Generated\Models\RpcQueryRequestViewGlobalContractCodeByBlockId $variant): self { return new self($variant); }
    public static function viewGlobalContractCodeByAccountIdByBlockId(\Near\JsonRpc\Generated\Models\RpcQueryRequestViewGlobalContractCodeByAccountIdByBlockId $variant): self { return new self($variant); }
    public static function viewAccountByFinality(\Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccountByFinality $variant): self { return new self($variant); }
    public static function viewCodeByFinality(\Near\JsonRpc\Generated\Models\RpcQueryRequestViewCodeByFinality $variant): self { return new self($variant); }
    public static function viewStateByFinality(\Near\JsonRpc\Generated\Models\RpcQueryRequestViewStateByFinality $variant): self { return new self($variant); }
    public static function viewAccessKeyByFinality(\Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccessKeyByFinality $variant): self { return new self($variant); }
    public static function viewAccessKeyListByFinality(\Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccessKeyListByFinality $variant): self { return new self($variant); }
    public static function viewGasKeyNoncesByFinality(\Near\JsonRpc\Generated\Models\RpcQueryRequestViewGasKeyNoncesByFinality $variant): self { return new self($variant); }
    public static function callFunctionByFinality(\Near\JsonRpc\Generated\Models\RpcQueryRequestCallFunctionByFinality $variant): self { return new self($variant); }
    public static function viewGlobalContractCodeByFinality(\Near\JsonRpc\Generated\Models\RpcQueryRequestViewGlobalContractCodeByFinality $variant): self { return new self($variant); }
    public static function viewGlobalContractCodeByAccountIdByFinality(\Near\JsonRpc\Generated\Models\RpcQueryRequestViewGlobalContractCodeByAccountIdByFinality $variant): self { return new self($variant); }
    public static function viewAccountBySyncCheckpoint(\Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccountBySyncCheckpoint $variant): self { return new self($variant); }
    public static function viewCodeBySyncCheckpoint(\Near\JsonRpc\Generated\Models\RpcQueryRequestViewCodeBySyncCheckpoint $variant): self { return new self($variant); }
    public static function viewStateBySyncCheckpoint(\Near\JsonRpc\Generated\Models\RpcQueryRequestViewStateBySyncCheckpoint $variant): self { return new self($variant); }
    public static function viewAccessKeyBySyncCheckpoint(\Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccessKeyBySyncCheckpoint $variant): self { return new self($variant); }
    public static function viewAccessKeyListBySyncCheckpoint(\Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccessKeyListBySyncCheckpoint $variant): self { return new self($variant); }
    public static function viewGasKeyNoncesBySyncCheckpoint(\Near\JsonRpc\Generated\Models\RpcQueryRequestViewGasKeyNoncesBySyncCheckpoint $variant): self { return new self($variant); }
    public static function callFunctionBySyncCheckpoint(\Near\JsonRpc\Generated\Models\RpcQueryRequestCallFunctionBySyncCheckpoint $variant): self { return new self($variant); }
    public static function viewGlobalContractCodeBySyncCheckpoint(\Near\JsonRpc\Generated\Models\RpcQueryRequestViewGlobalContractCodeBySyncCheckpoint $variant): self { return new self($variant); }
    public static function viewGlobalContractCodeByAccountIdBySyncCheckpoint(\Near\JsonRpc\Generated\Models\RpcQueryRequestViewGlobalContractCodeByAccountIdBySyncCheckpoint $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewAccountByBlockId',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewCodeByBlockId',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewStateByBlockId',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewAccessKeyByBlockId',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewAccessKeyListByBlockId',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewGasKeyNoncesByBlockId',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestCallFunctionByBlockId',
      'nullable' => false,
    ),
    7 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewGlobalContractCodeByBlockId',
      'nullable' => false,
    ),
    8 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewGlobalContractCodeByAccountIdByBlockId',
      'nullable' => false,
    ),
    9 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewAccountByFinality',
      'nullable' => false,
    ),
    10 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewCodeByFinality',
      'nullable' => false,
    ),
    11 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewStateByFinality',
      'nullable' => false,
    ),
    12 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewAccessKeyByFinality',
      'nullable' => false,
    ),
    13 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewAccessKeyListByFinality',
      'nullable' => false,
    ),
    14 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewGasKeyNoncesByFinality',
      'nullable' => false,
    ),
    15 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestCallFunctionByFinality',
      'nullable' => false,
    ),
    16 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewGlobalContractCodeByFinality',
      'nullable' => false,
    ),
    17 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewGlobalContractCodeByAccountIdByFinality',
      'nullable' => false,
    ),
    18 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewAccountBySyncCheckpoint',
      'nullable' => false,
    ),
    19 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewCodeBySyncCheckpoint',
      'nullable' => false,
    ),
    20 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewStateBySyncCheckpoint',
      'nullable' => false,
    ),
    21 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewAccessKeyBySyncCheckpoint',
      'nullable' => false,
    ),
    22 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewAccessKeyListBySyncCheckpoint',
      'nullable' => false,
    ),
    23 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewGasKeyNoncesBySyncCheckpoint',
      'nullable' => false,
    ),
    24 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestCallFunctionBySyncCheckpoint',
      'nullable' => false,
    ),
    25 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewGlobalContractCodeBySyncCheckpoint',
      'nullable' => false,
    ),
    26 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewGlobalContractCodeByAccountIdBySyncCheckpoint',
      'nullable' => false,
    ),
  ),
  'title' => 'RpcQueryRequest',
  'type' => 'object',
), 'root'));
        return $this->root;
    }
    public function jsonSerializeForEncoding(): mixed { return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewAccountByBlockId',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewCodeByBlockId',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewStateByBlockId',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewAccessKeyByBlockId',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewAccessKeyListByBlockId',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewGasKeyNoncesByBlockId',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestCallFunctionByBlockId',
      'nullable' => false,
    ),
    7 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewGlobalContractCodeByBlockId',
      'nullable' => false,
    ),
    8 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewGlobalContractCodeByAccountIdByBlockId',
      'nullable' => false,
    ),
    9 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewAccountByFinality',
      'nullable' => false,
    ),
    10 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewCodeByFinality',
      'nullable' => false,
    ),
    11 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewStateByFinality',
      'nullable' => false,
    ),
    12 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewAccessKeyByFinality',
      'nullable' => false,
    ),
    13 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewAccessKeyListByFinality',
      'nullable' => false,
    ),
    14 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewGasKeyNoncesByFinality',
      'nullable' => false,
    ),
    15 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestCallFunctionByFinality',
      'nullable' => false,
    ),
    16 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewGlobalContractCodeByFinality',
      'nullable' => false,
    ),
    17 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewGlobalContractCodeByAccountIdByFinality',
      'nullable' => false,
    ),
    18 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewAccountBySyncCheckpoint',
      'nullable' => false,
    ),
    19 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewCodeBySyncCheckpoint',
      'nullable' => false,
    ),
    20 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewStateBySyncCheckpoint',
      'nullable' => false,
    ),
    21 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewAccessKeyBySyncCheckpoint',
      'nullable' => false,
    ),
    22 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewAccessKeyListBySyncCheckpoint',
      'nullable' => false,
    ),
    23 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewGasKeyNoncesBySyncCheckpoint',
      'nullable' => false,
    ),
    24 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestCallFunctionBySyncCheckpoint',
      'nullable' => false,
    ),
    25 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewGlobalContractCodeBySyncCheckpoint',
      'nullable' => false,
    ),
    26 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryRequestViewGlobalContractCodeByAccountIdBySyncCheckpoint',
      'nullable' => false,
    ),
  ),
  'title' => 'RpcQueryRequest',
  'type' => 'object',
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
