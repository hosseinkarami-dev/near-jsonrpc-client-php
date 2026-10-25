<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class RpcChunkResponse implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\AccountId
         */
        public \Near\JsonRpc\Generated\Models\AccountId $author,
        /**
         * @var \Near\JsonRpc\Generated\Models\ChunkHeaderView
         */
        public \Near\JsonRpc\Generated\Models\ChunkHeaderView $header,
        /**
         * @var list<\Near\JsonRpc\Generated\Models\ReceiptView>
         */
        public array $receipts,
        /**
         * @var list<\Near\JsonRpc\Generated\Models\TransactionEnvelopeView>
         */
        public array $transactions,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->author, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'author');
        \Near\JsonRpc\Models\TypeGuard::assert($this->header, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ChunkHeaderView',
  'nullable' => false,
), 'header');
        \Near\JsonRpc\Models\TypeGuard::assert($this->receipts, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'receipts');
        \Near\JsonRpc\Models\TypeGuard::assert($this->transactions, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TransactionEnvelopeView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'transactions');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcChunkResponse.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('author', $data)) throw new \InvalidArgumentException('Missing required field: author');
        if (!array_key_exists('header', $data)) throw new \InvalidArgumentException('Missing required field: header');
        if (!array_key_exists('transactions', $data)) throw new \InvalidArgumentException('Missing required field: transactions');
        if (!array_key_exists('receipts', $data)) throw new \InvalidArgumentException('Missing required field: receipts');
        $extra = array_diff_key($data, array (
  'author' => true,
  'header' => true,
  'receipts' => true,
  'transactions' => true,
));
        return new self(
            author: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['author'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'author'),
            header: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['header'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ChunkHeaderView',
  'nullable' => false,
), 'header'),
            receipts: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['receipts'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'receipts'),
            transactions: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['transactions'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TransactionEnvelopeView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'transactions'),
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
        $data['author'] = $this->author;
        $data['header'] = $this->header;
        $data['receipts'] = $this->receipts;
        $data['transactions'] = $this->transactions;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'author' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
    'header' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ChunkHeaderView',
      'nullable' => false,
    ),
    'receipts' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'transactions' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TransactionEnvelopeView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
  ),
  'required' => 
  array (
    0 => 'author',
    1 => 'header',
    2 => 'transactions',
    3 => 'receipts',
  ),
  'type' => 'object',
), 'RpcChunkResponse'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'author' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
      'nullable' => false,
    ),
    'header' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ChunkHeaderView',
      'nullable' => false,
    ),
    'receipts' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ReceiptView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'transactions' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TransactionEnvelopeView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
  ),
  'required' => 
  array (
    0 => 'author',
    1 => 'header',
    2 => 'transactions',
    3 => 'receipts',
  ),
  'type' => 'object',
), 'RpcChunkResponse');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
