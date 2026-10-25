<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * `method_name` is not allowed in external contract calls
 */
final readonly class HostErrorProhibitedInExternalCall implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\HostErrorProhibitedInExternalCallPayload
         */
        public \Near\JsonRpc\Generated\Models\HostErrorProhibitedInExternalCallPayload $prohibitedInExternalCall
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->prohibitedInExternalCall, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorProhibitedInExternalCallPayload',
  'nullable' => false,
), 'ProhibitedInExternalCall');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for HostErrorProhibitedInExternalCall.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('ProhibitedInExternalCall', $data)) throw new \InvalidArgumentException('Missing required field: ProhibitedInExternalCall');
        $unknown = array_diff_key($data, array (
  'ProhibitedInExternalCall' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in HostErrorProhibitedInExternalCall.');
        return new self(
            prohibitedInExternalCall: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['ProhibitedInExternalCall'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorProhibitedInExternalCallPayload',
  'nullable' => false,
), 'ProhibitedInExternalCall')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['ProhibitedInExternalCall'] = $this->prohibitedInExternalCall;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'ProhibitedInExternalCall' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorProhibitedInExternalCallPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'ProhibitedInExternalCall',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'ProhibitedInExternalCall',
    'tag' => 'ProhibitedInExternalCall',
    'payload' => 'HostErrorProhibitedInExternalCallPayload',
  ),
), 'HostErrorProhibitedInExternalCall'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'ProhibitedInExternalCall' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorProhibitedInExternalCallPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'ProhibitedInExternalCall',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'ProhibitedInExternalCall',
    'tag' => 'ProhibitedInExternalCall',
    'payload' => 'HostErrorProhibitedInExternalCallPayload',
  ),
), 'HostErrorProhibitedInExternalCall');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
