<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Account tries to remove an access key that doesn't exist
 */
final readonly class ActionErrorKindDeleteKeyDoesNotExist implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionErrorKindDeleteKeyDoesNotExistPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionErrorKindDeleteKeyDoesNotExistPayload $deleteKeyDoesNotExist
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->deleteKeyDoesNotExist, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDeleteKeyDoesNotExistPayload',
  'nullable' => false,
), 'DeleteKeyDoesNotExist');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionErrorKindDeleteKeyDoesNotExist.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('DeleteKeyDoesNotExist', $data)) throw new \InvalidArgumentException('Missing required field: DeleteKeyDoesNotExist');
        $unknown = array_diff_key($data, array (
  'DeleteKeyDoesNotExist' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionErrorKindDeleteKeyDoesNotExist.');
        return new self(
            deleteKeyDoesNotExist: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['DeleteKeyDoesNotExist'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDeleteKeyDoesNotExistPayload',
  'nullable' => false,
), 'DeleteKeyDoesNotExist')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['DeleteKeyDoesNotExist'] = $this->deleteKeyDoesNotExist;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'DeleteKeyDoesNotExist' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDeleteKeyDoesNotExistPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'DeleteKeyDoesNotExist',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'DeleteKeyDoesNotExist',
    'tag' => 'DeleteKeyDoesNotExist',
    'payload' => 'ActionErrorKindDeleteKeyDoesNotExistPayload',
  ),
), 'ActionErrorKindDeleteKeyDoesNotExist'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'DeleteKeyDoesNotExist' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDeleteKeyDoesNotExistPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'DeleteKeyDoesNotExist',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'DeleteKeyDoesNotExist',
    'tag' => 'DeleteKeyDoesNotExist',
    'payload' => 'ActionErrorKindDeleteKeyDoesNotExistPayload',
  ),
), 'ActionErrorKindDeleteKeyDoesNotExist');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
