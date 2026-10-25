<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Nonce with index, used by gas keys
 */
final readonly class TransactionNonceGasKeyNonce implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\TransactionNonceGasKeyNoncePayload
         */
        public \Near\JsonRpc\Generated\Models\TransactionNonceGasKeyNoncePayload $gasKeyNonce
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->gasKeyNonce, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TransactionNonceGasKeyNoncePayload',
  'nullable' => false,
), 'GasKeyNonce');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for TransactionNonceGasKeyNonce.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('GasKeyNonce', $data)) throw new \InvalidArgumentException('Missing required field: GasKeyNonce');
        $unknown = array_diff_key($data, array (
  'GasKeyNonce' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in TransactionNonceGasKeyNonce.');
        return new self(
            gasKeyNonce: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['GasKeyNonce'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TransactionNonceGasKeyNoncePayload',
  'nullable' => false,
), 'GasKeyNonce')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['GasKeyNonce'] = $this->gasKeyNonce;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'GasKeyNonce' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TransactionNonceGasKeyNoncePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'GasKeyNonce',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'GasKeyNonce',
    'tag' => 'GasKeyNonce',
    'payload' => 'TransactionNonceGasKeyNoncePayload',
  ),
), 'TransactionNonceGasKeyNonce'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'GasKeyNonce' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TransactionNonceGasKeyNoncePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'GasKeyNonce',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'GasKeyNonce',
    'tag' => 'GasKeyNonce',
    'payload' => 'TransactionNonceGasKeyNoncePayload',
  ),
), 'TransactionNonceGasKeyNonce');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
