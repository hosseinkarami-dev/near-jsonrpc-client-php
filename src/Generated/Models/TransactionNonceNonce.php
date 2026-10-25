<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Simple nonce without index, used by ordinary access keys
 */
final readonly class TransactionNonceNonce implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\TransactionNonceNoncePayload
         */
        public \Near\JsonRpc\Generated\Models\TransactionNonceNoncePayload $nonce
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->nonce, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TransactionNonceNoncePayload',
  'nullable' => false,
), 'Nonce');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for TransactionNonceNonce.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('Nonce', $data)) throw new \InvalidArgumentException('Missing required field: Nonce');
        $unknown = array_diff_key($data, array (
  'Nonce' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in TransactionNonceNonce.');
        return new self(
            nonce: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['Nonce'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TransactionNonceNoncePayload',
  'nullable' => false,
), 'Nonce')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['Nonce'] = $this->nonce;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'Nonce' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TransactionNonceNoncePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'Nonce',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'Nonce',
    'tag' => 'Nonce',
    'payload' => 'TransactionNonceNoncePayload',
  ),
), 'TransactionNonceNonce'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'Nonce' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TransactionNonceNoncePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'Nonce',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'Nonce',
    'tag' => 'Nonce',
    'payload' => 'TransactionNonceNoncePayload',
  ),
), 'TransactionNonceNonce');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
