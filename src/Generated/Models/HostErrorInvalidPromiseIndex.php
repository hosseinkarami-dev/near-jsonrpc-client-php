<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * `promise_idx` does not correspond to existing promises
 */
final readonly class HostErrorInvalidPromiseIndex implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\HostErrorInvalidPromiseIndexPayload
         */
        public \Near\JsonRpc\Generated\Models\HostErrorInvalidPromiseIndexPayload $invalidPromiseIndex
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->invalidPromiseIndex, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorInvalidPromiseIndexPayload',
  'nullable' => false,
), 'InvalidPromiseIndex');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for HostErrorInvalidPromiseIndex.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('InvalidPromiseIndex', $data)) throw new \InvalidArgumentException('Missing required field: InvalidPromiseIndex');
        $unknown = array_diff_key($data, array (
  'InvalidPromiseIndex' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in HostErrorInvalidPromiseIndex.');
        return new self(
            invalidPromiseIndex: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['InvalidPromiseIndex'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorInvalidPromiseIndexPayload',
  'nullable' => false,
), 'InvalidPromiseIndex')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['InvalidPromiseIndex'] = $this->invalidPromiseIndex;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'InvalidPromiseIndex' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorInvalidPromiseIndexPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'InvalidPromiseIndex',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'InvalidPromiseIndex',
    'tag' => 'InvalidPromiseIndex',
    'payload' => 'HostErrorInvalidPromiseIndexPayload',
  ),
), 'HostErrorInvalidPromiseIndex'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'InvalidPromiseIndex' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorInvalidPromiseIndexPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'InvalidPromiseIndex',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'InvalidPromiseIndex',
    'tag' => 'InvalidPromiseIndex',
    'payload' => 'HostErrorInvalidPromiseIndexPayload',
  ),
), 'HostErrorInvalidPromiseIndex');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
