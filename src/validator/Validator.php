<?php

namespace PHP\validator;

use PHP\Http\Request;
use PHP\Support\Arr;
use PHP\validator\Rules\Email;

class Validator
{

    protected array $data = [];

    protected array $aliases = [];

    protected array $rules = [];

    protected array $errors =[];
    protected $class =[
        'required' => Required::class,
    ];
    protected ErrorBag $errorBag;


    public function errors()
    {
        
    }


    public function setRules(array $data)
    {
        $this->rules = $data;
    
    }



    public function make($data){
        $this->data = $data;
        $this->errorBag = new ErrorBag();
    return    $this->validate();
    }



    public function setAliases($aliases){
        $this->aliases = $aliases;
    }




    public function validate()
    {
        foreach ($this->rules as $filed => $rules) {
            return $rules;
        }
    }

}
