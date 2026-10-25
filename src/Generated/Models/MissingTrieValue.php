<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class MissingTrieValue implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\MissingTrieValueContext
         */
        public \Near\JsonRpc\Generated\Models\MissingTrieValueContext $context,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $hash,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->context, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MissingTrieValueContext',
  'nullable' => false,
), 'context');
        \Near\JsonRpc\Models\TypeGuard::assert($this->hash, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'hash');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for MissingTrieValue.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('context', $data)) throw new \InvalidArgumentException('Missing required field: context');
        if (!array_key_exists('hash', $data)) throw new \InvalidArgumentException('Missing required field: hash');
        $extra = array_diff_key($data, array (
  'context' => true,
  'hash' => true,
));
        return new self(
            context: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['context'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MissingTrieValueContext',
  'nullable' => false,
), 'context'),
            hash: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['hash'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'hash'),
            _extra: $extra
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = $this->extra;
        $data['context'] = $this->context;
        $data['hash'] = $this->hash;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'context' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MissingTrieValueContext',
      'nullable' => false,
    ),
    'hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'context',
    1 => 'hash',
  ),
  'type' => 'object',
), 'MissingTrieValue'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'context' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\MissingTrieValueContext',
      'nullable' => false,
    ),
    'hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'context',
    1 => 'hash',
  ),
  'type' => 'object',
), 'MissingTrieValue');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
