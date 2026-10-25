<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class ErrorWrapperForRpcBlockError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\ErrorWrapperForRpcBlockErrorRequestValidationError|\Near\JsonRpc\Generated\Models\ErrorWrapperForRpcBlockErrorHandlerError|\Near\JsonRpc\Generated\Models\ErrorWrapperForRpcBlockErrorInternalError */
    public \Near\JsonRpc\Generated\Models\ErrorWrapperForRpcBlockErrorRequestValidationError|\Near\JsonRpc\Generated\Models\ErrorWrapperForRpcBlockErrorHandlerError|\Near\JsonRpc\Generated\Models\ErrorWrapperForRpcBlockErrorInternalError $root;

    public function __construct(\Near\JsonRpc\Generated\Models\ErrorWrapperForRpcBlockErrorRequestValidationError|\Near\JsonRpc\Generated\Models\ErrorWrapperForRpcBlockErrorHandlerError|\Near\JsonRpc\Generated\Models\ErrorWrapperForRpcBlockErrorInternalError $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\ErrorWrapperForRpcBlockErrorRequestValidationError::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\ErrorWrapperForRpcBlockErrorHandlerError::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\ErrorWrapperForRpcBlockErrorInternalError::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for ErrorWrapperForRpcBlockError.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\ErrorWrapperForRpcBlockErrorRequestValidationError => 'REQUEST_VALIDATION_ERROR',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ErrorWrapperForRpcBlockErrorHandlerError => 'HANDLER_ERROR',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ErrorWrapperForRpcBlockErrorInternalError => 'INTERNAL_ERROR',
            default => throw new \LogicException('Unknown ErrorWrapperForRpcBlockError variant.'),
        };
    }
    public static function requestValidationError(\Near\JsonRpc\Generated\Models\ErrorWrapperForRpcBlockErrorRequestValidationError $variant): self { return new self($variant); }
    public static function handlerError(\Near\JsonRpc\Generated\Models\ErrorWrapperForRpcBlockErrorHandlerError $variant): self { return new self($variant); }
    public static function internalError(\Near\JsonRpc\Generated\Models\ErrorWrapperForRpcBlockErrorInternalError $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ErrorWrapperForRpcBlockErrorRequestValidationError',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ErrorWrapperForRpcBlockErrorHandlerError',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ErrorWrapperForRpcBlockErrorInternalError',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ErrorWrapperForRpcBlockErrorRequestValidationError',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ErrorWrapperForRpcBlockErrorHandlerError',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ErrorWrapperForRpcBlockErrorInternalError',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
