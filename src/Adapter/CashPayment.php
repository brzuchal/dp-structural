<?php


namespace Structural\Adapter;


class CashPayment implements CashPaymentInterface
{
    private $amountToPay;
    private $amountPayed;

    public function calculate() : void
    {
        $this->amountToPay = 10;
    }

    public function giveMoney(): void
    {
        $this->amountPayed = 10;
    }

    public function getBill(): int
    {
        return $this->amountPayed;
    }
}
