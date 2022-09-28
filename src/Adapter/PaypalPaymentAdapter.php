<?php


namespace Structural\Adapter;


class PaypalPaymentAdapter implements CashPaymentInterface
{
    protected $paypal;

    public function __construct(PaypalInterface $paypal)
    {
        $this->paypal = $paypal;
    }

    public function calculate() : void
    {
        $this->paypal->calculate();
    }

    public function giveMoney() : void
    {
        $this->paypal->transferMoney();
    }

    public function getBill(): int
    {
        return $this->paypal->getEBill();
    }
}
