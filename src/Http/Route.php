<?php

namespace PHP\Http;

use PHP\Http\Request;
use PHP\Http\Response;

class Route
{

    public $request;
    public $response;

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }


    public static array $routes = [];


    public static function get($route, $action)
    {
        self::$routes['get'][$route] = $action;
    }

    public static function post($route, $action)
    {
        self::$routes['post'][$route] = $action;
    }

    public function resolve()
    {
        $method = $this->request->method();
        $path   = $this->request->path();
        $action = self::$routes[$method][$path] ?? false;

        if (is_callable($action)) {
            call_user_func_array($action, []);
        }
        if (is_array($action)) {
            call_user_func_array([new $action[0], $action[1]], []);
        }
    }
}
