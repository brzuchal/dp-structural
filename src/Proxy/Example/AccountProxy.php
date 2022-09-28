<?php


namespace Structural\Proxy\Example;


class AccountProxy extends RealPaypalAccount implements PaypalAccount
{
    public $counter = 0;


    public function getBalance(): int
    {
        // One for instance, only when getBalance is called.
        // There is a possibility to add extra conditions

        if ($this->balance === null) {
            $this->balance = parent::getBalance();
            $this->counter++;
        }

        return $this->balance;
    }
}
