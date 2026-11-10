<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The compute used by the chunk's earlier external calls reached their share of the chunk's
 * compute limit.
 */
final readonly class ExternalCallChunkLimitCompute implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ExternalCallChunkLimitComputePayload
         */
        public \Near\JsonRpc\Generated\Models\ExternalCallChunkLimitComputePayload $compute
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->compute, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExternalCallChunkLimitComputePayload',
  'nullable' => false,
), 'Compute');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ExternalCallChunkLimitCompute.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('Compute', $data)) throw new \InvalidArgumentException('Missing required field: Compute');
        $unknown = array_diff_key($data, array (
  'Compute' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ExternalCallChunkLimitCompute.');
        return new self(
            compute: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['Compute'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExternalCallChunkLimitComputePayload',
  'nullable' => false,
), 'Compute')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['Compute'] = $this->compute;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'Compute' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExternalCallChunkLimitComputePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'Compute',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'Compute',
    'tag' => 'Compute',
    'payload' => 'ExternalCallChunkLimitComputePayload',
  ),
), 'ExternalCallChunkLimitCompute'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'Compute' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExternalCallChunkLimitComputePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'Compute',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'Compute',
    'tag' => 'Compute',
    'payload' => 'ExternalCallChunkLimitComputePayload',
  ),
), 'ExternalCallChunkLimitCompute');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
