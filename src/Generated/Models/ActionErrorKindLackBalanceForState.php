<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * ActionReceipt can't be completed, because the remaining balance will not be enough to cover storage.
 */
final readonly class ActionErrorKindLackBalanceForState implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionErrorKindLackBalanceForStatePayload
         */
        public \Near\JsonRpc\Generated\Models\ActionErrorKindLackBalanceForStatePayload $lackBalanceForState
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->lackBalanceForState, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindLackBalanceForStatePayload',
  'nullable' => false,
), 'LackBalanceForState');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionErrorKindLackBalanceForState.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('LackBalanceForState', $data)) throw new \InvalidArgumentException('Missing required field: LackBalanceForState');
        $unknown = array_diff_key($data, array (
  'LackBalanceForState' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionErrorKindLackBalanceForState.');
        return new self(
            lackBalanceForState: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['LackBalanceForState'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindLackBalanceForStatePayload',
  'nullable' => false,
), 'LackBalanceForState')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['LackBalanceForState'] = $this->lackBalanceForState;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'LackBalanceForState' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindLackBalanceForStatePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'LackBalanceForState',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'LackBalanceForState',
    'tag' => 'LackBalanceForState',
    'payload' => 'ActionErrorKindLackBalanceForStatePayload',
  ),
), 'ActionErrorKindLackBalanceForState'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'LackBalanceForState' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindLackBalanceForStatePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'LackBalanceForState',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'LackBalanceForState',
    'tag' => 'LackBalanceForState',
    'payload' => 'ActionErrorKindLackBalanceForStatePayload',
  ),
), 'ActionErrorKindLackBalanceForState');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
