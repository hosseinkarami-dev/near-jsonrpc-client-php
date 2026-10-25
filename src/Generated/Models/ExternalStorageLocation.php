<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Supported external storage backends and their minimal config.
 */
final readonly class ExternalStorageLocation implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\ExternalStorageLocationS3|\Near\JsonRpc\Generated\Models\ExternalStorageLocationFilesystem|\Near\JsonRpc\Generated\Models\ExternalStorageLocationGcs */
    public \Near\JsonRpc\Generated\Models\ExternalStorageLocationS3|\Near\JsonRpc\Generated\Models\ExternalStorageLocationFilesystem|\Near\JsonRpc\Generated\Models\ExternalStorageLocationGcs $root;

    public function __construct(\Near\JsonRpc\Generated\Models\ExternalStorageLocationS3|\Near\JsonRpc\Generated\Models\ExternalStorageLocationFilesystem|\Near\JsonRpc\Generated\Models\ExternalStorageLocationGcs $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\ExternalStorageLocationS3::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\ExternalStorageLocationFilesystem::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\ExternalStorageLocationGcs::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for ExternalStorageLocation.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\ExternalStorageLocationS3 => 'S3',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ExternalStorageLocationFilesystem => 'Filesystem',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ExternalStorageLocationGcs => 'GCS',
            default => throw new \LogicException('Unknown ExternalStorageLocation variant.'),
        };
    }
    public static function s3(\Near\JsonRpc\Generated\Models\ExternalStorageLocationS3Payload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ExternalStorageLocationS3($payload)); }
    public static function filesystem(\Near\JsonRpc\Generated\Models\ExternalStorageLocationFilesystemPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ExternalStorageLocationFilesystem($payload)); }
    public static function gcs(\Near\JsonRpc\Generated\Models\ExternalStorageLocationGcsPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ExternalStorageLocationGcs($payload)); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExternalStorageLocationS3',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExternalStorageLocationFilesystem',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExternalStorageLocationGcs',
      'nullable' => false,
    ),
  ),
), 'root'));
        return $this->root;
    }
    public function jsonSerializeForEncoding(): mixed { return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExternalStorageLocationS3',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExternalStorageLocationFilesystem',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExternalStorageLocationGcs',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
