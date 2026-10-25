<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class NonDelegateActionUniversalStateInit implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\UniversalStateInitAction
         */
        public \Near\JsonRpc\Generated\Models\UniversalStateInitAction $universalStateInit
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->universalStateInit, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\UniversalStateInitAction',
  'nullable' => false,
), 'UniversalStateInit');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for NonDelegateActionUniversalStateInit.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('UniversalStateInit', $data)) throw new \InvalidArgumentException('Missing required field: UniversalStateInit');
        $unknown = array_diff_key($data, array (
  'UniversalStateInit' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in NonDelegateActionUniversalStateInit.');
        return new self(
            universalStateInit: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['UniversalStateInit'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\UniversalStateInitAction',
  'nullable' => false,
), 'UniversalStateInit')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['UniversalStateInit'] = $this->universalStateInit;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'UniversalStateInit' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\UniversalStateInitAction',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'UniversalStateInit',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'UniversalStateInit',
    'tag' => 'UniversalStateInit',
    'payload' => 'UniversalStateInitAction',
  ),
), 'NonDelegateActionUniversalStateInit'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'UniversalStateInit' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\UniversalStateInitAction',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'UniversalStateInit',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'UniversalStateInit',
    'tag' => 'UniversalStateInit',
    'payload' => 'UniversalStateInitAction',
  ),
), 'NonDelegateActionUniversalStateInit');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
