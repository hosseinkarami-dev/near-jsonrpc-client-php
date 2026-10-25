<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class CompilationErrorCodeDoesNotExist implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\CompilationErrorCodeDoesNotExistPayload
         */
        public \Near\JsonRpc\Generated\Models\CompilationErrorCodeDoesNotExistPayload $codeDoesNotExist
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->codeDoesNotExist, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CompilationErrorCodeDoesNotExistPayload',
  'nullable' => false,
), 'CodeDoesNotExist');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for CompilationErrorCodeDoesNotExist.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('CodeDoesNotExist', $data)) throw new \InvalidArgumentException('Missing required field: CodeDoesNotExist');
        $unknown = array_diff_key($data, array (
  'CodeDoesNotExist' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in CompilationErrorCodeDoesNotExist.');
        return new self(
            codeDoesNotExist: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['CodeDoesNotExist'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CompilationErrorCodeDoesNotExistPayload',
  'nullable' => false,
), 'CodeDoesNotExist')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['CodeDoesNotExist'] = $this->codeDoesNotExist;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'CodeDoesNotExist' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CompilationErrorCodeDoesNotExistPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'CodeDoesNotExist',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'CodeDoesNotExist',
    'tag' => 'CodeDoesNotExist',
    'payload' => 'CompilationErrorCodeDoesNotExistPayload',
  ),
), 'CompilationErrorCodeDoesNotExist'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'CodeDoesNotExist' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CompilationErrorCodeDoesNotExistPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'CodeDoesNotExist',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'CodeDoesNotExist',
    'tag' => 'CodeDoesNotExist',
    'payload' => 'CompilationErrorCodeDoesNotExistPayload',
  ),
), 'CompilationErrorCodeDoesNotExist');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
