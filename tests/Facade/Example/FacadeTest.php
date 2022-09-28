<?php


namespace Structural\Facade\Tests\Example;


use PHPUnit\Framework\TestCase;
use Structural\Facade\Example\Runner;

class DecoratorTest extends TestCase
{
    public function testDisplayOnConsole()
    {
        Runner::run();

        self::assertTrue(true);
    }


}
