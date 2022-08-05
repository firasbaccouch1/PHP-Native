<?php



require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../router/web.php';

use PHP\Http\Request;
use PHP\Http\Response;
use PHP\Http\Route;


$route = new Route(new Request, new Response);
$route->resolve();
