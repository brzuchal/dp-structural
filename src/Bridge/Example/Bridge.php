<?php


namespace Structural\Bridge\Example;


abstract class Bridge
{
    protected $implementation;

    public function __construct(ColorInterface $printer)
    {
        $this->implementation = $printer;
    }

    public function setImplementation(ColorInterface $printer)
    {
        $this->implementation = $printer;
    }

    abstract public function get();
}
