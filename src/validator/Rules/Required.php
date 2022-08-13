<?php

namespace PHP\validator\Rules;

use PHP\validator\Rules\Contract\Rule;

class Required implements Rule

{   
       public  $array= [];

    public function __toString()
    {
        return '%s is required and cannot be empty';
    }
    public function __construct($field,$value)
    {
        'yes';
    }

    public  function apply($field, $value, $data = [])
    {
         !empty($value);
    }
}
