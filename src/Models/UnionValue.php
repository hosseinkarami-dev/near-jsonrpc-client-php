<?php
declare(strict_types=1);

namespace Near\JsonRpc\Models;

/** A validated oneOf/anyOf value together with its matching branch index. */
final readonly class UnionValue implements \JsonSerializable
{
    public function __construct(public mixed $value, public int $variant) {}
    public function jsonSerialize(): mixed { return $this->value; }
}
