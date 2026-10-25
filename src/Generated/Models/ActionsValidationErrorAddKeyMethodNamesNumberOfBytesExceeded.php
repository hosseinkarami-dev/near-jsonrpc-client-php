<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The total number of bytes of the method names exceeded the limit in a Add Key action.
 */
final readonly class ActionsValidationErrorAddKeyMethodNamesNumberOfBytesExceeded implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionsValidationErrorAddKeyMethodNamesNumberOfBytesExceededPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionsValidationErrorAddKeyMethodNamesNumberOfBytesExceededPayload $addKeyMethodNamesNumberOfBytesExceeded
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->addKeyMethodNamesNumberOfBytesExceeded, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorAddKeyMethodNamesNumberOfBytesExceededPayload',
  'nullable' => false,
), 'AddKeyMethodNamesNumberOfBytesExceeded');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionsValidationErrorAddKeyMethodNamesNumberOfBytesExceeded.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('AddKeyMethodNamesNumberOfBytesExceeded', $data)) throw new \InvalidArgumentException('Missing required field: AddKeyMethodNamesNumberOfBytesExceeded');
        $unknown = array_diff_key($data, array (
  'AddKeyMethodNamesNumberOfBytesExceeded' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionsValidationErrorAddKeyMethodNamesNumberOfBytesExceeded.');
        return new self(
            addKeyMethodNamesNumberOfBytesExceeded: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['AddKeyMethodNamesNumberOfBytesExceeded'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorAddKeyMethodNamesNumberOfBytesExceededPayload',
  'nullable' => false,
), 'AddKeyMethodNamesNumberOfBytesExceeded')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['AddKeyMethodNamesNumberOfBytesExceeded'] = $this->addKeyMethodNamesNumberOfBytesExceeded;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'AddKeyMethodNamesNumberOfBytesExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorAddKeyMethodNamesNumberOfBytesExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'AddKeyMethodNamesNumberOfBytesExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'AddKeyMethodNamesNumberOfBytesExceeded',
    'tag' => 'AddKeyMethodNamesNumberOfBytesExceeded',
    'payload' => 'ActionsValidationErrorAddKeyMethodNamesNumberOfBytesExceededPayload',
  ),
), 'ActionsValidationErrorAddKeyMethodNamesNumberOfBytesExceeded'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'AddKeyMethodNamesNumberOfBytesExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorAddKeyMethodNamesNumberOfBytesExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'AddKeyMethodNamesNumberOfBytesExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'AddKeyMethodNamesNumberOfBytesExceeded',
    'tag' => 'AddKeyMethodNamesNumberOfBytesExceeded',
    'payload' => 'ActionsValidationErrorAddKeyMethodNamesNumberOfBytesExceededPayload',
  ),
), 'ActionsValidationErrorAddKeyMethodNamesNumberOfBytesExceeded');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
