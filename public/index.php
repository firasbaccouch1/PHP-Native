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
    'username' => ['firas' => ['Sql' => 'yes im here']]
];


Arr::set($array, 'username.firas.Sql', 'firas here');
var_dump($array);
