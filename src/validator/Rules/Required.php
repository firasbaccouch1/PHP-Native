<?php

namespace PHP\validator\Rules;

use PHP\validator\Rules\Contract\Rule;

class Required implements Rule

{   
    

    public function __toString()
    {
        return 'yesss';
    }

    public  function apply($field, $value, $data = [])
    {
      return  'firas';
    }
}
