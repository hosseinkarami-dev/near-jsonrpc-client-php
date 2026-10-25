<?php
declare(strict_types=1);

namespace Near\JsonRpc\Client;

final class RpcHttpError extends RpcException
{
    public function __construct(public readonly int $statusCode, public readonly string $responseBody)
    { parent::__construct("NEAR RPC returned HTTP {$statusCode}."); }
}
