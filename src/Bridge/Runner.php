<?php


namespace Structural\Bridge;


class Runner extends Bridge
{
    public function performAction()
    {
        return $this->implementation->enable('Run by: ');
    }
}
