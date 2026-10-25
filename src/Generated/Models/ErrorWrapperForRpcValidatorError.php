<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI root value model.
 */
final readonly class ErrorWrapperForRpcValidatorError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var \Near\JsonRpc\Generated\Models\ErrorWrapperForRpcValidatorErrorRequestValidationError|\Near\JsonRpc\Generated\Models\ErrorWrapperForRpcValidatorErrorHandlerError|\Near\JsonRpc\Generated\Models\ErrorWrapperForRpcValidatorErrorInternalError */
    public \Near\JsonRpc\Generated\Models\ErrorWrapperForRpcValidatorErrorRequestValidationError|\Near\JsonRpc\Generated\Models\ErrorWrapperForRpcValidatorErrorHandlerError|\Near\JsonRpc\Generated\Models\ErrorWrapperForRpcValidatorErrorInternalError $root;

    public function __construct(\Near\JsonRpc\Generated\Models\ErrorWrapperForRpcValidatorErrorRequestValidationError|\Near\JsonRpc\Generated\Models\ErrorWrapperForRpcValidatorErrorHandlerError|\Near\JsonRpc\Generated\Models\ErrorWrapperForRpcValidatorErrorInternalError $root) { $this->root = $root; }

    public static function fromValue(mixed $value): self
    {
        $matched = [];
        try { $matched[0] = \Near\JsonRpc\Generated\Models\ErrorWrapperForRpcValidatorErrorRequestValidationError::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[1] = \Near\JsonRpc\Generated\Models\ErrorWrapperForRpcValidatorErrorHandlerError::fromValue($value); } catch (\InvalidArgumentException) {}
        try { $matched[2] = \Near\JsonRpc\Generated\Models\ErrorWrapperForRpcValidatorErrorInternalError::fromValue($value); } catch (\InvalidArgumentException) {}
        if ($matched === [] || (true && count($matched) !== 1)) throw new \InvalidArgumentException('Value does not match its oneOf schema for ErrorWrapperForRpcValidatorError.');
        return new self($matched[array_key_first($matched)]);
    }

    public function variant(): string
    {
        return match (true) {
            $this->root instanceof \Near\JsonRpc\Generated\Models\ErrorWrapperForRpcValidatorErrorRequestValidationError => 'REQUEST_VALIDATION_ERROR',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ErrorWrapperForRpcValidatorErrorHandlerError => 'HANDLER_ERROR',
            $this->root instanceof \Near\JsonRpc\Generated\Models\ErrorWrapperForRpcValidatorErrorInternalError => 'INTERNAL_ERROR',
            default => throw new \LogicException('Unknown ErrorWrapperForRpcValidatorError variant.'),
        };
    }
    public static function requestValidationError(\Near\JsonRpc\Generated\Models\ErrorWrapperForRpcValidatorErrorRequestValidationError $variant): self { return new self($variant); }
    public static function handlerError(\Near\JsonRpc\Generated\Models\ErrorWrapperForRpcValidatorErrorHandlerError $variant): self { return new self($variant); }
    public static function internalError(\Near\JsonRpc\Generated\Models\ErrorWrapperForRpcValidatorErrorInternalError $variant): self { return new self($variant); }
    public static function fromArray(array $data): self { return self::fromValue($data); }
    public static function fromJson(string $json): self { return self::fromValue(\Near\JsonRpc\Models\ModelHydrator::decodeJsonValue($json)); }
    public function jsonSerialize(): mixed
    {
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->root, array (
  'oneOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ErrorWrapperForRpcValidatorErrorRequestValidationError',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ErrorWrapperForRpcValidatorErrorHandlerError',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ErrorWrapperForRpcValidatorErrorInternalError',
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
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ErrorWrapperForRpcValidatorErrorRequestValidationError',
      'nullable' => false,
    ),
    1 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ErrorWrapperForRpcValidatorErrorHandlerError',
      'nullable' => false,
    ),
    2 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ErrorWrapperForRpcValidatorErrorInternalError',
      'nullable' => false,
    ),
  ),
), 'root'); }
    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
