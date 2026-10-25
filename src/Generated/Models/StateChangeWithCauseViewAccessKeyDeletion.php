<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class StateChangeWithCauseViewAccessKeyDeletion implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\StateChangeWithCauseViewAccessKeyDeletionChange
         */
        public \Near\JsonRpc\Generated\Models\StateChangeWithCauseViewAccessKeyDeletionChange $change,
        /**
         * @var 'access_key_deletion'
         */
        public string $type,
        /**
         * @var \Near\JsonRpc\Generated\Models\StateChangeCauseView
         */
        public \Near\JsonRpc\Generated\Models\StateChangeCauseView $cause,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->change, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeWithCauseViewAccessKeyDeletionChange',
  'nullable' => false,
), 'change');
        \Near\JsonRpc\Models\TypeGuard::assert($this->type, array (
  'enum' => 
  array (
    0 => 'access_key_deletion',
  ),
  'type' => 'string',
), 'type');
        \Near\JsonRpc\Models\TypeGuard::assert($this->cause, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeCauseView',
  'nullable' => false,
), 'cause');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for StateChangeWithCauseViewAccessKeyDeletion.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('type', $data)) throw new \InvalidArgumentException('Missing required field: type');
        if (!array_key_exists('change', $data)) throw new \InvalidArgumentException('Missing required field: change');
        if (!array_key_exists('cause', $data)) throw new \InvalidArgumentException('Missing required field: cause');
        $extra = array_diff_key($data, array (
  'change' => true,
  'type' => true,
  'cause' => true,
));
        return new self(
            change: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['change'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeWithCauseViewAccessKeyDeletionChange',
  'nullable' => false,
), 'change'),
            type: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['type'], array (
  'enum' => 
  array (
    0 => 'access_key_deletion',
  ),
  'type' => 'string',
), 'type'),
            cause: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['cause'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeCauseView',
  'nullable' => false,
), 'cause'),
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
        $data['change'] = $this->change;
        $data['type'] = $this->type;
        $data['cause'] = $this->cause;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'change' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeWithCauseViewAccessKeyDeletionChange',
      'nullable' => false,
    ),
    'type' => 
    array (
      'enum' => 
      array (
        0 => 'access_key_deletion',
      ),
      'type' => 'string',
    ),
    'cause' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeCauseView',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'type',
    1 => 'change',
    2 => 'cause',
  ),
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'access_key_deletion',
  ),
), 'StateChangeWithCauseViewAccessKeyDeletion'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'change' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeWithCauseViewAccessKeyDeletionChange',
      'nullable' => false,
    ),
    'type' => 
    array (
      'enum' => 
      array (
        0 => 'access_key_deletion',
      ),
      'type' => 'string',
    ),
    'cause' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeCauseView',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'type',
    1 => 'change',
    2 => 'cause',
  ),
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'access_key_deletion',
  ),
), 'StateChangeWithCauseViewAccessKeyDeletion');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
