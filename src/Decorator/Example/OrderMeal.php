<?php


namespace Structural\Decorator\Example;


interface OrderMeal
{
    public function checkPrice(): int;

    public function getComponents(): string;
}
