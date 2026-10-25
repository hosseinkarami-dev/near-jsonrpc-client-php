<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The receiver id of a `UniversalStateInit` action does not match the id
 * derived from its state init.
 */
final readonly class ActionsValidationErrorInvalidUniversalStateInitReceiver implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionsValidationErrorInvalidUniversalStateInitReceiverPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionsValidationErrorInvalidUniversalStateInitReceiverPayload $invalidUniversalStateInitReceiver
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->invalidUniversalStateInitReceiver, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorInvalidUniversalStateInitReceiverPayload',
  'nullable' => false,
), 'InvalidUniversalStateInitReceiver');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionsValidationErrorInvalidUniversalStateInitReceiver.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('InvalidUniversalStateInitReceiver', $data)) throw new \InvalidArgumentException('Missing required field: InvalidUniversalStateInitReceiver');
        $unknown = array_diff_key($data, array (
  'InvalidUniversalStateInitReceiver' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionsValidationErrorInvalidUniversalStateInitReceiver.');
        return new self(
            invalidUniversalStateInitReceiver: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['InvalidUniversalStateInitReceiver'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorInvalidUniversalStateInitReceiverPayload',
  'nullable' => false,
), 'InvalidUniversalStateInitReceiver')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['InvalidUniversalStateInitReceiver'] = $this->invalidUniversalStateInitReceiver;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'InvalidUniversalStateInitReceiver' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorInvalidUniversalStateInitReceiverPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'InvalidUniversalStateInitReceiver',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'InvalidUniversalStateInitReceiver',
    'tag' => 'InvalidUniversalStateInitReceiver',
    'payload' => 'ActionsValidationErrorInvalidUniversalStateInitReceiverPayload',
  ),
), 'ActionsValidationErrorInvalidUniversalStateInitReceiver'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'InvalidUniversalStateInitReceiver' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorInvalidUniversalStateInitReceiverPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'InvalidUniversalStateInitReceiver',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'InvalidUniversalStateInitReceiver',
    'tag' => 'InvalidUniversalStateInitReceiver',
    'payload' => 'ActionsValidationErrorInvalidUniversalStateInitReceiverPayload',
  ),
), 'ActionsValidationErrorInvalidUniversalStateInitReceiver');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
