<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Local filesystem root for storing data.
 */
final readonly class ExternalStorageLocationFilesystem implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ExternalStorageLocationFilesystemPayload
         */
        public \Near\JsonRpc\Generated\Models\ExternalStorageLocationFilesystemPayload $filesystem
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->filesystem, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExternalStorageLocationFilesystemPayload',
  'nullable' => false,
), 'Filesystem');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ExternalStorageLocationFilesystem.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('Filesystem', $data)) throw new \InvalidArgumentException('Missing required field: Filesystem');
        $unknown = array_diff_key($data, array (
  'Filesystem' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ExternalStorageLocationFilesystem.');
        return new self(
            filesystem: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['Filesystem'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExternalStorageLocationFilesystemPayload',
  'nullable' => false,
), 'Filesystem')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['Filesystem'] = $this->filesystem;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'Filesystem' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExternalStorageLocationFilesystemPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'Filesystem',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'Filesystem',
    'tag' => 'Filesystem',
    'payload' => 'ExternalStorageLocationFilesystemPayload',
  ),
), 'ExternalStorageLocationFilesystem'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'Filesystem' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExternalStorageLocationFilesystemPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'Filesystem',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'Filesystem',
    'tag' => 'Filesystem',
    'payload' => 'ExternalStorageLocationFilesystemPayload',
  ),
), 'ExternalStorageLocationFilesystem');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
