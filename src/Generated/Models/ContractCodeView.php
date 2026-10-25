<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * A view of the contract code.
 */
final readonly class ContractCodeView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var string
         */
        public string $codeBase64,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash $hash,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->codeBase64, array (
  'type' => 'string',
), 'code_base64');
        \Near\JsonRpc\Models\TypeGuard::assert($this->hash, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'hash');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ContractCodeView.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('code_base64', $data)) throw new \InvalidArgumentException('Missing required field: code_base64');
        if (!array_key_exists('hash', $data)) throw new \InvalidArgumentException('Missing required field: hash');
        $extra = array_diff_key($data, array (
  'code_base64' => true,
  'hash' => true,
));
        return new self(
            codeBase64: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['code_base64'], array (
  'type' => 'string',
), 'code_base64'),
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
        $data['code_base64'] = $this->codeBase64;
        $data['hash'] = $this->hash;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'code_base64' => 
    array (
      'type' => 'string',
    ),
    'hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'code_base64',
    1 => 'hash',
  ),
  'type' => 'object',
), 'ContractCodeView'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'code_base64' => 
    array (
      'type' => 'string',
    ),
    'hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'code_base64',
    1 => 'hash',
  ),
  'type' => 'object',
), 'ContractCodeView');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
