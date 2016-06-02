<?php

class StringSum
{
    public function sum($string)
    {
        $len = strlen($string);
        $sum = 0;
        for($i=0;$i<$len; $i++) {
            $sum+=ord($string[$i]) - 96;
        }
        return $sum;

    }
}
