<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class RpcTransactionStatusRequest implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\RpcTransactionStatusRequestSignedTxBase64|\Near\JsonRpc\Generated\Models\RpcTransactionStatusRequestTxHashAndSenderAccountId */
    public \Near\JsonRpc\Generated\Models\RpcTransactionStatusRequestSignedTxBase64|\Near\JsonRpc\Generated\Models\RpcTransactionStatusRequestTxHashAndSenderAccountId $root;

    public function __construct(\Near\JsonRpc\Generated\Models\RpcTransactionStatusRequestSignedTxBase64|\Near\JsonRpc\Generated\Models\RpcTransactionStatusRequestTxHashAndSenderAccountId $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\RpcTransactionStatusRequestSignedTxBase64::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\RpcTransactionStatusRequestTxHashAndSenderAccountId::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (false && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its anyOf schema for RpcTransactionStatusRequest.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcTransactionStatusRequestSignedTxBase64 => 'signed_tx_base64',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcTransactionStatusRequestTxHashAndSenderAccountId => 'TxHashAndSenderAccountId',
            default => throw new \LogicException('Unknown RpcTransactionStatusRequest variant.'),
        };
    }
    public static function signedTxBase64(\Near\JsonRpc\Generated\Models\SignedTransaction $payload): self { return new self(new \Near\JsonRpc\Generated\Models\RpcTransactionStatusRequestSignedTxBase64($payload)); }
    public static function txHashAndSenderAccountId(\Near\JsonRpc\Generated\Models\RpcTransactionStatusRequestTxHashAndSenderAccountId $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcTransactionStatusRequestSignedTxBase64',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcTransactionStatusRequestTxHashAndSenderAccountId',
      'nullable' => false,
    ),
  ),
  'properties' => 
  array (
    'wait_until' => 
    array (
      'allOf' => 
      array (
        0 => 
        array (
          '$ref' => '#/components/schemas/TxExecutionStatus',
        ),
      ),
      'default' => 'EXECUTED_OPTIMISTIC',
    ),
  ),
  'title' => 'RpcTransactionStatusRequest',
  'type' => 'object',
), 'root'));
        return $this->root;
    }
    public function jsonSerializeForEncoding(): mixed { return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcTransactionStatusRequestSignedTxBase64',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcTransactionStatusRequestTxHashAndSenderAccountId',
      'nullable' => false,
    ),
  ),
  'properties' => 
  array (
    'wait_until' => 
    array (
      'allOf' => 
      array (
        0 => 
        array (
          '$ref' => '#/components/schemas/TxExecutionStatus',
        ),
      ),
      'default' => 'EXECUTED_OPTIMISTIC',
    ),
  ),
  'title' => 'RpcTransactionStatusRequest',
  'type' => 'object',
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
