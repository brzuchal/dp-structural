<?php


namespace Structural\Bridge;


abstract class Bridge
{
    protected $implementation;

    public function __construct(SwitchInterface $action)
    {
        $this->implementation = $action;
    }

    public function setImplementation(SwitchInterface $action)
    {
        $this->implementation = $action;
    }

    abstract public function performAction();
}
