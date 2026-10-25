<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class InvalidAccessKeyError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorAccessKeyNotFound|\Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorReceiverMismatch|\Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorMethodNameMismatch|\Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorRequiresFullAccess|\Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorNotEnoughAllowance|\Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorDepositWithFunctionCall|\Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorDelegateActionRequiresNonGasKey|\Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorDelegateActionRequiresGasKey */
    public \Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorAccessKeyNotFound|\Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorReceiverMismatch|\Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorMethodNameMismatch|\Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorRequiresFullAccess|\Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorNotEnoughAllowance|\Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorDepositWithFunctionCall|\Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorDelegateActionRequiresNonGasKey|\Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorDelegateActionRequiresGasKey $root;

    public function __construct(\Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorAccessKeyNotFound|\Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorReceiverMismatch|\Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorMethodNameMismatch|\Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorRequiresFullAccess|\Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorNotEnoughAllowance|\Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorDepositWithFunctionCall|\Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorDelegateActionRequiresNonGasKey|\Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorDelegateActionRequiresGasKey $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorAccessKeyNotFound::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorReceiverMismatch::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorMethodNameMismatch::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorRequiresFullAccess::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[4] = \Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorNotEnoughAllowance::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[5] = \Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorDepositWithFunctionCall::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[6] = \Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorDelegateActionRequiresNonGasKey::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[7] = \Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorDelegateActionRequiresGasKey::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for InvalidAccessKeyError.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorAccessKeyNotFound => 'AccessKeyNotFound',
            $this->root instanceof \Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorReceiverMismatch => 'ReceiverMismatch',
            $this->root instanceof \Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorMethodNameMismatch => 'MethodNameMismatch',
            $this->root instanceof \Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorRequiresFullAccess => 'RequiresFullAccess',
            $this->root instanceof \Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorNotEnoughAllowance => 'NotEnoughAllowance',
            $this->root instanceof \Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorDepositWithFunctionCall => 'DepositWithFunctionCall',
            $this->root instanceof \Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorDelegateActionRequiresNonGasKey => 'DelegateActionRequiresNonGasKey',
            $this->root instanceof \Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorDelegateActionRequiresGasKey => 'DelegateActionRequiresGasKey',
            default => throw new \LogicException('Unknown InvalidAccessKeyError variant.'),
        };
    }
    public static function accessKeyNotFound(\Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorAccessKeyNotFoundPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorAccessKeyNotFound($payload)); }
    public static function receiverMismatch(\Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorReceiverMismatchPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorReceiverMismatch($payload)); }
    public static function methodNameMismatch(\Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorMethodNameMismatchPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorMethodNameMismatch($payload)); }
    public static function requiresFullAccess(): self { return new self(\Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorRequiresFullAccess::RequiresFullAccess); }
    public static function notEnoughAllowance(\Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorNotEnoughAllowancePayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorNotEnoughAllowance($payload)); }
    public static function depositWithFunctionCall(): self { return new self(\Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorDepositWithFunctionCall::DepositWithFunctionCall); }
    public static function delegateActionRequiresNonGasKey(): self { return new self(\Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorDelegateActionRequiresNonGasKey::DelegateActionRequiresNonGasKey); }
    public static function delegateActionRequiresGasKey(): self { return new self(\Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorDelegateActionRequiresGasKey::DelegateActionRequiresGasKey); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidAccessKeyErrorAccessKeyNotFound',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidAccessKeyErrorReceiverMismatch',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidAccessKeyErrorMethodNameMismatch',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidAccessKeyErrorRequiresFullAccess',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidAccessKeyErrorNotEnoughAllowance',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidAccessKeyErrorDepositWithFunctionCall',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidAccessKeyErrorDelegateActionRequiresNonGasKey',
      'nullable' => false,
    ),
    7 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidAccessKeyErrorDelegateActionRequiresGasKey',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidAccessKeyErrorAccessKeyNotFound',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidAccessKeyErrorReceiverMismatch',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidAccessKeyErrorMethodNameMismatch',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidAccessKeyErrorRequiresFullAccess',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidAccessKeyErrorNotEnoughAllowance',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidAccessKeyErrorDepositWithFunctionCall',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidAccessKeyErrorDelegateActionRequiresNonGasKey',
      'nullable' => false,
    ),
    7 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidAccessKeyErrorDelegateActionRequiresGasKey',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
