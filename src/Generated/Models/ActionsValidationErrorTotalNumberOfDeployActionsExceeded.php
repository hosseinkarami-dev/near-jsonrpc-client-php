<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The combined number of `DeployContract` and `DeployGlobalContract`
 * actions in one receipt exceeded the limit.
 */
final readonly class ActionsValidationErrorTotalNumberOfDeployActionsExceeded implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalNumberOfDeployActionsExceededPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionsValidationErrorTotalNumberOfDeployActionsExceededPayload $totalNumberOfDeployActionsExceeded
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->totalNumberOfDeployActionsExceeded, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorTotalNumberOfDeployActionsExceededPayload',
  'nullable' => false,
), 'TotalNumberOfDeployActionsExceeded');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionsValidationErrorTotalNumberOfDeployActionsExceeded.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('TotalNumberOfDeployActionsExceeded', $data)) throw new \InvalidArgumentException('Missing required field: TotalNumberOfDeployActionsExceeded');
        $unknown = array_diff_key($data, array (
  'TotalNumberOfDeployActionsExceeded' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionsValidationErrorTotalNumberOfDeployActionsExceeded.');
        return new self(
            totalNumberOfDeployActionsExceeded: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['TotalNumberOfDeployActionsExceeded'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorTotalNumberOfDeployActionsExceededPayload',
  'nullable' => false,
), 'TotalNumberOfDeployActionsExceeded')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['TotalNumberOfDeployActionsExceeded'] = $this->totalNumberOfDeployActionsExceeded;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'TotalNumberOfDeployActionsExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorTotalNumberOfDeployActionsExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'TotalNumberOfDeployActionsExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'TotalNumberOfDeployActionsExceeded',
    'tag' => 'TotalNumberOfDeployActionsExceeded',
    'payload' => 'ActionsValidationErrorTotalNumberOfDeployActionsExceededPayload',
  ),
), 'ActionsValidationErrorTotalNumberOfDeployActionsExceeded'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'TotalNumberOfDeployActionsExceeded' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorTotalNumberOfDeployActionsExceededPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'TotalNumberOfDeployActionsExceeded',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'TotalNumberOfDeployActionsExceeded',
    'tag' => 'TotalNumberOfDeployActionsExceeded',
    'payload' => 'ActionsValidationErrorTotalNumberOfDeployActionsExceededPayload',
  ),
), 'ActionsValidationErrorTotalNumberOfDeployActionsExceeded');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
