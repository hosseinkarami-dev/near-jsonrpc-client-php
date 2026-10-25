<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * A top-level account ID can only be created by registrar.
 */
final readonly class ActionErrorKindCreateAccountOnlyByRegistrar implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionErrorKindCreateAccountOnlyByRegistrarPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionErrorKindCreateAccountOnlyByRegistrarPayload $createAccountOnlyByRegistrar
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->createAccountOnlyByRegistrar, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindCreateAccountOnlyByRegistrarPayload',
  'nullable' => false,
), 'CreateAccountOnlyByRegistrar');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionErrorKindCreateAccountOnlyByRegistrar.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('CreateAccountOnlyByRegistrar', $data)) throw new \InvalidArgumentException('Missing required field: CreateAccountOnlyByRegistrar');
        $unknown = array_diff_key($data, array (
  'CreateAccountOnlyByRegistrar' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionErrorKindCreateAccountOnlyByRegistrar.');
        return new self(
            createAccountOnlyByRegistrar: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['CreateAccountOnlyByRegistrar'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindCreateAccountOnlyByRegistrarPayload',
  'nullable' => false,
), 'CreateAccountOnlyByRegistrar')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['CreateAccountOnlyByRegistrar'] = $this->createAccountOnlyByRegistrar;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'CreateAccountOnlyByRegistrar' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindCreateAccountOnlyByRegistrarPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'CreateAccountOnlyByRegistrar',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'CreateAccountOnlyByRegistrar',
    'tag' => 'CreateAccountOnlyByRegistrar',
    'payload' => 'ActionErrorKindCreateAccountOnlyByRegistrarPayload',
  ),
), 'ActionErrorKindCreateAccountOnlyByRegistrar'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'CreateAccountOnlyByRegistrar' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindCreateAccountOnlyByRegistrarPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'CreateAccountOnlyByRegistrar',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'CreateAccountOnlyByRegistrar',
    'tag' => 'CreateAccountOnlyByRegistrar',
    'payload' => 'ActionErrorKindCreateAccountOnlyByRegistrarPayload',
  ),
), 'ActionErrorKindCreateAccountOnlyByRegistrar');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
