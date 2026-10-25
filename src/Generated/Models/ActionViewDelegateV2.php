<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class ActionViewDelegateV2 implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionViewDelegateV2Payload
         */
        public \Near\JsonRpc\Generated\Models\ActionViewDelegateV2Payload $delegateV2
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->delegateV2, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewDelegateV2Payload',
  'nullable' => false,
), 'DelegateV2');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionViewDelegateV2.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('DelegateV2', $data)) throw new \InvalidArgumentException('Missing required field: DelegateV2');
        $unknown = array_diff_key($data, array (
  'DelegateV2' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionViewDelegateV2.');
        return new self(
            delegateV2: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['DelegateV2'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewDelegateV2Payload',
  'nullable' => false,
), 'DelegateV2')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['DelegateV2'] = $this->delegateV2;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'DelegateV2' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewDelegateV2Payload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'DelegateV2',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'DelegateV2',
    'tag' => 'DelegateV2',
    'payload' => 'ActionViewDelegateV2Payload',
  ),
), 'ActionViewDelegateV2'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'DelegateV2' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewDelegateV2Payload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'DelegateV2',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'DelegateV2',
    'tag' => 'DelegateV2',
    'payload' => 'ActionViewDelegateV2Payload',
  ),
), 'ActionViewDelegateV2');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
