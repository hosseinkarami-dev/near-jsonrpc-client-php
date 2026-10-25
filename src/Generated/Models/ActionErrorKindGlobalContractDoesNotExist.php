<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class ActionErrorKindGlobalContractDoesNotExist implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionErrorKindGlobalContractDoesNotExistPayload
         */
        public \Near\JsonRpc\Generated\Models\ActionErrorKindGlobalContractDoesNotExistPayload $globalContractDoesNotExist
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->globalContractDoesNotExist, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindGlobalContractDoesNotExistPayload',
  'nullable' => false,
), 'GlobalContractDoesNotExist');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionErrorKindGlobalContractDoesNotExist.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('GlobalContractDoesNotExist', $data)) throw new \InvalidArgumentException('Missing required field: GlobalContractDoesNotExist');
        $unknown = array_diff_key($data, array (
  'GlobalContractDoesNotExist' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionErrorKindGlobalContractDoesNotExist.');
        return new self(
            globalContractDoesNotExist: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['GlobalContractDoesNotExist'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindGlobalContractDoesNotExistPayload',
  'nullable' => false,
), 'GlobalContractDoesNotExist')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['GlobalContractDoesNotExist'] = $this->globalContractDoesNotExist;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'GlobalContractDoesNotExist' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindGlobalContractDoesNotExistPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'GlobalContractDoesNotExist',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'GlobalContractDoesNotExist',
    'tag' => 'GlobalContractDoesNotExist',
    'payload' => 'ActionErrorKindGlobalContractDoesNotExistPayload',
  ),
), 'ActionErrorKindGlobalContractDoesNotExist'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'GlobalContractDoesNotExist' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionErrorKindGlobalContractDoesNotExistPayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'GlobalContractDoesNotExist',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'GlobalContractDoesNotExist',
    'tag' => 'GlobalContractDoesNotExist',
    'payload' => 'ActionErrorKindGlobalContractDoesNotExistPayload',
  ),
), 'ActionErrorKindGlobalContractDoesNotExist');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
