<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The fees settings for a data receipt creation
 */
final readonly class DataReceiptCreationConfigView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * Base cost of creating a data receipt.
         * Both `send` and `exec` costs are burned when a new receipt has input dependencies. The gas
         * is charged for each input dependency. The dependencies are specified when a receipt is
         * created using `promise_then` and `promise_batch_then`.
         * NOTE: Any receipt with output dependencies will produce data receipts. Even if it fails.
         * Even if the last action is not a function call (in case of success it will return empty
         * value).
         *
         * @var \Near\JsonRpc\Generated\Models\Fee|null
         */
        public \Near\JsonRpc\Generated\Models\Fee|null $baseCost = null,
        /**
         * Additional cost per byte sent.
         * Both `send` and `exec` costs are burned when a function call finishes execution and returns
         * `N` bytes of data to every output dependency. For each output dependency the cost is
         * `(send(sir) + exec()) * N`.
         *
         * @var \Near\JsonRpc\Generated\Models\Fee|null
         */
        public \Near\JsonRpc\Generated\Models\Fee|null $costPerByte = null,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        if ($this->baseCost !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->baseCost, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
  'nullable' => false,
), 'base_cost');
        if ($this->costPerByte !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->costPerByte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
  'nullable' => false,
), 'cost_per_byte');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for DataReceiptCreationConfigView.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        $extra = array_diff_key($data, array (
  'base_cost' => true,
  'cost_per_byte' => true,
));
        return new self(
            baseCost: array_key_exists('base_cost', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['base_cost'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
  'nullable' => false,
), 'base_cost') : null,
            costPerByte: array_key_exists('cost_per_byte', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['cost_per_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
  'nullable' => false,
), 'cost_per_byte') : null,
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
        if ($this->baseCost !== null) $data['base_cost'] = $this->baseCost;
        if ($this->costPerByte !== null) $data['cost_per_byte'] = $this->costPerByte;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'base_cost' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
      'nullable' => false,
    ),
    'cost_per_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
      'nullable' => false,
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'DataReceiptCreationConfigView'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'base_cost' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
      'nullable' => false,
    ),
    'cost_per_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Fee',
      'nullable' => false,
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'DataReceiptCreationConfigView');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
