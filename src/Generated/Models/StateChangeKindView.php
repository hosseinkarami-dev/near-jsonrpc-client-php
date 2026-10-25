<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * It is a [serializable view] of [`StateChangeKind`].
 *
 * [serializable view]: ./index.html
 * [`StateChangeKind`]: ../types/struct.StateChangeKind.html
 */
final readonly class StateChangeKindView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\StateChangeKindViewAccountTouched|\Near\JsonRpc\Generated\Models\StateChangeKindViewAccessKeyTouched|\Near\JsonRpc\Generated\Models\StateChangeKindViewDataTouched|\Near\JsonRpc\Generated\Models\StateChangeKindViewContractCodeTouched */
    public \Near\JsonRpc\Generated\Models\StateChangeKindViewAccountTouched|\Near\JsonRpc\Generated\Models\StateChangeKindViewAccessKeyTouched|\Near\JsonRpc\Generated\Models\StateChangeKindViewDataTouched|\Near\JsonRpc\Generated\Models\StateChangeKindViewContractCodeTouched $root;

    public function __construct(\Near\JsonRpc\Generated\Models\StateChangeKindViewAccountTouched|\Near\JsonRpc\Generated\Models\StateChangeKindViewAccessKeyTouched|\Near\JsonRpc\Generated\Models\StateChangeKindViewDataTouched|\Near\JsonRpc\Generated\Models\StateChangeKindViewContractCodeTouched $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\StateChangeKindViewAccountTouched::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\StateChangeKindViewAccessKeyTouched::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\StateChangeKindViewDataTouched::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\StateChangeKindViewContractCodeTouched::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for StateChangeKindView.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\StateChangeKindViewAccountTouched => 'account_touched',
            $this->root instanceof \Near\JsonRpc\Generated\Models\StateChangeKindViewAccessKeyTouched => 'access_key_touched',
            $this->root instanceof \Near\JsonRpc\Generated\Models\StateChangeKindViewDataTouched => 'data_touched',
            $this->root instanceof \Near\JsonRpc\Generated\Models\StateChangeKindViewContractCodeTouched => 'contract_code_touched',
            default => throw new \LogicException('Unknown StateChangeKindView variant.'),
        };
    }
    public static function accountTouched(\Near\JsonRpc\Generated\Models\StateChangeKindViewAccountTouched $variant): self { return new self($variant); }
    public static function accessKeyTouched(\Near\JsonRpc\Generated\Models\StateChangeKindViewAccessKeyTouched $variant): self { return new self($variant); }
    public static function dataTouched(\Near\JsonRpc\Generated\Models\StateChangeKindViewDataTouched $variant): self { return new self($variant); }
    public static function contractCodeTouched(\Near\JsonRpc\Generated\Models\StateChangeKindViewContractCodeTouched $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeKindViewAccountTouched',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeKindViewAccessKeyTouched',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeKindViewDataTouched',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeKindViewContractCodeTouched',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeKindViewAccountTouched',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeKindViewAccessKeyTouched',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeKindViewDataTouched',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeKindViewContractCodeTouched',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
