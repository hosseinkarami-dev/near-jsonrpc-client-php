<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Sets a Wasm code to a receiver_id
 */
final readonly class NonDelegateActionDeployContract implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\DeployContractAction
         */
        public \Near\JsonRpc\Generated\Models\DeployContractAction $deployContract
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->deployContract, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DeployContractAction',
  'nullable' => false,
), 'DeployContract');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for NonDelegateActionDeployContract.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('DeployContract', $data)) throw new \InvalidArgumentException('Missing required field: DeployContract');
        $unknown = array_diff_key($data, array (
  'DeployContract' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in NonDelegateActionDeployContract.');
        return new self(
            deployContract: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['DeployContract'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DeployContractAction',
  'nullable' => false,
), 'DeployContract')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['DeployContract'] = $this->deployContract;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'DeployContract' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DeployContractAction',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'DeployContract',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'DeployContract',
    'tag' => 'DeployContract',
    'payload' => 'DeployContractAction',
  ),
), 'NonDelegateActionDeployContract'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'DeployContract' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DeployContractAction',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'DeployContract',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'DeployContract',
    'tag' => 'DeployContract',
    'payload' => 'DeployContractAction',
  ),
), 'NonDelegateActionDeployContract');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
