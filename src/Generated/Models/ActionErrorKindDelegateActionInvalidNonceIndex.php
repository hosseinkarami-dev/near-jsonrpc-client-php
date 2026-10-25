<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * DelegateAction nonce index is outside the gas key's nonce range
 */
final readonly class ActionErrorKindDelegateActionInvalidNonceIndex implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionInvalidNonceIndexPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionInvalidNonceIndexPayload $delegateActionInvalidNonceIndex
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->delegateActionInvalidNonceIndex, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDelegateActionInvalidNonceIndexPayload',
  'nullable' => false,
), 'DelegateActionInvalidNonceIndex');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionErrorKindDelegateActionInvalidNonceIndex.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('DelegateActionInvalidNonceIndex', $data)) throw new \InvalidArgumentException('Missing required field: DelegateActionInvalidNonceIndex');
        $unknown = array_diff_key($data, array (
  'DelegateActionInvalidNonceIndex' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionErrorKindDelegateActionInvalidNonceIndex.');
        return new self(
            delegateActionInvalidNonceIndex: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['DelegateActionInvalidNonceIndex'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDelegateActionInvalidNonceIndexPayload',
  'nullable' => false,
), 'DelegateActionInvalidNonceIndex')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['DelegateActionInvalidNonceIndex'] = $this->delegateActionInvalidNonceIndex;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'DelegateActionInvalidNonceIndex' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDelegateActionInvalidNonceIndexPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'DelegateActionInvalidNonceIndex',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'DelegateActionInvalidNonceIndex',
    'tag' => 'DelegateActionInvalidNonceIndex',
    'payload' => 'ActionErrorKindDelegateActionInvalidNonceIndexPayload',
  ),
), 'ActionErrorKindDelegateActionInvalidNonceIndex'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'DelegateActionInvalidNonceIndex' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDelegateActionInvalidNonceIndexPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'DelegateActionInvalidNonceIndex',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'DelegateActionInvalidNonceIndex',
    'tag' => 'DelegateActionInvalidNonceIndex',
    'payload' => 'ActionErrorKindDelegateActionInvalidNonceIndexPayload',
  ),
), 'ActionErrorKindDelegateActionInvalidNonceIndex');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
