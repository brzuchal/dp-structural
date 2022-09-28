<?php


namespace Structural\Bridge\Example;


class BlueText implements ColorInterface
{
    public function color(string $text)
    {
        return sprintf('<p style="color: blue">%s</p>', $text);
    }
}
