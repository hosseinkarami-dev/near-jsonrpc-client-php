<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The state-init actions in one receipt carry more storage entries in total
 * than allowed.
 */
final readonly class ActionsValidationErrorTotalNumberOfStateInitEntriesExceeded implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalNumberOfStateInitEntriesExceededPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalNumberOfStateInitEntriesExceededPayload $totalNumberOfStateInitEntriesExceeded
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->totalNumberOfStateInitEntriesExceeded, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorTotalNumberOfStateInitEntriesExceededPayload',
  'nullable' => false,
), 'TotalNumberOfStateInitEntriesExceeded');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionsValidationErrorTotalNumberOfStateInitEntriesExceeded.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('TotalNumberOfStateInitEntriesExceeded', $data)) throw new \InvalidArgumentException('Missing required field: TotalNumberOfStateInitEntriesExceeded');
        $unknown = array_diff_key($data, array (
  'TotalNumberOfStateInitEntriesExceeded' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionsValidationErrorTotalNumberOfStateInitEntriesExceeded.');
        return new self(
            totalNumberOfStateInitEntriesExceeded: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['TotalNumberOfStateInitEntriesExceeded'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorTotalNumberOfStateInitEntriesExceededPayload',
  'nullable' => false,
), 'TotalNumberOfStateInitEntriesExceeded')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['TotalNumberOfStateInitEntriesExceeded'] = $this->totalNumberOfStateInitEntriesExceeded;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'TotalNumberOfStateInitEntriesExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorTotalNumberOfStateInitEntriesExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'TotalNumberOfStateInitEntriesExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'TotalNumberOfStateInitEntriesExceeded',
    'tag' => 'TotalNumberOfStateInitEntriesExceeded',
    'payload' => 'ActionsValidationErrorTotalNumberOfStateInitEntriesExceededPayload',
  ),
), 'ActionsValidationErrorTotalNumberOfStateInitEntriesExceeded'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'TotalNumberOfStateInitEntriesExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorTotalNumberOfStateInitEntriesExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'TotalNumberOfStateInitEntriesExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'TotalNumberOfStateInitEntriesExceeded',
    'tag' => 'TotalNumberOfStateInitEntriesExceeded',
    'payload' => 'ActionsValidationErrorTotalNumberOfStateInitEntriesExceededPayload',
  ),
), 'ActionsValidationErrorTotalNumberOfStateInitEntriesExceeded');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
