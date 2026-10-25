<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class BlockView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * The AccountId of the author of the Block
         *
         * @var \Near\JsonRpc\Generated\Models\AccountId
         */
        public \Near\JsonRpc\Generated\Models\AccountId $author,
        /**
         * @var list<\Near\JsonRpc\Generated\Models\ChunkHeaderView>
         */
        public array $chunks,
        /**
         * @var \Near\JsonRpc\Generated\Models\BlockHeaderView
         */
        public \Near\JsonRpc\Generated\Models\BlockHeaderView $header,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->author, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'author');
        \Near\JsonRpc\Models\TypeGuard::assert($this->chunks, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ChunkHeaderView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'chunks');
        \Near\JsonRpc\Models\TypeGuard::assert($this->header, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockHeaderView',
  'nullable' => false,
), 'header');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for BlockView.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('author', $data)) throw new \InvalidArgumentException('Missing required field: author');
        if (!array_key_exists('header', $data)) throw new \InvalidArgumentException('Missing required field: header');
        if (!array_key_exists('chunks', $data)) throw new \InvalidArgumentException('Missing required field: chunks');
        $extra = array_diff_key($data, array (
  'author' => true,
  'chunks' => true,
  'header' => true,
));
        return new self(
            author: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['author'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\AccountId',
  'nullable' => false,
), 'author'),
            chunks: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['chunks'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ChunkHeaderView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'chunks'),
            header: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['header'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockHeaderView',
  'nullable' => false,
), 'header'),
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
        $data['chunks'] = $this->chunks;
        $data['header'] = $this->header;
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
    'chunks' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ChunkHeaderView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'header' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockHeaderView',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'author',
    1 => 'header',
    2 => 'chunks',
  ),
  'type' => 'object',
), 'BlockView'));
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
    'chunks' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ChunkHeaderView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'header' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockHeaderView',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'author',
    1 => 'header',
    2 => 'chunks',
  ),
  'type' => 'object',
), 'BlockView');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
