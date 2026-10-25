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
use Near\JsonRpc\Generated\Models\RpcQueryRequest;
use Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccountByFinality;
use Near\JsonRpc\Generated\Models\RpcQueryResponseAccountView;

require_once dirname(__DIR__) . '/vendor/autoload.php';

/** Read an account using near-final rather than final block finality. */
function queryAccountNearFinality(Client $client, string $accountId): RpcQueryResponseAccountView
{
    $request = RpcQueryRequest::viewAccountByFinality(new RpcQueryRequestViewAccountByFinality(
        accountId: new AccountId($accountId),
        finality: Finality::NearFinal,
        requestType: 'view_account',
    ));
    $response = $client->query($request);
    if (!$response->root instanceof RpcQueryResponseAccountView) {
        throw new \UnexpectedValueException('Expected an account view; received ' . $response->variant() . '.');
    }
    return $response->root;
}

function runNearFinalAccountExample(): void
{
    $endpoint = getenv('NEAR_RPC_URL') ?: 'https://rpc.mainnet.near.org';
    $accountId = getenv('NEAR_ACCOUNT_ID') ?: 'neardome2340.near';

    try {
        $account = queryAccountNearFinality(new Client($endpoint, timeout: 15), $accountId);
        printf("Account %s (near-final): balance %s yoctoNEAR; storage %s bytes\n", $accountId, $account->amount->root, $account->storageUsage);
    } catch (RpcError $error) {
        printf("RPC error: %s (code: %s, data: %s)\n", $error->getMessage(), $error->rpcCode ?? 'none', json_encode($error->data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));
    } catch (RpcTimeoutError $error) {
        printf("RPC request timed out: %s\n", $error->getMessage());
    } catch (RpcHttpError $error) {
        printf("RPC HTTP error: %s; status: %d; body: %s\n", $error->getMessage(), $error->statusCode, $error->responseBody);
    } catch (RpcClientError $error) {
        printf("Invalid RPC response or client request: %s\n", $error->getMessage());
    }
}

if (PHP_SAPI === 'cli' && realpath($_SERVER['SCRIPT_FILENAME'] ?? '') === __FILE__) runNearFinalAccountExample();
