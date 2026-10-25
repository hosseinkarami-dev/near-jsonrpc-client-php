<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The state-init actions in one receipt commit to more access keys in total
 * than allowed.
 */
final readonly class ActionsValidationErrorTotalNumberOfStateInitKeysExceeded implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalNumberOfStateInitKeysExceededPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalNumberOfStateInitKeysExceededPayload $totalNumberOfStateInitKeysExceeded
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->totalNumberOfStateInitKeysExceeded, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorTotalNumberOfStateInitKeysExceededPayload',
  'nullable' => false,
), 'TotalNumberOfStateInitKeysExceeded');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionsValidationErrorTotalNumberOfStateInitKeysExceeded.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('TotalNumberOfStateInitKeysExceeded', $data)) throw new \InvalidArgumentException('Missing required field: TotalNumberOfStateInitKeysExceeded');
        $unknown = array_diff_key($data, array (
  'TotalNumberOfStateInitKeysExceeded' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionsValidationErrorTotalNumberOfStateInitKeysExceeded.');
        return new self(
            totalNumberOfStateInitKeysExceeded: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['TotalNumberOfStateInitKeysExceeded'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorTotalNumberOfStateInitKeysExceededPayload',
  'nullable' => false,
), 'TotalNumberOfStateInitKeysExceeded')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['TotalNumberOfStateInitKeysExceeded'] = $this->totalNumberOfStateInitKeysExceeded;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'TotalNumberOfStateInitKeysExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorTotalNumberOfStateInitKeysExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'TotalNumberOfStateInitKeysExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'TotalNumberOfStateInitKeysExceeded',
    'tag' => 'TotalNumberOfStateInitKeysExceeded',
    'payload' => 'ActionsValidationErrorTotalNumberOfStateInitKeysExceededPayload',
  ),
), 'ActionsValidationErrorTotalNumberOfStateInitKeysExceeded'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'TotalNumberOfStateInitKeysExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorTotalNumberOfStateInitKeysExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'TotalNumberOfStateInitKeysExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'TotalNumberOfStateInitKeysExceeded',
    'tag' => 'TotalNumberOfStateInitKeysExceeded',
    'payload' => 'ActionsValidationErrorTotalNumberOfStateInitKeysExceededPayload',
  ),
), 'ActionsValidationErrorTotalNumberOfStateInitKeysExceeded');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
