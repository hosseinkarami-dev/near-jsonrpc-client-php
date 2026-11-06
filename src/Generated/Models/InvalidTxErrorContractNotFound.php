<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The target of an external contract call has no contract, or no account.
 */
final readonly class InvalidTxErrorContractNotFound implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\InvalidTxErrorContractNotFoundPayload
         */
        public \Near\JsonRpc\Generated\Models\InvalidTxErrorContractNotFoundPayload $contractNotFound
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->contractNotFound, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorContractNotFoundPayload',
  'nullable' => false,
), 'ContractNotFound');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for InvalidTxErrorContractNotFound.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('ContractNotFound', $data)) throw new \InvalidArgumentException('Missing required field: ContractNotFound');
        $unknown = array_diff_key($data, array (
  'ContractNotFound' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in InvalidTxErrorContractNotFound.');
        return new self(
            contractNotFound: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['ContractNotFound'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorContractNotFoundPayload',
  'nullable' => false,
), 'ContractNotFound')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['ContractNotFound'] = $this->contractNotFound;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'ContractNotFound' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorContractNotFoundPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'ContractNotFound',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'ContractNotFound',
    'tag' => 'ContractNotFound',
    'payload' => 'InvalidTxErrorContractNotFoundPayload',
  ),
), 'InvalidTxErrorContractNotFound'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'ContractNotFound' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorContractNotFoundPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'ContractNotFound',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'ContractNotFound',
    'tag' => 'ContractNotFound',
    'payload' => 'InvalidTxErrorContractNotFoundPayload',
  ),
), 'InvalidTxErrorContractNotFound');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
