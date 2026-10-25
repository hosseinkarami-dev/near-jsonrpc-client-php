<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Describes access key permission scope and nonce.
 */
final readonly class RpcQueryResponseAccessKeyView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * Current nonce; each transaction signed with this key must use a strictly greater value.
         *
         * @var int|string
         */
        public int|string $nonce,
        /**
         * Access scope: full access, or a function-call permission with an optional allowance and method/receiver limits.
         *
         * @var \Near\JsonRpc\Generated\Models\AccessKeyPermissionView
         */
        public \Near\JsonRpc\Generated\Models\AccessKeyPermissionView $permission,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $blockHash,
        /**
         * @var int|string
         */
        public int|string $blockHeight,
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
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccessKeyPermissionView',
  'nullable' => false,
), 'permission');
        \Near\JsonRpc\Models\TypeGuard::assert($this->blockHash, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'block_hash');
        \Near\JsonRpc\Models\TypeGuard::assert($this->blockHeight, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'block_height');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcQueryResponseAccessKeyView.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('nonce', $data)) throw new \InvalidArgumentException('Missing required field: nonce');
        if (!array_key_exists('permission', $data)) throw new \InvalidArgumentException('Missing required field: permission');
        if (!array_key_exists('block_height', $data)) throw new \InvalidArgumentException('Missing required field: block_height');
        if (!array_key_exists('block_hash', $data)) throw new \InvalidArgumentException('Missing required field: block_hash');
        $extra = array_diff_key($data, array (
  'nonce' => true,
  'permission' => true,
  'block_hash' => true,
  'block_height' => true,
));
        return new self(
            nonce: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['nonce'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'nonce'),
            permission: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['permission'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccessKeyPermissionView',
  'nullable' => false,
), 'permission'),
            blockHash: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['block_hash'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'block_hash'),
            blockHeight: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['block_height'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'block_height'),
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
        $data['block_hash'] = $this->blockHash;
        $data['block_height'] = $this->blockHeight;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccessKeyPermissionView',
      'nullable' => false,
    ),
    'block_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'block_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'nonce',
    1 => 'permission',
    2 => 'block_height',
    3 => 'block_hash',
  ),
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'AccessKeyView',
  ),
), 'RpcQueryResponseAccessKeyView'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccessKeyPermissionView',
      'nullable' => false,
    ),
    'block_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'block_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'nonce',
    1 => 'permission',
    2 => 'block_height',
    3 => 'block_hash',
  ),
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'AccessKeyView',
  ),
), 'RpcQueryResponseAccessKeyView');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
