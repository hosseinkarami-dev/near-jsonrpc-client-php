<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Typed view of ExtCostsConfig to preserve JSON output field names in protocol
 * config RPC output.
 */
final readonly class ExtCostsConfigView implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * Base cost for multiexp
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $altBn128G1MultiexpBase = null,
        /**
         * Per element cost for multiexp
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $altBn128G1MultiexpElement = null,
        /**
         * Base cost for sum
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $altBn128G1SumBase = null,
        /**
         * Per element cost for sum
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $altBn128G1SumElement = null,
        /**
         * Base cost for pairing check
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $altBn128PairingCheckBase = null,
        /**
         * Per element cost for pairing check
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $altBn128PairingCheckElement = null,
        /**
         * Base cost for calling a host function.
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $base = null,
        /**
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $bls12381G1MultiexpBase = null,
        /**
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $bls12381G1MultiexpElement = null,
        /**
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $bls12381G2MultiexpBase = null,
        /**
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $bls12381G2MultiexpElement = null,
        /**
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $bls12381MapFp2ToG2Base = null,
        /**
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $bls12381MapFp2ToG2Element = null,
        /**
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $bls12381MapFpToG1Base = null,
        /**
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $bls12381MapFpToG1Element = null,
        /**
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $bls12381P1DecompressBase = null,
        /**
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $bls12381P1DecompressElement = null,
        /**
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $bls12381P1SumBase = null,
        /**
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $bls12381P1SumElement = null,
        /**
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $bls12381P2DecompressBase = null,
        /**
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $bls12381P2DecompressElement = null,
        /**
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $bls12381P2SumBase = null,
        /**
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $bls12381P2SumElement = null,
        /**
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $bls12381PairingBase = null,
        /**
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $bls12381PairingElement = null,
        /**
         * Base cost of loading a pre-compiled contract
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $contractLoadingBase = null,
        /**
         * Cost per byte of loading a pre-compiled contract
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $contractLoadingBytes = null,
        /**
         * Cost of calling ecrecover
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $ecrecoverBase = null,
        /**
         * Cost of getting ed25519 base
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $ed25519VerifyBase = null,
        /**
         * Cost of getting ed25519 per byte
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $ed25519VerifyByte = null,
        /**
         * Cost of getting sha256 base
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $keccak256Base = null,
        /**
         * Cost of getting sha256 per byte
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $keccak256Byte = null,
        /**
         * Cost of getting sha256 base
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $keccak512Base = null,
        /**
         * Cost of getting sha256 per byte
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $keccak512Byte = null,
        /**
         * Cost for calling logging.
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $logBase = null,
        /**
         * Cost for logging per byte
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $logByte = null,
        /**
         * Cost of ML-DSA-65 signature verification base
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $mlDsaVerifyBase = null,
        /**
         * Cost of ML-DSA-65 signature verification per byte
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $mlDsaVerifyByte = null,
        /**
         * Cost of P-256 ECDSA signature verification base
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $p256VerifyBase = null,
        /**
         * Cost of P-256 ECDSA signature verification per byte
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $p256VerifyByte = null,
        /**
         * Cost for calling `promise_and`
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $promiseAndBase = null,
        /**
         * Cost for calling `promise_and` for each promise
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $promiseAndPerPromise = null,
        /**
         * Cost for calling `promise_return`
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $promiseReturn = null,
        /**
         * Cost for reading trie node from memory
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $readCachedTrieNode = null,
        /**
         * Base cost for guest memory read
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $readMemoryBase = null,
        /**
         * Cost for guest memory read
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $readMemoryByte = null,
        /**
         * Base cost for reading from register
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $readRegisterBase = null,
        /**
         * Cost for reading byte from register
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $readRegisterByte = null,
        /**
         * Cost of getting ripemd160 base
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $ripemd160Base = null,
        /**
         * Cost of getting ripemd160 per message block
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $ripemd160Block = null,
        /**
         * Cost of getting sha256 base
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $sha256Base = null,
        /**
         * Cost of getting sha256 per byte
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $sha256Byte = null,
        /**
         * Cost of getting sha3-256 base
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $sha3256Base = null,
        /**
         * Cost of getting sha3-256 per byte
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $sha3256Byte = null,
        /**
         * Cost of getting sha3-384 base
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $sha3384Base = null,
        /**
         * Cost of getting sha3-384 per byte
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $sha3384Byte = null,
        /**
         * Cost of getting sha3-512 base
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $sha3512Base = null,
        /**
         * Cost of getting sha3-512 per byte
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $sha3512Byte = null,
        /**
         * Storage trie check for key existence cost base
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $storageHasKeyBase = null,
        /**
         * Storage trie check for key existence per key byte
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $storageHasKeyByte = null,
        /**
         * Create trie range iterator cost per byte of from key.
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $storageIterCreateFromByte = null,
        /**
         * Create trie prefix iterator cost base
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $storageIterCreatePrefixBase = null,
        /**
         * Create trie prefix iterator cost per byte.
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $storageIterCreatePrefixByte = null,
        /**
         * Create trie range iterator cost base
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $storageIterCreateRangeBase = null,
        /**
         * Create trie range iterator cost per byte of to key.
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $storageIterCreateToByte = null,
        /**
         * Trie iterator per key base cost
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $storageIterNextBase = null,
        /**
         * Trie iterator next key byte cost
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $storageIterNextKeyByte = null,
        /**
         * Trie iterator next key byte cost
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $storageIterNextValueByte = null,
        /**
         * Storage trie read key overhead base cost, when doing large reads
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $storageLargeReadOverheadBase = null,
        /**
         * Storage trie read key overhead  per-byte cost, when doing large reads
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $storageLargeReadOverheadByte = null,
        /**
         * Storage trie read key base cost
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $storageReadBase = null,
        /**
         * Storage trie read key per byte cost
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $storageReadKeyByte = null,
        /**
         * Storage trie read value cost per byte cost
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $storageReadValueByte = null,
        /**
         * Remove key from trie base cost
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $storageRemoveBase = null,
        /**
         * Remove key from trie per byte cost
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $storageRemoveKeyByte = null,
        /**
         * Remove key from trie ret value byte cost
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $storageRemoveRetValueByte = null,
        /**
         * Storage trie write key base cost
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $storageWriteBase = null,
        /**
         * Storage trie write cost per byte of evicted value.
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $storageWriteEvictedByte = null,
        /**
         * Storage trie write key per byte cost
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $storageWriteKeyByte = null,
        /**
         * Storage trie write value per byte cost
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $storageWriteValueByte = null,
        /**
         * Cost per reading trie node from DB
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $touchingTrieNode = null,
        /**
         * Base cost of deriving a `0u` account id from a raw state init.
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $universalStateInitToAccountIdBase = null,
        /**
         * Per byte of the raw state init.
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $universalStateInitToAccountIdByte = null,
        /**
         * Base cost of decoding utf16. It's used for `log_utf16`.
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $utf16DecodingBase = null,
        /**
         * Cost per byte of decoding utf16. It's used for `log_utf16`.
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $utf16DecodingByte = null,
        /**
         * Base cost of decoding utf8. It's used for `log_utf8` and `panic_utf8`.
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $utf8DecodingBase = null,
        /**
         * Cost per byte of decoding utf8. It's used for `log_utf8` and `panic_utf8`.
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $utf8DecodingByte = null,
        /**
         * Cost of calling `validator_stake`.
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $validatorStakeBase = null,
        /**
         * Cost of calling `validator_total_stake`.
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $validatorTotalStakeBase = null,
        /**
         * Base cost for guest memory write
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $writeMemoryBase = null,
        /**
         * Cost for guest memory write per byte
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $writeMemoryByte = null,
        /**
         * Base cost for writing into register
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $writeRegisterBase = null,
        /**
         * Cost for writing byte into register
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $writeRegisterByte = null,
        /**
         * Base cost for creating a yield promise.
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $yieldCreateBase = null,
        /**
         * Per byte cost of arguments and method name.
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $yieldCreateByte = null,
        /**
         * Base cost for creating a yield promise with a user-provided yield ID
         * (covers the additional trie writes for the yield_id<->data_id mapping).
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $yieldCreateWithIdBase = null,
        /**
         * Base cost for resuming a yield receipt.
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $yieldResumeBase = null,
        /**
         * Per byte cost of resume payload.
         *
         * @var \Near\JsonRpc\Generated\Models\NearGas|null
         */
        public \Near\JsonRpc\Generated\Models\NearGas|null $yieldResumeByte = null,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        if ($this->altBn128G1MultiexpBase !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->altBn128G1MultiexpBase, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'alt_bn128_g1_multiexp_base');
        if ($this->altBn128G1MultiexpElement !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->altBn128G1MultiexpElement, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'alt_bn128_g1_multiexp_element');
        if ($this->altBn128G1SumBase !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->altBn128G1SumBase, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'alt_bn128_g1_sum_base');
        if ($this->altBn128G1SumElement !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->altBn128G1SumElement, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'alt_bn128_g1_sum_element');
        if ($this->altBn128PairingCheckBase !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->altBn128PairingCheckBase, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'alt_bn128_pairing_check_base');
        if ($this->altBn128PairingCheckElement !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->altBn128PairingCheckElement, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'alt_bn128_pairing_check_element');
        if ($this->base !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->base, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'base');
        if ($this->bls12381G1MultiexpBase !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->bls12381G1MultiexpBase, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'bls12381_g1_multiexp_base');
        if ($this->bls12381G1MultiexpElement !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->bls12381G1MultiexpElement, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'bls12381_g1_multiexp_element');
        if ($this->bls12381G2MultiexpBase !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->bls12381G2MultiexpBase, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'bls12381_g2_multiexp_base');
        if ($this->bls12381G2MultiexpElement !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->bls12381G2MultiexpElement, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'bls12381_g2_multiexp_element');
        if ($this->bls12381MapFp2ToG2Base !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->bls12381MapFp2ToG2Base, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'bls12381_map_fp2_to_g2_base');
        if ($this->bls12381MapFp2ToG2Element !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->bls12381MapFp2ToG2Element, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'bls12381_map_fp2_to_g2_element');
        if ($this->bls12381MapFpToG1Base !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->bls12381MapFpToG1Base, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'bls12381_map_fp_to_g1_base');
        if ($this->bls12381MapFpToG1Element !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->bls12381MapFpToG1Element, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'bls12381_map_fp_to_g1_element');
        if ($this->bls12381P1DecompressBase !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->bls12381P1DecompressBase, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'bls12381_p1_decompress_base');
        if ($this->bls12381P1DecompressElement !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->bls12381P1DecompressElement, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'bls12381_p1_decompress_element');
        if ($this->bls12381P1SumBase !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->bls12381P1SumBase, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'bls12381_p1_sum_base');
        if ($this->bls12381P1SumElement !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->bls12381P1SumElement, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'bls12381_p1_sum_element');
        if ($this->bls12381P2DecompressBase !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->bls12381P2DecompressBase, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'bls12381_p2_decompress_base');
        if ($this->bls12381P2DecompressElement !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->bls12381P2DecompressElement, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'bls12381_p2_decompress_element');
        if ($this->bls12381P2SumBase !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->bls12381P2SumBase, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'bls12381_p2_sum_base');
        if ($this->bls12381P2SumElement !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->bls12381P2SumElement, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'bls12381_p2_sum_element');
        if ($this->bls12381PairingBase !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->bls12381PairingBase, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'bls12381_pairing_base');
        if ($this->bls12381PairingElement !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->bls12381PairingElement, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'bls12381_pairing_element');
        if ($this->contractLoadingBase !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->contractLoadingBase, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'contract_loading_base');
        if ($this->contractLoadingBytes !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->contractLoadingBytes, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'contract_loading_bytes');
        if ($this->ecrecoverBase !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->ecrecoverBase, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'ecrecover_base');
        if ($this->ed25519VerifyBase !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->ed25519VerifyBase, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'ed25519_verify_base');
        if ($this->ed25519VerifyByte !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->ed25519VerifyByte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'ed25519_verify_byte');
        if ($this->keccak256Base !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->keccak256Base, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'keccak256_base');
        if ($this->keccak256Byte !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->keccak256Byte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'keccak256_byte');
        if ($this->keccak512Base !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->keccak512Base, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'keccak512_base');
        if ($this->keccak512Byte !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->keccak512Byte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'keccak512_byte');
        if ($this->logBase !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->logBase, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'log_base');
        if ($this->logByte !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->logByte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'log_byte');
        if ($this->mlDsaVerifyBase !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->mlDsaVerifyBase, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'ml_dsa_verify_base');
        if ($this->mlDsaVerifyByte !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->mlDsaVerifyByte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'ml_dsa_verify_byte');
        if ($this->p256VerifyBase !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->p256VerifyBase, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'p256_verify_base');
        if ($this->p256VerifyByte !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->p256VerifyByte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'p256_verify_byte');
        if ($this->promiseAndBase !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->promiseAndBase, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'promise_and_base');
        if ($this->promiseAndPerPromise !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->promiseAndPerPromise, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'promise_and_per_promise');
        if ($this->promiseReturn !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->promiseReturn, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'promise_return');
        if ($this->readCachedTrieNode !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->readCachedTrieNode, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'read_cached_trie_node');
        if ($this->readMemoryBase !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->readMemoryBase, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'read_memory_base');
        if ($this->readMemoryByte !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->readMemoryByte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'read_memory_byte');
        if ($this->readRegisterBase !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->readRegisterBase, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'read_register_base');
        if ($this->readRegisterByte !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->readRegisterByte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'read_register_byte');
        if ($this->ripemd160Base !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->ripemd160Base, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'ripemd160_base');
        if ($this->ripemd160Block !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->ripemd160Block, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'ripemd160_block');
        if ($this->sha256Base !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->sha256Base, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'sha256_base');
        if ($this->sha256Byte !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->sha256Byte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'sha256_byte');
        if ($this->sha3256Base !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->sha3256Base, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'sha3_256_base');
        if ($this->sha3256Byte !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->sha3256Byte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'sha3_256_byte');
        if ($this->sha3384Base !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->sha3384Base, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'sha3_384_base');
        if ($this->sha3384Byte !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->sha3384Byte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'sha3_384_byte');
        if ($this->sha3512Base !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->sha3512Base, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'sha3_512_base');
        if ($this->sha3512Byte !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->sha3512Byte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'sha3_512_byte');
        if ($this->storageHasKeyBase !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->storageHasKeyBase, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_has_key_base');
        if ($this->storageHasKeyByte !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->storageHasKeyByte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_has_key_byte');
        if ($this->storageIterCreateFromByte !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->storageIterCreateFromByte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_iter_create_from_byte');
        if ($this->storageIterCreatePrefixBase !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->storageIterCreatePrefixBase, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_iter_create_prefix_base');
        if ($this->storageIterCreatePrefixByte !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->storageIterCreatePrefixByte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_iter_create_prefix_byte');
        if ($this->storageIterCreateRangeBase !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->storageIterCreateRangeBase, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_iter_create_range_base');
        if ($this->storageIterCreateToByte !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->storageIterCreateToByte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_iter_create_to_byte');
        if ($this->storageIterNextBase !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->storageIterNextBase, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_iter_next_base');
        if ($this->storageIterNextKeyByte !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->storageIterNextKeyByte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_iter_next_key_byte');
        if ($this->storageIterNextValueByte !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->storageIterNextValueByte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_iter_next_value_byte');
        if ($this->storageLargeReadOverheadBase !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->storageLargeReadOverheadBase, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_large_read_overhead_base');
        if ($this->storageLargeReadOverheadByte !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->storageLargeReadOverheadByte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_large_read_overhead_byte');
        if ($this->storageReadBase !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->storageReadBase, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_read_base');
        if ($this->storageReadKeyByte !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->storageReadKeyByte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_read_key_byte');
        if ($this->storageReadValueByte !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->storageReadValueByte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_read_value_byte');
        if ($this->storageRemoveBase !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->storageRemoveBase, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_remove_base');
        if ($this->storageRemoveKeyByte !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->storageRemoveKeyByte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_remove_key_byte');
        if ($this->storageRemoveRetValueByte !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->storageRemoveRetValueByte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_remove_ret_value_byte');
        if ($this->storageWriteBase !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->storageWriteBase, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_write_base');
        if ($this->storageWriteEvictedByte !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->storageWriteEvictedByte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_write_evicted_byte');
        if ($this->storageWriteKeyByte !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->storageWriteKeyByte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_write_key_byte');
        if ($this->storageWriteValueByte !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->storageWriteValueByte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_write_value_byte');
        if ($this->touchingTrieNode !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->touchingTrieNode, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'touching_trie_node');
        if ($this->universalStateInitToAccountIdBase !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->universalStateInitToAccountIdBase, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'universal_state_init_to_account_id_base');
        if ($this->universalStateInitToAccountIdByte !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->universalStateInitToAccountIdByte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'universal_state_init_to_account_id_byte');
        if ($this->utf16DecodingBase !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->utf16DecodingBase, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'utf16_decoding_base');
        if ($this->utf16DecodingByte !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->utf16DecodingByte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'utf16_decoding_byte');
        if ($this->utf8DecodingBase !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->utf8DecodingBase, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'utf8_decoding_base');
        if ($this->utf8DecodingByte !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->utf8DecodingByte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'utf8_decoding_byte');
        if ($this->validatorStakeBase !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->validatorStakeBase, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'validator_stake_base');
        if ($this->validatorTotalStakeBase !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->validatorTotalStakeBase, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'validator_total_stake_base');
        if ($this->writeMemoryBase !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->writeMemoryBase, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'write_memory_base');
        if ($this->writeMemoryByte !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->writeMemoryByte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'write_memory_byte');
        if ($this->writeRegisterBase !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->writeRegisterBase, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'write_register_base');
        if ($this->writeRegisterByte !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->writeRegisterByte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'write_register_byte');
        if ($this->yieldCreateBase !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->yieldCreateBase, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'yield_create_base');
        if ($this->yieldCreateByte !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->yieldCreateByte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'yield_create_byte');
        if ($this->yieldCreateWithIdBase !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->yieldCreateWithIdBase, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'yield_create_with_id_base');
        if ($this->yieldResumeBase !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->yieldResumeBase, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'yield_resume_base');
        if ($this->yieldResumeByte !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->yieldResumeByte, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'yield_resume_byte');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ExtCostsConfigView.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        $extra = array_diff_key($data, array (
  'alt_bn128_g1_multiexp_base' => true,
  'alt_bn128_g1_multiexp_element' => true,
  'alt_bn128_g1_sum_base' => true,
  'alt_bn128_g1_sum_element' => true,
  'alt_bn128_pairing_check_base' => true,
  'alt_bn128_pairing_check_element' => true,
  'base' => true,
  'bls12381_g1_multiexp_base' => true,
  'bls12381_g1_multiexp_element' => true,
  'bls12381_g2_multiexp_base' => true,
  'bls12381_g2_multiexp_element' => true,
  'bls12381_map_fp2_to_g2_base' => true,
  'bls12381_map_fp2_to_g2_element' => true,
  'bls12381_map_fp_to_g1_base' => true,
  'bls12381_map_fp_to_g1_element' => true,
  'bls12381_p1_decompress_base' => true,
  'bls12381_p1_decompress_element' => true,
  'bls12381_p1_sum_base' => true,
  'bls12381_p1_sum_element' => true,
  'bls12381_p2_decompress_base' => true,
  'bls12381_p2_decompress_element' => true,
  'bls12381_p2_sum_base' => true,
  'bls12381_p2_sum_element' => true,
  'bls12381_pairing_base' => true,
  'bls12381_pairing_element' => true,
  'contract_loading_base' => true,
  'contract_loading_bytes' => true,
  'ecrecover_base' => true,
  'ed25519_verify_base' => true,
  'ed25519_verify_byte' => true,
  'keccak256_base' => true,
  'keccak256_byte' => true,
  'keccak512_base' => true,
  'keccak512_byte' => true,
  'log_base' => true,
  'log_byte' => true,
  'ml_dsa_verify_base' => true,
  'ml_dsa_verify_byte' => true,
  'p256_verify_base' => true,
  'p256_verify_byte' => true,
  'promise_and_base' => true,
  'promise_and_per_promise' => true,
  'promise_return' => true,
  'read_cached_trie_node' => true,
  'read_memory_base' => true,
  'read_memory_byte' => true,
  'read_register_base' => true,
  'read_register_byte' => true,
  'ripemd160_base' => true,
  'ripemd160_block' => true,
  'sha256_base' => true,
  'sha256_byte' => true,
  'sha3_256_base' => true,
  'sha3_256_byte' => true,
  'sha3_384_base' => true,
  'sha3_384_byte' => true,
  'sha3_512_base' => true,
  'sha3_512_byte' => true,
  'storage_has_key_base' => true,
  'storage_has_key_byte' => true,
  'storage_iter_create_from_byte' => true,
  'storage_iter_create_prefix_base' => true,
  'storage_iter_create_prefix_byte' => true,
  'storage_iter_create_range_base' => true,
  'storage_iter_create_to_byte' => true,
  'storage_iter_next_base' => true,
  'storage_iter_next_key_byte' => true,
  'storage_iter_next_value_byte' => true,
  'storage_large_read_overhead_base' => true,
  'storage_large_read_overhead_byte' => true,
  'storage_read_base' => true,
  'storage_read_key_byte' => true,
  'storage_read_value_byte' => true,
  'storage_remove_base' => true,
  'storage_remove_key_byte' => true,
  'storage_remove_ret_value_byte' => true,
  'storage_write_base' => true,
  'storage_write_evicted_byte' => true,
  'storage_write_key_byte' => true,
  'storage_write_value_byte' => true,
  'touching_trie_node' => true,
  'universal_state_init_to_account_id_base' => true,
  'universal_state_init_to_account_id_byte' => true,
  'utf16_decoding_base' => true,
  'utf16_decoding_byte' => true,
  'utf8_decoding_base' => true,
  'utf8_decoding_byte' => true,
  'validator_stake_base' => true,
  'validator_total_stake_base' => true,
  'write_memory_base' => true,
  'write_memory_byte' => true,
  'write_register_base' => true,
  'write_register_byte' => true,
  'yield_create_base' => true,
  'yield_create_byte' => true,
  'yield_create_with_id_base' => true,
  'yield_resume_base' => true,
  'yield_resume_byte' => true,
));
        return new self(
            altBn128G1MultiexpBase: array_key_exists('alt_bn128_g1_multiexp_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['alt_bn128_g1_multiexp_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'alt_bn128_g1_multiexp_base') : null,
            altBn128G1MultiexpElement: array_key_exists('alt_bn128_g1_multiexp_element', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['alt_bn128_g1_multiexp_element'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'alt_bn128_g1_multiexp_element') : null,
            altBn128G1SumBase: array_key_exists('alt_bn128_g1_sum_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['alt_bn128_g1_sum_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'alt_bn128_g1_sum_base') : null,
            altBn128G1SumElement: array_key_exists('alt_bn128_g1_sum_element', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['alt_bn128_g1_sum_element'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'alt_bn128_g1_sum_element') : null,
            altBn128PairingCheckBase: array_key_exists('alt_bn128_pairing_check_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['alt_bn128_pairing_check_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'alt_bn128_pairing_check_base') : null,
            altBn128PairingCheckElement: array_key_exists('alt_bn128_pairing_check_element', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['alt_bn128_pairing_check_element'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'alt_bn128_pairing_check_element') : null,
            base: array_key_exists('base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'base') : null,
            bls12381G1MultiexpBase: array_key_exists('bls12381_g1_multiexp_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['bls12381_g1_multiexp_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'bls12381_g1_multiexp_base') : null,
            bls12381G1MultiexpElement: array_key_exists('bls12381_g1_multiexp_element', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['bls12381_g1_multiexp_element'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'bls12381_g1_multiexp_element') : null,
            bls12381G2MultiexpBase: array_key_exists('bls12381_g2_multiexp_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['bls12381_g2_multiexp_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'bls12381_g2_multiexp_base') : null,
            bls12381G2MultiexpElement: array_key_exists('bls12381_g2_multiexp_element', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['bls12381_g2_multiexp_element'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'bls12381_g2_multiexp_element') : null,
            bls12381MapFp2ToG2Base: array_key_exists('bls12381_map_fp2_to_g2_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['bls12381_map_fp2_to_g2_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'bls12381_map_fp2_to_g2_base') : null,
            bls12381MapFp2ToG2Element: array_key_exists('bls12381_map_fp2_to_g2_element', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['bls12381_map_fp2_to_g2_element'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'bls12381_map_fp2_to_g2_element') : null,
            bls12381MapFpToG1Base: array_key_exists('bls12381_map_fp_to_g1_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['bls12381_map_fp_to_g1_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'bls12381_map_fp_to_g1_base') : null,
            bls12381MapFpToG1Element: array_key_exists('bls12381_map_fp_to_g1_element', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['bls12381_map_fp_to_g1_element'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'bls12381_map_fp_to_g1_element') : null,
            bls12381P1DecompressBase: array_key_exists('bls12381_p1_decompress_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['bls12381_p1_decompress_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'bls12381_p1_decompress_base') : null,
            bls12381P1DecompressElement: array_key_exists('bls12381_p1_decompress_element', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['bls12381_p1_decompress_element'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'bls12381_p1_decompress_element') : null,
            bls12381P1SumBase: array_key_exists('bls12381_p1_sum_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['bls12381_p1_sum_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'bls12381_p1_sum_base') : null,
            bls12381P1SumElement: array_key_exists('bls12381_p1_sum_element', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['bls12381_p1_sum_element'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'bls12381_p1_sum_element') : null,
            bls12381P2DecompressBase: array_key_exists('bls12381_p2_decompress_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['bls12381_p2_decompress_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'bls12381_p2_decompress_base') : null,
            bls12381P2DecompressElement: array_key_exists('bls12381_p2_decompress_element', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['bls12381_p2_decompress_element'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'bls12381_p2_decompress_element') : null,
            bls12381P2SumBase: array_key_exists('bls12381_p2_sum_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['bls12381_p2_sum_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'bls12381_p2_sum_base') : null,
            bls12381P2SumElement: array_key_exists('bls12381_p2_sum_element', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['bls12381_p2_sum_element'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'bls12381_p2_sum_element') : null,
            bls12381PairingBase: array_key_exists('bls12381_pairing_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['bls12381_pairing_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'bls12381_pairing_base') : null,
            bls12381PairingElement: array_key_exists('bls12381_pairing_element', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['bls12381_pairing_element'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'bls12381_pairing_element') : null,
            contractLoadingBase: array_key_exists('contract_loading_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['contract_loading_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'contract_loading_base') : null,
            contractLoadingBytes: array_key_exists('contract_loading_bytes', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['contract_loading_bytes'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'contract_loading_bytes') : null,
            ecrecoverBase: array_key_exists('ecrecover_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['ecrecover_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'ecrecover_base') : null,
            ed25519VerifyBase: array_key_exists('ed25519_verify_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['ed25519_verify_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'ed25519_verify_base') : null,
            ed25519VerifyByte: array_key_exists('ed25519_verify_byte', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['ed25519_verify_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'ed25519_verify_byte') : null,
            keccak256Base: array_key_exists('keccak256_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['keccak256_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'keccak256_base') : null,
            keccak256Byte: array_key_exists('keccak256_byte', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['keccak256_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'keccak256_byte') : null,
            keccak512Base: array_key_exists('keccak512_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['keccak512_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'keccak512_base') : null,
            keccak512Byte: array_key_exists('keccak512_byte', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['keccak512_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'keccak512_byte') : null,
            logBase: array_key_exists('log_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['log_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'log_base') : null,
            logByte: array_key_exists('log_byte', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['log_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'log_byte') : null,
            mlDsaVerifyBase: array_key_exists('ml_dsa_verify_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['ml_dsa_verify_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'ml_dsa_verify_base') : null,
            mlDsaVerifyByte: array_key_exists('ml_dsa_verify_byte', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['ml_dsa_verify_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'ml_dsa_verify_byte') : null,
            p256VerifyBase: array_key_exists('p256_verify_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['p256_verify_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'p256_verify_base') : null,
            p256VerifyByte: array_key_exists('p256_verify_byte', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['p256_verify_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'p256_verify_byte') : null,
            promiseAndBase: array_key_exists('promise_and_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['promise_and_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'promise_and_base') : null,
            promiseAndPerPromise: array_key_exists('promise_and_per_promise', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['promise_and_per_promise'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'promise_and_per_promise') : null,
            promiseReturn: array_key_exists('promise_return', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['promise_return'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'promise_return') : null,
            readCachedTrieNode: array_key_exists('read_cached_trie_node', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['read_cached_trie_node'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'read_cached_trie_node') : null,
            readMemoryBase: array_key_exists('read_memory_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['read_memory_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'read_memory_base') : null,
            readMemoryByte: array_key_exists('read_memory_byte', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['read_memory_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'read_memory_byte') : null,
            readRegisterBase: array_key_exists('read_register_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['read_register_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'read_register_base') : null,
            readRegisterByte: array_key_exists('read_register_byte', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['read_register_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'read_register_byte') : null,
            ripemd160Base: array_key_exists('ripemd160_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['ripemd160_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'ripemd160_base') : null,
            ripemd160Block: array_key_exists('ripemd160_block', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['ripemd160_block'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'ripemd160_block') : null,
            sha256Base: array_key_exists('sha256_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['sha256_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'sha256_base') : null,
            sha256Byte: array_key_exists('sha256_byte', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['sha256_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'sha256_byte') : null,
            sha3256Base: array_key_exists('sha3_256_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['sha3_256_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'sha3_256_base') : null,
            sha3256Byte: array_key_exists('sha3_256_byte', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['sha3_256_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'sha3_256_byte') : null,
            sha3384Base: array_key_exists('sha3_384_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['sha3_384_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'sha3_384_base') : null,
            sha3384Byte: array_key_exists('sha3_384_byte', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['sha3_384_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'sha3_384_byte') : null,
            sha3512Base: array_key_exists('sha3_512_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['sha3_512_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'sha3_512_base') : null,
            sha3512Byte: array_key_exists('sha3_512_byte', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['sha3_512_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'sha3_512_byte') : null,
            storageHasKeyBase: array_key_exists('storage_has_key_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['storage_has_key_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_has_key_base') : null,
            storageHasKeyByte: array_key_exists('storage_has_key_byte', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['storage_has_key_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_has_key_byte') : null,
            storageIterCreateFromByte: array_key_exists('storage_iter_create_from_byte', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['storage_iter_create_from_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_iter_create_from_byte') : null,
            storageIterCreatePrefixBase: array_key_exists('storage_iter_create_prefix_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['storage_iter_create_prefix_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_iter_create_prefix_base') : null,
            storageIterCreatePrefixByte: array_key_exists('storage_iter_create_prefix_byte', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['storage_iter_create_prefix_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_iter_create_prefix_byte') : null,
            storageIterCreateRangeBase: array_key_exists('storage_iter_create_range_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['storage_iter_create_range_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_iter_create_range_base') : null,
            storageIterCreateToByte: array_key_exists('storage_iter_create_to_byte', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['storage_iter_create_to_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_iter_create_to_byte') : null,
            storageIterNextBase: array_key_exists('storage_iter_next_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['storage_iter_next_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_iter_next_base') : null,
            storageIterNextKeyByte: array_key_exists('storage_iter_next_key_byte', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['storage_iter_next_key_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_iter_next_key_byte') : null,
            storageIterNextValueByte: array_key_exists('storage_iter_next_value_byte', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['storage_iter_next_value_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_iter_next_value_byte') : null,
            storageLargeReadOverheadBase: array_key_exists('storage_large_read_overhead_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['storage_large_read_overhead_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_large_read_overhead_base') : null,
            storageLargeReadOverheadByte: array_key_exists('storage_large_read_overhead_byte', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['storage_large_read_overhead_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_large_read_overhead_byte') : null,
            storageReadBase: array_key_exists('storage_read_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['storage_read_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_read_base') : null,
            storageReadKeyByte: array_key_exists('storage_read_key_byte', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['storage_read_key_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_read_key_byte') : null,
            storageReadValueByte: array_key_exists('storage_read_value_byte', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['storage_read_value_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_read_value_byte') : null,
            storageRemoveBase: array_key_exists('storage_remove_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['storage_remove_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_remove_base') : null,
            storageRemoveKeyByte: array_key_exists('storage_remove_key_byte', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['storage_remove_key_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_remove_key_byte') : null,
            storageRemoveRetValueByte: array_key_exists('storage_remove_ret_value_byte', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['storage_remove_ret_value_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_remove_ret_value_byte') : null,
            storageWriteBase: array_key_exists('storage_write_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['storage_write_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_write_base') : null,
            storageWriteEvictedByte: array_key_exists('storage_write_evicted_byte', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['storage_write_evicted_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_write_evicted_byte') : null,
            storageWriteKeyByte: array_key_exists('storage_write_key_byte', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['storage_write_key_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_write_key_byte') : null,
            storageWriteValueByte: array_key_exists('storage_write_value_byte', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['storage_write_value_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'storage_write_value_byte') : null,
            touchingTrieNode: array_key_exists('touching_trie_node', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['touching_trie_node'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'touching_trie_node') : null,
            universalStateInitToAccountIdBase: array_key_exists('universal_state_init_to_account_id_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['universal_state_init_to_account_id_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'universal_state_init_to_account_id_base') : null,
            universalStateInitToAccountIdByte: array_key_exists('universal_state_init_to_account_id_byte', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['universal_state_init_to_account_id_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'universal_state_init_to_account_id_byte') : null,
            utf16DecodingBase: array_key_exists('utf16_decoding_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['utf16_decoding_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'utf16_decoding_base') : null,
            utf16DecodingByte: array_key_exists('utf16_decoding_byte', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['utf16_decoding_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'utf16_decoding_byte') : null,
            utf8DecodingBase: array_key_exists('utf8_decoding_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['utf8_decoding_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'utf8_decoding_base') : null,
            utf8DecodingByte: array_key_exists('utf8_decoding_byte', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['utf8_decoding_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'utf8_decoding_byte') : null,
            validatorStakeBase: array_key_exists('validator_stake_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['validator_stake_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'validator_stake_base') : null,
            validatorTotalStakeBase: array_key_exists('validator_total_stake_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['validator_total_stake_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'validator_total_stake_base') : null,
            writeMemoryBase: array_key_exists('write_memory_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['write_memory_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'write_memory_base') : null,
            writeMemoryByte: array_key_exists('write_memory_byte', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['write_memory_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'write_memory_byte') : null,
            writeRegisterBase: array_key_exists('write_register_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['write_register_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'write_register_base') : null,
            writeRegisterByte: array_key_exists('write_register_byte', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['write_register_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'write_register_byte') : null,
            yieldCreateBase: array_key_exists('yield_create_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['yield_create_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'yield_create_base') : null,
            yieldCreateByte: array_key_exists('yield_create_byte', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['yield_create_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'yield_create_byte') : null,
            yieldCreateWithIdBase: array_key_exists('yield_create_with_id_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['yield_create_with_id_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'yield_create_with_id_base') : null,
            yieldResumeBase: array_key_exists('yield_resume_base', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['yield_resume_base'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'yield_resume_base') : null,
            yieldResumeByte: array_key_exists('yield_resume_byte', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['yield_resume_byte'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
  'nullable' => false,
), 'yield_resume_byte') : null,
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
        if ($this->altBn128G1MultiexpBase !== null) $data['alt_bn128_g1_multiexp_base'] = $this->altBn128G1MultiexpBase;
        if ($this->altBn128G1MultiexpElement !== null) $data['alt_bn128_g1_multiexp_element'] = $this->altBn128G1MultiexpElement;
        if ($this->altBn128G1SumBase !== null) $data['alt_bn128_g1_sum_base'] = $this->altBn128G1SumBase;
        if ($this->altBn128G1SumElement !== null) $data['alt_bn128_g1_sum_element'] = $this->altBn128G1SumElement;
        if ($this->altBn128PairingCheckBase !== null) $data['alt_bn128_pairing_check_base'] = $this->altBn128PairingCheckBase;
        if ($this->altBn128PairingCheckElement !== null) $data['alt_bn128_pairing_check_element'] = $this->altBn128PairingCheckElement;
        if ($this->base !== null) $data['base'] = $this->base;
        if ($this->bls12381G1MultiexpBase !== null) $data['bls12381_g1_multiexp_base'] = $this->bls12381G1MultiexpBase;
        if ($this->bls12381G1MultiexpElement !== null) $data['bls12381_g1_multiexp_element'] = $this->bls12381G1MultiexpElement;
        if ($this->bls12381G2MultiexpBase !== null) $data['bls12381_g2_multiexp_base'] = $this->bls12381G2MultiexpBase;
        if ($this->bls12381G2MultiexpElement !== null) $data['bls12381_g2_multiexp_element'] = $this->bls12381G2MultiexpElement;
        if ($this->bls12381MapFp2ToG2Base !== null) $data['bls12381_map_fp2_to_g2_base'] = $this->bls12381MapFp2ToG2Base;
        if ($this->bls12381MapFp2ToG2Element !== null) $data['bls12381_map_fp2_to_g2_element'] = $this->bls12381MapFp2ToG2Element;
        if ($this->bls12381MapFpToG1Base !== null) $data['bls12381_map_fp_to_g1_base'] = $this->bls12381MapFpToG1Base;
        if ($this->bls12381MapFpToG1Element !== null) $data['bls12381_map_fp_to_g1_element'] = $this->bls12381MapFpToG1Element;
        if ($this->bls12381P1DecompressBase !== null) $data['bls12381_p1_decompress_base'] = $this->bls12381P1DecompressBase;
        if ($this->bls12381P1DecompressElement !== null) $data['bls12381_p1_decompress_element'] = $this->bls12381P1DecompressElement;
        if ($this->bls12381P1SumBase !== null) $data['bls12381_p1_sum_base'] = $this->bls12381P1SumBase;
        if ($this->bls12381P1SumElement !== null) $data['bls12381_p1_sum_element'] = $this->bls12381P1SumElement;
        if ($this->bls12381P2DecompressBase !== null) $data['bls12381_p2_decompress_base'] = $this->bls12381P2DecompressBase;
        if ($this->bls12381P2DecompressElement !== null) $data['bls12381_p2_decompress_element'] = $this->bls12381P2DecompressElement;
        if ($this->bls12381P2SumBase !== null) $data['bls12381_p2_sum_base'] = $this->bls12381P2SumBase;
        if ($this->bls12381P2SumElement !== null) $data['bls12381_p2_sum_element'] = $this->bls12381P2SumElement;
        if ($this->bls12381PairingBase !== null) $data['bls12381_pairing_base'] = $this->bls12381PairingBase;
        if ($this->bls12381PairingElement !== null) $data['bls12381_pairing_element'] = $this->bls12381PairingElement;
        if ($this->contractLoadingBase !== null) $data['contract_loading_base'] = $this->contractLoadingBase;
        if ($this->contractLoadingBytes !== null) $data['contract_loading_bytes'] = $this->contractLoadingBytes;
        if ($this->ecrecoverBase !== null) $data['ecrecover_base'] = $this->ecrecoverBase;
        if ($this->ed25519VerifyBase !== null) $data['ed25519_verify_base'] = $this->ed25519VerifyBase;
        if ($this->ed25519VerifyByte !== null) $data['ed25519_verify_byte'] = $this->ed25519VerifyByte;
        if ($this->keccak256Base !== null) $data['keccak256_base'] = $this->keccak256Base;
        if ($this->keccak256Byte !== null) $data['keccak256_byte'] = $this->keccak256Byte;
        if ($this->keccak512Base !== null) $data['keccak512_base'] = $this->keccak512Base;
        if ($this->keccak512Byte !== null) $data['keccak512_byte'] = $this->keccak512Byte;
        if ($this->logBase !== null) $data['log_base'] = $this->logBase;
        if ($this->logByte !== null) $data['log_byte'] = $this->logByte;
        if ($this->mlDsaVerifyBase !== null) $data['ml_dsa_verify_base'] = $this->mlDsaVerifyBase;
        if ($this->mlDsaVerifyByte !== null) $data['ml_dsa_verify_byte'] = $this->mlDsaVerifyByte;
        if ($this->p256VerifyBase !== null) $data['p256_verify_base'] = $this->p256VerifyBase;
        if ($this->p256VerifyByte !== null) $data['p256_verify_byte'] = $this->p256VerifyByte;
        if ($this->promiseAndBase !== null) $data['promise_and_base'] = $this->promiseAndBase;
        if ($this->promiseAndPerPromise !== null) $data['promise_and_per_promise'] = $this->promiseAndPerPromise;
        if ($this->promiseReturn !== null) $data['promise_return'] = $this->promiseReturn;
        if ($this->readCachedTrieNode !== null) $data['read_cached_trie_node'] = $this->readCachedTrieNode;
        if ($this->readMemoryBase !== null) $data['read_memory_base'] = $this->readMemoryBase;
        if ($this->readMemoryByte !== null) $data['read_memory_byte'] = $this->readMemoryByte;
        if ($this->readRegisterBase !== null) $data['read_register_base'] = $this->readRegisterBase;
        if ($this->readRegisterByte !== null) $data['read_register_byte'] = $this->readRegisterByte;
        if ($this->ripemd160Base !== null) $data['ripemd160_base'] = $this->ripemd160Base;
        if ($this->ripemd160Block !== null) $data['ripemd160_block'] = $this->ripemd160Block;
        if ($this->sha256Base !== null) $data['sha256_base'] = $this->sha256Base;
        if ($this->sha256Byte !== null) $data['sha256_byte'] = $this->sha256Byte;
        if ($this->sha3256Base !== null) $data['sha3_256_base'] = $this->sha3256Base;
        if ($this->sha3256Byte !== null) $data['sha3_256_byte'] = $this->sha3256Byte;
        if ($this->sha3384Base !== null) $data['sha3_384_base'] = $this->sha3384Base;
        if ($this->sha3384Byte !== null) $data['sha3_384_byte'] = $this->sha3384Byte;
        if ($this->sha3512Base !== null) $data['sha3_512_base'] = $this->sha3512Base;
        if ($this->sha3512Byte !== null) $data['sha3_512_byte'] = $this->sha3512Byte;
        if ($this->storageHasKeyBase !== null) $data['storage_has_key_base'] = $this->storageHasKeyBase;
        if ($this->storageHasKeyByte !== null) $data['storage_has_key_byte'] = $this->storageHasKeyByte;
        if ($this->storageIterCreateFromByte !== null) $data['storage_iter_create_from_byte'] = $this->storageIterCreateFromByte;
        if ($this->storageIterCreatePrefixBase !== null) $data['storage_iter_create_prefix_base'] = $this->storageIterCreatePrefixBase;
        if ($this->storageIterCreatePrefixByte !== null) $data['storage_iter_create_prefix_byte'] = $this->storageIterCreatePrefixByte;
        if ($this->storageIterCreateRangeBase !== null) $data['storage_iter_create_range_base'] = $this->storageIterCreateRangeBase;
        if ($this->storageIterCreateToByte !== null) $data['storage_iter_create_to_byte'] = $this->storageIterCreateToByte;
        if ($this->storageIterNextBase !== null) $data['storage_iter_next_base'] = $this->storageIterNextBase;
        if ($this->storageIterNextKeyByte !== null) $data['storage_iter_next_key_byte'] = $this->storageIterNextKeyByte;
        if ($this->storageIterNextValueByte !== null) $data['storage_iter_next_value_byte'] = $this->storageIterNextValueByte;
        if ($this->storageLargeReadOverheadBase !== null) $data['storage_large_read_overhead_base'] = $this->storageLargeReadOverheadBase;
        if ($this->storageLargeReadOverheadByte !== null) $data['storage_large_read_overhead_byte'] = $this->storageLargeReadOverheadByte;
        if ($this->storageReadBase !== null) $data['storage_read_base'] = $this->storageReadBase;
        if ($this->storageReadKeyByte !== null) $data['storage_read_key_byte'] = $this->storageReadKeyByte;
        if ($this->storageReadValueByte !== null) $data['storage_read_value_byte'] = $this->storageReadValueByte;
        if ($this->storageRemoveBase !== null) $data['storage_remove_base'] = $this->storageRemoveBase;
        if ($this->storageRemoveKeyByte !== null) $data['storage_remove_key_byte'] = $this->storageRemoveKeyByte;
        if ($this->storageRemoveRetValueByte !== null) $data['storage_remove_ret_value_byte'] = $this->storageRemoveRetValueByte;
        if ($this->storageWriteBase !== null) $data['storage_write_base'] = $this->storageWriteBase;
        if ($this->storageWriteEvictedByte !== null) $data['storage_write_evicted_byte'] = $this->storageWriteEvictedByte;
        if ($this->storageWriteKeyByte !== null) $data['storage_write_key_byte'] = $this->storageWriteKeyByte;
        if ($this->storageWriteValueByte !== null) $data['storage_write_value_byte'] = $this->storageWriteValueByte;
        if ($this->touchingTrieNode !== null) $data['touching_trie_node'] = $this->touchingTrieNode;
        if ($this->universalStateInitToAccountIdBase !== null) $data['universal_state_init_to_account_id_base'] = $this->universalStateInitToAccountIdBase;
        if ($this->universalStateInitToAccountIdByte !== null) $data['universal_state_init_to_account_id_byte'] = $this->universalStateInitToAccountIdByte;
        if ($this->utf16DecodingBase !== null) $data['utf16_decoding_base'] = $this->utf16DecodingBase;
        if ($this->utf16DecodingByte !== null) $data['utf16_decoding_byte'] = $this->utf16DecodingByte;
        if ($this->utf8DecodingBase !== null) $data['utf8_decoding_base'] = $this->utf8DecodingBase;
        if ($this->utf8DecodingByte !== null) $data['utf8_decoding_byte'] = $this->utf8DecodingByte;
        if ($this->validatorStakeBase !== null) $data['validator_stake_base'] = $this->validatorStakeBase;
        if ($this->validatorTotalStakeBase !== null) $data['validator_total_stake_base'] = $this->validatorTotalStakeBase;
        if ($this->writeMemoryBase !== null) $data['write_memory_base'] = $this->writeMemoryBase;
        if ($this->writeMemoryByte !== null) $data['write_memory_byte'] = $this->writeMemoryByte;
        if ($this->writeRegisterBase !== null) $data['write_register_base'] = $this->writeRegisterBase;
        if ($this->writeRegisterByte !== null) $data['write_register_byte'] = $this->writeRegisterByte;
        if ($this->yieldCreateBase !== null) $data['yield_create_base'] = $this->yieldCreateBase;
        if ($this->yieldCreateByte !== null) $data['yield_create_byte'] = $this->yieldCreateByte;
        if ($this->yieldCreateWithIdBase !== null) $data['yield_create_with_id_base'] = $this->yieldCreateWithIdBase;
        if ($this->yieldResumeBase !== null) $data['yield_resume_base'] = $this->yieldResumeBase;
        if ($this->yieldResumeByte !== null) $data['yield_resume_byte'] = $this->yieldResumeByte;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'alt_bn128_g1_multiexp_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'alt_bn128_g1_multiexp_element' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'alt_bn128_g1_sum_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'alt_bn128_g1_sum_element' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'alt_bn128_pairing_check_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'alt_bn128_pairing_check_element' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'bls12381_g1_multiexp_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'bls12381_g1_multiexp_element' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'bls12381_g2_multiexp_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'bls12381_g2_multiexp_element' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'bls12381_map_fp2_to_g2_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'bls12381_map_fp2_to_g2_element' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'bls12381_map_fp_to_g1_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'bls12381_map_fp_to_g1_element' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'bls12381_p1_decompress_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'bls12381_p1_decompress_element' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'bls12381_p1_sum_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'bls12381_p1_sum_element' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'bls12381_p2_decompress_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'bls12381_p2_decompress_element' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'bls12381_p2_sum_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'bls12381_p2_sum_element' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'bls12381_pairing_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'bls12381_pairing_element' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'contract_loading_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'contract_loading_bytes' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'ecrecover_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'ed25519_verify_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'ed25519_verify_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'keccak256_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'keccak256_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'keccak512_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'keccak512_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'log_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'log_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'ml_dsa_verify_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'ml_dsa_verify_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'p256_verify_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'p256_verify_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'promise_and_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'promise_and_per_promise' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'promise_return' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'read_cached_trie_node' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'read_memory_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'read_memory_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'read_register_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'read_register_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'ripemd160_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'ripemd160_block' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'sha256_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'sha256_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'sha3_256_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'sha3_256_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'sha3_384_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'sha3_384_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'sha3_512_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'sha3_512_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_has_key_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_has_key_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_iter_create_from_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_iter_create_prefix_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_iter_create_prefix_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_iter_create_range_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_iter_create_to_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_iter_next_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_iter_next_key_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_iter_next_value_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_large_read_overhead_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_large_read_overhead_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_read_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_read_key_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_read_value_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_remove_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_remove_key_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_remove_ret_value_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_write_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_write_evicted_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_write_key_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_write_value_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'touching_trie_node' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'universal_state_init_to_account_id_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'universal_state_init_to_account_id_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'utf16_decoding_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'utf16_decoding_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'utf8_decoding_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'utf8_decoding_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'validator_stake_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'validator_total_stake_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'write_memory_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'write_memory_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'write_register_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'write_register_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'yield_create_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'yield_create_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'yield_create_with_id_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'yield_resume_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'yield_resume_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'ExtCostsConfigView'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'alt_bn128_g1_multiexp_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'alt_bn128_g1_multiexp_element' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'alt_bn128_g1_sum_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'alt_bn128_g1_sum_element' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'alt_bn128_pairing_check_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'alt_bn128_pairing_check_element' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'bls12381_g1_multiexp_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'bls12381_g1_multiexp_element' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'bls12381_g2_multiexp_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'bls12381_g2_multiexp_element' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'bls12381_map_fp2_to_g2_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'bls12381_map_fp2_to_g2_element' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'bls12381_map_fp_to_g1_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'bls12381_map_fp_to_g1_element' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'bls12381_p1_decompress_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'bls12381_p1_decompress_element' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'bls12381_p1_sum_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'bls12381_p1_sum_element' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'bls12381_p2_decompress_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'bls12381_p2_decompress_element' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'bls12381_p2_sum_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'bls12381_p2_sum_element' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'bls12381_pairing_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'bls12381_pairing_element' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'contract_loading_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'contract_loading_bytes' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'ecrecover_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'ed25519_verify_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'ed25519_verify_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'keccak256_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'keccak256_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'keccak512_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'keccak512_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'log_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'log_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'ml_dsa_verify_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'ml_dsa_verify_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'p256_verify_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'p256_verify_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'promise_and_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'promise_and_per_promise' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'promise_return' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'read_cached_trie_node' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'read_memory_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'read_memory_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'read_register_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'read_register_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'ripemd160_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'ripemd160_block' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'sha256_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'sha256_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'sha3_256_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'sha3_256_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'sha3_384_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'sha3_384_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'sha3_512_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'sha3_512_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_has_key_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_has_key_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_iter_create_from_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_iter_create_prefix_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_iter_create_prefix_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_iter_create_range_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_iter_create_to_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_iter_next_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_iter_next_key_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_iter_next_value_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_large_read_overhead_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_large_read_overhead_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_read_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_read_key_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_read_value_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_remove_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_remove_key_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_remove_ret_value_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_write_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_write_evicted_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_write_key_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'storage_write_value_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'touching_trie_node' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'universal_state_init_to_account_id_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'universal_state_init_to_account_id_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'utf16_decoding_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'utf16_decoding_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'utf8_decoding_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'utf8_decoding_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'validator_stake_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'validator_total_stake_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'write_memory_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'write_memory_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'write_register_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'write_register_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'yield_create_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'yield_create_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'yield_create_with_id_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'yield_resume_base' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
    'yield_resume_byte' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearGas',
      'nullable' => false,
    ),
  ),
  'type' => 'object',
  'required' => 
  array (
  ),
), 'ExtCostsConfigView');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
