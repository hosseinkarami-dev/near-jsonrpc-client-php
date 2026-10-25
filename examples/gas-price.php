<?php
declare(strict_types=1);

namespace Near\JsonRpc\Examples;

use Near\JsonRpc\Client\Client;
use Near\JsonRpc\Generated\Models\RpcGasPriceRequest;
use Near\JsonRpc\Generated\Models\RpcGasPriceResponse;

require_once dirname(__DIR__) . '/vendor/autoload.php';

/** Fetch the current network gas price as a typed NEAR token value. */
function fetchGasPrice(Client $client): RpcGasPriceResponse
{
    return $client->gasPrice(new RpcGasPriceRequest());
}

function runGasPriceExample(): void
{
    $endpoint = getenv('NEAR_RPC_URL') ?: 'https://rpc.mainnet.near.org';
    $gasPrice = fetchGasPrice(new Client($endpoint, timeout: 15));

    printf("Current gas price: %s yoctoNEAR per gas unit\n", $gasPrice->gasPrice->root);
}

if (PHP_SAPI === 'cli' && realpath($_SERVER['SCRIPT_FILENAME'] ?? '') === __FILE__) runGasPriceExample();
