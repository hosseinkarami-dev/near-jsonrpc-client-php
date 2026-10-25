<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Describes the error for validating a list of actions.
 */
final readonly class ActionsValidationError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\ActionsValidationErrorDeleteActionMustBeFinal|\Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalPrepaidGasExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalNumberOfActionsExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorAddKeyMethodNamesNumberOfBytesExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorAddKeyMethodNameLengthExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorIntegerOverflow|\Near\JsonRpc\Generated\Models\ActionsValidationErrorInvalidAccountId|\Near\JsonRpc\Generated\Models\ActionsValidationErrorContractSizeExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorFunctionCallMethodNameLengthExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorFunctionCallArgumentsLengthExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorUnsuitableStakingKey|\Near\JsonRpc\Generated\Models\ActionsValidationErrorFunctionCallZeroAttachedGas|\Near\JsonRpc\Generated\Models\ActionsValidationErrorDelegateActionMustBeOnlyOne|\Near\JsonRpc\Generated\Models\ActionsValidationErrorUnsupportedProtocolFeature|\Near\JsonRpc\Generated\Models\ActionsValidationErrorInvalidDeterministicStateInitReceiver|\Near\JsonRpc\Generated\Models\ActionsValidationErrorDeterministicStateInitKeyLengthExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorDeterministicStateInitValueLengthExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorGasKeyInvalidNumNonces|\Near\JsonRpc\Generated\Models\ActionsValidationErrorAddGasKeyWithNonZeroBalance|\Near\JsonRpc\Generated\Models\ActionsValidationErrorGasKeyFunctionCallAllowanceNotAllowed|\Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalNumberOfDeployActionsExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorFunctionCallEmptyMethodName|\Near\JsonRpc\Generated\Models\ActionsValidationErrorInvalidUniversalStateInitReceiver|\Near\JsonRpc\Generated\Models\ActionsValidationErrorUniversalStateInitKeyLengthExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorUniversalStateInitValueLengthExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorMalformedUniversalStateInit|\Near\JsonRpc\Generated\Models\ActionsValidationErrorRemovedProtocolFeature|\Near\JsonRpc\Generated\Models\ActionsValidationErrorWithdrawFromGasKeyNotAllowedInDelegate|\Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalNumberOfStateInitKeysExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalNumberOfStateInitEntriesExceeded */
    public \Near\JsonRpc\Generated\Models\ActionsValidationErrorDeleteActionMustBeFinal|\Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalPrepaidGasExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalNumberOfActionsExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorAddKeyMethodNamesNumberOfBytesExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorAddKeyMethodNameLengthExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorIntegerOverflow|\Near\JsonRpc\Generated\Models\ActionsValidationErrorInvalidAccountId|\Near\JsonRpc\Generated\Models\ActionsValidationErrorContractSizeExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorFunctionCallMethodNameLengthExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorFunctionCallArgumentsLengthExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorUnsuitableStakingKey|\Near\JsonRpc\Generated\Models\ActionsValidationErrorFunctionCallZeroAttachedGas|\Near\JsonRpc\Generated\Models\ActionsValidationErrorDelegateActionMustBeOnlyOne|\Near\JsonRpc\Generated\Models\ActionsValidationErrorUnsupportedProtocolFeature|\Near\JsonRpc\Generated\Models\ActionsValidationErrorInvalidDeterministicStateInitReceiver|\Near\JsonRpc\Generated\Models\ActionsValidationErrorDeterministicStateInitKeyLengthExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorDeterministicStateInitValueLengthExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorGasKeyInvalidNumNonces|\Near\JsonRpc\Generated\Models\ActionsValidationErrorAddGasKeyWithNonZeroBalance|\Near\JsonRpc\Generated\Models\ActionsValidationErrorGasKeyFunctionCallAllowanceNotAllowed|\Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalNumberOfDeployActionsExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorFunctionCallEmptyMethodName|\Near\JsonRpc\Generated\Models\ActionsValidationErrorInvalidUniversalStateInitReceiver|\Near\JsonRpc\Generated\Models\ActionsValidationErrorUniversalStateInitKeyLengthExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorUniversalStateInitValueLengthExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorMalformedUniversalStateInit|\Near\JsonRpc\Generated\Models\ActionsValidationErrorRemovedProtocolFeature|\Near\JsonRpc\Generated\Models\ActionsValidationErrorWithdrawFromGasKeyNotAllowedInDelegate|\Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalNumberOfStateInitKeysExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalNumberOfStateInitEntriesExceeded $root;

    public function __construct(\Near\JsonRpc\Generated\Models\ActionsValidationErrorDeleteActionMustBeFinal|\Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalPrepaidGasExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalNumberOfActionsExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorAddKeyMethodNamesNumberOfBytesExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorAddKeyMethodNameLengthExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorIntegerOverflow|\Near\JsonRpc\Generated\Models\ActionsValidationErrorInvalidAccountId|\Near\JsonRpc\Generated\Models\ActionsValidationErrorContractSizeExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorFunctionCallMethodNameLengthExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorFunctionCallArgumentsLengthExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorUnsuitableStakingKey|\Near\JsonRpc\Generated\Models\ActionsValidationErrorFunctionCallZeroAttachedGas|\Near\JsonRpc\Generated\Models\ActionsValidationErrorDelegateActionMustBeOnlyOne|\Near\JsonRpc\Generated\Models\ActionsValidationErrorUnsupportedProtocolFeature|\Near\JsonRpc\Generated\Models\ActionsValidationErrorInvalidDeterministicStateInitReceiver|\Near\JsonRpc\Generated\Models\ActionsValidationErrorDeterministicStateInitKeyLengthExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorDeterministicStateInitValueLengthExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorGasKeyInvalidNumNonces|\Near\JsonRpc\Generated\Models\ActionsValidationErrorAddGasKeyWithNonZeroBalance|\Near\JsonRpc\Generated\Models\ActionsValidationErrorGasKeyFunctionCallAllowanceNotAllowed|\Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalNumberOfDeployActionsExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorFunctionCallEmptyMethodName|\Near\JsonRpc\Generated\Models\ActionsValidationErrorInvalidUniversalStateInitReceiver|\Near\JsonRpc\Generated\Models\ActionsValidationErrorUniversalStateInitKeyLengthExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorUniversalStateInitValueLengthExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorMalformedUniversalStateInit|\Near\JsonRpc\Generated\Models\ActionsValidationErrorRemovedProtocolFeature|\Near\JsonRpc\Generated\Models\ActionsValidationErrorWithdrawFromGasKeyNotAllowedInDelegate|\Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalNumberOfStateInitKeysExceeded|\Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalNumberOfStateInitEntriesExceeded $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\ActionsValidationErrorDeleteActionMustBeFinal::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalPrepaidGasExceeded::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalNumberOfActionsExceeded::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\ActionsValidationErrorAddKeyMethodNamesNumberOfBytesExceeded::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[4] = \Near\JsonRpc\Generated\Models\ActionsValidationErrorAddKeyMethodNameLengthExceeded::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[5] = \Near\JsonRpc\Generated\Models\ActionsValidationErrorIntegerOverflow::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[6] = \Near\JsonRpc\Generated\Models\ActionsValidationErrorInvalidAccountId::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[7] = \Near\JsonRpc\Generated\Models\ActionsValidationErrorContractSizeExceeded::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[8] = \Near\JsonRpc\Generated\Models\ActionsValidationErrorFunctionCallMethodNameLengthExceeded::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[9] = \Near\JsonRpc\Generated\Models\ActionsValidationErrorFunctionCallArgumentsLengthExceeded::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[10] = \Near\JsonRpc\Generated\Models\ActionsValidationErrorUnsuitableStakingKey::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[11] = \Near\JsonRpc\Generated\Models\ActionsValidationErrorFunctionCallZeroAttachedGas::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[12] = \Near\JsonRpc\Generated\Models\ActionsValidationErrorDelegateActionMustBeOnlyOne::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[13] = \Near\JsonRpc\Generated\Models\ActionsValidationErrorUnsupportedProtocolFeature::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[14] = \Near\JsonRpc\Generated\Models\ActionsValidationErrorInvalidDeterministicStateInitReceiver::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[15] = \Near\JsonRpc\Generated\Models\ActionsValidationErrorDeterministicStateInitKeyLengthExceeded::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[16] = \Near\JsonRpc\Generated\Models\ActionsValidationErrorDeterministicStateInitValueLengthExceeded::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[17] = \Near\JsonRpc\Generated\Models\ActionsValidationErrorGasKeyInvalidNumNonces::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[18] = \Near\JsonRpc\Generated\Models\ActionsValidationErrorAddGasKeyWithNonZeroBalance::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[19] = \Near\JsonRpc\Generated\Models\ActionsValidationErrorGasKeyFunctionCallAllowanceNotAllowed::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[20] = \Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalNumberOfDeployActionsExceeded::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[21] = \Near\JsonRpc\Generated\Models\ActionsValidationErrorFunctionCallEmptyMethodName::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[22] = \Near\JsonRpc\Generated\Models\ActionsValidationErrorInvalidUniversalStateInitReceiver::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[23] = \Near\JsonRpc\Generated\Models\ActionsValidationErrorUniversalStateInitKeyLengthExceeded::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[24] = \Near\JsonRpc\Generated\Models\ActionsValidationErrorUniversalStateInitValueLengthExceeded::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[25] = \Near\JsonRpc\Generated\Models\ActionsValidationErrorMalformedUniversalStateInit::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[26] = \Near\JsonRpc\Generated\Models\ActionsValidationErrorRemovedProtocolFeature::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[27] = \Near\JsonRpc\Generated\Models\ActionsValidationErrorWithdrawFromGasKeyNotAllowedInDelegate::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[28] = \Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalNumberOfStateInitKeysExceeded::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[29] = \Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalNumberOfStateInitEntriesExceeded::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for ActionsValidationError.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionsValidationErrorDeleteActionMustBeFinal => 'DeleteActionMustBeFinal',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalPrepaidGasExceeded => 'TotalPrepaidGasExceeded',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalNumberOfActionsExceeded => 'TotalNumberOfActionsExceeded',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionsValidationErrorAddKeyMethodNamesNumberOfBytesExceeded => 'AddKeyMethodNamesNumberOfBytesExceeded',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionsValidationErrorAddKeyMethodNameLengthExceeded => 'AddKeyMethodNameLengthExceeded',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionsValidationErrorIntegerOverflow => 'IntegerOverflow',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionsValidationErrorInvalidAccountId => 'InvalidAccountId',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionsValidationErrorContractSizeExceeded => 'ContractSizeExceeded',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionsValidationErrorFunctionCallMethodNameLengthExceeded => 'FunctionCallMethodNameLengthExceeded',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionsValidationErrorFunctionCallArgumentsLengthExceeded => 'FunctionCallArgumentsLengthExceeded',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionsValidationErrorUnsuitableStakingKey => 'UnsuitableStakingKey',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionsValidationErrorFunctionCallZeroAttachedGas => 'FunctionCallZeroAttachedGas',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionsValidationErrorDelegateActionMustBeOnlyOne => 'DelegateActionMustBeOnlyOne',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionsValidationErrorUnsupportedProtocolFeature => 'UnsupportedProtocolFeature',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionsValidationErrorInvalidDeterministicStateInitReceiver => 'InvalidDeterministicStateInitReceiver',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionsValidationErrorDeterministicStateInitKeyLengthExceeded => 'DeterministicStateInitKeyLengthExceeded',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionsValidationErrorDeterministicStateInitValueLengthExceeded => 'DeterministicStateInitValueLengthExceeded',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionsValidationErrorGasKeyInvalidNumNonces => 'GasKeyInvalidNumNonces',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionsValidationErrorAddGasKeyWithNonZeroBalance => 'AddGasKeyWithNonZeroBalance',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionsValidationErrorGasKeyFunctionCallAllowanceNotAllowed => 'GasKeyFunctionCallAllowanceNotAllowed',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalNumberOfDeployActionsExceeded => 'TotalNumberOfDeployActionsExceeded',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionsValidationErrorFunctionCallEmptyMethodName => 'FunctionCallEmptyMethodName',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionsValidationErrorInvalidUniversalStateInitReceiver => 'InvalidUniversalStateInitReceiver',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionsValidationErrorUniversalStateInitKeyLengthExceeded => 'UniversalStateInitKeyLengthExceeded',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionsValidationErrorUniversalStateInitValueLengthExceeded => 'UniversalStateInitValueLengthExceeded',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionsValidationErrorMalformedUniversalStateInit => 'MalformedUniversalStateInit',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionsValidationErrorRemovedProtocolFeature => 'RemovedProtocolFeature',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionsValidationErrorWithdrawFromGasKeyNotAllowedInDelegate => 'WithdrawFromGasKeyNotAllowedInDelegate',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalNumberOfStateInitKeysExceeded => 'TotalNumberOfStateInitKeysExceeded',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalNumberOfStateInitEntriesExceeded => 'TotalNumberOfStateInitEntriesExceeded',
            default => throw new \LogicException('Unknown ActionsValidationError variant.'),
        };
    }
    public static function deleteActionMustBeFinal(): self { return new self(\Near\JsonRpc\Generated\Models\ActionsValidationErrorDeleteActionMustBeFinal::DeleteActionMustBeFinal); }
    public static function totalPrepaidGasExceeded(\Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalPrepaidGasExceededPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalPrepaidGasExceeded($payload)); }
    public static function totalNumberOfActionsExceeded(\Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalNumberOfActionsExceededPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalNumberOfActionsExceeded($payload)); }
    public static function addKeyMethodNamesNumberOfBytesExceeded(\Near\JsonRpc\Generated\Models\ActionsValidationErrorAddKeyMethodNamesNumberOfBytesExceededPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionsValidationErrorAddKeyMethodNamesNumberOfBytesExceeded($payload)); }
    public static function addKeyMethodNameLengthExceeded(\Near\JsonRpc\Generated\Models\ActionsValidationErrorAddKeyMethodNameLengthExceededPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionsValidationErrorAddKeyMethodNameLengthExceeded($payload)); }
    public static function integerOverflow(): self { return new self(\Near\JsonRpc\Generated\Models\ActionsValidationErrorIntegerOverflow::IntegerOverflow); }
    public static function invalidAccountId(\Near\JsonRpc\Generated\Models\ActionsValidationErrorInvalidAccountIdPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionsValidationErrorInvalidAccountId($payload)); }
    public static function contractSizeExceeded(\Near\JsonRpc\Generated\Models\ActionsValidationErrorContractSizeExceededPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionsValidationErrorContractSizeExceeded($payload)); }
    public static function functionCallMethodNameLengthExceeded(\Near\JsonRpc\Generated\Models\ActionsValidationErrorFunctionCallMethodNameLengthExceededPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionsValidationErrorFunctionCallMethodNameLengthExceeded($payload)); }
    public static function functionCallArgumentsLengthExceeded(\Near\JsonRpc\Generated\Models\ActionsValidationErrorFunctionCallArgumentsLengthExceededPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionsValidationErrorFunctionCallArgumentsLengthExceeded($payload)); }
    public static function unsuitableStakingKey(\Near\JsonRpc\Generated\Models\ActionsValidationErrorUnsuitableStakingKeyPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionsValidationErrorUnsuitableStakingKey($payload)); }
    public static function functionCallZeroAttachedGas(): self { return new self(\Near\JsonRpc\Generated\Models\ActionsValidationErrorFunctionCallZeroAttachedGas::FunctionCallZeroAttachedGas); }
    public static function delegateActionMustBeOnlyOne(): self { return new self(\Near\JsonRpc\Generated\Models\ActionsValidationErrorDelegateActionMustBeOnlyOne::DelegateActionMustBeOnlyOne); }
    public static function unsupportedProtocolFeature(\Near\JsonRpc\Generated\Models\ActionsValidationErrorUnsupportedProtocolFeaturePayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionsValidationErrorUnsupportedProtocolFeature($payload)); }
    public static function invalidDeterministicStateInitReceiver(\Near\JsonRpc\Generated\Models\ActionsValidationErrorInvalidDeterministicStateInitReceiverPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionsValidationErrorInvalidDeterministicStateInitReceiver($payload)); }
    public static function deterministicStateInitKeyLengthExceeded(\Near\JsonRpc\Generated\Models\ActionsValidationErrorDeterministicStateInitKeyLengthExceededPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionsValidationErrorDeterministicStateInitKeyLengthExceeded($payload)); }
    public static function deterministicStateInitValueLengthExceeded(\Near\JsonRpc\Generated\Models\ActionsValidationErrorDeterministicStateInitValueLengthExceededPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionsValidationErrorDeterministicStateInitValueLengthExceeded($payload)); }
    public static function gasKeyInvalidNumNonces(\Near\JsonRpc\Generated\Models\ActionsValidationErrorGasKeyInvalidNumNoncesPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionsValidationErrorGasKeyInvalidNumNonces($payload)); }
    public static function addGasKeyWithNonZeroBalance(\Near\JsonRpc\Generated\Models\ActionsValidationErrorAddGasKeyWithNonZeroBalancePayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionsValidationErrorAddGasKeyWithNonZeroBalance($payload)); }
    public static function gasKeyFunctionCallAllowanceNotAllowed(): self { return new self(\Near\JsonRpc\Generated\Models\ActionsValidationErrorGasKeyFunctionCallAllowanceNotAllowed::GasKeyFunctionCallAllowanceNotAllowed); }
    public static function totalNumberOfDeployActionsExceeded(\Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalNumberOfDeployActionsExceededPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalNumberOfDeployActionsExceeded($payload)); }
    public static function functionCallEmptyMethodName(): self { return new self(\Near\JsonRpc\Generated\Models\ActionsValidationErrorFunctionCallEmptyMethodName::FunctionCallEmptyMethodName); }
    public static function invalidUniversalStateInitReceiver(\Near\JsonRpc\Generated\Models\ActionsValidationErrorInvalidUniversalStateInitReceiverPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionsValidationErrorInvalidUniversalStateInitReceiver($payload)); }
    public static function universalStateInitKeyLengthExceeded(\Near\JsonRpc\Generated\Models\ActionsValidationErrorUniversalStateInitKeyLengthExceededPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionsValidationErrorUniversalStateInitKeyLengthExceeded($payload)); }
    public static function universalStateInitValueLengthExceeded(\Near\JsonRpc\Generated\Models\ActionsValidationErrorUniversalStateInitValueLengthExceededPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionsValidationErrorUniversalStateInitValueLengthExceeded($payload)); }
    public static function malformedUniversalStateInit(): self { return new self(\Near\JsonRpc\Generated\Models\ActionsValidationErrorMalformedUniversalStateInit::MalformedUniversalStateInit); }
    public static function removedProtocolFeature(\Near\JsonRpc\Generated\Models\ActionsValidationErrorRemovedProtocolFeaturePayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionsValidationErrorRemovedProtocolFeature($payload)); }
    public static function withdrawFromGasKeyNotAllowedInDelegate(): self { return new self(\Near\JsonRpc\Generated\Models\ActionsValidationErrorWithdrawFromGasKeyNotAllowedInDelegate::WithdrawFromGasKeyNotAllowedInDelegate); }
    public static function totalNumberOfStateInitKeysExceeded(\Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalNumberOfStateInitKeysExceededPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalNumberOfStateInitKeysExceeded($payload)); }
    public static function totalNumberOfStateInitEntriesExceeded(\Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalNumberOfStateInitEntriesExceededPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalNumberOfStateInitEntriesExceeded($payload)); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorDeleteActionMustBeFinal',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorTotalPrepaidGasExceeded',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorTotalNumberOfActionsExceeded',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorAddKeyMethodNamesNumberOfBytesExceeded',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorAddKeyMethodNameLengthExceeded',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorIntegerOverflow',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorInvalidAccountId',
      'nullable' => false,
    ),
    7 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorContractSizeExceeded',
      'nullable' => false,
    ),
    8 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorFunctionCallMethodNameLengthExceeded',
      'nullable' => false,
    ),
    9 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorFunctionCallArgumentsLengthExceeded',
      'nullable' => false,
    ),
    10 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorUnsuitableStakingKey',
      'nullable' => false,
    ),
    11 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorFunctionCallZeroAttachedGas',
      'nullable' => false,
    ),
    12 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorDelegateActionMustBeOnlyOne',
      'nullable' => false,
    ),
    13 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorUnsupportedProtocolFeature',
      'nullable' => false,
    ),
    14 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorInvalidDeterministicStateInitReceiver',
      'nullable' => false,
    ),
    15 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorDeterministicStateInitKeyLengthExceeded',
      'nullable' => false,
    ),
    16 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorDeterministicStateInitValueLengthExceeded',
      'nullable' => false,
    ),
    17 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorGasKeyInvalidNumNonces',
      'nullable' => false,
    ),
    18 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorAddGasKeyWithNonZeroBalance',
      'nullable' => false,
    ),
    19 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorGasKeyFunctionCallAllowanceNotAllowed',
      'nullable' => false,
    ),
    20 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorTotalNumberOfDeployActionsExceeded',
      'nullable' => false,
    ),
    21 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorFunctionCallEmptyMethodName',
      'nullable' => false,
    ),
    22 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorInvalidUniversalStateInitReceiver',
      'nullable' => false,
    ),
    23 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorUniversalStateInitKeyLengthExceeded',
      'nullable' => false,
    ),
    24 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorUniversalStateInitValueLengthExceeded',
      'nullable' => false,
    ),
    25 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorMalformedUniversalStateInit',
      'nullable' => false,
    ),
    26 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorRemovedProtocolFeature',
      'nullable' => false,
    ),
    27 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorWithdrawFromGasKeyNotAllowedInDelegate',
      'nullable' => false,
    ),
    28 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorTotalNumberOfStateInitKeysExceeded',
      'nullable' => false,
    ),
    29 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorTotalNumberOfStateInitEntriesExceeded',
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
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorDeleteActionMustBeFinal',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorTotalPrepaidGasExceeded',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorTotalNumberOfActionsExceeded',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorAddKeyMethodNamesNumberOfBytesExceeded',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorAddKeyMethodNameLengthExceeded',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorIntegerOverflow',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorInvalidAccountId',
      'nullable' => false,
    ),
    7 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorContractSizeExceeded',
      'nullable' => false,
    ),
    8 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorFunctionCallMethodNameLengthExceeded',
      'nullable' => false,
    ),
    9 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorFunctionCallArgumentsLengthExceeded',
      'nullable' => false,
    ),
    10 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorUnsuitableStakingKey',
      'nullable' => false,
    ),
    11 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorFunctionCallZeroAttachedGas',
      'nullable' => false,
    ),
    12 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorDelegateActionMustBeOnlyOne',
      'nullable' => false,
    ),
    13 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorUnsupportedProtocolFeature',
      'nullable' => false,
    ),
    14 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorInvalidDeterministicStateInitReceiver',
      'nullable' => false,
    ),
    15 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorDeterministicStateInitKeyLengthExceeded',
      'nullable' => false,
    ),
    16 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorDeterministicStateInitValueLengthExceeded',
      'nullable' => false,
    ),
    17 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorGasKeyInvalidNumNonces',
      'nullable' => false,
    ),
    18 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorAddGasKeyWithNonZeroBalance',
      'nullable' => false,
    ),
    19 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorGasKeyFunctionCallAllowanceNotAllowed',
      'nullable' => false,
    ),
    20 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorTotalNumberOfDeployActionsExceeded',
      'nullable' => false,
    ),
    21 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorFunctionCallEmptyMethodName',
      'nullable' => false,
    ),
    22 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorInvalidUniversalStateInitReceiver',
      'nullable' => false,
    ),
    23 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorUniversalStateInitKeyLengthExceeded',
      'nullable' => false,
    ),
    24 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorUniversalStateInitValueLengthExceeded',
      'nullable' => false,
    ),
    25 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorMalformedUniversalStateInit',
      'nullable' => false,
    ),
    26 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorRemovedProtocolFeature',
      'nullable' => false,
    ),
    27 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorWithdrawFromGasKeyNotAllowedInDelegate',
      'nullable' => false,
    ),
    28 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorTotalNumberOfStateInitKeysExceeded',
      'nullable' => false,
    ),
    29 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorTotalNumberOfStateInitEntriesExceeded',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
