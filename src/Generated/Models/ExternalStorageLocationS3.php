<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class ExternalStorageLocationS3 implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ExternalStorageLocationS3Payload
         */
        public \Near\JsonRpc\Generated\Models\ExternalStorageLocationS3Payload $s3
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->s3, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExternalStorageLocationS3Payload',
  'nullable' => false,
), 'S3');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ExternalStorageLocationS3.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('S3', $data)) throw new \InvalidArgumentException('Missing required field: S3');
        $unknown = array_diff_key($data, array (
  'S3' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ExternalStorageLocationS3.');
        return new self(
            s3: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['S3'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExternalStorageLocationS3Payload',
  'nullable' => false,
), 'S3')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['S3'] = $this->s3;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'S3' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExternalStorageLocationS3Payload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'S3',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'S3',
    'tag' => 'S3',
    'payload' => 'ExternalStorageLocationS3Payload',
  ),
), 'ExternalStorageLocationS3'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'S3' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExternalStorageLocationS3Payload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'S3',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'S3',
    'tag' => 'S3',
    'payload' => 'ExternalStorageLocationS3Payload',
  ),
), 'ExternalStorageLocationS3');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
