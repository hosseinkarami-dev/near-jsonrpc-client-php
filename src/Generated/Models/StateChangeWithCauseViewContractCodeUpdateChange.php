<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class StateChangeWithCauseViewContractCodeUpdateChange implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\AccountId
         */
        public \Near\JsonRpc\Generated\Models\AccountId $accountId,
        /**
         * @var string
         */
        public string $codeBase64,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->accountId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'account_id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->codeBase64, array (
  'type' => 'string',
), 'code_base64');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for StateChangeWithCauseViewContractCodeUpdateChange.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('account_id', $data)) throw new \InvalidArgumentException('Missing required field: account_id');
        if (!array_key_exists('code_base64', $data)) throw new \InvalidArgumentException('Missing required field: code_base64');
        $extra = array_diff_key($data, array (
  'account_id' => true,
  'code_base64' => true,
));
        return new self(
            accountId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['account_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'account_id'),
            codeBase64: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['code_base64'], array (
  'type' => 'string',
), 'code_base64'),
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
        $data['account_id'] = $this->accountId;
        $data['code_base64'] = $this->codeBase64;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'account_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
    'code_base64' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'account_id',
    1 => 'code_base64',
  ),
  'type' => 'object',
), 'StateChangeWithCauseViewContractCodeUpdateChange'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'account_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
    'code_base64' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'account_id',
    1 => 'code_base64',
  ),
  'type' => 'object',
), 'StateChangeWithCauseViewContractCodeUpdateChange');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
