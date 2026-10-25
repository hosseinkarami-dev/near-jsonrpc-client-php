<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class RpcValidatorRequestEpochId implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\EpochId
         */
        public \Near\JsonRpc\Generated\Models\EpochId $epochId
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->epochId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\EpochId',
  'nullable' => false,
), 'epoch_id');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcValidatorRequestEpochId.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('epoch_id', $data)) throw new \InvalidArgumentException('Missing required field: epoch_id');
        $unknown = array_diff_key($data, array (
  'epoch_id' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in RpcValidatorRequestEpochId.');
        return new self(
            epochId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['epoch_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\EpochId',
  'nullable' => false,
), 'epoch_id')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['epoch_id'] = $this->epochId;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'epoch_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\EpochId',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'epoch_id',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'epoch_id',
    'tag' => 'epoch_id',
    'payload' => 'EpochId',
  ),
), 'RpcValidatorRequestEpochId'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'epoch_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\EpochId',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'epoch_id',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'epoch_id',
    'tag' => 'epoch_id',
    'payload' => 'EpochId',
  ),
), 'RpcValidatorRequestEpochId');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
