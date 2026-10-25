<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The total prepaid gas (for all given actions) exceeded the limit.
 */
final readonly class ActionsValidationErrorTotalPrepaidGasExceeded implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalPrepaidGasExceededPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalPrepaidGasExceededPayload $totalPrepaidGasExceeded
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->totalPrepaidGasExceeded, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorTotalPrepaidGasExceededPayload',
  'nullable' => false,
), 'TotalPrepaidGasExceeded');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionsValidationErrorTotalPrepaidGasExceeded.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('TotalPrepaidGasExceeded', $data)) throw new \InvalidArgumentException('Missing required field: TotalPrepaidGasExceeded');
        $unknown = array_diff_key($data, array (
  'TotalPrepaidGasExceeded' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionsValidationErrorTotalPrepaidGasExceeded.');
        return new self(
            totalPrepaidGasExceeded: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['TotalPrepaidGasExceeded'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorTotalPrepaidGasExceededPayload',
  'nullable' => false,
), 'TotalPrepaidGasExceeded')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['TotalPrepaidGasExceeded'] = $this->totalPrepaidGasExceeded;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'TotalPrepaidGasExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorTotalPrepaidGasExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'TotalPrepaidGasExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'TotalPrepaidGasExceeded',
    'tag' => 'TotalPrepaidGasExceeded',
    'payload' => 'ActionsValidationErrorTotalPrepaidGasExceededPayload',
  ),
), 'ActionsValidationErrorTotalPrepaidGasExceeded'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'TotalPrepaidGasExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorTotalPrepaidGasExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'TotalPrepaidGasExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'TotalPrepaidGasExceeded',
    'tag' => 'TotalPrepaidGasExceeded',
    'payload' => 'ActionsValidationErrorTotalPrepaidGasExceededPayload',
  ),
), 'ActionsValidationErrorTotalPrepaidGasExceeded');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
