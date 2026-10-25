<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class RpcViewAccessKeyErrorInternalErrorInfo implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var string
         */
        public string $errorMessage,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->errorMessage, array (
  'type' => 'string',
), 'error_message');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcViewAccessKeyErrorInternalErrorInfo.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('error_message', $data)) throw new \InvalidArgumentException('Missing required field: error_message');
        $extra = array_diff_key($data, array (
  'error_message' => true,
));
        return new self(
            errorMessage: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['error_message'], array (
  'type' => 'string',
), 'error_message'),
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
        $data['error_message'] = $this->errorMessage;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'error_message' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'error_message',
  ),
  'type' => 'object',
), 'RpcViewAccessKeyErrorInternalErrorInfo'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'error_message' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'error_message',
  ),
  'type' => 'object',
), 'RpcViewAccessKeyErrorInternalErrorInfo');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
