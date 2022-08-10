<?php

use PHP\Http\Request;
use PHP\Http\Response;

require_once __DIR__ . '/../src/Support/Helper.php';
require_once base_path() . 'vendor/autoload.php';
require_once base_path() . 'router/web.php';

use PHP\Http\Route;

$dotenv = new Dotenv;
$dotenv::createImmutable(base_path());
$dotenv->load();
$requst = new Request;
$responce = new Response;
$routesss = new Route($requst, $responce);
$routesss->resolve();
