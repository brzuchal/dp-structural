<?php


namespace Structural\Bridge;


class UseRemote implements SwitchInterface
{
    public function enable(string $text)
    {
        return $text.' remote';
    }
}
