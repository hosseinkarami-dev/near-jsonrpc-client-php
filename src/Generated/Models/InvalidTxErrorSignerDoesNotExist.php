<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * TX signer_id is not found in a storage
 */
final readonly class InvalidTxErrorSignerDoesNotExist implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\InvalidTxErrorSignerDoesNotExistPayload
         */
        public \Near\JsonRpc\Generated\Models\InvalidTxErrorSignerDoesNotExistPayload $signerDoesNotExist
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->signerDoesNotExist, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorSignerDoesNotExistPayload',
  'nullable' => false,
), 'SignerDoesNotExist');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for InvalidTxErrorSignerDoesNotExist.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('SignerDoesNotExist', $data)) throw new \InvalidArgumentException('Missing required field: SignerDoesNotExist');
        $unknown = array_diff_key($data, array (
  'SignerDoesNotExist' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in InvalidTxErrorSignerDoesNotExist.');
        return new self(
            signerDoesNotExist: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['SignerDoesNotExist'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorSignerDoesNotExistPayload',
  'nullable' => false,
), 'SignerDoesNotExist')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['SignerDoesNotExist'] = $this->signerDoesNotExist;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'SignerDoesNotExist' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorSignerDoesNotExistPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'SignerDoesNotExist',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'SignerDoesNotExist',
    'tag' => 'SignerDoesNotExist',
    'payload' => 'InvalidTxErrorSignerDoesNotExistPayload',
  ),
), 'InvalidTxErrorSignerDoesNotExist'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'SignerDoesNotExist' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxErrorSignerDoesNotExistPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'SignerDoesNotExist',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'SignerDoesNotExist',
    'tag' => 'SignerDoesNotExist',
    'payload' => 'InvalidTxErrorSignerDoesNotExistPayload',
  ),
), 'InvalidTxErrorSignerDoesNotExist');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
