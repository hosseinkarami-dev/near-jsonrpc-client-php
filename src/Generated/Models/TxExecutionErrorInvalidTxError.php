<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * An error happened during Transaction execution
 */
final readonly class TxExecutionErrorInvalidTxError implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    public function __construct(
        /**
         * @var \Near\JsonRpc\Generated\Models\InvalidTxError
         */
        public \Near\JsonRpc\Generated\Models\InvalidTxError $invalidTxError
    ) {
        \Near\JsonRpc\Models\TypeGuard::assert($this->invalidTxError, array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxError',
  'nullable' => false,
), 'InvalidTxError');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for TxExecutionErrorInvalidTxError.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('InvalidTxError', $data)) throw new \InvalidArgumentException('Missing required field: InvalidTxError');
        $unknown = array_diff_key($data, array (
  'InvalidTxError' => true,
));
        if ($unknown !== []) throw new \InvalidArgumentException('Unknown field ' . (string) array_key_first($unknown) . ' in TxExecutionErrorInvalidTxError.');
        return new self(
            invalidTxError: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['InvalidTxError'], array (
  'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxError',
  'nullable' => false,
), 'InvalidTxError')
        );
    }

    public static function fromJson(string $json): self
    {
        return self::fromArray(\Near\JsonRpc\Models\ModelHydrator::decodeJsonObject($json));
    }

    private function jsonSerializeValue(): \stdClass
    {
        $data = [];
        $data['InvalidTxError'] = $this->invalidTxError;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'type' => 'object',
  'properties' => 
  array (
    'InvalidTxError' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxError',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'InvalidTxError',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'InvalidTxError',
    'tag' => 'InvalidTxError',
    'payload' => 'InvalidTxError',
  ),
), 'TxExecutionErrorInvalidTxError'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'type' => 'object',
  'properties' => 
  array (
    'InvalidTxError' => 
    array (
      'phpClass' => '\\Near\\JsonRpc\\Generated\\Models\\InvalidTxError',
      'nullable' => false,
    ),
  ),
  'required' => 
  array (
    0 => 'InvalidTxError',
  ),
  'additionalProperties' => false,
  'x-php-union' => 
  array (
    'label' => 'InvalidTxError',
    'tag' => 'InvalidTxError',
    'payload' => 'InvalidTxError',
  ),
), 'TxExecutionErrorInvalidTxError');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
