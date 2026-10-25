<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class DeterministicAccountStateInitV1 implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\GlobalContractIdentifier
         */
        public \Near\JsonRpc\Generated\Models\GlobalContractIdentifier $code,
        /**
         * @var array<string, string>|\stdClass
         */
        public array|\stdClass $data,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->code, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GlobalContractIdentifier',
  'nullable' => false,
), 'code');
        \Near\JsonRpc\Models\TypeGuard::assert($this->data, array (
  'additionalProperties' => 
  array (
    'type' => 'string',
  ),
  'type' => 'object',
), 'data');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for DeterministicAccountStateInitV1.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('code', $data)) throw new \InvalidArgumentException('Missing required field: code');
        if (!array_key_exists('data', $data)) throw new \InvalidArgumentException('Missing required field: data');
        $extra = array_diff_key($data, array (
  'code' => true,
  'data' => true,
));
        return new self(
            code: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['code'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GlobalContractIdentifier',
  'nullable' => false,
), 'code'),
            data: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['data'], array (
  'additionalProperties' => 
  array (
    'type' => 'string',
  ),
  'type' => 'object',
), 'data'),
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
        $data['code'] = $this->code;
        $data['data'] = $this->data;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'code' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GlobalContractIdentifier',
      'nullable' => false,
    ),
    'data' => 
    array (
      'additionalProperties' => 
      array (
        'type' => 'string',
      ),
      'type' => 'object',
    ),
  ),
  'required' => 
  array (
    0 => 'code',
    1 => 'data',
  ),
  'type' => 'object',
), 'DeterministicAccountStateInitV1'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'code' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GlobalContractIdentifier',
      'nullable' => false,
    ),
    'data' => 
    array (
      'additionalProperties' => 
      array (
        'type' => 'string',
      ),
      'type' => 'object',
    ),
  ),
  'required' => 
  array (
    0 => 'code',
    1 => 'data',
  ),
  'type' => 'object',
), 'DeterministicAccountStateInitV1');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
