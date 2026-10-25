<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * A kind of a trap happened during execution of a binary
 */
final readonly class WasmTrap implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\WasmTrapUnreachable|\Near\JsonRpc\Generated\Models\WasmTrapIncorrectCallIndirectSignature|\Near\JsonRpc\Generated\Models\WasmTrapMemoryOutOfBounds|\Near\JsonRpc\Generated\Models\WasmTrapCallIndirectOob|\Near\JsonRpc\Generated\Models\WasmTrapIllegalArithmetic|\Near\JsonRpc\Generated\Models\WasmTrapMisalignedAtomicAccess|\Near\JsonRpc\Generated\Models\WasmTrapIndirectCallToNull|\Near\JsonRpc\Generated\Models\WasmTrapStackOverflow|\Near\JsonRpc\Generated\Models\WasmTrapGenericTrap */
    public \Near\JsonRpc\Generated\Models\WasmTrapUnreachable|\Near\JsonRpc\Generated\Models\WasmTrapIncorrectCallIndirectSignature|\Near\JsonRpc\Generated\Models\WasmTrapMemoryOutOfBounds|\Near\JsonRpc\Generated\Models\WasmTrapCallIndirectOob|\Near\JsonRpc\Generated\Models\WasmTrapIllegalArithmetic|\Near\JsonRpc\Generated\Models\WasmTrapMisalignedAtomicAccess|\Near\JsonRpc\Generated\Models\WasmTrapIndirectCallToNull|\Near\JsonRpc\Generated\Models\WasmTrapStackOverflow|\Near\JsonRpc\Generated\Models\WasmTrapGenericTrap $root;

    public function __construct(\Near\JsonRpc\Generated\Models\WasmTrapUnreachable|\Near\JsonRpc\Generated\Models\WasmTrapIncorrectCallIndirectSignature|\Near\JsonRpc\Generated\Models\WasmTrapMemoryOutOfBounds|\Near\JsonRpc\Generated\Models\WasmTrapCallIndirectOob|\Near\JsonRpc\Generated\Models\WasmTrapIllegalArithmetic|\Near\JsonRpc\Generated\Models\WasmTrapMisalignedAtomicAccess|\Near\JsonRpc\Generated\Models\WasmTrapIndirectCallToNull|\Near\JsonRpc\Generated\Models\WasmTrapStackOverflow|\Near\JsonRpc\Generated\Models\WasmTrapGenericTrap $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\WasmTrapUnreachable::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\WasmTrapIncorrectCallIndirectSignature::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\WasmTrapMemoryOutOfBounds::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\WasmTrapCallIndirectOob::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[4] = \Near\JsonRpc\Generated\Models\WasmTrapIllegalArithmetic::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[5] = \Near\JsonRpc\Generated\Models\WasmTrapMisalignedAtomicAccess::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[6] = \Near\JsonRpc\Generated\Models\WasmTrapIndirectCallToNull::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[7] = \Near\JsonRpc\Generated\Models\WasmTrapStackOverflow::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[8] = \Near\JsonRpc\Generated\Models\WasmTrapGenericTrap::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for WasmTrap.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\WasmTrapUnreachable => 'Unreachable',
            $this->root instanceof \Near\JsonRpc\Generated\Models\WasmTrapIncorrectCallIndirectSignature => 'IncorrectCallIndirectSignature',
            $this->root instanceof \Near\JsonRpc\Generated\Models\WasmTrapMemoryOutOfBounds => 'MemoryOutOfBounds',
            $this->root instanceof \Near\JsonRpc\Generated\Models\WasmTrapCallIndirectOob => 'CallIndirectOOB',
            $this->root instanceof \Near\JsonRpc\Generated\Models\WasmTrapIllegalArithmetic => 'IllegalArithmetic',
            $this->root instanceof \Near\JsonRpc\Generated\Models\WasmTrapMisalignedAtomicAccess => 'MisalignedAtomicAccess',
            $this->root instanceof \Near\JsonRpc\Generated\Models\WasmTrapIndirectCallToNull => 'IndirectCallToNull',
            $this->root instanceof \Near\JsonRpc\Generated\Models\WasmTrapStackOverflow => 'StackOverflow',
            $this->root instanceof \Near\JsonRpc\Generated\Models\WasmTrapGenericTrap => 'GenericTrap',
            default => throw new \LogicException('Unknown WasmTrap variant.'),
        };
    }
    public static function unreachable(): self { return new self(\Near\JsonRpc\Generated\Models\WasmTrapUnreachable::Unreachable); }
    public static function incorrectCallIndirectSignature(): self { return new self(\Near\JsonRpc\Generated\Models\WasmTrapIncorrectCallIndirectSignature::IncorrectCallIndirectSignature); }
    public static function memoryOutOfBounds(): self { return new self(\Near\JsonRpc\Generated\Models\WasmTrapMemoryOutOfBounds::MemoryOutOfBounds); }
    public static function callIndirectOob(): self { return new self(\Near\JsonRpc\Generated\Models\WasmTrapCallIndirectOob::CallIndirectOob); }
    public static function illegalArithmetic(): self { return new self(\Near\JsonRpc\Generated\Models\WasmTrapIllegalArithmetic::IllegalArithmetic); }
    public static function misalignedAtomicAccess(): self { return new self(\Near\JsonRpc\Generated\Models\WasmTrapMisalignedAtomicAccess::MisalignedAtomicAccess); }
    public static function indirectCallToNull(): self { return new self(\Near\JsonRpc\Generated\Models\WasmTrapIndirectCallToNull::IndirectCallToNull); }
    public static function stackOverflow(): self { return new self(\Near\JsonRpc\Generated\Models\WasmTrapStackOverflow::StackOverflow); }
    public static function genericTrap(): self { return new self(\Near\JsonRpc\Generated\Models\WasmTrapGenericTrap::GenericTrap); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\WasmTrapUnreachable',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\WasmTrapIncorrectCallIndirectSignature',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\WasmTrapMemoryOutOfBounds',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\WasmTrapCallIndirectOob',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\WasmTrapIllegalArithmetic',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\WasmTrapMisalignedAtomicAccess',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\WasmTrapIndirectCallToNull',
      'nullable' => false,
    ),
    7 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\WasmTrapStackOverflow',
      'nullable' => false,
    ),
    8 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\WasmTrapGenericTrap',
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
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\WasmTrapUnreachable',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\WasmTrapIncorrectCallIndirectSignature',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\WasmTrapMemoryOutOfBounds',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\WasmTrapCallIndirectOob',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\WasmTrapIllegalArithmetic',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\WasmTrapMisalignedAtomicAccess',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\WasmTrapIndirectCallToNull',
      'nullable' => false,
    ),
    7 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\WasmTrapStackOverflow',
      'nullable' => false,
    ),
    8 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\WasmTrapGenericTrap',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
