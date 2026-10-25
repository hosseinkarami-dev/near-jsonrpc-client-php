<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Import/export resolve error
 */
final readonly class FunctionCallErrorMethodResolveError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\MethodResolveError
         */
        public \Near\JsonRpc\Generated\Models\MethodResolveError $methodResolveError
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->methodResolveError, array (
  'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\MethodResolveError',
  'nullable' => false,
), 'MethodResolveError');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for FunctionCallErrorMethodResolveError.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('MethodResolveError', $data)) throw new \InvalidArgumentException('Missing required field: MethodResolveError');
        $unknown = array_diff_key($data, array (
  'MethodResolveError' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in FunctionCallErrorMethodResolveError.');
        return new self(
            methodResolveError: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['MethodResolveError'], array (
  'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\MethodResolveError',
  'nullable' => false,
), 'MethodResolveError')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['MethodResolveError'] = $this->methodResolveError;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'MethodResolveError' => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\MethodResolveError',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'MethodResolveError',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'MethodResolveError',
    'tag' => 'MethodResolveError',
    'payload' => 'MethodResolveError',
  ),
), 'FunctionCallErrorMethodResolveError'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'MethodResolveError' => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\MethodResolveError',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'MethodResolveError',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'MethodResolveError',
    'tag' => 'MethodResolveError',
    'payload' => 'MethodResolveError',
  ),
), 'FunctionCallErrorMethodResolveError');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
