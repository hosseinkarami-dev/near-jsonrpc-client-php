<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Note: this is only to deserialize old data, use execution error for new data
 */
final readonly class FunctionCallErrorHostError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\HostError
         */
        public \Near\JsonRpc\Generated\Models\HostError $hostError
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->hostError, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostError',
  'nullable' => false,
), 'HostError');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for FunctionCallErrorHostError.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('HostError', $data)) throw new \InvalidArgumentException('Missing required field: HostError');
        $unknown = array_diff_key($data, array (
  'HostError' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in FunctionCallErrorHostError.');
        return new self(
            hostError: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['HostError'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostError',
  'nullable' => false,
), 'HostError')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['HostError'] = $this->hostError;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'HostError' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostError',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'HostError',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'HostError',
    'tag' => 'HostError',
    'payload' => 'HostError',
  ),
), 'FunctionCallErrorHostError'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'HostError' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostError',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'HostError',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'HostError',
    'tag' => 'HostError',
    'payload' => 'HostError',
  ),
), 'FunctionCallErrorHostError');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
