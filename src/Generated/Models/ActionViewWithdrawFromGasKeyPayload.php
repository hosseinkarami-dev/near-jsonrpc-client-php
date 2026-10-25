<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class ActionViewWithdrawFromGasKeyPayload implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\NearToken
         */
        public \Near\JsonRpc\Generated\Models\NearToken $amount,
        /**
         * @var \Near\JsonRpc\Generated\Models\PublicKey
         */
        public \Near\JsonRpc\Generated\Models\PublicKey $publicKey,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->amount, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'amount');
        \Near\JsonRpc\Models\TypeGuard::assert($this->publicKey, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
  'nullable' => false,
), 'public_key');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionViewWithdrawFromGasKeyPayload.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('public_key', $data)) throw new \InvalidArgumentException('Missing required field: public_key');
        if (!array_key_exists('amount', $data)) throw new \InvalidArgumentException('Missing required field: amount');
        $extra = array_diff_key($data, array (
  'amount' => true,
  'public_key' => true,
));
        return new self(
            amount: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['amount'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'amount'),
            publicKey: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['public_key'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
  'nullable' => false,
), 'public_key'),
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
        $data['amount'] = $this->amount;
        $data['public_key'] = $this->publicKey;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'amount' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'public_key' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'public_key',
    1 => 'amount',
  ),
  'type' => 'object',
), 'ActionViewWithdrawFromGasKeyPayload'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'amount' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'public_key' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'public_key',
    1 => 'amount',
  ),
  'type' => 'object',
), 'ActionViewWithdrawFromGasKeyPayload');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
