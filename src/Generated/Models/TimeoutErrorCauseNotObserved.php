<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The node never observed the transaction on chain.
 */
final readonly class TimeoutErrorCauseNotObserved implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var 'NOT_OBSERVED'
         */
        public string $cause,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->cause, array (
  'enum' => 
  array (
    0 => 'NOT_OBSERVED',
  ),
  'type' => 'string',
), 'cause');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for TimeoutErrorCauseNotObserved.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('cause', $data)) throw new \InvalidArgumentException('Missing required field: cause');
        $extra = array_diff_key($data, array (
  'cause' => true,
));
        return new self(
            cause: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['cause'], array (
  'enum' => 
  array (
    0 => 'NOT_OBSERVED',
  ),
  'type' => 'string',
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
        $data['cause'] = $this->cause;
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
        0 => 'NOT_OBSERVED',
      ),
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'cause',
  ),
  'type' => 'object',
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'NOT_OBSERVED',
  ),
), 'TimeoutErrorCauseNotObserved'));
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
        0 => 'NOT_OBSERVED',
      ),
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'cause',
  ),
  'type' => 'object',
  'additionalProperties' => true,
  'x-php-union' => 
  array (
    'label' => 'NOT_OBSERVED',
  ),
), 'TimeoutErrorCauseNotObserved');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
