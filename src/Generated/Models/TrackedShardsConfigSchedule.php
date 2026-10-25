<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Rotate between these sets of tracked shards.
 * Used to simulate the behavior of chunk only producers without staking tokens.
 */
final readonly class TrackedShardsConfigSchedule implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var list<list<\Near\JsonRpc\Generated\Models\ShardId>>
         */
        public array $schedule
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->schedule, array (
  'items' => 
  array (
    'items' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
      'nullable' => false,
    ),
    'type' => 'array',
  ),
  'type' => 'array',
), 'Schedule');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for TrackedShardsConfigSchedule.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('Schedule', $data)) throw new \InvalidArgumentException('Missing required field: Schedule');
        $unknown = array_diff_key($data, array (
  'Schedule' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in TrackedShardsConfigSchedule.');
        return new self(
            schedule: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['Schedule'], array (
  'items' => 
  array (
    'items' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
      'nullable' => false,
    ),
    'type' => 'array',
  ),
  'type' => 'array',
), 'Schedule')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['Schedule'] = $this->schedule;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'additionalProperties' => false,
  'properties' => 
  array (
    'Schedule' => 
    array (
      'items' => 
      array (
        'items' => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
          'nullable' => false,
        ),
        'type' => 'array',
      ),
      'type' => 'array',
    ),
  ),
  'required' => 
  array (
    0 => 'Schedule',
  ),
  'type' => 'object',
  'x-php-union' => 
  array (
    'label' => 'Schedule',
  ),
), 'TrackedShardsConfigSchedule'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'additionalProperties' => false,
  'properties' => 
  array (
    'Schedule' => 
    array (
      'items' => 
      array (
        'items' => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ShardId',
          'nullable' => false,
        ),
        'type' => 'array',
      ),
      'type' => 'array',
    ),
  ),
  'required' => 
  array (
    0 => 'Schedule',
  ),
  'type' => 'object',
  'x-php-union' => 
  array (
    'label' => 'Schedule',
  ),
), 'TrackedShardsConfigSchedule');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
