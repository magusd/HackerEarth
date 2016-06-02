<?php

class Prime
{
    protected $cache = [2,3,5];
    public function is_even($n){
        return $n % 2 == 0;
    }
    public function is_prime($n){

        if($n <= 1){
            return false;
        }
        if(in_array($n,$this->cache)){
            return true;
        }

        if(is_even($n)){
            return false;
        }


        $limit = floor($n/2);
        for($i = 0; $i<$limit;$i++){
            if(($n%$i)==0) return false;
        }
        var_dump("$n is prime\n");
        $cache[] = $n;

        return true;

    }
    public function check($number)
    {
        return $this->is_prime($number);
    }
}
