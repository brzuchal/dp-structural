<?php


namespace Structural\Bridge\Example;


class RedText implements ColorInterface
{
    public function color(string $text)
    {
        return sprintf('<p style="color: red">%s</p>', $text);
    }
}
