# NEAR JSON-RPC Client for PHP

A synchronous, typed PHP client for the [NEAR JSON-RPC API](https://docs.near.org/api). Generated operation methods are available directly on `Client`, with generated request and response models for the OpenAPI schemas.

## Features

- Typed generated methods with IDE completion.
- Typed request and response models, including enums and named `oneOf`/`anyOf` variants.
- Structured exceptions for JSON-RPC errors, HTTP failures, timeouts, and invalid responses.
- Injectable transport for tests and integrations with another HTTP stack.
- OpenAPI generator and fixture-based PHPUnit suites generated locally or in CI.
- PHP 8.2+ with the `json` and `curl` extensions; no framework runtime dependency.

## Installation

After the package is available from your configured Composer repository:

```sh
composer require hosseinkarami-dev/near-jsonrpc-client-php
```

The default endpoint is `https://rpc.mainnet.near.org`. Pass another URL, such as `https://rpc.testnet.near.org`, to use a different node.

## Quickstart

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use Near\JsonRpc\Client\Client;
use Near\JsonRpc\Generated\Models\RpcStatusRequest;

$client = new Client(timeout: 15);
$status = $client->status(new RpcStatusRequest());
printf("Connected to %s; protocol version %d\n", $status->chainId, $status->protocolVersion);
```

Generated operations are methods on `Client`; each takes its generated request model and returns a typed response model. IDE completion lists available operations and request signatures. The generated declarations are in [`src/Generated/Client/RpcMethods.php`](src/Generated/Client/RpcMethods.php). The lower-level `$client->call($method, $params)` remains available for custom RPC methods.

## Typed requests

This example queries an account at finality:

```php
use Near\JsonRpc\Generated\Models\AccountId;
use Near\JsonRpc\Generated\Models\Finality;
use Near\JsonRpc\Generated\Models\RpcQueryRequest;
use Near\JsonRpc\Generated\Models\RpcQueryRequestViewAccountByFinality;
use Near\JsonRpc\Generated\Models\RpcQueryResponseAccountView;

$request = RpcQueryRequest::viewAccountByFinality(new RpcQueryRequestViewAccountByFinality(
    finality: Finality::FinalModel,
    accountId: new AccountId('alice.near'),
    requestType: 'view_account',
));

$response = $client->query($request);
if (!$response->root instanceof RpcQueryResponseAccountView) {
    throw new UnexpectedValueException('The query did not return an account view.');
}
$account = $response->root;
printf("Balance: %s yoctoNEAR; storage: %s bytes\n", $account->amount->root, $account->storageUsage);
```

Union models expose a native PHP union through `root`, named factory methods for constructing a variant, and `variant()` for identifying a decoded variant. PHP properties use camelCase while serialized JSON retains the schema's field names. Wide integers can be returned as decimal strings when they exceed PHP's integer range.

See [`examples/README.md`](examples/README.md) for runnable status, account, block, gas-price, contract-query, transaction-status, and union examples. Network examples are read-only; the union example runs locally.

## Errors

```php
use Near\JsonRpc\Client\RpcClientError;
use Near\JsonRpc\Client\RpcError;
use Near\JsonRpc\Client\RpcHttpError;
use Near\JsonRpc\Client\RpcTimeoutError;
use Near\JsonRpc\Generated\Models\RpcStatusRequest;

try {
    $status = $client->status(new RpcStatusRequest());
} catch (RpcError $error) {
    printf("RPC error: %s; code: %s\n", $error->getMessage(), $error->rpcCode ?? 'none');
    // $error->data contains structured server data or the original embedded result.
} catch (RpcHttpError $error) {
    printf("HTTP %d: %s\n", $error->statusCode, $error->responseBody);
} catch (RpcTimeoutError $error) {
    printf("Request timed out: %s\n", $error->getMessage());
} catch (RpcClientError $error) {
    printf("Invalid request, transport, or response: %s\n", $error->getMessage());
}
```

`RpcError` exposes `rpcCode` and `data`. It represents JSON-RPC error envelopes and non-null `error` values returned inside an otherwise successful result. For embedded errors, `rpcCode` is `null` when the node provides no code, and `data` contains the original result object. `RpcHttpError` exposes `statusCode` and `responseBody`; `RpcTimeoutError` represents a cURL timeout; and `RpcClientError` covers request encoding, transport failures, invalid JSON, and malformed or mismatched envelopes. Wrapped lower-level errors are available through `getPrevious()`.

## Configuration and transport

```php
$token = getenv('NEAR_RPC_TOKEN');
$headers = $token === false || $token === '' ? [] : ['Authorization: Bearer ' . $token];

$client = new Client(
    endpoint: getenv('NEAR_RPC_URL') ?: 'https://rpc.mainnet.near.org',
    timeout: 15,
    headers: $headers,
);
```

The constructor accepts an endpoint, timeout in seconds, custom HTTP headers, a `Transport`, and an optional request ID factory. The default transport uses cURL. Implement `Near\JsonRpc\Client\Transport::send()` to inject a mock or another HTTP stack. The client is synchronous. Some transaction-status calls wait for a requested execution stage and may receive a node-side timeout.

## Development and tests

```sh
composer install
composer test
composer verify-models
```

`composer test` runs PHPUnit suites for generated-model JSON round trips, generated RPC methods using mock transports, and examples. These suites do not call a live RPC endpoint. GitHub Actions runs Composer validation, PHP syntax checks, and the test suite on PHP 8.2, 8.3, and 8.4.

## OpenAPI generator

The generator produces model classes, direct client methods, schema fixtures, and PHPUnit tests. Use the checked-in specification offline or give the CLI a URL:

```sh
php bin/near-rpc-generate --spec=openapi.json --seed=12345
php bin/near-rpc-generate --url="https://example.org/openapi.json" --seed=12345
```

With neither option, the CLI fetches the default upstream specification. `--spec` and `--url` are mutually exclusive. Generation is explicit and is not run during installation or ordinary client calls. `--models`, `--client`, `--client-tests`, `--model-tests`, and `--fixtures` select output paths. Pass a fixed seed for reproducible fixture output.

After changing the specification or generator, regenerate, review the generated diff, and run `composer test`. Generated code validates schema constraints such as enum values, numeric bounds, patterns, fixed array lengths, additional-property rules, and union branches. Fixtures choose one valid `oneOf`/`anyOf` branch; `allOf` constraints are combined.

## Deployment and releases

See [`DEPLOYMENT.md`](DEPLOYMENT.md) for application installation, runtime requirements, CI, and release guidance.

## License

Apache-2.0. See [`LICENSE`](LICENSE).
