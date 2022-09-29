<?php declare(strict_types=1);

namespace Structural\Facade\Example;

interface VideoPublisher
{
    public function publish(int $id, string $thumbnail): bool;
}
