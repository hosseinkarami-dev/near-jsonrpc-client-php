<?php
declare(strict_types=1);

namespace Near\JsonRpc\Examples;

use Near\JsonRpc\Client\Client;
use Near\JsonRpc\Generated\Models\AccountId;
use Near\JsonRpc\Generated\Models\Finality;
use Near\JsonRpc\Generated\Models\RpcQueryRequest;
use Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccountByFinality;
use Near\JsonRpc\Generated\Models\RpcQueryResponseAccountView;

require_once dirname(__DIR__) . '/vendor/autoload.php';

/** Make a typed view_account query and return its typed response variant. */
function fetchAccountView(Client $client, string $accountName): RpcQueryResponseAccountView
{
    $request = RpcQueryRequest::viewAccountByFinality(new RpcQueryRequestViewAccountByFinality(
        finality: Finality::FinalModel,
        accountId: new AccountId($accountName),
        requestType: 'view_account',
    ));
    $response = $client->query($request);
    if (!$response->root instanceof RpcQueryResponseAccountView) {
        throw new \UnexpectedValueException('Expected an AccountView result, received ' . $response->variant() . '.');
    }
    return $response->root;
}

function runTypedAccountQueryExample(): void
{
    $endpoint = getenv('NEAR_RPC_URL') ?: 'https://rpc.mainnet.near.org';
    $accountName = getenv('NEAR_ACCOUNT_ID') ?: 'near';
    $client = new Client($endpoint, timeout: 15);
    $account = fetchAccountView($client, $accountName);

    printf("Account: %s\nBalance: %s yoctoNEAR\nBlock height: %s\nStorage used: %s bytes\n",
        $accountName,
        $account->amount->root,
        $account->blockHeight,
        $account->storageUsage,
    );
}

if (PHP_SAPI === 'cli' && realpath($_SERVER['SCRIPT_FILENAME'] ?? '') === __FILE__) runTypedAccountQueryExample();
