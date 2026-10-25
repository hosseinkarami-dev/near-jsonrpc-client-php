<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class ActionsValidationErrorDeterministicStateInitKeyLengthExceeded implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionsValidationErrorDeterministicStateInitKeyLengthExceededPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionsValidationErrorDeterministicStateInitKeyLengthExceededPayload $deterministicStateInitKeyLengthExceeded
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->deterministicStateInitKeyLengthExceeded, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorDeterministicStateInitKeyLengthExceededPayload',
  'nullable' => false,
), 'DeterministicStateInitKeyLengthExceeded');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionsValidationErrorDeterministicStateInitKeyLengthExceeded.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('DeterministicStateInitKeyLengthExceeded', $data)) throw new \InvalidArgumentException('Missing required field: DeterministicStateInitKeyLengthExceeded');
        $unknown = array_diff_key($data, array (
  'DeterministicStateInitKeyLengthExceeded' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionsValidationErrorDeterministicStateInitKeyLengthExceeded.');
        return new self(
            deterministicStateInitKeyLengthExceeded: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['DeterministicStateInitKeyLengthExceeded'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorDeterministicStateInitKeyLengthExceededPayload',
  'nullable' => false,
), 'DeterministicStateInitKeyLengthExceeded')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['DeterministicStateInitKeyLengthExceeded'] = $this->deterministicStateInitKeyLengthExceeded;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'DeterministicStateInitKeyLengthExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorDeterministicStateInitKeyLengthExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'DeterministicStateInitKeyLengthExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'DeterministicStateInitKeyLengthExceeded',
    'tag' => 'DeterministicStateInitKeyLengthExceeded',
    'payload' => 'ActionsValidationErrorDeterministicStateInitKeyLengthExceededPayload',
  ),
), 'ActionsValidationErrorDeterministicStateInitKeyLengthExceeded'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'DeterministicStateInitKeyLengthExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorDeterministicStateInitKeyLengthExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'DeterministicStateInitKeyLengthExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'DeterministicStateInitKeyLengthExceeded',
    'tag' => 'DeterministicStateInitKeyLengthExceeded',
    'payload' => 'ActionsValidationErrorDeterministicStateInitKeyLengthExceededPayload',
  ),
), 'ActionsValidationErrorDeterministicStateInitKeyLengthExceeded');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
