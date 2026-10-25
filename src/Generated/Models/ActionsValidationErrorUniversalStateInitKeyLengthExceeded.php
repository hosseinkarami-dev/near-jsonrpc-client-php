<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * A storage key in a `UniversalStateInit` state init exceeds the limit.
 */
final readonly class ActionsValidationErrorUniversalStateInitKeyLengthExceeded implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionsValidationErrorUniversalStateInitKeyLengthExceededPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionsValidationErrorUniversalStateInitKeyLengthExceededPayload $universalStateInitKeyLengthExceeded
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->universalStateInitKeyLengthExceeded, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorUniversalStateInitKeyLengthExceededPayload',
  'nullable' => false,
), 'UniversalStateInitKeyLengthExceeded');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionsValidationErrorUniversalStateInitKeyLengthExceeded.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('UniversalStateInitKeyLengthExceeded', $data)) throw new \InvalidArgumentException('Missing required field: UniversalStateInitKeyLengthExceeded');
        $unknown = array_diff_key($data, array (
  'UniversalStateInitKeyLengthExceeded' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionsValidationErrorUniversalStateInitKeyLengthExceeded.');
        return new self(
            universalStateInitKeyLengthExceeded: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['UniversalStateInitKeyLengthExceeded'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorUniversalStateInitKeyLengthExceededPayload',
  'nullable' => false,
), 'UniversalStateInitKeyLengthExceeded')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['UniversalStateInitKeyLengthExceeded'] = $this->universalStateInitKeyLengthExceeded;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'UniversalStateInitKeyLengthExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorUniversalStateInitKeyLengthExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'UniversalStateInitKeyLengthExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'UniversalStateInitKeyLengthExceeded',
    'tag' => 'UniversalStateInitKeyLengthExceeded',
    'payload' => 'ActionsValidationErrorUniversalStateInitKeyLengthExceededPayload',
  ),
), 'ActionsValidationErrorUniversalStateInitKeyLengthExceeded'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'UniversalStateInitKeyLengthExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorUniversalStateInitKeyLengthExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'UniversalStateInitKeyLengthExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'UniversalStateInitKeyLengthExceeded',
    'tag' => 'UniversalStateInitKeyLengthExceeded',
    'payload' => 'ActionsValidationErrorUniversalStateInitKeyLengthExceededPayload',
  ),
), 'ActionsValidationErrorUniversalStateInitKeyLengthExceeded');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
