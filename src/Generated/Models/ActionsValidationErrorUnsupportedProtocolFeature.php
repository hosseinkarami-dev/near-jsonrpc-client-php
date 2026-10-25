<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The transaction includes a feature that the current protocol version
 * does not support.
 *
 * Note: we stringify the protocol feature name instead of using
 * `ProtocolFeature` here because we don't want to leak the internals of
 * that type into observable borsh serialization.
 */
final readonly class ActionsValidationErrorUnsupportedProtocolFeature implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionsValidationErrorUnsupportedProtocolFeaturePayload
         */
        public \Near\JsonRpc\Generated\Models\ActionsValidationErrorUnsupportedProtocolFeaturePayload $unsupportedProtocolFeature
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->unsupportedProtocolFeature, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorUnsupportedProtocolFeaturePayload',
  'nullable' => false,
), 'UnsupportedProtocolFeature');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionsValidationErrorUnsupportedProtocolFeature.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('UnsupportedProtocolFeature', $data)) throw new \InvalidArgumentException('Missing required field: UnsupportedProtocolFeature');
        $unknown = array_diff_key($data, array (
  'UnsupportedProtocolFeature' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionsValidationErrorUnsupportedProtocolFeature.');
        return new self(
            unsupportedProtocolFeature: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['UnsupportedProtocolFeature'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorUnsupportedProtocolFeaturePayload',
  'nullable' => false,
), 'UnsupportedProtocolFeature')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['UnsupportedProtocolFeature'] = $this->unsupportedProtocolFeature;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'UnsupportedProtocolFeature' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorUnsupportedProtocolFeaturePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'UnsupportedProtocolFeature',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'UnsupportedProtocolFeature',
    'tag' => 'UnsupportedProtocolFeature',
    'payload' => 'ActionsValidationErrorUnsupportedProtocolFeaturePayload',
  ),
), 'ActionsValidationErrorUnsupportedProtocolFeature'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'UnsupportedProtocolFeature' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorUnsupportedProtocolFeaturePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'UnsupportedProtocolFeature',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'UnsupportedProtocolFeature',
    'tag' => 'UnsupportedProtocolFeature',
    'payload' => 'ActionsValidationErrorUnsupportedProtocolFeaturePayload',
  ),
), 'ActionsValidationErrorUnsupportedProtocolFeature');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
