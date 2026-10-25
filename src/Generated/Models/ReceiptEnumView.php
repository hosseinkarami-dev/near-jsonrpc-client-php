<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class ReceiptEnumView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\ReceiptEnumViewAction|\Near\JsonRpc\Generated\Models\ReceiptEnumViewData|\Near\JsonRpc\Generated\Models\ReceiptEnumViewGlobalContractDistribution */
    public \Near\JsonRpc\Generated\Models\ReceiptEnumViewAction|\Near\JsonRpc\Generated\Models\ReceiptEnumViewData|\Near\JsonRpc\Generated\Models\ReceiptEnumViewGlobalContractDistribution $root;

    public function __construct(\Near\JsonRpc\Generated\Models\ReceiptEnumViewAction|\Near\JsonRpc\Generated\Models\ReceiptEnumViewData|\Near\JsonRpc\Generated\Models\ReceiptEnumViewGlobalContractDistribution $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\ReceiptEnumViewAction::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\ReceiptEnumViewData::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\ReceiptEnumViewGlobalContractDistribution::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for ReceiptEnumView.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\ReceiptEnumViewAction => 'Action',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ReceiptEnumViewData => 'Data',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ReceiptEnumViewGlobalContractDistribution => 'GlobalContractDistribution',
            default => throw new \LogicException('Unknown ReceiptEnumView variant.'),
        };
    }
    public static function action(\Near\JsonRpc\Generated\Models\ReceiptEnumViewActionPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ReceiptEnumViewAction($payload)); }
    public static function data(\Near\JsonRpc\Generated\Models\ReceiptEnumViewDataPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ReceiptEnumViewData($payload)); }
    public static function globalContractDistribution(\Near\JsonRpc\Generated\Models\ReceiptEnumViewGlobalContractDistributionPayload $payload): self { return new self(new \Near\JsonRpc\Generated\Models\ReceiptEnumViewGlobalContractDistribution($payload)); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptEnumViewAction',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptEnumViewData',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptEnumViewGlobalContractDistribution',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptEnumViewAction',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptEnumViewData',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptEnumViewGlobalContractDistribution',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
