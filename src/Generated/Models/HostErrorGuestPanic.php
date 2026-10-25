<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Smart contract panicked
 */
final readonly class HostErrorGuestPanic implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\HostErrorGuestPanicPayload
         */
        public \Near\JsonRpc\Generated\Models\HostErrorGuestPanicPayload $guestPanic
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->guestPanic, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorGuestPanicPayload',
  'nullable' => false,
), 'GuestPanic');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for HostErrorGuestPanic.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('GuestPanic', $data)) throw new \InvalidArgumentException('Missing required field: GuestPanic');
        $unknown = array_diff_key($data, array (
  'GuestPanic' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in HostErrorGuestPanic.');
        return new self(
            guestPanic: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['GuestPanic'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorGuestPanicPayload',
  'nullable' => false,
), 'GuestPanic')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['GuestPanic'] = $this->guestPanic;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'GuestPanic' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorGuestPanicPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'GuestPanic',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'GuestPanic',
    'tag' => 'GuestPanic',
    'payload' => 'HostErrorGuestPanicPayload',
  ),
), 'HostErrorGuestPanic'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'GuestPanic' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\HostErrorGuestPanicPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'GuestPanic',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'GuestPanic',
    'tag' => 'GuestPanic',
    'payload' => 'HostErrorGuestPanicPayload',
  ),
), 'HostErrorGuestPanic');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
