<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The length of the method name exceeded the limit in a Function Call action.
 */
final readonly class ActionsValidationErrorFunctionCallMethodNameLengthExceeded implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionsValidationErrorFunctionCallMethodNameLengthExceededPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionsValidationErrorFunctionCallMethodNameLengthExceededPayload $functionCallMethodNameLengthExceeded
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->functionCallMethodNameLengthExceeded, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorFunctionCallMethodNameLengthExceededPayload',
  'nullable' => false,
), 'FunctionCallMethodNameLengthExceeded');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionsValidationErrorFunctionCallMethodNameLengthExceeded.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('FunctionCallMethodNameLengthExceeded', $data)) throw new \InvalidArgumentException('Missing required field: FunctionCallMethodNameLengthExceeded');
        $unknown = array_diff_key($data, array (
  'FunctionCallMethodNameLengthExceeded' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionsValidationErrorFunctionCallMethodNameLengthExceeded.');
        return new self(
            functionCallMethodNameLengthExceeded: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['FunctionCallMethodNameLengthExceeded'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorFunctionCallMethodNameLengthExceededPayload',
  'nullable' => false,
), 'FunctionCallMethodNameLengthExceeded')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['FunctionCallMethodNameLengthExceeded'] = $this->functionCallMethodNameLengthExceeded;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'FunctionCallMethodNameLengthExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorFunctionCallMethodNameLengthExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'FunctionCallMethodNameLengthExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'FunctionCallMethodNameLengthExceeded',
    'tag' => 'FunctionCallMethodNameLengthExceeded',
    'payload' => 'ActionsValidationErrorFunctionCallMethodNameLengthExceededPayload',
  ),
), 'ActionsValidationErrorFunctionCallMethodNameLengthExceeded'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'FunctionCallMethodNameLengthExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorFunctionCallMethodNameLengthExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'FunctionCallMethodNameLengthExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'FunctionCallMethodNameLengthExceeded',
    'tag' => 'FunctionCallMethodNameLengthExceeded',
    'payload' => 'ActionsValidationErrorFunctionCallMethodNameLengthExceededPayload',
  ),
), 'ActionsValidationErrorFunctionCallMethodNameLengthExceeded');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
