<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * A `FunctionCall` action called the method reserved for external contract calls.
 * That method only runs in an external call or a view call.
 */
final readonly class ActionErrorKindReservedMethodName implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionErrorKindReservedMethodNamePayload
         */
        public \Near\JsonRpc\Generated\Models\ActionErrorKindReservedMethodNamePayload $reservedMethodName
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->reservedMethodName, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindReservedMethodNamePayload',
  'nullable' => false,
), 'ReservedMethodName');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionErrorKindReservedMethodName.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('ReservedMethodName', $data)) throw new \InvalidArgumentException('Missing required field: ReservedMethodName');
        $unknown = array_diff_key($data, array (
  'ReservedMethodName' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionErrorKindReservedMethodName.');
        return new self(
            reservedMethodName: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['ReservedMethodName'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindReservedMethodNamePayload',
  'nullable' => false,
), 'ReservedMethodName')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['ReservedMethodName'] = $this->reservedMethodName;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'ReservedMethodName' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindReservedMethodNamePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'ReservedMethodName',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'ReservedMethodName',
    'tag' => 'ReservedMethodName',
    'payload' => 'ActionErrorKindReservedMethodNamePayload',
  ),
), 'ActionErrorKindReservedMethodName'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'ReservedMethodName' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindReservedMethodNamePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'ReservedMethodName',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'ReservedMethodName',
    'tag' => 'ReservedMethodName',
    'payload' => 'ActionErrorKindReservedMethodNamePayload',
  ),
), 'ActionErrorKindReservedMethodName');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
