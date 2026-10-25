<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class RpcLightClientExecutionProofRequestReceipt implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $receiptId,
        /**
         * @var \Near\JsonRpc\Generated\Models\AccountId
         */
        public \Near\JsonRpc\Generated\Models\AccountId $receiverId,
        /**
         * @var 'receipt'
         */
        public string $type,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $lightClientHead,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->receiptId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'receipt_id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->receiverId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'receiver_id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->type, array (
  'enum' => 
  array (
    0 => 'receipt',
  ),
  'type' => 'string',
), 'type');
        \Near\JsonRpc\Models\TypeGuard::assert($this->lightClientHead, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'light_client_head');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcLightClientExecutionProofRequestReceipt.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('type', $data)) throw new \InvalidArgumentException('Missing required field: type');
        if (!array_key_exists('receipt_id', $data)) throw new \InvalidArgumentException('Missing required field: receipt_id');
        if (!array_key_exists('receiver_id', $data)) throw new \InvalidArgumentException('Missing required field: receiver_id');
        if (!array_key_exists('light_client_head', $data)) throw new \InvalidArgumentException('Missing required field: light_client_head');
        $extra = array_diff_key($data, array (
  'receipt_id' => true,
  'receiver_id' => true,
  'type' => true,
  'light_client_head' => true,
));
        return new self(
            receiptId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['receipt_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'receipt_id'),
            receiverId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['receiver_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'receiver_id'),
            type: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['type'], array (
  'enum' => 
  array (
    0 => 'receipt',
  ),
  'type' => 'string',
), 'type'),
            lightClientHead: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['light_client_head'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'light_client_head'),
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
        $data['receipt_id'] = $this->receiptId;
        $data['receiver_id'] = $this->receiverId;
        $data['type'] = $this->type;
        $data['light_client_head'] = $this->lightClientHead;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'receipt_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'receiver_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
    'type' => 
    array (
      'enum' => 
      array (
        0 => 'receipt',
      ),
      'type' => 'string',
    ),
    'light_client_head' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'type',
    1 => 'receipt_id',
    2 => 'receiver_id',
    3 => 'light_client_head',
  ),
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'receipt',
  ),
), 'RpcLightClientExecutionProofRequestReceipt'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'receipt_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'receiver_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
    'type' => 
    array (
      'enum' => 
      array (
        0 => 'receipt',
      ),
      'type' => 'string',
    ),
    'light_client_head' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'type',
    1 => 'receipt_id',
    2 => 'receiver_id',
    3 => 'light_client_head',
  ),
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'receipt',
  ),
), 'RpcLightClientExecutionProofRequestReceipt');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
