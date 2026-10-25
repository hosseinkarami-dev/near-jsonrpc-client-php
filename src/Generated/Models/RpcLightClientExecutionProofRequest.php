<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class RpcLightClientExecutionProofRequest implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\RpcLightClientExecutionProofRequestTransaction|\Near\JsonRpc\Generated\Models\RpcLightClientExecutionProofRequestReceipt */
    public \Near\JsonRpc\Generated\Models\RpcLightClientExecutionProofRequestTransaction|\Near\JsonRpc\Generated\Models\RpcLightClientExecutionProofRequestReceipt $root;

    public function __construct(\Near\JsonRpc\Generated\Models\RpcLightClientExecutionProofRequestTransaction|\Near\JsonRpc\Generated\Models\RpcLightClientExecutionProofRequestReceipt $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\RpcLightClientExecutionProofRequestTransaction::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\RpcLightClientExecutionProofRequestReceipt::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for RpcLightClientExecutionProofRequest.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcLightClientExecutionProofRequestTransaction => 'transaction',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcLightClientExecutionProofRequestReceipt => 'receipt',
            default => throw new \LogicException('Unknown RpcLightClientExecutionProofRequest variant.'),
        };
    }
    public static function transaction(\Near\JsonRpc\Generated\Models\RpcLightClientExecutionProofRequestTransaction $variant): self { return new self($variant); }
    public static function receipt(\Near\JsonRpc\Generated\Models\RpcLightClientExecutionProofRequestReceipt $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcLightClientExecutionProofRequestTransaction',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcLightClientExecutionProofRequestReceipt',
      'nullable' => false,
    ),
  ),
  'properties' => 
  array (
    'light_client_head' => 
    array (
      '$ref' => '#/components/schemas/CryptoHash',
    ),
  ),
  'required' => 
  array (
    0 => 'light_client_head',
  ),
  'title' => 'RpcLightClientExecutionProofRequest',
  'type' => 'object',
), 'root'));
        return $this->root;
    }
    public function jsonSerializeForEncoding(): mixed { return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcLightClientExecutionProofRequestTransaction',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcLightClientExecutionProofRequestReceipt',
      'nullable' => false,
    ),
  ),
  'properties' => 
  array (
    'light_client_head' => 
    array (
      '$ref' => '#/components/schemas/CryptoHash',
    ),
  ),
  'required' => 
  array (
    0 => 'light_client_head',
  ),
  'title' => 'RpcLightClientExecutionProofRequest',
  'type' => 'object',
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
