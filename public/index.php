<?php

use Dotenv\Dotenv;
use PHP\Support\Hash;
use PHP\validator\ErrorBag;
use PHP\validator\Validator;

require_once __DIR__ . '/../src/Support/Helper.php';
require_once base_path() . 'vendor/autoload.php';
require_once base_path() . 'router/web.php';



$env = Dotenv::createImmutable(base_path());
$env->load();


app()->run();
//firas
//commit




$validator = new Validator();
$validator->setRules([
    'email' => 'required|email',
    'name' => 'required',

]);

//$validator->setAliases([
//   'password_confirmation' => 'Password confirmation'
//]);
$array = [
    'name' => 'firas',
    'email' => 'firas@gmail.com'
];

var_dump($validator->make($array));
//var_dump($validator->errors());
