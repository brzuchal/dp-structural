<?php


namespace Structural\Flyweight\Example;


interface FlyweightInterface
{
    public function render(string $extrinsicState): string;
}
