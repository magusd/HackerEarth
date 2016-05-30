<?php

class Factorial
{
    public function make($input)
    {
        if($input == 1) return 1;

        return $input * $this->make($input-1);
    }
}
