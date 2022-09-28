<?php


namespace Structural\Facade\Example;


class FacebookAPI
{
    public function share($url)
    {
        var_dump('Shared on Facebook wall:'.$url);
    }
}
