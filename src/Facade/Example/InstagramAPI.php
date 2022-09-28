<?php


namespace Structural\Facade\Example;


class InstagramAPI
{
    public function insta($status, $url)
    {
        var_dump('Posted on insta:'.$status.' from:'.$url);
    }
}
