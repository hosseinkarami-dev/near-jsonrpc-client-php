<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class AccountContractViewGlobalAccountId implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\AccountId
         */
        public \Near\JsonRpc\Generated\Models\AccountId $globalAccountId
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->globalAccountId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'global_account_id');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for AccountContractViewGlobalAccountId.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('global_account_id', $data)) throw new \InvalidArgumentException('Missing required field: global_account_id');
        $unknown = array_diff_key($data, array (
  'global_account_id' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in AccountContractViewGlobalAccountId.');
        return new self(
            globalAccountId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['global_account_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'global_account_id')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['global_account_id'] = $this->globalAccountId;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'global_account_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'global_account_id',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'global_account_id',
    'tag' => 'global_account_id',
    'payload' => 'AccountId',
  ),
), 'AccountContractViewGlobalAccountId'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'global_account_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'global_account_id',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'global_account_id',
    'tag' => 'global_account_id',
    'payload' => 'AccountId',
  ),
), 'AccountContractViewGlobalAccountId');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
