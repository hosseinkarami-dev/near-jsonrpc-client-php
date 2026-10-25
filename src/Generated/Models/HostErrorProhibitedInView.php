<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * `method_name` is not allowed in view calls
 */
final readonly class HostErrorProhibitedInView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\HostErrorProhibitedInViewPayload
         */
        public \Near\JsonRpc\Generated\Models\HostErrorProhibitedInViewPayload $prohibitedInView
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->prohibitedInView, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorProhibitedInViewPayload',
  'nullable' => false,
), 'ProhibitedInView');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for HostErrorProhibitedInView.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('ProhibitedInView', $data)) throw new \InvalidArgumentException('Missing required field: ProhibitedInView');
        $unknown = array_diff_key($data, array (
  'ProhibitedInView' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in HostErrorProhibitedInView.');
        return new self(
            prohibitedInView: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['ProhibitedInView'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorProhibitedInViewPayload',
  'nullable' => false,
), 'ProhibitedInView')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['ProhibitedInView'] = $this->prohibitedInView;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'ProhibitedInView' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorProhibitedInViewPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'ProhibitedInView',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'ProhibitedInView',
    'tag' => 'ProhibitedInView',
    'payload' => 'HostErrorProhibitedInViewPayload',
  ),
), 'HostErrorProhibitedInView'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'ProhibitedInView' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorProhibitedInViewPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'ProhibitedInView',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'ProhibitedInView',
    'tag' => 'ProhibitedInView',
    'payload' => 'HostErrorProhibitedInViewPayload',
  ),
), 'HostErrorProhibitedInView');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
