<?php
declare(strict_types=1);

namespace Near\JsonRpc\Client;

use Near\JsonRpc\Models\JsonValue;
use Near\JsonRpc\Models\JsonEncoder;
use Near\JsonRpc\Generated\Client\RpcMethods;

final class Client
{
    use RpcMethods;

    private int $nextId = 1;
    private readonly \Closure $idFactory;

    public function __construct(
        private readonly string    $endpoint = 'https://rpc.mainnet.near.org',
        private readonly float     $timeout = 30.0,
        private readonly array     $headers = [],
        private readonly Transport $transport = new CurlTransport(),
        ?callable                  $idFactory = null,
    )
    {
        if (!filter_var($endpoint, FILTER_VALIDATE_URL)) throw new \InvalidArgumentException('Endpoint must be a valid URL.');
        if ($timeout <= 0) throw new \InvalidArgumentException('Timeout must be positive.');
        $this->idFactory = $idFactory === null
            ? function (): int {
                return $this->nextId++;
            }
            : \Closure::fromCallable($idFactory);
    }

    public function call(string $method, mixed $params = []): mixed
    {
        try {
            $id = ($this->idFactory)();
        } catch (\Throwable $e) {
            throw new RpcClientError('Request ID factory failed.', 0, $e);
        }
        if (!is_int($id) && !is_string($id)) throw new RpcClientError('Request ID factory must return an integer or string.');
        try {
            $body = JsonEncoder::encode(['jsonrpc' => '2.0', 'id' => $id, 'method' => $method, 'params' => JsonValue::normalize($params)]);
        } catch (\Throwable $e) {
            throw new RpcClientError('Could not encode JSON-RPC request.', 0, $e);
        }
        try {
            $response = $this->transport->send($this->endpoint, $body, array_merge(['Content-Type: application/json', 'Accept: application/json'], $this->headers), $this->timeout);
        } catch (RpcException $e) {
            throw $e;
        } catch (\Throwable $e) {
            throw new RpcClientError('NEAR RPC transport failed.', 0, $e);
        }
        if ($response->status < 200 || $response->status >= 300) throw new RpcHttpError($response->status, $response->body);
        try {
            $data = json_decode($response->body, false, 512, JSON_THROW_ON_ERROR | JSON_BIGINT_AS_STRING);
        } catch (\JsonException $e) {
            throw new RpcClientError('NEAR RPC returned invalid JSON.', 0, $e);
        }
        if (!is_object($data) || ($data->jsonrpc ?? null) !== '2.0' || !property_exists($data, 'id')) throw new RpcClientError('Malformed JSON-RPC response envelope.');
        if ($data->id !== $id) throw new RpcClientError('JSON-RPC response ID does not match request.');
        $hasResult = property_exists($data, 'result');
        $hasError = property_exists($data, 'error');
        if ($hasResult === $hasError) throw new RpcClientError('JSON-RPC response must contain exactly one of result or error.');
        if ($hasError) {
            if (!is_object($data->error) || !is_int($data->error->code ?? null) || !is_string($data->error->message ?? null)) throw new RpcClientError('Malformed JSON-RPC error object.');
            throw new RpcError($data->error->code, $data->error->message, property_exists($data->error, 'data') ? $data->error->data : null);
        }
        $result = $data->result;
        if (is_object($result) && property_exists($result, 'error') && $result->error !== null) {
            $message = is_string($result->error)
                ? $result->error
                : (json_encode($result->error, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?: 'NEAR RPC returned an embedded error.');
            throw new RpcError(null, $message, $result);
        }
        return $result;
    }
}
