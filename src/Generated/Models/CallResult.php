<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * A result returned by contract method
 */
final readonly class CallResult implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var list<string>
         */
        public array $logs,
        /**
         * @var list<int>
         */
        public array $result,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->logs, array (
  'items' => 
  array (
    'type' => 'string',
  ),
  'type' => 'array',
), 'logs');
        \Near\JsonRpc\Models\TypeGuard::assert($this->result, array (
  'items' => 
  array (
    'format' => 'uint8',
    'maximum' => 255,
    'minimum' => 0,
    'type' => 'integer',
  ),
  'type' => 'array',
), 'result');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for CallResult.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('result', $data)) throw new \InvalidArgumentException('Missing required field: result');
        if (!array_key_exists('logs', $data)) throw new \InvalidArgumentException('Missing required field: logs');
        $extra = array_diff_key($data, array (
  'logs' => true,
  'result' => true,
));
        return new self(
            logs: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['logs'], array (
  'items' => 
  array (
    'type' => 'string',
  ),
  'type' => 'array',
), 'logs'),
            result: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['result'], array (
  'items' => 
  array (
    'format' => 'uint8',
    'maximum' => 255,
    'minimum' => 0,
    'type' => 'integer',
  ),
  'type' => 'array',
), 'result'),
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
        $data['logs'] = $this->logs;
        $data['result'] = $this->result;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'logs' => 
    array (
      'items' => 
      array (
        'type' => 'string',
      ),
      'type' => 'array',
    ),
    'result' => 
    array (
      'items' => 
      array (
        'format' => 'uint8',
        'maximum' => 255,
        'minimum' => 0,
        'type' => 'integer',
      ),
      'type' => 'array',
    ),
  ),
  'required' => 
  array (
    0 => 'result',
    1 => 'logs',
  ),
  'type' => 'object',
), 'CallResult'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'logs' => 
    array (
      'items' => 
      array (
        'type' => 'string',
      ),
      'type' => 'array',
    ),
    'result' => 
    array (
      'items' => 
      array (
        'format' => 'uint8',
        'maximum' => 255,
        'minimum' => 0,
        'type' => 'integer',
      ),
      'type' => 'array',
    ),
  ),
  'required' => 
  array (
    0 => 'result',
    1 => 'logs',
  ),
  'type' => 'object',
), 'CallResult');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
