# Deployment and Release Guide

This repository is a Composer library, not a long-running service. Applications deploy the client as a dependency and configure the NEAR RPC endpoint and any credentials in the application environment.

## Runtime requirements

- PHP 8.2 or newer.
- PHP extensions `json` and `curl` enabled in the CLI or application runtime that uses Composer.
- Outbound HTTPS access to the selected NEAR RPC endpoint.

The package has no production Composer dependencies. PHPUnit is a development dependency only.

## Install in an application

When the package is available from the application's configured Composer repository, add it to the application:

```sh
composer require near/near-jsonrpc-client-php
```

Configure an endpoint and timeout in the application, rather than hard-coding environment-specific values:

```php
use Near\JsonRpc\Client\Client;

$client = new Client(
    endpoint: getenv('NEAR_RPC_URL') ?: 'https://rpc.mainnet.near.org',
    timeout: (float) (getenv('NEAR_RPC_TIMEOUT') ?: 15),
);
```

For endpoints that require authentication, supply a header from a secret store or environment variable:

```php
$token = getenv('NEAR_RPC_TOKEN');
$headers = $token === false || $token === '' ? [] : ['Authorization: Bearer ' . $token];

$client = new Client(
    endpoint: getenv('NEAR_RPC_URL') ?: 'https://rpc.mainnet.near.org',
    timeout: 15,
    headers: $headers,
);
```

Do not commit credentials, include them in exception reports, or log full request headers. Keep TLS certificate verification enabled. Use a separate endpoint and credentials for testnet and production.

## Application deployment

Include `composer.lock` in the application repository. In the application's build or deployment step, install its locked production dependencies:

```sh
composer install --no-dev --prefer-dist --no-interaction --optimize-autoloader
```

Ensure the deployed PHP runtime has the required `curl` and `json` extensions, including in containers, workers, and scheduled jobs. Set `NEAR_RPC_URL`, `NEAR_RPC_TIMEOUT`, and optional authentication settings in the application's deployment environment. The client makes synchronous HTTP requests; choose timeouts based on the operation. A transaction-status request waiting for a specific execution stage can take longer and may return a timeout from the RPC node itself.

Most reads are safe to retry according to application policy. Do not blindly retry transaction submission after an ambiguous timeout: the node may have accepted the transaction even if the caller did not receive its response. Check transaction status before deciding whether to submit again.

## CI and release validation

The GitHub Actions workflow runs the generated PHPUnit suites on PHP 8.2, 8.3, and 8.4. It generates the ignored test classes and fixtures before testing. On a daily schedule, a manual run on `main`, or a push to `main`, it also regenerates models and client methods with a fixed fixture seed, stages those outputs, and opens or updates a pull request when they differ. The pull request is reviewed and merged through the normal repository process.

Publishing is separate from ordinary test runs. A release is considered only after a pull request has been merged into `main` and the merged pull request's file list contains changes under `src/Generated/Models` or `src/Generated/Client`. The PHP test matrix must pass first. Docs-only changes, direct pushes to `main`, successful pull-request tests before merge, scheduled runs, and generated updates with no model or client API diff do not create versions. An eligible merge receives the next patch tag, a GitHub release, and a Packagist update. The initial version is `v0.1.0` when no semantic version tag exists. The workflow uses GitHub's automatically provided `GITHUB_TOKEN` for generated-code pull requests; you do not create or add that token as a repository secret. In repository **Settings → Actions → General**, enable **Allow GitHub Actions to create and approve pull requests**. The Packagist release flow separately uses `PACKAGIST_USERNAME` and `PACKAGIST_API_TOKEN`.

Before preparing a package release, run these checks from the repository root:

```sh
composer validate --no-check-publish
composer install --no-interaction --prefer-dist
composer generate
composer test
composer verify-models
```

The test suites use mock transports and generated JSON fixtures; they do not require NEAR RPC network access. If the OpenAPI specification or generator changed, regenerate the checked-in models, operation methods, fixtures, and generated tests, review the complete diff, and rerun the suite:

```sh
php bin/near-rpc-generate --spec=openapi.json --seed=12345
composer test
```

Use a fixed fixture seed when preparing a reviewable generated update. Generation from a URL is an explicit maintainer action and is not part of package installation or runtime deployment.

## Publishing a library release

1. Register the public GitHub repository on Packagist once. Confirm that the Composer package name is `near/near-jsonrpc-client-php` and enable Packagist's automatic GitHub sync if desired.
2. Add the repository Actions secrets `PACKAGIST_USERNAME` and `PACKAGIST_API_TOKEN`. A Packagist API token can update an already registered package; initial package registration remains a one-time Packagist setup step.
3. Run the validation commands above and review the release commit, including generated files and examples.
4. Merge the reviewed generated model or client API pull request into `main`. The workflow checks its actual changed files, runs the tests, and only then calculates the next patch version, creates the GitHub release, and calls the Packagist update API if generated models or client methods changed.
5. Confirm the new version appears on Packagist and resolves from a clean consumer project with `composer require near/near-jsonrpc-client-php`.

Do not move or reuse a published version tag; publish a new version for corrections. A release tag is created only for a successfully tested pull request merged into `main` that changes generated models or client API methods.

## Generator and generated sources

Generated models and the direct client-method trait are maintained in the repository by the automated pull request. PHPUnit suites are git-ignored and generated in CI together with their JSON fixtures. The generator is a development tool. Do not invoke it during application startup or production deployment. Runtime consumers need the packaged PHP source and Composer autoloader; they do not need the OpenAPI document or PHPUnit.

The CLI can generate from a local OpenAPI file or a URL. Prefer a reviewed local specification when reproducibility and offline generation are needed. Review generated output before committing it, especially changes to request constructors, method signatures, union variants, and response typing.

## Troubleshooting deployments

- **cURL extension missing:** enable PHP's `curl` extension for the same PHP runtime used by the application and Composer.
- **Invalid endpoint:** pass a complete HTTP or HTTPS URL to `Client`.
- **HTTP or RPC timeout:** inspect the endpoint's status and response body. A non-2xx response is reported as `RpcHttpError`; a local cURL timeout is reported as `RpcTimeoutError`; a JSON-RPC error response is reported as `RpcError`.
- **Typed response failure:** compare the raw node response with the checked-in OpenAPI schema and generated model. Report schema drift as a generator/specification issue rather than weakening model types in application code.
- **Generator cannot download the specification:** use `--spec` with a local `openapi.json`; generation does not need network access in that mode.
