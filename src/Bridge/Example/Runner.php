<?php


namespace Structural\Bridge\Example;


class Runner extends Bridge
{
    public function get()
    {
        return $this->implementation->color('Color me!');
    }
}
