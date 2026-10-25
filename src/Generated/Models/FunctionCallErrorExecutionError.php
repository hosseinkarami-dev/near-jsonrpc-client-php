<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class FunctionCallErrorExecutionError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var string
         */
        public string $executionError
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->executionError, array (
  'type' => 'string',
), 'ExecutionError');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for FunctionCallErrorExecutionError.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('ExecutionError', $data)) throw new \InvalidArgumentException('Missing required field: ExecutionError');
        $unknown = array_diff_key($data, array (
  'ExecutionError' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in FunctionCallErrorExecutionError.');
        return new self(
            executionError: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['ExecutionError'], array (
  'type' => 'string',
), 'ExecutionError')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['ExecutionError'] = $this->executionError;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'additionalProperties' => false,
  'properties' => 
  array (
    'ExecutionError' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'ExecutionError',
  ),
  'type' => 'object',
  'x-php-union' => 
  array (
    'label' => 'ExecutionError',
  ),
), 'FunctionCallErrorExecutionError'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'additionalProperties' => false,
  'properties' => 
  array (
    'ExecutionError' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'ExecutionError',
  ),
  'type' => 'object',
  'x-php-union' => 
  array (
    'label' => 'ExecutionError',
  ),
), 'FunctionCallErrorExecutionError');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
