<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class FinalExecutionStatus implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\FinalExecutionStatusNotStarted|\Near\JsonRpc\Generated\Models\FinalExecutionStatusStarted|\Near\JsonRpc\Generated\Models\FinalExecutionStatusFailure|\Near\JsonRpc\Generated\Models\FinalExecutionStatusSuccessValue */
    public \Near\JsonRpc\Generated\Models\FinalExecutionStatusNotStarted|\Near\JsonRpc\Generated\Models\FinalExecutionStatusStarted|\Near\JsonRpc\Generated\Models\FinalExecutionStatusFailure|\Near\JsonRpc\Generated\Models\FinalExecutionStatusSuccessValue $root;

    public function __construct(\Near\JsonRpc\Generated\Models\FinalExecutionStatusNotStarted|\Near\JsonRpc\Generated\Models\FinalExecutionStatusStarted|\Near\JsonRpc\Generated\Models\FinalExecutionStatusFailure|\Near\JsonRpc\Generated\Models\FinalExecutionStatusSuccessValue $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\FinalExecutionStatusNotStarted::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\FinalExecutionStatusStarted::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\FinalExecutionStatusFailure::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\FinalExecutionStatusSuccessValue::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for FinalExecutionStatus.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\FinalExecutionStatusNotStarted => 'NotStarted',
            $this->root instanceof \Near\JsonRpc\Generated\Models\FinalExecutionStatusStarted => 'Started',
            $this->root instanceof \Near\JsonRpc\Generated\Models\FinalExecutionStatusFailure => 'Failure',
            $this->root instanceof \Near\JsonRpc\Generated\Models\FinalExecutionStatusSuccessValue => 'SuccessValue',
            default => throw new \LogicException('Unknown FinalExecutionStatus variant.'),
        };
    }
    public static function notStarted(): self { return new self(\Near\JsonRpc\Generated\Models\FinalExecutionStatusNotStarted::NotStarted); }
    public static function started(): self { return new self(\Near\JsonRpc\Generated\Models\FinalExecutionStatusStarted::Started); }
    public static function failure(\Near\JsonRpc\Generated\Models\TxExecutionError $payload): self { return new self(new \Near\JsonRpc\Generated\Models\FinalExecutionStatusFailure($payload)); }
    public static function successValue(\Near\JsonRpc\Generated\Models\FinalExecutionStatusSuccessValue $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\FinalExecutionStatusNotStarted',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\FinalExecutionStatusStarted',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FinalExecutionStatusFailure',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FinalExecutionStatusSuccessValue',
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
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\FinalExecutionStatusNotStarted',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpEnum' => '\\Near\\JsonRpc\\Generated\\Models\\FinalExecutionStatusStarted',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FinalExecutionStatusFailure',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FinalExecutionStatusSuccessValue',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
