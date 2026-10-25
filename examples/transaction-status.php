<?php
declare(strict_types=1);

namespace Near\JsonRpc\Examples;

use Near\JsonRpc\Client\Client;
use Near\JsonRpc\Client\RpcClientError;
use Near\JsonRpc\Client\RpcError;
use Near\JsonRpc\Client\RpcHttpError;
use Near\JsonRpc\Client\RpcTimeoutError;
use Near\JsonRpc\Generated\Models\AccountId;
use Near\JsonRpc\Generated\Models\CryptoHash;
use Near\JsonRpc\Generated\Models\RpcTransactionResponse;
use Near\JsonRpc\Generated\Models\RpcTransactionStatusRequest;
use Near\JsonRpc\Generated\Models\RpcTransactionStatusRequestTxHashAndSenderAccountId;
use Near\JsonRpc\Generated\Models\TxExecutionStatus;

require_once dirname(__DIR__) . '/vendor/autoload.php';

/** Look up a transaction by its hash and sender account. */
function fetchTransactionStatus(Client $client, string $senderAccountId, string $transactionHash): RpcTransactionResponse
{
    $request = RpcTransactionStatusRequest::txHashAndSenderAccountId(new RpcTransactionStatusRequestTxHashAndSenderAccountId(
        senderAccountId: new AccountId($senderAccountId),
        txHash: new CryptoHash($transactionHash),
        waitUntil: TxExecutionStatus::executedOptimistic(),
    ));
    return $client->tx($request);
}

function runTransactionStatusExample(): void
{
    $endpoint = getenv('NEAR_RPC_URL') ?: 'https://rpc.mainnet.near.org';
    $sender = getenv('NEAR_TX_SENDER') ?: 'sweat-relayer.near';
    $hash = getenv('NEAR_TX_HASH') ?: 'B4PGu3RicwMrjhv4k4MGaUhnZrTqPrrRu5gH9jxtHH4J';

    try {
        $transaction = fetchTransactionStatus(new Client($endpoint, timeout: 35), $sender, $hash);
        printf("Transaction result variant: %s\n%s\n", $transaction->variant(), $transaction->toJson());
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

if (PHP_SAPI === 'cli' && realpath($_SERVER['SCRIPT_FILENAME'] ?? '') === __FILE__) runTransactionStatusExample();
