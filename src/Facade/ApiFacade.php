<?php


namespace Structural\Facade;

class ApiFacade {
    protected $dowjones;
    protected $gpw;
    protected $nasdaq;

    function __construct($dowjonesAPI, $gpwAPI, $nasdaqAPI)
    {
        $this->dowjones = $dowjonesAPI;
        $this->gpw  = $gpwAPI;
        $this->nasdaq  = $nasdaqAPI;
    }

    function connect($refUrl, $nasToken, $dowToken)
    {
        $this->dowjones->Dconnect($dowToken, $refUrl);
        $this->gpw->polaczGPW($refUrl);
        $this->nasdaq->getNASDAQ($refUrl, $nasToken);
    }
}
