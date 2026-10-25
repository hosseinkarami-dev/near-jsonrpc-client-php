<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Accessed invalid register id
 */
final readonly class HostErrorInvalidRegisterId implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\HostErrorInvalidRegisterIdPayload
         */
        public \Near\JsonRpc\Generated\Models\HostErrorInvalidRegisterIdPayload $invalidRegisterId
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->invalidRegisterId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorInvalidRegisterIdPayload',
  'nullable' => false,
), 'InvalidRegisterId');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for HostErrorInvalidRegisterId.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('InvalidRegisterId', $data)) throw new \InvalidArgumentException('Missing required field: InvalidRegisterId');
        $unknown = array_diff_key($data, array (
  'InvalidRegisterId' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in HostErrorInvalidRegisterId.');
        return new self(
            invalidRegisterId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['InvalidRegisterId'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorInvalidRegisterIdPayload',
  'nullable' => false,
), 'InvalidRegisterId')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['InvalidRegisterId'] = $this->invalidRegisterId;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'InvalidRegisterId' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorInvalidRegisterIdPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'InvalidRegisterId',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'InvalidRegisterId',
    'tag' => 'InvalidRegisterId',
    'payload' => 'HostErrorInvalidRegisterIdPayload',
  ),
), 'HostErrorInvalidRegisterId'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'InvalidRegisterId' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorInvalidRegisterIdPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'InvalidRegisterId',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'InvalidRegisterId',
    'tag' => 'InvalidRegisterId',
    'payload' => 'HostErrorInvalidRegisterIdPayload',
  ),
), 'HostErrorInvalidRegisterId');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
