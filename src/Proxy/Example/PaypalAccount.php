<?php


namespace Structural\Proxy\Example;


interface PaypalAccount
{
    public function transferMoney(int $amount);

    public function getBalance(): int;

    public function blockAccount(): void;
}
