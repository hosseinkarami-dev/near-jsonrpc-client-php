<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * NEAR Account Identifier.
 *
 * This is a unique, syntactically valid, human-readable account identifier on the NEAR network.
 *
 * [See the crate-level docs for information about validation.](index.html#account-id-rules)
 *
 * Also see [Error kind precedence](AccountId#error-kind-precedence).
 *
 * ## Examples
 *
 * ```
 * use near_account_id::AccountId;
 *
 * let alice: AccountId = "alice.near".parse().unwrap();
 *
 * assert!("ƒelicia.near".parse::<AccountId>().is_err()); // (ƒ is not f)
 * ```
 */
final readonly class AccountId implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public string $root;

    public function __construct(string $root)
    {
        \Near\JsonRpc\Models\TypeGuard::assert($root, array (
  '$schema' => 'https://json-schema.org/draft/2020-12/schema',
  'title' => 'AccountId',
  'type' => 'string',
), 'root');
        $this->root = $root;
    }

    public static function fromValue(mixed $value): self
    {
        return new self(\Near\JsonRpc\Models\ModelHydrator::hydrate($value, array (
  '$schema' => 'https://json-schema.org/draft/2020-12/schema',
  'title' => 'AccountId',
  'type' => 'string',
), 'root'));
    }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  '$schema' => 'https://json-schema.org/draft/2020-12/schema',
  'title' => 'AccountId',
  'type' => 'string',
), 'root'));
        return $this->root;
    }
    public function jsonSerializeForEncoding(): mixed { return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  '$schema' => 'https://json-schema.org/draft/2020-12/schema',
  'title' => 'AccountId',
  'type' => 'string',
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
