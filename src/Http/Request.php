<?php

namespace PHP\Http;

class Request
{

    public function path()
    {
        $url  =  $_SERVER['REQUEST_URI'];
        return str_contains($url, '?') ? explode('?', $url)[0] : $url;
    }
    public function method()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}
