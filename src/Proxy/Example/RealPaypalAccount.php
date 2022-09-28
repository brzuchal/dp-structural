<?php


namespace Structural\Proxy\Example;


class RealPaypalAccount implements PaypalAccount
{
    private $transactions = [];

    protected $balance;

    public function transferMoney(int $amount)
    {
        $this->transactions[] = $amount;
    }

    public function getBalance(): int
    {
        // method get balance is very expensive. Make proxy to overwrite.

        return array_sum($this->transactions);
    }

    public function blockAccount(): void
    {
        echo 'account blocked';
    }
}
