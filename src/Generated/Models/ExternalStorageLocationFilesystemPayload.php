<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class ExternalStorageLocationFilesystemPayload implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var string
         */
        public string $rootDir,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->rootDir, array (
  'type' => 'string',
), 'root_dir');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ExternalStorageLocationFilesystemPayload.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('root_dir', $data)) throw new \InvalidArgumentException('Missing required field: root_dir');
        $extra = array_diff_key($data, array (
  'root_dir' => true,
));
        return new self(
            rootDir: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['root_dir'], array (
  'type' => 'string',
), 'root_dir'),
            _extra: $extra
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = $this->extra;
        $data['root_dir'] = $this->rootDir;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'root_dir' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'root_dir',
  ),
  'type' => 'object',
), 'ExternalStorageLocationFilesystemPayload'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'root_dir' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'root_dir',
  ),
  'type' => 'object',
), 'ExternalStorageLocationFilesystemPayload');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
