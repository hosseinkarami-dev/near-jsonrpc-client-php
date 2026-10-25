<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class RpcValidatorError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\RpcValidatorErrorUnknownEpoch|\Near\JsonRpc\Generated\Models\RpcValidatorErrorValidatorInfoUnavailable|\Near\JsonRpc\Generated\Models\RpcValidatorErrorInternalError */
    public \Near\JsonRpc\Generated\Models\RpcValidatorErrorUnknownEpoch|\Near\JsonRpc\Generated\Models\RpcValidatorErrorValidatorInfoUnavailable|\Near\JsonRpc\Generated\Models\RpcValidatorErrorInternalError $root;

    public function __construct(\Near\JsonRpc\Generated\Models\RpcValidatorErrorUnknownEpoch|\Near\JsonRpc\Generated\Models\RpcValidatorErrorValidatorInfoUnavailable|\Near\JsonRpc\Generated\Models\RpcValidatorErrorInternalError $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\RpcValidatorErrorUnknownEpoch::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\RpcValidatorErrorValidatorInfoUnavailable::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\RpcValidatorErrorInternalError::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for RpcValidatorError.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcValidatorErrorUnknownEpoch => 'UNKNOWN_EPOCH',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcValidatorErrorValidatorInfoUnavailable => 'VALIDATOR_INFO_UNAVAILABLE',
            $this->root instanceof \Near\JsonRpc\Generated\Models\RpcValidatorErrorInternalError => 'INTERNAL_ERROR',
            default => throw new \LogicException('Unknown RpcValidatorError variant.'),
        };
    }
    public static function unknownEpoch(\Near\JsonRpc\Generated\Models\RpcValidatorErrorUnknownEpoch $variant): self { return new self($variant); }
    public static function validatorInfoUnavailable(\Near\JsonRpc\Generated\Models\RpcValidatorErrorValidatorInfoUnavailable $variant): self { return new self($variant); }
    public static function internalError(\Near\JsonRpc\Generated\Models\RpcValidatorErrorInternalError $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcValidatorErrorUnknownEpoch',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcValidatorErrorValidatorInfoUnavailable',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcValidatorErrorInternalError',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcValidatorErrorUnknownEpoch',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcValidatorErrorValidatorInfoUnavailable',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcValidatorErrorInternalError',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
