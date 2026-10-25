<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * An error occurred while validating actions of an ActionReceipt.
 */
final readonly class ReceiptValidationErrorActionsValidation implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionsValidationError
         */
        public \Near\JsonRpc\Generated\Models\ActionsValidationError $actionsValidation
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->actionsValidation, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationError',
  'nullable' => false,
), 'ActionsValidation');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ReceiptValidationErrorActionsValidation.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('ActionsValidation', $data)) throw new \InvalidArgumentException('Missing required field: ActionsValidation');
        $unknown = array_diff_key($data, array (
  'ActionsValidation' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ReceiptValidationErrorActionsValidation.');
        return new self(
            actionsValidation: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['ActionsValidation'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationError',
  'nullable' => false,
), 'ActionsValidation')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['ActionsValidation'] = $this->actionsValidation;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'ActionsValidation' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationError',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'ActionsValidation',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'ActionsValidation',
    'tag' => 'ActionsValidation',
    'payload' => 'ActionsValidationError',
  ),
), 'ReceiptValidationErrorActionsValidation'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'ActionsValidation' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationError',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'ActionsValidation',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'ActionsValidation',
    'tag' => 'ActionsValidation',
    'payload' => 'ActionsValidationError',
  ),
), 'ReceiptValidationErrorActionsValidation');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
