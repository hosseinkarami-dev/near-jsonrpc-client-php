<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class StateChangeCauseViewExternalCallProcessing implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $transactionId,
        /**
         * @var 'external_call_processing'
         */
        public string $type,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->transactionId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'transaction_id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->type, array (
  'enum' => 
  array (
    0 => 'external_call_processing',
  ),
  'type' => 'string',
), 'type');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for StateChangeCauseViewExternalCallProcessing.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('type', $data)) throw new \InvalidArgumentException('Missing required field: type');
        if (!array_key_exists('transaction_id', $data)) throw new \InvalidArgumentException('Missing required field: transaction_id');
        $extra = array_diff_key($data, array (
  'transaction_id' => true,
  'type' => true,
));
        return new self(
            transactionId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['transaction_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'transaction_id'),
            type: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['type'], array (
  'enum' => 
  array (
    0 => 'external_call_processing',
  ),
  'type' => 'string',
), 'type'),
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
        $data['transaction_id'] = $this->transactionId;
        $data['type'] = $this->type;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'transaction_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'type' => 
    array (
      'enum' => 
      array (
        0 => 'external_call_processing',
      ),
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'type',
    1 => 'transaction_id',
  ),
  'type' => 'object',
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'external_call_processing',
  ),
), 'StateChangeCauseViewExternalCallProcessing'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'transaction_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'type' => 
    array (
      'enum' => 
      array (
        0 => 'external_call_processing',
      ),
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'type',
    1 => 'transaction_id',
  ),
  'type' => 'object',
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'external_call_processing',
  ),
), 'StateChangeCauseViewExternalCallProcessing');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
