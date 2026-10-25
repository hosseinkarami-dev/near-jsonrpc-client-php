<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Tracks shards that contain one of the given account.
 */
final readonly class TrackedShardsConfigAccounts implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var list<\Near\JsonRpc\Generated\Models\AccountId>
         */
        public array $accounts
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->accounts, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
    'nullable' => false,
  ),
  'type' => 'array',
), 'Accounts');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for TrackedShardsConfigAccounts.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('Accounts', $data)) throw new \InvalidArgumentException('Missing required field: Accounts');
        $unknown = array_diff_key($data, array (
  'Accounts' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in TrackedShardsConfigAccounts.');
        return new self(
            accounts: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['Accounts'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
    'nullable' => false,
  ),
  'type' => 'array',
), 'Accounts')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['Accounts'] = $this->accounts;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'additionalProperties' => false,
  'properties' => 
  array (
    'Accounts' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
  ),
  'required' => 
  array (
    0 => 'Accounts',
  ),
  'type' => 'object',
  'x-php-union' => 
  array (
    'label' => 'Accounts',
  ),
), 'TrackedShardsConfigAccounts'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'additionalProperties' => false,
  'properties' => 
  array (
    'Accounts' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
  ),
  'required' => 
  array (
    0 => 'Accounts',
  ),
  'type' => 'object',
  'x-php-union' => 
  array (
    'label' => 'Accounts',
  ),
), 'TrackedShardsConfigAccounts');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
