<?php

namespace PHP\validator\Rules\Contract;

interface  Rule extends \Stringable
{
    public function apply($field, $value, $data = []);
}
