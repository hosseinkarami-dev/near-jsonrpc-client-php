<?php
declare(strict_types=1);

namespace Near\JsonRpc\Client;

interface Transport
{
    /** @throws \Throwable on transport failure */
    public function send(string $endpoint, string $body, array $headers, float $timeout): HttpResponse;
}
