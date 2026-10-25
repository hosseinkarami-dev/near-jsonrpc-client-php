<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class RpcViewAccountRequestFinality implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\Finality
         */
        public \Near\JsonRpc\Generated\Models\Finality $finality,
        /**
         * @var \Near\JsonRpc\Generated\Models\AccountId
         */
        public \Near\JsonRpc\Generated\Models\AccountId $accountId
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->finality, array (
  'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\Finality',
  'nullable' => false,
), 'finality');
        \Near\JsonRpc\Models\TypeGuard::assert($this->accountId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'account_id');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcViewAccountRequestFinality.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('finality', $data)) throw new \InvalidArgumentException('Missing required field: finality');
        if (!array_key_exists('account_id', $data)) throw new \InvalidArgumentException('Missing required field: account_id');
        $unknown = array_diff_key($data, array (
  'finality' => true,
  'account_id' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in RpcViewAccountRequestFinality.');
        return new self(
            finality: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['finality'], array (
  'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\Finality',
  'nullable' => false,
), 'finality'),
            accountId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['account_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'account_id')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['finality'] = $this->finality;
        $data['account_id'] = $this->accountId;
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
    'account_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'finality',
    1 => 'account_id',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'finality',
    'tag' => 'finality',
    'payload' => 'Finality',
  ),
), 'RpcViewAccountRequestFinality'));
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
    'account_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'finality',
    1 => 'account_id',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'finality',
    'tag' => 'finality',
    'payload' => 'Finality',
  ),
), 'RpcViewAccountRequestFinality');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
