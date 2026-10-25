<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class ActionViewTransfer implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionViewTransferPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionViewTransferPayload $transfer
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->transfer, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewTransferPayload',
  'nullable' => false,
), 'Transfer');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionViewTransfer.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('Transfer', $data)) throw new \InvalidArgumentException('Missing required field: Transfer');
        $unknown = array_diff_key($data, array (
  'Transfer' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionViewTransfer.');
        return new self(
            transfer: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['Transfer'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewTransferPayload',
  'nullable' => false,
), 'Transfer')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['Transfer'] = $this->transfer;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'Transfer' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewTransferPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'Transfer',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'Transfer',
    'tag' => 'Transfer',
    'payload' => 'ActionViewTransferPayload',
  ),
), 'ActionViewTransfer'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'Transfer' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewTransferPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'Transfer',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'Transfer',
    'tag' => 'Transfer',
    'payload' => 'ActionViewTransferPayload',
  ),
), 'ActionViewTransfer');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
