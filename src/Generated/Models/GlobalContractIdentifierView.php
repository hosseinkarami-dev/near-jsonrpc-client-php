<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class GlobalContractIdentifierView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\GlobalContractIdentifierViewHash|\Near\JsonRpc\Generated\Models\GlobalContractIdentifierViewAccountId */
    public \Near\JsonRpc\Generated\Models\GlobalContractIdentifierViewHash|\Near\JsonRpc\Generated\Models\GlobalContractIdentifierViewAccountId $root;

    public function __construct(\Near\JsonRpc\Generated\Models\GlobalContractIdentifierViewHash|\Near\JsonRpc\Generated\Models\GlobalContractIdentifierViewAccountId $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\GlobalContractIdentifierViewHash::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\GlobalContractIdentifierViewAccountId::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for GlobalContractIdentifierView.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\GlobalContractIdentifierViewHash => 'hash',
            $this->root instanceof \Near\JsonRpc\Generated\Models\GlobalContractIdentifierViewAccountId => 'account_id',
            default => throw new \LogicException('Unknown GlobalContractIdentifierView variant.'),
        };
    }
    public static function hash(\Near\JsonRpc\Generated\Models\CryptoHash $payload): self { return new self(new \Near\JsonRpc\Generated\Models\GlobalContractIdentifierViewHash($payload)); }
    public static function accountId(\Near\JsonRpc\Generated\Models\AccountId $payload): self { return new self(new \Near\JsonRpc\Generated\Models\GlobalContractIdentifierViewAccountId($payload)); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GlobalContractIdentifierViewHash',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GlobalContractIdentifierViewAccountId',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GlobalContractIdentifierViewHash',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GlobalContractIdentifierViewAccountId',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
