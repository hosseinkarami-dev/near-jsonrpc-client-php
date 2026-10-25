<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class RpcTransactionErrorInternalErrorInfo implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var string
         */
        public string $debugInfo,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->debugInfo, array (
  'type' => 'string',
), 'debug_info');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcTransactionErrorInternalErrorInfo.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('debug_info', $data)) throw new \InvalidArgumentException('Missing required field: debug_info');
        $extra = array_diff_key($data, array (
  'debug_info' => true,
));
        return new self(
            debugInfo: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['debug_info'], array (
  'type' => 'string',
), 'debug_info'),
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
        $data['debug_info'] = $this->debugInfo;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'debug_info' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'debug_info',
  ),
  'type' => 'object',
), 'RpcTransactionErrorInternalErrorInfo'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'debug_info' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'debug_info',
  ),
  'type' => 'object',
), 'RpcTransactionErrorInternalErrorInfo');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
