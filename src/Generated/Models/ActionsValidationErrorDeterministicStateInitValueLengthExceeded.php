<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class ActionsValidationErrorDeterministicStateInitValueLengthExceeded implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionsValidationErrorDeterministicStateInitValueLengthExceededPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionsValidationErrorDeterministicStateInitValueLengthExceededPayload $deterministicStateInitValueLengthExceeded
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->deterministicStateInitValueLengthExceeded, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorDeterministicStateInitValueLengthExceededPayload',
  'nullable' => false,
), 'DeterministicStateInitValueLengthExceeded');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionsValidationErrorDeterministicStateInitValueLengthExceeded.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('DeterministicStateInitValueLengthExceeded', $data)) throw new \InvalidArgumentException('Missing required field: DeterministicStateInitValueLengthExceeded');
        $unknown = array_diff_key($data, array (
  'DeterministicStateInitValueLengthExceeded' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionsValidationErrorDeterministicStateInitValueLengthExceeded.');
        return new self(
            deterministicStateInitValueLengthExceeded: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['DeterministicStateInitValueLengthExceeded'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorDeterministicStateInitValueLengthExceededPayload',
  'nullable' => false,
), 'DeterministicStateInitValueLengthExceeded')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['DeterministicStateInitValueLengthExceeded'] = $this->deterministicStateInitValueLengthExceeded;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'DeterministicStateInitValueLengthExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorDeterministicStateInitValueLengthExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'DeterministicStateInitValueLengthExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'DeterministicStateInitValueLengthExceeded',
    'tag' => 'DeterministicStateInitValueLengthExceeded',
    'payload' => 'ActionsValidationErrorDeterministicStateInitValueLengthExceededPayload',
  ),
), 'ActionsValidationErrorDeterministicStateInitValueLengthExceeded'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'DeterministicStateInitValueLengthExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorDeterministicStateInitValueLengthExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'DeterministicStateInitValueLengthExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'DeterministicStateInitValueLengthExceeded',
    'tag' => 'DeterministicStateInitValueLengthExceeded',
    'payload' => 'ActionsValidationErrorDeterministicStateInitValueLengthExceededPayload',
  ),
), 'ActionsValidationErrorDeterministicStateInitValueLengthExceeded');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
