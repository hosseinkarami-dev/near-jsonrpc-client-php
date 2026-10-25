<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The size of serialized transaction exceeded the limit.
 */
final readonly class InvalidTxErrorTransactionSizeExceeded implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\InvalidTxErrorTransactionSizeExceededPayload
         */
        public \Near\JsonRpc\Generated\Models\InvalidTxErrorTransactionSizeExceededPayload $transactionSizeExceeded
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->transactionSizeExceeded, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorTransactionSizeExceededPayload',
  'nullable' => false,
), 'TransactionSizeExceeded');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for InvalidTxErrorTransactionSizeExceeded.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('TransactionSizeExceeded', $data)) throw new \InvalidArgumentException('Missing required field: TransactionSizeExceeded');
        $unknown = array_diff_key($data, array (
  'TransactionSizeExceeded' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in InvalidTxErrorTransactionSizeExceeded.');
        return new self(
            transactionSizeExceeded: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['TransactionSizeExceeded'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorTransactionSizeExceededPayload',
  'nullable' => false,
), 'TransactionSizeExceeded')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['TransactionSizeExceeded'] = $this->transactionSizeExceeded;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'TransactionSizeExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorTransactionSizeExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'TransactionSizeExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'TransactionSizeExceeded',
    'tag' => 'TransactionSizeExceeded',
    'payload' => 'InvalidTxErrorTransactionSizeExceededPayload',
  ),
), 'InvalidTxErrorTransactionSizeExceeded'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'TransactionSizeExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorTransactionSizeExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'TransactionSizeExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'TransactionSizeExceeded',
    'tag' => 'TransactionSizeExceeded',
    'payload' => 'InvalidTxErrorTransactionSizeExceededPayload',
  ),
), 'InvalidTxErrorTransactionSizeExceeded');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
