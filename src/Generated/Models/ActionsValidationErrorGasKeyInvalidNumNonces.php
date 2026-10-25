<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class ActionsValidationErrorGasKeyInvalidNumNonces implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionsValidationErrorGasKeyInvalidNumNoncesPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionsValidationErrorGasKeyInvalidNumNoncesPayload $gasKeyInvalidNumNonces
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->gasKeyInvalidNumNonces, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorGasKeyInvalidNumNoncesPayload',
  'nullable' => false,
), 'GasKeyInvalidNumNonces');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionsValidationErrorGasKeyInvalidNumNonces.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('GasKeyInvalidNumNonces', $data)) throw new \InvalidArgumentException('Missing required field: GasKeyInvalidNumNonces');
        $unknown = array_diff_key($data, array (
  'GasKeyInvalidNumNonces' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionsValidationErrorGasKeyInvalidNumNonces.');
        return new self(
            gasKeyInvalidNumNonces: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['GasKeyInvalidNumNonces'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorGasKeyInvalidNumNoncesPayload',
  'nullable' => false,
), 'GasKeyInvalidNumNonces')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['GasKeyInvalidNumNonces'] = $this->gasKeyInvalidNumNonces;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'GasKeyInvalidNumNonces' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorGasKeyInvalidNumNoncesPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'GasKeyInvalidNumNonces',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'GasKeyInvalidNumNonces',
    'tag' => 'GasKeyInvalidNumNonces',
    'payload' => 'ActionsValidationErrorGasKeyInvalidNumNoncesPayload',
  ),
), 'ActionsValidationErrorGasKeyInvalidNumNonces'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'GasKeyInvalidNumNonces' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorGasKeyInvalidNumNoncesPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'GasKeyInvalidNumNonces',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'GasKeyInvalidNumNonces',
    'tag' => 'GasKeyInvalidNumNonces',
    'payload' => 'ActionsValidationErrorGasKeyInvalidNumNoncesPayload',
  ),
), 'ActionsValidationErrorGasKeyInvalidNumNonces');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
