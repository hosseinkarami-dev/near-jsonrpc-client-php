<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Transaction method name isn't allowed by the access key
 */
final readonly class InvalidAccessKeyErrorMethodNameMismatch implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorMethodNameMismatchPayload
         */
        public \Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorMethodNameMismatchPayload $methodNameMismatch
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->methodNameMismatch, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidAccessKeyErrorMethodNameMismatchPayload',
  'nullable' => false,
), 'MethodNameMismatch');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for InvalidAccessKeyErrorMethodNameMismatch.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('MethodNameMismatch', $data)) throw new \InvalidArgumentException('Missing required field: MethodNameMismatch');
        $unknown = array_diff_key($data, array (
  'MethodNameMismatch' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in InvalidAccessKeyErrorMethodNameMismatch.');
        return new self(
            methodNameMismatch: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['MethodNameMismatch'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidAccessKeyErrorMethodNameMismatchPayload',
  'nullable' => false,
), 'MethodNameMismatch')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['MethodNameMismatch'] = $this->methodNameMismatch;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'MethodNameMismatch' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidAccessKeyErrorMethodNameMismatchPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'MethodNameMismatch',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'MethodNameMismatch',
    'tag' => 'MethodNameMismatch',
    'payload' => 'InvalidAccessKeyErrorMethodNameMismatchPayload',
  ),
), 'InvalidAccessKeyErrorMethodNameMismatch'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'MethodNameMismatch' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidAccessKeyErrorMethodNameMismatchPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'MethodNameMismatch',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'MethodNameMismatch',
    'tag' => 'MethodNameMismatch',
    'payload' => 'InvalidAccessKeyErrorMethodNameMismatchPayload',
  ),
), 'InvalidAccessKeyErrorMethodNameMismatch');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
