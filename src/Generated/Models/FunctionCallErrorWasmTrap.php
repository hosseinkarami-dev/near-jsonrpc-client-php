<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * A trap happened during execution of a binary
 *
 * Note: this is only to deserialize old data, use execution error for new data
 */
final readonly class FunctionCallErrorWasmTrap implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\WasmTrap
         */
        public \Near\JsonRpc\Generated\Models\WasmTrap $wasmTrap
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->wasmTrap, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\WasmTrap',
  'nullable' => false,
), 'WasmTrap');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for FunctionCallErrorWasmTrap.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('WasmTrap', $data)) throw new \InvalidArgumentException('Missing required field: WasmTrap');
        $unknown = array_diff_key($data, array (
  'WasmTrap' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in FunctionCallErrorWasmTrap.');
        return new self(
            wasmTrap: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['WasmTrap'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\WasmTrap',
  'nullable' => false,
), 'WasmTrap')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['WasmTrap'] = $this->wasmTrap;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'WasmTrap' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\WasmTrap',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'WasmTrap',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'WasmTrap',
    'tag' => 'WasmTrap',
    'payload' => 'WasmTrap',
  ),
), 'FunctionCallErrorWasmTrap'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'WasmTrap' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\WasmTrap',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'WasmTrap',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'WasmTrap',
    'tag' => 'WasmTrap',
    'payload' => 'WasmTrap',
  ),
), 'FunctionCallErrorWasmTrap');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
