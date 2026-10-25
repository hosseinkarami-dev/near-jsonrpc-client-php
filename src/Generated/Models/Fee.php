<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Costs associated with an object that can only be sent over the network (and executed
 * by the receiver).
 * NOTE: `send_sir` or `send_not_sir` fees are usually burned when the item is being created.
 * And `execution` fee is burned when the item is being executed.
 */
final readonly class Fee implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * Fee for executing the object.
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas
         */
        public \Near\JsonRpc\Generated\Models\NearGas $execution,
        /**
         * Fee for sending an object potentially across the shards.
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas
         */
        public \Near\JsonRpc\Generated\Models\NearGas $sendNotSir,
        /**
         * Fee for sending an object from the sender to itself, guaranteeing that it does not leave
         * the shard.
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas
         */
        public \Near\JsonRpc\Generated\Models\NearGas $sendSir,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->execution, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'execution');
        \Near\JsonRpc\Models\TypeGuard::assert($this->sendNotSir, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'send_not_sir');
        \Near\JsonRpc\Models\TypeGuard::assert($this->sendSir, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'send_sir');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for Fee.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('send_sir', $data)) throw new \InvalidArgumentException('Missing required field: send_sir');
        if (!array_key_exists('send_not_sir', $data)) throw new \InvalidArgumentException('Missing required field: send_not_sir');
        if (!array_key_exists('execution', $data)) throw new \InvalidArgumentException('Missing required field: execution');
        $extra = array_diff_key($data, array (
  'execution' => true,
  'send_not_sir' => true,
  'send_sir' => true,
));
        return new self(
            execution: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['execution'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'execution'),
            sendNotSir: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['send_not_sir'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'send_not_sir'),
            sendSir: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['send_sir'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'send_sir'),
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
        $data['execution'] = $this->execution;
        $data['send_not_sir'] = $this->sendNotSir;
        $data['send_sir'] = $this->sendSir;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'execution' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'send_not_sir' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'send_sir' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'send_sir',
    1 => 'send_not_sir',
    2 => 'execution',
  ),
  'type' => 'object',
), 'Fee'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'execution' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'send_not_sir' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'send_sir' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'send_sir',
    1 => 'send_not_sir',
    2 => 'execution',
  ),
  'type' => 'object',
), 'Fee');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
