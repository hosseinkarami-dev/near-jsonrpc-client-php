<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * AccountData is a piece of global state that a validator
 * signs and broadcasts to the network.
 *
 * It is essentially the data that a validator wants to share with the network.
 * All the nodes in the network are collecting the account data
 * broadcasted by the validators.
 * Since the number of the validators is bounded and their
 * identity is known (and the maximal size of allowed AccountData is bounded)
 * the global state that is distributed in the form of AccountData is bounded
 * as well.
 * Find more information in the docs [here](https://github.com/near/nearcore/blob/560f7fc8f4b3106e0d5d46050688610b1f104ac6/chain/client/src/client.rs#L2232)
 */
final readonly class AccountDataView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * Account key of the validator signing this AccountData.
         *
         * @var \Near\JsonRpc\Generated\Models\PublicKey
         */
        public \Near\JsonRpc\Generated\Models\PublicKey $accountKey,
        /**
         * ID of the node that handles the account key (aka validator key).
         *
         * @var \Near\JsonRpc\Generated\Models\PublicKey
         */
        public \Near\JsonRpc\Generated\Models\PublicKey $peerId,
        /**
         * Proxy nodes that are directly connected to the validator node
         * (this list may include the validator node itself).
         * TIER1 nodes should connect to one of the proxies to sent TIER1
         * messages to the validator.
         *
         * @var list<\Near\JsonRpc\Generated\Models\Tier1ProxyView>
         */
        public array $proxies,
        /**
         * UTC timestamp of when the AccountData has been signed.
         *
         * @var string
         */
        public string $timestamp,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->accountKey, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
  'nullable' => false,
), 'account_key');
        \Near\JsonRpc\Models\TypeGuard::assert($this->peerId, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
  'nullable' => false,
), 'peer_id');
        \Near\JsonRpc\Models\TypeGuard::assert($this->proxies, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Tier1ProxyView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'proxies');
        \Near\JsonRpc\Models\TypeGuard::assert($this->timestamp, array (
  'type' => 'string',
), 'timestamp');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for AccountDataView.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('peer_id', $data)) throw new \InvalidArgumentException('Missing required field: peer_id');
        if (!array_key_exists('proxies', $data)) throw new \InvalidArgumentException('Missing required field: proxies');
        if (!array_key_exists('account_key', $data)) throw new \InvalidArgumentException('Missing required field: account_key');
        if (!array_key_exists('timestamp', $data)) throw new \InvalidArgumentException('Missing required field: timestamp');
        $extra = array_diff_key($data, array (
  'account_key' => true,
  'peer_id' => true,
  'proxies' => true,
  'timestamp' => true,
));
        return new self(
            accountKey: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['account_key'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
  'nullable' => false,
), 'account_key'),
            peerId: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['peer_id'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
  'nullable' => false,
), 'peer_id'),
            proxies: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['proxies'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Tier1ProxyView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'proxies'),
            timestamp: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['timestamp'], array (
  'type' => 'string',
), 'timestamp'),
            _extra: $extra
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = $this->extra;
        $data['account_key'] = $this->accountKey;
        $data['peer_id'] = $this->peerId;
        $data['proxies'] = $this->proxies;
        $data['timestamp'] = $this->timestamp;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'account_key' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
      'nullable' => false,
    ),
    'peer_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
      'nullable' => false,
    ),
    'proxies' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Tier1ProxyView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'timestamp' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'peer_id',
    1 => 'proxies',
    2 => 'account_key',
    3 => 'timestamp',
  ),
  'type' => 'object',
), 'AccountDataView'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'account_key' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
      'nullable' => false,
    ),
    'peer_id' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\PublicKey',
      'nullable' => false,
    ),
    'proxies' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Tier1ProxyView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'timestamp' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'peer_id',
    1 => 'proxies',
    2 => 'account_key',
    3 => 'timestamp',
  ),
  'type' => 'object',
), 'AccountDataView');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
