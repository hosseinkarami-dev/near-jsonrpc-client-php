<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class TransactionNonce implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\TransactionNonceNonce|\Near\JsonRpc\Generated\Models\TransactionNonceGasKeyNonce */
    public \Near\JsonRpc\Generated\Models\TransactionNonceNonce|\Near\JsonRpc\Generated\Models\TransactionNonceGasKeyNonce $root;

    public function __construct(\Near\JsonRpc\Generated\Models\TransactionNonceNonce|\Near\JsonRpc\Generated\Models\TransactionNonceGasKeyNonce $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\TransactionNonceNonce::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\TransactionNonceGasKeyNonce::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for TransactionNonce.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\TransactionNonceNonce => 'Nonce',
            $this->root instanceof \Near\JsonRpc\Generated\Models\TransactionNonceGasKeyNonce => 'GasKeyNonce',
            default => throw new \LogicException('Unknown TransactionNonce variant.'),
        };
    }
    public static function nonce(\Near\JsonRpc\Generated\Models\TransactionNonceNoncePayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\TransactionNonceNonce($payload)); }
    public static function gasKeyNonce(\Near\JsonRpc\Generated\Models\TransactionNonceGasKeyNoncePayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\TransactionNonceGasKeyNonce($payload)); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TransactionNonceNonce',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TransactionNonceGasKeyNonce',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TransactionNonceNonce',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TransactionNonceGasKeyNonce',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
