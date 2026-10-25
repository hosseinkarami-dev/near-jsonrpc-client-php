<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * A state for the current head of a light client. More info [here](https://nomicon.io/ChainSpec/LightClient).
 */
final readonly class RpcLightClientNextBlockResponse implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var list<\Near\JsonRpc\Generated\Models\Signature|null>
         */
        public array|null $approvalsAfterNext = null,
        /**
         * Inner part of the block header that gets hashed, split into two parts, one that is sent
         *    to light clients, and the rest
         *
         * @var \Near\JsonRpc\Generated\Models\BlockHeaderInnerLiteView|null
         */
        public \Near\JsonRpc\Generated\Models\BlockHeaderInnerLiteView|null $innerLite = null,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash|null
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash|null $innerRestHash = null,
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash|null
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash|null $nextBlockInnerHash = null,
        /**
         * @var \Near\JsonRpc\Models\OptionalValue<list<\Near\JsonRpc\Generated\Models\ValidatorStakeView>|null>
         */
        public \Near\JsonRpc\Models\OptionalValue $nextBps = new \Near\JsonRpc\Models\OptionalValue(),
        /**
         * @var \Near\JsonRpc\Generated\Models\CryptoHash|null
         */
        public \Near\JsonRpc\Generated\Models\CryptoHash|null $prevBlockHash = null,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        if ($this->approvalsAfterNext !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->approvalsAfterNext, array (
  'items' => 
  array (
    'anyOf' => 
    array (
      0 => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Signature',
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
  'type' => 'array',
), 'approvals_after_next');
        if ($this->innerLite !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->innerLite, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockHeaderInnerLiteView',
  'nullable' => false,
), 'inner_lite');
        if ($this->innerRestHash !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->innerRestHash, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'inner_rest_hash');
        if ($this->nextBlockInnerHash !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->nextBlockInnerHash, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'next_block_inner_hash');
        if ($this->nextBps->present) \Near\JsonRpc\Models\TypeGuard::assert($this->nextBps->value, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorStakeView',
    'nullable' => false,
  ),
  'nullable' => true,
  'type' => 'array',
), 'next_bps');
        if ($this->prevBlockHash !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->prevBlockHash, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'prev_block_hash');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcLightClientNextBlockResponse.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        $extra = array_diff_key($data, array (
  'approvals_after_next' => true,
  'inner_lite' => true,
  'inner_rest_hash' => true,
  'next_block_inner_hash' => true,
  'next_bps' => true,
  'prev_block_hash' => true,
));
        return new self(
            approvalsAfterNext: array_key_exists('approvals_after_next', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['approvals_after_next'], array (
  'items' => 
  array (
    'anyOf' => 
    array (
      0 => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Signature',
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
  'type' => 'array',
), 'approvals_after_next') : null,
            innerLite: array_key_exists('inner_lite', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['inner_lite'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockHeaderInnerLiteView',
  'nullable' => false,
), 'inner_lite') : null,
            innerRestHash: array_key_exists('inner_rest_hash', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['inner_rest_hash'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'inner_rest_hash') : null,
            nextBlockInnerHash: array_key_exists('next_block_inner_hash', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['next_block_inner_hash'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'next_block_inner_hash') : null,
            nextBps: array_key_exists('next_bps', $data) ? \Near\JsonRpc\Models\OptionalValue::of(\Near\JsonRpc\Models\ModelHydrator::hydrate($data['next_bps'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorStakeView',
    'nullable' => false,
  ),
  'nullable' => true,
  'type' => 'array',
), 'next_bps')) : new \Near\JsonRpc\Models\OptionalValue(),
            prevBlockHash: array_key_exists('prev_block_hash', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['prev_block_hash'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'prev_block_hash') : null,
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
        if ($this->approvalsAfterNext !== null) $data['approvals_after_next'] = $this->approvalsAfterNext;
        if ($this->innerLite !== null) $data['inner_lite'] = $this->innerLite;
        if ($this->innerRestHash !== null) $data['inner_rest_hash'] = $this->innerRestHash;
        if ($this->nextBlockInnerHash !== null) $data['next_block_inner_hash'] = $this->nextBlockInnerHash;
        if ($this->nextBps->present) $data['next_bps'] = $this->nextBps->value;
        if ($this->prevBlockHash !== null) $data['prev_block_hash'] = $this->prevBlockHash;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'approvals_after_next' => 
    array (
      'items' => 
      array (
        'anyOf' => 
        array (
          0 => 
          array (
            'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Signature',
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
      'type' => 'array',
    ),
    'inner_lite' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockHeaderInnerLiteView',
      'nullable' => false,
    ),
    'inner_rest_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'next_block_inner_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'next_bps' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorStakeView',
        'nullable' => false,
      ),
      'nullable' => true,
      'type' => 'array',
    ),
    'prev_block_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'RpcLightClientNextBlockResponse'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'approvals_after_next' => 
    array (
      'items' => 
      array (
        'anyOf' => 
        array (
          0 => 
          array (
            'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Signature',
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
      'type' => 'array',
    ),
    'inner_lite' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockHeaderInnerLiteView',
      'nullable' => false,
    ),
    'inner_rest_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'next_block_inner_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
    'next_bps' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorStakeView',
        'nullable' => false,
      ),
      'nullable' => true,
      'type' => 'array',
    ),
    'prev_block_hash' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
      'nullable' => false,
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'RpcLightClientNextBlockResponse');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
