<?php

namespace PHP\validator;

class ErrorBag
{

    protected array $erros = [];

    public function add($field, $message)
    {
        $this->errors[$field][] = $message;
    }

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        }
    }
}
