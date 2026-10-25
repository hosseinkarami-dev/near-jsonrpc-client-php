<?php
declare(strict_types=1);

namespace Near\JsonRpc\Models;

/** @template T */
final readonly class OptionalValue
{
    public function __construct(public bool $present = false, public mixed $value = null) {}

    /** @template V @param V $value @return self<V> */
    public static function of(mixed $value): self { return new self(true, $value); }
}
