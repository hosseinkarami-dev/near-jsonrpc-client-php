<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * An error happened during Action execution
 */
final readonly class ActionError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * The kind of ActionError happened
         *
         * @var \Near\JsonRpc\Generated\Models\ActionErrorKind
         */
        public \Near\JsonRpc\Generated\Models\ActionErrorKind $kind,
        /**
         * Index of the failed action in the transaction.
         * Action index is not defined if ActionError.kind is `ActionErrorKind::LackBalanceForState`
         *
         * @var \Near\JsonRpc\Models\OptionalValue<int|string|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $index = new \Near\JsonRpc\Models\OptionalValue(),
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->kind, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKind',
  'nullable' => false,
), 'kind');
        if ($this->index->present) \Near\JsonRpc\Models\TypeGuard::assert($this->index->value, array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'index');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionError.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('kind', $data)) throw new \InvalidArgumentException('Missing required field: kind');
        $extra = array_diff_key($data, array (
  'index' => true,
  'kind' => true,
));
        return new self(
            kind: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['kind'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKind',
  'nullable' => false,
), 'kind'),
            index: array_key_exists('index', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['index'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'nullable' => true,
  'type' => 'integer',
), 'index')) : new \Near\JsonRpc\Models\OptionalValue(),
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
        $data['kind'] = $this->kind;
        if ($this->index->present) $data['index'] = $this->index->value;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'index' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'kind' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKind',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'kind',
  ),
  'type' => 'object',
), 'ActionError'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'index' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'nullable' => true,
      'type' => 'integer',
    ),
    'kind' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKind',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'kind',
  ),
  'type' => 'object',
), 'ActionError');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
