<?php

namespace PHP\Http;

use PHP\Http\Request;
use PHP\Http\Response;

class Route
{
    protected  $request;
    protected  $response;

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }


    protected  static array $routes = [];



    public static function get($url, $action)
    {
        self::$routes['get'][$url] = $action;
    }

    public static function post($url, $action)
    {
        self::$routes['post'][$url] = $action;
    }

    public function resolve()
    {
        $method = $this->request->method();
        $path = $this->request->path();
        $action =   self::$routes[$method][$path] ?? false;
        if (!$action) {
            return abort404('error');
        }
        if (!array_key_exists($path, self::$routes[$method])) {
            return abort404('error');
        }
        if (is_callable($action)) {
            call_user_func_array($action, []);
        }
        if (is_array($action)) {
            $controller = new $action[0];
            $method = $action[1];

            call_user_func_array([$controller, $method], []);
        }
    }
}
