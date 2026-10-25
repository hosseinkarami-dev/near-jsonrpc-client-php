<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class ReceiptEnumViewGlobalContractDistribution implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ReceiptEnumViewGlobalContractDistributionPayload
         */
        public \Near\JsonRpc\Generated\Models\ReceiptEnumViewGlobalContractDistributionPayload $globalContractDistribution
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->globalContractDistribution, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptEnumViewGlobalContractDistributionPayload',
  'nullable' => false,
), 'GlobalContractDistribution');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ReceiptEnumViewGlobalContractDistribution.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('GlobalContractDistribution', $data)) throw new \InvalidArgumentException('Missing required field: GlobalContractDistribution');
        $unknown = array_diff_key($data, array (
  'GlobalContractDistribution' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ReceiptEnumViewGlobalContractDistribution.');
        return new self(
            globalContractDistribution: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['GlobalContractDistribution'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptEnumViewGlobalContractDistributionPayload',
  'nullable' => false,
), 'GlobalContractDistribution')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['GlobalContractDistribution'] = $this->globalContractDistribution;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'GlobalContractDistribution' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptEnumViewGlobalContractDistributionPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'GlobalContractDistribution',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'GlobalContractDistribution',
    'tag' => 'GlobalContractDistribution',
    'payload' => 'ReceiptEnumViewGlobalContractDistributionPayload',
  ),
), 'ReceiptEnumViewGlobalContractDistribution'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'GlobalContractDistribution' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptEnumViewGlobalContractDistributionPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'GlobalContractDistribution',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'GlobalContractDistribution',
    'tag' => 'GlobalContractDistribution',
    'payload' => 'ReceiptEnumViewGlobalContractDistributionPayload',
  ),
), 'ReceiptEnumViewGlobalContractDistribution');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
