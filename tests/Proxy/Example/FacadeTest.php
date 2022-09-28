<?php


namespace Structural\Tests\Facade\Example;


use PHPUnit\Framework\TestCase;
use Structural\Facade\Runner;
use Structural\Proxy\Example\AccountProxy;
use Structural\Proxy\Example\RealPaypalAccount;

class DecoratorTest extends TestCase
{
    public function testProxy()
    {
        $proxy = new AccountProxy();

        $proxy->transferMoney(30);
        $proxy->transferMoney(20);

        $this->assertEquals(50, $proxy->getBalance());
        $this->assertEquals(50, $proxy->getBalance());
        $this->assertEquals(50, $proxy->getBalance());

        $this->assertEquals(1, $proxy->counter);

    }


}
