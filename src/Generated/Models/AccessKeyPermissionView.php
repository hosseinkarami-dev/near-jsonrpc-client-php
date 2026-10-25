<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Describes the permission scope for an access key. Whether it is a function call or a full access key.
 */
final readonly class AccessKeyPermissionView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\AccessKeyPermissionViewFullAccess|\Near\JsonRpc\Generated\Models\AccessKeyPermissionViewFunctionCall|\Near\JsonRpc\Generated\Models\AccessKeyPermissionViewGasKeyFunctionCall|\Near\JsonRpc\Generated\Models\AccessKeyPermissionViewGasKeyFullAccess */
    public \Near\JsonRpc\Generated\Models\AccessKeyPermissionViewFullAccess|\Near\JsonRpc\Generated\Models\AccessKeyPermissionViewFunctionCall|\Near\JsonRpc\Generated\Models\AccessKeyPermissionViewGasKeyFunctionCall|\Near\JsonRpc\Generated\Models\AccessKeyPermissionViewGasKeyFullAccess $root;

    public function __construct(\Near\JsonRpc\Generated\Models\AccessKeyPermissionViewFullAccess|\Near\JsonRpc\Generated\Models\AccessKeyPermissionViewFunctionCall|\Near\JsonRpc\Generated\Models\AccessKeyPermissionViewGasKeyFunctionCall|\Near\JsonRpc\Generated\Models\AccessKeyPermissionViewGasKeyFullAccess $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\AccessKeyPermissionViewFullAccess::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\AccessKeyPermissionViewFunctionCall::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\AccessKeyPermissionViewGasKeyFunctionCall::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\AccessKeyPermissionViewGasKeyFullAccess::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for AccessKeyPermissionView.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\AccessKeyPermissionViewFullAccess => 'FullAccess',
            $this->root instanceof \Near\JsonRpc\Generated\Models\AccessKeyPermissionViewFunctionCall => 'FunctionCall',
            $this->root instanceof \Near\JsonRpc\Generated\Models\AccessKeyPermissionViewGasKeyFunctionCall => 'GasKeyFunctionCall',
            $this->root instanceof \Near\JsonRpc\Generated\Models\AccessKeyPermissionViewGasKeyFullAccess => 'GasKeyFullAccess',
            default => throw new \LogicException('Unknown AccessKeyPermissionView variant.'),
        };
    }
    public static function fullAccess(): self { return new self(\Near\JsonRpc\Generated\Models\AccessKeyPermissionViewFullAccess::FullAccess); }
    public static function functionCall(\Near\JsonRpc\Generated\Models\AccessKeyPermissionViewFunctionCallPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\AccessKeyPermissionViewFunctionCall($payload)); }
    public static function gasKeyFunctionCall(\Near\JsonRpc\Generated\Models\AccessKeyPermissionViewGasKeyFunctionCallPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\AccessKeyPermissionViewGasKeyFunctionCall($payload)); }
    public static function gasKeyFullAccess(\Near\JsonRpc\Generated\Models\AccessKeyPermissionViewGasKeyFullAccessPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\AccessKeyPermissionViewGasKeyFullAccess($payload)); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\AccessKeyPermissionViewFullAccess',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccessKeyPermissionViewFunctionCall',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccessKeyPermissionViewGasKeyFunctionCall',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccessKeyPermissionViewGasKeyFullAccess',
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
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\AccessKeyPermissionViewFullAccess',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccessKeyPermissionViewFunctionCall',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccessKeyPermissionViewGasKeyFunctionCall',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccessKeyPermissionViewGasKeyFullAccess',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
