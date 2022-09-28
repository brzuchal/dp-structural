<?php


namespace Structural\Tests\Adapter;


use PHPUnit\Framework\TestCase;
use Structural\Adapter\CashPayment;
use Structural\Adapter\PaypalPayment;
use Structural\Adapter\PaypalPaymentAdapter;

class AdapterTest extends TestCase
{
    public function testClassicPayment()
    {
        $payment = new CashPayment();
        $payment->calculate();
        $payment->giveMoney();

        $this->assertEquals(10, $payment->getBill());
    }

    public function testKindle()
    {
        $paypalPayment = new PaypalPayment();
        $payment = new PaypalPaymentAdapter($paypalPayment);

        $payment->calculate();
        $payment->giveMoney();

        $this->assertEquals(0, $payment->getBill());
    }
}
