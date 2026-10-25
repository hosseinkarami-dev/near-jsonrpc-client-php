<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Create an (sub)account using a transaction `receiver_id` as an ID for
 * a new account ID must pass validation rules described here
 * <https://nomicon.io/DataStructures/Account>.
 */
final readonly class NonDelegateActionCreateAccount implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\CreateAccountAction
         */
        public \Near\JsonRpc\Generated\Models\CreateAccountAction $createAccount
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->createAccount, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CreateAccountAction',
  'nullable' => false,
), 'CreateAccount');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for NonDelegateActionCreateAccount.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('CreateAccount', $data)) throw new \InvalidArgumentException('Missing required field: CreateAccount');
        $unknown = array_diff_key($data, array (
  'CreateAccount' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in NonDelegateActionCreateAccount.');
        return new self(
            createAccount: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['CreateAccount'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CreateAccountAction',
  'nullable' => false,
), 'CreateAccount')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['CreateAccount'] = $this->createAccount;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'CreateAccount' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CreateAccountAction',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'CreateAccount',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'CreateAccount',
    'tag' => 'CreateAccount',
    'payload' => 'CreateAccountAction',
  ),
), 'NonDelegateActionCreateAccount'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'CreateAccount' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CreateAccountAction',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'CreateAccount',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'CreateAccount',
    'tag' => 'CreateAccount',
    'payload' => 'CreateAccountAction',
  ),
), 'NonDelegateActionCreateAccount');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
