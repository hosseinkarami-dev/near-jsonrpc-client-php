<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The maximum number of promises within a FunctionCall exceeded the limit.
 */
final readonly class HostErrorNumberPromisesExceeded implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\HostErrorNumberPromisesExceededPayload
         */
        public \Near\JsonRpc\Generated\Models\HostErrorNumberPromisesExceededPayload $numberPromisesExceeded
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->numberPromisesExceeded, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorNumberPromisesExceededPayload',
  'nullable' => false,
), 'NumberPromisesExceeded');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for HostErrorNumberPromisesExceeded.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('NumberPromisesExceeded', $data)) throw new \InvalidArgumentException('Missing required field: NumberPromisesExceeded');
        $unknown = array_diff_key($data, array (
  'NumberPromisesExceeded' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in HostErrorNumberPromisesExceeded.');
        return new self(
            numberPromisesExceeded: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['NumberPromisesExceeded'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorNumberPromisesExceededPayload',
  'nullable' => false,
), 'NumberPromisesExceeded')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['NumberPromisesExceeded'] = $this->numberPromisesExceeded;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'NumberPromisesExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorNumberPromisesExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'NumberPromisesExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'NumberPromisesExceeded',
    'tag' => 'NumberPromisesExceeded',
    'payload' => 'HostErrorNumberPromisesExceededPayload',
  ),
), 'HostErrorNumberPromisesExceeded'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'NumberPromisesExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorNumberPromisesExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'NumberPromisesExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'NumberPromisesExceeded',
    'tag' => 'NumberPromisesExceeded',
    'payload' => 'HostErrorNumberPromisesExceededPayload',
  ),
), 'HostErrorNumberPromisesExceeded');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
