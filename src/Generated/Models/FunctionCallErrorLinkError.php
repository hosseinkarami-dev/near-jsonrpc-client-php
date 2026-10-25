<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Wasm binary env link error
 *
 * Note: this is only to deserialize old data, use execution error for new data
 */
final readonly class FunctionCallErrorLinkError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\FunctionCallErrorLinkErrorPayload
         */
        public \Near\JsonRpc\Generated\Models\FunctionCallErrorLinkErrorPayload $linkError
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->linkError, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FunctionCallErrorLinkErrorPayload',
  'nullable' => false,
), 'LinkError');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for FunctionCallErrorLinkError.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('LinkError', $data)) throw new \InvalidArgumentException('Missing required field: LinkError');
        $unknown = array_diff_key($data, array (
  'LinkError' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in FunctionCallErrorLinkError.');
        return new self(
            linkError: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['LinkError'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FunctionCallErrorLinkErrorPayload',
  'nullable' => false,
), 'LinkError')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['LinkError'] = $this->linkError;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'LinkError' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FunctionCallErrorLinkErrorPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'LinkError',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'LinkError',
    'tag' => 'LinkError',
    'payload' => 'FunctionCallErrorLinkErrorPayload',
  ),
), 'FunctionCallErrorLinkError'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'LinkError' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\FunctionCallErrorLinkErrorPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'LinkError',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'LinkError',
    'tag' => 'LinkError',
    'payload' => 'FunctionCallErrorLinkErrorPayload',
  ),
), 'FunctionCallErrorLinkError');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
