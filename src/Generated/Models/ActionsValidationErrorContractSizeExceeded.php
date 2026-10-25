<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The size of the contract code exceeded the limit in a DeployContract action.
 */
final readonly class ActionsValidationErrorContractSizeExceeded implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionsValidationErrorContractSizeExceededPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionsValidationErrorContractSizeExceededPayload $contractSizeExceeded
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->contractSizeExceeded, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorContractSizeExceededPayload',
  'nullable' => false,
), 'ContractSizeExceeded');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionsValidationErrorContractSizeExceeded.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('ContractSizeExceeded', $data)) throw new \InvalidArgumentException('Missing required field: ContractSizeExceeded');
        $unknown = array_diff_key($data, array (
  'ContractSizeExceeded' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionsValidationErrorContractSizeExceeded.');
        return new self(
            contractSizeExceeded: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['ContractSizeExceeded'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorContractSizeExceededPayload',
  'nullable' => false,
), 'ContractSizeExceeded')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['ContractSizeExceeded'] = $this->contractSizeExceeded;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'ContractSizeExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorContractSizeExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'ContractSizeExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'ContractSizeExceeded',
    'tag' => 'ContractSizeExceeded',
    'payload' => 'ActionsValidationErrorContractSizeExceededPayload',
  ),
), 'ActionsValidationErrorContractSizeExceeded'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'ContractSizeExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorContractSizeExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'ContractSizeExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'ContractSizeExceeded',
    'tag' => 'ContractSizeExceeded',
    'payload' => 'ActionsValidationErrorContractSizeExceededPayload',
  ),
), 'ActionsValidationErrorContractSizeExceeded');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
