<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class ReceiptEnumViewAction implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ReceiptEnumViewActionPayload
         */
        public \Near\JsonRpc\Generated\Models\ReceiptEnumViewActionPayload $action
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->action, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptEnumViewActionPayload',
  'nullable' => false,
), 'Action');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ReceiptEnumViewAction.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('Action', $data)) throw new \InvalidArgumentException('Missing required field: Action');
        $unknown = array_diff_key($data, array (
  'Action' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ReceiptEnumViewAction.');
        return new self(
            action: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['Action'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptEnumViewActionPayload',
  'nullable' => false,
), 'Action')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['Action'] = $this->action;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'Action' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptEnumViewActionPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'Action',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'Action',
    'tag' => 'Action',
    'payload' => 'ReceiptEnumViewActionPayload',
  ),
), 'ReceiptEnumViewAction'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'Action' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptEnumViewActionPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'Action',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'Action',
    'tag' => 'Action',
    'payload' => 'ReceiptEnumViewActionPayload',
  ),
), 'ReceiptEnumViewAction');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
