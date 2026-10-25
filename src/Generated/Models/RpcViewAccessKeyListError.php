<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class RpcViewAccessKeyListError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\RpcViewAccessKeyListErrorUnknownBlock|\Near\JsonRpc\Generated\Models\RpcViewAccessKeyListErrorInvalidAccount|\Near\JsonRpc\Generated\Models\RpcViewAccessKeyListErrorUnknownAccount|\Near\JsonRpc\Generated\Models\RpcViewAccessKeyListErrorTooManyAccessKeys|\Near\JsonRpc\Generated\Models\RpcViewAccessKeyListErrorInternalError */
    public \Near\JsonRpc\Generated\Models\RpcViewAccessKeyListErrorUnknownBlock|\Near\JsonRpc\Generated\Models\RpcViewAccessKeyListErrorInvalidAccount|\Near\JsonRpc\Generated\Models\RpcViewAccessKeyListErrorUnknownAccount|\Near\JsonRpc\Generated\Models\RpcViewAccessKeyListErrorTooManyAccessKeys|\Near\JsonRpc\Generated\Models\RpcViewAccessKeyListErrorInternalError $root;

    public function __construct(\Near\JsonRpc\Generated\Models\RpcViewAccessKeyListErrorUnknownBlock|\Near\JsonRpc\Generated\Models\RpcViewAccessKeyListErrorInvalidAccount|\Near\JsonRpc\Generated\Models\RpcViewAccessKeyListErrorUnknownAccount|\Near\JsonRpc\Generated\Models\RpcViewAccessKeyListErrorTooManyAccessKeys|\Near\JsonRpc\Generated\Models\RpcViewAccessKeyListErrorInternalError $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\RpcViewAccessKeyListErrorUnknownBlock::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\RpcViewAccessKeyListErrorInvalidAccount::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\RpcViewAccessKeyListErrorUnknownAccount::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\RpcViewAccessKeyListErrorTooManyAccessKeys::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[4] = \Near\JsonRpc\Generated\Models\RpcViewAccessKeyListErrorInternalError::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for RpcViewAccessKeyListError.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcViewAccessKeyListErrorUnknownBlock => 'UNKNOWN_BLOCK',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcViewAccessKeyListErrorInvalidAccount => 'INVALID_ACCOUNT',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcViewAccessKeyListErrorUnknownAccount => 'UNKNOWN_ACCOUNT',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcViewAccessKeyListErrorTooManyAccessKeys => 'TOO_MANY_ACCESS_KEYS',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcViewAccessKeyListErrorInternalError => 'INTERNAL_ERROR',
            default => throw new \LogicException('Unknown RpcViewAccessKeyListError variant.'),
        };
    }
    public static function unknownBlock(\Near\JsonRpc\Generated\Models\RpcViewAccessKeyListErrorUnknownBlock $variant): self { return new self($variant); }
    public static function invalidAccount(\Near\JsonRpc\Generated\Models\RpcViewAccessKeyListErrorInvalidAccount $variant): self { return new self($variant); }
    public static function unknownAccount(\Near\JsonRpc\Generated\Models\RpcViewAccessKeyListErrorUnknownAccount $variant): self { return new self($variant); }
    public static function tooManyAccessKeys(\Near\JsonRpc\Generated\Models\RpcViewAccessKeyListErrorTooManyAccessKeys $variant): self { return new self($variant); }
    public static function internalError(\Near\JsonRpc\Generated\Models\RpcViewAccessKeyListErrorInternalError $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyListErrorUnknownBlock',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyListErrorInvalidAccount',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyListErrorUnknownAccount',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyListErrorTooManyAccessKeys',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyListErrorInternalError',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyListErrorUnknownBlock',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyListErrorInvalidAccount',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyListErrorUnknownAccount',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyListErrorTooManyAccessKeys',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyListErrorInternalError',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
