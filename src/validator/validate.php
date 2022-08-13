<?php

namespace PHP\validator;

use PHP\Http\Request;
use PHP\Support\Arr;
use PHP\validator\Rules\Email;

class validate
{

    protected $filed = [];
    protected $errors= [];
    protected $rules = [];
    protected $aliases = [];


    public function apply(array $filed)
    {
        $this->filed = $filed;
        
    }

    public function errors()
    {
        
    }
    public function setRules(array $data)
    {
        $this->rules = $data;
    }
    public function make($data){
       if(!is_array($data)){
        return null;
       }
       foreach ($data as $key => $value) {
            
       }
    }
    public function setAliases($aliases){
        $this->aliases = $aliases;
    }

}
