<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class RpcViewAccountError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\RpcViewAccountErrorUnknownBlock|\Near\JsonRpc\Generated\Models\RpcViewAccountErrorInvalidAccount|\Near\JsonRpc\Generated\Models\RpcViewAccountErrorUnknownAccount|\Near\JsonRpc\Generated\Models\RpcViewAccountErrorInternalError */
    public \Near\JsonRpc\Generated\Models\RpcViewAccountErrorUnknownBlock|\Near\JsonRpc\Generated\Models\RpcViewAccountErrorInvalidAccount|\Near\JsonRpc\Generated\Models\RpcViewAccountErrorUnknownAccount|\Near\JsonRpc\Generated\Models\RpcViewAccountErrorInternalError $root;

    public function __construct(\Near\JsonRpc\Generated\Models\RpcViewAccountErrorUnknownBlock|\Near\JsonRpc\Generated\Models\RpcViewAccountErrorInvalidAccount|\Near\JsonRpc\Generated\Models\RpcViewAccountErrorUnknownAccount|\Near\JsonRpc\Generated\Models\RpcViewAccountErrorInternalError $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\RpcViewAccountErrorUnknownBlock::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\RpcViewAccountErrorInvalidAccount::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\RpcViewAccountErrorUnknownAccount::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\RpcViewAccountErrorInternalError::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for RpcViewAccountError.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcViewAccountErrorUnknownBlock => 'UNKNOWN_BLOCK',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcViewAccountErrorInvalidAccount => 'INVALID_ACCOUNT',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcViewAccountErrorUnknownAccount => 'UNKNOWN_ACCOUNT',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcViewAccountErrorInternalError => 'INTERNAL_ERROR',
            default => throw new \LogicException('Unknown RpcViewAccountError variant.'),
        };
    }
    public static function unknownBlock(\Near\JsonRpc\Generated\Models\RpcViewAccountErrorUnknownBlock $variant): self { return new self($variant); }
    public static function invalidAccount(\Near\JsonRpc\Generated\Models\RpcViewAccountErrorInvalidAccount $variant): self { return new self($variant); }
    public static function unknownAccount(\Near\JsonRpc\Generated\Models\RpcViewAccountErrorUnknownAccount $variant): self { return new self($variant); }
    public static function internalError(\Near\JsonRpc\Generated\Models\RpcViewAccountErrorInternalError $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccountErrorUnknownBlock',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccountErrorInvalidAccount',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccountErrorUnknownAccount',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccountErrorInternalError',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccountErrorUnknownBlock',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccountErrorInvalidAccount',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccountErrorUnknownAccount',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccountErrorInternalError',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
