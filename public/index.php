<?php

use Dotenv\Dotenv;
use PHP\Support\Hash;
use PHP\validator\Validator;

require_once __DIR__ . '/../src/Support/Helper.php';
require_once base_path() . 'vendor/autoload.php';
require_once base_path() . 'router/web.php';



$env = Dotenv::createImmutable(base_path());
$env->load();


app()->run();

$validator = new Validator();
$validator->setRules([
    'name' => 'required',
    'email' => 'required|email',
]);

//$validator->setAliases([
 //   'password_confirmation' => 'Password confirmation'
//]);
$array =[ 
    'name' => 'firas',
    'email' => 'firas@gmail.com'
];

var_dump($validator->make($array)) ;


