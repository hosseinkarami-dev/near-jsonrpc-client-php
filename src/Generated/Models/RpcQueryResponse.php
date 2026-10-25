<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class RpcQueryResponse implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\RpcQueryResponseAccountView|\Near\JsonRpc\Generated\Models\RpcQueryResponseContractCodeView|\Near\JsonRpc\Generated\Models\RpcQueryResponseViewStateResult|\Near\JsonRpc\Generated\Models\RpcQueryResponseCallResult|\Near\JsonRpc\Generated\Models\RpcQueryResponseAccessKeyView|\Near\JsonRpc\Generated\Models\RpcQueryResponseAccessKeyList|\Near\JsonRpc\Generated\Models\RpcQueryResponseGasKeyNoncesView */
    public \Near\JsonRpc\Generated\Models\RpcQueryResponseAccountView|\Near\JsonRpc\Generated\Models\RpcQueryResponseContractCodeView|\Near\JsonRpc\Generated\Models\RpcQueryResponseViewStateResult|\Near\JsonRpc\Generated\Models\RpcQueryResponseCallResult|\Near\JsonRpc\Generated\Models\RpcQueryResponseAccessKeyView|\Near\JsonRpc\Generated\Models\RpcQueryResponseAccessKeyList|\Near\JsonRpc\Generated\Models\RpcQueryResponseGasKeyNoncesView $root;

    public function __construct(\Near\JsonRpc\Generated\Models\RpcQueryResponseAccountView|\Near\JsonRpc\Generated\Models\RpcQueryResponseContractCodeView|\Near\JsonRpc\Generated\Models\RpcQueryResponseViewStateResult|\Near\JsonRpc\Generated\Models\RpcQueryResponseCallResult|\Near\JsonRpc\Generated\Models\RpcQueryResponseAccessKeyView|\Near\JsonRpc\Generated\Models\RpcQueryResponseAccessKeyList|\Near\JsonRpc\Generated\Models\RpcQueryResponseGasKeyNoncesView $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\RpcQueryResponseAccountView::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\RpcQueryResponseContractCodeView::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\RpcQueryResponseViewStateResult::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[3] = \Near\JsonRpc\Generated\Models\RpcQueryResponseCallResult::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[4] = \Near\JsonRpc\Generated\Models\RpcQueryResponseAccessKeyView::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[5] = \Near\JsonRpc\Generated\Models\RpcQueryResponseAccessKeyList::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[6] = \Near\JsonRpc\Generated\Models\RpcQueryResponseGasKeyNoncesView::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (false && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its anyOf schema for RpcQueryResponse.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryResponseAccountView => 'AccountView',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryResponseContractCodeView => 'ContractCodeView',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryResponseViewStateResult => 'ViewStateResult',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryResponseCallResult => 'CallResult',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryResponseAccessKeyView => 'AccessKeyView',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryResponseAccessKeyList => 'AccessKeyList',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcQueryResponseGasKeyNoncesView => 'GasKeyNoncesView',
            default => throw new \LogicException('Unknown RpcQueryResponse variant.'),
        };
    }
    public static function accountView(\Near\JsonRpc\Generated\Models\RpcQueryResponseAccountView $variant): self { return new self($variant); }
    public static function contractCodeView(\Near\JsonRpc\Generated\Models\RpcQueryResponseContractCodeView $variant): self { return new self($variant); }
    public static function viewStateResult(\Near\JsonRpc\Generated\Models\RpcQueryResponseViewStateResult $variant): self { return new self($variant); }
    public static function callResult(\Near\JsonRpc\Generated\Models\RpcQueryResponseCallResult $variant): self { return new self($variant); }
    public static function accessKeyView(\Near\JsonRpc\Generated\Models\RpcQueryResponseAccessKeyView $variant): self { return new self($variant); }
    public static function accessKeyList(\Near\JsonRpc\Generated\Models\RpcQueryResponseAccessKeyList $variant): self { return new self($variant); }
    public static function gasKeyNoncesView(\Near\JsonRpc\Generated\Models\RpcQueryResponseGasKeyNoncesView $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryResponseAccountView',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryResponseContractCodeView',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryResponseViewStateResult',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryResponseCallResult',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryResponseAccessKeyView',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryResponseAccessKeyList',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryResponseGasKeyNoncesView',
      'nullable' => false,
    ),
  ),
  'properties' => 
  array (
    'block_hash' => 
    array (
      '$ref' => '#/components/schemas/CryptoHash',
    ),
    'block_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'block_height',
    1 => 'block_hash',
  ),
  'type' => 'object',
), 'root'));
        return $this->root;
    }
    public function jsonSerializeForEncoding(): mixed { return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryResponseAccountView',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryResponseContractCodeView',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryResponseViewStateResult',
      'nullable' => false,
    ),
    3 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryResponseCallResult',
      'nullable' => false,
    ),
    4 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryResponseAccessKeyView',
      'nullable' => false,
    ),
    5 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryResponseAccessKeyList',
      'nullable' => false,
    ),
    6 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryResponseGasKeyNoncesView',
      'nullable' => false,
    ),
  ),
  'properties' => 
  array (
    'block_hash' => 
    array (
      '$ref' => '#/components/schemas/CryptoHash',
    ),
    'block_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
  ),
  'required' => 
  array (
    0 => 'block_height',
    1 => 'block_hash',
  ),
  'type' => 'object',
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
