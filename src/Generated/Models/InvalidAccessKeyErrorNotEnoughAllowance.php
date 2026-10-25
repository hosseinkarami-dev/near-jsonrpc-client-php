<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Access Key does not have enough allowance to cover transaction cost
 */
final readonly class InvalidAccessKeyErrorNotEnoughAllowance implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorNotEnoughAllowancePayload
         */
        public \Near\JsonRpc\Generated\Models\InvalidAccessKeyErrorNotEnoughAllowancePayload $notEnoughAllowance
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->notEnoughAllowance, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidAccessKeyErrorNotEnoughAllowancePayload',
  'nullable' => false,
), 'NotEnoughAllowance');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for InvalidAccessKeyErrorNotEnoughAllowance.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('NotEnoughAllowance', $data)) throw new \InvalidArgumentException('Missing required field: NotEnoughAllowance');
        $unknown = array_diff_key($data, array (
  'NotEnoughAllowance' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in InvalidAccessKeyErrorNotEnoughAllowance.');
        return new self(
            notEnoughAllowance: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['NotEnoughAllowance'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidAccessKeyErrorNotEnoughAllowancePayload',
  'nullable' => false,
), 'NotEnoughAllowance')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['NotEnoughAllowance'] = $this->notEnoughAllowance;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'NotEnoughAllowance' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidAccessKeyErrorNotEnoughAllowancePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'NotEnoughAllowance',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'NotEnoughAllowance',
    'tag' => 'NotEnoughAllowance',
    'payload' => 'InvalidAccessKeyErrorNotEnoughAllowancePayload',
  ),
), 'InvalidAccessKeyErrorNotEnoughAllowance'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'NotEnoughAllowance' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidAccessKeyErrorNotEnoughAllowancePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'NotEnoughAllowance',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'NotEnoughAllowance',
    'tag' => 'NotEnoughAllowance',
    'payload' => 'InvalidAccessKeyErrorNotEnoughAllowancePayload',
  ),
), 'InvalidAccessKeyErrorNotEnoughAllowance');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
