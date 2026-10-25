<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Wasm compilation error
 */
final readonly class FunctionCallErrorCompilationError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\CompilationError
         */
        public \Near\JsonRpc\Generated\Models\CompilationError $compilationError
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->compilationError, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CompilationError',
  'nullable' => false,
), 'CompilationError');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for FunctionCallErrorCompilationError.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('CompilationError', $data)) throw new \InvalidArgumentException('Missing required field: CompilationError');
        $unknown = array_diff_key($data, array (
  'CompilationError' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in FunctionCallErrorCompilationError.');
        return new self(
            compilationError: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['CompilationError'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CompilationError',
  'nullable' => false,
), 'CompilationError')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['CompilationError'] = $this->compilationError;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'CompilationError' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CompilationError',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'CompilationError',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'CompilationError',
    'tag' => 'CompilationError',
    'payload' => 'CompilationError',
  ),
), 'FunctionCallErrorCompilationError'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'CompilationError' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CompilationError',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'CompilationError',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'CompilationError',
    'tag' => 'CompilationError',
    'payload' => 'CompilationError',
  ),
), 'FunctionCallErrorCompilationError');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
