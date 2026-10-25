<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * The execution has failed with the given error.
 */
final readonly class FinalExecutionStatusFailure implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\TxExecutionError
         */
        public \Near\JsonRpc\Generated\Models\TxExecutionError $failure
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->failure, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TxExecutionError',
  'nullable' => false,
), 'Failure');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for FinalExecutionStatusFailure.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('Failure', $data)) throw new \InvalidArgumentException('Missing required field: Failure');
        $unknown = array_diff_key($data, array (
  'Failure' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in FinalExecutionStatusFailure.');
        return new self(
            failure: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['Failure'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TxExecutionError',
  'nullable' => false,
), 'Failure')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['Failure'] = $this->failure;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'Failure' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TxExecutionError',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'Failure',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'Failure',
    'tag' => 'Failure',
    'payload' => 'TxExecutionError',
  ),
), 'FinalExecutionStatusFailure'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'Failure' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\TxExecutionError',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'Failure',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'Failure',
    'tag' => 'Failure',
    'payload' => 'TxExecutionError',
  ),
), 'FinalExecutionStatusFailure');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
