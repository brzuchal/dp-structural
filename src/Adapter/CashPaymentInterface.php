<?php


namespace Structural\Adapter;


interface CashPaymentInterface
{
    public function calculate(): void;

    public function giveMoney(): void;

    public function getBill(): int;
}
