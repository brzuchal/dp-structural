<?php


namespace Structural\Bridge;


class ButtonPress implements SwitchInterface
{
    public function enable(string $text)
    {
        return $text.' button';
    }
}
