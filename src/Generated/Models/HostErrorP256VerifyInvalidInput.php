<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Input length mismatch for p256 signature verification (signature is not 64
 * bytes or public key is not 33 bytes). Parse failures of otherwise
 * well-sized inputs return 0 from the host function instead of aborting.
 */
final readonly class HostErrorP256VerifyInvalidInput implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\HostErrorP256VerifyInvalidInputPayload
         */
        public \Near\JsonRpc\Generated\Models\HostErrorP256VerifyInvalidInputPayload $p256VerifyInvalidInput
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->p256VerifyInvalidInput, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorP256VerifyInvalidInputPayload',
  'nullable' => false,
), 'P256VerifyInvalidInput');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for HostErrorP256VerifyInvalidInput.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('P256VerifyInvalidInput', $data)) throw new \InvalidArgumentException('Missing required field: P256VerifyInvalidInput');
        $unknown = array_diff_key($data, array (
  'P256VerifyInvalidInput' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in HostErrorP256VerifyInvalidInput.');
        return new self(
            p256VerifyInvalidInput: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['P256VerifyInvalidInput'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorP256VerifyInvalidInputPayload',
  'nullable' => false,
), 'P256VerifyInvalidInput')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['P256VerifyInvalidInput'] = $this->p256VerifyInvalidInput;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'P256VerifyInvalidInput' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorP256VerifyInvalidInputPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'P256VerifyInvalidInput',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'P256VerifyInvalidInput',
    'tag' => 'P256VerifyInvalidInput',
    'payload' => 'HostErrorP256VerifyInvalidInputPayload',
  ),
), 'HostErrorP256VerifyInvalidInput'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'P256VerifyInvalidInput' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorP256VerifyInvalidInputPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'P256VerifyInvalidInput',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'P256VerifyInvalidInput',
    'tag' => 'P256VerifyInvalidInput',
    'payload' => 'HostErrorP256VerifyInvalidInputPayload',
  ),
), 'HostErrorP256VerifyInvalidInput');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
