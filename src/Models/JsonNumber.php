<?php
declare(strict_types=1);

namespace Near\JsonRpc\Models;

/** A validated JSON integer token that PHP cannot represent as a native int. */
final readonly class JsonNumber
{
    public string $value;

    public function __construct(string $value)
    {
        if (!preg_match('/^-?[0-9]+$/D', $value)) {
            throw new \InvalidArgumentException('A JSON number must be an integer token.');
        }
        $negative = str_starts_with($value, '-');
        $digits = ltrim($negative ? substr($value, 1) : $value, '0');
        $digits = $digits === '' ? '0' : $digits;
        $this->value = $negative && $digits !== '0' ? '-' . $digits : $digits;
    }
}
