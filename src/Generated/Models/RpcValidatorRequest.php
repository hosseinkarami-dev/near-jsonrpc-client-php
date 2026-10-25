<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class RpcValidatorRequest implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\RpcValidatorRequestEpochId|\Near\JsonRpc\Generated\Models\RpcValidatorRequestBlockId|\Near\JsonRpc\Generated\Models\RpcValidatorRequestLatest */
    public \Near\JsonRpc\Generated\Models\RpcValidatorRequestEpochId|\Near\JsonRpc\Generated\Models\RpcValidatorRequestBlockId|\Near\JsonRpc\Generated\Models\RpcValidatorRequestLatest $root;

    public function __construct(\Near\JsonRpc\Generated\Models\RpcValidatorRequestEpochId|\Near\JsonRpc\Generated\Models\RpcValidatorRequestBlockId|\Near\JsonRpc\Generated\Models\RpcValidatorRequestLatest $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\RpcValidatorRequestEpochId::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\RpcValidatorRequestBlockId::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\RpcValidatorRequestLatest::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for RpcValidatorRequest.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcValidatorRequestEpochId => 'epoch_id',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcValidatorRequestBlockId => 'block_id',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcValidatorRequestLatest => 'Latest',
            default => throw new \LogicException('Unknown RpcValidatorRequest variant.'),
        };
    }
    public static function epochId(\Near\JsonRpc\Generated\Models\EpochId $payload): self { return new self(new \Near\JsonRpc\Generated\Models\RpcValidatorRequestEpochId($payload)); }
    public static function blockId(\Near\JsonRpc\Generated\Models\BlockId $payload): self { return new self(new \Near\JsonRpc\Generated\Models\RpcValidatorRequestBlockId($payload)); }
    public static function latest(\Near\JsonRpc\Generated\Models\RpcValidatorRequestLatest $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcValidatorRequestEpochId',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcValidatorRequestBlockId',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcValidatorRequestLatest',
      'nullable' => false,
    ),
  ),
  'title' => 'RpcValidatorRequest',
  'type' => 'object',
), 'root'));
        return $this->root;
    }
    public function jsonSerializeForEncoding(): mixed { return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcValidatorRequestEpochId',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcValidatorRequestBlockId',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcValidatorRequestLatest',
      'nullable' => false,
    ),
  ),
  'title' => 'RpcValidatorRequest',
  'type' => 'object',
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
