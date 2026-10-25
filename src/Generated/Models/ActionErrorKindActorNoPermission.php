<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Administrative actions like `DeployContract`, `Stake`, `AddKey`, `DeleteKey`. can be proceed only if sender=receiver
 * or the first TX action is a `CreateAccount` action
 */
final readonly class ActionErrorKindActorNoPermission implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionErrorKindActorNoPermissionPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionErrorKindActorNoPermissionPayload $actorNoPermission
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->actorNoPermission, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindActorNoPermissionPayload',
  'nullable' => false,
), 'ActorNoPermission');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionErrorKindActorNoPermission.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('ActorNoPermission', $data)) throw new \InvalidArgumentException('Missing required field: ActorNoPermission');
        $unknown = array_diff_key($data, array (
  'ActorNoPermission' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionErrorKindActorNoPermission.');
        return new self(
            actorNoPermission: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['ActorNoPermission'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindActorNoPermissionPayload',
  'nullable' => false,
), 'ActorNoPermission')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['ActorNoPermission'] = $this->actorNoPermission;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'ActorNoPermission' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindActorNoPermissionPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'ActorNoPermission',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'ActorNoPermission',
    'tag' => 'ActorNoPermission',
    'payload' => 'ActionErrorKindActorNoPermissionPayload',
  ),
), 'ActionErrorKindActorNoPermission'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'ActorNoPermission' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindActorNoPermissionPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'ActorNoPermission',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'ActorNoPermission',
    'tag' => 'ActorNoPermission',
    'payload' => 'ActionErrorKindActorNoPermissionPayload',
  ),
), 'ActionErrorKindActorNoPermission');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
