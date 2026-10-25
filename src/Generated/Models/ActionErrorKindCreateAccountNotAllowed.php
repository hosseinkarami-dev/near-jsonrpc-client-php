<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * A newly created account must be under a namespace of the creator account
 */
final readonly class ActionErrorKindCreateAccountNotAllowed implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionErrorKindCreateAccountNotAllowedPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionErrorKindCreateAccountNotAllowedPayload $createAccountNotAllowed
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->createAccountNotAllowed, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindCreateAccountNotAllowedPayload',
  'nullable' => false,
), 'CreateAccountNotAllowed');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionErrorKindCreateAccountNotAllowed.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('CreateAccountNotAllowed', $data)) throw new \InvalidArgumentException('Missing required field: CreateAccountNotAllowed');
        $unknown = array_diff_key($data, array (
  'CreateAccountNotAllowed' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionErrorKindCreateAccountNotAllowed.');
        return new self(
            createAccountNotAllowed: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['CreateAccountNotAllowed'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindCreateAccountNotAllowedPayload',
  'nullable' => false,
), 'CreateAccountNotAllowed')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['CreateAccountNotAllowed'] = $this->createAccountNotAllowed;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'CreateAccountNotAllowed' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindCreateAccountNotAllowedPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'CreateAccountNotAllowed',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'CreateAccountNotAllowed',
    'tag' => 'CreateAccountNotAllowed',
    'payload' => 'ActionErrorKindCreateAccountNotAllowedPayload',
  ),
), 'ActionErrorKindCreateAccountNotAllowed'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'CreateAccountNotAllowed' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindCreateAccountNotAllowedPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'CreateAccountNotAllowed',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'CreateAccountNotAllowed',
    'tag' => 'CreateAccountNotAllowed',
    'payload' => 'ActionErrorKindCreateAccountNotAllowedPayload',
  ),
), 'ActionErrorKindCreateAccountNotAllowed');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
