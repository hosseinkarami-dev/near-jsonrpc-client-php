<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class DeterministicStateInitAction implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\NearToken
         */
        public \Near\JsonRpc\Generated\Models\NearToken $deposit,
        /**
         * @var \Near\JsonRpc\Generated\Models\DeterministicAccountStateInit
         */
        public \Near\JsonRpc\Generated\Models\DeterministicAccountStateInit $stateInit,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->deposit, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'deposit');
        \Near\JsonRpc\Models\TypeGuard::assert($this->stateInit, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DeterministicAccountStateInit',
  'nullable' => false,
), 'state_init');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for DeterministicStateInitAction.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('state_init', $data)) throw new \InvalidArgumentException('Missing required field: state_init');
        if (!array_key_exists('deposit', $data)) throw new \InvalidArgumentException('Missing required field: deposit');
        $extra = array_diff_key($data, array (
  'deposit' => true,
  'state_init' => true,
));
        return new self(
            deposit: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['deposit'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'deposit'),
            stateInit: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['state_init'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DeterministicAccountStateInit',
  'nullable' => false,
), 'state_init'),
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
        $data['deposit'] = $this->deposit;
        $data['state_init'] = $this->stateInit;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'deposit' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'state_init' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DeterministicAccountStateInit',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'state_init',
    1 => 'deposit',
  ),
  'type' => 'object',
), 'DeterministicStateInitAction'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'deposit' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'state_init' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DeterministicAccountStateInit',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'state_init',
    1 => 'deposit',
  ),
  'type' => 'object',
), 'DeterministicStateInitAction');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
