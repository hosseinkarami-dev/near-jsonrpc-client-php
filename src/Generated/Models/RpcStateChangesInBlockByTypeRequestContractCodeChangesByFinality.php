<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class RpcStateChangesInBlockByTypeRequestContractCodeChangesByFinality implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\Finality
         */
        public \Near\JsonRpc\Generated\Models\Finality $finality,
        /**
         * @var list<\Near\JsonRpc\Generated\Models\AccountId>
         */
        public array $accountIds,
        /**
         * @var 'contract_code_changes'
         */
        public string $changesType,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->finality, array (
  'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\Finality',
  'nullable' => false,
), 'finality');
        \Near\JsonRpc\Models\TypeGuard::assert($this->accountIds, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
    'nullable' => false,
  ),
  'type' => 'array',
), 'account_ids');
        \Near\JsonRpc\Models\TypeGuard::assert($this->changesType, array (
  'enum' => 
  array (
    0 => 'contract_code_changes',
  ),
  'type' => 'string',
), 'changes_type');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcStateChangesInBlockByTypeRequestContractCodeChangesByFinality.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('finality', $data)) throw new \InvalidArgumentException('Missing required field: finality');
        if (!array_key_exists('changes_type', $data)) throw new \InvalidArgumentException('Missing required field: changes_type');
        if (!array_key_exists('account_ids', $data)) throw new \InvalidArgumentException('Missing required field: account_ids');
        $extra = array_diff_key($data, array (
  'finality' => true,
  'account_ids' => true,
  'changes_type' => true,
));
        return new self(
            finality: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['finality'], array (
  'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\Finality',
  'nullable' => false,
), 'finality'),
            accountIds: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['account_ids'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
    'nullable' => false,
  ),
  'type' => 'array',
), 'account_ids'),
            changesType: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['changes_type'], array (
  'enum' => 
  array (
    0 => 'contract_code_changes',
  ),
  'type' => 'string',
), 'changes_type'),
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
        $data['finality'] = $this->finality;
        $data['account_ids'] = $this->accountIds;
        $data['changes_type'] = $this->changesType;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'finality' => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\Finality',
      'nullable' => false,
    ),
    'account_ids' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'changes_type' => 
    array (
      'enum' => 
      array (
        0 => 'contract_code_changes',
      ),
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'finality',
    1 => 'changes_type',
    2 => 'account_ids',
  ),
  'title' => 'contract_code_changes_by_finality',
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'contract_code_changes_by_finality',
  ),
), 'RpcStateChangesInBlockByTypeRequestContractCodeChangesByFinality'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'finality' => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\Finality',
      'nullable' => false,
    ),
    'account_ids' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'changes_type' => 
    array (
      'enum' => 
      array (
        0 => 'contract_code_changes',
      ),
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'finality',
    1 => 'changes_type',
    2 => 'account_ids',
  ),
  'title' => 'contract_code_changes_by_finality',
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'contract_code_changes_by_finality',
  ),
), 'RpcStateChangesInBlockByTypeRequestContractCodeChangesByFinality');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
