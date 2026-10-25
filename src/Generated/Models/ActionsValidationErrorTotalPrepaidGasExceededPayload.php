<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class ActionsValidationErrorTotalPrepaidGasExceededPayload implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\NearGas
         */
        public \Near\JsonRpc\Generated\Models\NearGas $limit,
        /**
         * @var \Near\JsonRpc\Generated\Models\NearGas
         */
        public \Near\JsonRpc\Generated\Models\NearGas $totalPrepaidGas,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->limit, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'limit');
        \Near\JsonRpc\Models\TypeGuard::assert($this->totalPrepaidGas, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'total_prepaid_gas');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionsValidationErrorTotalPrepaidGasExceededPayload.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('total_prepaid_gas', $data)) throw new \InvalidArgumentException('Missing required field: total_prepaid_gas');
        if (!array_key_exists('limit', $data)) throw new \InvalidArgumentException('Missing required field: limit');
        $extra = array_diff_key($data, array (
  'limit' => true,
  'total_prepaid_gas' => true,
));
        return new self(
            limit: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['limit'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'limit'),
            totalPrepaidGas: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['total_prepaid_gas'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'total_prepaid_gas'),
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
        $data['limit'] = $this->limit;
        $data['total_prepaid_gas'] = $this->totalPrepaidGas;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'limit' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'total_prepaid_gas' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'total_prepaid_gas',
    1 => 'limit',
  ),
  'type' => 'object',
), 'ActionsValidationErrorTotalPrepaidGasExceededPayload'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'limit' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'total_prepaid_gas' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'total_prepaid_gas',
    1 => 'limit',
  ),
  'type' => 'object',
), 'ActionsValidationErrorTotalPrepaidGasExceededPayload');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
