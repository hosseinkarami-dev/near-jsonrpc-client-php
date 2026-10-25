<?php
declare(strict_types=1);

namespace Near\JsonRpc\Client;

final class RpcError extends RpcException
{
    public function __construct(public readonly int|string|null $rpcCode, string $message, public readonly mixed $data = null)
    { parent::__construct($message); }
}
