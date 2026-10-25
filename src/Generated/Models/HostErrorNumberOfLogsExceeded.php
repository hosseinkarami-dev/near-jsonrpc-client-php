<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The total number of logs will exceed the limit.
 */
final readonly class HostErrorNumberOfLogsExceeded implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\HostErrorNumberOfLogsExceededPayload
         */
        public \Near\JsonRpc\Generated\Models\HostErrorNumberOfLogsExceededPayload $numberOfLogsExceeded
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->numberOfLogsExceeded, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorNumberOfLogsExceededPayload',
  'nullable' => false,
), 'NumberOfLogsExceeded');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for HostErrorNumberOfLogsExceeded.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('NumberOfLogsExceeded', $data)) throw new \InvalidArgumentException('Missing required field: NumberOfLogsExceeded');
        $unknown = array_diff_key($data, array (
  'NumberOfLogsExceeded' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in HostErrorNumberOfLogsExceeded.');
        return new self(
            numberOfLogsExceeded: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['NumberOfLogsExceeded'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorNumberOfLogsExceededPayload',
  'nullable' => false,
), 'NumberOfLogsExceeded')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['NumberOfLogsExceeded'] = $this->numberOfLogsExceeded;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'NumberOfLogsExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorNumberOfLogsExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'NumberOfLogsExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'NumberOfLogsExceeded',
    'tag' => 'NumberOfLogsExceeded',
    'payload' => 'HostErrorNumberOfLogsExceededPayload',
  ),
), 'HostErrorNumberOfLogsExceeded'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'NumberOfLogsExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorNumberOfLogsExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'NumberOfLogsExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'NumberOfLogsExceeded',
    'tag' => 'NumberOfLogsExceeded',
    'payload' => 'HostErrorNumberOfLogsExceededPayload',
  ),
), 'HostErrorNumberOfLogsExceeded');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
