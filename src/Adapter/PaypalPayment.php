<?php


namespace Structural\Adapter;


class PaypalPayment implements PaypalInterface
{

    private $amountToPay = 0;
    private $amountPayed = 0;

    public function calculate()
    {
        $this->amountToPay = 10;
    }

    public function transferMoney()
    {
        $this->amountPayed = 10;
    }

    public function getEBill(): int
    {
        return $this->amountPayed - $this->amountToPay;
    }
}
