<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class ExecutionMetadataView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var int
         */
        public int $version,
        /**
         * One entry per action in the receipt (V4+ only): the contract attached
         * to the receiver account immediately before that action ran. The inner
         * `Option` is `Some` (a tagged contract object) when the account had a
         * contract and `None` (rendered as JSON `null`) when it did not (e.g. an
         * account with no code, or one that did not yet exist). The outer
         * `Option` is `None` for older metadata versions.
         *
         * @var \Near\JsonRpc\Models\OptionalValue<list<\Near\JsonRpc\Generated\Models\AccountContractView|null>|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $contracts = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<list<\Near\JsonRpc\Generated\Models\CostGasUsed>|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $gasProfile = new \Near\JsonRpc\Models\OptionalValue(),
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->version, array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'version');
        if ($this->contracts->present) \Near\JsonRpc\Models\TypeGuard::assert($this->contracts->value, array (
  'items' => 
  array (
    'anyOf' => 
    array (
      0 => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountContractView',
        'nullable' => false,
      ),
      1 => 
      array (
        'enum' => 
        array (
          0 => NULL,
        ),
        'nullable' => true,
        'type' => 'null',
      ),
    ),
  ),
  'nullable' => true,
  'type' => 'array',
), 'contracts');
        if ($this->gasProfile->present) \Near\JsonRpc\Models\TypeGuard::assert($this->gasProfile->value, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CostGasUsed',
    'nullable' => false,
  ),
  'nullable' => true,
  'type' => 'array',
), 'gas_profile');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ExecutionMetadataView.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('version', $data)) throw new \InvalidArgumentException('Missing required field: version');
        $extra = array_diff_key($data, array (
  'contracts' => true,
  'gas_profile' => true,
  'version' => true,
));
        return new self(
            version: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['version'], array (
  'format' => 'uint32',
  'minimum' => 0,
  'type' => 'integer',
), 'version'),
            contracts: array_key_exists('contracts', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['contracts'], array (
  'items' => 
  array (
    'anyOf' => 
    array (
      0 => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountContractView',
        'nullable' => false,
      ),
      1 => 
      array (
        'enum' => 
        array (
          0 => NULL,
        ),
        'nullable' => true,
        'type' => 'null',
      ),
    ),
  ),
  'nullable' => true,
  'type' => 'array',
), 'contracts')) : new \Near\JsonRpc\Models\OptionalValue(),
            gasProfile: array_key_exists('gas_profile', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['gas_profile'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CostGasUsed',
    'nullable' => false,
  ),
  'nullable' => true,
  'type' => 'array',
), 'gas_profile')) : new \Near\JsonRpc\Models\OptionalValue(),
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
        $data['version'] = $this->version;
        if ($this->contracts->present) $data['contracts'] = $this->contracts->value;
        if ($this->gasProfile->present) $data['gas_profile'] = $this->gasProfile->value;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'contracts' => 
    array (
      'items' => 
      array (
        'anyOf' => 
        array (
          0 => 
          array (
            'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountContractView',
            'nullable' => false,
          ),
          1 => 
          array (
            'enum' => 
            array (
              0 => NULL,
            ),
            'nullable' => true,
            'type' => 'null',
          ),
        ),
      ),
      'nullable' => true,
      'type' => 'array',
    ),
    'gas_profile' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CostGasUsed',
        'nullable' => false,
      ),
      'nullable' => true,
      'type' => 'array',
    ),
    'version' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'version',
  ),
  'type' => 'object',
), 'ExecutionMetadataView'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'contracts' => 
    array (
      'items' => 
      array (
        'anyOf' => 
        array (
          0 => 
          array (
            'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountContractView',
            'nullable' => false,
          ),
          1 => 
          array (
            'enum' => 
            array (
              0 => NULL,
            ),
            'nullable' => true,
            'type' => 'null',
          ),
        ),
      ),
      'nullable' => true,
      'type' => 'array',
    ),
    'gas_profile' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CostGasUsed',
        'nullable' => false,
      ),
      'nullable' => true,
      'type' => 'array',
    ),
    'version' => 
    array (
      'format' => 'uint32',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'version',
  ),
  'type' => 'object',
), 'ExecutionMetadataView');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
