<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Happens when TX receiver_id doesn't exist (but action is not Action::CreateAccount)
 */
final readonly class ActionErrorKindAccountDoesNotExist implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionErrorKindAccountDoesNotExistPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionErrorKindAccountDoesNotExistPayload $accountDoesNotExist
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->accountDoesNotExist, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindAccountDoesNotExistPayload',
  'nullable' => false,
), 'AccountDoesNotExist');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionErrorKindAccountDoesNotExist.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('AccountDoesNotExist', $data)) throw new \InvalidArgumentException('Missing required field: AccountDoesNotExist');
        $unknown = array_diff_key($data, array (
  'AccountDoesNotExist' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionErrorKindAccountDoesNotExist.');
        return new self(
            accountDoesNotExist: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['AccountDoesNotExist'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindAccountDoesNotExistPayload',
  'nullable' => false,
), 'AccountDoesNotExist')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['AccountDoesNotExist'] = $this->accountDoesNotExist;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'AccountDoesNotExist' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindAccountDoesNotExistPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'AccountDoesNotExist',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'AccountDoesNotExist',
    'tag' => 'AccountDoesNotExist',
    'payload' => 'ActionErrorKindAccountDoesNotExistPayload',
  ),
), 'ActionErrorKindAccountDoesNotExist'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'AccountDoesNotExist' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindAccountDoesNotExistPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'AccountDoesNotExist',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'AccountDoesNotExist',
    'tag' => 'AccountDoesNotExist',
    'payload' => 'ActionErrorKindAccountDoesNotExistPayload',
  ),
), 'ActionErrorKindAccountDoesNotExist');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
