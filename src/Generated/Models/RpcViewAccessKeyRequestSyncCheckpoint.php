<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class RpcViewAccessKeyRequestSyncCheckpoint implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\SyncCheckpoint
         */
        public \Near\JsonRpc\Generated\Models\SyncCheckpoint $syncCheckpoint,
        /**
         * @var \Near\JsonRpc\Generated\Models\AccountId
         */
        public \Near\JsonRpc\Generated\Models\AccountId $accountId,
        /**
         * @var \Near\JsonRpc\Generated\Models\PublicKey
         */
        public \Near\JsonRpc\Generated\Models\PublicKey $publicKey
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->syncCheckpoint, array (
  'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\SyncCheckpoint',
  'nullable' => false,
), 'sync_checkpoint');
        \Near\JsonRpc\Models\TypeGuard::assert($this->accountId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'account_id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->publicKey, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
  'nullable' => false,
), 'public_key');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcViewAccessKeyRequestSyncCheckpoint.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('sync_checkpoint', $data)) throw new \InvalidArgumentException('Missing required field: sync_checkpoint');
        if (!array_key_exists('account_id', $data)) throw new \InvalidArgumentException('Missing required field: account_id');
        if (!array_key_exists('public_key', $data)) throw new \InvalidArgumentException('Missing required field: public_key');
        $unknown = array_diff_key($data, array (
  'sync_checkpoint' => true,
  'account_id' => true,
  'public_key' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in RpcViewAccessKeyRequestSyncCheckpoint.');
        return new self(
            syncCheckpoint: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['sync_checkpoint'], array (
  'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\SyncCheckpoint',
  'nullable' => false,
), 'sync_checkpoint'),
            accountId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['account_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'account_id'),
            publicKey: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['public_key'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
  'nullable' => false,
), 'public_key')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['sync_checkpoint'] = $this->syncCheckpoint;
        $data['account_id'] = $this->accountId;
        $data['public_key'] = $this->publicKey;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'sync_checkpoint' => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\SyncCheckpoint',
      'nullable' => false,
    ),
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
  ),
  'required' => 
  array (
    0 => 'sync_checkpoint',
    1 => 'account_id',
    2 => 'public_key',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'sync_checkpoint',
    'tag' => 'sync_checkpoint',
    'payload' => 'SyncCheckpoint',
  ),
), 'RpcViewAccessKeyRequestSyncCheckpoint'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'sync_checkpoint' => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\SyncCheckpoint',
      'nullable' => false,
    ),
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
  ),
  'required' => 
  array (
    0 => 'sync_checkpoint',
    1 => 'account_id',
    2 => 'public_key',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'sync_checkpoint',
    'tag' => 'sync_checkpoint',
    'payload' => 'SyncCheckpoint',
  ),
), 'RpcViewAccessKeyRequestSyncCheckpoint');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
