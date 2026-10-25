<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The length of some method name exceeded the limit in a Add Key action.
 */
final readonly class ActionsValidationErrorAddKeyMethodNameLengthExceeded implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionsValidationErrorAddKeyMethodNameLengthExceededPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionsValidationErrorAddKeyMethodNameLengthExceededPayload $addKeyMethodNameLengthExceeded
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->addKeyMethodNameLengthExceeded, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorAddKeyMethodNameLengthExceededPayload',
  'nullable' => false,
), 'AddKeyMethodNameLengthExceeded');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionsValidationErrorAddKeyMethodNameLengthExceeded.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('AddKeyMethodNameLengthExceeded', $data)) throw new \InvalidArgumentException('Missing required field: AddKeyMethodNameLengthExceeded');
        $unknown = array_diff_key($data, array (
  'AddKeyMethodNameLengthExceeded' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionsValidationErrorAddKeyMethodNameLengthExceeded.');
        return new self(
            addKeyMethodNameLengthExceeded: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['AddKeyMethodNameLengthExceeded'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorAddKeyMethodNameLengthExceededPayload',
  'nullable' => false,
), 'AddKeyMethodNameLengthExceeded')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['AddKeyMethodNameLengthExceeded'] = $this->addKeyMethodNameLengthExceeded;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'AddKeyMethodNameLengthExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorAddKeyMethodNameLengthExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'AddKeyMethodNameLengthExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'AddKeyMethodNameLengthExceeded',
    'tag' => 'AddKeyMethodNameLengthExceeded',
    'payload' => 'ActionsValidationErrorAddKeyMethodNameLengthExceededPayload',
  ),
), 'ActionsValidationErrorAddKeyMethodNameLengthExceeded'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'AddKeyMethodNameLengthExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorAddKeyMethodNameLengthExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'AddKeyMethodNameLengthExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'AddKeyMethodNameLengthExceeded',
    'tag' => 'AddKeyMethodNameLengthExceeded',
    'payload' => 'ActionsValidationErrorAddKeyMethodNameLengthExceededPayload',
  ),
), 'ActionsValidationErrorAddKeyMethodNameLengthExceeded');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
