<?php
if (!function_exists('test2')) {
    function test2()
    {
        echo 'firas';
    }
}

if (!function_exists('base_path')) {
    function base_path()
    {
        return  dirname(__DIR__) . '/../';
    }
}
