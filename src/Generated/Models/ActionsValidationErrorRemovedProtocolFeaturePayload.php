<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class ActionsValidationErrorRemovedProtocolFeaturePayload implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var string
         */
        public string $protocolFeature,
        /**
         * @var int
         */
        public int $version,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->protocolFeature, array (
  'type' => 'string',
), 'protocol_feature');
        \Near\JsonRpc\Models\TypeGuard::assert($this->version, array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'version');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionsValidationErrorRemovedProtocolFeaturePayload.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('protocol_feature', $data)) throw new \InvalidArgumentException('Missing required field: protocol_feature');
        if (!array_key_exists('version', $data)) throw new \InvalidArgumentException('Missing required field: version');
        $extra = array_diff_key($data, array (
  'protocol_feature' => true,
  'version' => true,
));
        return new self(
            protocolFeature: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['protocol_feature'], array (
  'type' => 'string',
), 'protocol_feature'),
            version: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['version'], array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'version'),
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
        $data['protocol_feature'] = $this->protocolFeature;
        $data['version'] = $this->version;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'protocol_feature' => 
    array (
      'type' => 'string',
    ),
    'version' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'protocol_feature',
    1 => 'version',
  ),
  'type' => 'object',
), 'ActionsValidationErrorRemovedProtocolFeaturePayload'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'protocol_feature' => 
    array (
      'type' => 'string',
    ),
    'version' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'protocol_feature',
    1 => 'version',
  ),
  'type' => 'object',
), 'ActionsValidationErrorRemovedProtocolFeaturePayload');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
