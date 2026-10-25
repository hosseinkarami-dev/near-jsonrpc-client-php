<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class ExecutionStatusView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\ExecutionStatusViewUnknown|\Near\JsonRpc\Generated\Models\ExecutionStatusViewFailure|\Near\JsonRpc\Generated\Models\ExecutionStatusViewSuccessValue|\Near\JsonRpc\Generated\Models\ExecutionStatusViewSuccessReceiptId */
    public \Near\JsonRpc\Generated\Models\ExecutionStatusViewUnknown|\Near\JsonRpc\Generated\Models\ExecutionStatusViewFailure|\Near\JsonRpc\Generated\Models\ExecutionStatusViewSuccessValue|\Near\JsonRpc\Generated\Models\ExecutionStatusViewSuccessReceiptId $root;

    public function __construct(\Near\JsonRpc\Generated\Models\ExecutionStatusViewUnknown|\Near\JsonRpc\Generated\Models\ExecutionStatusViewFailure|\Near\JsonRpc\Generated\Models\ExecutionStatusViewSuccessValue|\Near\JsonRpc\Generated\Models\ExecutionStatusViewSuccessReceiptId $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\ExecutionStatusViewUnknown::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\ExecutionStatusViewFailure::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\ExecutionStatusViewSuccessValue::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\ExecutionStatusViewSuccessReceiptId::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for ExecutionStatusView.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\ExecutionStatusViewUnknown => 'Unknown',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ExecutionStatusViewFailure => 'Failure',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ExecutionStatusViewSuccessValue => 'SuccessValue',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ExecutionStatusViewSuccessReceiptId => 'SuccessReceiptId',
            default => throw new \LogicException('Unknown ExecutionStatusView variant.'),
        };
    }
    public static function unknown(): self { return new self(\Near\JsonRpc\Generated\Models\ExecutionStatusViewUnknown::Unknown); }
    public static function failure(\Near\JsonRpc\Generated\Models\TxExecutionError $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ExecutionStatusViewFailure($payload)); }
    public static function successValue(\Near\JsonRpc\Generated\Models\ExecutionStatusViewSuccessValue $variant): self { return new self($variant); }
    public static function successReceiptId(\Near\JsonRpc\Generated\Models\CryptoHash $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ExecutionStatusViewSuccessReceiptId($payload)); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\ExecutionStatusViewUnknown',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExecutionStatusViewFailure',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExecutionStatusViewSuccessValue',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExecutionStatusViewSuccessReceiptId',
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
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\ExecutionStatusViewUnknown',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExecutionStatusViewFailure',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExecutionStatusViewSuccessValue',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ExecutionStatusViewSuccessReceiptId',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
