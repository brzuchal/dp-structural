<?php


namespace Structural\Decorator\Example;


class ExtraDrink extends OrderDecorator
{
    private const PRICE = 10;

    public function checkPrice(): int
    {
        return $this->meal->checkPrice() + self::PRICE;
    }

    public function getComponents(): string
    {
        return $this->meal->getComponents() . ' with extra drink';
    }
}
