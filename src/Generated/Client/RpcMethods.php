<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Client;

/** Generated typed JSON-RPC methods mixed into the public Client API. */
trait RpcMethods
{
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function experimentalCallFunction(\Near\JsonRpc\Generated\Models\RpcCallFunctionRequest $params): \Near\JsonRpc\Generated\Models\RpcCallFunctionResponse
    {
        $result = $this->call('EXPERIMENTAL_call_function', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcCallFunctionResponse',
  'nullable' => false,
), 'EXPERIMENTAL_call_function.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function experimentalChanges(\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequest $params): \Near\JsonRpc\Generated\Models\RpcStateChangesInBlockResponse
    {
        $result = $this->call('EXPERIMENTAL_changes', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesInBlockResponse',
  'nullable' => false,
), 'EXPERIMENTAL_changes.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function experimentalChangesInBlock(\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockRequest $params): \Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeResponse
    {
        $result = $this->call('EXPERIMENTAL_changes_in_block', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesInBlockByTypeResponse',
  'nullable' => false,
), 'EXPERIMENTAL_changes_in_block.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function experimentalCongestionLevel(\Near\JsonRpc\Generated\Models\RpcCongestionLevelRequest $params): \Near\JsonRpc\Generated\Models\RpcCongestionLevelResponse
    {
        $result = $this->call('EXPERIMENTAL_congestion_level', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcCongestionLevelResponse',
  'nullable' => false,
), 'EXPERIMENTAL_congestion_level.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function experimentalGenesisConfig(\Near\JsonRpc\Generated\Models\GenesisConfigRequest $params): \Near\JsonRpc\Generated\Models\GenesisConfig
    {
        $result = $this->call('EXPERIMENTAL_genesis_config', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GenesisConfig',
  'nullable' => false,
), 'EXPERIMENTAL_genesis_config.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function experimentalIndexerBlock(\Near\JsonRpc\Generated\Models\RpcIndexerBlockRequest $params): \Near\JsonRpc\Generated\Models\RpcIndexerBlockResponse
    {
        $result = $this->call('EXPERIMENTAL_indexer_block', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcIndexerBlockResponse',
  'nullable' => false,
), 'EXPERIMENTAL_indexer_block.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function experimentalLightClientBlockProof(\Near\JsonRpc\Generated\Models\RpcLightClientBlockProofRequest $params): \Near\JsonRpc\Generated\Models\RpcLightClientBlockProofResponse
    {
        $result = $this->call('EXPERIMENTAL_light_client_block_proof', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcLightClientBlockProofResponse',
  'nullable' => false,
), 'EXPERIMENTAL_light_client_block_proof.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function experimentalLightClientProof(\Near\JsonRpc\Generated\Models\RpcLightClientExecutionProofRequest $params): \Near\JsonRpc\Generated\Models\RpcLightClientExecutionProofResponse
    {
        $result = $this->call('EXPERIMENTAL_light_client_proof', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcLightClientExecutionProofResponse',
  'nullable' => false,
), 'EXPERIMENTAL_light_client_proof.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function experimentalMaintenanceWindows(\Near\JsonRpc\Generated\Models\RpcMaintenanceWindowsRequest $params): array
    {
        $result = $this->call('EXPERIMENTAL_maintenance_windows', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RangeOfUint64',
    'nullable' => false,
  ),
  'type' => 'array',
), 'EXPERIMENTAL_maintenance_windows.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function experimentalProtocolConfig(\Near\JsonRpc\Generated\Models\RpcProtocolConfigRequest $params): \Near\JsonRpc\Generated\Models\RpcProtocolConfigResponse
    {
        $result = $this->call('EXPERIMENTAL_protocol_config', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcProtocolConfigResponse',
  'nullable' => false,
), 'EXPERIMENTAL_protocol_config.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function experimentalReceipt(\Near\JsonRpc\Generated\Models\RpcReceiptRequest $params): \Near\JsonRpc\Generated\Models\RpcReceiptResponse
    {
        $result = $this->call('EXPERIMENTAL_receipt', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcReceiptResponse',
  'nullable' => false,
), 'EXPERIMENTAL_receipt.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function experimentalReceiptToTx(\Near\JsonRpc\Generated\Models\RpcReceiptToTxRequest $params): \Near\JsonRpc\Generated\Models\RpcReceiptToTxResponse
    {
        $result = $this->call('EXPERIMENTAL_receipt_to_tx', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcReceiptToTxResponse',
  'nullable' => false,
), 'EXPERIMENTAL_receipt_to_tx.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function experimentalSplitStorageInfo(\Near\JsonRpc\Generated\Models\RpcSplitStorageInfoRequest $params): \Near\JsonRpc\Generated\Models\RpcSplitStorageInfoResponse
    {
        $result = $this->call('EXPERIMENTAL_split_storage_info', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcSplitStorageInfoResponse',
  'nullable' => false,
), 'EXPERIMENTAL_split_storage_info.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function experimentalTxStatus(\Near\JsonRpc\Generated\Models\RpcTransactionStatusRequest $params): \Near\JsonRpc\Generated\Models\RpcTransactionResponse
    {
        $result = $this->call('EXPERIMENTAL_tx_status', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcTransactionResponse',
  'nullable' => false,
), 'EXPERIMENTAL_tx_status.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function experimentalValidatorsOrdered(\Near\JsonRpc\Generated\Models\RpcValidatorsOrderedRequest $params): array
    {
        $result = $this->call('EXPERIMENTAL_validators_ordered', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorStakeView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'EXPERIMENTAL_validators_ordered.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function experimentalViewAccessKey(\Near\JsonRpc\Generated\Models\RpcViewAccessKeyRequest $params): \Near\JsonRpc\Generated\Models\RpcViewAccessKeyResponse
    {
        $result = $this->call('EXPERIMENTAL_view_access_key', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyResponse',
  'nullable' => false,
), 'EXPERIMENTAL_view_access_key.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function experimentalViewAccessKeyList(\Near\JsonRpc\Generated\Models\RpcViewAccessKeyListRequest $params): \Near\JsonRpc\Generated\Models\RpcViewAccessKeyListResponse
    {
        $result = $this->call('EXPERIMENTAL_view_access_key_list', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccessKeyListResponse',
  'nullable' => false,
), 'EXPERIMENTAL_view_access_key_list.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function experimentalViewAccount(\Near\JsonRpc\Generated\Models\RpcViewAccountRequest $params): \Near\JsonRpc\Generated\Models\RpcViewAccountResponse
    {
        $result = $this->call('EXPERIMENTAL_view_account', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewAccountResponse',
  'nullable' => false,
), 'EXPERIMENTAL_view_account.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function experimentalViewCode(\Near\JsonRpc\Generated\Models\RpcViewCodeRequest $params): \Near\JsonRpc\Generated\Models\RpcViewCodeResponse
    {
        $result = $this->call('EXPERIMENTAL_view_code', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewCodeResponse',
  'nullable' => false,
), 'EXPERIMENTAL_view_code.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function experimentalViewState(\Near\JsonRpc\Generated\Models\RpcViewStateRequest $params): \Near\JsonRpc\Generated\Models\RpcViewStateResponse
    {
        $result = $this->call('EXPERIMENTAL_view_state', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcViewStateResponse',
  'nullable' => false,
), 'EXPERIMENTAL_view_state.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function block(\Near\JsonRpc\Generated\Models\RpcBlockRequest $params): \Near\JsonRpc\Generated\Models\RpcBlockResponse
    {
        $result = $this->call('block', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcBlockResponse',
  'nullable' => false,
), 'block.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function blockEffects(\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockRequest $params): \Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeResponse
    {
        $result = $this->call('block_effects', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesInBlockByTypeResponse',
  'nullable' => false,
), 'block_effects.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function broadcastTxAsync(\Near\JsonRpc\Generated\Models\RpcSendTransactionRequest $params): \Near\JsonRpc\Generated\Models\CryptoHash
    {
        $result = $this->call('broadcast_tx_async', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CryptoHash',
  'nullable' => false,
), 'broadcast_tx_async.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function broadcastTxCommit(\Near\JsonRpc\Generated\Models\RpcSendTransactionRequest $params): \Near\JsonRpc\Generated\Models\RpcTransactionResponse
    {
        $result = $this->call('broadcast_tx_commit', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcTransactionResponse',
  'nullable' => false,
), 'broadcast_tx_commit.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function changes(\Near\JsonRpc\Generated\Models\RpcStateChangesInBlockByTypeRequest $params): \Near\JsonRpc\Generated\Models\RpcStateChangesInBlockResponse
    {
        $result = $this->call('changes', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStateChangesInBlockResponse',
  'nullable' => false,
), 'changes.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function chunk(\Near\JsonRpc\Generated\Models\RpcChunkRequest $params): \Near\JsonRpc\Generated\Models\RpcChunkResponse
    {
        $result = $this->call('chunk', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcChunkResponse',
  'nullable' => false,
), 'chunk.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function clientConfig(\Near\JsonRpc\Generated\Models\RpcClientConfigRequest $params): \Near\JsonRpc\Generated\Models\RpcClientConfigResponse
    {
        $result = $this->call('client_config', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcClientConfigResponse',
  'nullable' => false,
), 'client_config.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function gasPrice(\Near\JsonRpc\Generated\Models\RpcGasPriceRequest $params): \Near\JsonRpc\Generated\Models\RpcGasPriceResponse
    {
        $result = $this->call('gas_price', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcGasPriceResponse',
  'nullable' => false,
), 'gas_price.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function genesisConfig(\Near\JsonRpc\Generated\Models\GenesisConfigRequest $params): \Near\JsonRpc\Generated\Models\GenesisConfig
    {
        $result = $this->call('genesis_config', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\GenesisConfig',
  'nullable' => false,
), 'genesis_config.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function health(\Near\JsonRpc\Generated\Models\RpcHealthRequest $params): \Near\JsonRpc\Generated\Models\RpcHealthResponse|null
    {
        $result = $this->call('health', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'anyOf' => 
  array (
    0 => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcHealthResponse',
      'nullable' => false,
    ),
    1 => 
    array (
      'enum' => 
      array (
        0 => NULL,
      ),
      'nullable' => true,
      'type' => 'null',
    ),
  ),
), 'health.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function lightClientProof(\Near\JsonRpc\Generated\Models\RpcLightClientExecutionProofRequest $params): \Near\JsonRpc\Generated\Models\RpcLightClientExecutionProofResponse
    {
        $result = $this->call('light_client_proof', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcLightClientExecutionProofResponse',
  'nullable' => false,
), 'light_client_proof.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function maintenanceWindows(\Near\JsonRpc\Generated\Models\RpcMaintenanceWindowsRequest $params): array
    {
        $result = $this->call('maintenance_windows', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RangeOfUint64',
    'nullable' => false,
  ),
  'type' => 'array',
), 'maintenance_windows.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function networkInfo(\Near\JsonRpc\Generated\Models\RpcNetworkInfoRequest $params): \Near\JsonRpc\Generated\Models\RpcNetworkInfoResponse
    {
        $result = $this->call('network_info', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcNetworkInfoResponse',
  'nullable' => false,
), 'network_info.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function nextLightClientBlock(\Near\JsonRpc\Generated\Models\RpcLightClientNextBlockRequest $params): \Near\JsonRpc\Generated\Models\RpcLightClientNextBlockResponse
    {
        $result = $this->call('next_light_client_block', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcLightClientNextBlockResponse',
  'nullable' => false,
), 'next_light_client_block.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function query(\Near\JsonRpc\Generated\Models\RpcQueryRequest $params): \Near\JsonRpc\Generated\Models\RpcQueryResponse
    {
        $result = $this->call('query', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcQueryResponse',
  'nullable' => false,
), 'query.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function sendTx(\Near\JsonRpc\Generated\Models\RpcSendTransactionRequest $params): \Near\JsonRpc\Generated\Models\RpcTransactionResponse
    {
        $result = $this->call('send_tx', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcTransactionResponse',
  'nullable' => false,
), 'send_tx.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function status(\Near\JsonRpc\Generated\Models\RpcStatusRequest $params): \Near\JsonRpc\Generated\Models\RpcStatusResponse
    {
        $result = $this->call('status', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcStatusResponse',
  'nullable' => false,
), 'status.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function tx(\Near\JsonRpc\Generated\Models\RpcTransactionStatusRequest $params): \Near\JsonRpc\Generated\Models\RpcTransactionResponse
    {
        $result = $this->call('tx', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcTransactionResponse',
  'nullable' => false,
), 'tx.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function txStatus(\Near\JsonRpc\Generated\Models\RpcTransactionStatusRequest $params): \Near\JsonRpc\Generated\Models\RpcTransactionResponse
    {
        $result = $this->call('tx_status', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcTransactionResponse',
  'nullable' => false,
), 'tx_status.result');
    }
    /** Execute the matching OpenAPI JSON-RPC operation and decode its result. */
    public function validators(\Near\JsonRpc\Generated\Models\RpcValidatorRequest $params): \Near\JsonRpc\Generated\Models\RpcValidatorResponse
    {
        $result = $this->call('validators', $params);
        return \Near\JsonRpc\Models\ModelHydrator::hydrate($result, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\RpcValidatorResponse',
  'nullable' => false,
), 'validators.result');
    }
}
