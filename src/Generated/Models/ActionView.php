<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class ActionView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\ActionViewCreateAccount|\Near\JsonRpc\Generated\Models\ActionViewDeployContract|\Near\JsonRpc\Generated\Models\ActionViewFunctionCall|\Near\JsonRpc\Generated\Models\ActionViewTransfer|\Near\JsonRpc\Generated\Models\ActionViewStake|\Near\JsonRpc\Generated\Models\ActionViewAddKey|\Near\JsonRpc\Generated\Models\ActionViewDeleteKey|\Near\JsonRpc\Generated\Models\ActionViewDeleteAccount|\Near\JsonRpc\Generated\Models\ActionViewDelegate|\Near\JsonRpc\Generated\Models\ActionViewDelegateV2|\Near\JsonRpc\Generated\Models\ActionViewDeployGlobalContract|\Near\JsonRpc\Generated\Models\ActionViewDeployGlobalContractByAccountId|\Near\JsonRpc\Generated\Models\ActionViewUseGlobalContract|\Near\JsonRpc\Generated\Models\ActionViewUseGlobalContractByAccountId|\Near\JsonRpc\Generated\Models\ActionViewDeterministicStateInit|\Near\JsonRpc\Generated\Models\ActionViewTransferToGasKey|\Near\JsonRpc\Generated\Models\ActionViewWithdrawFromGasKey|\Near\JsonRpc\Generated\Models\ActionViewUniversalStateInit */
    public \Near\JsonRpc\Generated\Models\ActionViewCreateAccount|\Near\JsonRpc\Generated\Models\ActionViewDeployContract|\Near\JsonRpc\Generated\Models\ActionViewFunctionCall|\Near\JsonRpc\Generated\Models\ActionViewTransfer|\Near\JsonRpc\Generated\Models\ActionViewStake|\Near\JsonRpc\Generated\Models\ActionViewAddKey|\Near\JsonRpc\Generated\Models\ActionViewDeleteKey|\Near\JsonRpc\Generated\Models\ActionViewDeleteAccount|\Near\JsonRpc\Generated\Models\ActionViewDelegate|\Near\JsonRpc\Generated\Models\ActionViewDelegateV2|\Near\JsonRpc\Generated\Models\ActionViewDeployGlobalContract|\Near\JsonRpc\Generated\Models\ActionViewDeployGlobalContractByAccountId|\Near\JsonRpc\Generated\Models\ActionViewUseGlobalContract|\Near\JsonRpc\Generated\Models\ActionViewUseGlobalContractByAccountId|\Near\JsonRpc\Generated\Models\ActionViewDeterministicStateInit|\Near\JsonRpc\Generated\Models\ActionViewTransferToGasKey|\Near\JsonRpc\Generated\Models\ActionViewWithdrawFromGasKey|\Near\JsonRpc\Generated\Models\ActionViewUniversalStateInit $root;

    public function __construct(\Near\JsonRpc\Generated\Models\ActionViewCreateAccount|\Near\JsonRpc\Generated\Models\ActionViewDeployContract|\Near\JsonRpc\Generated\Models\ActionViewFunctionCall|\Near\JsonRpc\Generated\Models\ActionViewTransfer|\Near\JsonRpc\Generated\Models\ActionViewStake|\Near\JsonRpc\Generated\Models\ActionViewAddKey|\Near\JsonRpc\Generated\Models\ActionViewDeleteKey|\Near\JsonRpc\Generated\Models\ActionViewDeleteAccount|\Near\JsonRpc\Generated\Models\ActionViewDelegate|\Near\JsonRpc\Generated\Models\ActionViewDelegateV2|\Near\JsonRpc\Generated\Models\ActionViewDeployGlobalContract|\Near\JsonRpc\Generated\Models\ActionViewDeployGlobalContractByAccountId|\Near\JsonRpc\Generated\Models\ActionViewUseGlobalContract|\Near\JsonRpc\Generated\Models\ActionViewUseGlobalContractByAccountId|\Near\JsonRpc\Generated\Models\ActionViewDeterministicStateInit|\Near\JsonRpc\Generated\Models\ActionViewTransferToGasKey|\Near\JsonRpc\Generated\Models\ActionViewWithdrawFromGasKey|\Near\JsonRpc\Generated\Models\ActionViewUniversalStateInit $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\ActionViewCreateAccount::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\ActionViewDeployContract::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\ActionViewFunctionCall::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\ActionViewTransfer::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[4] = \Near\JsonRpc\Generated\Models\ActionViewStake::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[5] = \Near\JsonRpc\Generated\Models\ActionViewAddKey::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[6] = \Near\JsonRpc\Generated\Models\ActionViewDeleteKey::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[7] = \Near\JsonRpc\Generated\Models\ActionViewDeleteAccount::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[8] = \Near\JsonRpc\Generated\Models\ActionViewDelegate::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[9] = \Near\JsonRpc\Generated\Models\ActionViewDelegateV2::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[10] = \Near\JsonRpc\Generated\Models\ActionViewDeployGlobalContract::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[11] = \Near\JsonRpc\Generated\Models\ActionViewDeployGlobalContractByAccountId::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[12] = \Near\JsonRpc\Generated\Models\ActionViewUseGlobalContract::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[13] = \Near\JsonRpc\Generated\Models\ActionViewUseGlobalContractByAccountId::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[14] = \Near\JsonRpc\Generated\Models\ActionViewDeterministicStateInit::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[15] = \Near\JsonRpc\Generated\Models\ActionViewTransferToGasKey::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[16] = \Near\JsonRpc\Generated\Models\ActionViewWithdrawFromGasKey::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[17] = \Near\JsonRpc\Generated\Models\ActionViewUniversalStateInit::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for ActionView.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionViewCreateAccount => 'CreateAccount',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionViewDeployContract => 'DeployContract',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionViewFunctionCall => 'FunctionCall',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionViewTransfer => 'Transfer',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionViewStake => 'Stake',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionViewAddKey => 'AddKey',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionViewDeleteKey => 'DeleteKey',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionViewDeleteAccount => 'DeleteAccount',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionViewDelegate => 'Delegate',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionViewDelegateV2 => 'DelegateV2',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionViewDeployGlobalContract => 'DeployGlobalContract',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionViewDeployGlobalContractByAccountId => 'DeployGlobalContractByAccountId',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionViewUseGlobalContract => 'UseGlobalContract',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionViewUseGlobalContractByAccountId => 'UseGlobalContractByAccountId',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionViewDeterministicStateInit => 'DeterministicStateInit',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionViewTransferToGasKey => 'TransferToGasKey',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionViewWithdrawFromGasKey => 'WithdrawFromGasKey',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionViewUniversalStateInit => 'UniversalStateInit',
            default => throw new \LogicException('Unknown ActionView variant.'),
        };
    }
    public static function createAccount(): self { return new self(\Near\JsonRpc\Generated\Models\ActionViewCreateAccount::CreateAccount); }
    public static function deployContract(\Near\JsonRpc\Generated\Models\ActionViewDeployContractPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionViewDeployContract($payload)); }
    public static function functionCall(\Near\JsonRpc\Generated\Models\ActionViewFunctionCallPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionViewFunctionCall($payload)); }
    public static function transfer(\Near\JsonRpc\Generated\Models\ActionViewTransferPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionViewTransfer($payload)); }
    public static function stake(\Near\JsonRpc\Generated\Models\ActionViewStakePayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionViewStake($payload)); }
    public static function addKey(\Near\JsonRpc\Generated\Models\ActionViewAddKeyPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionViewAddKey($payload)); }
    public static function deleteKey(\Near\JsonRpc\Generated\Models\ActionViewDeleteKeyPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionViewDeleteKey($payload)); }
    public static function deleteAccount(\Near\JsonRpc\Generated\Models\ActionViewDeleteAccountPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionViewDeleteAccount($payload)); }
    public static function delegate(\Near\JsonRpc\Generated\Models\ActionViewDelegatePayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionViewDelegate($payload)); }
    public static function delegateV2(\Near\JsonRpc\Generated\Models\ActionViewDelegateV2Payload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionViewDelegateV2($payload)); }
    public static function deployGlobalContract(\Near\JsonRpc\Generated\Models\ActionViewDeployGlobalContractPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionViewDeployGlobalContract($payload)); }
    public static function deployGlobalContractByAccountId(\Near\JsonRpc\Generated\Models\ActionViewDeployGlobalContractByAccountIdPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionViewDeployGlobalContractByAccountId($payload)); }
    public static function useGlobalContract(\Near\JsonRpc\Generated\Models\ActionViewUseGlobalContractPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionViewUseGlobalContract($payload)); }
    public static function useGlobalContractByAccountId(\Near\JsonRpc\Generated\Models\ActionViewUseGlobalContractByAccountIdPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionViewUseGlobalContractByAccountId($payload)); }
    public static function deterministicStateInit(\Near\JsonRpc\Generated\Models\ActionViewDeterministicStateInitPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionViewDeterministicStateInit($payload)); }
    public static function transferToGasKey(\Near\JsonRpc\Generated\Models\ActionViewTransferToGasKeyPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionViewTransferToGasKey($payload)); }
    public static function withdrawFromGasKey(\Near\JsonRpc\Generated\Models\ActionViewWithdrawFromGasKeyPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionViewWithdrawFromGasKey($payload)); }
    public static function universalStateInit(\Near\JsonRpc\Generated\Models\ActionViewUniversalStateInitPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionViewUniversalStateInit($payload)); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewCreateAccount',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewDeployContract',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewFunctionCall',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewTransfer',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewStake',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewAddKey',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewDeleteKey',
      'nullable' => false,
    ),
    7 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewDeleteAccount',
      'nullable' => false,
    ),
    8 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewDelegate',
      'nullable' => false,
    ),
    9 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewDelegateV2',
      'nullable' => false,
    ),
    10 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewDeployGlobalContract',
      'nullable' => false,
    ),
    11 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewDeployGlobalContractByAccountId',
      'nullable' => false,
    ),
    12 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewUseGlobalContract',
      'nullable' => false,
    ),
    13 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewUseGlobalContractByAccountId',
      'nullable' => false,
    ),
    14 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewDeterministicStateInit',
      'nullable' => false,
    ),
    15 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewTransferToGasKey',
      'nullable' => false,
    ),
    16 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewWithdrawFromGasKey',
      'nullable' => false,
    ),
    17 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewUniversalStateInit',
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
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewCreateAccount',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewDeployContract',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewFunctionCall',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewTransfer',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewStake',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewAddKey',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewDeleteKey',
      'nullable' => false,
    ),
    7 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewDeleteAccount',
      'nullable' => false,
    ),
    8 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewDelegate',
      'nullable' => false,
    ),
    9 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewDelegateV2',
      'nullable' => false,
    ),
    10 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewDeployGlobalContract',
      'nullable' => false,
    ),
    11 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewDeployGlobalContractByAccountId',
      'nullable' => false,
    ),
    12 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewUseGlobalContract',
      'nullable' => false,
    ),
    13 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewUseGlobalContractByAccountId',
      'nullable' => false,
    ),
    14 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewDeterministicStateInit',
      'nullable' => false,
    ),
    15 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewTransferToGasKey',
      'nullable' => false,
    ),
    16 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewWithdrawFromGasKey',
      'nullable' => false,
    ),
    17 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewUniversalStateInit',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
