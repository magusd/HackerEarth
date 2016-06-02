<?php

class PalindromicString
{
    public function make($string)
    {
        $len = strlen($string);
        $steps = floor($len/2);
        $answer = 'YES';
        for($i = 0; $i<$len;$i++){
            if($string[$i] != $string[$len-1-$i]){
                $answer = 'NO';
                break;
            }
        }
        return $answer;
    }
}
