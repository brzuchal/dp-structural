<?php


namespace Structural\Facade\Tests;


use PHPUnit\Framework\TestCase;
use Structural\Facade\Runner;

class DecoratorTest extends TestCase
{
    public function testDisplayOnConsole()
    {
        Runner::run();

        self::assertTrue(true);
    }


}
