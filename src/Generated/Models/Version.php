<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generated\Models;

/**
 * Data structure for semver version and github tag or commit.
 */
final readonly class Version implements \Near\JsonRpc\Models\ModelJsonSerializable
{
    /** @var array<string, mixed> */
    private array $extra;

    public function __construct(
        /**
         * @var string
         */
        public string $build,
        /**
         * @var string
         */
        public string $commit,
        /**
         * @var string
         */
        public string $version,
        /**
         * @var string|null
         */
        public string|null $rustcVersion = null,
        /** @var array<string, mixed> */
        array $_extra = [],
    ) {
        $this->extra = $_extra;
        \Near\JsonRpc\Models\TypeGuard::assert($this->build, array (
  'type' => 'string',
), 'build');
        \Near\JsonRpc\Models\TypeGuard::assert($this->commit, array (
  'type' => 'string',
), 'commit');
        \Near\JsonRpc\Models\TypeGuard::assert($this->version, array (
  'type' => 'string',
), 'version');
        if ($this->rustcVersion !== null) \Near\JsonRpc\Models\TypeGuard::assert($this->rustcVersion, array (
  'default' => '',
  'type' => 'string',
), 'rustc_version');
    }

    public static function fromValue(mixed $value): self
    {
        if ($value instanceof self) return $value;
        if ($value instanceof \stdClass) return self::fromArray(get_object_vars($value));
        if (!is_array($value) || array_is_list($value)) throw new \InvalidArgumentException('Expected an object value for Version.');
        return self::fromArray($value);
    }

    /** @param array<string,mixed> $data */
    public static function fromArray(array $data): self
    {
        if (!array_key_exists('version', $data)) throw new \InvalidArgumentException('Missing required field: version');
        if (!array_key_exists('build', $data)) throw new \InvalidArgumentException('Missing required field: build');
        if (!array_key_exists('commit', $data)) throw new \InvalidArgumentException('Missing required field: commit');
        $extra = array_diff_key($data, array (
  'build' => true,
  'commit' => true,
  'rustc_version' => true,
  'version' => true,
));
        return new self(
            build: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['build'], array (
  'type' => 'string',
), 'build'),
            commit: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['commit'], array (
  'type' => 'string',
), 'commit'),
            version: \Near\JsonRpc\Models\ModelHydrator::hydrate($data['version'], array (
  'type' => 'string',
), 'version'),
            rustcVersion: array_key_exists('rustc_version', $data) ? \Near\JsonRpc\Models\ModelHydrator::hydrate($data['rustc_version'], array (
  'default' => '',
  'type' => 'string',
), 'rustc_version') : null,
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
        $data['build'] = $this->build;
        $data['commit'] = $this->commit;
        $data['version'] = $this->version;
        if ($this->rustcVersion !== null) $data['rustc_version'] = $this->rustcVersion;
        return (object) $data;
    }

    public function jsonSerialize(): \stdClass
    {
        $data = $this->jsonSerializeValue();
        \Near\JsonRpc\Models\JsonEncoder::assertNativeEncodingSafe(\Near\JsonRpc\Models\ModelHydrator::normalizeForJson($data, array (
  'properties' => 
  array (
    'build' => 
    array (
      'type' => 'string',
    ),
    'commit' => 
    array (
      'type' => 'string',
    ),
    'rustc_version' => 
    array (
      'default' => '',
      'type' => 'string',
    ),
    'version' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'version',
    1 => 'build',
    2 => 'commit',
  ),
  'type' => 'object',
), 'Version'));
        return $data;
    }

    public function jsonSerializeForEncoding(): mixed
    {
        return \Near\JsonRpc\Models\ModelHydrator::normalizeForJson($this->jsonSerializeValue(), array (
  'properties' => 
  array (
    'build' => 
    array (
      'type' => 'string',
    ),
    'commit' => 
    array (
      'type' => 'string',
    ),
    'rustc_version' => 
    array (
      'default' => '',
      'type' => 'string',
    ),
    'version' => 
    array (
      'type' => 'string',
    ),
  ),
  'required' => 
  array (
    0 => 'version',
    1 => 'build',
    2 => 'commit',
  ),
  'type' => 'object',
), 'Version');
    }

    public function toJson(): string { return \Near\JsonRpc\Models\JsonEncoder::encode($this); }
}
