<?php


namespace Structural\Decorator\Example;


abstract class OrderDecorator implements OrderMeal
{

    protected $meal;

    public function __construct(OrderMeal $meal)
    {
        $this->meal = $meal;
    }
}
