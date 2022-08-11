<?php

use App\Controller\HomeController;

use PHP\Http\Route;

Route::get('/', [HomeController::class, 'index']);
//firas