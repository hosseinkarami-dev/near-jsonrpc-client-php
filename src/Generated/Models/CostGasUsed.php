<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Shows gas profile. More info [here](https://near.github.io/nearcore/architecture/gas/gas_profile.html?highlight=WASM_HOST_COST#example-transaction-gas-profile).
 */
final readonly class CostGasUsed implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var string
         */
        public string $cost,
        /**
         * Either ACTION_COST or WASM_HOST_COST.
         *
         * @var string
         */
        public string $costCategory,
        /**
         * @var string
         */
        public string $gasUsed,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->cost, array (
  'type' => 'string',
), 'cost');
        \Near\JsonRpc\Models\TypeGuard::assert($this->costCategory, array (
  'type' => 'string',
), 'cost_category');
        \Near\JsonRpc\Models\TypeGuard::assert($this->gasUsed, array (
  'type' => 'string',
), 'gas_used');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for CostGasUsed.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('cost_category', $data)) throw new \InvalidArgumentException('Missing required field: cost_category');
        if (!array_key_exists('cost', $data)) throw new \InvalidArgumentException('Missing required field: cost');
        if (!array_key_exists('gas_used', $data)) throw new \InvalidArgumentException('Missing required field: gas_used');
        $extra = array_diff_key($data, array (
  'cost' => true,
  'cost_category' => true,
  'gas_used' => true,
));
        return new self(
            cost: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['cost'], array (
  'type' => 'string',
), 'cost'),
            costCategory: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['cost_category'], array (
  'type' => 'string',
), 'cost_category'),
            gasUsed: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['gas_used'], array (
  'type' => 'string',
), 'gas_used'),
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
        $data['cost'] = $this->cost;
        $data['cost_category'] = $this->costCategory;
        $data['gas_used'] = $this->gasUsed;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'cost' => 
    array (
      'type' => 'string',
    ),
    'cost_category' => 
    array (
      'type' => 'string',
    ),
    'gas_used' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'cost_category',
    1 => 'cost',
    2 => 'gas_used',
  ),
  'type' => 'object',
), 'CostGasUsed'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'cost' => 
    array (
      'type' => 'string',
    ),
    'cost_category' => 
    array (
      'type' => 'string',
    ),
    'gas_used' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'cost_category',
    1 => 'cost',
    2 => 'gas_used',
  ),
  'type' => 'object',
), 'CostGasUsed');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
