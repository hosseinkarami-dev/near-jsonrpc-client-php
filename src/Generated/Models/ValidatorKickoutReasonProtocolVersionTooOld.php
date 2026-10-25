<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Validator's last block proposal was for a protocol version older than
 * the network's voted protocol version.
 */
final readonly class ValidatorKickoutReasonProtocolVersionTooOld implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ValidatorKickoutReasonProtocolVersionTooOldPayload
         */
        public \Near\JsonRpc\Generated\Models\ValidatorKickoutReasonProtocolVersionTooOldPayload $protocolVersionTooOld
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->protocolVersionTooOld, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutReasonProtocolVersionTooOldPayload',
  'nullable' => false,
), 'ProtocolVersionTooOld');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ValidatorKickoutReasonProtocolVersionTooOld.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('ProtocolVersionTooOld', $data)) throw new \InvalidArgumentException('Missing required field: ProtocolVersionTooOld');
        $unknown = array_diff_key($data, array (
  'ProtocolVersionTooOld' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ValidatorKickoutReasonProtocolVersionTooOld.');
        return new self(
            protocolVersionTooOld: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['ProtocolVersionTooOld'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutReasonProtocolVersionTooOldPayload',
  'nullable' => false,
), 'ProtocolVersionTooOld')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['ProtocolVersionTooOld'] = $this->protocolVersionTooOld;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'ProtocolVersionTooOld' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutReasonProtocolVersionTooOldPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'ProtocolVersionTooOld',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'ProtocolVersionTooOld',
    'tag' => 'ProtocolVersionTooOld',
    'payload' => 'ValidatorKickoutReasonProtocolVersionTooOldPayload',
  ),
), 'ValidatorKickoutReasonProtocolVersionTooOld'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'ProtocolVersionTooOld' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutReasonProtocolVersionTooOldPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'ProtocolVersionTooOld',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'ProtocolVersionTooOld',
    'tag' => 'ProtocolVersionTooOld',
    'payload' => 'ValidatorKickoutReasonProtocolVersionTooOldPayload',
  ),
), 'ValidatorKickoutReasonProtocolVersionTooOld');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
