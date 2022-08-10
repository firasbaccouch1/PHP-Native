<?php

use PHP\View\View;

if (!function_exists('test2')) {
    function test2()
    {
        echo 'firas baccouch';
    }
}

if (!function_exists('base_path')) {
    function base_path()
    {
        return  dirname(__DIR__) . '/../';
    }
}
if (!function_exists('view_path')) {
    function view_path()
    {
        return base_path() . 'View/';
    }
}
if (!function_exists('view')) {
    function view($view, $params = [])
    {
        echo View::make($view, $params);
    }
}

if (!function_exists('abort404')) {
    function abort404($view)
    {
        echo View::makeError($view);
    }
}
