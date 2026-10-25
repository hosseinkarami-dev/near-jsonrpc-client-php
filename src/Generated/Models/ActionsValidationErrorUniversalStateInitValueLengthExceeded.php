<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * A storage value in a `UniversalStateInit` state init exceeds the limit.
 */
final readonly class ActionsValidationErrorUniversalStateInitValueLengthExceeded implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionsValidationErrorUniversalStateInitValueLengthExceededPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionsValidationErrorUniversalStateInitValueLengthExceededPayload $universalStateInitValueLengthExceeded
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->universalStateInitValueLengthExceeded, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorUniversalStateInitValueLengthExceededPayload',
  'nullable' => false,
), 'UniversalStateInitValueLengthExceeded');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionsValidationErrorUniversalStateInitValueLengthExceeded.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('UniversalStateInitValueLengthExceeded', $data)) throw new \InvalidArgumentException('Missing required field: UniversalStateInitValueLengthExceeded');
        $unknown = array_diff_key($data, array (
  'UniversalStateInitValueLengthExceeded' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionsValidationErrorUniversalStateInitValueLengthExceeded.');
        return new self(
            universalStateInitValueLengthExceeded: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['UniversalStateInitValueLengthExceeded'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorUniversalStateInitValueLengthExceededPayload',
  'nullable' => false,
), 'UniversalStateInitValueLengthExceeded')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['UniversalStateInitValueLengthExceeded'] = $this->universalStateInitValueLengthExceeded;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'UniversalStateInitValueLengthExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorUniversalStateInitValueLengthExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'UniversalStateInitValueLengthExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'UniversalStateInitValueLengthExceeded',
    'tag' => 'UniversalStateInitValueLengthExceeded',
    'payload' => 'ActionsValidationErrorUniversalStateInitValueLengthExceededPayload',
  ),
), 'ActionsValidationErrorUniversalStateInitValueLengthExceeded'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'UniversalStateInitValueLengthExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorUniversalStateInitValueLengthExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'UniversalStateInitValueLengthExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'UniversalStateInitValueLengthExceeded',
    'tag' => 'UniversalStateInitValueLengthExceeded',
    'payload' => 'ActionsValidationErrorUniversalStateInitValueLengthExceededPayload',
  ),
), 'ActionsValidationErrorUniversalStateInitValueLengthExceeded');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
