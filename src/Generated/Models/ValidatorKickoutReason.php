<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Reasons for removing a validator from the validator set.
 */
final readonly class ValidatorKickoutReason implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\ValidatorKickoutReasonUnusedSlashed|\Near\JsonRpc\Generated\Models\ValidatorKickoutReasonNotEnoughBlocks|\Near\JsonRpc\Generated\Models\ValidatorKickoutReasonNotEnoughChunks|\Near\JsonRpc\Generated\Models\ValidatorKickoutReasonUnstaked|\Near\JsonRpc\Generated\Models\ValidatorKickoutReasonNotEnoughStake|\Near\JsonRpc\Generated\Models\ValidatorKickoutReasonDidNotGetASeat|\Near\JsonRpc\Generated\Models\ValidatorKickoutReasonNotEnoughChunkEndorsements|\Near\JsonRpc\Generated\Models\ValidatorKickoutReasonProtocolVersionTooOld */
    public \Near\JsonRpc\Generated\Models\ValidatorKickoutReasonUnusedSlashed|\Near\JsonRpc\Generated\Models\ValidatorKickoutReasonNotEnoughBlocks|\Near\JsonRpc\Generated\Models\ValidatorKickoutReasonNotEnoughChunks|\Near\JsonRpc\Generated\Models\ValidatorKickoutReasonUnstaked|\Near\JsonRpc\Generated\Models\ValidatorKickoutReasonNotEnoughStake|\Near\JsonRpc\Generated\Models\ValidatorKickoutReasonDidNotGetASeat|\Near\JsonRpc\Generated\Models\ValidatorKickoutReasonNotEnoughChunkEndorsements|\Near\JsonRpc\Generated\Models\ValidatorKickoutReasonProtocolVersionTooOld $root;

    public function __construct(\Near\JsonRpc\Generated\Models\ValidatorKickoutReasonUnusedSlashed|\Near\JsonRpc\Generated\Models\ValidatorKickoutReasonNotEnoughBlocks|\Near\JsonRpc\Generated\Models\ValidatorKickoutReasonNotEnoughChunks|\Near\JsonRpc\Generated\Models\ValidatorKickoutReasonUnstaked|\Near\JsonRpc\Generated\Models\ValidatorKickoutReasonNotEnoughStake|\Near\JsonRpc\Generated\Models\ValidatorKickoutReasonDidNotGetASeat|\Near\JsonRpc\Generated\Models\ValidatorKickoutReasonNotEnoughChunkEndorsements|\Near\JsonRpc\Generated\Models\ValidatorKickoutReasonProtocolVersionTooOld $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\ValidatorKickoutReasonUnusedSlashed::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\ValidatorKickoutReasonNotEnoughBlocks::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\ValidatorKickoutReasonNotEnoughChunks::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\ValidatorKickoutReasonUnstaked::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[4] = \Near\JsonRpc\Generated\Models\ValidatorKickoutReasonNotEnoughStake::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[5] = \Near\JsonRpc\Generated\Models\ValidatorKickoutReasonDidNotGetASeat::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[6] = \Near\JsonRpc\Generated\Models\ValidatorKickoutReasonNotEnoughChunkEndorsements::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[7] = \Near\JsonRpc\Generated\Models\ValidatorKickoutReasonProtocolVersionTooOld::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for ValidatorKickoutReason.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\ValidatorKickoutReasonUnusedSlashed => '_UnusedSlashed',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ValidatorKickoutReasonNotEnoughBlocks => 'NotEnoughBlocks',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ValidatorKickoutReasonNotEnoughChunks => 'NotEnoughChunks',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ValidatorKickoutReasonUnstaked => 'Unstaked',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ValidatorKickoutReasonNotEnoughStake => 'NotEnoughStake',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ValidatorKickoutReasonDidNotGetASeat => 'DidNotGetASeat',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ValidatorKickoutReasonNotEnoughChunkEndorsements => 'NotEnoughChunkEndorsements',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ValidatorKickoutReasonProtocolVersionTooOld => 'ProtocolVersionTooOld',
            default => throw new \LogicException('Unknown ValidatorKickoutReason variant.'),
        };
    }
    public static function unusedSlashed(): self { return new self(\Near\JsonRpc\Generated\Models\ValidatorKickoutReasonUnusedSlashed::UnusedSlashed); }
    public static function notEnoughBlocks(\Near\JsonRpc\Generated\Models\ValidatorKickoutReasonNotEnoughBlocksPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ValidatorKickoutReasonNotEnoughBlocks($payload)); }
    public static function notEnoughChunks(\Near\JsonRpc\Generated\Models\ValidatorKickoutReasonNotEnoughChunksPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ValidatorKickoutReasonNotEnoughChunks($payload)); }
    public static function unstaked(): self { return new self(\Near\JsonRpc\Generated\Models\ValidatorKickoutReasonUnstaked::Unstaked); }
    public static function notEnoughStake(\Near\JsonRpc\Generated\Models\ValidatorKickoutReasonNotEnoughStakePayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ValidatorKickoutReasonNotEnoughStake($payload)); }
    public static function didNotGetASeat(): self { return new self(\Near\JsonRpc\Generated\Models\ValidatorKickoutReasonDidNotGetASeat::DidNotGetASeat); }
    public static function notEnoughChunkEndorsements(\Near\JsonRpc\Generated\Models\ValidatorKickoutReasonNotEnoughChunkEndorsementsPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ValidatorKickoutReasonNotEnoughChunkEndorsements($payload)); }
    public static function protocolVersionTooOld(\Near\JsonRpc\Generated\Models\ValidatorKickoutReasonProtocolVersionTooOldPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ValidatorKickoutReasonProtocolVersionTooOld($payload)); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutReasonUnusedSlashed',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutReasonNotEnoughBlocks',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutReasonNotEnoughChunks',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutReasonUnstaked',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutReasonNotEnoughStake',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutReasonDidNotGetASeat',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutReasonNotEnoughChunkEndorsements',
      'nullable' => false,
    ),
    7 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutReasonProtocolVersionTooOld',
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
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutReasonUnusedSlashed',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutReasonNotEnoughBlocks',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutReasonNotEnoughChunks',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutReasonUnstaked',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutReasonNotEnoughStake',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutReasonDidNotGetASeat',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutReasonNotEnoughChunkEndorsements',
      'nullable' => false,
    ),
    7 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutReasonProtocolVersionTooOld',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
