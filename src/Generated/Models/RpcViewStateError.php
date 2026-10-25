<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class RpcViewStateError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\RpcViewStateErrorUnknownBlock|\Near\JsonRpc\Generated\Models\RpcViewStateErrorInvalidAccount|\Near\JsonRpc\Generated\Models\RpcViewStateErrorUnknownAccount|\Near\JsonRpc\Generated\Models\RpcViewStateErrorTooLargeContractState|\Near\JsonRpc\Generated\Models\RpcViewStateErrorInternalError */
    public \Near\JsonRpc\Generated\Models\RpcViewStateErrorUnknownBlock|\Near\JsonRpc\Generated\Models\RpcViewStateErrorInvalidAccount|\Near\JsonRpc\Generated\Models\RpcViewStateErrorUnknownAccount|\Near\JsonRpc\Generated\Models\RpcViewStateErrorTooLargeContractState|\Near\JsonRpc\Generated\Models\RpcViewStateErrorInternalError $root;

    public function __construct(\Near\JsonRpc\Generated\Models\RpcViewStateErrorUnknownBlock|\Near\JsonRpc\Generated\Models\RpcViewStateErrorInvalidAccount|\Near\JsonRpc\Generated\Models\RpcViewStateErrorUnknownAccount|\Near\JsonRpc\Generated\Models\RpcViewStateErrorTooLargeContractState|\Near\JsonRpc\Generated\Models\RpcViewStateErrorInternalError $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\RpcViewStateErrorUnknownBlock::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\RpcViewStateErrorInvalidAccount::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\RpcViewStateErrorUnknownAccount::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\RpcViewStateErrorTooLargeContractState::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[4] = \Near\JsonRpc\Generated\Models\RpcViewStateErrorInternalError::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for RpcViewStateError.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcViewStateErrorUnknownBlock => 'UNKNOWN_BLOCK',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcViewStateErrorInvalidAccount => 'INVALID_ACCOUNT',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcViewStateErrorUnknownAccount => 'UNKNOWN_ACCOUNT',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcViewStateErrorTooLargeContractState => 'TOO_LARGE_CONTRACT_STATE',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcViewStateErrorInternalError => 'INTERNAL_ERROR',
            default => throw new \LogicException('Unknown RpcViewStateError variant.'),
        };
    }
    public static function unknownBlock(\Near\JsonRpc\Generated\Models\RpcViewStateErrorUnknownBlock $variant): self { return new self($variant); }
    public static function invalidAccount(\Near\JsonRpc\Generated\Models\RpcViewStateErrorInvalidAccount $variant): self { return new self($variant); }
    public static function unknownAccount(\Near\JsonRpc\Generated\Models\RpcViewStateErrorUnknownAccount $variant): self { return new self($variant); }
    public static function tooLargeContractState(\Near\JsonRpc\Generated\Models\RpcViewStateErrorTooLargeContractState $variant): self { return new self($variant); }
    public static function internalError(\Near\JsonRpc\Generated\Models\RpcViewStateErrorInternalError $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewStateErrorUnknownBlock',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewStateErrorInvalidAccount',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewStateErrorUnknownAccount',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewStateErrorTooLargeContractState',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewStateErrorInternalError',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewStateErrorUnknownBlock',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewStateErrorInvalidAccount',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewStateErrorUnknownAccount',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewStateErrorTooLargeContractState',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewStateErrorInternalError',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
