<?php

namespace PHP;

use PHP\Http\Request;
use PHP\Http\Response;
use PHP\Http\Route;

class Application
{

    protected $requst;
    protected $responce;
    protected $route;

    public function __construct()
    {
        $this->requst = new Request;
        $this->responce = new Response;
        $this->route = new Route($this->requst, $this->responce);
    }


    public  function run()
    {
        $this->route->resolve();
    }
}
