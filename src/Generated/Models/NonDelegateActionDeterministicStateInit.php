<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class NonDelegateActionDeterministicStateInit implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\DeterministicStateInitAction
         */
        public \Near\JsonRpc\Generated\Models\DeterministicStateInitAction $deterministicStateInit
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->deterministicStateInit, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DeterministicStateInitAction',
  'nullable' => false,
), 'DeterministicStateInit');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for NonDelegateActionDeterministicStateInit.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('DeterministicStateInit', $data)) throw new \InvalidArgumentException('Missing required field: DeterministicStateInit');
        $unknown = array_diff_key($data, array (
  'DeterministicStateInit' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in NonDelegateActionDeterministicStateInit.');
        return new self(
            deterministicStateInit: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['DeterministicStateInit'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DeterministicStateInitAction',
  'nullable' => false,
), 'DeterministicStateInit')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['DeterministicStateInit'] = $this->deterministicStateInit;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'DeterministicStateInit' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DeterministicStateInitAction',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'DeterministicStateInit',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'DeterministicStateInit',
    'tag' => 'DeterministicStateInit',
    'payload' => 'DeterministicStateInitAction',
  ),
), 'NonDelegateActionDeterministicStateInit'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'DeterministicStateInit' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DeterministicStateInitAction',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'DeterministicStateInit',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'DeterministicStateInit',
    'tag' => 'DeterministicStateInit',
    'payload' => 'DeterministicStateInitAction',
  ),
), 'NonDelegateActionDeterministicStateInit');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
