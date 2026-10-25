<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Error that can occur while preparing or executing Wasm smart-contract.
 */
final readonly class PrepareError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\PrepareErrorSerialization|\Near\JsonRpc\Generated\Models\PrepareErrorDeserialization|\Near\JsonRpc\Generated\Models\PrepareErrorInternalMemoryDeclared|\Near\JsonRpc\Generated\Models\PrepareErrorGasInstrumentation|\Near\JsonRpc\Generated\Models\PrepareErrorStackHeightInstrumentation|\Near\JsonRpc\Generated\Models\PrepareErrorInstantiate|\Near\JsonRpc\Generated\Models\PrepareErrorMemory|\Near\JsonRpc\Generated\Models\PrepareErrorTooManyFunctions|\Near\JsonRpc\Generated\Models\PrepareErrorTooManyLocals|\Near\JsonRpc\Generated\Models\PrepareErrorTooManyTables|\Near\JsonRpc\Generated\Models\PrepareErrorTooManyTableElements|\Near\JsonRpc\Generated\Models\PrepareErrorFunctionBodyTooLarge|\Near\JsonRpc\Generated\Models\PrepareErrorInstrumentedCodeTooLarge|\Near\JsonRpc\Generated\Models\PrepareErrorTooManyBlocksPerFunction|\Near\JsonRpc\Generated\Models\PrepareErrorTooManyBlocksPerContract|\Near\JsonRpc\Generated\Models\PrepareErrorTooManyTypes|\Near\JsonRpc\Generated\Models\PrepareErrorTooManyParamsPerFunction|\Near\JsonRpc\Generated\Models\PrepareErrorTooManyParamsPerContract|\Near\JsonRpc\Generated\Models\PrepareErrorOperandStackTooLarge|\Near\JsonRpc\Generated\Models\PrepareErrorTooManyGlobals */
    public \Near\JsonRpc\Generated\Models\PrepareErrorSerialization|\Near\JsonRpc\Generated\Models\PrepareErrorDeserialization|\Near\JsonRpc\Generated\Models\PrepareErrorInternalMemoryDeclared|\Near\JsonRpc\Generated\Models\PrepareErrorGasInstrumentation|\Near\JsonRpc\Generated\Models\PrepareErrorStackHeightInstrumentation|\Near\JsonRpc\Generated\Models\PrepareErrorInstantiate|\Near\JsonRpc\Generated\Models\PrepareErrorMemory|\Near\JsonRpc\Generated\Models\PrepareErrorTooManyFunctions|\Near\JsonRpc\Generated\Models\PrepareErrorTooManyLocals|\Near\JsonRpc\Generated\Models\PrepareErrorTooManyTables|\Near\JsonRpc\Generated\Models\PrepareErrorTooManyTableElements|\Near\JsonRpc\Generated\Models\PrepareErrorFunctionBodyTooLarge|\Near\JsonRpc\Generated\Models\PrepareErrorInstrumentedCodeTooLarge|\Near\JsonRpc\Generated\Models\PrepareErrorTooManyBlocksPerFunction|\Near\JsonRpc\Generated\Models\PrepareErrorTooManyBlocksPerContract|\Near\JsonRpc\Generated\Models\PrepareErrorTooManyTypes|\Near\JsonRpc\Generated\Models\PrepareErrorTooManyParamsPerFunction|\Near\JsonRpc\Generated\Models\PrepareErrorTooManyParamsPerContract|\Near\JsonRpc\Generated\Models\PrepareErrorOperandStackTooLarge|\Near\JsonRpc\Generated\Models\PrepareErrorTooManyGlobals $root;

    public function __construct(\Near\JsonRpc\Generated\Models\PrepareErrorSerialization|\Near\JsonRpc\Generated\Models\PrepareErrorDeserialization|\Near\JsonRpc\Generated\Models\PrepareErrorInternalMemoryDeclared|\Near\JsonRpc\Generated\Models\PrepareErrorGasInstrumentation|\Near\JsonRpc\Generated\Models\PrepareErrorStackHeightInstrumentation|\Near\JsonRpc\Generated\Models\PrepareErrorInstantiate|\Near\JsonRpc\Generated\Models\PrepareErrorMemory|\Near\JsonRpc\Generated\Models\PrepareErrorTooManyFunctions|\Near\JsonRpc\Generated\Models\PrepareErrorTooManyLocals|\Near\JsonRpc\Generated\Models\PrepareErrorTooManyTables|\Near\JsonRpc\Generated\Models\PrepareErrorTooManyTableElements|\Near\JsonRpc\Generated\Models\PrepareErrorFunctionBodyTooLarge|\Near\JsonRpc\Generated\Models\PrepareErrorInstrumentedCodeTooLarge|\Near\JsonRpc\Generated\Models\PrepareErrorTooManyBlocksPerFunction|\Near\JsonRpc\Generated\Models\PrepareErrorTooManyBlocksPerContract|\Near\JsonRpc\Generated\Models\PrepareErrorTooManyTypes|\Near\JsonRpc\Generated\Models\PrepareErrorTooManyParamsPerFunction|\Near\JsonRpc\Generated\Models\PrepareErrorTooManyParamsPerContract|\Near\JsonRpc\Generated\Models\PrepareErrorOperandStackTooLarge|\Near\JsonRpc\Generated\Models\PrepareErrorTooManyGlobals $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\PrepareErrorSerialization::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\PrepareErrorDeserialization::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\PrepareErrorInternalMemoryDeclared::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\PrepareErrorGasInstrumentation::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[4] = \Near\JsonRpc\Generated\Models\PrepareErrorStackHeightInstrumentation::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[5] = \Near\JsonRpc\Generated\Models\PrepareErrorInstantiate::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[6] = \Near\JsonRpc\Generated\Models\PrepareErrorMemory::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[7] = \Near\JsonRpc\Generated\Models\PrepareErrorTooManyFunctions::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[8] = \Near\JsonRpc\Generated\Models\PrepareErrorTooManyLocals::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[9] = \Near\JsonRpc\Generated\Models\PrepareErrorTooManyTables::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[10] = \Near\JsonRpc\Generated\Models\PrepareErrorTooManyTableElements::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[11] = \Near\JsonRpc\Generated\Models\PrepareErrorFunctionBodyTooLarge::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[12] = \Near\JsonRpc\Generated\Models\PrepareErrorInstrumentedCodeTooLarge::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[13] = \Near\JsonRpc\Generated\Models\PrepareErrorTooManyBlocksPerFunction::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[14] = \Near\JsonRpc\Generated\Models\PrepareErrorTooManyBlocksPerContract::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[15] = \Near\JsonRpc\Generated\Models\PrepareErrorTooManyTypes::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[16] = \Near\JsonRpc\Generated\Models\PrepareErrorTooManyParamsPerFunction::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[17] = \Near\JsonRpc\Generated\Models\PrepareErrorTooManyParamsPerContract::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[18] = \Near\JsonRpc\Generated\Models\PrepareErrorOperandStackTooLarge::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[19] = \Near\JsonRpc\Generated\Models\PrepareErrorTooManyGlobals::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for PrepareError.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\PrepareErrorSerialization => 'Serialization',
            $this->root instanceof \Near\JsonRpc\Generated\Models\PrepareErrorDeserialization => 'Deserialization',
            $this->root instanceof \Near\JsonRpc\Generated\Models\PrepareErrorInternalMemoryDeclared => 'InternalMemoryDeclared',
            $this->root instanceof \Near\JsonRpc\Generated\Models\PrepareErrorGasInstrumentation => 'GasInstrumentation',
            $this->root instanceof \Near\JsonRpc\Generated\Models\PrepareErrorStackHeightInstrumentation => 'StackHeightInstrumentation',
            $this->root instanceof \Near\JsonRpc\Generated\Models\PrepareErrorInstantiate => 'Instantiate',
            $this->root instanceof \Near\JsonRpc\Generated\Models\PrepareErrorMemory => 'Memory',
            $this->root instanceof \Near\JsonRpc\Generated\Models\PrepareErrorTooManyFunctions => 'TooManyFunctions',
            $this->root instanceof \Near\JsonRpc\Generated\Models\PrepareErrorTooManyLocals => 'TooManyLocals',
            $this->root instanceof \Near\JsonRpc\Generated\Models\PrepareErrorTooManyTables => 'TooManyTables',
            $this->root instanceof \Near\JsonRpc\Generated\Models\PrepareErrorTooManyTableElements => 'TooManyTableElements',
            $this->root instanceof \Near\JsonRpc\Generated\Models\PrepareErrorFunctionBodyTooLarge => 'FunctionBodyTooLarge',
            $this->root instanceof \Near\JsonRpc\Generated\Models\PrepareErrorInstrumentedCodeTooLarge => 'InstrumentedCodeTooLarge',
            $this->root instanceof \Near\JsonRpc\Generated\Models\PrepareErrorTooManyBlocksPerFunction => 'TooManyBlocksPerFunction',
            $this->root instanceof \Near\JsonRpc\Generated\Models\PrepareErrorTooManyBlocksPerContract => 'TooManyBlocksPerContract',
            $this->root instanceof \Near\JsonRpc\Generated\Models\PrepareErrorTooManyTypes => 'TooManyTypes',
            $this->root instanceof \Near\JsonRpc\Generated\Models\PrepareErrorTooManyParamsPerFunction => 'TooManyParamsPerFunction',
            $this->root instanceof \Near\JsonRpc\Generated\Models\PrepareErrorTooManyParamsPerContract => 'TooManyParamsPerContract',
            $this->root instanceof \Near\JsonRpc\Generated\Models\PrepareErrorOperandStackTooLarge => 'OperandStackTooLarge',
            $this->root instanceof \Near\JsonRpc\Generated\Models\PrepareErrorTooManyGlobals => 'TooManyGlobals',
            default => throw new \LogicException('Unknown PrepareError variant.'),
        };
    }
    public static function serialization(): self { return new self(\Near\JsonRpc\Generated\Models\PrepareErrorSerialization::Serialization); }
    public static function deserialization(): self { return new self(\Near\JsonRpc\Generated\Models\PrepareErrorDeserialization::Deserialization); }
    public static function internalMemoryDeclared(): self { return new self(\Near\JsonRpc\Generated\Models\PrepareErrorInternalMemoryDeclared::InternalMemoryDeclared); }
    public static function gasInstrumentation(): self { return new self(\Near\JsonRpc\Generated\Models\PrepareErrorGasInstrumentation::GasInstrumentation); }
    public static function stackHeightInstrumentation(): self { return new self(\Near\JsonRpc\Generated\Models\PrepareErrorStackHeightInstrumentation::StackHeightInstrumentation); }
    public static function instantiate(): self { return new self(\Near\JsonRpc\Generated\Models\PrepareErrorInstantiate::Instantiate); }
    public static function memory(): self { return new self(\Near\JsonRpc\Generated\Models\PrepareErrorMemory::Memory); }
    public static function tooManyFunctions(): self { return new self(\Near\JsonRpc\Generated\Models\PrepareErrorTooManyFunctions::TooManyFunctions); }
    public static function tooManyLocals(): self { return new self(\Near\JsonRpc\Generated\Models\PrepareErrorTooManyLocals::TooManyLocals); }
    public static function tooManyTables(): self { return new self(\Near\JsonRpc\Generated\Models\PrepareErrorTooManyTables::TooManyTables); }
    public static function tooManyTableElements(): self { return new self(\Near\JsonRpc\Generated\Models\PrepareErrorTooManyTableElements::TooManyTableElements); }
    public static function functionBodyTooLarge(): self { return new self(\Near\JsonRpc\Generated\Models\PrepareErrorFunctionBodyTooLarge::FunctionBodyTooLarge); }
    public static function instrumentedCodeTooLarge(): self { return new self(\Near\JsonRpc\Generated\Models\PrepareErrorInstrumentedCodeTooLarge::InstrumentedCodeTooLarge); }
    public static function tooManyBlocksPerFunction(): self { return new self(\Near\JsonRpc\Generated\Models\PrepareErrorTooManyBlocksPerFunction::TooManyBlocksPerFunction); }
    public static function tooManyBlocksPerContract(): self { return new self(\Near\JsonRpc\Generated\Models\PrepareErrorTooManyBlocksPerContract::TooManyBlocksPerContract); }
    public static function tooManyTypes(): self { return new self(\Near\JsonRpc\Generated\Models\PrepareErrorTooManyTypes::TooManyTypes); }
    public static function tooManyParamsPerFunction(): self { return new self(\Near\JsonRpc\Generated\Models\PrepareErrorTooManyParamsPerFunction::TooManyParamsPerFunction); }
    public static function tooManyParamsPerContract(): self { return new self(\Near\JsonRpc\Generated\Models\PrepareErrorTooManyParamsPerContract::TooManyParamsPerContract); }
    public static function operandStackTooLarge(): self { return new self(\Near\JsonRpc\Generated\Models\PrepareErrorOperandStackTooLarge::OperandStackTooLarge); }
    public static function tooManyGlobals(): self { return new self(\Near\JsonRpc\Generated\Models\PrepareErrorTooManyGlobals::TooManyGlobals); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorSerialization',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorDeserialization',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorInternalMemoryDeclared',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorGasInstrumentation',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorStackHeightInstrumentation',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorInstantiate',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorMemory',
      'nullable' => false,
    ),
    7 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorTooManyFunctions',
      'nullable' => false,
    ),
    8 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorTooManyLocals',
      'nullable' => false,
    ),
    9 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorTooManyTables',
      'nullable' => false,
    ),
    10 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorTooManyTableElements',
      'nullable' => false,
    ),
    11 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorFunctionBodyTooLarge',
      'nullable' => false,
    ),
    12 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorInstrumentedCodeTooLarge',
      'nullable' => false,
    ),
    13 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorTooManyBlocksPerFunction',
      'nullable' => false,
    ),
    14 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorTooManyBlocksPerContract',
      'nullable' => false,
    ),
    15 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorTooManyTypes',
      'nullable' => false,
    ),
    16 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorTooManyParamsPerFunction',
      'nullable' => false,
    ),
    17 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorTooManyParamsPerContract',
      'nullable' => false,
    ),
    18 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorOperandStackTooLarge',
      'nullable' => false,
    ),
    19 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorTooManyGlobals',
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
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorSerialization',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorDeserialization',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorInternalMemoryDeclared',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorGasInstrumentation',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorStackHeightInstrumentation',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorInstantiate',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorMemory',
      'nullable' => false,
    ),
    7 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorTooManyFunctions',
      'nullable' => false,
    ),
    8 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorTooManyLocals',
      'nullable' => false,
    ),
    9 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorTooManyTables',
      'nullable' => false,
    ),
    10 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorTooManyTableElements',
      'nullable' => false,
    ),
    11 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorFunctionBodyTooLarge',
      'nullable' => false,
    ),
    12 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorInstrumentedCodeTooLarge',
      'nullable' => false,
    ),
    13 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorTooManyBlocksPerFunction',
      'nullable' => false,
    ),
    14 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorTooManyBlocksPerContract',
      'nullable' => false,
    ),
    15 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorTooManyTypes',
      'nullable' => false,
    ),
    16 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorTooManyParamsPerFunction',
      'nullable' => false,
    ),
    17 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorTooManyParamsPerContract',
      'nullable' => false,
    ),
    18 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorOperandStackTooLarge',
      'nullable' => false,
    ),
    19 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\PrepareErrorTooManyGlobals',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
