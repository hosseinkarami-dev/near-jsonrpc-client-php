<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Use global contract action
 */
final readonly class UseGlobalContractAction implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\GlobalContractIdentifier
         */
        public \Near\JsonRpc\Generated\Models\GlobalContractIdentifier $contractIdentifier,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->contractIdentifier, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GlobalContractIdentifier',
  'nullable' => false,
), 'contract_identifier');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for UseGlobalContractAction.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('contract_identifier', $data)) throw new \InvalidArgumentException('Missing required field: contract_identifier');
        $extra = array_diff_key($data, array (
  'contract_identifier' => true,
));
        return new self(
            contractIdentifier: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['contract_identifier'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GlobalContractIdentifier',
  'nullable' => false,
), 'contract_identifier'),
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
        $data['contract_identifier'] = $this->contractIdentifier;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'contract_identifier' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GlobalContractIdentifier',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'contract_identifier',
  ),
  'type' => 'object',
), 'UseGlobalContractAction'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'contract_identifier' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GlobalContractIdentifier',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'contract_identifier',
  ),
  'type' => 'object',
), 'UseGlobalContractAction');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
