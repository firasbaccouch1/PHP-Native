<?php

namespace PHP\validator;

class Messages
{

    public static function generate($rule,$filed){
        return str_replace('%s',$filed,$rule);
    } 
}
