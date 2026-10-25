<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class ErrorWrapperForRpcReceiptToTxErrorHandlerError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\RpcReceiptToTxError
         */
        public \Near\JsonRpc\Generated\Models\RpcReceiptToTxError $cause,
        /**
         * @var 'HANDLER_ERROR'
         */
        public string $name,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->cause, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcReceiptToTxError',
  'nullable' => false,
), 'cause');
        \Near\JsonRpc\Models\TypeGuard::assert($this->name, array (
  'enum' => 
  array (
    0 => 'HANDLER_ERROR',
  ),
  'type' => 'string',
), 'name');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ErrorWrapperForRpcReceiptToTxErrorHandlerError.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('name', $data)) throw new \InvalidArgumentException('Missing required field: name');
        if (!array_key_exists('cause', $data)) throw new \InvalidArgumentException('Missing required field: cause');
        $extra = array_diff_key($data, array (
  'cause' => true,
  'name' => true,
));
        return new self(
            cause: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['cause'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcReceiptToTxError',
  'nullable' => false,
), 'cause'),
            name: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['name'], array (
  'enum' => 
  array (
    0 => 'HANDLER_ERROR',
  ),
  'type' => 'string',
), 'name'),
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
        $data['cause'] = $this->cause;
        $data['name'] = $this->name;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'cause' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcReceiptToTxError',
      'nullable' => false,
    ),
    'name' => 
    array (
      'enum' => 
      array (
        0 => 'HANDLER_ERROR',
      ),
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'name',
    1 => 'cause',
  ),
  'type' => 'object',
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'HANDLER_ERROR',
  ),
), 'ErrorWrapperForRpcReceiptToTxErrorHandlerError'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'cause' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcReceiptToTxError',
      'nullable' => false,
    ),
    'name' => 
    array (
      'enum' => 
      array (
        0 => 'HANDLER_ERROR',
      ),
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'name',
    1 => 'cause',
  ),
  'type' => 'object',
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'HANDLER_ERROR',
  ),
), 'ErrorWrapperForRpcReceiptToTxErrorHandlerError');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
