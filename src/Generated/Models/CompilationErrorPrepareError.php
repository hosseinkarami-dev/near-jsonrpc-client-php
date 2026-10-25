<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class CompilationErrorPrepareError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\PrepareError
         */
        public \Near\JsonRpc\Generated\Models\PrepareError $prepareError
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->prepareError, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareError',
  'nullable' => false,
), 'PrepareError');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for CompilationErrorPrepareError.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('PrepareError', $data)) throw new \InvalidArgumentException('Missing required field: PrepareError');
        $unknown = array_diff_key($data, array (
  'PrepareError' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in CompilationErrorPrepareError.');
        return new self(
            prepareError: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['PrepareError'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareError',
  'nullable' => false,
), 'PrepareError')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['PrepareError'] = $this->prepareError;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'PrepareError' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareError',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'PrepareError',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'PrepareError',
    'tag' => 'PrepareError',
    'payload' => 'PrepareError',
  ),
), 'CompilationErrorPrepareError'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'PrepareError' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareError',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'PrepareError',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'PrepareError',
    'tag' => 'PrepareError',
    'payload' => 'PrepareError',
  ),
), 'CompilationErrorPrepareError');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
