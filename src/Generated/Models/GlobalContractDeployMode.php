<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class GlobalContractDeployMode implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\GlobalContractDeployModeCodeHash|\Near\JsonRpc\Generated\Models\GlobalContractDeployModeAccountId */
    public \Near\JsonRpc\Generated\Models\GlobalContractDeployModeCodeHash|\Near\JsonRpc\Generated\Models\GlobalContractDeployModeAccountId $root;

    public function __construct(\Near\JsonRpc\Generated\Models\GlobalContractDeployModeCodeHash|\Near\JsonRpc\Generated\Models\GlobalContractDeployModeAccountId $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\GlobalContractDeployModeCodeHash::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\GlobalContractDeployModeAccountId::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for GlobalContractDeployMode.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\GlobalContractDeployModeCodeHash => 'CodeHash',
            $this->root instanceof \Near\JsonRpc\Generated\Models\GlobalContractDeployModeAccountId => 'AccountId',
            default => throw new \LogicException('Unknown GlobalContractDeployMode variant.'),
        };
    }
    public static function codeHash(): self { return new self(\Near\JsonRpc\Generated\Models\GlobalContractDeployModeCodeHash::CodeHash); }
    public static function accountId(): self { return new self(\Near\JsonRpc\Generated\Models\GlobalContractDeployModeAccountId::AccountId); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\GlobalContractDeployModeCodeHash',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\GlobalContractDeployModeAccountId',
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
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\GlobalContractDeployModeCodeHash',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\GlobalContractDeployModeAccountId',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
