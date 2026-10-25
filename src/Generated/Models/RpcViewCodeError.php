<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class RpcViewCodeError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\RpcViewCodeErrorUnknownBlock|\Near\JsonRpc\Generated\Models\RpcViewCodeErrorInvalidAccount|\Near\JsonRpc\Generated\Models\RpcViewCodeErrorUnknownAccount|\Near\JsonRpc\Generated\Models\RpcViewCodeErrorNoContractCode|\Near\JsonRpc\Generated\Models\RpcViewCodeErrorInternalError */
    public \Near\JsonRpc\Generated\Models\RpcViewCodeErrorUnknownBlock|\Near\JsonRpc\Generated\Models\RpcViewCodeErrorInvalidAccount|\Near\JsonRpc\Generated\Models\RpcViewCodeErrorUnknownAccount|\Near\JsonRpc\Generated\Models\RpcViewCodeErrorNoContractCode|\Near\JsonRpc\Generated\Models\RpcViewCodeErrorInternalError $root;

    public function __construct(\Near\JsonRpc\Generated\Models\RpcViewCodeErrorUnknownBlock|\Near\JsonRpc\Generated\Models\RpcViewCodeErrorInvalidAccount|\Near\JsonRpc\Generated\Models\RpcViewCodeErrorUnknownAccount|\Near\JsonRpc\Generated\Models\RpcViewCodeErrorNoContractCode|\Near\JsonRpc\Generated\Models\RpcViewCodeErrorInternalError $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\RpcViewCodeErrorUnknownBlock::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\RpcViewCodeErrorInvalidAccount::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\RpcViewCodeErrorUnknownAccount::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\RpcViewCodeErrorNoContractCode::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[4] = \Near\JsonRpc\Generated\Models\RpcViewCodeErrorInternalError::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for RpcViewCodeError.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcViewCodeErrorUnknownBlock => 'UNKNOWN_BLOCK',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcViewCodeErrorInvalidAccount => 'INVALID_ACCOUNT',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcViewCodeErrorUnknownAccount => 'UNKNOWN_ACCOUNT',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcViewCodeErrorNoContractCode => 'NO_CONTRACT_CODE',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcViewCodeErrorInternalError => 'INTERNAL_ERROR',
            default => throw new \LogicException('Unknown RpcViewCodeError variant.'),
        };
    }
    public static function unknownBlock(\Near\JsonRpc\Generated\Models\RpcViewCodeErrorUnknownBlock $variant): self { return new self($variant); }
    public static function invalidAccount(\Near\JsonRpc\Generated\Models\RpcViewCodeErrorInvalidAccount $variant): self { return new self($variant); }
    public static function unknownAccount(\Near\JsonRpc\Generated\Models\RpcViewCodeErrorUnknownAccount $variant): self { return new self($variant); }
    public static function noContractCode(\Near\JsonRpc\Generated\Models\RpcViewCodeErrorNoContractCode $variant): self { return new self($variant); }
    public static function internalError(\Near\JsonRpc\Generated\Models\RpcViewCodeErrorInternalError $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewCodeErrorUnknownBlock',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewCodeErrorInvalidAccount',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewCodeErrorUnknownAccount',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewCodeErrorNoContractCode',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewCodeErrorInternalError',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewCodeErrorUnknownBlock',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewCodeErrorInvalidAccount',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewCodeErrorUnknownAccount',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewCodeErrorNoContractCode',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewCodeErrorInternalError',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
