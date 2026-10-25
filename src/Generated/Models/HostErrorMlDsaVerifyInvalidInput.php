<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Input length mismatch for ML-DSA-65 signature verification (signature is
 * not 3309 bytes or public key is not 1952 bytes). Parse failures of
 * otherwise well-sized inputs return 0 from the host function instead of
 * aborting.
 */
final readonly class HostErrorMlDsaVerifyInvalidInput implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\HostErrorMlDsaVerifyInvalidInputPayload
         */
        public \Near\JsonRpc\Generated\Models\HostErrorMlDsaVerifyInvalidInputPayload $mlDsaVerifyInvalidInput
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->mlDsaVerifyInvalidInput, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorMlDsaVerifyInvalidInputPayload',
  'nullable' => false,
), 'MlDsaVerifyInvalidInput');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for HostErrorMlDsaVerifyInvalidInput.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('MlDsaVerifyInvalidInput', $data)) throw new \InvalidArgumentException('Missing required field: MlDsaVerifyInvalidInput');
        $unknown = array_diff_key($data, array (
  'MlDsaVerifyInvalidInput' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in HostErrorMlDsaVerifyInvalidInput.');
        return new self(
            mlDsaVerifyInvalidInput: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['MlDsaVerifyInvalidInput'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorMlDsaVerifyInvalidInputPayload',
  'nullable' => false,
), 'MlDsaVerifyInvalidInput')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['MlDsaVerifyInvalidInput'] = $this->mlDsaVerifyInvalidInput;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'MlDsaVerifyInvalidInput' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorMlDsaVerifyInvalidInputPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'MlDsaVerifyInvalidInput',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'MlDsaVerifyInvalidInput',
    'tag' => 'MlDsaVerifyInvalidInput',
    'payload' => 'HostErrorMlDsaVerifyInvalidInputPayload',
  ),
), 'HostErrorMlDsaVerifyInvalidInput'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'MlDsaVerifyInvalidInput' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorMlDsaVerifyInvalidInputPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'MlDsaVerifyInvalidInput',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'MlDsaVerifyInvalidInput',
    'tag' => 'MlDsaVerifyInvalidInput',
    'payload' => 'HostErrorMlDsaVerifyInvalidInputPayload',
  ),
), 'HostErrorMlDsaVerifyInvalidInput');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
