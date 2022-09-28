<?php


namespace Structural\Facade;


class Runner
{
    public static function run()
    {
        $dowjonesAPI = new dowjonesAPI();
        $gpwAPI = new gpwAPI();
        $NASDAQApi = new NASDAQApi();

        $shareObj = new ApiFacade($dowjonesAPI, $gpwAPI, $NASDAQApi);

        $shareObj->connect('https://wp.pl', 'nas', 'dow');
    }
}
