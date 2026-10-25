<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The action needs a set-up account, but the receiver is an uninitialized
 * universal account. Distinct from `AccountDoesNotExist`: the account is
 * there, it just has no access keys, code or data yet.
 */
final readonly class ActionErrorKindAccountNotInitialized implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionErrorKindAccountNotInitializedPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionErrorKindAccountNotInitializedPayload $accountNotInitialized
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->accountNotInitialized, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindAccountNotInitializedPayload',
  'nullable' => false,
), 'AccountNotInitialized');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionErrorKindAccountNotInitialized.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('AccountNotInitialized', $data)) throw new \InvalidArgumentException('Missing required field: AccountNotInitialized');
        $unknown = array_diff_key($data, array (
  'AccountNotInitialized' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionErrorKindAccountNotInitialized.');
        return new self(
            accountNotInitialized: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['AccountNotInitialized'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindAccountNotInitializedPayload',
  'nullable' => false,
), 'AccountNotInitialized')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['AccountNotInitialized'] = $this->accountNotInitialized;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'AccountNotInitialized' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindAccountNotInitializedPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'AccountNotInitialized',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'AccountNotInitialized',
    'tag' => 'AccountNotInitialized',
    'payload' => 'ActionErrorKindAccountNotInitializedPayload',
  ),
), 'ActionErrorKindAccountNotInitialized'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'AccountNotInitialized' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindAccountNotInitializedPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'AccountNotInitialized',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'AccountNotInitialized',
    'tag' => 'AccountNotInitialized',
    'payload' => 'ActionErrorKindAccountNotInitializedPayload',
  ),
), 'ActionErrorKindAccountNotInitialized');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
