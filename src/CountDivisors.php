<?php

class CountDivisors
{
    public function make($args)
    {
        $args = explode(' ',$args);
        $divisors = 0;
        for($i = $args[0] ; $i <= $args[1]; $i++){
            if(($i % $args[2]) == 0 ) $divisors++;
        }
        return $divisors;
    }
}
