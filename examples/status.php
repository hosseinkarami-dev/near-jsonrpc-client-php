<?php
declare(strict_types=1);

namespace Near\JsonRpc\Examples;

use Near\JsonRpc\Client\Client;
use Near\JsonRpc\Generated\Models\RpcStatusRequest;
use Near\JsonRpc\Generated\Models\RpcStatusResponse;

require_once dirname(__DIR__) . '/vendor/autoload.php';

/** Fetch the node status through the generated, typed client method. */
function fetchNodeStatus(Client $client): RpcStatusResponse
{
    return $client->status(new RpcStatusRequest());
}

function runStatusExample(): void
{
    $endpoint = getenv('NEAR_RPC_URL') ?: 'https://rpc.mainnet.near.org';
    $status = fetchNodeStatus(new Client($endpoint, timeout: 15));
    echo $status->toJson();
}

if (PHP_SAPI === 'cli' && realpath($_SERVER['SCRIPT_FILENAME'] ?? '') === __FILE__) runStatusExample();
