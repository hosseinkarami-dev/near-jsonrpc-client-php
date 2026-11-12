<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class AuthorizationContextAccessKey implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\PublicKey
         */
        public \Near\JsonRpc\Generated\Models\PublicKey $accessKey
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->accessKey, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
  'nullable' => false,
), 'AccessKey');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for AuthorizationContextAccessKey.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('AccessKey', $data)) throw new \InvalidArgumentException('Missing required field: AccessKey');
        $unknown = array_diff_key($data, array (
  'AccessKey' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in AuthorizationContextAccessKey.');
        return new self(
            accessKey: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['AccessKey'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
  'nullable' => false,
), 'AccessKey')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['AccessKey'] = $this->accessKey;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'AccessKey' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'AccessKey',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'AccessKey',
    'tag' => 'AccessKey',
    'payload' => 'PublicKey',
  ),
), 'AuthorizationContextAccessKey'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'AccessKey' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'AccessKey',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'AccessKey',
    'tag' => 'AccessKey',
    'payload' => 'PublicKey',
  ),
), 'AuthorizationContextAccessKey');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
