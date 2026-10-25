<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class HostError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\HostErrorBadUtf16|\Near\JsonRpc\Generated\Models\HostErrorBadUtf8|\Near\JsonRpc\Generated\Models\HostErrorGasExceeded|\Near\JsonRpc\Generated\Models\HostErrorGasLimitExceeded|\Near\JsonRpc\Generated\Models\HostErrorBalanceExceeded|\Near\JsonRpc\Generated\Models\HostErrorEmptyMethodName|\Near\JsonRpc\Generated\Models\HostErrorGuestPanic|\Near\JsonRpc\Generated\Models\HostErrorIntegerOverflow|\Near\JsonRpc\Generated\Models\HostErrorInvalidPromiseIndex|\Near\JsonRpc\Generated\Models\HostErrorCannotAppendActionToJointPromise|\Near\JsonRpc\Generated\Models\HostErrorCannotReturnJointPromise|\Near\JsonRpc\Generated\Models\HostErrorInvalidPromiseResultIndex|\Near\JsonRpc\Generated\Models\HostErrorInvalidRegisterId|\Near\JsonRpc\Generated\Models\HostErrorIteratorWasInvalidated|\Near\JsonRpc\Generated\Models\HostErrorMemoryAccessViolation|\Near\JsonRpc\Generated\Models\HostErrorInvalidReceiptIndex|\Near\JsonRpc\Generated\Models\HostErrorInvalidIteratorIndex|\Near\JsonRpc\Generated\Models\HostErrorInvalidAccountId|\Near\JsonRpc\Generated\Models\HostErrorInvalidMethodName|\Near\JsonRpc\Generated\Models\HostErrorInvalidPublicKey|\Near\JsonRpc\Generated\Models\HostErrorProhibitedInView|\Near\JsonRpc\Generated\Models\HostErrorNumberOfLogsExceeded|\Near\JsonRpc\Generated\Models\HostErrorKeyLengthExceeded|\Near\JsonRpc\Generated\Models\HostErrorValueLengthExceeded|\Near\JsonRpc\Generated\Models\HostErrorTotalLogLengthExceeded|\Near\JsonRpc\Generated\Models\HostErrorNumberPromisesExceeded|\Near\JsonRpc\Generated\Models\HostErrorNumberInputDataDependenciesExceeded|\Near\JsonRpc\Generated\Models\HostErrorReturnedValueLengthExceeded|\Near\JsonRpc\Generated\Models\HostErrorContractSizeExceeded|\Near\JsonRpc\Generated\Models\HostErrorDeprecated|\Near\JsonRpc\Generated\Models\HostErrorEcRecoverError|\Near\JsonRpc\Generated\Models\HostErrorAltBn128InvalidInput|\Near\JsonRpc\Generated\Models\HostErrorEd25519VerifyInvalidInput|\Near\JsonRpc\Generated\Models\HostErrorP256VerifyInvalidInput|\Near\JsonRpc\Generated\Models\HostErrorMlDsaVerifyInvalidInput|\Near\JsonRpc\Generated\Models\HostErrorProhibitedInExternalCall|\Near\JsonRpc\Generated\Models\HostErrorDepositInExternalCall */
    public \Near\JsonRpc\Generated\Models\HostErrorBadUtf16|\Near\JsonRpc\Generated\Models\HostErrorBadUtf8|\Near\JsonRpc\Generated\Models\HostErrorGasExceeded|\Near\JsonRpc\Generated\Models\HostErrorGasLimitExceeded|\Near\JsonRpc\Generated\Models\HostErrorBalanceExceeded|\Near\JsonRpc\Generated\Models\HostErrorEmptyMethodName|\Near\JsonRpc\Generated\Models\HostErrorGuestPanic|\Near\JsonRpc\Generated\Models\HostErrorIntegerOverflow|\Near\JsonRpc\Generated\Models\HostErrorInvalidPromiseIndex|\Near\JsonRpc\Generated\Models\HostErrorCannotAppendActionToJointPromise|\Near\JsonRpc\Generated\Models\HostErrorCannotReturnJointPromise|\Near\JsonRpc\Generated\Models\HostErrorInvalidPromiseResultIndex|\Near\JsonRpc\Generated\Models\HostErrorInvalidRegisterId|\Near\JsonRpc\Generated\Models\HostErrorIteratorWasInvalidated|\Near\JsonRpc\Generated\Models\HostErrorMemoryAccessViolation|\Near\JsonRpc\Generated\Models\HostErrorInvalidReceiptIndex|\Near\JsonRpc\Generated\Models\HostErrorInvalidIteratorIndex|\Near\JsonRpc\Generated\Models\HostErrorInvalidAccountId|\Near\JsonRpc\Generated\Models\HostErrorInvalidMethodName|\Near\JsonRpc\Generated\Models\HostErrorInvalidPublicKey|\Near\JsonRpc\Generated\Models\HostErrorProhibitedInView|\Near\JsonRpc\Generated\Models\HostErrorNumberOfLogsExceeded|\Near\JsonRpc\Generated\Models\HostErrorKeyLengthExceeded|\Near\JsonRpc\Generated\Models\HostErrorValueLengthExceeded|\Near\JsonRpc\Generated\Models\HostErrorTotalLogLengthExceeded|\Near\JsonRpc\Generated\Models\HostErrorNumberPromisesExceeded|\Near\JsonRpc\Generated\Models\HostErrorNumberInputDataDependenciesExceeded|\Near\JsonRpc\Generated\Models\HostErrorReturnedValueLengthExceeded|\Near\JsonRpc\Generated\Models\HostErrorContractSizeExceeded|\Near\JsonRpc\Generated\Models\HostErrorDeprecated|\Near\JsonRpc\Generated\Models\HostErrorEcRecoverError|\Near\JsonRpc\Generated\Models\HostErrorAltBn128InvalidInput|\Near\JsonRpc\Generated\Models\HostErrorEd25519VerifyInvalidInput|\Near\JsonRpc\Generated\Models\HostErrorP256VerifyInvalidInput|\Near\JsonRpc\Generated\Models\HostErrorMlDsaVerifyInvalidInput|\Near\JsonRpc\Generated\Models\HostErrorProhibitedInExternalCall|\Near\JsonRpc\Generated\Models\HostErrorDepositInExternalCall $root;

    public function __construct(\Near\JsonRpc\Generated\Models\HostErrorBadUtf16|\Near\JsonRpc\Generated\Models\HostErrorBadUtf8|\Near\JsonRpc\Generated\Models\HostErrorGasExceeded|\Near\JsonRpc\Generated\Models\HostErrorGasLimitExceeded|\Near\JsonRpc\Generated\Models\HostErrorBalanceExceeded|\Near\JsonRpc\Generated\Models\HostErrorEmptyMethodName|\Near\JsonRpc\Generated\Models\HostErrorGuestPanic|\Near\JsonRpc\Generated\Models\HostErrorIntegerOverflow|\Near\JsonRpc\Generated\Models\HostErrorInvalidPromiseIndex|\Near\JsonRpc\Generated\Models\HostErrorCannotAppendActionToJointPromise|\Near\JsonRpc\Generated\Models\HostErrorCannotReturnJointPromise|\Near\JsonRpc\Generated\Models\HostErrorInvalidPromiseResultIndex|\Near\JsonRpc\Generated\Models\HostErrorInvalidRegisterId|\Near\JsonRpc\Generated\Models\HostErrorIteratorWasInvalidated|\Near\JsonRpc\Generated\Models\HostErrorMemoryAccessViolation|\Near\JsonRpc\Generated\Models\HostErrorInvalidReceiptIndex|\Near\JsonRpc\Generated\Models\HostErrorInvalidIteratorIndex|\Near\JsonRpc\Generated\Models\HostErrorInvalidAccountId|\Near\JsonRpc\Generated\Models\HostErrorInvalidMethodName|\Near\JsonRpc\Generated\Models\HostErrorInvalidPublicKey|\Near\JsonRpc\Generated\Models\HostErrorProhibitedInView|\Near\JsonRpc\Generated\Models\HostErrorNumberOfLogsExceeded|\Near\JsonRpc\Generated\Models\HostErrorKeyLengthExceeded|\Near\JsonRpc\Generated\Models\HostErrorValueLengthExceeded|\Near\JsonRpc\Generated\Models\HostErrorTotalLogLengthExceeded|\Near\JsonRpc\Generated\Models\HostErrorNumberPromisesExceeded|\Near\JsonRpc\Generated\Models\HostErrorNumberInputDataDependenciesExceeded|\Near\JsonRpc\Generated\Models\HostErrorReturnedValueLengthExceeded|\Near\JsonRpc\Generated\Models\HostErrorContractSizeExceeded|\Near\JsonRpc\Generated\Models\HostErrorDeprecated|\Near\JsonRpc\Generated\Models\HostErrorEcRecoverError|\Near\JsonRpc\Generated\Models\HostErrorAltBn128InvalidInput|\Near\JsonRpc\Generated\Models\HostErrorEd25519VerifyInvalidInput|\Near\JsonRpc\Generated\Models\HostErrorP256VerifyInvalidInput|\Near\JsonRpc\Generated\Models\HostErrorMlDsaVerifyInvalidInput|\Near\JsonRpc\Generated\Models\HostErrorProhibitedInExternalCall|\Near\JsonRpc\Generated\Models\HostErrorDepositInExternalCall $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\HostErrorBadUtf16::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\HostErrorBadUtf8::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\HostErrorGasExceeded::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\HostErrorGasLimitExceeded::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[4] = \Near\JsonRpc\Generated\Models\HostErrorBalanceExceeded::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[5] = \Near\JsonRpc\Generated\Models\HostErrorEmptyMethodName::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[6] = \Near\JsonRpc\Generated\Models\HostErrorGuestPanic::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[7] = \Near\JsonRpc\Generated\Models\HostErrorIntegerOverflow::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[8] = \Near\JsonRpc\Generated\Models\HostErrorInvalidPromiseIndex::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[9] = \Near\JsonRpc\Generated\Models\HostErrorCannotAppendActionToJointPromise::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[10] = \Near\JsonRpc\Generated\Models\HostErrorCannotReturnJointPromise::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[11] = \Near\JsonRpc\Generated\Models\HostErrorInvalidPromiseResultIndex::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[12] = \Near\JsonRpc\Generated\Models\HostErrorInvalidRegisterId::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[13] = \Near\JsonRpc\Generated\Models\HostErrorIteratorWasInvalidated::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[14] = \Near\JsonRpc\Generated\Models\HostErrorMemoryAccessViolation::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[15] = \Near\JsonRpc\Generated\Models\HostErrorInvalidReceiptIndex::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[16] = \Near\JsonRpc\Generated\Models\HostErrorInvalidIteratorIndex::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[17] = \Near\JsonRpc\Generated\Models\HostErrorInvalidAccountId::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[18] = \Near\JsonRpc\Generated\Models\HostErrorInvalidMethodName::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[19] = \Near\JsonRpc\Generated\Models\HostErrorInvalidPublicKey::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[20] = \Near\JsonRpc\Generated\Models\HostErrorProhibitedInView::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[21] = \Near\JsonRpc\Generated\Models\HostErrorNumberOfLogsExceeded::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[22] = \Near\JsonRpc\Generated\Models\HostErrorKeyLengthExceeded::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[23] = \Near\JsonRpc\Generated\Models\HostErrorValueLengthExceeded::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[24] = \Near\JsonRpc\Generated\Models\HostErrorTotalLogLengthExceeded::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[25] = \Near\JsonRpc\Generated\Models\HostErrorNumberPromisesExceeded::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[26] = \Near\JsonRpc\Generated\Models\HostErrorNumberInputDataDependenciesExceeded::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[27] = \Near\JsonRpc\Generated\Models\HostErrorReturnedValueLengthExceeded::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[28] = \Near\JsonRpc\Generated\Models\HostErrorContractSizeExceeded::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[29] = \Near\JsonRpc\Generated\Models\HostErrorDeprecated::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[30] = \Near\JsonRpc\Generated\Models\HostErrorEcRecoverError::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[31] = \Near\JsonRpc\Generated\Models\HostErrorAltBn128InvalidInput::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[32] = \Near\JsonRpc\Generated\Models\HostErrorEd25519VerifyInvalidInput::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[33] = \Near\JsonRpc\Generated\Models\HostErrorP256VerifyInvalidInput::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[34] = \Near\JsonRpc\Generated\Models\HostErrorMlDsaVerifyInvalidInput::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[35] = \Near\JsonRpc\Generated\Models\HostErrorProhibitedInExternalCall::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[36] = \Near\JsonRpc\Generated\Models\HostErrorDepositInExternalCall::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for HostError.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\HostErrorBadUtf16 => 'BadUTF16',
            $this->root instanceof \Near\JsonRpc\Generated\Models\HostErrorBadUtf8 => 'BadUTF8',
            $this->root instanceof \Near\JsonRpc\Generated\Models\HostErrorGasExceeded => 'GasExceeded',
            $this->root instanceof \Near\JsonRpc\Generated\Models\HostErrorGasLimitExceeded => 'GasLimitExceeded',
            $this->root instanceof \Near\JsonRpc\Generated\Models\HostErrorBalanceExceeded => 'BalanceExceeded',
            $this->root instanceof \Near\JsonRpc\Generated\Models\HostErrorEmptyMethodName => 'EmptyMethodName',
            $this->root instanceof \Near\JsonRpc\Generated\Models\HostErrorGuestPanic => 'GuestPanic',
            $this->root instanceof \Near\JsonRpc\Generated\Models\HostErrorIntegerOverflow => 'IntegerOverflow',
            $this->root instanceof \Near\JsonRpc\Generated\Models\HostErrorInvalidPromiseIndex => 'InvalidPromiseIndex',
            $this->root instanceof \Near\JsonRpc\Generated\Models\HostErrorCannotAppendActionToJointPromise => 'CannotAppendActionToJointPromise',
            $this->root instanceof \Near\JsonRpc\Generated\Models\HostErrorCannotReturnJointPromise => 'CannotReturnJointPromise',
            $this->root instanceof \Near\JsonRpc\Generated\Models\HostErrorInvalidPromiseResultIndex => 'InvalidPromiseResultIndex',
            $this->root instanceof \Near\JsonRpc\Generated\Models\HostErrorInvalidRegisterId => 'InvalidRegisterId',
            $this->root instanceof \Near\JsonRpc\Generated\Models\HostErrorIteratorWasInvalidated => 'IteratorWasInvalidated',
            $this->root instanceof \Near\JsonRpc\Generated\Models\HostErrorMemoryAccessViolation => 'MemoryAccessViolation',
            $this->root instanceof \Near\JsonRpc\Generated\Models\HostErrorInvalidReceiptIndex => 'InvalidReceiptIndex',
            $this->root instanceof \Near\JsonRpc\Generated\Models\HostErrorInvalidIteratorIndex => 'InvalidIteratorIndex',
            $this->root instanceof \Near\JsonRpc\Generated\Models\HostErrorInvalidAccountId => 'InvalidAccountId',
            $this->root instanceof \Near\JsonRpc\Generated\Models\HostErrorInvalidMethodName => 'InvalidMethodName',
            $this->root instanceof \Near\JsonRpc\Generated\Models\HostErrorInvalidPublicKey => 'InvalidPublicKey',
            $this->root instanceof \Near\JsonRpc\Generated\Models\HostErrorProhibitedInView => 'ProhibitedInView',
            $this->root instanceof \Near\JsonRpc\Generated\Models\HostErrorNumberOfLogsExceeded => 'NumberOfLogsExceeded',
            $this->root instanceof \Near\JsonRpc\Generated\Models\HostErrorKeyLengthExceeded => 'KeyLengthExceeded',
            $this->root instanceof \Near\JsonRpc\Generated\Models\HostErrorValueLengthExceeded => 'ValueLengthExceeded',
            $this->root instanceof \Near\JsonRpc\Generated\Models\HostErrorTotalLogLengthExceeded => 'TotalLogLengthExceeded',
            $this->root instanceof \Near\JsonRpc\Generated\Models\HostErrorNumberPromisesExceeded => 'NumberPromisesExceeded',
            $this->root instanceof \Near\JsonRpc\Generated\Models\HostErrorNumberInputDataDependenciesExceeded => 'NumberInputDataDependenciesExceeded',
            $this->root instanceof \Near\JsonRpc\Generated\Models\HostErrorReturnedValueLengthExceeded => 'ReturnedValueLengthExceeded',
            $this->root instanceof \Near\JsonRpc\Generated\Models\HostErrorContractSizeExceeded => 'ContractSizeExceeded',
            $this->root instanceof \Near\JsonRpc\Generated\Models\HostErrorDeprecated => 'Deprecated',
            $this->root instanceof \Near\JsonRpc\Generated\Models\HostErrorEcRecoverError => 'ECRecoverError',
            $this->root instanceof \Near\JsonRpc\Generated\Models\HostErrorAltBn128InvalidInput => 'AltBn128InvalidInput',
            $this->root instanceof \Near\JsonRpc\Generated\Models\HostErrorEd25519VerifyInvalidInput => 'Ed25519VerifyInvalidInput',
            $this->root instanceof \Near\JsonRpc\Generated\Models\HostErrorP256VerifyInvalidInput => 'P256VerifyInvalidInput',
            $this->root instanceof \Near\JsonRpc\Generated\Models\HostErrorMlDsaVerifyInvalidInput => 'MlDsaVerifyInvalidInput',
            $this->root instanceof \Near\JsonRpc\Generated\Models\HostErrorProhibitedInExternalCall => 'ProhibitedInExternalCall',
            $this->root instanceof \Near\JsonRpc\Generated\Models\HostErrorDepositInExternalCall => 'DepositInExternalCall',
            default => throw new \LogicException('Unknown HostError variant.'),
        };
    }
    public static function badUtf16(): self { return new self(\Near\JsonRpc\Generated\Models\HostErrorBadUtf16::BadUtf16); }
    public static function badUtf8(): self { return new self(\Near\JsonRpc\Generated\Models\HostErrorBadUtf8::BadUtf8); }
    public static function gasExceeded(): self { return new self(\Near\JsonRpc\Generated\Models\HostErrorGasExceeded::GasExceeded); }
    public static function gasLimitExceeded(): self { return new self(\Near\JsonRpc\Generated\Models\HostErrorGasLimitExceeded::GasLimitExceeded); }
    public static function balanceExceeded(): self { return new self(\Near\JsonRpc\Generated\Models\HostErrorBalanceExceeded::BalanceExceeded); }
    public static function emptyMethodName(): self { return new self(\Near\JsonRpc\Generated\Models\HostErrorEmptyMethodName::EmptyMethodName); }
    public static function guestPanic(\Near\JsonRpc\Generated\Models\HostErrorGuestPanicPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\HostErrorGuestPanic($payload)); }
    public static function integerOverflow(): self { return new self(\Near\JsonRpc\Generated\Models\HostErrorIntegerOverflow::IntegerOverflow); }
    public static function invalidPromiseIndex(\Near\JsonRpc\Generated\Models\HostErrorInvalidPromiseIndexPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\HostErrorInvalidPromiseIndex($payload)); }
    public static function cannotAppendActionToJointPromise(): self { return new self(\Near\JsonRpc\Generated\Models\HostErrorCannotAppendActionToJointPromise::CannotAppendActionToJointPromise); }
    public static function cannotReturnJointPromise(): self { return new self(\Near\JsonRpc\Generated\Models\HostErrorCannotReturnJointPromise::CannotReturnJointPromise); }
    public static function invalidPromiseResultIndex(\Near\JsonRpc\Generated\Models\HostErrorInvalidPromiseResultIndexPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\HostErrorInvalidPromiseResultIndex($payload)); }
    public static function invalidRegisterId(\Near\JsonRpc\Generated\Models\HostErrorInvalidRegisterIdPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\HostErrorInvalidRegisterId($payload)); }
    public static function iteratorWasInvalidated(\Near\JsonRpc\Generated\Models\HostErrorIteratorWasInvalidatedPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\HostErrorIteratorWasInvalidated($payload)); }
    public static function memoryAccessViolation(): self { return new self(\Near\JsonRpc\Generated\Models\HostErrorMemoryAccessViolation::MemoryAccessViolation); }
    public static function invalidReceiptIndex(\Near\JsonRpc\Generated\Models\HostErrorInvalidReceiptIndexPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\HostErrorInvalidReceiptIndex($payload)); }
    public static function invalidIteratorIndex(\Near\JsonRpc\Generated\Models\HostErrorInvalidIteratorIndexPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\HostErrorInvalidIteratorIndex($payload)); }
    public static function invalidAccountId(): self { return new self(\Near\JsonRpc\Generated\Models\HostErrorInvalidAccountId::InvalidAccountId); }
    public static function invalidMethodName(): self { return new self(\Near\JsonRpc\Generated\Models\HostErrorInvalidMethodName::InvalidMethodName); }
    public static function invalidPublicKey(): self { return new self(\Near\JsonRpc\Generated\Models\HostErrorInvalidPublicKey::InvalidPublicKey); }
    public static function prohibitedInView(\Near\JsonRpc\Generated\Models\HostErrorProhibitedInViewPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\HostErrorProhibitedInView($payload)); }
    public static function numberOfLogsExceeded(\Near\JsonRpc\Generated\Models\HostErrorNumberOfLogsExceededPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\HostErrorNumberOfLogsExceeded($payload)); }
    public static function keyLengthExceeded(\Near\JsonRpc\Generated\Models\HostErrorKeyLengthExceededPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\HostErrorKeyLengthExceeded($payload)); }
    public static function valueLengthExceeded(\Near\JsonRpc\Generated\Models\HostErrorValueLengthExceededPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\HostErrorValueLengthExceeded($payload)); }
    public static function totalLogLengthExceeded(\Near\JsonRpc\Generated\Models\HostErrorTotalLogLengthExceededPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\HostErrorTotalLogLengthExceeded($payload)); }
    public static function numberPromisesExceeded(\Near\JsonRpc\Generated\Models\HostErrorNumberPromisesExceededPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\HostErrorNumberPromisesExceeded($payload)); }
    public static function numberInputDataDependenciesExceeded(\Near\JsonRpc\Generated\Models\HostErrorNumberInputDataDependenciesExceededPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\HostErrorNumberInputDataDependenciesExceeded($payload)); }
    public static function returnedValueLengthExceeded(\Near\JsonRpc\Generated\Models\HostErrorReturnedValueLengthExceededPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\HostErrorReturnedValueLengthExceeded($payload)); }
    public static function contractSizeExceeded(\Near\JsonRpc\Generated\Models\HostErrorContractSizeExceededPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\HostErrorContractSizeExceeded($payload)); }
    public static function deprecated(\Near\JsonRpc\Generated\Models\HostErrorDeprecatedPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\HostErrorDeprecated($payload)); }
    public static function ecRecoverError(\Near\JsonRpc\Generated\Models\HostErrorEcRecoverErrorPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\HostErrorEcRecoverError($payload)); }
    public static function altBn128InvalidInput(\Near\JsonRpc\Generated\Models\HostErrorAltBn128InvalidInputPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\HostErrorAltBn128InvalidInput($payload)); }
    public static function ed25519VerifyInvalidInput(\Near\JsonRpc\Generated\Models\HostErrorEd25519VerifyInvalidInputPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\HostErrorEd25519VerifyInvalidInput($payload)); }
    public static function p256VerifyInvalidInput(\Near\JsonRpc\Generated\Models\HostErrorP256VerifyInvalidInputPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\HostErrorP256VerifyInvalidInput($payload)); }
    public static function mlDsaVerifyInvalidInput(\Near\JsonRpc\Generated\Models\HostErrorMlDsaVerifyInvalidInputPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\HostErrorMlDsaVerifyInvalidInput($payload)); }
    public static function prohibitedInExternalCall(\Near\JsonRpc\Generated\Models\HostErrorProhibitedInExternalCallPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\HostErrorProhibitedInExternalCall($payload)); }
    public static function depositInExternalCall(): self { return new self(\Near\JsonRpc\Generated\Models\HostErrorDepositInExternalCall::DepositInExternalCall); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorBadUtf16',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorBadUtf8',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorGasExceeded',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorGasLimitExceeded',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorBalanceExceeded',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorEmptyMethodName',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorGuestPanic',
      'nullable' => false,
    ),
    7 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorIntegerOverflow',
      'nullable' => false,
    ),
    8 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorInvalidPromiseIndex',
      'nullable' => false,
    ),
    9 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorCannotAppendActionToJointPromise',
      'nullable' => false,
    ),
    10 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorCannotReturnJointPromise',
      'nullable' => false,
    ),
    11 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorInvalidPromiseResultIndex',
      'nullable' => false,
    ),
    12 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorInvalidRegisterId',
      'nullable' => false,
    ),
    13 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorIteratorWasInvalidated',
      'nullable' => false,
    ),
    14 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorMemoryAccessViolation',
      'nullable' => false,
    ),
    15 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorInvalidReceiptIndex',
      'nullable' => false,
    ),
    16 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorInvalidIteratorIndex',
      'nullable' => false,
    ),
    17 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorInvalidAccountId',
      'nullable' => false,
    ),
    18 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorInvalidMethodName',
      'nullable' => false,
    ),
    19 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorInvalidPublicKey',
      'nullable' => false,
    ),
    20 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorProhibitedInView',
      'nullable' => false,
    ),
    21 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorNumberOfLogsExceeded',
      'nullable' => false,
    ),
    22 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorKeyLengthExceeded',
      'nullable' => false,
    ),
    23 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorValueLengthExceeded',
      'nullable' => false,
    ),
    24 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorTotalLogLengthExceeded',
      'nullable' => false,
    ),
    25 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorNumberPromisesExceeded',
      'nullable' => false,
    ),
    26 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorNumberInputDataDependenciesExceeded',
      'nullable' => false,
    ),
    27 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorReturnedValueLengthExceeded',
      'nullable' => false,
    ),
    28 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorContractSizeExceeded',
      'nullable' => false,
    ),
    29 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorDeprecated',
      'nullable' => false,
    ),
    30 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorEcRecoverError',
      'nullable' => false,
    ),
    31 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorAltBn128InvalidInput',
      'nullable' => false,
    ),
    32 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorEd25519VerifyInvalidInput',
      'nullable' => false,
    ),
    33 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorP256VerifyInvalidInput',
      'nullable' => false,
    ),
    34 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorMlDsaVerifyInvalidInput',
      'nullable' => false,
    ),
    35 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorProhibitedInExternalCall',
      'nullable' => false,
    ),
    36 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorDepositInExternalCall',
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
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorBadUtf16',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorBadUtf8',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorGasExceeded',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorGasLimitExceeded',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorBalanceExceeded',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorEmptyMethodName',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorGuestPanic',
      'nullable' => false,
    ),
    7 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorIntegerOverflow',
      'nullable' => false,
    ),
    8 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorInvalidPromiseIndex',
      'nullable' => false,
    ),
    9 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorCannotAppendActionToJointPromise',
      'nullable' => false,
    ),
    10 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorCannotReturnJointPromise',
      'nullable' => false,
    ),
    11 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorInvalidPromiseResultIndex',
      'nullable' => false,
    ),
    12 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorInvalidRegisterId',
      'nullable' => false,
    ),
    13 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorIteratorWasInvalidated',
      'nullable' => false,
    ),
    14 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorMemoryAccessViolation',
      'nullable' => false,
    ),
    15 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorInvalidReceiptIndex',
      'nullable' => false,
    ),
    16 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorInvalidIteratorIndex',
      'nullable' => false,
    ),
    17 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorInvalidAccountId',
      'nullable' => false,
    ),
    18 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorInvalidMethodName',
      'nullable' => false,
    ),
    19 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorInvalidPublicKey',
      'nullable' => false,
    ),
    20 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorProhibitedInView',
      'nullable' => false,
    ),
    21 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorNumberOfLogsExceeded',
      'nullable' => false,
    ),
    22 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorKeyLengthExceeded',
      'nullable' => false,
    ),
    23 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorValueLengthExceeded',
      'nullable' => false,
    ),
    24 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorTotalLogLengthExceeded',
      'nullable' => false,
    ),
    25 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorNumberPromisesExceeded',
      'nullable' => false,
    ),
    26 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorNumberInputDataDependenciesExceeded',
      'nullable' => false,
    ),
    27 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorReturnedValueLengthExceeded',
      'nullable' => false,
    ),
    28 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorContractSizeExceeded',
      'nullable' => false,
    ),
    29 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorDeprecated',
      'nullable' => false,
    ),
    30 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorEcRecoverError',
      'nullable' => false,
    ),
    31 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorAltBn128InvalidInput',
      'nullable' => false,
    ),
    32 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorEd25519VerifyInvalidInput',
      'nullable' => false,
    ),
    33 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorP256VerifyInvalidInput',
      'nullable' => false,
    ),
    34 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorMlDsaVerifyInvalidInput',
      'nullable' => false,
    ),
    35 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorProhibitedInExternalCall',
      'nullable' => false,
    ),
    36 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorDepositInExternalCall',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
