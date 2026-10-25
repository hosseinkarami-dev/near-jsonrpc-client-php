<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * An error happened during TX execution
 */
final readonly class InvalidTxError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidAccessKeyError|\Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidSignerId|\Near\JsonRpc\Generated\Models\InvalidTxErrorSignerDoesNotExist|\Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidNonce|\Near\JsonRpc\Generated\Models\InvalidTxErrorNonceTooLarge|\Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidReceiverId|\Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidSignature|\Near\JsonRpc\Generated\Models\InvalidTxErrorNotEnoughBalance|\Near\JsonRpc\Generated\Models\InvalidTxErrorLackBalanceForState|\Near\JsonRpc\Generated\Models\InvalidTxErrorCostOverflow|\Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidChain|\Near\JsonRpc\Generated\Models\InvalidTxErrorExpired|\Near\JsonRpc\Generated\Models\InvalidTxErrorActionsValidation|\Near\JsonRpc\Generated\Models\InvalidTxErrorTransactionSizeExceeded|\Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidTransactionVersion|\Near\JsonRpc\Generated\Models\InvalidTxErrorStorageError|\Near\JsonRpc\Generated\Models\InvalidTxErrorShardCongested|\Near\JsonRpc\Generated\Models\InvalidTxErrorShardStuck|\Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidNonceIndex|\Near\JsonRpc\Generated\Models\InvalidTxErrorNotEnoughGasKeyBalance|\Near\JsonRpc\Generated\Models\InvalidTxErrorNotEnoughBalanceForDeposit */
    public \Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidAccessKeyError|\Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidSignerId|\Near\JsonRpc\Generated\Models\InvalidTxErrorSignerDoesNotExist|\Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidNonce|\Near\JsonRpc\Generated\Models\InvalidTxErrorNonceTooLarge|\Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidReceiverId|\Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidSignature|\Near\JsonRpc\Generated\Models\InvalidTxErrorNotEnoughBalance|\Near\JsonRpc\Generated\Models\InvalidTxErrorLackBalanceForState|\Near\JsonRpc\Generated\Models\InvalidTxErrorCostOverflow|\Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidChain|\Near\JsonRpc\Generated\Models\InvalidTxErrorExpired|\Near\JsonRpc\Generated\Models\InvalidTxErrorActionsValidation|\Near\JsonRpc\Generated\Models\InvalidTxErrorTransactionSizeExceeded|\Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidTransactionVersion|\Near\JsonRpc\Generated\Models\InvalidTxErrorStorageError|\Near\JsonRpc\Generated\Models\InvalidTxErrorShardCongested|\Near\JsonRpc\Generated\Models\InvalidTxErrorShardStuck|\Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidNonceIndex|\Near\JsonRpc\Generated\Models\InvalidTxErrorNotEnoughGasKeyBalance|\Near\JsonRpc\Generated\Models\InvalidTxErrorNotEnoughBalanceForDeposit $root;

    public function __construct(\Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidAccessKeyError|\Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidSignerId|\Near\JsonRpc\Generated\Models\InvalidTxErrorSignerDoesNotExist|\Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidNonce|\Near\JsonRpc\Generated\Models\InvalidTxErrorNonceTooLarge|\Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidReceiverId|\Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidSignature|\Near\JsonRpc\Generated\Models\InvalidTxErrorNotEnoughBalance|\Near\JsonRpc\Generated\Models\InvalidTxErrorLackBalanceForState|\Near\JsonRpc\Generated\Models\InvalidTxErrorCostOverflow|\Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidChain|\Near\JsonRpc\Generated\Models\InvalidTxErrorExpired|\Near\JsonRpc\Generated\Models\InvalidTxErrorActionsValidation|\Near\JsonRpc\Generated\Models\InvalidTxErrorTransactionSizeExceeded|\Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidTransactionVersion|\Near\JsonRpc\Generated\Models\InvalidTxErrorStorageError|\Near\JsonRpc\Generated\Models\InvalidTxErrorShardCongested|\Near\JsonRpc\Generated\Models\InvalidTxErrorShardStuck|\Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidNonceIndex|\Near\JsonRpc\Generated\Models\InvalidTxErrorNotEnoughGasKeyBalance|\Near\JsonRpc\Generated\Models\InvalidTxErrorNotEnoughBalanceForDeposit $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidAccessKeyError::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidSignerId::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\InvalidTxErrorSignerDoesNotExist::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidNonce::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[4] = \Near\JsonRpc\Generated\Models\InvalidTxErrorNonceTooLarge::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[5] = \Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidReceiverId::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[6] = \Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidSignature::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[7] = \Near\JsonRpc\Generated\Models\InvalidTxErrorNotEnoughBalance::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[8] = \Near\JsonRpc\Generated\Models\InvalidTxErrorLackBalanceForState::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[9] = \Near\JsonRpc\Generated\Models\InvalidTxErrorCostOverflow::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[10] = \Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidChain::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[11] = \Near\JsonRpc\Generated\Models\InvalidTxErrorExpired::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[12] = \Near\JsonRpc\Generated\Models\InvalidTxErrorActionsValidation::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[13] = \Near\JsonRpc\Generated\Models\InvalidTxErrorTransactionSizeExceeded::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[14] = \Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidTransactionVersion::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[15] = \Near\JsonRpc\Generated\Models\InvalidTxErrorStorageError::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[16] = \Near\JsonRpc\Generated\Models\InvalidTxErrorShardCongested::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[17] = \Near\JsonRpc\Generated\Models\InvalidTxErrorShardStuck::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[18] = \Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidNonceIndex::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[19] = \Near\JsonRpc\Generated\Models\InvalidTxErrorNotEnoughGasKeyBalance::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[20] = \Near\JsonRpc\Generated\Models\InvalidTxErrorNotEnoughBalanceForDeposit::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for InvalidTxError.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidAccessKeyError => 'InvalidAccessKeyError',
            $this->root instanceof \Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidSignerId => 'InvalidSignerId',
            $this->root instanceof \Near\JsonRpc\Generated\Models\InvalidTxErrorSignerDoesNotExist => 'SignerDoesNotExist',
            $this->root instanceof \Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidNonce => 'InvalidNonce',
            $this->root instanceof \Near\JsonRpc\Generated\Models\InvalidTxErrorNonceTooLarge => 'NonceTooLarge',
            $this->root instanceof \Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidReceiverId => 'InvalidReceiverId',
            $this->root instanceof \Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidSignature => 'InvalidSignature',
            $this->root instanceof \Near\JsonRpc\Generated\Models\InvalidTxErrorNotEnoughBalance => 'NotEnoughBalance',
            $this->root instanceof \Near\JsonRpc\Generated\Models\InvalidTxErrorLackBalanceForState => 'LackBalanceForState',
            $this->root instanceof \Near\JsonRpc\Generated\Models\InvalidTxErrorCostOverflow => 'CostOverflow',
            $this->root instanceof \Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidChain => 'InvalidChain',
            $this->root instanceof \Near\JsonRpc\Generated\Models\InvalidTxErrorExpired => 'Expired',
            $this->root instanceof \Near\JsonRpc\Generated\Models\InvalidTxErrorActionsValidation => 'ActionsValidation',
            $this->root instanceof \Near\JsonRpc\Generated\Models\InvalidTxErrorTransactionSizeExceeded => 'TransactionSizeExceeded',
            $this->root instanceof \Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidTransactionVersion => 'InvalidTransactionVersion',
            $this->root instanceof \Near\JsonRpc\Generated\Models\InvalidTxErrorStorageError => 'StorageError',
            $this->root instanceof \Near\JsonRpc\Generated\Models\InvalidTxErrorShardCongested => 'ShardCongested',
            $this->root instanceof \Near\JsonRpc\Generated\Models\InvalidTxErrorShardStuck => 'ShardStuck',
            $this->root instanceof \Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidNonceIndex => 'InvalidNonceIndex',
            $this->root instanceof \Near\JsonRpc\Generated\Models\InvalidTxErrorNotEnoughGasKeyBalance => 'NotEnoughGasKeyBalance',
            $this->root instanceof \Near\JsonRpc\Generated\Models\InvalidTxErrorNotEnoughBalanceForDeposit => 'NotEnoughBalanceForDeposit',
            default => throw new \LogicException('Unknown InvalidTxError variant.'),
        };
    }
    public static function invalidAccessKeyError(\Near\JsonRpc\Generated\Models\InvalidAccessKeyError $payload): self { return new self(new \Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidAccessKeyError($payload)); }
    public static function invalidSignerId(\Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidSignerIdPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidSignerId($payload)); }
    public static function signerDoesNotExist(\Near\JsonRpc\Generated\Models\InvalidTxErrorSignerDoesNotExistPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\InvalidTxErrorSignerDoesNotExist($payload)); }
    public static function invalidNonce(\Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidNoncePayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidNonce($payload)); }
    public static function nonceTooLarge(\Near\JsonRpc\Generated\Models\InvalidTxErrorNonceTooLargePayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\InvalidTxErrorNonceTooLarge($payload)); }
    public static function invalidReceiverId(\Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidReceiverIdPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidReceiverId($payload)); }
    public static function invalidSignature(): self { return new self(\Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidSignature::InvalidSignature); }
    public static function notEnoughBalance(\Near\JsonRpc\Generated\Models\InvalidTxErrorNotEnoughBalancePayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\InvalidTxErrorNotEnoughBalance($payload)); }
    public static function lackBalanceForState(\Near\JsonRpc\Generated\Models\InvalidTxErrorLackBalanceForStatePayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\InvalidTxErrorLackBalanceForState($payload)); }
    public static function costOverflow(): self { return new self(\Near\JsonRpc\Generated\Models\InvalidTxErrorCostOverflow::CostOverflow); }
    public static function invalidChain(): self { return new self(\Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidChain::InvalidChain); }
    public static function expired(): self { return new self(\Near\JsonRpc\Generated\Models\InvalidTxErrorExpired::Expired); }
    public static function actionsValidation(\Near\JsonRpc\Generated\Models\ActionsValidationError $payload): self { return new self(new \Near\JsonRpc\Generated\Models\InvalidTxErrorActionsValidation($payload)); }
    public static function transactionSizeExceeded(\Near\JsonRpc\Generated\Models\InvalidTxErrorTransactionSizeExceededPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\InvalidTxErrorTransactionSizeExceeded($payload)); }
    public static function invalidTransactionVersion(): self { return new self(\Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidTransactionVersion::InvalidTransactionVersion); }
    public static function storageError(\Near\JsonRpc\Generated\Models\StorageError $payload): self { return new self(new \Near\JsonRpc\Generated\Models\InvalidTxErrorStorageError($payload)); }
    public static function shardCongested(\Near\JsonRpc\Generated\Models\InvalidTxErrorShardCongestedPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\InvalidTxErrorShardCongested($payload)); }
    public static function shardStuck(\Near\JsonRpc\Generated\Models\InvalidTxErrorShardStuckPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\InvalidTxErrorShardStuck($payload)); }
    public static function invalidNonceIndex(\Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidNonceIndexPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidNonceIndex($payload)); }
    public static function notEnoughGasKeyBalance(\Near\JsonRpc\Generated\Models\InvalidTxErrorNotEnoughGasKeyBalancePayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\InvalidTxErrorNotEnoughGasKeyBalance($payload)); }
    public static function notEnoughBalanceForDeposit(\Near\JsonRpc\Generated\Models\InvalidTxErrorNotEnoughBalanceForDepositPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\InvalidTxErrorNotEnoughBalanceForDeposit($payload)); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorInvalidAccessKeyError',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorInvalidSignerId',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorSignerDoesNotExist',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorInvalidNonce',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorNonceTooLarge',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorInvalidReceiverId',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorInvalidSignature',
      'nullable' => false,
    ),
    7 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorNotEnoughBalance',
      'nullable' => false,
    ),
    8 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorLackBalanceForState',
      'nullable' => false,
    ),
    9 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorCostOverflow',
      'nullable' => false,
    ),
    10 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorInvalidChain',
      'nullable' => false,
    ),
    11 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorExpired',
      'nullable' => false,
    ),
    12 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorActionsValidation',
      'nullable' => false,
    ),
    13 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorTransactionSizeExceeded',
      'nullable' => false,
    ),
    14 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorInvalidTransactionVersion',
      'nullable' => false,
    ),
    15 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorStorageError',
      'nullable' => false,
    ),
    16 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorShardCongested',
      'nullable' => false,
    ),
    17 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorShardStuck',
      'nullable' => false,
    ),
    18 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorInvalidNonceIndex',
      'nullable' => false,
    ),
    19 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorNotEnoughGasKeyBalance',
      'nullable' => false,
    ),
    20 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorNotEnoughBalanceForDeposit',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorInvalidAccessKeyError',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorInvalidSignerId',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorSignerDoesNotExist',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorInvalidNonce',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorNonceTooLarge',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorInvalidReceiverId',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorInvalidSignature',
      'nullable' => false,
    ),
    7 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorNotEnoughBalance',
      'nullable' => false,
    ),
    8 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorLackBalanceForState',
      'nullable' => false,
    ),
    9 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorCostOverflow',
      'nullable' => false,
    ),
    10 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorInvalidChain',
      'nullable' => false,
    ),
    11 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorExpired',
      'nullable' => false,
    ),
    12 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorActionsValidation',
      'nullable' => false,
    ),
    13 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorTransactionSizeExceeded',
      'nullable' => false,
    ),
    14 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorInvalidTransactionVersion',
      'nullable' => false,
    ),
    15 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorStorageError',
      'nullable' => false,
    ),
    16 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorShardCongested',
      'nullable' => false,
    ),
    17 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorShardStuck',
      'nullable' => false,
    ),
    18 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorInvalidNonceIndex',
      'nullable' => false,
    ),
    19 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorNotEnoughGasKeyBalance',
      'nullable' => false,
    ),
    20 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorNotEnoughBalanceForDeposit',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
