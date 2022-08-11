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
    'username',
    'email'
];
var_dump(Arr::last($array, function ($item, $key) {
    var_dump($item . $key);
}));
