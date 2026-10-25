<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class RpcCallFunctionError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\RpcCallFunctionErrorUnknownBlock|\Near\JsonRpc\Generated\Models\RpcCallFunctionErrorInvalidAccount|\Near\JsonRpc\Generated\Models\RpcCallFunctionErrorUnknownAccount|\Near\JsonRpc\Generated\Models\RpcCallFunctionErrorNoContractCode|\Near\JsonRpc\Generated\Models\RpcCallFunctionErrorContractExecutionError|\Near\JsonRpc\Generated\Models\RpcCallFunctionErrorInternalError */
    public \Near\JsonRpc\Generated\Models\RpcCallFunctionErrorUnknownBlock|\Near\JsonRpc\Generated\Models\RpcCallFunctionErrorInvalidAccount|\Near\JsonRpc\Generated\Models\RpcCallFunctionErrorUnknownAccount|\Near\JsonRpc\Generated\Models\RpcCallFunctionErrorNoContractCode|\Near\JsonRpc\Generated\Models\RpcCallFunctionErrorContractExecutionError|\Near\JsonRpc\Generated\Models\RpcCallFunctionErrorInternalError $root;

    public function __construct(\Near\JsonRpc\Generated\Models\RpcCallFunctionErrorUnknownBlock|\Near\JsonRpc\Generated\Models\RpcCallFunctionErrorInvalidAccount|\Near\JsonRpc\Generated\Models\RpcCallFunctionErrorUnknownAccount|\Near\JsonRpc\Generated\Models\RpcCallFunctionErrorNoContractCode|\Near\JsonRpc\Generated\Models\RpcCallFunctionErrorContractExecutionError|\Near\JsonRpc\Generated\Models\RpcCallFunctionErrorInternalError $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\RpcCallFunctionErrorUnknownBlock::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\RpcCallFunctionErrorInvalidAccount::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\RpcCallFunctionErrorUnknownAccount::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\RpcCallFunctionErrorNoContractCode::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[4] = \Near\JsonRpc\Generated\Models\RpcCallFunctionErrorContractExecutionError::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[5] = \Near\JsonRpc\Generated\Models\RpcCallFunctionErrorInternalError::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for RpcCallFunctionError.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcCallFunctionErrorUnknownBlock => 'UNKNOWN_BLOCK',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcCallFunctionErrorInvalidAccount => 'INVALID_ACCOUNT',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcCallFunctionErrorUnknownAccount => 'UNKNOWN_ACCOUNT',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcCallFunctionErrorNoContractCode => 'NO_CONTRACT_CODE',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcCallFunctionErrorContractExecutionError => 'CONTRACT_EXECUTION_ERROR',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcCallFunctionErrorInternalError => 'INTERNAL_ERROR',
            default => throw new \LogicException('Unknown RpcCallFunctionError variant.'),
        };
    }
    public static function unknownBlock(\Near\JsonRpc\Generated\Models\RpcCallFunctionErrorUnknownBlock $variant): self { return new self($variant); }
    public static function invalidAccount(\Near\JsonRpc\Generated\Models\RpcCallFunctionErrorInvalidAccount $variant): self { return new self($variant); }
    public static function unknownAccount(\Near\JsonRpc\Generated\Models\RpcCallFunctionErrorUnknownAccount $variant): self { return new self($variant); }
    public static function noContractCode(\Near\JsonRpc\Generated\Models\RpcCallFunctionErrorNoContractCode $variant): self { return new self($variant); }
    public static function contractExecutionError(\Near\JsonRpc\Generated\Models\RpcCallFunctionErrorContractExecutionError $variant): self { return new self($variant); }
    public static function internalError(\Near\JsonRpc\Generated\Models\RpcCallFunctionErrorInternalError $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcCallFunctionErrorUnknownBlock',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcCallFunctionErrorInvalidAccount',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcCallFunctionErrorUnknownAccount',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcCallFunctionErrorNoContractCode',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcCallFunctionErrorContractExecutionError',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcCallFunctionErrorInternalError',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcCallFunctionErrorUnknownBlock',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcCallFunctionErrorInvalidAccount',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcCallFunctionErrorUnknownAccount',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcCallFunctionErrorNoContractCode',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcCallFunctionErrorContractExecutionError',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcCallFunctionErrorInternalError',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
