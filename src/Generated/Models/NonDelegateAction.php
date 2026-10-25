<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * An Action that can be included in a transaction or receipt, excluding delegate actions. This type represents all possible action types except DelegateAction to prevent infinite recursion in meta-transactions.
 */
final readonly class NonDelegateAction implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\NonDelegateActionCreateAccount|\Near\JsonRpc\Generated\Models\NonDelegateActionDeployContract|\Near\JsonRpc\Generated\Models\NonDelegateActionFunctionCall|\Near\JsonRpc\Generated\Models\NonDelegateActionTransfer|\Near\JsonRpc\Generated\Models\NonDelegateActionStake|\Near\JsonRpc\Generated\Models\NonDelegateActionAddKey|\Near\JsonRpc\Generated\Models\NonDelegateActionDeleteKey|\Near\JsonRpc\Generated\Models\NonDelegateActionDeleteAccount|\Near\JsonRpc\Generated\Models\NonDelegateActionDeployGlobalContract|\Near\JsonRpc\Generated\Models\NonDelegateActionUseGlobalContract|\Near\JsonRpc\Generated\Models\NonDelegateActionDeterministicStateInit|\Near\JsonRpc\Generated\Models\NonDelegateActionTransferToGasKey|\Near\JsonRpc\Generated\Models\NonDelegateActionWithdrawFromGasKey|\Near\JsonRpc\Generated\Models\NonDelegateActionUniversalStateInit */
    public \Near\JsonRpc\Generated\Models\NonDelegateActionCreateAccount|\Near\JsonRpc\Generated\Models\NonDelegateActionDeployContract|\Near\JsonRpc\Generated\Models\NonDelegateActionFunctionCall|\Near\JsonRpc\Generated\Models\NonDelegateActionTransfer|\Near\JsonRpc\Generated\Models\NonDelegateActionStake|\Near\JsonRpc\Generated\Models\NonDelegateActionAddKey|\Near\JsonRpc\Generated\Models\NonDelegateActionDeleteKey|\Near\JsonRpc\Generated\Models\NonDelegateActionDeleteAccount|\Near\JsonRpc\Generated\Models\NonDelegateActionDeployGlobalContract|\Near\JsonRpc\Generated\Models\NonDelegateActionUseGlobalContract|\Near\JsonRpc\Generated\Models\NonDelegateActionDeterministicStateInit|\Near\JsonRpc\Generated\Models\NonDelegateActionTransferToGasKey|\Near\JsonRpc\Generated\Models\NonDelegateActionWithdrawFromGasKey|\Near\JsonRpc\Generated\Models\NonDelegateActionUniversalStateInit $root;

    public function __construct(\Near\JsonRpc\Generated\Models\NonDelegateActionCreateAccount|\Near\JsonRpc\Generated\Models\NonDelegateActionDeployContract|\Near\JsonRpc\Generated\Models\NonDelegateActionFunctionCall|\Near\JsonRpc\Generated\Models\NonDelegateActionTransfer|\Near\JsonRpc\Generated\Models\NonDelegateActionStake|\Near\JsonRpc\Generated\Models\NonDelegateActionAddKey|\Near\JsonRpc\Generated\Models\NonDelegateActionDeleteKey|\Near\JsonRpc\Generated\Models\NonDelegateActionDeleteAccount|\Near\JsonRpc\Generated\Models\NonDelegateActionDeployGlobalContract|\Near\JsonRpc\Generated\Models\NonDelegateActionUseGlobalContract|\Near\JsonRpc\Generated\Models\NonDelegateActionDeterministicStateInit|\Near\JsonRpc\Generated\Models\NonDelegateActionTransferToGasKey|\Near\JsonRpc\Generated\Models\NonDelegateActionWithdrawFromGasKey|\Near\JsonRpc\Generated\Models\NonDelegateActionUniversalStateInit $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\NonDelegateActionCreateAccount::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\NonDelegateActionDeployContract::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\NonDelegateActionFunctionCall::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\NonDelegateActionTransfer::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[4] = \Near\JsonRpc\Generated\Models\NonDelegateActionStake::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[5] = \Near\JsonRpc\Generated\Models\NonDelegateActionAddKey::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[6] = \Near\JsonRpc\Generated\Models\NonDelegateActionDeleteKey::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[7] = \Near\JsonRpc\Generated\Models\NonDelegateActionDeleteAccount::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[8] = \Near\JsonRpc\Generated\Models\NonDelegateActionDeployGlobalContract::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[9] = \Near\JsonRpc\Generated\Models\NonDelegateActionUseGlobalContract::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[10] = \Near\JsonRpc\Generated\Models\NonDelegateActionDeterministicStateInit::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[11] = \Near\JsonRpc\Generated\Models\NonDelegateActionTransferToGasKey::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[12] = \Near\JsonRpc\Generated\Models\NonDelegateActionWithdrawFromGasKey::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[13] = \Near\JsonRpc\Generated\Models\NonDelegateActionUniversalStateInit::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for NonDelegateAction.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\NonDelegateActionCreateAccount => 'CreateAccount',
            $this->root instanceof \Near\JsonRpc\Generated\Models\NonDelegateActionDeployContract => 'DeployContract',
            $this->root instanceof \Near\JsonRpc\Generated\Models\NonDelegateActionFunctionCall => 'FunctionCall',
            $this->root instanceof \Near\JsonRpc\Generated\Models\NonDelegateActionTransfer => 'Transfer',
            $this->root instanceof \Near\JsonRpc\Generated\Models\NonDelegateActionStake => 'Stake',
            $this->root instanceof \Near\JsonRpc\Generated\Models\NonDelegateActionAddKey => 'AddKey',
            $this->root instanceof \Near\JsonRpc\Generated\Models\NonDelegateActionDeleteKey => 'DeleteKey',
            $this->root instanceof \Near\JsonRpc\Generated\Models\NonDelegateActionDeleteAccount => 'DeleteAccount',
            $this->root instanceof \Near\JsonRpc\Generated\Models\NonDelegateActionDeployGlobalContract => 'DeployGlobalContract',
            $this->root instanceof \Near\JsonRpc\Generated\Models\NonDelegateActionUseGlobalContract => 'UseGlobalContract',
            $this->root instanceof \Near\JsonRpc\Generated\Models\NonDelegateActionDeterministicStateInit => 'DeterministicStateInit',
            $this->root instanceof \Near\JsonRpc\Generated\Models\NonDelegateActionTransferToGasKey => 'TransferToGasKey',
            $this->root instanceof \Near\JsonRpc\Generated\Models\NonDelegateActionWithdrawFromGasKey => 'WithdrawFromGasKey',
            $this->root instanceof \Near\JsonRpc\Generated\Models\NonDelegateActionUniversalStateInit => 'UniversalStateInit',
            default => throw new \LogicException('Unknown NonDelegateAction variant.'),
        };
    }
    public static function createAccount(\Near\JsonRpc\Generated\Models\CreateAccountAction $payload): self { return new self(new \Near\JsonRpc\Generated\Models\NonDelegateActionCreateAccount($payload)); }
    public static function deployContract(\Near\JsonRpc\Generated\Models\DeployContractAction $payload): self { return new self(new \Near\JsonRpc\Generated\Models\NonDelegateActionDeployContract($payload)); }
    public static function functionCall(\Near\JsonRpc\Generated\Models\FunctionCallAction $payload): self { return new self(new \Near\JsonRpc\Generated\Models\NonDelegateActionFunctionCall($payload)); }
    public static function transfer(\Near\JsonRpc\Generated\Models\TransferAction $payload): self { return new self(new \Near\JsonRpc\Generated\Models\NonDelegateActionTransfer($payload)); }
    public static function stake(\Near\JsonRpc\Generated\Models\StakeAction $payload): self { return new self(new \Near\JsonRpc\Generated\Models\NonDelegateActionStake($payload)); }
    public static function addKey(\Near\JsonRpc\Generated\Models\AddKeyAction $payload): self { return new self(new \Near\JsonRpc\Generated\Models\NonDelegateActionAddKey($payload)); }
    public static function deleteKey(\Near\JsonRpc\Generated\Models\DeleteKeyAction $payload): self { return new self(new \Near\JsonRpc\Generated\Models\NonDelegateActionDeleteKey($payload)); }
    public static function deleteAccount(\Near\JsonRpc\Generated\Models\DeleteAccountAction $payload): self { return new self(new \Near\JsonRpc\Generated\Models\NonDelegateActionDeleteAccount($payload)); }
    public static function deployGlobalContract(\Near\JsonRpc\Generated\Models\DeployGlobalContractAction $payload): self { return new self(new \Near\JsonRpc\Generated\Models\NonDelegateActionDeployGlobalContract($payload)); }
    public static function useGlobalContract(\Near\JsonRpc\Generated\Models\UseGlobalContractAction $payload): self { return new self(new \Near\JsonRpc\Generated\Models\NonDelegateActionUseGlobalContract($payload)); }
    public static function deterministicStateInit(\Near\JsonRpc\Generated\Models\DeterministicStateInitAction $payload): self { return new self(new \Near\JsonRpc\Generated\Models\NonDelegateActionDeterministicStateInit($payload)); }
    public static function transferToGasKey(\Near\JsonRpc\Generated\Models\TransferToGasKeyAction $payload): self { return new self(new \Near\JsonRpc\Generated\Models\NonDelegateActionTransferToGasKey($payload)); }
    public static function withdrawFromGasKey(\Near\JsonRpc\Generated\Models\WithdrawFromGasKeyAction $payload): self { return new self(new \Near\JsonRpc\Generated\Models\NonDelegateActionWithdrawFromGasKey($payload)); }
    public static function universalStateInit(\Near\JsonRpc\Generated\Models\UniversalStateInitAction $payload): self { return new self(new \Near\JsonRpc\Generated\Models\NonDelegateActionUniversalStateInit($payload)); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NonDelegateActionCreateAccount',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NonDelegateActionDeployContract',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NonDelegateActionFunctionCall',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NonDelegateActionTransfer',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NonDelegateActionStake',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NonDelegateActionAddKey',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NonDelegateActionDeleteKey',
      'nullable' => false,
    ),
    7 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NonDelegateActionDeleteAccount',
      'nullable' => false,
    ),
    8 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NonDelegateActionDeployGlobalContract',
      'nullable' => false,
    ),
    9 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NonDelegateActionUseGlobalContract',
      'nullable' => false,
    ),
    10 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NonDelegateActionDeterministicStateInit',
      'nullable' => false,
    ),
    11 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NonDelegateActionTransferToGasKey',
      'nullable' => false,
    ),
    12 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NonDelegateActionWithdrawFromGasKey',
      'nullable' => false,
    ),
    13 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NonDelegateActionUniversalStateInit',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NonDelegateActionCreateAccount',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NonDelegateActionDeployContract',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NonDelegateActionFunctionCall',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NonDelegateActionTransfer',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NonDelegateActionStake',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NonDelegateActionAddKey',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NonDelegateActionDeleteKey',
      'nullable' => false,
    ),
    7 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NonDelegateActionDeleteAccount',
      'nullable' => false,
    ),
    8 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NonDelegateActionDeployGlobalContract',
      'nullable' => false,
    ),
    9 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NonDelegateActionUseGlobalContract',
      'nullable' => false,
    ),
    10 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NonDelegateActionDeterministicStateInit',
      'nullable' => false,
    ),
    11 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NonDelegateActionTransferToGasKey',
      'nullable' => false,
    ),
    12 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NonDelegateActionWithdrawFromGasKey',
      'nullable' => false,
    ),
    13 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NonDelegateActionUniversalStateInit',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
