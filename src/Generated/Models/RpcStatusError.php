<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class RpcStatusError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\RpcStatusErrorNodeIsSyncing|\Near\JsonRpc\Generated\Models\RpcStatusErrorNoNewBlocks|\Near\JsonRpc\Generated\Models\RpcStatusErrorEpochOutOfBounds|\Near\JsonRpc\Generated\Models\RpcStatusErrorInternalError */
    public \Near\JsonRpc\Generated\Models\RpcStatusErrorNodeIsSyncing|\Near\JsonRpc\Generated\Models\RpcStatusErrorNoNewBlocks|\Near\JsonRpc\Generated\Models\RpcStatusErrorEpochOutOfBounds|\Near\JsonRpc\Generated\Models\RpcStatusErrorInternalError $root;

    public function __construct(\Near\JsonRpc\Generated\Models\RpcStatusErrorNodeIsSyncing|\Near\JsonRpc\Generated\Models\RpcStatusErrorNoNewBlocks|\Near\JsonRpc\Generated\Models\RpcStatusErrorEpochOutOfBounds|\Near\JsonRpc\Generated\Models\RpcStatusErrorInternalError $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\RpcStatusErrorNodeIsSyncing::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\RpcStatusErrorNoNewBlocks::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\RpcStatusErrorEpochOutOfBounds::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\RpcStatusErrorInternalError::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for RpcStatusError.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcStatusErrorNodeIsSyncing => 'NODE_IS_SYNCING',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcStatusErrorNoNewBlocks => 'NO_NEW_BLOCKS',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcStatusErrorEpochOutOfBounds => 'EPOCH_OUT_OF_BOUNDS',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcStatusErrorInternalError => 'INTERNAL_ERROR',
            default => throw new \LogicException('Unknown RpcStatusError variant.'),
        };
    }
    public static function nodeIsSyncing(\Near\JsonRpc\Generated\Models\RpcStatusErrorNodeIsSyncing $variant): self { return new self($variant); }
    public static function noNewBlocks(\Near\JsonRpc\Generated\Models\RpcStatusErrorNoNewBlocks $variant): self { return new self($variant); }
    public static function epochOutOfBounds(\Near\JsonRpc\Generated\Models\RpcStatusErrorEpochOutOfBounds $variant): self { return new self($variant); }
    public static function internalError(\Near\JsonRpc\Generated\Models\RpcStatusErrorInternalError $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStatusErrorNodeIsSyncing',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStatusErrorNoNewBlocks',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStatusErrorEpochOutOfBounds',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStatusErrorInternalError',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStatusErrorNodeIsSyncing',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStatusErrorNoNewBlocks',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStatusErrorEpochOutOfBounds',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStatusErrorInternalError',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
