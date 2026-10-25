<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class HostErrorGuestPanicPayload implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var string
         */
        public string $panicMsg,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->panicMsg, array (
  'type' => 'string',
), 'panic_msg');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for HostErrorGuestPanicPayload.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('panic_msg', $data)) throw new \InvalidArgumentException('Missing required field: panic_msg');
        $extra = array_diff_key($data, array (
  'panic_msg' => true,
));
        return new self(
            panicMsg: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['panic_msg'], array (
  'type' => 'string',
), 'panic_msg'),
            _extra: $extra
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = $this->extra;
        $data['panic_msg'] = $this->panicMsg;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'panic_msg' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'panic_msg',
  ),
  'type' => 'object',
), 'HostErrorGuestPanicPayload'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'panic_msg' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'panic_msg',
  ),
  'type' => 'object',
), 'HostErrorGuestPanicPayload');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
