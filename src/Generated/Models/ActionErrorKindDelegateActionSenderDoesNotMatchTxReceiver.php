<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Receiver of the transaction doesn't match Sender of the delegate action
 */
final readonly class ActionErrorKindDelegateActionSenderDoesNotMatchTxReceiver implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionSenderDoesNotMatchTxReceiverPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionErrorKindDelegateActionSenderDoesNotMatchTxReceiverPayload $delegateActionSenderDoesNotMatchTxReceiver
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->delegateActionSenderDoesNotMatchTxReceiver, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDelegateActionSenderDoesNotMatchTxReceiverPayload',
  'nullable' => false,
), 'DelegateActionSenderDoesNotMatchTxReceiver');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionErrorKindDelegateActionSenderDoesNotMatchTxReceiver.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('DelegateActionSenderDoesNotMatchTxReceiver', $data)) throw new \InvalidArgumentException('Missing required field: DelegateActionSenderDoesNotMatchTxReceiver');
        $unknown = array_diff_key($data, array (
  'DelegateActionSenderDoesNotMatchTxReceiver' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionErrorKindDelegateActionSenderDoesNotMatchTxReceiver.');
        return new self(
            delegateActionSenderDoesNotMatchTxReceiver: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['DelegateActionSenderDoesNotMatchTxReceiver'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDelegateActionSenderDoesNotMatchTxReceiverPayload',
  'nullable' => false,
), 'DelegateActionSenderDoesNotMatchTxReceiver')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['DelegateActionSenderDoesNotMatchTxReceiver'] = $this->delegateActionSenderDoesNotMatchTxReceiver;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'DelegateActionSenderDoesNotMatchTxReceiver' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDelegateActionSenderDoesNotMatchTxReceiverPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'DelegateActionSenderDoesNotMatchTxReceiver',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'DelegateActionSenderDoesNotMatchTxReceiver',
    'tag' => 'DelegateActionSenderDoesNotMatchTxReceiver',
    'payload' => 'ActionErrorKindDelegateActionSenderDoesNotMatchTxReceiverPayload',
  ),
), 'ActionErrorKindDelegateActionSenderDoesNotMatchTxReceiver'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'DelegateActionSenderDoesNotMatchTxReceiver' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindDelegateActionSenderDoesNotMatchTxReceiverPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'DelegateActionSenderDoesNotMatchTxReceiver',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'DelegateActionSenderDoesNotMatchTxReceiver',
    'tag' => 'DelegateActionSenderDoesNotMatchTxReceiver',
    'payload' => 'ActionErrorKindDelegateActionSenderDoesNotMatchTxReceiverPayload',
  ),
), 'ActionErrorKindDelegateActionSenderDoesNotMatchTxReceiver');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
