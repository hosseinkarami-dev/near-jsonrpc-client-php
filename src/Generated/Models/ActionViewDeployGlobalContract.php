<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class ActionViewDeployGlobalContract implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionViewDeployGlobalContractPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionViewDeployGlobalContractPayload $deployGlobalContract
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->deployGlobalContract, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewDeployGlobalContractPayload',
  'nullable' => false,
), 'DeployGlobalContract');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionViewDeployGlobalContract.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('DeployGlobalContract', $data)) throw new \InvalidArgumentException('Missing required field: DeployGlobalContract');
        $unknown = array_diff_key($data, array (
  'DeployGlobalContract' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionViewDeployGlobalContract.');
        return new self(
            deployGlobalContract: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['DeployGlobalContract'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewDeployGlobalContractPayload',
  'nullable' => false,
), 'DeployGlobalContract')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['DeployGlobalContract'] = $this->deployGlobalContract;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'DeployGlobalContract' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewDeployGlobalContractPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'DeployGlobalContract',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'DeployGlobalContract',
    'tag' => 'DeployGlobalContract',
    'payload' => 'ActionViewDeployGlobalContractPayload',
  ),
), 'ActionViewDeployGlobalContract'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'DeployGlobalContract' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewDeployGlobalContractPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'DeployGlobalContract',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'DeployGlobalContract',
    'tag' => 'DeployGlobalContract',
    'payload' => 'ActionViewDeployGlobalContractPayload',
  ),
), 'ActionViewDeployGlobalContract');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
