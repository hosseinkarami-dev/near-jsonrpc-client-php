<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The structure describes configuration for creation of new accounts.
 */
final readonly class AccountCreationConfigView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * The minimum length of the top-level account ID that is allowed to be created by any account.
         *
         * @var int|null
         */
        public int|null $minAllowedTopLevelAccountLength = null,
        /**
         * The account ID of the account registrar. This account ID allowed to create top-level
         * accounts of any valid length.
         *
         * @var \Near\JsonRpc\Generated\Models\AccountId|null
         */
        public \Near\JsonRpc\Generated\Models\AccountId|null $registrarAccountId = null,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        if ($this->minAllowedTopLevelAccountLength !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->minAllowedTopLevelAccountLength, array (
  'format' => 'uint8',
  'maximum' => 255,
  'minimum' => 0,
  'type' => 'integer',
), 'min_allowed_top_level_account_length');
        if ($this->registrarAccountId !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->registrarAccountId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'registrar_account_id');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for AccountCreationConfigView.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        $extra = array_diff_key($data, array (
  'min_allowed_top_level_account_length' => true,
  'registrar_account_id' => true,
));
        return new self(
            minAllowedTopLevelAccountLength: array_key_exists('min_allowed_top_level_account_length', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['min_allowed_top_level_account_length'], array (
  'format' => 'uint8',
  'maximum' => 255,
  'minimum' => 0,
  'type' => 'integer',
), 'min_allowed_top_level_account_length') : null,
            registrarAccountId: array_key_exists('registrar_account_id', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['registrar_account_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'registrar_account_id') : null,
            _extra: $extra
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = $this->extra;
        if ($this->minAllowedTopLevelAccountLength !== null) $data['min_allowed_top_level_account_length'] = $this->minAllowedTopLevelAccountLength;
        if ($this->registrarAccountId !== null) $data['registrar_account_id'] = $this->registrarAccountId;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'min_allowed_top_level_account_length' => 
    array (
      'format' => 'uint8',
      'maximum' => 255,
      'minimum' => 0,
      'type' => 'integer',
    ),
    'registrar_account_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'AccountCreationConfigView'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'min_allowed_top_level_account_length' => 
    array (
      'format' => 'uint8',
      'maximum' => 255,
      'minimum' => 0,
      'type' => 'integer',
    ),
    'registrar_account_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'AccountCreationConfigView');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
