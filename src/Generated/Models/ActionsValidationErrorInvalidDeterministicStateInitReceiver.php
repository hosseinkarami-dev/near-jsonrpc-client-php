<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class ActionsValidationErrorInvalidDeterministicStateInitReceiver implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionsValidationErrorInvalidDeterministicStateInitReceiverPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionsValidationErrorInvalidDeterministicStateInitReceiverPayload $invalidDeterministicStateInitReceiver
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->invalidDeterministicStateInitReceiver, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorInvalidDeterministicStateInitReceiverPayload',
  'nullable' => false,
), 'InvalidDeterministicStateInitReceiver');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionsValidationErrorInvalidDeterministicStateInitReceiver.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('InvalidDeterministicStateInitReceiver', $data)) throw new \InvalidArgumentException('Missing required field: InvalidDeterministicStateInitReceiver');
        $unknown = array_diff_key($data, array (
  'InvalidDeterministicStateInitReceiver' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionsValidationErrorInvalidDeterministicStateInitReceiver.');
        return new self(
            invalidDeterministicStateInitReceiver: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['InvalidDeterministicStateInitReceiver'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorInvalidDeterministicStateInitReceiverPayload',
  'nullable' => false,
), 'InvalidDeterministicStateInitReceiver')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['InvalidDeterministicStateInitReceiver'] = $this->invalidDeterministicStateInitReceiver;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'InvalidDeterministicStateInitReceiver' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorInvalidDeterministicStateInitReceiverPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'InvalidDeterministicStateInitReceiver',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'InvalidDeterministicStateInitReceiver',
    'tag' => 'InvalidDeterministicStateInitReceiver',
    'payload' => 'ActionsValidationErrorInvalidDeterministicStateInitReceiverPayload',
  ),
), 'ActionsValidationErrorInvalidDeterministicStateInitReceiver'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'InvalidDeterministicStateInitReceiver' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorInvalidDeterministicStateInitReceiverPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'InvalidDeterministicStateInitReceiver',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'InvalidDeterministicStateInitReceiver',
    'tag' => 'InvalidDeterministicStateInitReceiver',
    'payload' => 'ActionsValidationErrorInvalidDeterministicStateInitReceiverPayload',
  ),
), 'ActionsValidationErrorInvalidDeterministicStateInitReceiver');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
