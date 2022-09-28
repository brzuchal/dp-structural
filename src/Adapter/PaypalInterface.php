<?php


namespace Structural\Adapter;


interface PaypalInterface
{
    public function calculate();

    public function transferMoney();

    public function getEBill(): int;
}
