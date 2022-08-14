<?php

namespace PHP\validator;

use PHP\validator\Rules\Required;

class Validator
{

    protected array $data = [];

    protected array $aliases = [];

    protected array $rules = [];

    protected array $errors = [];
    protected static $class = [
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



    public function make($data)
    {
        $this->data = $data;
        $this->errorBag = new ErrorBag();
        return    $this->validate();
    }



    public function setAliases($aliases)
    {
        $this->aliases = $aliases;
    }




    public function validate()
    {
        foreach ($this->rules as $filed => $rules) {

            return   $firas =  new  static::$class['required']($filed, $this->data[$filed]);
            echo $firas;
            if ($this->class['required']) {
                return 'yes';
            }
        }
    }
}
