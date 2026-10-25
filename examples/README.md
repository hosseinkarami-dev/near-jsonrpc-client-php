# Runnable examples

These examples run from the repository after `composer install`.

```sh
php examples/status.php
php examples/typed-account-query.php
php examples/latest-block.php
php examples/gas-price.php
php examples/query-contract-and-account.php
php examples/account-near-finality.php
php examples/transaction-status.php
php examples/typed-union-model.php
```

The status, account, latest-block, gas-price, contract query, account finality, and transaction status examples call a live NEAR RPC endpoint through generated methods exposed directly on `Client`. They demonstrate typed status retrieval, account and contract queries, finality selection, block lookup, gas-price retrieval, transaction lookup, and handling JSON-RPC, HTTP, timeout, and client errors. Set `NEAR_RPC_URL` to use another endpoint. The query examples accept `NEAR_ACCOUNT_ID`; the contract example also accepts `NEAR_CONTRACT_ID` and `NEAR_CONTRACT_METHOD`; the transaction example accepts `NEAR_TX_SENDER` and `NEAR_TX_HASH`. The union-model example is local and demonstrates constructing one named `oneOf` case and decoding its JSON again. These examples are read-only and do not submit transactions.

`composer test` runs PHPUnit tests for the examples using a mock transport, so the examples can be verified without network access.
