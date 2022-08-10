<?php

namespace App\Controller;

use PHP\view\view;

class HomeController
{

    public function index()
    {
        return view('Pages.Home');
    }
}
