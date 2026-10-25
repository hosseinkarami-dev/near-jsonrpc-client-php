<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class RpcViewAccessKeyError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\RpcViewAccessKeyErrorUnknownBlock|\Near\JsonRpc\Generated\Models\RpcViewAccessKeyErrorInvalidAccount|\Near\JsonRpc\Generated\Models\RpcViewAccessKeyErrorUnknownAccount|\Near\JsonRpc\Generated\Models\RpcViewAccessKeyErrorUnknownAccessKey|\Near\JsonRpc\Generated\Models\RpcViewAccessKeyErrorInternalError */
    public \Near\JsonRpc\Generated\Models\RpcViewAccessKeyErrorUnknownBlock|\Near\JsonRpc\Generated\Models\RpcViewAccessKeyErrorInvalidAccount|\Near\JsonRpc\Generated\Models\RpcViewAccessKeyErrorUnknownAccount|\Near\JsonRpc\Generated\Models\RpcViewAccessKeyErrorUnknownAccessKey|\Near\JsonRpc\Generated\Models\RpcViewAccessKeyErrorInternalError $root;

    public function __construct(\Near\JsonRpc\Generated\Models\RpcViewAccessKeyErrorUnknownBlock|\Near\JsonRpc\Generated\Models\RpcViewAccessKeyErrorInvalidAccount|\Near\JsonRpc\Generated\Models\RpcViewAccessKeyErrorUnknownAccount|\Near\JsonRpc\Generated\Models\RpcViewAccessKeyErrorUnknownAccessKey|\Near\JsonRpc\Generated\Models\RpcViewAccessKeyErrorInternalError $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\RpcViewAccessKeyErrorUnknownBlock::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\RpcViewAccessKeyErrorInvalidAccount::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\RpcViewAccessKeyErrorUnknownAccount::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\RpcViewAccessKeyErrorUnknownAccessKey::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[4] = \Near\JsonRpc\Generated\Models\RpcViewAccessKeyErrorInternalError::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for RpcViewAccessKeyError.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcViewAccessKeyErrorUnknownBlock => 'UNKNOWN_BLOCK',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcViewAccessKeyErrorInvalidAccount => 'INVALID_ACCOUNT',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcViewAccessKeyErrorUnknownAccount => 'UNKNOWN_ACCOUNT',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcViewAccessKeyErrorUnknownAccessKey => 'UNKNOWN_ACCESS_KEY',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcViewAccessKeyErrorInternalError => 'INTERNAL_ERROR',
            default => throw new \LogicException('Unknown RpcViewAccessKeyError variant.'),
        };
    }
    public static function unknownBlock(\Near\JsonRpc\Generated\Models\RpcViewAccessKeyErrorUnknownBlock $variant): self { return new self($variant); }
    public static function invalidAccount(\Near\JsonRpc\Generated\Models\RpcViewAccessKeyErrorInvalidAccount $variant): self { return new self($variant); }
    public static function unknownAccount(\Near\JsonRpc\Generated\Models\RpcViewAccessKeyErrorUnknownAccount $variant): self { return new self($variant); }
    public static function unknownAccessKey(\Near\JsonRpc\Generated\Models\RpcViewAccessKeyErrorUnknownAccessKey $variant): self { return new self($variant); }
    public static function internalError(\Near\JsonRpc\Generated\Models\RpcViewAccessKeyErrorInternalError $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyErrorUnknownBlock',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyErrorInvalidAccount',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyErrorUnknownAccount',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyErrorUnknownAccessKey',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyErrorInternalError',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyErrorUnknownBlock',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyErrorInvalidAccount',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyErrorUnknownAccount',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyErrorUnknownAccessKey',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyErrorInternalError',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
