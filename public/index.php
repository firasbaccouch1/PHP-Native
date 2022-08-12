<?php

use Dotenv\Dotenv;
use PHP\Support\Hash;

require_once __DIR__ . '/../src/Support/Helper.php';
require_once base_path() . 'vendor/autoload.php';
require_once base_path() . 'router/web.php';



$env = Dotenv::createImmutable(base_path());
$env->load();


app()->run();

var_dump(Hash::make('firas'));
