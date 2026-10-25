<?php
declare(strict_types=1);

namespace Near\JsonRpc\Examples;

use Near\JsonRpc\Client\Client;
use Near\JsonRpc\Client\RpcClientError;
use Near\JsonRpc\Client\RpcError;
use Near\JsonRpc\Client\RpcHttpError;
use Near\JsonRpc\Client\RpcTimeoutError;
use Near\JsonRpc\Generated\Models\AccountId;
use Near\JsonRpc\Generated\Models\Finality;
use Near\JsonRpc\Generated\Models\FunctionArgs;
use Near\JsonRpc\Generated\Models\RpcQueryRequest;
use Near\JsonRpc\Generated\Models\RpcQueryRequestCallFunctionByFinality;
use Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccountByFinality;
use Near\JsonRpc\Generated\Models\RpcQueryResponseCallResult;
use Near\JsonRpc\Generated\Models\RpcQueryResponseAccountView;

require_once dirname(__DIR__) . '/vendor/autoload.php';

/** Call a contract read method and return its typed result. */
function callContractFunction(Client $client, string $accountId, string $methodName): RpcQueryResponseCallResult
{
    $request = RpcQueryRequest::callFunctionByFinality(new RpcQueryRequestCallFunctionByFinality(
        finality: Finality::FinalModel,
        accountId: new AccountId($accountId),
        argsBase64: new FunctionArgs('e30='), // Base64 for an empty JSON object: {}.
        methodName: $methodName,
        requestType: 'call_function',
    ));
    $response = $client->query($request);
    if (!$response->root instanceof RpcQueryResponseCallResult) {
        throw new \UnexpectedValueException('Expected a contract call result; received ' . $response->variant() . '.');
    }
    return $response->root;
}

/** Fetch an account's state at finality. */
function queryAccountAtFinality(Client $client, string $accountId): RpcQueryResponseAccountView
{
    $request = RpcQueryRequest::viewAccountByFinality(new RpcQueryRequestViewAccountByFinality(
        finality: Finality::FinalModel,
        accountId: new AccountId($accountId),
        requestType: 'view_account',
    ));
    $response = $client->query($request);
    if (!$response->root instanceof RpcQueryResponseAccountView) {
        throw new \UnexpectedValueException('Expected an account view; received ' . $response->variant() . '.');
    }
    return $response->root;
}

/** Show the distinct JSON-RPC failure types while keeping this example safe to run. */
function reportQueryFailure(\Throwable $error): void
{
    if ($error instanceof RpcError) {
        printf("RPC error: %s (code: %s, data: %s)\n", $error->getMessage(), $error->rpcCode ?? 'none', json_encode($error->data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));
    } elseif ($error instanceof RpcTimeoutError) {
        printf("RPC request timed out: %s\n", $error->getMessage());
    } elseif ($error instanceof RpcHttpError) {
        printf("RPC HTTP error: %s; status: %d; body: %s\n", $error->getMessage(), $error->statusCode, $error->responseBody);
    } elseif ($error instanceof RpcClientError) {
        printf("Invalid RPC response or client request: %s\n", $error->getMessage());
    } else {
        throw $error;
    }
}

function runContractAndAccountQueryExample(): void
{
    $endpoint = getenv('NEAR_RPC_URL') ?: 'https://rpc.mainnet.near.org';
    $contractId = getenv('NEAR_CONTRACT_ID') ?: 'wrap.near';
    $accountId = getenv('NEAR_ACCOUNT_ID') ?: 'alice.near';
    $client = new Client($endpoint, timeout: 15);

    try {
        $result = callContractFunction($client, $contractId, getenv('NEAR_CONTRACT_METHOD') ?: 'ft_balance_of2');
        printf("Contract call result bytes: %s\n", json_encode($result->result, JSON_THROW_ON_ERROR));
    } catch (RpcError|RpcTimeoutError|RpcHttpError|RpcClientError $error) {
        reportQueryFailure($error);
    }

    try {
        $account = queryAccountAtFinality($client, $accountId);
        printf("Account %s balance: %s yoctoNEAR; storage: %s bytes\n", $accountId, $account->amount->root, $account->storageUsage);
    } catch (RpcError|RpcTimeoutError|RpcHttpError|RpcClientError $error) {
        reportQueryFailure($error);
    }
}

if (PHP_SAPI === 'cli' && realpath($_SERVER['SCRIPT_FILENAME'] ?? '') === __FILE__) runContractAndAccountQueryExample();
