<?php
declare(strict_types=1);

namespace Near\JsonRpc\Client;

final class CurlTransport implements Transport
{
    public function send(string $endpoint, string $body, array $headers, float $timeout): HttpResponse
    {
        $handle = curl_init($endpoint);
        if ($handle === false) throw new RpcClientError('Unable to initialize HTTP transport.');
        curl_setopt_array($handle, [CURLOPT_POST => true, CURLOPT_POSTFIELDS => $body,
            CURLOPT_HTTPHEADER => $headers, CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT_MS => (int) round($timeout * 1000), CURLOPT_CONNECTTIMEOUT_MS => (int) round($timeout * 1000)]);
        $result = curl_exec($handle);
        if ($result === false) {
            $code = curl_errno($handle);
            $message = curl_error($handle);
            if ($code === CURLE_OPERATION_TIMEDOUT) throw new RpcTimeoutError('NEAR RPC request timed out.', 0);
            throw new RpcClientError('NEAR RPC transport failed: '.$message, 0);
        }
        return new HttpResponse((int) curl_getinfo($handle, CURLINFO_RESPONSE_CODE), $result);
    }
}
