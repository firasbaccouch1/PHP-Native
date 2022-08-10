<?php

namespace App\Controller;

use PHP\view\view;

class HomeController
{

    public function index()
    {
        return View::make('Pages.Home');
    }
}
