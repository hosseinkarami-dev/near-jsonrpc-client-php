<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * An error occurred during a `FunctionCall` Action, parameter is debug message.
 */
final readonly class ActionErrorKindFunctionCallError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\FunctionCallError
         */
        public \Near\JsonRpc\Generated\Models\FunctionCallError $functionCallError
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->functionCallError, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FunctionCallError',
  'nullable' => false,
), 'FunctionCallError');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionErrorKindFunctionCallError.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('FunctionCallError', $data)) throw new \InvalidArgumentException('Missing required field: FunctionCallError');
        $unknown = array_diff_key($data, array (
  'FunctionCallError' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionErrorKindFunctionCallError.');
        return new self(
            functionCallError: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['FunctionCallError'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FunctionCallError',
  'nullable' => false,
), 'FunctionCallError')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['FunctionCallError'] = $this->functionCallError;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'FunctionCallError' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FunctionCallError',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'FunctionCallError',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'FunctionCallError',
    'tag' => 'FunctionCallError',
    'payload' => 'FunctionCallError',
  ),
), 'ActionErrorKindFunctionCallError'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'FunctionCallError' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FunctionCallError',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'FunctionCallError',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'FunctionCallError',
    'tag' => 'FunctionCallError',
    'payload' => 'FunctionCallError',
  ),
), 'ActionErrorKindFunctionCallError');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
