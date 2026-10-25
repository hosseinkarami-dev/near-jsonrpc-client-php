<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Defines permissions for AccessKey
 */
final readonly class AccessKeyPermission implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\AccessKeyPermissionFunctionCall|\Near\JsonRpc\Generated\Models\AccessKeyPermissionFullAccess|\Near\JsonRpc\Generated\Models\AccessKeyPermissionGasKeyFunctionCall|\Near\JsonRpc\Generated\Models\AccessKeyPermissionGasKeyFullAccess */
    public \Near\JsonRpc\Generated\Models\AccessKeyPermissionFunctionCall|\Near\JsonRpc\Generated\Models\AccessKeyPermissionFullAccess|\Near\JsonRpc\Generated\Models\AccessKeyPermissionGasKeyFunctionCall|\Near\JsonRpc\Generated\Models\AccessKeyPermissionGasKeyFullAccess $root;

    public function __construct(\Near\JsonRpc\Generated\Models\AccessKeyPermissionFunctionCall|\Near\JsonRpc\Generated\Models\AccessKeyPermissionFullAccess|\Near\JsonRpc\Generated\Models\AccessKeyPermissionGasKeyFunctionCall|\Near\JsonRpc\Generated\Models\AccessKeyPermissionGasKeyFullAccess $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\AccessKeyPermissionFunctionCall::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\AccessKeyPermissionFullAccess::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\AccessKeyPermissionGasKeyFunctionCall::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\AccessKeyPermissionGasKeyFullAccess::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for AccessKeyPermission.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\AccessKeyPermissionFunctionCall => 'FunctionCall',
            $this->root instanceof \Near\JsonRpc\Generated\Models\AccessKeyPermissionFullAccess => 'FullAccess',
            $this->root instanceof \Near\JsonRpc\Generated\Models\AccessKeyPermissionGasKeyFunctionCall => 'GasKeyFunctionCall',
            $this->root instanceof \Near\JsonRpc\Generated\Models\AccessKeyPermissionGasKeyFullAccess => 'GasKeyFullAccess',
            default => throw new \LogicException('Unknown AccessKeyPermission variant.'),
        };
    }
    public static function functionCall(\Near\JsonRpc\Generated\Models\FunctionCallPermission $payload): self { return new self(new \Near\JsonRpc\Generated\Models\AccessKeyPermissionFunctionCall($payload)); }
    public static function fullAccess(): self { return new self(\Near\JsonRpc\Generated\Models\AccessKeyPermissionFullAccess::FullAccess); }
    public static function gasKeyFunctionCall(\Near\JsonRpc\Generated\Models\AccessKeyPermissionGasKeyFunctionCall $variant): self { return new self($variant); }
    public static function gasKeyFullAccess(\Near\JsonRpc\Generated\Models\GasKeyInfo $payload): self { return new self(new \Near\JsonRpc\Generated\Models\AccessKeyPermissionGasKeyFullAccess($payload)); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccessKeyPermissionFunctionCall',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\AccessKeyPermissionFullAccess',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccessKeyPermissionGasKeyFunctionCall',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccessKeyPermissionGasKeyFullAccess',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccessKeyPermissionFunctionCall',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\AccessKeyPermissionFullAccess',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccessKeyPermissionGasKeyFunctionCall',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccessKeyPermissionGasKeyFullAccess',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
