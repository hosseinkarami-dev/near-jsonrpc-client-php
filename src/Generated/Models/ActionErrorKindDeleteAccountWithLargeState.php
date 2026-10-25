<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Delete account whose state is large is temporarily banned.
 */
final readonly class ActionErrorKindDeleteAccountWithLargeState implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionErrorKindDeleteAccountWithLargeStatePayload
         */
        public \Near\JsonRpc\Generated\Models\ActionErrorKindDeleteAccountWithLargeStatePayload $deleteAccountWithLargeState
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->deleteAccountWithLargeState, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDeleteAccountWithLargeStatePayload',
  'nullable' => false,
), 'DeleteAccountWithLargeState');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionErrorKindDeleteAccountWithLargeState.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('DeleteAccountWithLargeState', $data)) throw new \InvalidArgumentException('Missing required field: DeleteAccountWithLargeState');
        $unknown = array_diff_key($data, array (
  'DeleteAccountWithLargeState' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionErrorKindDeleteAccountWithLargeState.');
        return new self(
            deleteAccountWithLargeState: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['DeleteAccountWithLargeState'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDeleteAccountWithLargeStatePayload',
  'nullable' => false,
), 'DeleteAccountWithLargeState')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['DeleteAccountWithLargeState'] = $this->deleteAccountWithLargeState;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'DeleteAccountWithLargeState' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDeleteAccountWithLargeStatePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'DeleteAccountWithLargeState',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'DeleteAccountWithLargeState',
    'tag' => 'DeleteAccountWithLargeState',
    'payload' => 'ActionErrorKindDeleteAccountWithLargeStatePayload',
  ),
), 'ActionErrorKindDeleteAccountWithLargeState'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'DeleteAccountWithLargeState' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDeleteAccountWithLargeStatePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'DeleteAccountWithLargeState',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'DeleteAccountWithLargeState',
    'tag' => 'DeleteAccountWithLargeState',
    'payload' => 'ActionErrorKindDeleteAccountWithLargeStatePayload',
  ),
), 'ActionErrorKindDeleteAccountWithLargeState');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
