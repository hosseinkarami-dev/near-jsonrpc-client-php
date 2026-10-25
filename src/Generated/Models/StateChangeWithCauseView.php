<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class StateChangeWithCauseView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\StateChangeWithCauseViewAccountUpdate|\Near\JsonRpc\Generated\Models\StateChangeWithCauseViewAccountDeletion|\Near\JsonRpc\Generated\Models\StateChangeWithCauseViewAccessKeyUpdate|\Near\JsonRpc\Generated\Models\StateChangeWithCauseViewAccessKeyDeletion|\Near\JsonRpc\Generated\Models\StateChangeWithCauseViewGasKeyNonceUpdate|\Near\JsonRpc\Generated\Models\StateChangeWithCauseViewDataUpdate|\Near\JsonRpc\Generated\Models\StateChangeWithCauseViewDataDeletion|\Near\JsonRpc\Generated\Models\StateChangeWithCauseViewContractCodeUpdate|\Near\JsonRpc\Generated\Models\StateChangeWithCauseViewContractCodeDeletion */
    public \Near\JsonRpc\Generated\Models\StateChangeWithCauseViewAccountUpdate|\Near\JsonRpc\Generated\Models\StateChangeWithCauseViewAccountDeletion|\Near\JsonRpc\Generated\Models\StateChangeWithCauseViewAccessKeyUpdate|\Near\JsonRpc\Generated\Models\StateChangeWithCauseViewAccessKeyDeletion|\Near\JsonRpc\Generated\Models\StateChangeWithCauseViewGasKeyNonceUpdate|\Near\JsonRpc\Generated\Models\StateChangeWithCauseViewDataUpdate|\Near\JsonRpc\Generated\Models\StateChangeWithCauseViewDataDeletion|\Near\JsonRpc\Generated\Models\StateChangeWithCauseViewContractCodeUpdate|\Near\JsonRpc\Generated\Models\StateChangeWithCauseViewContractCodeDeletion $root;

    public function __construct(\Near\JsonRpc\Generated\Models\StateChangeWithCauseViewAccountUpdate|\Near\JsonRpc\Generated\Models\StateChangeWithCauseViewAccountDeletion|\Near\JsonRpc\Generated\Models\StateChangeWithCauseViewAccessKeyUpdate|\Near\JsonRpc\Generated\Models\StateChangeWithCauseViewAccessKeyDeletion|\Near\JsonRpc\Generated\Models\StateChangeWithCauseViewGasKeyNonceUpdate|\Near\JsonRpc\Generated\Models\StateChangeWithCauseViewDataUpdate|\Near\JsonRpc\Generated\Models\StateChangeWithCauseViewDataDeletion|\Near\JsonRpc\Generated\Models\StateChangeWithCauseViewContractCodeUpdate|\Near\JsonRpc\Generated\Models\StateChangeWithCauseViewContractCodeDeletion $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\StateChangeWithCauseViewAccountUpdate::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\StateChangeWithCauseViewAccountDeletion::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\StateChangeWithCauseViewAccessKeyUpdate::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\StateChangeWithCauseViewAccessKeyDeletion::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[4] = \Near\JsonRpc\Generated\Models\StateChangeWithCauseViewGasKeyNonceUpdate::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[5] = \Near\JsonRpc\Generated\Models\StateChangeWithCauseViewDataUpdate::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[6] = \Near\JsonRpc\Generated\Models\StateChangeWithCauseViewDataDeletion::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[7] = \Near\JsonRpc\Generated\Models\StateChangeWithCauseViewContractCodeUpdate::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[8] = \Near\JsonRpc\Generated\Models\StateChangeWithCauseViewContractCodeDeletion::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for StateChangeWithCauseView.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\StateChangeWithCauseViewAccountUpdate => 'account_update',
            $this->root instanceof \Near\JsonRpc\Generated\Models\StateChangeWithCauseViewAccountDeletion => 'account_deletion',
            $this->root instanceof \Near\JsonRpc\Generated\Models\StateChangeWithCauseViewAccessKeyUpdate => 'access_key_update',
            $this->root instanceof \Near\JsonRpc\Generated\Models\StateChangeWithCauseViewAccessKeyDeletion => 'access_key_deletion',
            $this->root instanceof \Near\JsonRpc\Generated\Models\StateChangeWithCauseViewGasKeyNonceUpdate => 'gas_key_nonce_update',
            $this->root instanceof \Near\JsonRpc\Generated\Models\StateChangeWithCauseViewDataUpdate => 'data_update',
            $this->root instanceof \Near\JsonRpc\Generated\Models\StateChangeWithCauseViewDataDeletion => 'data_deletion',
            $this->root instanceof \Near\JsonRpc\Generated\Models\StateChangeWithCauseViewContractCodeUpdate => 'contract_code_update',
            $this->root instanceof \Near\JsonRpc\Generated\Models\StateChangeWithCauseViewContractCodeDeletion => 'contract_code_deletion',
            default => throw new \LogicException('Unknown StateChangeWithCauseView variant.'),
        };
    }
    public static function accountUpdate(\Near\JsonRpc\Generated\Models\StateChangeWithCauseViewAccountUpdate $variant): self { return new self($variant); }
    public static function accountDeletion(\Near\JsonRpc\Generated\Models\StateChangeWithCauseViewAccountDeletion $variant): self { return new self($variant); }
    public static function accessKeyUpdate(\Near\JsonRpc\Generated\Models\StateChangeWithCauseViewAccessKeyUpdate $variant): self { return new self($variant); }
    public static function accessKeyDeletion(\Near\JsonRpc\Generated\Models\StateChangeWithCauseViewAccessKeyDeletion $variant): self { return new self($variant); }
    public static function gasKeyNonceUpdate(\Near\JsonRpc\Generated\Models\StateChangeWithCauseViewGasKeyNonceUpdate $variant): self { return new self($variant); }
    public static function dataUpdate(\Near\JsonRpc\Generated\Models\StateChangeWithCauseViewDataUpdate $variant): self { return new self($variant); }
    public static function dataDeletion(\Near\JsonRpc\Generated\Models\StateChangeWithCauseViewDataDeletion $variant): self { return new self($variant); }
    public static function contractCodeUpdate(\Near\JsonRpc\Generated\Models\StateChangeWithCauseViewContractCodeUpdate $variant): self { return new self($variant); }
    public static function contractCodeDeletion(\Near\JsonRpc\Generated\Models\StateChangeWithCauseViewContractCodeDeletion $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeWithCauseViewAccountUpdate',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeWithCauseViewAccountDeletion',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeWithCauseViewAccessKeyUpdate',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeWithCauseViewAccessKeyDeletion',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeWithCauseViewGasKeyNonceUpdate',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeWithCauseViewDataUpdate',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeWithCauseViewDataDeletion',
      'nullable' => false,
    ),
    7 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeWithCauseViewContractCodeUpdate',
      'nullable' => false,
    ),
    8 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeWithCauseViewContractCodeDeletion',
      'nullable' => false,
    ),
  ),
  'properties' => 
  array (
    'cause' => 
    array (
      '$ref' => '#/components/schemas/StateChangeCauseView',
    ),
  ),
  'required' => 
  array (
    0 => 'cause',
  ),
  'type' => 'object',
), 'root'));
        return $this->root;
    }
    public function jsonSerializeForEncoding(): mixed { return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeWithCauseViewAccountUpdate',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeWithCauseViewAccountDeletion',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeWithCauseViewAccessKeyUpdate',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeWithCauseViewAccessKeyDeletion',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeWithCauseViewGasKeyNonceUpdate',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeWithCauseViewDataUpdate',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeWithCauseViewDataDeletion',
      'nullable' => false,
    ),
    7 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeWithCauseViewContractCodeUpdate',
      'nullable' => false,
    ),
    8 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\StateChangeWithCauseViewContractCodeDeletion',
      'nullable' => false,
    ),
  ),
  'properties' => 
  array (
    'cause' => 
    array (
      '$ref' => '#/components/schemas/StateChangeCauseView',
    ),
  ),
  'required' => 
  array (
    0 => 'cause',
  ),
  'type' => 'object',
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
