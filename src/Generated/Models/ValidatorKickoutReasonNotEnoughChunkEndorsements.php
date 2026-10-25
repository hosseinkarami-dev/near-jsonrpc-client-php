<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Validator didn't produce enough chunk endorsements.
 */
final readonly class ValidatorKickoutReasonNotEnoughChunkEndorsements implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ValidatorKickoutReasonNotEnoughChunkEndorsementsPayload
         */
        public \Near\JsonRpc\Generated\Models\ValidatorKickoutReasonNotEnoughChunkEndorsementsPayload $notEnoughChunkEndorsements
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->notEnoughChunkEndorsements, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutReasonNotEnoughChunkEndorsementsPayload',
  'nullable' => false,
), 'NotEnoughChunkEndorsements');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ValidatorKickoutReasonNotEnoughChunkEndorsements.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('NotEnoughChunkEndorsements', $data)) throw new \InvalidArgumentException('Missing required field: NotEnoughChunkEndorsements');
        $unknown = array_diff_key($data, array (
  'NotEnoughChunkEndorsements' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ValidatorKickoutReasonNotEnoughChunkEndorsements.');
        return new self(
            notEnoughChunkEndorsements: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['NotEnoughChunkEndorsements'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutReasonNotEnoughChunkEndorsementsPayload',
  'nullable' => false,
), 'NotEnoughChunkEndorsements')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['NotEnoughChunkEndorsements'] = $this->notEnoughChunkEndorsements;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'NotEnoughChunkEndorsements' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutReasonNotEnoughChunkEndorsementsPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'NotEnoughChunkEndorsements',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'NotEnoughChunkEndorsements',
    'tag' => 'NotEnoughChunkEndorsements',
    'payload' => 'ValidatorKickoutReasonNotEnoughChunkEndorsementsPayload',
  ),
), 'ValidatorKickoutReasonNotEnoughChunkEndorsements'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'NotEnoughChunkEndorsements' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutReasonNotEnoughChunkEndorsementsPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'NotEnoughChunkEndorsements',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'NotEnoughChunkEndorsements',
    'tag' => 'NotEnoughChunkEndorsements',
    'payload' => 'ValidatorKickoutReasonNotEnoughChunkEndorsementsPayload',
  ),
), 'ValidatorKickoutReasonNotEnoughChunkEndorsements');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
