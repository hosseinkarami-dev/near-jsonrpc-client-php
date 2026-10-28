<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class ActionErrorKind implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\ActionErrorKindAccountAlreadyExists|\Near\JsonRpc\Generated\Models\ActionErrorKindAccountDoesNotExist|\Near\JsonRpc\Generated\Models\ActionErrorKindCreateAccountOnlyByRegistrar|\Near\JsonRpc\Generated\Models\ActionErrorKindCreateAccountNotAllowed|\Near\JsonRpc\Generated\Models\ActionErrorKindActorNoPermission|\Near\JsonRpc\Generated\Models\ActionErrorKindDeleteKeyDoesNotExist|\Near\JsonRpc\Generated\Models\ActionErrorKindAddKeyAlreadyExists|\Near\JsonRpc\Generated\Models\ActionErrorKindDeleteAccountStaking|\Near\JsonRpc\Generated\Models\ActionErrorKindLackBalanceForState|\Near\JsonRpc\Generated\Models\ActionErrorKindTriesToUnstake|\Near\JsonRpc\Generated\Models\ActionErrorKindTriesToStake|\Near\JsonRpc\Generated\Models\ActionErrorKindInsufficientStake|\Near\JsonRpc\Generated\Models\ActionErrorKindFunctionCallError|\Near\JsonRpc\Generated\Models\ActionErrorKindNewReceiptValidationError|\Near\JsonRpc\Generated\Models\ActionErrorKindOnlyImplicitAccountCreationAllowed|\Near\JsonRpc\Generated\Models\ActionErrorKindDeleteAccountWithLargeState|\Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionInvalidSignature|\Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionSenderDoesNotMatchTxReceiver|\Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionExpired|\Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionAccessKeyError|\Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionInvalidNonce|\Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionNonceTooLarge|\Near\JsonRpc\Generated\Models\ActionErrorKindGlobalContractDoesNotExist|\Near\JsonRpc\Generated\Models\ActionErrorKindGasKeyDoesNotExist|\Near\JsonRpc\Generated\Models\ActionErrorKindInsufficientGasKeyBalance|\Near\JsonRpc\Generated\Models\ActionErrorKindGasKeyBalanceTooHigh|\Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionInvalidNonceIndex|\Near\JsonRpc\Generated\Models\ActionErrorKindTotalPromiseInputSizeExceeded|\Near\JsonRpc\Generated\Models\ActionErrorKindReceiptStorageProofSizeExceeded|\Near\JsonRpc\Generated\Models\ActionErrorKindMalformedUniversalStateInit|\Near\JsonRpc\Generated\Models\ActionErrorKindAccountNotInitialized|\Near\JsonRpc\Generated\Models\ActionErrorKindReservedMethodName */
    public \Near\JsonRpc\Generated\Models\ActionErrorKindAccountAlreadyExists|\Near\JsonRpc\Generated\Models\ActionErrorKindAccountDoesNotExist|\Near\JsonRpc\Generated\Models\ActionErrorKindCreateAccountOnlyByRegistrar|\Near\JsonRpc\Generated\Models\ActionErrorKindCreateAccountNotAllowed|\Near\JsonRpc\Generated\Models\ActionErrorKindActorNoPermission|\Near\JsonRpc\Generated\Models\ActionErrorKindDeleteKeyDoesNotExist|\Near\JsonRpc\Generated\Models\ActionErrorKindAddKeyAlreadyExists|\Near\JsonRpc\Generated\Models\ActionErrorKindDeleteAccountStaking|\Near\JsonRpc\Generated\Models\ActionErrorKindLackBalanceForState|\Near\JsonRpc\Generated\Models\ActionErrorKindTriesToUnstake|\Near\JsonRpc\Generated\Models\ActionErrorKindTriesToStake|\Near\JsonRpc\Generated\Models\ActionErrorKindInsufficientStake|\Near\JsonRpc\Generated\Models\ActionErrorKindFunctionCallError|\Near\JsonRpc\Generated\Models\ActionErrorKindNewReceiptValidationError|\Near\JsonRpc\Generated\Models\ActionErrorKindOnlyImplicitAccountCreationAllowed|\Near\JsonRpc\Generated\Models\ActionErrorKindDeleteAccountWithLargeState|\Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionInvalidSignature|\Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionSenderDoesNotMatchTxReceiver|\Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionExpired|\Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionAccessKeyError|\Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionInvalidNonce|\Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionNonceTooLarge|\Near\JsonRpc\Generated\Models\ActionErrorKindGlobalContractDoesNotExist|\Near\JsonRpc\Generated\Models\ActionErrorKindGasKeyDoesNotExist|\Near\JsonRpc\Generated\Models\ActionErrorKindInsufficientGasKeyBalance|\Near\JsonRpc\Generated\Models\ActionErrorKindGasKeyBalanceTooHigh|\Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionInvalidNonceIndex|\Near\JsonRpc\Generated\Models\ActionErrorKindTotalPromiseInputSizeExceeded|\Near\JsonRpc\Generated\Models\ActionErrorKindReceiptStorageProofSizeExceeded|\Near\JsonRpc\Generated\Models\ActionErrorKindMalformedUniversalStateInit|\Near\JsonRpc\Generated\Models\ActionErrorKindAccountNotInitialized|\Near\JsonRpc\Generated\Models\ActionErrorKindReservedMethodName $root;

    public function __construct(\Near\JsonRpc\Generated\Models\ActionErrorKindAccountAlreadyExists|\Near\JsonRpc\Generated\Models\ActionErrorKindAccountDoesNotExist|\Near\JsonRpc\Generated\Models\ActionErrorKindCreateAccountOnlyByRegistrar|\Near\JsonRpc\Generated\Models\ActionErrorKindCreateAccountNotAllowed|\Near\JsonRpc\Generated\Models\ActionErrorKindActorNoPermission|\Near\JsonRpc\Generated\Models\ActionErrorKindDeleteKeyDoesNotExist|\Near\JsonRpc\Generated\Models\ActionErrorKindAddKeyAlreadyExists|\Near\JsonRpc\Generated\Models\ActionErrorKindDeleteAccountStaking|\Near\JsonRpc\Generated\Models\ActionErrorKindLackBalanceForState|\Near\JsonRpc\Generated\Models\ActionErrorKindTriesToUnstake|\Near\JsonRpc\Generated\Models\ActionErrorKindTriesToStake|\Near\JsonRpc\Generated\Models\ActionErrorKindInsufficientStake|\Near\JsonRpc\Generated\Models\ActionErrorKindFunctionCallError|\Near\JsonRpc\Generated\Models\ActionErrorKindNewReceiptValidationError|\Near\JsonRpc\Generated\Models\ActionErrorKindOnlyImplicitAccountCreationAllowed|\Near\JsonRpc\Generated\Models\ActionErrorKindDeleteAccountWithLargeState|\Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionInvalidSignature|\Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionSenderDoesNotMatchTxReceiver|\Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionExpired|\Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionAccessKeyError|\Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionInvalidNonce|\Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionNonceTooLarge|\Near\JsonRpc\Generated\Models\ActionErrorKindGlobalContractDoesNotExist|\Near\JsonRpc\Generated\Models\ActionErrorKindGasKeyDoesNotExist|\Near\JsonRpc\Generated\Models\ActionErrorKindInsufficientGasKeyBalance|\Near\JsonRpc\Generated\Models\ActionErrorKindGasKeyBalanceTooHigh|\Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionInvalidNonceIndex|\Near\JsonRpc\Generated\Models\ActionErrorKindTotalPromiseInputSizeExceeded|\Near\JsonRpc\Generated\Models\ActionErrorKindReceiptStorageProofSizeExceeded|\Near\JsonRpc\Generated\Models\ActionErrorKindMalformedUniversalStateInit|\Near\JsonRpc\Generated\Models\ActionErrorKindAccountNotInitialized|\Near\JsonRpc\Generated\Models\ActionErrorKindReservedMethodName $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\ActionErrorKindAccountAlreadyExists::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\ActionErrorKindAccountDoesNotExist::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\ActionErrorKindCreateAccountOnlyByRegistrar::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\ActionErrorKindCreateAccountNotAllowed::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[4] = \Near\JsonRpc\Generated\Models\ActionErrorKindActorNoPermission::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[5] = \Near\JsonRpc\Generated\Models\ActionErrorKindDeleteKeyDoesNotExist::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[6] = \Near\JsonRpc\Generated\Models\ActionErrorKindAddKeyAlreadyExists::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[7] = \Near\JsonRpc\Generated\Models\ActionErrorKindDeleteAccountStaking::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[8] = \Near\JsonRpc\Generated\Models\ActionErrorKindLackBalanceForState::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[9] = \Near\JsonRpc\Generated\Models\ActionErrorKindTriesToUnstake::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[10] = \Near\JsonRpc\Generated\Models\ActionErrorKindTriesToStake::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[11] = \Near\JsonRpc\Generated\Models\ActionErrorKindInsufficientStake::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[12] = \Near\JsonRpc\Generated\Models\ActionErrorKindFunctionCallError::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[13] = \Near\JsonRpc\Generated\Models\ActionErrorKindNewReceiptValidationError::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[14] = \Near\JsonRpc\Generated\Models\ActionErrorKindOnlyImplicitAccountCreationAllowed::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[15] = \Near\JsonRpc\Generated\Models\ActionErrorKindDeleteAccountWithLargeState::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[16] = \Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionInvalidSignature::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[17] = \Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionSenderDoesNotMatchTxReceiver::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[18] = \Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionExpired::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[19] = \Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionAccessKeyError::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[20] = \Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionInvalidNonce::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[21] = \Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionNonceTooLarge::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[22] = \Near\JsonRpc\Generated\Models\ActionErrorKindGlobalContractDoesNotExist::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[23] = \Near\JsonRpc\Generated\Models\ActionErrorKindGasKeyDoesNotExist::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[24] = \Near\JsonRpc\Generated\Models\ActionErrorKindInsufficientGasKeyBalance::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[25] = \Near\JsonRpc\Generated\Models\ActionErrorKindGasKeyBalanceTooHigh::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[26] = \Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionInvalidNonceIndex::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[27] = \Near\JsonRpc\Generated\Models\ActionErrorKindTotalPromiseInputSizeExceeded::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[28] = \Near\JsonRpc\Generated\Models\ActionErrorKindReceiptStorageProofSizeExceeded::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[29] = \Near\JsonRpc\Generated\Models\ActionErrorKindMalformedUniversalStateInit::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[30] = \Near\JsonRpc\Generated\Models\ActionErrorKindAccountNotInitialized::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[31] = \Near\JsonRpc\Generated\Models\ActionErrorKindReservedMethodName::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for ActionErrorKind.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionErrorKindAccountAlreadyExists => 'AccountAlreadyExists',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionErrorKindAccountDoesNotExist => 'AccountDoesNotExist',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionErrorKindCreateAccountOnlyByRegistrar => 'CreateAccountOnlyByRegistrar',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionErrorKindCreateAccountNotAllowed => 'CreateAccountNotAllowed',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionErrorKindActorNoPermission => 'ActorNoPermission',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionErrorKindDeleteKeyDoesNotExist => 'DeleteKeyDoesNotExist',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionErrorKindAddKeyAlreadyExists => 'AddKeyAlreadyExists',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionErrorKindDeleteAccountStaking => 'DeleteAccountStaking',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionErrorKindLackBalanceForState => 'LackBalanceForState',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionErrorKindTriesToUnstake => 'TriesToUnstake',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionErrorKindTriesToStake => 'TriesToStake',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionErrorKindInsufficientStake => 'InsufficientStake',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionErrorKindFunctionCallError => 'FunctionCallError',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionErrorKindNewReceiptValidationError => 'NewReceiptValidationError',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionErrorKindOnlyImplicitAccountCreationAllowed => 'OnlyImplicitAccountCreationAllowed',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionErrorKindDeleteAccountWithLargeState => 'DeleteAccountWithLargeState',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionInvalidSignature => 'DelegateActionInvalidSignature',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionSenderDoesNotMatchTxReceiver => 'DelegateActionSenderDoesNotMatchTxReceiver',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionExpired => 'DelegateActionExpired',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionAccessKeyError => 'DelegateActionAccessKeyError',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionInvalidNonce => 'DelegateActionInvalidNonce',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionNonceTooLarge => 'DelegateActionNonceTooLarge',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionErrorKindGlobalContractDoesNotExist => 'GlobalContractDoesNotExist',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionErrorKindGasKeyDoesNotExist => 'GasKeyDoesNotExist',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionErrorKindInsufficientGasKeyBalance => 'InsufficientGasKeyBalance',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionErrorKindGasKeyBalanceTooHigh => 'GasKeyBalanceTooHigh',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionInvalidNonceIndex => 'DelegateActionInvalidNonceIndex',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionErrorKindTotalPromiseInputSizeExceeded => 'TotalPromiseInputSizeExceeded',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionErrorKindReceiptStorageProofSizeExceeded => 'ReceiptStorageProofSizeExceeded',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionErrorKindMalformedUniversalStateInit => 'MalformedUniversalStateInit',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionErrorKindAccountNotInitialized => 'AccountNotInitialized',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionErrorKindReservedMethodName => 'ReservedMethodName',
            default => throw new \LogicException('Unknown ActionErrorKind variant.'),
        };
    }
    public static function accountAlreadyExists(\Near\JsonRpc\Generated\Models\ActionErrorKindAccountAlreadyExistsPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionErrorKindAccountAlreadyExists($payload)); }
    public static function accountDoesNotExist(\Near\JsonRpc\Generated\Models\ActionErrorKindAccountDoesNotExistPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionErrorKindAccountDoesNotExist($payload)); }
    public static function createAccountOnlyByRegistrar(\Near\JsonRpc\Generated\Models\ActionErrorKindCreateAccountOnlyByRegistrarPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionErrorKindCreateAccountOnlyByRegistrar($payload)); }
    public static function createAccountNotAllowed(\Near\JsonRpc\Generated\Models\ActionErrorKindCreateAccountNotAllowedPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionErrorKindCreateAccountNotAllowed($payload)); }
    public static function actorNoPermission(\Near\JsonRpc\Generated\Models\ActionErrorKindActorNoPermissionPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionErrorKindActorNoPermission($payload)); }
    public static function deleteKeyDoesNotExist(\Near\JsonRpc\Generated\Models\ActionErrorKindDeleteKeyDoesNotExistPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionErrorKindDeleteKeyDoesNotExist($payload)); }
    public static function addKeyAlreadyExists(\Near\JsonRpc\Generated\Models\ActionErrorKindAddKeyAlreadyExistsPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionErrorKindAddKeyAlreadyExists($payload)); }
    public static function deleteAccountStaking(\Near\JsonRpc\Generated\Models\ActionErrorKindDeleteAccountStakingPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionErrorKindDeleteAccountStaking($payload)); }
    public static function lackBalanceForState(\Near\JsonRpc\Generated\Models\ActionErrorKindLackBalanceForStatePayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionErrorKindLackBalanceForState($payload)); }
    public static function triesToUnstake(\Near\JsonRpc\Generated\Models\ActionErrorKindTriesToUnstakePayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionErrorKindTriesToUnstake($payload)); }
    public static function triesToStake(\Near\JsonRpc\Generated\Models\ActionErrorKindTriesToStakePayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionErrorKindTriesToStake($payload)); }
    public static function insufficientStake(\Near\JsonRpc\Generated\Models\ActionErrorKindInsufficientStakePayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionErrorKindInsufficientStake($payload)); }
    public static function functionCallError(\Near\JsonRpc\Generated\Models\FunctionCallError $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionErrorKindFunctionCallError($payload)); }
    public static function newReceiptValidationError(\Near\JsonRpc\Generated\Models\ReceiptValidationError $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionErrorKindNewReceiptValidationError($payload)); }
    public static function onlyImplicitAccountCreationAllowed(\Near\JsonRpc\Generated\Models\ActionErrorKindOnlyImplicitAccountCreationAllowedPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionErrorKindOnlyImplicitAccountCreationAllowed($payload)); }
    public static function deleteAccountWithLargeState(\Near\JsonRpc\Generated\Models\ActionErrorKindDeleteAccountWithLargeStatePayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionErrorKindDeleteAccountWithLargeState($payload)); }
    public static function delegateActionInvalidSignature(): self { return new self(\Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionInvalidSignature::DelegateActionInvalidSignature); }
    public static function delegateActionSenderDoesNotMatchTxReceiver(\Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionSenderDoesNotMatchTxReceiverPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionSenderDoesNotMatchTxReceiver($payload)); }
    public static function delegateActionExpired(): self { return new self(\Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionExpired::DelegateActionExpired); }
    public static function delegateActionAccessKeyError(\Near\JsonRpc\Generated\Models\InvalidAccessKeyError $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionAccessKeyError($payload)); }
    public static function delegateActionInvalidNonce(\Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionInvalidNoncePayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionInvalidNonce($payload)); }
    public static function delegateActionNonceTooLarge(\Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionNonceTooLargePayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionNonceTooLarge($payload)); }
    public static function globalContractDoesNotExist(\Near\JsonRpc\Generated\Models\ActionErrorKindGlobalContractDoesNotExistPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionErrorKindGlobalContractDoesNotExist($payload)); }
    public static function gasKeyDoesNotExist(\Near\JsonRpc\Generated\Models\ActionErrorKindGasKeyDoesNotExistPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionErrorKindGasKeyDoesNotExist($payload)); }
    public static function insufficientGasKeyBalance(\Near\JsonRpc\Generated\Models\ActionErrorKindInsufficientGasKeyBalancePayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionErrorKindInsufficientGasKeyBalance($payload)); }
    public static function gasKeyBalanceTooHigh(\Near\JsonRpc\Generated\Models\ActionErrorKindGasKeyBalanceTooHighPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionErrorKindGasKeyBalanceTooHigh($payload)); }
    public static function delegateActionInvalidNonceIndex(\Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionInvalidNonceIndexPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionInvalidNonceIndex($payload)); }
    public static function totalPromiseInputSizeExceeded(\Near\JsonRpc\Generated\Models\ActionErrorKindTotalPromiseInputSizeExceededPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionErrorKindTotalPromiseInputSizeExceeded($payload)); }
    public static function receiptStorageProofSizeExceeded(\Near\JsonRpc\Generated\Models\ActionErrorKindReceiptStorageProofSizeExceededPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionErrorKindReceiptStorageProofSizeExceeded($payload)); }
    public static function malformedUniversalStateInit(): self { return new self(\Near\JsonRpc\Generated\Models\ActionErrorKindMalformedUniversalStateInit::MalformedUniversalStateInit); }
    public static function accountNotInitialized(\Near\JsonRpc\Generated\Models\ActionErrorKindAccountNotInitializedPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionErrorKindAccountNotInitialized($payload)); }
    public static function reservedMethodName(\Near\JsonRpc\Generated\Models\ActionErrorKindReservedMethodNamePayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionErrorKindReservedMethodName($payload)); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindAccountAlreadyExists',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindAccountDoesNotExist',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindCreateAccountOnlyByRegistrar',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindCreateAccountNotAllowed',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindActorNoPermission',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDeleteKeyDoesNotExist',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindAddKeyAlreadyExists',
      'nullable' => false,
    ),
    7 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDeleteAccountStaking',
      'nullable' => false,
    ),
    8 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindLackBalanceForState',
      'nullable' => false,
    ),
    9 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindTriesToUnstake',
      'nullable' => false,
    ),
    10 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindTriesToStake',
      'nullable' => false,
    ),
    11 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindInsufficientStake',
      'nullable' => false,
    ),
    12 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindFunctionCallError',
      'nullable' => false,
    ),
    13 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindNewReceiptValidationError',
      'nullable' => false,
    ),
    14 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindOnlyImplicitAccountCreationAllowed',
      'nullable' => false,
    ),
    15 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDeleteAccountWithLargeState',
      'nullable' => false,
    ),
    16 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDelegateActionInvalidSignature',
      'nullable' => false,
    ),
    17 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDelegateActionSenderDoesNotMatchTxReceiver',
      'nullable' => false,
    ),
    18 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDelegateActionExpired',
      'nullable' => false,
    ),
    19 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDelegateActionAccessKeyError',
      'nullable' => false,
    ),
    20 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDelegateActionInvalidNonce',
      'nullable' => false,
    ),
    21 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDelegateActionNonceTooLarge',
      'nullable' => false,
    ),
    22 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindGlobalContractDoesNotExist',
      'nullable' => false,
    ),
    23 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindGasKeyDoesNotExist',
      'nullable' => false,
    ),
    24 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindInsufficientGasKeyBalance',
      'nullable' => false,
    ),
    25 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindGasKeyBalanceTooHigh',
      'nullable' => false,
    ),
    26 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDelegateActionInvalidNonceIndex',
      'nullable' => false,
    ),
    27 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindTotalPromiseInputSizeExceeded',
      'nullable' => false,
    ),
    28 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindReceiptStorageProofSizeExceeded',
      'nullable' => false,
    ),
    29 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindMalformedUniversalStateInit',
      'nullable' => false,
    ),
    30 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindAccountNotInitialized',
      'nullable' => false,
    ),
    31 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindReservedMethodName',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindAccountAlreadyExists',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindAccountDoesNotExist',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindCreateAccountOnlyByRegistrar',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindCreateAccountNotAllowed',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindActorNoPermission',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDeleteKeyDoesNotExist',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindAddKeyAlreadyExists',
      'nullable' => false,
    ),
    7 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDeleteAccountStaking',
      'nullable' => false,
    ),
    8 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindLackBalanceForState',
      'nullable' => false,
    ),
    9 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindTriesToUnstake',
      'nullable' => false,
    ),
    10 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindTriesToStake',
      'nullable' => false,
    ),
    11 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindInsufficientStake',
      'nullable' => false,
    ),
    12 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindFunctionCallError',
      'nullable' => false,
    ),
    13 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindNewReceiptValidationError',
      'nullable' => false,
    ),
    14 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindOnlyImplicitAccountCreationAllowed',
      'nullable' => false,
    ),
    15 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDeleteAccountWithLargeState',
      'nullable' => false,
    ),
    16 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDelegateActionInvalidSignature',
      'nullable' => false,
    ),
    17 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDelegateActionSenderDoesNotMatchTxReceiver',
      'nullable' => false,
    ),
    18 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDelegateActionExpired',
      'nullable' => false,
    ),
    19 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDelegateActionAccessKeyError',
      'nullable' => false,
    ),
    20 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDelegateActionInvalidNonce',
      'nullable' => false,
    ),
    21 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDelegateActionNonceTooLarge',
      'nullable' => false,
    ),
    22 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindGlobalContractDoesNotExist',
      'nullable' => false,
    ),
    23 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindGasKeyDoesNotExist',
      'nullable' => false,
    ),
    24 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindInsufficientGasKeyBalance',
      'nullable' => false,
    ),
    25 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindGasKeyBalanceTooHigh',
      'nullable' => false,
    ),
    26 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDelegateActionInvalidNonceIndex',
      'nullable' => false,
    ),
    27 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindTotalPromiseInputSizeExceeded',
      'nullable' => false,
    ),
    28 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindReceiptStorageProofSizeExceeded',
      'nullable' => false,
    ),
    29 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindMalformedUniversalStateInit',
      'nullable' => false,
    ),
    30 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindAccountNotInitialized',
      'nullable' => false,
    ),
    31 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindReservedMethodName',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
