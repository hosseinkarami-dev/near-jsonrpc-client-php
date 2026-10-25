<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class NonDelegateActionTransferToGasKey implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\TransferToGasKeyAction
         */
        public \Near\JsonRpc\Generated\Models\TransferToGasKeyAction $transferToGasKey
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->transferToGasKey, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TransferToGasKeyAction',
  'nullable' => false,
), 'TransferToGasKey');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for NonDelegateActionTransferToGasKey.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('TransferToGasKey', $data)) throw new \InvalidArgumentException('Missing required field: TransferToGasKey');
        $unknown = array_diff_key($data, array (
  'TransferToGasKey' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in NonDelegateActionTransferToGasKey.');
        return new self(
            transferToGasKey: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['TransferToGasKey'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TransferToGasKeyAction',
  'nullable' => false,
), 'TransferToGasKey')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['TransferToGasKey'] = $this->transferToGasKey;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'TransferToGasKey' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TransferToGasKeyAction',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'TransferToGasKey',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'TransferToGasKey',
    'tag' => 'TransferToGasKey',
    'payload' => 'TransferToGasKeyAction',
  ),
), 'NonDelegateActionTransferToGasKey'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'TransferToGasKey' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TransferToGasKeyAction',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'TransferToGasKey',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'TransferToGasKey',
    'tag' => 'TransferToGasKey',
    'payload' => 'TransferToGasKeyAction',
  ),
), 'NonDelegateActionTransferToGasKey');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
