<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The initial state of a `0s` or `0u` account, as its state-init action carries it.
 */
final readonly class StateInitView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\StateInitViewDeterministic|\Near\JsonRpc\Generated\Models\StateInitViewUniversal */
    public \Near\JsonRpc\Generated\Models\StateInitViewDeterministic|\Near\JsonRpc\Generated\Models\StateInitViewUniversal $root;

    public function __construct(\Near\JsonRpc\Generated\Models\StateInitViewDeterministic|\Near\JsonRpc\Generated\Models\StateInitViewUniversal $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\StateInitViewDeterministic::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\StateInitViewUniversal::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for StateInitView.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\StateInitViewDeterministic => 'deterministic',
            $this->root instanceof \Near\JsonRpc\Generated\Models\StateInitViewUniversal => 'universal',
            default => throw new \LogicException('Unknown StateInitView variant.'),
        };
    }
    public static function deterministic(\Near\JsonRpc\Generated\Models\StateInitViewDeterministicPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\StateInitViewDeterministic($payload)); }
    public static function universal(\Near\JsonRpc\Generated\Models\RawStateInit $payload): self { return new self(new \Near\JsonRpc\Generated\Models\StateInitViewUniversal($payload)); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateInitViewDeterministic',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateInitViewUniversal',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateInitViewDeterministic',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateInitViewUniversal',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
