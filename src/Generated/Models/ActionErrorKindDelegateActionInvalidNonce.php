<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * DelegateAction nonce must be greater sender[public_key].nonce
 */
final readonly class ActionErrorKindDelegateActionInvalidNonce implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionInvalidNoncePayload
         */
        public \Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionInvalidNoncePayload $delegateActionInvalidNonce
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->delegateActionInvalidNonce, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDelegateActionInvalidNoncePayload',
  'nullable' => false,
), 'DelegateActionInvalidNonce');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionErrorKindDelegateActionInvalidNonce.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('DelegateActionInvalidNonce', $data)) throw new \InvalidArgumentException('Missing required field: DelegateActionInvalidNonce');
        $unknown = array_diff_key($data, array (
  'DelegateActionInvalidNonce' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionErrorKindDelegateActionInvalidNonce.');
        return new self(
            delegateActionInvalidNonce: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['DelegateActionInvalidNonce'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDelegateActionInvalidNoncePayload',
  'nullable' => false,
), 'DelegateActionInvalidNonce')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['DelegateActionInvalidNonce'] = $this->delegateActionInvalidNonce;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'DelegateActionInvalidNonce' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDelegateActionInvalidNoncePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'DelegateActionInvalidNonce',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'DelegateActionInvalidNonce',
    'tag' => 'DelegateActionInvalidNonce',
    'payload' => 'ActionErrorKindDelegateActionInvalidNoncePayload',
  ),
), 'ActionErrorKindDelegateActionInvalidNonce'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'DelegateActionInvalidNonce' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDelegateActionInvalidNoncePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'DelegateActionInvalidNonce',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'DelegateActionInvalidNonce',
    'tag' => 'DelegateActionInvalidNonce',
    'payload' => 'ActionErrorKindDelegateActionInvalidNoncePayload',
  ),
), 'ActionErrorKindDelegateActionInvalidNonce');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
