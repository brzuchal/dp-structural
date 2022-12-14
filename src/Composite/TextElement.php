<?php declare(strict_types=1);

namespace Structural\Composite;

class TextElement implements Renderable
{
    public function __construct(
        private readonly string $text
    ) {
    }

    public function render(): string
    {
        return $this->text;
    }
}
