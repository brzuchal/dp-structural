<?php


namespace Structural\Adapter\Example;


interface EBookInterface
{
    public function unlock();

    public function pressNext();

    public function getPage(): array;
}
