<?php


namespace Structural\Decorator\Example;


class CheeseBurgerOrder implements OrderMeal
{
    public function checkPrice(): int
    {
        return 40;
    }

    public function getComponents(): string
    {
        return 'CheeseBurger';
    }
}
