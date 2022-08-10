<?php

namespace App\Controller;

use PHP\view\view;

class test
{

    public function index()
    {
        echo View::make('Pages.Home');
    }
}
