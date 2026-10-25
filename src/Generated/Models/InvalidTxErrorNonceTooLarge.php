<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Transaction nonce is larger than the upper bound given by the block height
 */
final readonly class InvalidTxErrorNonceTooLarge implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\InvalidTxErrorNonceTooLargePayload
         */
        public \Near\JsonRpc\Generated\Models\InvalidTxErrorNonceTooLargePayload $nonceTooLarge
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->nonceTooLarge, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorNonceTooLargePayload',
  'nullable' => false,
), 'NonceTooLarge');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for InvalidTxErrorNonceTooLarge.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('NonceTooLarge', $data)) throw new \InvalidArgumentException('Missing required field: NonceTooLarge');
        $unknown = array_diff_key($data, array (
  'NonceTooLarge' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in InvalidTxErrorNonceTooLarge.');
        return new self(
            nonceTooLarge: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['NonceTooLarge'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorNonceTooLargePayload',
  'nullable' => false,
), 'NonceTooLarge')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['NonceTooLarge'] = $this->nonceTooLarge;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'NonceTooLarge' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorNonceTooLargePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'NonceTooLarge',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'NonceTooLarge',
    'tag' => 'NonceTooLarge',
    'payload' => 'InvalidTxErrorNonceTooLargePayload',
  ),
), 'InvalidTxErrorNonceTooLarge'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'NonceTooLarge' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorNonceTooLargePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'NonceTooLarge',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'NonceTooLarge',
    'tag' => 'NonceTooLarge',
    'payload' => 'InvalidTxErrorNonceTooLargePayload',
  ),
), 'InvalidTxErrorNonceTooLarge');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
