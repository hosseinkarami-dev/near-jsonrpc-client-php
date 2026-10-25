<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class NonDelegateActionAddKey implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\AddKeyAction
         */
        public \Near\JsonRpc\Generated\Models\AddKeyAction $addKey
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->addKey, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AddKeyAction',
  'nullable' => false,
), 'AddKey');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for NonDelegateActionAddKey.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('AddKey', $data)) throw new \InvalidArgumentException('Missing required field: AddKey');
        $unknown = array_diff_key($data, array (
  'AddKey' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in NonDelegateActionAddKey.');
        return new self(
            addKey: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['AddKey'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AddKeyAction',
  'nullable' => false,
), 'AddKey')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['AddKey'] = $this->addKey;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'AddKey' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AddKeyAction',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'AddKey',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'AddKey',
    'tag' => 'AddKey',
    'payload' => 'AddKeyAction',
  ),
), 'NonDelegateActionAddKey'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'AddKey' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AddKeyAction',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'AddKey',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'AddKey',
    'tag' => 'AddKey',
    'payload' => 'AddKeyAction',
  ),
), 'NonDelegateActionAddKey');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
