<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class BlockIdBlockHeight implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public int|string $root;

    public function __construct(int|string $root)
    {
        \Near\JsonRpc\Models\TypeGuard::assert($root, array (
  'format' => 'uint64',
  'minimum' => 0,
  'title' => 'block_height',
  'type' => 'integer',
  'x-php-union' => 
  array (
    'label' => 'block_height',
  ),
), 'root');
        $this->root = $root;
    }

    public static function fromValue(mixed $value): self
    {
        return new self(\Near\JsonRpc\Models\ModelHydrator::hydrate($value, array (
  'format' => 'uint64',
  'minimum' => 0,
  'title' => 'block_height',
  'type' => 'integer',
  'x-php-union' => 
  array (
    'label' => 'block_height',
  ),
), 'root'));
    }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'format' => 'uint64',
  'minimum' => 0,
  'title' => 'block_height',
  'type' => 'integer',
  'x-php-union' => 
  array (
    'label' => 'block_height',
  ),
), 'root'));
        return $this->root;
    }
    public function jsonSerializeForEncoding(): mixed { return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'format' => 'uint64',
  'minimum' => 0,
  'title' => 'block_height',
  'type' => 'integer',
  'x-php-union' => 
  array (
    'label' => 'block_height',
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
