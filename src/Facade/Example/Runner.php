<?php


namespace Structural\Facade\Example;


class Runner
{
    public static function run()
    {
        $instaAPI = new dowjonesAPI();
        $facebookAPI = new FacebookAPI();
        $wykopAPI = new WykopAPI();

        $shareObj = new ApiFacade($instaAPI, $facebookAPI, $wykopAPI);

        $shareObj->share('https://wp.pl', 'My message title', 'my body');
    }
}
