<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * RPC view of a non-empty [`AccountContract`]. The `AccountContract::None`
 * variant is represented externally as a JSON `null` via `Option`, so this
 * enum only carries the three "contract is present" cases. Serializes as
 * an externally-tagged object:
 *
 * - `Local(hash)` → `{"local": "<CryptoHash>"}`
 * - `GlobalHash(hash)` → `{"global_hash": "<CryptoHash>"}`
 * - `GlobalAccountId(id)` → `{"global_account_id": "<AccountId>"}`
 *
 * Mirrors [`AccountContract`] 1:1 (minus `None`) so consumers can preserve
 * the distinction between a global-by-hash and global-by-account contract
 * without descending into a nested identifier.
 */
final readonly class AccountContractView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\AccountContractViewLocal|\Near\JsonRpc\Generated\Models\AccountContractViewGlobalHash|\Near\JsonRpc\Generated\Models\AccountContractViewGlobalAccountId */
    public \Near\JsonRpc\Generated\Models\AccountContractViewLocal|\Near\JsonRpc\Generated\Models\AccountContractViewGlobalHash|\Near\JsonRpc\Generated\Models\AccountContractViewGlobalAccountId $root;

    public function __construct(\Near\JsonRpc\Generated\Models\AccountContractViewLocal|\Near\JsonRpc\Generated\Models\AccountContractViewGlobalHash|\Near\JsonRpc\Generated\Models\AccountContractViewGlobalAccountId $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\AccountContractViewLocal::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\AccountContractViewGlobalHash::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\AccountContractViewGlobalAccountId::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for AccountContractView.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\AccountContractViewLocal => 'local',
            $this->root instanceof \Near\JsonRpc\Generated\Models\AccountContractViewGlobalHash => 'global_hash',
            $this->root instanceof \Near\JsonRpc\Generated\Models\AccountContractViewGlobalAccountId => 'global_account_id',
            default => throw new \LogicException('Unknown AccountContractView variant.'),
        };
    }
    public static function local(\Near\JsonRpc\Generated\Models\CryptoHash $payload): self { return new self(new \Near\JsonRpc\Generated\Models\AccountContractViewLocal($payload)); }
    public static function globalHash(\Near\JsonRpc\Generated\Models\CryptoHash $payload): self { return new self(new \Near\JsonRpc\Generated\Models\AccountContractViewGlobalHash($payload)); }
    public static function globalAccountId(\Near\JsonRpc\Generated\Models\AccountId $payload): self { return new self(new \Near\JsonRpc\Generated\Models\AccountContractViewGlobalAccountId($payload)); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountContractViewLocal',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountContractViewGlobalHash',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountContractViewGlobalAccountId',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountContractViewLocal',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountContractViewGlobalHash',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountContractViewGlobalAccountId',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
