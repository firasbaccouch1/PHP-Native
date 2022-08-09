<?php

use App\Controller\test;
use PHP\Http\Route;

Route::get('/', [test::class, 'index']);
