<?php


namespace Structural\Facade\Example;

class ApiFacade {
    protected $insta;
    protected $fb;
    protected $wykop;

    function __construct($instaAPI, $FacebookAPI, $WykopAPI)
    {
        $this->insta = $instaAPI;
        $this->fb  = $FacebookAPI;
        $this->wykop  = $WykopAPI;
    }

    function share($url, $title, $body)
    {
        $this->insta->insta($body, $url);
        $this->fb->share($url);
        $this->wykop->wykop($url, $title);
    }
}
