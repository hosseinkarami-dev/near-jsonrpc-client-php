<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Account is staking and can not be deleted
 */
final readonly class ActionErrorKindDeleteAccountStaking implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionErrorKindDeleteAccountStakingPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionErrorKindDeleteAccountStakingPayload $deleteAccountStaking
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->deleteAccountStaking, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDeleteAccountStakingPayload',
  'nullable' => false,
), 'DeleteAccountStaking');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionErrorKindDeleteAccountStaking.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('DeleteAccountStaking', $data)) throw new \InvalidArgumentException('Missing required field: DeleteAccountStaking');
        $unknown = array_diff_key($data, array (
  'DeleteAccountStaking' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionErrorKindDeleteAccountStaking.');
        return new self(
            deleteAccountStaking: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['DeleteAccountStaking'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDeleteAccountStakingPayload',
  'nullable' => false,
), 'DeleteAccountStaking')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['DeleteAccountStaking'] = $this->deleteAccountStaking;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'DeleteAccountStaking' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDeleteAccountStakingPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'DeleteAccountStaking',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'DeleteAccountStaking',
    'tag' => 'DeleteAccountStaking',
    'payload' => 'ActionErrorKindDeleteAccountStakingPayload',
  ),
), 'ActionErrorKindDeleteAccountStaking'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'DeleteAccountStaking' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDeleteAccountStakingPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'DeleteAccountStaking',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'DeleteAccountStaking',
    'tag' => 'DeleteAccountStaking',
    'payload' => 'ActionErrorKindDeleteAccountStakingPayload',
  ),
), 'ActionErrorKindDeleteAccountStaking');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
