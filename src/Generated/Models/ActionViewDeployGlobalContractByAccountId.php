<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class ActionViewDeployGlobalContractByAccountId implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionViewDeployGlobalContractByAccountIdPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionViewDeployGlobalContractByAccountIdPayload $deployGlobalContractByAccountId
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->deployGlobalContractByAccountId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewDeployGlobalContractByAccountIdPayload',
  'nullable' => false,
), 'DeployGlobalContractByAccountId');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionViewDeployGlobalContractByAccountId.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('DeployGlobalContractByAccountId', $data)) throw new \InvalidArgumentException('Missing required field: DeployGlobalContractByAccountId');
        $unknown = array_diff_key($data, array (
  'DeployGlobalContractByAccountId' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionViewDeployGlobalContractByAccountId.');
        return new self(
            deployGlobalContractByAccountId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['DeployGlobalContractByAccountId'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewDeployGlobalContractByAccountIdPayload',
  'nullable' => false,
), 'DeployGlobalContractByAccountId')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['DeployGlobalContractByAccountId'] = $this->deployGlobalContractByAccountId;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'DeployGlobalContractByAccountId' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewDeployGlobalContractByAccountIdPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'DeployGlobalContractByAccountId',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'DeployGlobalContractByAccountId',
    'tag' => 'DeployGlobalContractByAccountId',
    'payload' => 'ActionViewDeployGlobalContractByAccountIdPayload',
  ),
), 'ActionViewDeployGlobalContractByAccountId'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'DeployGlobalContractByAccountId' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewDeployGlobalContractByAccountIdPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'DeployGlobalContractByAccountId',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'DeployGlobalContractByAccountId',
    'tag' => 'DeployGlobalContractByAccountId',
    'payload' => 'ActionViewDeployGlobalContractByAccountIdPayload',
  ),
), 'ActionViewDeployGlobalContractByAccountId');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
