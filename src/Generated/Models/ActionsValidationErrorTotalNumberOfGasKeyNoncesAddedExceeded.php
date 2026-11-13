<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The `AddKey` actions in one receipt add more gas key nonces in total than
 * allowed.
 */
final readonly class ActionsValidationErrorTotalNumberOfGasKeyNoncesAddedExceeded implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalNumberOfGasKeyNoncesAddedExceededPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalNumberOfGasKeyNoncesAddedExceededPayload $totalNumberOfGasKeyNoncesAddedExceeded
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->totalNumberOfGasKeyNoncesAddedExceeded, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorTotalNumberOfGasKeyNoncesAddedExceededPayload',
  'nullable' => false,
), 'TotalNumberOfGasKeyNoncesAddedExceeded');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionsValidationErrorTotalNumberOfGasKeyNoncesAddedExceeded.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('TotalNumberOfGasKeyNoncesAddedExceeded', $data)) throw new \InvalidArgumentException('Missing required field: TotalNumberOfGasKeyNoncesAddedExceeded');
        $unknown = array_diff_key($data, array (
  'TotalNumberOfGasKeyNoncesAddedExceeded' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionsValidationErrorTotalNumberOfGasKeyNoncesAddedExceeded.');
        return new self(
            totalNumberOfGasKeyNoncesAddedExceeded: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['TotalNumberOfGasKeyNoncesAddedExceeded'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorTotalNumberOfGasKeyNoncesAddedExceededPayload',
  'nullable' => false,
), 'TotalNumberOfGasKeyNoncesAddedExceeded')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['TotalNumberOfGasKeyNoncesAddedExceeded'] = $this->totalNumberOfGasKeyNoncesAddedExceeded;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'TotalNumberOfGasKeyNoncesAddedExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorTotalNumberOfGasKeyNoncesAddedExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'TotalNumberOfGasKeyNoncesAddedExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'TotalNumberOfGasKeyNoncesAddedExceeded',
    'tag' => 'TotalNumberOfGasKeyNoncesAddedExceeded',
    'payload' => 'ActionsValidationErrorTotalNumberOfGasKeyNoncesAddedExceededPayload',
  ),
), 'ActionsValidationErrorTotalNumberOfGasKeyNoncesAddedExceeded'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'TotalNumberOfGasKeyNoncesAddedExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorTotalNumberOfGasKeyNoncesAddedExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'TotalNumberOfGasKeyNoncesAddedExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'TotalNumberOfGasKeyNoncesAddedExceeded',
    'tag' => 'TotalNumberOfGasKeyNoncesAddedExceeded',
    'payload' => 'ActionsValidationErrorTotalNumberOfGasKeyNoncesAddedExceededPayload',
  ),
), 'ActionsValidationErrorTotalNumberOfGasKeyNoncesAddedExceeded');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
