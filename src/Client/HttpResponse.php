<?php
declare(strict_types=1);

namespace Near\JsonRpc\Client;

final readonly class HttpResponse
{
    public function __construct(public int $status, public string $body) {}
}
