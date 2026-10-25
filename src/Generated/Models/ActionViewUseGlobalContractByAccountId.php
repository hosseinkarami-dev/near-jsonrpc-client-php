<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class ActionViewUseGlobalContractByAccountId implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionViewUseGlobalContractByAccountIdPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionViewUseGlobalContractByAccountIdPayload $useGlobalContractByAccountId
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->useGlobalContractByAccountId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewUseGlobalContractByAccountIdPayload',
  'nullable' => false,
), 'UseGlobalContractByAccountId');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionViewUseGlobalContractByAccountId.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('UseGlobalContractByAccountId', $data)) throw new \InvalidArgumentException('Missing required field: UseGlobalContractByAccountId');
        $unknown = array_diff_key($data, array (
  'UseGlobalContractByAccountId' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionViewUseGlobalContractByAccountId.');
        return new self(
            useGlobalContractByAccountId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['UseGlobalContractByAccountId'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewUseGlobalContractByAccountIdPayload',
  'nullable' => false,
), 'UseGlobalContractByAccountId')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['UseGlobalContractByAccountId'] = $this->useGlobalContractByAccountId;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'UseGlobalContractByAccountId' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewUseGlobalContractByAccountIdPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'UseGlobalContractByAccountId',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'UseGlobalContractByAccountId',
    'tag' => 'UseGlobalContractByAccountId',
    'payload' => 'ActionViewUseGlobalContractByAccountIdPayload',
  ),
), 'ActionViewUseGlobalContractByAccountId'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'UseGlobalContractByAccountId' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewUseGlobalContractByAccountIdPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'UseGlobalContractByAccountId',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'UseGlobalContractByAccountId',
    'tag' => 'UseGlobalContractByAccountId',
    'payload' => 'ActionViewUseGlobalContractByAccountIdPayload',
  ),
), 'ActionViewUseGlobalContractByAccountId');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
