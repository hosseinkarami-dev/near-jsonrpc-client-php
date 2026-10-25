<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class RpcSendTransactionRequest implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\SignedTransaction
         */
        public \Near\JsonRpc\Generated\Models\SignedTransaction $signedTxBase64,
        /**
         * @var \Near\JsonRpc\Generated\Models\TxExecutionStatus|null
         */
        public \Near\JsonRpc\Generated\Models\TxExecutionStatus|null $waitUntil = null,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->signedTxBase64, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SignedTransaction',
  'nullable' => false,
), 'signed_tx_base64');
        if ($this->waitUntil !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->waitUntil, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TxExecutionStatus',
  'nullable' => false,
), 'wait_until');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcSendTransactionRequest.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('signed_tx_base64', $data)) throw new \InvalidArgumentException('Missing required field: signed_tx_base64');
        $extra = array_diff_key($data, array (
  'signed_tx_base64' => true,
  'wait_until' => true,
));
        return new self(
            signedTxBase64: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['signed_tx_base64'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SignedTransaction',
  'nullable' => false,
), 'signed_tx_base64'),
            waitUntil: array_key_exists('wait_until', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['wait_until'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TxExecutionStatus',
  'nullable' => false,
), 'wait_until') : null,
            _extra: $extra
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = $this->extra;
        $data['signed_tx_base64'] = $this->signedTxBase64;
        if ($this->waitUntil !== null) $data['wait_until'] = $this->waitUntil;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'signed_tx_base64' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SignedTransaction',
      'nullable' => false,
    ),
    'wait_until' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TxExecutionStatus',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'signed_tx_base64',
  ),
  'title' => 'RpcSendTransactionRequest',
  'type' => 'object',
), 'RpcSendTransactionRequest'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'signed_tx_base64' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SignedTransaction',
      'nullable' => false,
    ),
    'wait_until' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TxExecutionStatus',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'signed_tx_base64',
  ),
  'title' => 'RpcSendTransactionRequest',
  'type' => 'object',
), 'RpcSendTransactionRequest');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
