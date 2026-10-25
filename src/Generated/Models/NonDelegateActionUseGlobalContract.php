<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class NonDelegateActionUseGlobalContract implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\UseGlobalContractAction
         */
        public \Near\JsonRpc\Generated\Models\UseGlobalContractAction $useGlobalContract
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->useGlobalContract, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\UseGlobalContractAction',
  'nullable' => false,
), 'UseGlobalContract');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for NonDelegateActionUseGlobalContract.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('UseGlobalContract', $data)) throw new \InvalidArgumentException('Missing required field: UseGlobalContract');
        $unknown = array_diff_key($data, array (
  'UseGlobalContract' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in NonDelegateActionUseGlobalContract.');
        return new self(
            useGlobalContract: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['UseGlobalContract'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\UseGlobalContractAction',
  'nullable' => false,
), 'UseGlobalContract')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['UseGlobalContract'] = $this->useGlobalContract;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'UseGlobalContract' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\UseGlobalContractAction',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'UseGlobalContract',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'UseGlobalContract',
    'tag' => 'UseGlobalContract',
    'payload' => 'UseGlobalContractAction',
  ),
), 'NonDelegateActionUseGlobalContract'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'UseGlobalContract' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\UseGlobalContractAction',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'UseGlobalContract',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'UseGlobalContract',
    'tag' => 'UseGlobalContract',
    'payload' => 'UseGlobalContractAction',
  ),
), 'NonDelegateActionUseGlobalContract');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
