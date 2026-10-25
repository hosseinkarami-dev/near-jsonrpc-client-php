<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class RpcTransactionStatusRequestTxHashAndSenderAccountId implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\AccountId
         */
        public \Near\JsonRpc\Generated\Models\AccountId $senderAccountId,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $txHash,
        /**
         * @var \Near\JsonRpc\Generated\Models\TxExecutionStatus|null
         */
        public \Near\JsonRpc\Generated\Models\TxExecutionStatus|null $waitUntil = null,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->senderAccountId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'sender_account_id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->txHash, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'tx_hash');
        if ($this->waitUntil !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->waitUntil, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TxExecutionStatus',
  'nullable' => false,
), 'wait_until');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcTransactionStatusRequestTxHashAndSenderAccountId.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('tx_hash', $data)) throw new \InvalidArgumentException('Missing required field: tx_hash');
        if (!array_key_exists('sender_account_id', $data)) throw new \InvalidArgumentException('Missing required field: sender_account_id');
        $extra = array_diff_key($data, array (
  'sender_account_id' => true,
  'tx_hash' => true,
  'wait_until' => true,
));
        return new self(
            senderAccountId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['sender_account_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'sender_account_id'),
            txHash: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['tx_hash'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'tx_hash'),
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
        $data['sender_account_id'] = $this->senderAccountId;
        $data['tx_hash'] = $this->txHash;
        if ($this->waitUntil !== null) $data['wait_until'] = $this->waitUntil;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'sender_account_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
    'tx_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
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
    0 => 'tx_hash',
    1 => 'sender_account_id',
  ),
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'TxHashAndSenderAccountId',
  ),
), 'RpcTransactionStatusRequestTxHashAndSenderAccountId'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'sender_account_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
    'tx_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
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
    0 => 'tx_hash',
    1 => 'sender_account_id',
  ),
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'TxHashAndSenderAccountId',
  ),
), 'RpcTransactionStatusRequestTxHashAndSenderAccountId');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
