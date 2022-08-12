<?php

namespace PHP;

use PHP\Http\Request;
use PHP\Http\Response;
use PHP\Http\Route;
use PHP\Support\Config;

class Application
{

    protected $requst;
    protected $responce;
    protected $route;
    public Config $config;

    public function __construct()
    {
        $this->requst = new Request;
        $this->responce = new Response;
        $this->route = new Route($this->requst, $this->responce);
        $this->config =  new Config($this->loadConfigurations());
    }

    protected function loadConfigurations()
    {
        foreach (scandir(config_path()) as $file) {
            if ($file == '.' || $file == '..') {
                continue;
            }
            $filename = explode('.', $file)[0];

            yield $filename => require config_path() . $file;
        }
    }
    public  function run()
    {
        $this->route->resolve();
    }
}
