<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Information about this epoch validators and next epoch validators
 */
final readonly class RpcValidatorResponse implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * Fishermen for the current epoch
         *
         * @var list<\Near\JsonRpc\Generated\Models\ValidatorStakeView>
         */
        public array $currentFishermen,
        /**
         * Proposals in the current epoch
         *
         * @var list<\Near\JsonRpc\Generated\Models\ValidatorStakeView>
         */
        public array $currentProposals,
        /**
         * Validators for the current epoch
         *
         * @var list<\Near\JsonRpc\Generated\Models\CurrentEpochValidatorInfo>
         */
        public array $currentValidators,
        /**
         * Epoch height
         *
         * @var int|string
         */
        public int|string $epochHeight,
        /**
         * Epoch start block height
         *
         * @var int|string
         */
        public int|string $epochStartHeight,
        /**
         * Fishermen for the next epoch
         *
         * @var list<\Near\JsonRpc\Generated\Models\ValidatorStakeView>
         */
        public array $nextFishermen,
        /**
         * Validators for the next epoch
         *
         * @var list<\Near\JsonRpc\Generated\Models\NextEpochValidatorInfo>
         */
        public array $nextValidators,
        /**
         * Kickout in the previous epoch
         *
         * @var list<\Near\JsonRpc\Generated\Models\ValidatorKickoutView>
         */
        public array $prevEpochKickout,
        /**
         * Per-validator rewards paid out at the start of the previous epoch.
         * For epoch E, this contains the rewards earned in epoch E-2 that were
         * added to validator and treasury balances at the first block of epoch
         * E-1 (via `ValidatorAccountsUpdate`).
         *
         * @var array<string, \Near\JsonRpc\Generated\Models\NearToken>|\stdClass|null
         */
        public array|\stdClass|null $validatorRewardPaidPrevEpoch = null,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->currentFishermen, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorStakeView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'current_fishermen');
        \Near\JsonRpc\Models\TypeGuard::assert($this->currentProposals, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorStakeView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'current_proposals');
        \Near\JsonRpc\Models\TypeGuard::assert($this->currentValidators, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CurrentEpochValidatorInfo',
    'nullable' => false,
  ),
  'type' => 'array',
), 'current_validators');
        \Near\JsonRpc\Models\TypeGuard::assert($this->epochHeight, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'epoch_height');
        \Near\JsonRpc\Models\TypeGuard::assert($this->epochStartHeight, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'epoch_start_height');
        \Near\JsonRpc\Models\TypeGuard::assert($this->nextFishermen, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorStakeView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'next_fishermen');
        \Near\JsonRpc\Models\TypeGuard::assert($this->nextValidators, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NextEpochValidatorInfo',
    'nullable' => false,
  ),
  'type' => 'array',
), 'next_validators');
        \Near\JsonRpc\Models\TypeGuard::assert($this->prevEpochKickout, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'prev_epoch_kickout');
        if ($this->validatorRewardPaidPrevEpoch !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->validatorRewardPaidPrevEpoch, array (
  'additionalProperties' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
    'nullable' => false,
  ),
  'default' => 
  array (
  ),
  'type' => 'object',
), 'validator_reward_paid_prev_epoch');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for RpcValidatorResponse.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('current_validators', $data)) throw new \InvalidArgumentException('Missing required field: current_validators');
        if (!array_key_exists('next_validators', $data)) throw new \InvalidArgumentException('Missing required field: next_validators');
        if (!array_key_exists('current_fishermen', $data)) throw new \InvalidArgumentException('Missing required field: current_fishermen');
        if (!array_key_exists('next_fishermen', $data)) throw new \InvalidArgumentException('Missing required field: next_fishermen');
        if (!array_key_exists('current_proposals', $data)) throw new \InvalidArgumentException('Missing required field: current_proposals');
        if (!array_key_exists('prev_epoch_kickout', $data)) throw new \InvalidArgumentException('Missing required field: prev_epoch_kickout');
        if (!array_key_exists('epoch_start_height', $data)) throw new \InvalidArgumentException('Missing required field: epoch_start_height');
        if (!array_key_exists('epoch_height', $data)) throw new \InvalidArgumentException('Missing required field: epoch_height');
        $extra = array_diff_key($data, array (
  'current_fishermen' => true,
  'current_proposals' => true,
  'current_validators' => true,
  'epoch_height' => true,
  'epoch_start_height' => true,
  'next_fishermen' => true,
  'next_validators' => true,
  'prev_epoch_kickout' => true,
  'validator_reward_paid_prev_epoch' => true,
));
        return new self(
            currentFishermen: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['current_fishermen'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorStakeView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'current_fishermen'),
            currentProposals: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['current_proposals'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorStakeView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'current_proposals'),
            currentValidators: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['current_validators'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CurrentEpochValidatorInfo',
    'nullable' => false,
  ),
  'type' => 'array',
), 'current_validators'),
            epochHeight: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['epoch_height'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'epoch_height'),
            epochStartHeight: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['epoch_start_height'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'epoch_start_height'),
            nextFishermen: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['next_fishermen'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorStakeView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'next_fishermen'),
            nextValidators: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['next_validators'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NextEpochValidatorInfo',
    'nullable' => false,
  ),
  'type' => 'array',
), 'next_validators'),
            prevEpochKickout: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['prev_epoch_kickout'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'prev_epoch_kickout'),
            validatorRewardPaidPrevEpoch: array_key_exists('validator_reward_paid_prev_epoch', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['validator_reward_paid_prev_epoch'], array (
  'additionalProperties' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
    'nullable' => false,
  ),
  'default' => 
  array (
  ),
  'type' => 'object',
), 'validator_reward_paid_prev_epoch') : null,
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
        $data['current_fishermen'] = $this->currentFishermen;
        $data['current_proposals'] = $this->currentProposals;
        $data['current_validators'] = $this->currentValidators;
        $data['epoch_height'] = $this->epochHeight;
        $data['epoch_start_height'] = $this->epochStartHeight;
        $data['next_fishermen'] = $this->nextFishermen;
        $data['next_validators'] = $this->nextValidators;
        $data['prev_epoch_kickout'] = $this->prevEpochKickout;
        if ($this->validatorRewardPaidPrevEpoch !== null) $data['validator_reward_paid_prev_epoch'] = $this->validatorRewardPaidPrevEpoch;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'current_fishermen' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorStakeView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'current_proposals' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorStakeView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'current_validators' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CurrentEpochValidatorInfo',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'epoch_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'epoch_start_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'next_fishermen' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorStakeView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'next_validators' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NextEpochValidatorInfo',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'prev_epoch_kickout' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'validator_reward_paid_prev_epoch' => 
    array (
      'additionalProperties' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
        'nullable' => false,
      ),
      'default' => 
      array (
      ),
      'type' => 'object',
    ),
  ),
  'required' => 
  array (
    0 => 'current_validators',
    1 => 'next_validators',
    2 => 'current_fishermen',
    3 => 'next_fishermen',
    4 => 'current_proposals',
    5 => 'prev_epoch_kickout',
    6 => 'epoch_start_height',
    7 => 'epoch_height',
  ),
  'type' => 'object',
), 'RpcValidatorResponse'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'current_fishermen' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorStakeView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'current_proposals' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorStakeView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'current_validators' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CurrentEpochValidatorInfo',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'epoch_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'epoch_start_height' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'next_fishermen' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorStakeView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'next_validators' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NextEpochValidatorInfo',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'prev_epoch_kickout' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ValidatorKickoutView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'validator_reward_paid_prev_epoch' => 
    array (
      'additionalProperties' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NearToken',
        'nullable' => false,
      ),
      'default' => 
      array (
      ),
      'type' => 'object',
    ),
  ),
  'required' => 
  array (
    0 => 'current_validators',
    1 => 'next_validators',
    2 => 'current_fishermen',
    3 => 'next_fishermen',
    4 => 'current_proposals',
    5 => 'prev_epoch_kickout',
    6 => 'epoch_start_height',
    7 => 'epoch_height',
  ),
  'type' => 'object',
), 'RpcValidatorResponse');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
