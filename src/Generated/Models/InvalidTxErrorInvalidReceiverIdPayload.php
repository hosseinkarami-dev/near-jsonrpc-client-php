<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class InvalidTxErrorInvalidReceiverIdPayload implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var string
         */
        public string $receiverId,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->receiverId, array (
  'type' => 'string',
), 'receiver_id');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for InvalidTxErrorInvalidReceiverIdPayload.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('receiver_id', $data)) throw new \InvalidArgumentException('Missing required field: receiver_id');
        $extra = array_diff_key($data, array (
  'receiver_id' => true,
));
        return new self(
            receiverId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['receiver_id'], array (
  'type' => 'string',
), 'receiver_id'),
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
        $data['receiver_id'] = $this->receiverId;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'receiver_id' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'receiver_id',
  ),
  'type' => 'object',
), 'InvalidTxErrorInvalidReceiverIdPayload'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'receiver_id' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'receiver_id',
  ),
  'type' => 'object',
), 'InvalidTxErrorInvalidReceiverIdPayload');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
