<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Transaction is specifying an invalid nonce index. Gas key transactions
 * must have a nonce_index in valid range, regular transactions must not.
 */
final readonly class InvalidTxErrorInvalidNonceIndex implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidNonceIndexPayload
         */
        public \Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidNonceIndexPayload $invalidNonceIndex
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->invalidNonceIndex, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorInvalidNonceIndexPayload',
  'nullable' => false,
), 'InvalidNonceIndex');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for InvalidTxErrorInvalidNonceIndex.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('InvalidNonceIndex', $data)) throw new \InvalidArgumentException('Missing required field: InvalidNonceIndex');
        $unknown = array_diff_key($data, array (
  'InvalidNonceIndex' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in InvalidTxErrorInvalidNonceIndex.');
        return new self(
            invalidNonceIndex: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['InvalidNonceIndex'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorInvalidNonceIndexPayload',
  'nullable' => false,
), 'InvalidNonceIndex')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['InvalidNonceIndex'] = $this->invalidNonceIndex;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'InvalidNonceIndex' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorInvalidNonceIndexPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'InvalidNonceIndex',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'InvalidNonceIndex',
    'tag' => 'InvalidNonceIndex',
    'payload' => 'InvalidTxErrorInvalidNonceIndexPayload',
  ),
), 'InvalidTxErrorInvalidNonceIndex'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'InvalidNonceIndex' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorInvalidNonceIndexPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'InvalidNonceIndex',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'InvalidNonceIndex',
    'tag' => 'InvalidNonceIndex',
    'payload' => 'InvalidTxErrorInvalidNonceIndexPayload',
  ),
), 'InvalidTxErrorInvalidNonceIndex');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
