<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * General errors for ECDSA recover.
 */
final readonly class HostErrorEcRecoverError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\HostErrorEcRecoverErrorPayload
         */
        public \Near\JsonRpc\Generated\Models\HostErrorEcRecoverErrorPayload $ecRecoverError
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->ecRecoverError, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorEcRecoverErrorPayload',
  'nullable' => false,
), 'ECRecoverError');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for HostErrorEcRecoverError.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('ECRecoverError', $data)) throw new \InvalidArgumentException('Missing required field: ECRecoverError');
        $unknown = array_diff_key($data, array (
  'ECRecoverError' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in HostErrorEcRecoverError.');
        return new self(
            ecRecoverError: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['ECRecoverError'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorEcRecoverErrorPayload',
  'nullable' => false,
), 'ECRecoverError')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['ECRecoverError'] = $this->ecRecoverError;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'ECRecoverError' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorEcRecoverErrorPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'ECRecoverError',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'ECRecoverError',
    'tag' => 'ECRecoverError',
    'payload' => 'HostErrorEcRecoverErrorPayload',
  ),
), 'HostErrorEcRecoverError'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'ECRecoverError' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorEcRecoverErrorPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'ECRecoverError',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'ECRecoverError',
    'tag' => 'ECRecoverError',
    'payload' => 'HostErrorEcRecoverErrorPayload',
  ),
), 'HostErrorEcRecoverError');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
