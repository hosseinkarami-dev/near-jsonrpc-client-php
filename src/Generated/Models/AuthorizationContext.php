<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * What authorized a chain of receipts: an access key that signed a transaction, or an
 * external call its contract accepted.
 */
final readonly class AuthorizationContext implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\AuthorizationContextExternalContractCall|\Near\JsonRpc\Generated\Models\AuthorizationContextAccessKey */
    public \Near\JsonRpc\Generated\Models\AuthorizationContextExternalContractCall|\Near\JsonRpc\Generated\Models\AuthorizationContextAccessKey $root;

    public function __construct(\Near\JsonRpc\Generated\Models\AuthorizationContextExternalContractCall|\Near\JsonRpc\Generated\Models\AuthorizationContextAccessKey $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\AuthorizationContextExternalContractCall::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\AuthorizationContextAccessKey::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for AuthorizationContext.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\AuthorizationContextExternalContractCall => 'ExternalContractCall',
            $this->root instanceof \Near\JsonRpc\Generated\Models\AuthorizationContextAccessKey => 'AccessKey',
            default => throw new \LogicException('Unknown AuthorizationContext variant.'),
        };
    }
    public static function externalContractCall(): self { return new self(\Near\JsonRpc\Generated\Models\AuthorizationContextExternalContractCall::ExternalContractCall); }
    public static function accessKey(\Near\JsonRpc\Generated\Models\PublicKey $payload): self { return new self(new \Near\JsonRpc\Generated\Models\AuthorizationContextAccessKey($payload)); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\AuthorizationContextExternalContractCall',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AuthorizationContextAccessKey',
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
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\AuthorizationContextExternalContractCall',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AuthorizationContextAccessKey',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
