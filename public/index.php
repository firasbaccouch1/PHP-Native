<?php

use Dotenv\Dotenv;
use PHP\Support\Hash;
use PHP\validator\validate;

require_once __DIR__ . '/../src/Support/Helper.php';
require_once base_path() . 'vendor/autoload.php';
require_once base_path() . 'router/web.php';



$env = Dotenv::createImmutable(base_path());
$env->load();


app()->run();

$validator = new validate;
$validator->setRules([
    'username' => 'required|alpha',
    'email'    => 'email|required',
]);

var_dump($validator->make([
    'username' => 'ahmed',
    'email' => 'firas@gmailcom'
]));


