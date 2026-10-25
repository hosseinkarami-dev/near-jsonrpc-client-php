<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class ReceiptEnumViewData implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ReceiptEnumViewDataPayload
         */
        public \Near\JsonRpc\Generated\Models\ReceiptEnumViewDataPayload $data
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->data, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptEnumViewDataPayload',
  'nullable' => false,
), 'Data');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ReceiptEnumViewData.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('Data', $data)) throw new \InvalidArgumentException('Missing required field: Data');
        $unknown = array_diff_key($data, array (
  'Data' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ReceiptEnumViewData.');
        return new self(
            data: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['Data'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptEnumViewDataPayload',
  'nullable' => false,
), 'Data')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['Data'] = $this->data;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'Data' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptEnumViewDataPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'Data',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'Data',
    'tag' => 'Data',
    'payload' => 'ReceiptEnumViewDataPayload',
  ),
), 'ReceiptEnumViewData'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'Data' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptEnumViewDataPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'Data',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'Data',
    'tag' => 'Data',
    'payload' => 'ReceiptEnumViewDataPayload',
  ),
), 'ReceiptEnumViewData');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
