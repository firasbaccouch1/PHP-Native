<?php

namespace PHP\Support;

class Hash
{

    public static function password($value)
    {

        return password_hash($value, PASSWORD_BCRYPT);
    }

    public static function check($value, $HashedValue)
    {

        return password_verify($value, $HashedValue);
    }


    public static function make($value)
    {
        return sha1($value . time());
    }
}
