<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Validator didn't produce enough blocks.
 */
final readonly class ValidatorKickoutReasonNotEnoughBlocks implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ValidatorKickoutReasonNotEnoughBlocksPayload
         */
        public \Near\JsonRpc\Generated\Models\ValidatorKickoutReasonNotEnoughBlocksPayload $notEnoughBlocks
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->notEnoughBlocks, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutReasonNotEnoughBlocksPayload',
  'nullable' => false,
), 'NotEnoughBlocks');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ValidatorKickoutReasonNotEnoughBlocks.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('NotEnoughBlocks', $data)) throw new \InvalidArgumentException('Missing required field: NotEnoughBlocks');
        $unknown = array_diff_key($data, array (
  'NotEnoughBlocks' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ValidatorKickoutReasonNotEnoughBlocks.');
        return new self(
            notEnoughBlocks: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['NotEnoughBlocks'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutReasonNotEnoughBlocksPayload',
  'nullable' => false,
), 'NotEnoughBlocks')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['NotEnoughBlocks'] = $this->notEnoughBlocks;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'NotEnoughBlocks' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutReasonNotEnoughBlocksPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'NotEnoughBlocks',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'NotEnoughBlocks',
    'tag' => 'NotEnoughBlocks',
    'payload' => 'ValidatorKickoutReasonNotEnoughBlocksPayload',
  ),
), 'ValidatorKickoutReasonNotEnoughBlocks'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'NotEnoughBlocks' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutReasonNotEnoughBlocksPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'NotEnoughBlocks',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'NotEnoughBlocks',
    'tag' => 'NotEnoughBlocks',
    'payload' => 'ValidatorKickoutReasonNotEnoughBlocksPayload',
  ),
), 'ValidatorKickoutReasonNotEnoughBlocks');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
