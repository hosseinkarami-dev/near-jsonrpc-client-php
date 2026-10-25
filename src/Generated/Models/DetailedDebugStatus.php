<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class DetailedDebugStatus implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var int|string
         */
        public int|string $blockProductionDelayMillis,
        /**
         * @var list<\Near\JsonRpc\Generated\Models\CatchupStatusView>
         */
        public array $catchupStatus,
        /**
         * @var \Near\JsonRpc\Generated\Models\BlockStatusView
         */
        public \Near\JsonRpc\Generated\Models\BlockStatusView $currentHeadStatus,
        /**
         * @var \Near\JsonRpc\Generated\Models\BlockStatusView
         */
        public \Near\JsonRpc\Generated\Models\BlockStatusView $currentHeaderHeadStatus,
        /**
         * @var \Near\JsonRpc\Generated\Models\NetworkInfoView
         */
        public \Near\JsonRpc\Generated\Models\NetworkInfoView $networkInfo,
        /**
         * @var string
         */
        public string $syncStatus,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->blockProductionDelayMillis, array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'block_production_delay_millis');
        \Near\JsonRpc\Models\TypeGuard::assert($this->catchupStatus, array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CatchupStatusView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'catchup_status');
        \Near\JsonRpc\Models\TypeGuard::assert($this->currentHeadStatus, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockStatusView',
  'nullable' => false,
), 'current_head_status');
        \Near\JsonRpc\Models\TypeGuard::assert($this->currentHeaderHeadStatus, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockStatusView',
  'nullable' => false,
), 'current_header_head_status');
        \Near\JsonRpc\Models\TypeGuard::assert($this->networkInfo, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NetworkInfoView',
  'nullable' => false,
), 'network_info');
        \Near\JsonRpc\Models\TypeGuard::assert($this->syncStatus, array (
  'type' => 'string',
), 'sync_status');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for DetailedDebugStatus.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('network_info', $data)) throw new \InvalidArgumentException('Missing required field: network_info');
        if (!array_key_exists('sync_status', $data)) throw new \InvalidArgumentException('Missing required field: sync_status');
        if (!array_key_exists('catchup_status', $data)) throw new \InvalidArgumentException('Missing required field: catchup_status');
        if (!array_key_exists('current_head_status', $data)) throw new \InvalidArgumentException('Missing required field: current_head_status');
        if (!array_key_exists('current_header_head_status', $data)) throw new \InvalidArgumentException('Missing required field: current_header_head_status');
        if (!array_key_exists('block_production_delay_millis', $data)) throw new \InvalidArgumentException('Missing required field: block_production_delay_millis');
        $extra = array_diff_key($data, array (
  'block_production_delay_millis' => true,
  'catchup_status' => true,
  'current_head_status' => true,
  'current_header_head_status' => true,
  'network_info' => true,
  'sync_status' => true,
));
        return new self(
            blockProductionDelayMillis: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['block_production_delay_millis'], array (
  'format' => 'uint64',
  'minimum' => 0,
  'type' => 'integer',
), 'block_production_delay_millis'),
            catchupStatus: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['catchup_status'], array (
  'items' => 
  array (
    'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CatchupStatusView',
    'nullable' => false,
  ),
  'type' => 'array',
), 'catchup_status'),
            currentHeadStatus: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['current_head_status'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockStatusView',
  'nullable' => false,
), 'current_head_status'),
            currentHeaderHeadStatus: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['current_header_head_status'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockStatusView',
  'nullable' => false,
), 'current_header_head_status'),
            networkInfo: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['network_info'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NetworkInfoView',
  'nullable' => false,
), 'network_info'),
            syncStatus: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['sync_status'], array (
  'type' => 'string',
), 'sync_status'),
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
        $data['block_production_delay_millis'] = $this->blockProductionDelayMillis;
        $data['catchup_status'] = $this->catchupStatus;
        $data['current_head_status'] = $this->currentHeadStatus;
        $data['current_header_head_status'] = $this->currentHeaderHeadStatus;
        $data['network_info'] = $this->networkInfo;
        $data['sync_status'] = $this->syncStatus;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'block_production_delay_millis' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'catchup_status' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CatchupStatusView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'current_head_status' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockStatusView',
      'nullable' => false,
    ),
    'current_header_head_status' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockStatusView',
      'nullable' => false,
    ),
    'network_info' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NetworkInfoView',
      'nullable' => false,
    ),
    'sync_status' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'network_info',
    1 => 'sync_status',
    2 => 'catchup_status',
    3 => 'current_head_status',
    4 => 'current_header_head_status',
    5 => 'block_production_delay_millis',
  ),
  'type' => 'object',
), 'DetailedDebugStatus'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'block_production_delay_millis' => 
    array (
      'format' => 'uint64',
      'minimum' => 0,
      'type' => 'integer',
    ),
    'catchup_status' => 
    array (
      'items' => 
      array (
        'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\CatchupStatusView',
        'nullable' => false,
      ),
      'type' => 'array',
    ),
    'current_head_status' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockStatusView',
      'nullable' => false,
    ),
    'current_header_head_status' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\BlockStatusView',
      'nullable' => false,
    ),
    'network_info' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\NetworkInfoView',
      'nullable' => false,
    ),
    'sync_status' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'network_info',
    1 => 'sync_status',
    2 => 'catchup_status',
    3 => 'current_head_status',
    4 => 'current_header_head_status',
    5 => 'block_production_delay_millis',
  ),
  'type' => 'object',
), 'DetailedDebugStatus');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
