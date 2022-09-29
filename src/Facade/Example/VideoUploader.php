<?php declare(strict_types=1);

namespace Structural\Facade\Example;

interface VideoUploader
{
    public function upload(VideoFile $video): int;
}
