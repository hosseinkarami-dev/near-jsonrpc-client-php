<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * VM Logic returned an invalid receipt index
 */
final readonly class HostErrorInvalidReceiptIndex implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\HostErrorInvalidReceiptIndexPayload
         */
        public \Near\JsonRpc\Generated\Models\HostErrorInvalidReceiptIndexPayload $invalidReceiptIndex
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->invalidReceiptIndex, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorInvalidReceiptIndexPayload',
  'nullable' => false,
), 'InvalidReceiptIndex');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for HostErrorInvalidReceiptIndex.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('InvalidReceiptIndex', $data)) throw new \InvalidArgumentException('Missing required field: InvalidReceiptIndex');
        $unknown = array_diff_key($data, array (
  'InvalidReceiptIndex' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in HostErrorInvalidReceiptIndex.');
        return new self(
            invalidReceiptIndex: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['InvalidReceiptIndex'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorInvalidReceiptIndexPayload',
  'nullable' => false,
), 'InvalidReceiptIndex')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['InvalidReceiptIndex'] = $this->invalidReceiptIndex;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'InvalidReceiptIndex' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorInvalidReceiptIndexPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'InvalidReceiptIndex',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'InvalidReceiptIndex',
    'tag' => 'InvalidReceiptIndex',
    'payload' => 'HostErrorInvalidReceiptIndexPayload',
  ),
), 'HostErrorInvalidReceiptIndex'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'InvalidReceiptIndex' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorInvalidReceiptIndexPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'InvalidReceiptIndex',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'InvalidReceiptIndex',
    'tag' => 'InvalidReceiptIndex',
    'payload' => 'HostErrorInvalidReceiptIndexPayload',
  ),
), 'HostErrorInvalidReceiptIndex');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
