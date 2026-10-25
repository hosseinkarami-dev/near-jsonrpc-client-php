<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class NonDelegateActionDeleteAccount implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\DeleteAccountAction
         */
        public \Near\JsonRpc\Generated\Models\DeleteAccountAction $deleteAccount
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->deleteAccount, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DeleteAccountAction',
  'nullable' => false,
), 'DeleteAccount');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for NonDelegateActionDeleteAccount.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('DeleteAccount', $data)) throw new \InvalidArgumentException('Missing required field: DeleteAccount');
        $unknown = array_diff_key($data, array (
  'DeleteAccount' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in NonDelegateActionDeleteAccount.');
        return new self(
            deleteAccount: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['DeleteAccount'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DeleteAccountAction',
  'nullable' => false,
), 'DeleteAccount')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['DeleteAccount'] = $this->deleteAccount;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'DeleteAccount' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DeleteAccountAction',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'DeleteAccount',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'DeleteAccount',
    'tag' => 'DeleteAccount',
    'payload' => 'DeleteAccountAction',
  ),
), 'NonDelegateActionDeleteAccount'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'DeleteAccount' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DeleteAccountAction',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'DeleteAccount',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'DeleteAccount',
    'tag' => 'DeleteAccount',
    'payload' => 'DeleteAccountAction',
  ),
), 'NonDelegateActionDeleteAccount');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
