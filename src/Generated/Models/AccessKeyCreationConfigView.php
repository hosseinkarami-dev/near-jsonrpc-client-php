<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Describes the cost of creating an access key.
 */
final readonly class AccessKeyCreationConfigView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * Base cost of creating a full access access-key.
         *
         * @var \Near\JsonRpc\Generated\Models\Fee
         */
        public \Near\JsonRpc\Generated\Models\Fee $fullAccessCost,
        /**
         * Base cost of creating an access-key restricted to specific functions.
         *
         * @var \Near\JsonRpc\Generated\Models\Fee
         */
        public \Near\JsonRpc\Generated\Models\Fee $functionCallCost,
        /**
         * Cost per byte of method_names of creating a restricted access-key.
         *
         * @var \Near\JsonRpc\Generated\Models\Fee
         */
        public \Near\JsonRpc\Generated\Models\Fee $functionCallCostPerByte,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->fullAccessCost, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
  'nullable' => false,
), 'full_access_cost');
        \Near\JsonRpc\Models\TypeGuard::assert($this->functionCallCost, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
  'nullable' => false,
), 'function_call_cost');
        \Near\JsonRpc\Models\TypeGuard::assert($this->functionCallCostPerByte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
  'nullable' => false,
), 'function_call_cost_per_byte');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for AccessKeyCreationConfigView.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('full_access_cost', $data)) throw new \InvalidArgumentException('Missing required field: full_access_cost');
        if (!array_key_exists('function_call_cost', $data)) throw new \InvalidArgumentException('Missing required field: function_call_cost');
        if (!array_key_exists('function_call_cost_per_byte', $data)) throw new \InvalidArgumentException('Missing required field: function_call_cost_per_byte');
        $extra = array_diff_key($data, array (
  'full_access_cost' => true,
  'function_call_cost' => true,
  'function_call_cost_per_byte' => true,
));
        return new self(
            fullAccessCost: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['full_access_cost'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
  'nullable' => false,
), 'full_access_cost'),
            functionCallCost: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['function_call_cost'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
  'nullable' => false,
), 'function_call_cost'),
            functionCallCostPerByte: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['function_call_cost_per_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
  'nullable' => false,
), 'function_call_cost_per_byte'),
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
        $data['full_access_cost'] = $this->fullAccessCost;
        $data['function_call_cost'] = $this->functionCallCost;
        $data['function_call_cost_per_byte'] = $this->functionCallCostPerByte;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'full_access_cost' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
      'nullable' => false,
    ),
    'function_call_cost' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
      'nullable' => false,
    ),
    'function_call_cost_per_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'full_access_cost',
    1 => 'function_call_cost',
    2 => 'function_call_cost_per_byte',
  ),
  'type' => 'object',
), 'AccessKeyCreationConfigView'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'full_access_cost' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
      'nullable' => false,
    ),
    'function_call_cost' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
      'nullable' => false,
    ),
    'function_call_cost_per_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'full_access_cost',
    1 => 'function_call_cost',
    2 => 'function_call_cost_per_byte',
  ),
  'type' => 'object',
), 'AccessKeyCreationConfigView');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
