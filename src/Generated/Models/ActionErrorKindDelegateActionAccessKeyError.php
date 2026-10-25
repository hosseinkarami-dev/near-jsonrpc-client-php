<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The given public key doesn't exist for Sender account
 */
final readonly class ActionErrorKindDelegateActionAccessKeyError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\InvalidAccessKeyError
         */
        public \Near\JsonRpc\Generated\Models\InvalidAccessKeyError $delegateActionAccessKeyError
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->delegateActionAccessKeyError, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidAccessKeyError',
  'nullable' => false,
), 'DelegateActionAccessKeyError');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionErrorKindDelegateActionAccessKeyError.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('DelegateActionAccessKeyError', $data)) throw new \InvalidArgumentException('Missing required field: DelegateActionAccessKeyError');
        $unknown = array_diff_key($data, array (
  'DelegateActionAccessKeyError' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionErrorKindDelegateActionAccessKeyError.');
        return new self(
            delegateActionAccessKeyError: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['DelegateActionAccessKeyError'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidAccessKeyError',
  'nullable' => false,
), 'DelegateActionAccessKeyError')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['DelegateActionAccessKeyError'] = $this->delegateActionAccessKeyError;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'DelegateActionAccessKeyError' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidAccessKeyError',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'DelegateActionAccessKeyError',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'DelegateActionAccessKeyError',
    'tag' => 'DelegateActionAccessKeyError',
    'payload' => 'InvalidAccessKeyError',
  ),
), 'ActionErrorKindDelegateActionAccessKeyError'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'DelegateActionAccessKeyError' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidAccessKeyError',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'DelegateActionAccessKeyError',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'DelegateActionAccessKeyError',
    'tag' => 'DelegateActionAccessKeyError',
    'payload' => 'InvalidAccessKeyError',
  ),
), 'ActionErrorKindDelegateActionAccessKeyError');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
