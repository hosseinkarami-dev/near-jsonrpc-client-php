<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Deploy global contract action
 */
final readonly class DeployGlobalContractAction implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * WebAssembly binary
         *
         * @var string
         */
        public string $code,
        /**
         * @var \Near\JsonRpc\Generated\Models\GlobalContractDeployMode
         */
        public \Near\JsonRpc\Generated\Models\GlobalContractDeployMode $deployMode,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->code, array (
  'type' => 'string',
), 'code');
        \Near\JsonRpc\Models\TypeGuard::assert($this->deployMode, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GlobalContractDeployMode',
  'nullable' => false,
), 'deploy_mode');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for DeployGlobalContractAction.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('code', $data)) throw new \InvalidArgumentException('Missing required field: code');
        if (!array_key_exists('deploy_mode', $data)) throw new \InvalidArgumentException('Missing required field: deploy_mode');
        $extra = array_diff_key($data, array (
  'code' => true,
  'deploy_mode' => true,
));
        return new self(
            code: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['code'], array (
  'type' => 'string',
), 'code'),
            deployMode: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['deploy_mode'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GlobalContractDeployMode',
  'nullable' => false,
), 'deploy_mode'),
            _extra: $extra
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = $this->extra;
        $data['code'] = $this->code;
        $data['deploy_mode'] = $this->deployMode;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'code' => 
    array (
      'type' => 'string',
    ),
    'deploy_mode' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GlobalContractDeployMode',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'code',
    1 => 'deploy_mode',
  ),
  'type' => 'object',
), 'DeployGlobalContractAction'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'code' => 
    array (
      'type' => 'string',
    ),
    'deploy_mode' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GlobalContractDeployMode',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'code',
    1 => 'deploy_mode',
  ),
  'type' => 'object',
), 'DeployGlobalContractAction');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
