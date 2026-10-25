<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class InvalidAccessKeyErrorReceiverMismatchPayload implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var string
         */
        public string $akReceiver,
        /**
         * @var \Near\JsonRpc\Generated\Models\AccountId
         */
        public \Near\JsonRpc\Generated\Models\AccountId $txReceiver,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->akReceiver, array (
  'type' => 'string',
), 'ak_receiver');
        \Near\JsonRpc\Models\TypeGuard::assert($this->txReceiver, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'tx_receiver');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for InvalidAccessKeyErrorReceiverMismatchPayload.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('tx_receiver', $data)) throw new \InvalidArgumentException('Missing required field: tx_receiver');
        if (!array_key_exists('ak_receiver', $data)) throw new \InvalidArgumentException('Missing required field: ak_receiver');
        $extra = array_diff_key($data, array (
  'ak_receiver' => true,
  'tx_receiver' => true,
));
        return new self(
            akReceiver: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['ak_receiver'], array (
  'type' => 'string',
), 'ak_receiver'),
            txReceiver: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['tx_receiver'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'tx_receiver'),
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
        $data['ak_receiver'] = $this->akReceiver;
        $data['tx_receiver'] = $this->txReceiver;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'ak_receiver' => 
    array (
      'type' => 'string',
    ),
    'tx_receiver' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'tx_receiver',
    1 => 'ak_receiver',
  ),
  'type' => 'object',
), 'InvalidAccessKeyErrorReceiverMismatchPayload'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'ak_receiver' => 
    array (
      'type' => 'string',
    ),
    'tx_receiver' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'tx_receiver',
    1 => 'ak_receiver',
  ),
  'type' => 'object',
), 'InvalidAccessKeyErrorReceiverMismatchPayload');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
