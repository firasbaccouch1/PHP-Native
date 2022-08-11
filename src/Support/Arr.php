<?php

namespace PHP\Support;

use ArrayAccess;

class Arr
{

    public static function only($array, $key)
    {

        return  array_intersect_key($array, array_flip((array)$key));
    }
    public static function accessible($value)
    {
        return is_array($value) || $value instanceof ArrayAccess;
    }
    public static function exists($array, $key)
    {
        if ($array instanceof ArrayAccess) {
            return $array->offsetExists($key);
        }
        return array_key_exists($key, $array);
    }
    public static function has($array, $key)
    {
        if (is_null($key)) {
            return false;
        }
        $keys = (array) $key;
        if ($keys == []) {
            return false;
        }
        foreach ($keys as $key) {
            $subarray = $array;
            if (static::exists($array, $key)) {
                continue;
            }
            foreach (explode('.', $key) as $segment) {
                if (static::accessible($subarray) && static::exists($subarray, $segment)) {
                    $subarray = $subarray[$segment];
                } else {
                    return false;
                }
            }
        }
        return true;
    }
}
