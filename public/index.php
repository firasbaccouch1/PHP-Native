<?php

use Dotenv\Dotenv;
use PHP\Support\Arr;
use Symfony\Component\VarDumper\VarDumper;

require_once __DIR__ . '/../src/Support/Helper.php';
require_once base_path() . 'vendor/autoload.php';
require_once base_path() . 'router/web.php';



$env = Dotenv::createImmutable(base_path());
$env->load();


app()->run();


$array = [
    'username' => [
        'sql' => 'firas',
    ],
    'email'
];
Arr::forget($array, 'username.sql');
var_dump($array);
