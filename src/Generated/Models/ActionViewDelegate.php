<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Generated typed OpenAPI object model.
 */
final readonly class ActionViewDelegate implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\ActionViewDelegatePayload
         */
        public \Near\JsonRpc\Generated\Models\ActionViewDelegatePayload $delegate
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->delegate, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewDelegatePayload',
  'nullable' => false,
), 'Delegate');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for ActionViewDelegate.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('Delegate', $data)) throw new \InvalidArgumentException('Missing required field: Delegate');
        $unknown = array_diff_key($data, array (
  'Delegate' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in ActionViewDelegate.');
        return new self(
            delegate: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['Delegate'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewDelegatePayload',
  'nullable' => false,
), 'Delegate')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['Delegate'] = $this->delegate;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'Delegate' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewDelegatePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'Delegate',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'Delegate',
    'tag' => 'Delegate',
    'payload' => 'ActionViewDelegatePayload',
  ),
), 'ActionViewDelegate'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'Delegate' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\ActionViewDelegatePayload',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'Delegate',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'Delegate',
    'tag' => 'Delegate',
    'payload' => 'ActionViewDelegatePayload',
  ),
), 'ActionViewDelegate');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
