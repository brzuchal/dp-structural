<?php declare(strict_types=1);

namespace Structural\Facade\Example;

interface ThumbnailMaker
{
    public function make(VideoFile $video): string;
}
