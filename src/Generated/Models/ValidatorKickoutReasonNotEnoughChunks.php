<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Validator didn't produce enough chunks.
 */
final readonly class ValidatorKickoutReasonNotEnoughChunks implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ValidatorKickoutReasonNotEnoughChunksPayload
         */
        public \Near\JsonRpc\Generated\Models\ValidatorKickoutReasonNotEnoughChunksPayload $notEnoughChunks
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->notEnoughChunks, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutReasonNotEnoughChunksPayload',
  'nullable' => false,
), 'NotEnoughChunks');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ValidatorKickoutReasonNotEnoughChunks.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('NotEnoughChunks', $data)) throw new \InvalidArgumentException('Missing required field: NotEnoughChunks');
        $unknown = array_diff_key($data, array (
  'NotEnoughChunks' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ValidatorKickoutReasonNotEnoughChunks.');
        return new self(
            notEnoughChunks: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['NotEnoughChunks'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutReasonNotEnoughChunksPayload',
  'nullable' => false,
), 'NotEnoughChunks')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['NotEnoughChunks'] = $this->notEnoughChunks;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'NotEnoughChunks' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutReasonNotEnoughChunksPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'NotEnoughChunks',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'NotEnoughChunks',
    'tag' => 'NotEnoughChunks',
    'payload' => 'ValidatorKickoutReasonNotEnoughChunksPayload',
  ),
), 'ValidatorKickoutReasonNotEnoughChunks'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'NotEnoughChunks' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutReasonNotEnoughChunksPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'NotEnoughChunks',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'NotEnoughChunks',
    'tag' => 'NotEnoughChunks',
    'payload' => 'ValidatorKickoutReasonNotEnoughChunksPayload',
  ),
), 'ValidatorKickoutReasonNotEnoughChunks');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
