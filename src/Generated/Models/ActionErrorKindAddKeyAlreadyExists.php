<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The public key is already used for an existing access key
 */
final readonly class ActionErrorKindAddKeyAlreadyExists implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionErrorKindAddKeyAlreadyExistsPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionErrorKindAddKeyAlreadyExistsPayload $addKeyAlreadyExists
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->addKeyAlreadyExists, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindAddKeyAlreadyExistsPayload',
  'nullable' => false,
), 'AddKeyAlreadyExists');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionErrorKindAddKeyAlreadyExists.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('AddKeyAlreadyExists', $data)) throw new \InvalidArgumentException('Missing required field: AddKeyAlreadyExists');
        $unknown = array_diff_key($data, array (
  'AddKeyAlreadyExists' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionErrorKindAddKeyAlreadyExists.');
        return new self(
            addKeyAlreadyExists: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['AddKeyAlreadyExists'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindAddKeyAlreadyExistsPayload',
  'nullable' => false,
), 'AddKeyAlreadyExists')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['AddKeyAlreadyExists'] = $this->addKeyAlreadyExists;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'AddKeyAlreadyExists' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindAddKeyAlreadyExistsPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'AddKeyAlreadyExists',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'AddKeyAlreadyExists',
    'tag' => 'AddKeyAlreadyExists',
    'payload' => 'ActionErrorKindAddKeyAlreadyExistsPayload',
  ),
), 'ActionErrorKindAddKeyAlreadyExists'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'AddKeyAlreadyExists' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindAddKeyAlreadyExistsPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'AddKeyAlreadyExists',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'AddKeyAlreadyExists',
    'tag' => 'AddKeyAlreadyExists',
    'payload' => 'ActionErrorKindAddKeyAlreadyExistsPayload',
  ),
), 'ActionErrorKindAddKeyAlreadyExists');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
