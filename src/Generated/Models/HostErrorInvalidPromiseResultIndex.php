<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Accessed invalid promise result index
 */
final readonly class HostErrorInvalidPromiseResultIndex implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\HostErrorInvalidPromiseResultIndexPayload
         */
        public \Near\JsonRpc\Generated\Models\HostErrorInvalidPromiseResultIndexPayload $invalidPromiseResultIndex
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->invalidPromiseResultIndex, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorInvalidPromiseResultIndexPayload',
  'nullable' => false,
), 'InvalidPromiseResultIndex');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for HostErrorInvalidPromiseResultIndex.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('InvalidPromiseResultIndex', $data)) throw new \InvalidArgumentException('Missing required field: InvalidPromiseResultIndex');
        $unknown = array_diff_key($data, array (
  'InvalidPromiseResultIndex' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in HostErrorInvalidPromiseResultIndex.');
        return new self(
            invalidPromiseResultIndex: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['InvalidPromiseResultIndex'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorInvalidPromiseResultIndexPayload',
  'nullable' => false,
), 'InvalidPromiseResultIndex')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['InvalidPromiseResultIndex'] = $this->invalidPromiseResultIndex;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'InvalidPromiseResultIndex' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorInvalidPromiseResultIndexPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'InvalidPromiseResultIndex',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'InvalidPromiseResultIndex',
    'tag' => 'InvalidPromiseResultIndex',
    'payload' => 'HostErrorInvalidPromiseResultIndexPayload',
  ),
), 'HostErrorInvalidPromiseResultIndex'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'InvalidPromiseResultIndex' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorInvalidPromiseResultIndexPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'InvalidPromiseResultIndex',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'InvalidPromiseResultIndex',
    'tag' => 'InvalidPromiseResultIndex',
    'payload' => 'HostErrorInvalidPromiseResultIndexPayload',
  ),
), 'HostErrorInvalidPromiseResultIndex');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
