<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class ActionViewDelegatePayload implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\DelegateAction
         */
        public \Near\JsonRpc\Generated\Models\DelegateAction $delegateAction,
        /**
         * @var \Near\JsonRpc\Generated\Models\Signature
         */
        public \Near\JsonRpc\Generated\Models\Signature $signature,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->delegateAction, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DelegateAction',
  'nullable' => false,
), 'delegate_action');
        \Near\JsonRpc\Models\TypeGuard::assert($this->signature, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Signature',
  'nullable' => false,
), 'signature');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionViewDelegatePayload.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('delegate_action', $data)) throw new \InvalidArgumentException('Missing required field: delegate_action');
        if (!array_key_exists('signature', $data)) throw new \InvalidArgumentException('Missing required field: signature');
        $extra = array_diff_key($data, array (
  'delegate_action' => true,
  'signature' => true,
));
        return new self(
            delegateAction: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['delegate_action'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DelegateAction',
  'nullable' => false,
), 'delegate_action'),
            signature: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['signature'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Signature',
  'nullable' => false,
), 'signature'),
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
        $data['delegate_action'] = $this->delegateAction;
        $data['signature'] = $this->signature;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'delegate_action' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DelegateAction',
      'nullable' => false,
    ),
    'signature' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Signature',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'delegate_action',
    1 => 'signature',
  ),
  'type' => 'object',
), 'ActionViewDelegatePayload'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'delegate_action' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\DelegateAction',
      'nullable' => false,
    ),
    'signature' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\Signature',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'delegate_action',
    1 => 'signature',
  ),
  'type' => 'object',
), 'ActionViewDelegatePayload');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
