<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The transaction was observed but is still pending the requested finality. The
 * last-known status is included so the caller can re-poll for a higher finality.
 */
final readonly class TimeoutErrorCausePending implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var 'PENDING'
         */
        public string $cause,
        /**
         * @var \Near\JsonRpc\Generated\Models\RpcTransactionResponse
         */
        public \Near\JsonRpc\Generated\Models\RpcTransactionResponse $status,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->cause, array (
  'enum' => 
  array (
    0 => 'PENDING',
  ),
  'type' => 'string',
), 'cause');
        \Near\JsonRpc\Models\TypeGuard::assert($this->status, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcTransactionResponse',
  'nullable' => false,
), 'status');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for TimeoutErrorCausePending.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('cause', $data)) throw new \InvalidArgumentException('Missing required field: cause');
        if (!array_key_exists('status', $data)) throw new \InvalidArgumentException('Missing required field: status');
        $extra = array_diff_key($data, array (
  'cause' => true,
  'status' => true,
));
        return new self(
            cause: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['cause'], array (
  'enum' => 
  array (
    0 => 'PENDING',
  ),
  'type' => 'string',
), 'cause'),
            status: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['status'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcTransactionResponse',
  'nullable' => false,
), 'status'),
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
        $data['status'] = $this->status;
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
      'enum' => 
      array (
        0 => 'PENDING',
      ),
      'type' => 'string',
    ),
    'status' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcTransactionResponse',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'cause',
    1 => 'status',
  ),
  'type' => 'object',
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'PENDING',
  ),
), 'TimeoutErrorCausePending'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'cause' => 
    array (
      'enum' => 
      array (
        0 => 'PENDING',
      ),
      'type' => 'string',
    ),
    'status' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcTransactionResponse',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'cause',
    1 => 'status',
  ),
  'type' => 'object',
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'PENDING',
  ),
), 'TimeoutErrorCausePending');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
