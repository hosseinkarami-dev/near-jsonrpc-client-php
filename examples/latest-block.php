<?php
declare(strict_types=1);

namespace Near\JsonRpc\Examples;

use Near\JsonRpc\Client\Client;
use Near\JsonRpc\Generated\Models\Finality;
use Near\JsonRpc\Generated\Models\RpcBlockRequest;
use Near\JsonRpc\Generated\Models\RpcBlockResponse;

require_once dirname(__DIR__) . '/vendor/autoload.php';

/** Fetch the latest finalized block with a typed block request and response. */
function fetchLatestBlock(Client $client): RpcBlockResponse
{
    return $client->block(RpcBlockRequest::finality(Finality::FinalModel));
}

function runLatestBlockExample(): void
{
    $endpoint = getenv('NEAR_RPC_URL') ?: 'https://rpc.mainnet.near.org';
    $block = fetchLatestBlock(new Client($endpoint, timeout: 15));

    printf("Block %s\nHeight: %s\nAuthor: %s\nChunks: %d\n",
        $block->header->hash->root,
        $block->header->height,
        $block->author->root,
        count($block->chunks),
    );
}

if (PHP_SAPI === 'cli' && realpath($_SERVER['SCRIPT_FILENAME'] ?? '') === __FILE__) runLatestBlockExample();
