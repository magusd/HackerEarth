<?php

class FindProduct
{


    public function make($n, $numbers)
    {
        $numbers = explode(' ',$numbers);
        $product = 1;
        for($i = 0 ; $i < count($numbers) ; $i++){
            $product= ($product * $numbers[$i]) % (pow(10,9)+7);

        }
        return $product;
    }


}
