<?php

namespace PHP\validator;

use PHP\Http\Request;
use PHP\validator\Rules\Email;

class validate
{

    protected $filed = [];
    protected $errors= [];
    protected static   $validateClass = [
        'required' =>  Request::class,
        'email' =>  Email::class,
    ];

    public function apply(array $data)
    {
       return $data;
    }

    public function errors()
    {
        return;
    }
    public function setRules()
    {
    }
    public function make(){

    }
}
