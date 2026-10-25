<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class ReceiptEnumViewDataPayload implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $dataId,
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<string|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $data = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * @var bool|null
         */
        public bool|null $isPromiseResume = null,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->dataId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'data_id');
        if ($this->data->present) \Near\JsonRpc\Models\TypeGuard::assert($this->data->value, array (
  'default' => NULL,
  'nullable' => true,
  'type' => 'string',
), 'data');
        if ($this->isPromiseResume !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->isPromiseResume, array (
  'default' => false,
  'type' => 'boolean',
), 'is_promise_resume');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ReceiptEnumViewDataPayload.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('data_id', $data)) throw new \InvalidArgumentException('Missing required field: data_id');
        $extra = array_diff_key($data, array (
  'data' => true,
  'data_id' => true,
  'is_promise_resume' => true,
));
        return new self(
            dataId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['data_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'data_id'),
            data: array_key_exists('data', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['data'], array (
  'default' => NULL,
  'nullable' => true,
  'type' => 'string',
), 'data')) : new \Near\JsonRpc\Models\OptionalValue(),
            isPromiseResume: array_key_exists('is_promise_resume', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['is_promise_resume'], array (
  'default' => false,
  'type' => 'boolean',
), 'is_promise_resume') : null,
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
        $data['data_id'] = $this->dataId;
        if ($this->data->present) $data['data'] = $this->data->value;
        if ($this->isPromiseResume !== null) $data['is_promise_resume'] = $this->isPromiseResume;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'data' => 
    array (
      'default' => NULL,
      'nullable' => true,
      'type' => 'string',
    ),
    'data_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'is_promise_resume' => 
    array (
      'default' => false,
      'type' => 'boolean',
    ),
  ),
  'required' => 
  array (
    0 => 'data_id',
  ),
  'type' => 'object',
), 'ReceiptEnumViewDataPayload'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'data' => 
    array (
      'default' => NULL,
      'nullable' => true,
      'type' => 'string',
    ),
    'data_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'is_promise_resume' => 
    array (
      'default' => false,
      'type' => 'boolean',
    ),
  ),
  'required' => 
  array (
    0 => 'data_id',
  ),
  'type' => 'object',
), 'ReceiptEnumViewDataPayload');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
