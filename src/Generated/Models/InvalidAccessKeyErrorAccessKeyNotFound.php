<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The access key identified by the `public_key` doesn't exist for the account
 */
final readonly class InvalidAccessKeyErrorAccessKeyNotFound implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorAccessKeyNotFoundPayload
         */
        public \Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorAccessKeyNotFoundPayload $accessKeyNotFound
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->accessKeyNotFound, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidAccessKeyErrorAccessKeyNotFoundPayload',
  'nullable' => false,
), 'AccessKeyNotFound');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for InvalidAccessKeyErrorAccessKeyNotFound.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('AccessKeyNotFound', $data)) throw new \InvalidArgumentException('Missing required field: AccessKeyNotFound');
        $unknown = array_diff_key($data, array (
  'AccessKeyNotFound' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in InvalidAccessKeyErrorAccessKeyNotFound.');
        return new self(
            accessKeyNotFound: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['AccessKeyNotFound'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidAccessKeyErrorAccessKeyNotFoundPayload',
  'nullable' => false,
), 'AccessKeyNotFound')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['AccessKeyNotFound'] = $this->accessKeyNotFound;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'AccessKeyNotFound' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidAccessKeyErrorAccessKeyNotFoundPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'AccessKeyNotFound',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'AccessKeyNotFound',
    'tag' => 'AccessKeyNotFound',
    'payload' => 'InvalidAccessKeyErrorAccessKeyNotFoundPayload',
  ),
), 'InvalidAccessKeyErrorAccessKeyNotFound'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'AccessKeyNotFound' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidAccessKeyErrorAccessKeyNotFoundPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'AccessKeyNotFound',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'AccessKeyNotFound',
    'tag' => 'AccessKeyNotFound',
    'payload' => 'InvalidAccessKeyErrorAccessKeyNotFoundPayload',
  ),
), 'InvalidAccessKeyErrorAccessKeyNotFound');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
