<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The transaction includes a feature that was removed at or before the
 * current protocol version. The counterpart of
 * `UnsupportedProtocolFeature`, which covers features not yet available.
 */
final readonly class ActionsValidationErrorRemovedProtocolFeature implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionsValidationErrorRemovedProtocolFeaturePayload
         */
        public \Near\JsonRpc\Generated\Models\ActionsValidationErrorRemovedProtocolFeaturePayload $removedProtocolFeature
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->removedProtocolFeature, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorRemovedProtocolFeaturePayload',
  'nullable' => false,
), 'RemovedProtocolFeature');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionsValidationErrorRemovedProtocolFeature.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('RemovedProtocolFeature', $data)) throw new \InvalidArgumentException('Missing required field: RemovedProtocolFeature');
        $unknown = array_diff_key($data, array (
  'RemovedProtocolFeature' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionsValidationErrorRemovedProtocolFeature.');
        return new self(
            removedProtocolFeature: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['RemovedProtocolFeature'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorRemovedProtocolFeaturePayload',
  'nullable' => false,
), 'RemovedProtocolFeature')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['RemovedProtocolFeature'] = $this->removedProtocolFeature;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'RemovedProtocolFeature' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorRemovedProtocolFeaturePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'RemovedProtocolFeature',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'RemovedProtocolFeature',
    'tag' => 'RemovedProtocolFeature',
    'payload' => 'ActionsValidationErrorRemovedProtocolFeaturePayload',
  ),
), 'ActionsValidationErrorRemovedProtocolFeature'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'RemovedProtocolFeature' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorRemovedProtocolFeaturePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'RemovedProtocolFeature',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'RemovedProtocolFeature',
    'tag' => 'RemovedProtocolFeature',
    'payload' => 'ActionsValidationErrorRemovedProtocolFeaturePayload',
  ),
), 'ActionsValidationErrorRemovedProtocolFeature');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
