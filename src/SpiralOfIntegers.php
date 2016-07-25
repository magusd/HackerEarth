<?php

class SpiralOfIntegers
{


    public function make()
    {
        $n = 4;
        $max = pow($n,2);

        $corners=0;
        $i = 0;
        while($max > 0){
            $max-= ($i* ($n-1));
            $i++;
            $corners+= $max;
            echo $max;
        }
        echo $corners % (pow(10,9)+9);
        echo PHP_EOL;
    }


}


$p = new SpiralOfIntegers();

$p->make();