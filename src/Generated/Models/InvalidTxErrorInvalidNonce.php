<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Transaction nonce must be strictly greater than `account[access_key].nonce`.
 */
final readonly class InvalidTxErrorInvalidNonce implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidNoncePayload
         */
        public \Near\JsonRpc\Generated\Models\InvalidTxErrorInvalidNoncePayload $invalidNonce
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->invalidNonce, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorInvalidNoncePayload',
  'nullable' => false,
), 'InvalidNonce');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for InvalidTxErrorInvalidNonce.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('InvalidNonce', $data)) throw new \InvalidArgumentException('Missing required field: InvalidNonce');
        $unknown = array_diff_key($data, array (
  'InvalidNonce' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in InvalidTxErrorInvalidNonce.');
        return new self(
            invalidNonce: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['InvalidNonce'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorInvalidNoncePayload',
  'nullable' => false,
), 'InvalidNonce')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['InvalidNonce'] = $this->invalidNonce;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'InvalidNonce' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorInvalidNoncePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'InvalidNonce',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'InvalidNonce',
    'tag' => 'InvalidNonce',
    'payload' => 'InvalidTxErrorInvalidNoncePayload',
  ),
), 'InvalidTxErrorInvalidNonce'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'InvalidNonce' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorInvalidNoncePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'InvalidNonce',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'InvalidNonce',
    'tag' => 'InvalidNonce',
    'payload' => 'InvalidTxErrorInvalidNoncePayload',
  ),
), 'InvalidTxErrorInvalidNonce');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
