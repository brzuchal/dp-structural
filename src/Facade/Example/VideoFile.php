<?php declare(strict_types=1);

namespace Structural\Facade\Example;

class VideoFile
{
    public function __construct(
        public readonly string $filePath,
    ) {
    }
}
