<?php

namespace PHP\Support;

use ArrayAccess;
use PDO;

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
    public static function last($array, callable $callback = null, $default = null)
    {

        if (is_null($callback)) {

            return empty($array) ? value($default) : end($array);
        }

        return static::first(array_reverse($array, true), $callback, $default);
    }
    public static function first($array, callable $callback = null, $default = null)
    {

        if (is_null($callback)) {
            if (empty($array)) {
                return value($default);
            }
            foreach ($array as $item) {
                return $item;
            }
        }
        foreach ($array as $key => $value) {
            if (call_user_func($callback, $value, $key)) {
                return $value;
            }
        }
        return value($default);
    }

    public static function forget(&$array, $key)
    {
        $original = &$array;
        $keys = (array) $key;
        if (count($keys) === 0) {
            return false;
        }

        foreach ($keys as $key) {
            if (static::exists($array, $key)) {
                unset($array[$key]);

                continue;
            }
            $parts = explode('.', $key);
            $array = &$original;
            while (count($parts) > 1) {
                $part = array_shift($parts);

                if (isset($array[$part]) && is_array($array[$part])) {
                    $array = &$array[$part];
                } else {
                    continue 2;
                }
            }
            unset($array[array_shift($parts)]);
        }
    }
}
