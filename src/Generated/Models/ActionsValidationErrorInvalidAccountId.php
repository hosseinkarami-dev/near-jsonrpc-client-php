<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Invalid account ID.
 */
final readonly class ActionsValidationErrorInvalidAccountId implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionsValidationErrorInvalidAccountIdPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionsValidationErrorInvalidAccountIdPayload $invalidAccountId
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->invalidAccountId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorInvalidAccountIdPayload',
  'nullable' => false,
), 'InvalidAccountId');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionsValidationErrorInvalidAccountId.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('InvalidAccountId', $data)) throw new \InvalidArgumentException('Missing required field: InvalidAccountId');
        $unknown = array_diff_key($data, array (
  'InvalidAccountId' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionsValidationErrorInvalidAccountId.');
        return new self(
            invalidAccountId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['InvalidAccountId'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorInvalidAccountIdPayload',
  'nullable' => false,
), 'InvalidAccountId')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['InvalidAccountId'] = $this->invalidAccountId;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'InvalidAccountId' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorInvalidAccountIdPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'InvalidAccountId',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'InvalidAccountId',
    'tag' => 'InvalidAccountId',
    'payload' => 'ActionsValidationErrorInvalidAccountIdPayload',
  ),
), 'ActionsValidationErrorInvalidAccountId'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'InvalidAccountId' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorInvalidAccountIdPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'InvalidAccountId',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'InvalidAccountId',
    'tag' => 'InvalidAccountId',
    'payload' => 'ActionsValidationErrorInvalidAccountIdPayload',
  ),
), 'ActionsValidationErrorInvalidAccountId');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
