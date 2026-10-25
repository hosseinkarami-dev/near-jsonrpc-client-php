<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Error occurs when a `CreateAccount` action is called on a NEAR-implicit or ETH-implicit account.
 * See NEAR-implicit account creation NEP: <https://github.com/nearprotocol/NEPs/pull/71>.
 * Also, see ETH-implicit account creation NEP: <https://github.com/near/NEPs/issues/518>.
 *
 * TODO(#8598): This error is named very poorly. A better name would be
 * `OnlyNamedAccountCreationAllowed`.
 */
final readonly class ActionErrorKindOnlyImplicitAccountCreationAllowed implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionErrorKindOnlyImplicitAccountCreationAllowedPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionErrorKindOnlyImplicitAccountCreationAllowedPayload $onlyImplicitAccountCreationAllowed
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->onlyImplicitAccountCreationAllowed, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindOnlyImplicitAccountCreationAllowedPayload',
  'nullable' => false,
), 'OnlyImplicitAccountCreationAllowed');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionErrorKindOnlyImplicitAccountCreationAllowed.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('OnlyImplicitAccountCreationAllowed', $data)) throw new \InvalidArgumentException('Missing required field: OnlyImplicitAccountCreationAllowed');
        $unknown = array_diff_key($data, array (
  'OnlyImplicitAccountCreationAllowed' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionErrorKindOnlyImplicitAccountCreationAllowed.');
        return new self(
            onlyImplicitAccountCreationAllowed: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['OnlyImplicitAccountCreationAllowed'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindOnlyImplicitAccountCreationAllowedPayload',
  'nullable' => false,
), 'OnlyImplicitAccountCreationAllowed')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['OnlyImplicitAccountCreationAllowed'] = $this->onlyImplicitAccountCreationAllowed;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'OnlyImplicitAccountCreationAllowed' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindOnlyImplicitAccountCreationAllowedPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'OnlyImplicitAccountCreationAllowed',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'OnlyImplicitAccountCreationAllowed',
    'tag' => 'OnlyImplicitAccountCreationAllowed',
    'payload' => 'ActionErrorKindOnlyImplicitAccountCreationAllowedPayload',
  ),
), 'ActionErrorKindOnlyImplicitAccountCreationAllowed'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'OnlyImplicitAccountCreationAllowed' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindOnlyImplicitAccountCreationAllowedPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'OnlyImplicitAccountCreationAllowed',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'OnlyImplicitAccountCreationAllowed',
    'tag' => 'OnlyImplicitAccountCreationAllowed',
    'payload' => 'ActionErrorKindOnlyImplicitAccountCreationAllowedPayload',
  ),
), 'ActionErrorKindOnlyImplicitAccountCreationAllowed');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
