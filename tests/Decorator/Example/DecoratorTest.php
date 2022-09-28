<?php


namespace Structural\Tests\Decorator\Example;


use PHPUnit\Framework\TestCase;
use Structural\Decorator\Example\CheeseBurgerOrder;
use Structural\Decorator\Example\ExtraDrink;

class DecoratorTest extends TestCase
{
    public function testCanCalculatePriceForBasicDoubleRoomBooking()
    {
        $order = new CheeseBurgerOrder();

        $this->assertEquals(40, $order->checkPrice());
        $this->assertEquals('CheeseBurger', $order->getComponents());
    }

    public function testPriceAndComponentsWithExtraDrink()
    {
        $order = new CheeseBurgerOrder();
        $order = new ExtraDrink($order);

        $this->assertEquals(50, $order->checkPrice());
        $this->assertEquals('CheeseBurger with extra drink', $order->getComponents());
    }
}
