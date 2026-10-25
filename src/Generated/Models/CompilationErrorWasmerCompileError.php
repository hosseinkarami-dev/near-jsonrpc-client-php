<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * This is for defense in depth.
 * We expect our runtime-independent preparation code to fully catch all invalid wasms,
 * but, if it ever misses something we’ll emit this error
 */
final readonly class CompilationErrorWasmerCompileError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\CompilationErrorWasmerCompileErrorPayload
         */
        public \Near\JsonRpc\Generated\Models\CompilationErrorWasmerCompileErrorPayload $wasmerCompileError
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->wasmerCompileError, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CompilationErrorWasmerCompileErrorPayload',
  'nullable' => false,
), 'WasmerCompileError');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for CompilationErrorWasmerCompileError.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('WasmerCompileError', $data)) throw new \InvalidArgumentException('Missing required field: WasmerCompileError');
        $unknown = array_diff_key($data, array (
  'WasmerCompileError' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in CompilationErrorWasmerCompileError.');
        return new self(
            wasmerCompileError: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['WasmerCompileError'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CompilationErrorWasmerCompileErrorPayload',
  'nullable' => false,
), 'WasmerCompileError')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['WasmerCompileError'] = $this->wasmerCompileError;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'WasmerCompileError' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CompilationErrorWasmerCompileErrorPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'WasmerCompileError',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'WasmerCompileError',
    'tag' => 'WasmerCompileError',
    'payload' => 'CompilationErrorWasmerCompileErrorPayload',
  ),
), 'CompilationErrorWasmerCompileError'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'WasmerCompileError' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CompilationErrorWasmerCompileErrorPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'WasmerCompileError',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'WasmerCompileError',
    'tag' => 'WasmerCompileError',
    'payload' => 'CompilationErrorWasmerCompileErrorPayload',
  ),
), 'CompilationErrorWasmerCompileError');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
