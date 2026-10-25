<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Access key provides limited access to an account. Each access key belongs to some account and
 * is identified by a unique (within the account) public key. One account may have large number of
 * access keys. Access keys allow to act on behalf of the account by restricting transactions
 * that can be issued.
 * `account_id,public_key` is a key in the state
 */
final readonly class AccessKey implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * Nonce for this access key, used for tx nonce generation. When access key is created, nonce
         * is set to `(block_height - 1) * 1e6` to avoid tx hash collision on access key re-creation.
         * See <https://github.com/near/nearcore/issues/3779> for more details.
         *
         * @var int|string
         */
        public int|string $nonce,
        /**
         * Defines permissions for this access key.
         *
         * @var \Near\JsonRpc\Generated\Models\AccessKeyPermission
         */
        public \Near\JsonRpc\Generated\Models\AccessKeyPermission $permission,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->nonce, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'nonce');
        \Near\JsonRpc\Models\TypeGuard::assert($this->permission, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccessKeyPermission',
  'nullable' => false,
), 'permission');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for AccessKey.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('nonce', $data)) throw new \InvalidArgumentException('Missing required field: nonce');
        if (!array_key_exists('permission', $data)) throw new \InvalidArgumentException('Missing required field: permission');
        $extra = array_diff_key($data, array (
  'nonce' => true,
  'permission' => true,
));
        return new self(
            nonce: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['nonce'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'nonce'),
            permission: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['permission'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccessKeyPermission',
  'nullable' => false,
), 'permission'),
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
        $data['nonce'] = $this->nonce;
        $data['permission'] = $this->permission;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'nonce' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'permission' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccessKeyPermission',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'nonce',
    1 => 'permission',
  ),
  'type' => 'object',
), 'AccessKey'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'nonce' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'permission' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccessKeyPermission',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'nonce',
    1 => 'permission',
  ),
  'type' => 'object',
), 'AccessKey');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
