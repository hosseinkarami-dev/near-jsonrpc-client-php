<?php
declare(strict_types=1);

namespace Near\JsonRpc\Generator;

/** Writes generated model files and removes obsolete outputs from that model directory. */
final class ModelGenerator
{
    /** @param array<string,string> $models */
    public function write(string $directory, array $models): array
    {
        if (!is_dir($directory) && !mkdir($directory, 0777, true) && !is_dir($directory)) {
            throw new \RuntimeException("Cannot create output directory: {$directory}");
        }
        $files = [];
        $expected = array_fill_keys(array_map(static fn(string $name): string => $name.'.php', array_keys($models)), true);
        foreach (glob(rtrim($directory, '/\\').'/*.php') ?: [] as $oldFile) {
            if (!isset($expected[basename($oldFile)]) && !unlink($oldFile)) {
                throw new \RuntimeException("Cannot remove stale generated model: {$oldFile}");
            }
        }
        foreach ($models as $class => $contents) {
            $path = rtrim($directory, '/\\').DIRECTORY_SEPARATOR.$class.'.php';
            if (file_put_contents($path, $contents, LOCK_EX) === false) {
                throw new \RuntimeException("Cannot write generated model: {$path}");
            }
            $files[] = $path;
        }
        return $files;
    }
}
