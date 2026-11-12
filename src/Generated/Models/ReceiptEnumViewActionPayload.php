<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class ReceiptEnumViewActionPayload implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var list<\Near\JsonRpc\Generated\Models\ActionView>
         */
        public array $actions,
        /**
         * @var \Near\JsonRpc\Generated\Models\NearToken
         */
        public \Near\JsonRpc\Generated\Models\NearToken $gasPrice,
        /**
         * @var list<\Near\JsonRpc\Generated\Models\CryptoHash>
         */
        public array $inputDataIds,
        /**
         * @var list<\Near\JsonRpc\Generated\Models\DataReceiverView>
         */
        public array $outputDataReceivers,
        /**
         * @var \Near\JsonRpc\Generated\Models\AccountId
         */
        public \Near\JsonRpc\Generated\Models\AccountId $signerId,
        /**
         * What authorized the chain, absent in views written before external calls
         *
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\AuthorizationContext|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $authorizationContext = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * @var bool|null
         */
        public bool|null $isPromiseYield = null,
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\AccountId|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $refundTo = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * The key of the transaction that started the chain, absent in an external call's chain
         *
         * @var \Near\JsonRpc\Models\OptionalValue<\Near\JsonRpc\Generated\Models\PublicKey|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $signerPublicKey = new \Near\JsonRpc\Models\OptionalValue(),
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->actions, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'actions');
        \Near\JsonRpc\Models\TypeGuard::assert($this->gasPrice, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'gas_price');
        \Near\JsonRpc\Models\TypeGuard::assert($this->inputDataIds, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
    'nullable' => false,
  ),
  'type' => 'array',
), 'input_data_ids');
        \Near\JsonRpc\Models\TypeGuard::assert($this->outputDataReceivers, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DataReceiverView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'output_data_receivers');
        \Near\JsonRpc\Models\TypeGuard::assert($this->signerId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'signer_id');
        if ($this->authorizationContext->present) \Near\JsonRpc\Models\TypeGuard::assert($this->authorizationContext->value, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AuthorizationContext',
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
), 'authorization_context');
        if ($this->isPromiseYield !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->isPromiseYield, array (
  'default' => false,
  'type' => 'boolean',
), 'is_promise_yield');
        if ($this->refundTo->present) \Near\JsonRpc\Models\TypeGuard::assert($this->refundTo->value, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
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
), 'refund_to');
        if ($this->signerPublicKey->present) \Near\JsonRpc\Models\TypeGuard::assert($this->signerPublicKey->value, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
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
), 'signer_public_key');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ReceiptEnumViewActionPayload.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('signer_id', $data)) throw new \InvalidArgumentException('Missing required field: signer_id');
        if (!array_key_exists('gas_price', $data)) throw new \InvalidArgumentException('Missing required field: gas_price');
        if (!array_key_exists('output_data_receivers', $data)) throw new \InvalidArgumentException('Missing required field: output_data_receivers');
        if (!array_key_exists('input_data_ids', $data)) throw new \InvalidArgumentException('Missing required field: input_data_ids');
        if (!array_key_exists('actions', $data)) throw new \InvalidArgumentException('Missing required field: actions');
        $extra = array_diff_key($data, array (
  'actions' => true,
  'authorization_context' => true,
  'gas_price' => true,
  'input_data_ids' => true,
  'is_promise_yield' => true,
  'output_data_receivers' => true,
  'refund_to' => true,
  'signer_id' => true,
  'signer_public_key' => true,
));
        return new self(
            actions: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['actions'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'actions'),
            gasPrice: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['gas_price'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
  'nullable' => false,
), 'gas_price'),
            inputDataIds: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['input_data_ids'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
    'nullable' => false,
  ),
  'type' => 'array',
), 'input_data_ids'),
            outputDataReceivers: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['output_data_receivers'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DataReceiverView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'output_data_receivers'),
            signerId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['signer_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'signer_id'),
            authorizationContext: array_key_exists('authorization_context', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['authorization_context'], array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AuthorizationContext',
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
), 'authorization_context')) : new \Near\JsonRpc\Models\OptionalValue(),
            isPromiseYield: array_key_exists('is_promise_yield', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['is_promise_yield'], array (
  'default' => false,
  'type' => 'boolean',
), 'is_promise_yield') : null,
            refundTo: array_key_exists('refund_to', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['refund_to'], array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
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
), 'refund_to')) : new \Near\JsonRpc\Models\OptionalValue(),
            signerPublicKey: array_key_exists('signer_public_key', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['signer_public_key'], array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
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
), 'signer_public_key')) : new \Near\JsonRpc\Models\OptionalValue(),
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
        $data['actions'] = $this->actions;
        $data['gas_price'] = $this->gasPrice;
        $data['input_data_ids'] = $this->inputDataIds;
        $data['output_data_receivers'] = $this->outputDataReceivers;
        $data['signer_id'] = $this->signerId;
        if ($this->authorizationContext->present) $data['authorization_context'] = $this->authorizationContext->value;
        if ($this->isPromiseYield !== null) $data['is_promise_yield'] = $this->isPromiseYield;
        if ($this->refundTo->present) $data['refund_to'] = $this->refundTo->value;
        if ($this->signerPublicKey->present) $data['signer_public_key'] = $this->signerPublicKey->value;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'actions' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'authorization_context' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AuthorizationContext',
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
    'gas_price' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'input_data_ids' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'is_promise_yield' => 
    array (
      'default' => false,
      'type' => 'boolean',
    ),
    'output_data_receivers' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DataReceiverView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'refund_to' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
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
    'signer_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
    'signer_public_key' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
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
  ),
  'required' => 
  array (
    0 => 'signer_id',
    1 => 'gas_price',
    2 => 'output_data_receivers',
    3 => 'input_data_ids',
    4 => 'actions',
  ),
  'type' => 'object',
), 'ReceiptEnumViewActionPayload'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'actions' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'authorization_context' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AuthorizationContext',
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
    'gas_price' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
      'nullable' => false,
    ),
    'input_data_ids' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'is_promise_yield' => 
    array (
      'default' => false,
      'type' => 'boolean',
    ),
    'output_data_receivers' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DataReceiverView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'refund_to' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
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
    'signer_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
    'signer_public_key' => 
    array (
      'anyOf' => 
      array (
        0 => 
        array (
          'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
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
  ),
  'required' => 
  array (
    0 => 'signer_id',
    1 => 'gas_price',
    2 => 'output_data_receivers',
    3 => 'input_data_ids',
    4 => 'actions',
  ),
  'type' => 'object',
), 'ReceiptEnumViewActionPayload');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
