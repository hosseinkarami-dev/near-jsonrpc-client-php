<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The execution has succeeded and returned some value or an empty vec encoded in base64.
 */
final readonly class FinalExecutionStatusSuccessValue implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var string
         */
        public string $successValue
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->successValue, array (
  'type' => 'string',
), 'SuccessValue');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for FinalExecutionStatusSuccessValue.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('SuccessValue', $data)) throw new \InvalidArgumentException('Missing required field: SuccessValue');
        $unknown = array_diff_key($data, array (
  'SuccessValue' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in FinalExecutionStatusSuccessValue.');
        return new self(
            successValue: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['SuccessValue'], array (
  'type' => 'string',
), 'SuccessValue')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['SuccessValue'] = $this->successValue;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'additionalProperties' => false,
  'properties' => 
  array (
    'SuccessValue' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'SuccessValue',
  ),
  'type' => 'object',
  'x-php-union' => 
  array (
    'label' => 'SuccessValue',
  ),
), 'FinalExecutionStatusSuccessValue'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'additionalProperties' => false,
  'properties' => 
  array (
    'SuccessValue' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'SuccessValue',
  ),
  'type' => 'object',
  'x-php-union' => 
  array (
    'label' => 'SuccessValue',
  ),
), 'FinalExecutionStatusSuccessValue');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
