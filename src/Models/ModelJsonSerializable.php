<?php
declare(strict_types=1);

namespace Near\JsonRpc\Models;

/** A model that can provide schema-aware values to the lossless JSON encoder. */
interface ModelJsonSerializable extends \JsonSerializable
{
    public function jsonSerializeForEncoding(): mixed;
}
