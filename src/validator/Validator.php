<?php

namespace PHP\validator;

use PHP\validator\Rules\Required;

class Validator
{

    protected array $data = [];

    protected array $aliases = [];

    protected array $rules = [];

    protected array $errors =[];
    protected static $class =[
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
       
          $firas =  new  static::$class['required'];
          return $firas->apply($filed,$this->data[$filed]);
            if($this->class['required']){
                return 'yes';
            }
        }
    }

}
