<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class ValidatorStakeViewV12 implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\AccountId
         */
        public \Near\JsonRpc\Generated\Models\AccountId $accountId,
        /**
         * @var \Near\JsonRpc\Generated\Models\PublicKey
         */
        public \Near\JsonRpc\Generated\Models\PublicKey $publicKey,
        /**
         * @var \Near\JsonRpc\Generated\Models\NearToken
         */
        public \Near\JsonRpc\Generated\Models\NearToken $stake,
        /**
         * @var 'V1'
         */
        public string $validatorStakeStructVersion,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->accountId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'account_id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->publicKey, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
  'nullable' => false,
), 'public_key');
        \Near\JsonRpc\Models\TypeGuard::assert($this->stake, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'stake');
        \Near\JsonRpc\Models\TypeGuard::assert($this->validatorStakeStructVersion, array (
  'enum' => 
  array (
    0 => 'V1',
  ),
  'type' => 'string',
), 'validator_stake_struct_version');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ValidatorStakeViewV12.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('account_id', $data)) throw new \InvalidArgumentException('Missing required field: account_id');
        if (!array_key_exists('public_key', $data)) throw new \InvalidArgumentException('Missing required field: public_key');
        if (!array_key_exists('stake', $data)) throw new \InvalidArgumentException('Missing required field: stake');
        if (!array_key_exists('validator_stake_struct_version', $data)) throw new \InvalidArgumentException('Missing required field: validator_stake_struct_version');
        $extra = array_diff_key($data, array (
  'account_id' => true,
  'public_key' => true,
  'stake' => true,
  'validator_stake_struct_version' => true,
));
        return new self(
            accountId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['account_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'account_id'),
            publicKey: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['public_key'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
  'nullable' => false,
), 'public_key'),
            stake: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['stake'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'stake'),
            validatorStakeStructVersion: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['validator_stake_struct_version'], array (
  'enum' => 
  array (
    0 => 'V1',
  ),
  'type' => 'string',
), 'validator_stake_struct_version'),
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
        $data['account_id'] = $this->accountId;
        $data['public_key'] = $this->publicKey;
        $data['stake'] = $this->stake;
        $data['validator_stake_struct_version'] = $this->validatorStakeStructVersion;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'account_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
    'public_key' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
      'nullable' => false,
    ),
    'stake' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'validator_stake_struct_version' => 
    array (
      'enum' => 
      array (
        0 => 'V1',
      ),
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'account_id',
    1 => 'public_key',
    2 => 'stake',
    3 => 'validator_stake_struct_version',
  ),
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'V1',
  ),
), 'ValidatorStakeViewV12'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'account_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
    'public_key' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
      'nullable' => false,
    ),
    'stake' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'validator_stake_struct_version' => 
    array (
      'enum' => 
      array (
        0 => 'V1',
      ),
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'account_id',
    1 => 'public_key',
    2 => 'stake',
    3 => 'validator_stake_struct_version',
  ),
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'V1',
  ),
), 'ValidatorStakeViewV12');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
