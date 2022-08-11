<?php

use Dotenv\Dotenv;
use PHP\Support\Arr;

require_once __DIR__ . '/../src/Support/Helper.php';
require_once base_path() . 'vendor/autoload.php';
require_once base_path() . 'router/web.php';



$env = Dotenv::createImmutable(base_path());
$env->load();


app()->run();
$array = [
    'username' => [
        'firas' => [
            'fares' => 'sql'
        ]
    ],
    'email' => 'test@gmail.com'
];
var_dump(Arr::has($array, 'username.firas.fares'));
