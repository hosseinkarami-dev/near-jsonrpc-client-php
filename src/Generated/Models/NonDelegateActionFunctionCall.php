<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class NonDelegateActionFunctionCall implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\FunctionCallAction
         */
        public \Near\JsonRpc\Generated\Models\FunctionCallAction $functionCall
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->functionCall, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FunctionCallAction',
  'nullable' => false,
), 'FunctionCall');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for NonDelegateActionFunctionCall.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('FunctionCall', $data)) throw new \InvalidArgumentException('Missing required field: FunctionCall');
        $unknown = array_diff_key($data, array (
  'FunctionCall' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in NonDelegateActionFunctionCall.');
        return new self(
            functionCall: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['FunctionCall'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FunctionCallAction',
  'nullable' => false,
), 'FunctionCall')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['FunctionCall'] = $this->functionCall;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'FunctionCall' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FunctionCallAction',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'FunctionCall',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'FunctionCall',
    'tag' => 'FunctionCall',
    'payload' => 'FunctionCallAction',
  ),
), 'NonDelegateActionFunctionCall'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'FunctionCall' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FunctionCallAction',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'FunctionCall',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'FunctionCall',
    'tag' => 'FunctionCall',
    'payload' => 'FunctionCallAction',
  ),
), 'NonDelegateActionFunctionCall');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
