<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The total log length exceeded the limit.
 */
final readonly class HostErrorTotalLogLengthExceeded implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\HostErrorTotalLogLengthExceededPayload
         */
        public \Near\JsonRpc\Generated\Models\HostErrorTotalLogLengthExceededPayload $totalLogLengthExceeded
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->totalLogLengthExceeded, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorTotalLogLengthExceededPayload',
  'nullable' => false,
), 'TotalLogLengthExceeded');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for HostErrorTotalLogLengthExceeded.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('TotalLogLengthExceeded', $data)) throw new \InvalidArgumentException('Missing required field: TotalLogLengthExceeded');
        $unknown = array_diff_key($data, array (
  'TotalLogLengthExceeded' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in HostErrorTotalLogLengthExceeded.');
        return new self(
            totalLogLengthExceeded: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['TotalLogLengthExceeded'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorTotalLogLengthExceededPayload',
  'nullable' => false,
), 'TotalLogLengthExceeded')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['TotalLogLengthExceeded'] = $this->totalLogLengthExceeded;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'TotalLogLengthExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorTotalLogLengthExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'TotalLogLengthExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'TotalLogLengthExceeded',
    'tag' => 'TotalLogLengthExceeded',
    'payload' => 'HostErrorTotalLogLengthExceededPayload',
  ),
), 'HostErrorTotalLogLengthExceeded'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'TotalLogLengthExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorTotalLogLengthExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'TotalLogLengthExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'TotalLogLengthExceeded',
    'tag' => 'TotalLogLengthExceeded',
    'payload' => 'HostErrorTotalLogLengthExceededPayload',
  ),
), 'HostErrorTotalLogLengthExceeded');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
