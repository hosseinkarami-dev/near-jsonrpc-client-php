<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The length of the arguments exceeded the limit in a Function Call action.
 */
final readonly class ActionsValidationErrorFunctionCallArgumentsLengthExceeded implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionsValidationErrorFunctionCallArgumentsLengthExceededPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionsValidationErrorFunctionCallArgumentsLengthExceededPayload $functionCallArgumentsLengthExceeded
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->functionCallArgumentsLengthExceeded, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorFunctionCallArgumentsLengthExceededPayload',
  'nullable' => false,
), 'FunctionCallArgumentsLengthExceeded');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionsValidationErrorFunctionCallArgumentsLengthExceeded.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('FunctionCallArgumentsLengthExceeded', $data)) throw new \InvalidArgumentException('Missing required field: FunctionCallArgumentsLengthExceeded');
        $unknown = array_diff_key($data, array (
  'FunctionCallArgumentsLengthExceeded' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionsValidationErrorFunctionCallArgumentsLengthExceeded.');
        return new self(
            functionCallArgumentsLengthExceeded: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['FunctionCallArgumentsLengthExceeded'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorFunctionCallArgumentsLengthExceededPayload',
  'nullable' => false,
), 'FunctionCallArgumentsLengthExceeded')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['FunctionCallArgumentsLengthExceeded'] = $this->functionCallArgumentsLengthExceeded;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'FunctionCallArgumentsLengthExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorFunctionCallArgumentsLengthExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'FunctionCallArgumentsLengthExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'FunctionCallArgumentsLengthExceeded',
    'tag' => 'FunctionCallArgumentsLengthExceeded',
    'payload' => 'ActionsValidationErrorFunctionCallArgumentsLengthExceededPayload',
  ),
), 'ActionsValidationErrorFunctionCallArgumentsLengthExceeded'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'FunctionCallArgumentsLengthExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorFunctionCallArgumentsLengthExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'FunctionCallArgumentsLengthExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'FunctionCallArgumentsLengthExceeded',
    'tag' => 'FunctionCallArgumentsLengthExceeded',
    'payload' => 'ActionsValidationErrorFunctionCallArgumentsLengthExceededPayload',
  ),
), 'ActionsValidationErrorFunctionCallArgumentsLengthExceeded');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
