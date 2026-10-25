<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * DelegateAction nonce is larger than the upper bound given by the block height
 */
final readonly class ActionErrorKindDelegateActionNonceTooLarge implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionNonceTooLargePayload
         */
        public \Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionNonceTooLargePayload $delegateActionNonceTooLarge
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->delegateActionNonceTooLarge, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDelegateActionNonceTooLargePayload',
  'nullable' => false,
), 'DelegateActionNonceTooLarge');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionErrorKindDelegateActionNonceTooLarge.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('DelegateActionNonceTooLarge', $data)) throw new \InvalidArgumentException('Missing required field: DelegateActionNonceTooLarge');
        $unknown = array_diff_key($data, array (
  'DelegateActionNonceTooLarge' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionErrorKindDelegateActionNonceTooLarge.');
        return new self(
            delegateActionNonceTooLarge: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['DelegateActionNonceTooLarge'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDelegateActionNonceTooLargePayload',
  'nullable' => false,
), 'DelegateActionNonceTooLarge')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['DelegateActionNonceTooLarge'] = $this->delegateActionNonceTooLarge;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'DelegateActionNonceTooLarge' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDelegateActionNonceTooLargePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'DelegateActionNonceTooLarge',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'DelegateActionNonceTooLarge',
    'tag' => 'DelegateActionNonceTooLarge',
    'payload' => 'ActionErrorKindDelegateActionNonceTooLargePayload',
  ),
), 'ActionErrorKindDelegateActionNonceTooLarge'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'DelegateActionNonceTooLarge' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDelegateActionNonceTooLargePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'DelegateActionNonceTooLarge',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'DelegateActionNonceTooLarge',
    'tag' => 'DelegateActionNonceTooLarge',
    'payload' => 'ActionErrorKindDelegateActionNonceTooLargePayload',
  ),
), 'ActionErrorKindDelegateActionNonceTooLarge');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
