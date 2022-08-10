<?php
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
        return base_path() . '/view';
    }
}
