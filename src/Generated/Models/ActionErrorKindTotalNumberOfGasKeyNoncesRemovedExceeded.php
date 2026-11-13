<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The actions in the receipt removed more gas key nonces than
 * `max_gas_key_nonces_removed_per_receipt` allows.
 */
final readonly class ActionErrorKindTotalNumberOfGasKeyNoncesRemovedExceeded implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionErrorKindTotalNumberOfGasKeyNoncesRemovedExceededPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionErrorKindTotalNumberOfGasKeyNoncesRemovedExceededPayload $totalNumberOfGasKeyNoncesRemovedExceeded
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->totalNumberOfGasKeyNoncesRemovedExceeded, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindTotalNumberOfGasKeyNoncesRemovedExceededPayload',
  'nullable' => false,
), 'TotalNumberOfGasKeyNoncesRemovedExceeded');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionErrorKindTotalNumberOfGasKeyNoncesRemovedExceeded.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('TotalNumberOfGasKeyNoncesRemovedExceeded', $data)) throw new \InvalidArgumentException('Missing required field: TotalNumberOfGasKeyNoncesRemovedExceeded');
        $unknown = array_diff_key($data, array (
  'TotalNumberOfGasKeyNoncesRemovedExceeded' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionErrorKindTotalNumberOfGasKeyNoncesRemovedExceeded.');
        return new self(
            totalNumberOfGasKeyNoncesRemovedExceeded: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['TotalNumberOfGasKeyNoncesRemovedExceeded'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindTotalNumberOfGasKeyNoncesRemovedExceededPayload',
  'nullable' => false,
), 'TotalNumberOfGasKeyNoncesRemovedExceeded')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['TotalNumberOfGasKeyNoncesRemovedExceeded'] = $this->totalNumberOfGasKeyNoncesRemovedExceeded;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'TotalNumberOfGasKeyNoncesRemovedExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindTotalNumberOfGasKeyNoncesRemovedExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'TotalNumberOfGasKeyNoncesRemovedExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'TotalNumberOfGasKeyNoncesRemovedExceeded',
    'tag' => 'TotalNumberOfGasKeyNoncesRemovedExceeded',
    'payload' => 'ActionErrorKindTotalNumberOfGasKeyNoncesRemovedExceededPayload',
  ),
), 'ActionErrorKindTotalNumberOfGasKeyNoncesRemovedExceeded'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'TotalNumberOfGasKeyNoncesRemovedExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindTotalNumberOfGasKeyNoncesRemovedExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'TotalNumberOfGasKeyNoncesRemovedExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'TotalNumberOfGasKeyNoncesRemovedExceeded',
    'tag' => 'TotalNumberOfGasKeyNoncesRemovedExceeded',
    'payload' => 'ActionErrorKindTotalNumberOfGasKeyNoncesRemovedExceededPayload',
  ),
), 'ActionErrorKindTotalNumberOfGasKeyNoncesRemovedExceeded');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
