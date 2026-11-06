<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * On the wire, a signed transaction goes in `signed_tx_base64` and an ECC in `ecc_base64`, so
 * requests with a signed transaction look as they did before ECCs.
 */
final readonly class RpcSendTransactionRequest implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * An external contract call (ECC). Exactly one of this and `signed_tx_base64` is expected.
         *
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\EccTransaction|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $eccBase64 = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * A signed transaction. Exactly one of this and `ecc_base64` is expected.
         *
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\SignedTransaction|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $signedTxBase64 = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * @var \Near\JsonRpc\Generated\Models\TxExecutionStatus|null
         */
        public \Near\JsonRpc\Generated\Models\TxExecutionStatus|null $waitUntil = null,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        if ($this->eccBase64->present) \Near\JsonRpc\Models\TypeGuard::assert($this->eccBase64->value, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\EccTransaction',
      'nullable' => false,
    ),
    1 => 
    array (
      'enum' => 
      array (
        0 => NULL,
      ),
      'nullable' => true,
      'type' => 'null',
    ),
  ),
), 'ecc_base64');
        if ($this->signedTxBase64->present) \Near\JsonRpc\Models\TypeGuard::assert($this->signedTxBase64->value, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SignedTransaction',
      'nullable' => false,
    ),
    1 => 
    array (
      'enum' => 
      array (
        0 => NULL,
      ),
      'nullable' => true,
      'type' => 'null',
    ),
  ),
), 'signed_tx_base64');
        if ($this->waitUntil !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->waitUntil, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TxExecutionStatus',
  'nullable' => false,
), 'wait_until');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcSendTransactionRequest.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        $extra = array_diff_key($data, array (
  'ecc_base64' => true,
  'signed_tx_base64' => true,
  'wait_until' => true,
));
        return new self(
            eccBase64: array_key_exists('ecc_base64', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['ecc_base64'], array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\EccTransaction',
      'nullable' => false,
    ),
    1 => 
    array (
      'enum' => 
      array (
        0 => NULL,
      ),
      'nullable' => true,
      'type' => 'null',
    ),
  ),
), 'ecc_base64')) : new \Near\JsonRpc\Models\OptionalValue(),
            signedTxBase64: array_key_exists('signed_tx_base64', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['signed_tx_base64'], array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SignedTransaction',
      'nullable' => false,
    ),
    1 => 
    array (
      'enum' => 
      array (
        0 => NULL,
      ),
      'nullable' => true,
      'type' => 'null',
    ),
  ),
), 'signed_tx_base64')) : new \Near\JsonRpc\Models\OptionalValue(),
            waitUntil: array_key_exists('wait_until', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['wait_until'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TxExecutionStatus',
  'nullable' => false,
), 'wait_until') : null,
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
        if ($this->eccBase64->present) $data['ecc_base64'] = $this->eccBase64->value;
        if ($this->signedTxBase64->present) $data['signed_tx_base64'] = $this->signedTxBase64->value;
        if ($this->waitUntil !== null) $data['wait_until'] = $this->waitUntil;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'ecc_base64' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\EccTransaction',
          'nullable' => false,
        ),
        1 => 
        array (
          'enum' => 
          array (
            0 => NULL,
          ),
          'nullable' => true,
          'type' => 'null',
        ),
      ),
    ),
    'signed_tx_base64' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SignedTransaction',
          'nullable' => false,
        ),
        1 => 
        array (
          'enum' => 
          array (
            0 => NULL,
          ),
          'nullable' => true,
          'type' => 'null',
        ),
      ),
    ),
    'wait_until' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TxExecutionStatus',
      'nullable' => false,
    ),
  ),
  'title' => 'RpcSendTransactionRequest',
  'type' => 'object',
  'required' => 
  array (
  ),
), 'RpcSendTransactionRequest'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'ecc_base64' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\EccTransaction',
          'nullable' => false,
        ),
        1 => 
        array (
          'enum' => 
          array (
            0 => NULL,
          ),
          'nullable' => true,
          'type' => 'null',
        ),
      ),
    ),
    'signed_tx_base64' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\SignedTransaction',
          'nullable' => false,
        ),
        1 => 
        array (
          'enum' => 
          array (
            0 => NULL,
          ),
          'nullable' => true,
          'type' => 'null',
        ),
      ),
    ),
    'wait_until' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TxExecutionStatus',
      'nullable' => false,
    ),
  ),
  'title' => 'RpcSendTransactionRequest',
  'type' => 'object',
  'required' => 
  array (
  ),
), 'RpcSendTransactionRequest');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
