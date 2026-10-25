<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class NonDelegateActionDeleteKey implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\DeleteKeyAction
         */
        public \Near\JsonRpc\Generated\Models\DeleteKeyAction $deleteKey
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->deleteKey, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DeleteKeyAction',
  'nullable' => false,
), 'DeleteKey');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for NonDelegateActionDeleteKey.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('DeleteKey', $data)) throw new \InvalidArgumentException('Missing required field: DeleteKey');
        $unknown = array_diff_key($data, array (
  'DeleteKey' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in NonDelegateActionDeleteKey.');
        return new self(
            deleteKey: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['DeleteKey'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DeleteKeyAction',
  'nullable' => false,
), 'DeleteKey')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['DeleteKey'] = $this->deleteKey;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'DeleteKey' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DeleteKeyAction',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'DeleteKey',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'DeleteKey',
    'tag' => 'DeleteKey',
    'payload' => 'DeleteKeyAction',
  ),
), 'NonDelegateActionDeleteKey'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'DeleteKey' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DeleteKeyAction',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'DeleteKey',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'DeleteKey',
    'tag' => 'DeleteKey',
    'payload' => 'DeleteKeyAction',
  ),
), 'NonDelegateActionDeleteKey');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
