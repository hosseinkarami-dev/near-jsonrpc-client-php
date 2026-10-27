<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * A transfer to a universal account while transfers to them are banned.
 */
final readonly class ActionsValidationErrorTransferToUniversalAccountNotAllowed implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionsValidationErrorTransferToUniversalAccountNotAllowedPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionsValidationErrorTransferToUniversalAccountNotAllowedPayload $transferToUniversalAccountNotAllowed
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->transferToUniversalAccountNotAllowed, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorTransferToUniversalAccountNotAllowedPayload',
  'nullable' => false,
), 'TransferToUniversalAccountNotAllowed');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionsValidationErrorTransferToUniversalAccountNotAllowed.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('TransferToUniversalAccountNotAllowed', $data)) throw new \InvalidArgumentException('Missing required field: TransferToUniversalAccountNotAllowed');
        $unknown = array_diff_key($data, array (
  'TransferToUniversalAccountNotAllowed' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionsValidationErrorTransferToUniversalAccountNotAllowed.');
        return new self(
            transferToUniversalAccountNotAllowed: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['TransferToUniversalAccountNotAllowed'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorTransferToUniversalAccountNotAllowedPayload',
  'nullable' => false,
), 'TransferToUniversalAccountNotAllowed')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['TransferToUniversalAccountNotAllowed'] = $this->transferToUniversalAccountNotAllowed;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'TransferToUniversalAccountNotAllowed' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorTransferToUniversalAccountNotAllowedPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'TransferToUniversalAccountNotAllowed',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'TransferToUniversalAccountNotAllowed',
    'tag' => 'TransferToUniversalAccountNotAllowed',
    'payload' => 'ActionsValidationErrorTransferToUniversalAccountNotAllowedPayload',
  ),
), 'ActionsValidationErrorTransferToUniversalAccountNotAllowed'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'TransferToUniversalAccountNotAllowed' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionsValidationErrorTransferToUniversalAccountNotAllowedPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'TransferToUniversalAccountNotAllowed',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'TransferToUniversalAccountNotAllowed',
    'tag' => 'TransferToUniversalAccountNotAllowed',
    'payload' => 'ActionsValidationErrorTransferToUniversalAccountNotAllowedPayload',
  ),
), 'ActionsValidationErrorTransferToUniversalAccountNotAllowed');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
